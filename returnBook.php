<?php
include('conn.php');

if(isset($_POST['bcode'])){
    $stname = $_POST['stname'];
    $bcode = $_POST['bcode'];
    $bname = $_POST['bname'];
    $query2 = "SELECT `no_books`,`total_copies` FROM `books` WHERE `book_code`=$bcode ";
    $result2 = mysqli_query($conn,$query2);
    $row = mysqli_fetch_array($result2);
    if(($row["no_books"]) < ($row["total_copies"]))
    {
    // echo "mysqli_fetch_array($result2)['no_books']" ;
    $sql ="INSERT INTO `student_log`(`book_code`, `book_name`, `student_name`,`status`) VALUES ('$bcode','$bname','$stname','Returned')";
    $query1 = "UPDATE `books` SET `no_books`= no_books+1 WHERE book_code='$bcode' ";
    $result1 = mysqli_query($conn,$query1);
// if($result1){
    if(mysqli_query($conn, $sql) and $result1){
    echo "<script> alert('Book Returned successfully.');
    window.location.href='issue.php';
    </script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

// }
}
else{
    echo "<script> alert('This Book dosen\'t belong to Library');
    window.location.href='library.php';
    </script>";
}
    








    // Close connection
mysqli_close($conn);

}








?>
<!-- //     $query2 = "SELECT * FROM `books` WHERE `book_code`='$bcode' ";
//     $result2 = mysqli_query($conn,$query2);
//     $total_copies = mysqli_fetch_array($result2)['total_copies'];
//     $cur_copies =mysqli_fetch_array($result2)['no_books'];
//     if( $cur_copies < $total_copies ){

//     $sql ="INSERT INTO `student_log`(`book_code`, `book_name`, `student_name`,`status`) VALUES ('$bcode','$bname','$stname','Returned')";
//     $query1 = "UPDATE `books` SET `no_books`= no_books+1 WHERE book_code='$bcode' ";
//     $result1 = mysqli_query($conn,$query1);
// if($result1){

//     if(mysqli_query($conn, $sql)){
//     echo "<script> alert('Book Returned successfully.');
//     window.location.href='issue.php';
//     </script>";
//     } else{
//         echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//     }

//  }
// }
// else{
//     echo "<script> alert('Book Dosen't Belong to Library.');
//     window.location.href='library.php';
//     </script>";
// } -->