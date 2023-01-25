<?php
    function getdata()
    {
        $conn = mysqli_connect('localhost','root','','detail') or die("connection is going to error" . mysqli_connect_error());
        $data = mysqli_query($conn,"SELECT * FROM empdetails");
        $conn = null;
        return $data;
    }
