<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #D2D2D2;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
}
#users {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 99%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 10px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  padding-right: 150px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

.clock {
	margin-left: 0px;
  	padding-left: 0px;
    position: absolute;
    top: 5%;
    left: 83%;
    transform: translateX(-50%) translateY(-50%);
    color: #010101;
    font-size: 40px;
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 7px;
}
</style>
</head>
<body onload="showTime()">

<div class="sidenav">
  <a href="http://localhost/locationservice/Page/createuser.php">Create User</a>
  <a href="http://localhost/locationservice/Page/locations.php">Latest Locations</a>
  <a href="http://localhost/locationservice/Page/updatelocation.php">Update Location</a>
  <a href="http://localhost/locationservice/Page/edituser.php">Edit Users</a>
  <a href="http://localhost/locationservice/Page/userfilter.php">Filter User</a>
  <a href="http://localhost/locationservice/Page/locationfilter.php">Filter Location</a>
  <a href="http://localhost/locationservice/Index.php">Return to index</a>
</div>

<div class="content">
    <h2 style="font-size:40px">Update user location</h2>
    <div id="MyClockDisplay" class="clock"></div>
    
    <form method="POST" action="">	
	<p>Select user and location</p> 
    <?php
        require "Config.php";
        $userquery = "SELECT `userID`, CONCAT(`Forename`,' ',`Surname`) AS NAME FROM users ORDER BY `userID` ASC";
        $userresult = mysqli_query($conn,$userquery); 
        $locationquery = "SELECT Location from Locations ORDER BY `Location` ASC"; 
        $locationresult = mysqli_query($conn,$locationquery);

        echo "<select name='user_select[]'>";
        echo "<option disabled selected value> -- select an option -- </option>";
        while ($row = mysqli_fetch_array($userresult, MYSQLI_ASSOC)) 
        {
            echo "<option 'value='" . $row['NAME'].' '.$row['userID'] . "'>" . $row['NAME'].' '.$row['userID'] . "</option>";
        }
        echo "</select> - Select user";
    ?>
    <br><br>
    <?php
        echo "<select name='location_select[]'>";
        echo "<option disabled selected value> -- select an option -- </option>";
        while ($row = mysqli_fetch_array($locationresult, MYSQLI_ASSOC)) 
        {            
            echo "<option 'value='".$row['Location']."'>" . $row['Location'] . "</option>";
        }
        echo "</select> - Select location";
    ?>        
    <p>After selecting a user and location click update</p>
    <input type="submit" value="update" name="submit_btn">
</form>
    <?php
        require "Config.php";
		if(isset($_POST['submit_btn']))
		{   
      foreach ($_POST['user_select'] as $select)
      {
        $name = $select;
      }
      foreach ($_POST['location_select'] as $select)
      {                
        $location = $select;
      }       

      list($forename, $surname, $userID) = explode(' ', $name);                                   
      date_default_timezone_set('Europe/London');
      $date = date('d/m/Y h:i:s a', time());        
      $query = "INSERT INTO userDetails (`Forename`,`Surname`,`Location`,`Date`,`userID`) VALUES ('".$forename."','".$surname."','".$location."','".$date."','".$userID."')";
            
      $result = mysqli_query($conn,$query);
      
      if($result)
			{
				echo 'successfully submitted';
			}
			else
			{
				echo 'fail submit';
			}
    }
	?>
</div>
<script type="text/javascript" src="http://localhost/locationservice/Page/functions.js"></script>
</body>
</html>
