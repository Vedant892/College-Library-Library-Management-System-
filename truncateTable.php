
<?php
include('conn.php');
$result11 = mysqli_query($conn, 'TRUNCATE TABLE student_log');

    
     if($result11){
       echo "<script> alert('All Entries Deleted');
       window.location.href='issue.php';
       </script>";
     }else{
       echo "<script> alert('something went wrong...'); </script>";
     }
   

   ?>