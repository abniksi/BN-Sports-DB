<?php
$error = ''; // Variable To Store Error Message 
if (isset($_POST['submit'])) { 
    // Define $username and $password 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    // mysqli_connect() function opens a new connection to the MySQL server. 
    $conn = mysqli_connect("localhost", "root", "Braden3268", "TEC319"); 
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "INSERT INTO login (id, username, password) VALUES (id, username, password) LIMIT 1";
    $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $username, $password); 
    $stmt->execute(); 
    $stmt->bind_result($username, $password); 
    $stmt->store_result();  
  mysqli_close($conn); // Closing Connection 
}
?>