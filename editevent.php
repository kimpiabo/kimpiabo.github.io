<!DOCTYPE html>
<html >
<head>
<title>Welcome Back</title>
<link rel="stylesheet" type="text/css" href="organiserhome.css">
</head>
<body>
	<div class="flex-container">
			<header>
					<img src="logo.jpg" alt="header"/>
			</header>
      <ul class="topnav"> <!--code for navigation bar-->
           <li><a class="active"href="http://localhost/~kimpiabo/home.php">Home</a></li>
           <li><a href="http://localhost/~kimpiabo/listevents.php">Events</a></li>
           <li class="http://localhost/~kimpiabo/home.php" style="float:right"><a href="#login">Log out</a></li>
           <li class="http://localhost/~kimpiabo/register.php" style="float:right"><a href="#register">Register</a></li>
       </ul>
<?php
include("connectdb.php");
?>
<h2> More Details About Events</h2>

<!--a group of buttons with functions-->
<div class="btn-group">
	<button class="button-active" style="background-color: black">Show All Events</button> <!--show that this button is active-->
	<button class="button">Show Sport Events</button>
  <button class="button">Show Cultural Events</button>
  <button class="button">Show Other Events</button>
  <button onclick="sortTable()">Sort</button> <!--need to complete function for this-->
</div>
<!-- HTML table to  display  the vehicle records -->
	<table cellspacing="0"  cellpadding="5" border="1px solid gray" align="center">
	<tr><th>View</th><th>Name</th> <th >Description</th><th >Time</th> <th >Date</th> <th >Photo</th> <th >Address<th ></tr>
<?php
	try{
	// Run a SQL query
		$sqlstr = "SELECT * FROM events WHERE organiser_id=1";
		$rows=$db->query($sqlstr);
	//loop through the returned records and display in a table
	//created rows and also include a row with button that gives you the option
	//to view more details about the event
		foreach ($rows as $row) {
			echo  "<tr><td><button class='more'>edit</button></td>
			<td >" . $row['name'] . "</td>
			<td >" . $row['description'] . "</td>
			<td >" . $row['time'] . "</td>
      <td >" . $row['date'] . "</td>
      <td >" . $row['photo'] . "</td>
      <td >" . $row['address'];
		}

		echo "</table> <br>";
	} catch (PDOException $ex){
		//catch exception when the query is thrown
		echo "Sorry, an error occurred when querying the events records. Please try again.<br> ";
		echo "Error details:". $ex->getMessage();
	}

?>
<button class="button" onclick="location.href='http://localhost/~kimpiabo/addevents.php';">Add Event</a></button>
</div>
</body>
</html>
