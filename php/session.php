<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
    $db = mysqli_connect("localhost", "root", "Braden3268", "TEC319"); 
session_start();// Starting Session 
// Storing Session 
    $user_check = $_SESSION['login_user']; 
// SQL Query To Fetch Complete Information Of User 
    $query = "SELECT username FROM login WHERE username = '$user_check'"; 
    $ses_sql = mysqli_query($db, $query); 
    $row = mysqli_fetch_assoc($ses_sql); 
    $login_session = $row['username'];
?>