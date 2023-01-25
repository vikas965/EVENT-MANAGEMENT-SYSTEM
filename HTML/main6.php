<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $conn = mysqli_connect('localhost','root','','final') or die("connection error" . mysqli_connect_error());
        $content = $_POST['Description'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $mode = $_POST['mode'];
        $venue = $_POST['Venue'];
        $Category = $_POST['Category'];
        $speakerinfo = $_POST['speakerinfo'];
        $winner = $_POST['Winners'];
        $runner =$_POST['Runners'];
        $orga =$_POST['Organizers'];
        $prize =$_POST['PrizesInfo'];

        $file = $_FILES['upload'];
        $filename = $file['name'];
        $tempname = $file['tmp_name'];
        $filesize = $file['size'];
        $fileerror = $file['error'];
        $filetype= $file['type'];
        $fileexit = explode('.',$filename);
        $fileactual = strtolower(end($fileexit));
        $allowd = array('jpg','jpeg','png');
        if(in_array($fileactual,$allowd))
        {
            if($fileerror === 0)
            {
                if($filesize < 1000000)
                {
                    $filenewname = uniqid('',true) . "." . $fileactual;
                    $filedstination = 'images/'.$filenewname;
                    move_uploaded_file($tempname,$filedstination);
                }
                else{
                    echo "invalid file size";
                }
            }
            else{
                echo "file error";
            }
        }
        $sql = "INSERT INTO `eventdetails` (`content`,`phoster`,`date`,`time`,`mode`,`venue`,`catagiry`,`speakerinfo`,`winner`,`runnner`,`organiser`,`prize`) VALUES
         ('$content','$filedstination','$date','$time','$mode','$venue','$Category','$speakerinfo','$winner','$runner','$orga','$prize')";
         $mysql = mysqli_query($conn,$sql);
         if($mysql)
         {
            echo "hai";
         }
         else{
            echo "hao";
         }
    }