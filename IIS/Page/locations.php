<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
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
  background-color: #6D2772;
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
  <a href="http://app.rde.hull.ac.uk/555042/Page/createuser.php">Create User</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/locations.php">Latest Locations</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/updatelocation.php">Update Location</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/edituser.php">Edit Users</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/userfilter.php">Filter User</a>
  <a href="http://app.rde.hull.ac.uk/555042/Page/locationfilter.php">Filter Location</a>
  <a href="http://app.rde.hull.ac.uk/555042/Index.php">Return to index</a>
</div>

<div class="content">
    <h2 style="font-size:40px">Latest user locations</h2>
    <div id="MyClockDisplay" class="clock"></div>
    <?php
    require "Config.php";
    $latestlocationquery = "SELECT t1.* FROM userDetails t1
                    WHERE t1.entryID = (SELECT MAX(t2.entryID)
                    FROM userDetails t2
                    WHERE t2.userID = t1.userID)
                    ORDER BY Location ASC";
    $query = sqlsrv_query($conn,$latestlocationquery);
    ?>
<form method="POST" action="">

<table id="users">
    <thead>
        <tr>
        <th>Name</td>
        <th>Location</td>
        <th>Date and Time</td>
        <th>userID</td>
        </tr>
    </thead>
    <tbody>
    <?php    
    if($query != false)
    {
        while($rows = sqlsrv_fetch_array($query))
        {
            echo '<tr>
            <td>'.$rows['Forename'].' '.$rows['Surname'].'</td>            
            <td>'.$rows['Location'].'</td>
            <td>'.$rows['Date'].'</td>
            <td>'.$rows['userID'].'</td>
            </tr>';
        }
    }
    ?>
    </tbody>
</table>
</form>
</div>
<script type="text/javascript" src="http://app.rde.hull.ac.uk/555042/Page/functions.js"></script>
</body>
</html>
