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
  <a href="http://app.rde.hull.ac.uk/555042/Page/createuser.php">Create User</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/locations.php">Latest Locations</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/updatelocation.php">Update Location</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/edituser.php">Edit Users</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/userfilter.php">Filter User</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/locationfilter.php">Filter Location</a>
  <a href="http://app.rde.hull.ac.uk/555042/Index.php">Return to index</a>
</div>

<div class="content">
    <h2 style="font-size:40px">Edit user details</h2>
    <div id="MyClockDisplay" class="clock"></div>
    <form method="POST" action="">
    Select a user to edit details:<br><br>
    
    <?php
        require "Config.php";
        $userquery = "SELECT [userID],[Forename],[Surname], CONCAT([Forename],' ',[Surname]) AS NAME FROM users ORDER BY [Forename]";
        $userresult = sqlsrv_query($conn,$userquery);        

        echo "<select id='user_select' name='user_select[]'>";
        while ($row = sqlsrv_fetch_array($userresult)) {
            echo "<option 'value='" . $row['NAME'] .' '. $row['userID'] . "'>" . $row['NAME'] .' '. $row['userID'] . "</option>";
        }
        echo "</select>";
    ?>       
    
    <br><br>  
    Names cannot be empty and must only contain letters within the english alphabet<br><br>
    First name: <input type="text" required="true" name="fore_name" id="fore_name" pattern="[a-zA-Z]{1,50}" required class="textInput text-p5">
    Surname: <input type="text" required="true" name="sur_name" id="sur_name" pattern="[a-zA-Z]{1,50}" required class="textInput text-p5">    
    <br><br>      
    <input type="submit" value="submit" name="submit_btn">
</form>
    <?php
        require "Config.php";   
		if($_POST['submit_btn'])
		{                  
            foreach ($_POST['user_select'] as $select)
            {
                $name = $select;
            }
            list($forename,$surname,$userID) = explode(' ',$name);

            $newforename = $_POST['fore_name'];
            $newsurname = $_POST['sur_name'];
                        
            $newforenameArray = array($forename,$newforename);
            $newsurnameArray = array($surname,$newsurname);

            $usersforenamequery = "UPDATE users SET Forename = replace(Forename,?,?) WHERE userID='$userID'";            
            $userssurnamequery = "UPDATE users SET Surname = replace(Surname,?,?) WHERE userID='$userID'";
            $userDetailsFquery = "UPDATE userDeatils SET Forename = replace(Forename,?,?) WHERE userID='$userID'";
            $userDetailsSquery = "UPDATE userDetails SET Surname = replace(Surname,?,?) WHERE userID='$userID'";

            $forenameresult = sqlsrv_query($conn,$usersforenamequery,$newforenameArray);
            $forenameresult .= sqlsrv_query($conn,$userDetailsFquery,$newforenameArray);
            $surnameresult = sqlsrv_query($conn,$userssurnamequery,$newsurnameArray);
            $surnameresult .= sqlsrv_query($conn,$userDetailsSquery,$newsurnameArray);


			if($forenameresult && $surnameresult)
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
<script type="text/javascript" src="http://app.rde.hull.ac.uk/555042/Page/functions.js"></script>
</body>
</html>
