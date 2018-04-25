<!DOCTYPE html>
<html >
<head>
<title>Sort By Date</title>
<link rel="stylesheet" type="text/css" href="sortbydate.css">
</head>
<body>
	<div class="flex-container">
			<header>
					<img src="logo.jpg" alt="header"/>
			</header>
      <ul class="topnav"> <!--code for navigation bar-->
           <li><a href="http://localhost/~kimpiabo/home.php">Home</a></li>
           <li><a class="active" href="http://localhost/~kimpiabo/listevents.php">Events</a></li>
           <li class="login" style="float:right"><a href="http://localhost/~kimpiabo/login.php">Login</a></li>
           <li class="register" style="float:right"><a href="http://localhost/~kimpiabo/register.php">Register</a></li>
       </ul>
<?php
include("connectdb.php");
?>
<h2> Showing All Sport Events</h2>
<!--a group of buttons with functions-->
<div class="btn-group">
	<button class="button" onclick="location.href='http://localhost/~kimpiabo/listevents.php';">Show All Events</button> <!--show that this button is active-->
	<button class="button" onclick="location.href='http://localhost/~kimpiabo/listsportevents.php';">Show Sport Events</button>
  <button class="button" onclick="location.href='http://localhost/~kimpiabo/listcultureevents.php';">Show Cultural Events</button>
  <button class="button" onclick="location.href='http://localhost/~kimpiabo/listotherevents.php';">Show Other Events</button>
  <button class="button-active" style="background-color: black" onclick="location.href='http://localhost/~kimpiabo/sortbydate.php';">Sort By Date</button>
</div>
<!-- HTML table to  display  the vehicle records -->
	<table cellspacing="0"  cellpadding="5" border="1px solid gray" align="center">
	<tr><th>View</th><th>Like</th><th>Name</th> <th >Description</th><th >Time</th> <th >Date<th ></tr>
<?php
	try{
	// Run a SQL query
		$sqlstr = "SELECT * FROM events ORDER BY 'date' ASC";
		$rows=$db->query($sqlstr);
	//loop through the returned records and display in a table
	//created rows and also include a row with button that gives you the option
	//to view more details about the event
		foreach ($rows as $row) {
			echo  "<tr><td><button class='more'>details</button></td>
      <td><button class='like'>like</button></td>
			<td >" . $row['name'] . "</td>
			<td >" . $row['description'] . "</td>
			<td >" . $row['time'] . "</td>
			<td >" . $row['date'];
		}

		echo "</table> <br>";
	} catch (PDOException $ex){
		//catch exception when the query is thrown
		echo "Sorry, an error occurred when querying the events records. Please try again.<br> ";
		echo "Error details:". $ex->getMessage();
	}

?>
</body>
</html>
