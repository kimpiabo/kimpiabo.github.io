<!DOCTYPE html>
<html >
<head>
<title>List of Aston Events</title>
</head>
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	background-image: url("background2.jpg");
	background-size: 2000px;
}

/* Set a style for all buttons */
.btn-group button {
    background-color: red;
    border: 2px solid black;
    color: white;
    padding: 10px 24px;
    cursor: pointer; /* Pointer/hand icon */
    float: center; /* change to left to float the buttons side by side */

}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

/* What happens when you hover over the button*/
.btn-group button:hover {
    opacity: 0.6;
}

/*highlight the 'more' button on the table when hover*/
.more:hover {
	border-color: red;
}

/*make the website responsive*/
.flex-container {
	 display: -webkit-flex;
	 display: flex;
	 -webkit-flex-flow: row wrap;
	 flex-flow: row wrap;
	 text-align: center;
}

.flex-container > * {
	 padding: 15px;
	 -webkit-flex: 1 100%;
	 flex: 1 100%;
}

.article {
	 text-align: center;
}

header {
	 width: 100%;
	 left: 0;
	 background-color: #000;
}

ul.topnav {
	 list-style-type: none;
	 margin: 0;
	 padding: 0;
	 overflow: hidden;
	 background-color: #333;
	 font-size: 20px;
}

ul.topnav li {float: left;}

ul.topnav li a {
	 display: block;
	 color: white;
	 text-align: center;
	 padding: 14px 16px;
	 text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: red;

/* making the screen responsive*/
@media screen and (max-width: 600px)
.topnav input[type=text]{
	 ul.topnav li.right,
	 ul.topnav li {float: none;}
	 display: block;
	 text-align: center;

.topnav input[type=text] {
	 float: right;
	 padding: 6px;
	 border: none;
	 margin-top: 8px;
	 margin-right: 16px;
	 font-size: 17px;
}

.nav {background:#eee;}
</style>
<body>
	<div class="flex-container">
			<header>
					<img src="logo.jpg" alt="header"/>
			</header>
      <ul class="topnav"> <!--code for navigation bar-->
           <li><a href="http://localhost/~kimpiabo/home.php">Home</a></li>
           <li><a class="active" href="http://localhost/~kimpiabo/listevents.php">Events</a></li>
           <li class="http://localhost/~kimpiabo/login.php" style="float:right"><a href="#login">Login</a></li>
           <li class="http://localhost/~kimpiabo/register.php" style="float:right"><a href="#register">Register</a></li>
       </ul>
<?php
include("connectdb.php");
?>
<h2> Showing all events</h2>
<!--a group of buttons with functions-->
<div class="btn-group">
	<button class="button" onclick="location.href='http://localhost/~kimpiabo/listevents.php';">Show All Events</button> <!--show that this button is active-->
	<button class="button" onclick="location.href='http://localhost/~kimpiabo/listsportevents.php';">Show Sport Events</button>
  <button class="button" onclick="location.href='http://localhost/~kimpiabo/listcultureevents.php';">Show Cultural Events</button>
  <button class="button" onclick="location.href='http://localhost/~kimpiabo/listotherevents.php';">Show Other Events</button>
  <button class="button" onclick="location.href='http://localhost/~kimpiabo/sortbydate.php';">Sort By Date</button>
</div>
<!-- HTML table to  display  the vehicle records -->
	<table cellspacing="0"  cellpadding="5" border="1px solid gray" align="center">
	<tr><th>View</th><th>Like</th><th>Name</th> <th >Description</th><th >Time</th> <th >Date<th ></tr>
<?php
	try{
	// Run a SQL query
		$sqlstr = "SELECT * FROM events";
		$rows=$db->query($sqlstr);
	//loop through the returned records and display in a table
	//created rows and also include a row with button that gives you the option
	//to view more details about the event
		foreach ($rows as $row) {
			echo  "<tr><td><button class='more'>details</button></td>
			<td >" . $row['name'] . "</td>
			<td >" . $row['description'] . "</td>
			<td >" . $row['time'] . "</td>
      <td >" . $row['date'] . "</td>
      <td >" . $row['photo'] . "</td>
      <td >" . $row['address'] . "</td>
			<td >" . $row['contact'];
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
