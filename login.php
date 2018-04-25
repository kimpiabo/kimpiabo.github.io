<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login.css">
<title>Login</title>
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
    <h1>Login</h1>
    <p>Please fill in this form to become an organiser.</p>
    <hr>

    <label for="username"><b>Name</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <hr>

    <button type="submit" class="registerbtn" onclick="location.href='http://localhost/~kimpiabo/organiserhome.php';">Log in</button>
  </div>

  <div class="container signin">
    <p>Don't have an account? <a href="http://localhost/~kimpiabo/register.php">Become organiser</a>.</p>
  </div>
</form>

</body>
</html>
