<?php
    $temp = $_Get['term'];
    $conn = mysqli_connect('localhost','root','','final') or die("connection error :" . mysqli_connect_error());
    $data =mysqli_query($conn,"DELETE FROM `eventdetails` WHERE `sr-no` = '$temp'");
    header("Location: edit.php");
?>