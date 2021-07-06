<?php
include('conn.php');

if(isset($_POST['bname'])){
$bname = $_POST['bname'];
$bcode = $_POST['bcode'];
$genre = $_POST['genre'];
$copies = $_POST['copies'];


$sql ="INSERT INTO `books`(`book_name`, `book_code`, `genre`, `no_books`, `total_copies`) VALUES ('$bname','$bcode','$genre','$copies','$copies')";
if(mysqli_query($conn, $sql)){
    echo "<script> alert('Book inserted successfully.');
    window.location.href='library.php';
    </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

}



?>