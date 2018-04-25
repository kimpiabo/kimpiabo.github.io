<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="register.css">
<title>Registration</title>
</head>
<body>
  <div class="flex-container">
      <header>
          <img src="logo.jpg" alt="header"/>
      </header>
      <ul class="topnav"> <!--code for navigation bar-->
           <li><a class="active"href="http://localhost/~kimpiabo/home.php">Home</a></li>
           <li><a href="http://localhost/~kimpiabo/listevents.php">Events</a></li>
           <li class="login" style="float:right"><a href="http://localhost/~kimpiabo/login.php">Login</a></li>
           <li class="register" style="float:right"><a href="http://localhost/~kimpiabo/register.php">Register</a></li>
       </ul>
<form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to become an organiser.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" onclick="location.href='http://localhost/~kimpiabo/organiserhome.php';">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="http://localhost/~kimpiabo/login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
