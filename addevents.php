<!DOCTYPE html>
<html >
<head>
<title>Add Events</title>
<link rel="stylesheet" type="text/css" href="addevents.css">
</head>
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
<h2> Add an event</h2>
<!-- Form for adding events-->
<form method = "post" action="addevents.php" enctype="multipart/form-data">
	Name: <input type="text" name="reg_no" size='30' required/><br /><br />
	Description: <input type="text" style="width: 300px" name="brand" size='250'/><br /><br />
	Time: <input type="time" name="time" value='00:00'/><br /><br />
  Date: <input type="date" name="date" value='0000-00-00'/><br /><br />
  Photo: <input type="image" name="image" id="image"/><br /><br />
  Address: <input type="text" name="address" size='80'/><br /><br />
	<div>
	Please Select: <br>
		<input type="radio" value="sports" name="category" checked />Sports <br>
		<input type="radio" value="culture" name="category" />Culture <br>
		<input type="radio" value="others" name="category" />Others <br /><br />
	</div>
	<div>
	Upload the vehicle image (only jpg/png/gif are allowed): <br />
	<input type="file" name="photo" accept="image/*" /> <br />
	<input type="hidden" name="submitted" value="true" />
	<input type="submit" name="submit" value="Create" />
	<input type="reset" value="clear"/>
</form>

<?php
// only run the php script if form is submitted
if (isset($_POST["submitted"])) {
include("connectdb.php");

//get the form data and do some basic validation
	if (!empty ($_POST['name']))
		$name = $_POST['name'];
	else{
		echo "name can not be empty. Please input a valid name! <br>";
		exit;
	}

	$time = intval($_POST['time']);
	if (!$time){
		echo "You must input a valid time! <br>";
		exit;
	}
	$description = $_POST['description'];
	$category = $_POST['category'];
  $photo = $_POST['photo'];
	$address = $_POST['address'];

	try{
		// use the form data to create a insert SQL and  add an events record
		$sth=$db->prepare("INSERT INTO `events` (`event_id`, `name`, `description`, `category`, `time`, `date`, `photo`, `address`, `contact`) VALUES
    (1, 'National Swimming Champions', 'Aston university swimming society enters the semi-finals', sports, '15:00:00', '2018-05-05', NULL, 'Aston University Sports Centre, Woodcock st, Birmingham, B4 7ET', 'o.kimpiab@hotmail.co.uk'),
    (3, 'Holi festival', 'annual festival of colour, everyone is welcome', culture, '12:00:00', '2018-03-21', NULL, 'Aston University Campus', 'o.kimpiab@hotmail.co.uk'),
    (4, 'AUCU Ball', 'Aston University Christian Union Ball, all are welcome', culture, '19:30:00', '2018-06-07', NULL, 'Town Hall, Victoria Square, Birmingham, B3 3DQ', 'o.kimpiab@hotmail.co.uk'),
    (5, 'Chritsmas Carol 2018', 'Fundraiser christmas carol to celebrate the end of 1st term', others, '18:30:00', '2018-12-10', NULL, 'Main Building, The Great Hall', 'o.kimpiab@hotmail.co.uk'),
    (6, 'Sikh Society Fashion Show', 'End of year ball', culture, '19:00:00', '2018-06-12', NULL, 'Aston Students Union', 'o.kimpiab@hotmail.co.uk'),
    (7, 'Female Rugby Try-outs', 'Try-outs for the aston university female rugby team', sports, '15:00:00', '2018-04-29', NULL, 'Woodcock st, B4 7ET', 'o.kimpiab@hotmail.co.uk'),
    (8, 'ACS Ball', 'Celebrating the end of year with an amazing soiree', others, '18:00:00', '2018-06-09', NULL, 'Location to be confirmed', 'o.kimpiab@hotmail.co.uk'),
    (9, 'Netflix & Pizza', 'Social event, all invited, network and meet new people', others, '17:00:00', '2018-05-25', NULL, 'Martin Luther King Building, B4 7EN', 'o.kimpiab@hotmail.co.uk'),
    (10, 'Gosta Pub Quiz', 'Fun and games and a cash prize', others, '20:30:00', '2018-05-05', NULL, 'Gostas, Birmingham, B4 4PE', 'o.kimpiab@hotmail.co.uk'),
    (11, 'Jitsu Free Taster Session', 'Pop in for a free taster session', sports, '16:30:00', '2018-05-10', NULL, 'Woodcock st, Birmingham, B4 3DQ', 'o.kimpiab@hotmail.co.uk');");
		$sth->execute(array($event_id, $name, $description, $category,$time,$date,$photo,$address,$contact));
		echo "<br> Well Done, you just add one vehicle record! <br><br>";
	} catch (PDOException $ex){
		//this catches the exception when it is thrown
		echo "Sorry, a database error occurred when trying to insert a record. Please try again.<br> ";
		echo "Error details:". $ex->getMessage();
	}
}
?>

</div>
</body>
</html>
