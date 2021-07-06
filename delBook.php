<?php
include('conn.php');

if(isset($_POST['bcode'])){
    $bcode = $_POST['bcode'];
    $bname = $_POST['bname'];
    $sql = "DELETE FROM books WHERE book_code='$bcode' ";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Book Removed successfully.');
    window.location.href='library.php';
    </script>";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
}




?>