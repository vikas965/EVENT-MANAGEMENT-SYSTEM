<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $conn = mysqli_connect('localhost','root','','final') or die("connection is going to the error" . mysqli_connect_error());
        $data = mysqli_query($conn ,"SELECT * FROM admindata");
        $conn =null;
        foreach($data as $item)
        {
            if($_POST['email'] === $item['emailid'] && $_POST['password'] === $item['password'])
            {
                $_SESSION['login'] = 1;
                $_SESSION['type'] = 1;
                header("Location: index.php");
                die();
            }
        }
        $_SESSION['error1'] = 1;
        header("Location: index21.php");
    }
?>