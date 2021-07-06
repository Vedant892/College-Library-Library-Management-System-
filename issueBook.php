<?php
include('conn.php');

if(isset($_POST['bcode'])){
    $stname = $_POST['stname'];
    $bcode = $_POST['bcode'];
    $bname = $_POST['bname'];
    $query2 = "SELECT `no_books` FROM `books` WHERE `book_code`='$bcode' ";
    $result2 = mysqli_query($conn,$query2);
    if(mysqli_fetch_array($result2)['no_books']>0){
    // echo "mysqli_fetch_array($result2)['no_books']" ;
    $sql ="INSERT INTO `student_log`(`book_code`, `book_name`, `student_name`,`status`) VALUES ('$bcode','$bname','$stname','Issued')";
    $query1 = "UPDATE `books` SET `no_books`= no_books-1 WHERE book_code='$bcode' ";
    $result1 = mysqli_query($conn,$query1);
if($result1){

    if(mysqli_query($conn, $sql)){
    echo "<script> alert('Book Issued successfully.');
    window.location.href='issue.php';
    </script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

 }
}
else{
    echo "<script> alert('No Books Available.');
    window.location.href='library.php';
    </script>";
}
 
// Close connection
mysqli_close($conn);






}



// if($con){
//     echo "database connected"; 
// }





?>