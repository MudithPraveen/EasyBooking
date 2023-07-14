<?php 
 session_start();
 $conn = mysqli_connect('localhost','root','') or die(mysqli_error());//connection to the database
 $db_select=mysqli_select_db($conn,'easy_booking') or die(mysqli_error());//select database
 if(isset($_SESSION['reject'])){

    unset($_SESSION['reject']);
 }
    session_destroy();

    header('location:'.'../../');
?>