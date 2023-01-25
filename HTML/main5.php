<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $conn =mysqli_connect('localhost','root','','final') or die("connection error" . mysqli_connect_error());
        if(!$_POST['passwordCreation'] === $_POST['LastName'])
        {
            $_SESSION['check1'] = 1;
            header("Location: participant.php");
            die();
        } 
        $fname=$_POST['FirstName'];
        $lname=$_POST['LastName']; 
        $email=$_POST['Email'];
        $phonenumber=$_POST['Phonenumber'];
        $studentid=$_POST['StudentId'];
        $stdyear = $_POST['StudyingYear'];
        $stdbranch = $_POST['StudyingBranch'];
        $sec = $_POST['Section'];
        $password=$_POST['passwordCreation'];
        $addres=$_POST['address'];
        $sql ="INSERT INTO `studentdata` (`firstname`,`lastname`,`emailid`,`phoneno`,`password`,`address`,`branch`,`sec`,`year`,`regid`) VALUES('$fname',
        '$lname','$email','$phonenumber','$password','$addres','$stdbranch','$sec','$stdyea','$studentid')";
        $mysql= mysqli_query($conn,$sql);
        if($mysql)
        {
            $_SESSION['login'] = 1;
            $_SESSION['check1'] = null;
            $_SESSION['type'] = 2;
            header("Location: index.php");
        }
        else{
            echo "check the code";
        }
    }
?>