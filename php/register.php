<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="icon" 
      type="image/png" 
      href="../images/favicon.png">

    <title>BN Sports DB</title>
</head>
<body>
<nav>
            <ul>
                <a href="../index.html"><li class="left">BN Sports DB<i class="fas fa-trophy"></i></li></a>
                <a href="../about.html"><li class="right">About</li></a>
                <a href="index.php"><li class="right">Login</li></a>
            </ul>
        </nav>
  <form method="post" action="register.php">
  <h2>Register</h2>
  	<div class="input-group">
  	  <label>Username:</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Email:</label>
  	  <input type="email" name="email">
  	</div>
  	<div class="input-group">
  	  <label>Password:</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm Password:</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="index.php">Sign in</a>
  	</p>
  </form>

  <footer>
            <ul>
              <li><i class="fab fa-facebook"></i></li>
              <li><i class="fab fa-instagram"></i></li>
              <li><i class="fab fa-twitter"></i></li>
              <li><i class="fab fa-snapchat"></i></li>
              <li><i class="fab fa-youtube"></i></li>
            </ul>
          </footer>
</body>
</html>