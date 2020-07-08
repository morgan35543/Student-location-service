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
  <a href="Page/createuser.php">Create User</a>
  <a href="Page/locations.php">Latest Locations</a>
  <a href="Page/updatelocation.php">Update Location</a>
  <a href="Page/edituser.php">Edit Users</a>
  <a href="Page/userfilter.php">Filter User</a>
  <a href="Page/locationfilter.php">Filter Location</a>
</div>

<div class="content">
  <h2 style="font-size:40px">Locations Inferface</h2>
  <div id="MyClockDisplay" class="clock"></div>
</div>
<script type="text/javascript" src="http://localhost/locationservice/Page/functions.js"></script>

</body>
</html>
