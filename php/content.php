<?php
//Takes user back to index.php when they click on the log out button 
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" 
      type="image/png" 
      href="../images/favicon.png">

    <title>BN Sports DB</title>
  </head>
  <body>
    <header>
        <nav>
            <ul>
                <a href="../index.html"><li class="left">BN Sports DB<i class="fas fa-trophy"></i></li></a> 
                <a href="../about.html"><li class="right">About</li></a>
                <a href="logout.php"><li class="right">Log Out</li></a>
            </ul>          
        </nav>
        <section>
            <div id="information">
                <h1>Welcome, <?php echo $login_session; ?></h1>
                <p>Search for any professional sports player!</p>
                <input id="search" type="text" placeholder="Search for players here..." /><br><br>
                <a href="#results"><button id="searchBtn">Search</button></a>
            </div>
            <footer>
                    <ul>
                      <li><i class="fab fa-facebook"></i></li>
                      <li><i class="fab fa-instagram"></i></li>
                      <li><i class="fab fa-twitter"></i></li>
                      <li><i class="fab fa-snapchat"></i></li>
                      <li><i class="fab fa-youtube"></i></li>
                    </ul>
            </footer>
        </section>
    </header>
        
        <div id="results">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/content.js"></script>
    </body>
</html>