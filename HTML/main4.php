<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $conn =mysqli_connect('localhost','root','','final') or die("connection error" . mysqli_connect_error());
        if(!$_POST['passwordCreation'] === $_POST['LastName'])
        {
            $_SESSION['check'] = 1;
            header("Location: organizer.php");
            die();
        } 
        $fname=$_POST['FirstName'];
        $lname=$_POST['LastName']; 
        $email=$_POST['Email'];
        $phonenumber=$_POST['Phonenumber'];
        $password=$_POST['passwordCreation'];
        $addres=$_POST['address'];
        $sql ="INSERT INTO `admindata` (`firstname`,`lastname`,`emailid`,`mobilenumber`,`password`,`address`) VALUES('$fname',
        '$lname','$email','$phonenumber','$password','$addres')";
        $mysql= mysqli_query($conn,$sql);
        if($mysql)
        {
            $_SESSION['check'] = null;
            $_SESSION['type'] = 1;
            $_SESSION['login'] =1;
            header("Location: index.php");
        }
        else{
            echo "check the code";
        }
    }
?>