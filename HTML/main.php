<?php 
    session_start();
    include("function.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>bank managemnt system</title>
    </head>
    <body>
    <form action='two.php' method='POST'>
        <button name='new'><a>new user</a></button><br>
        <button name='old'><a>old user</a></button><br>
        <button name='admin'><a>admin login</a></button><br>
    </form>
    <?php
        if(isset($_SESSION['id']))
        {
            if($_SESSION['id']== 1)
            {
                echo     "<form action='three.php' method='post'> 
                enter first name<input type='text' name= 'fname' id='fname' required><br>
                enter last name<input type='text' name= 'lname' id='lname' required><br>
                enter the email<input type='email' name= 'email' id='email' required><br>
                set your password<input type='password' name= 'pass' id='pass' required><br>
                enter the phone no<input type='text' name= 'phone' id='phone' required><br>
                <button name='admin'><a>admin login</a></button><br>
            </form>";
            }
            elseif($_SESSION['id']== 2)
            {
                echo "    <form action='four.php' method='POST'>
                enter the emailid<input type='email' name='email' required><br>
                enter the password<input type='password' name='pass' required><br>
                <button name='admin'><a>admin login</a></button><br>
            </form>";

            } 
            elseif($_SESSION['id']== 3)
            {
                echo "same to you";
            } 

        }
        session_unset();
    ?>
    </body>
</html>