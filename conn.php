<?php
 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

// if($conn){
//     echo("Database Connected!");
// }

$db = mysqli_select_db($conn,'library');




?>