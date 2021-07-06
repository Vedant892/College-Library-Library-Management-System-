<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "library";
$driver = "MySQL ODBC 8.0 ANSI DRIVER";

$connection = "DRIVER=$driver; SERVER=$host; DATABASE=$db";

$conn = odbc_connect($connection, $user, $pass);

if($conn){
    echo "connection established";
}
else{
    die("connection not happend");
}

?>