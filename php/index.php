<?php 
    include('login.php'); // Includes Login Script
    if(isset($_SESSION['login_user'])){
    header("location: content.php"); // Redirecting to content
}
?> 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form in PHP with Session</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="../css/indexphp.css" rel="stylesheet" type="text/css">
        <link rel="icon" 
        type="image/png" 
        href="../images/favicon.png">
    </head>
    <body>
        <nav>
            <ul>
                <a href="../index.html"><li class="left">BN Sports DB<i class="fas fa-trophy"></i></li></a>
                <a href="../about.html"><li class="right">About</li></a>
                <a href="index.php"><li class="right">Login</li></a>
            </ul>
        </nav>

        <div id="centerContainer">
            <div id="container">
                <h2>Log Into Your Account!</h2>
            <form action="" method="post">
                <label>Username:</label>
                <input id="name" name="username" placeholder="Username" type="text"><br>
                <label>Password :</label>
                <input id="password" name="password" placeholder="Password" type="password"><br><br>
                <a href="registration.php"><h4>No account? Sign Up Here!</h4></a>
                <button name="submit" type="submit" value="Login">Login</button>
                <span><?php echo $error; ?></span>
            </form>
            </div>
        </div>
    </body>
</html>