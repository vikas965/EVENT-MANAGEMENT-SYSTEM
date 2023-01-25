<?php
    session_start();
    $_SESSION['check'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer Form</title>
    <!-- <link rel="stylesheet" href="./style1.css"> -->
</head>
<body>
    <div class="container">
        <div class="applybox">
            <h1>ORGANIZER SIGNUP 
                <span class="titlesmall">(WEB)</span>
            </h1>
            <form action="main4.php" method="POST">
                <div class="formcontainer">
                    <div class="formcontrol">
                        <label for="Firstname">First Name</label>
                        <input id="Firstname" name="FirstName" placeholder="Enter First Name" type="text" required>
                    </div>
                    <div class="formcontrol">
                        <label for="Lastname">Last Name</label>
                        <input id="Lastname" name="LastName" placeholder="Enter Last Name" type="text" required>
                    </div>
                    <div class="formcontrol">
                        <label for="email">Email</label>
                        <input id="email" name="Email" placeholder="example@gmail.com" type="email" required>
                    </div>
                    <div class="formcontrol">
                     <label for="PhoneNumber">Phone number</label>
                     <input id="PhoneNumber" name="Phonenumber"id="PhoneNumber"cols="20"rows="1" placeholder="Enter Phone Number" type="text" required>
                 </div>
                    <div class="formcontrol">

                        <label for="Passwordcreation">Password Creation</label>
                        <input name="passwordCreation" id="passwordcreation" cols="20" rows="1" placeholder="Create your Password"
                        type="password" required></input> 
                    </div>
                    <div class="formcontrol">
                     <label for="passwordconfirmation">Password Confirmation</label>
                     <input id="PasswordConfirmation" name="LastName" placeholder="Confirm Password" type="password" required>
                 </div>
                 <P><?php if($_SESSION['check']==1)
                 {
                    echo "enter the two pass words same";
                 }?></P>
                 <div class="textarea">
                  <label for="address">Address</label>
                  <textarea name="address" id="address" cols="50" rows="4" placeholder="Enter Address"></textarea> 
              </div>
                   
                <div class="buttoncontainer">
                    <button type="submit">
                            Submit now
                    </button>
                </div>
            </form>
        </div>
    </div>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-color:#ccc;
}
.container{

    max-width: 100%;
    margin: 0 auto;

}

.applybox{
    max-width: 600px;
    padding: 20px  ;
    background: white;
    margin: 0 auto;
    margin-top: 50px;
    box-shadow: 4px 3px 5px rgb(1,1,1,0.3);
    border-radius: 10px;
}
.titlesmall{
    font-size: 20px;
}

.formcontainer{

    margin-top: 25px;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
    gap: 20px;

}

.formcontrol{
    display: flex;
    flex-direction:column;
}

label{
    font-size: 20px;
    margin-bottom: 10px;
}

input , select ,textarea{
    padding: 6px 10px;
    border: 1px solid grey;
    border-radius: 5px;
    font-size: 17px;

}

input:focus{
    outline-color: orangered;
}

.buttoncontainer{
    display: flex;
    justify-content: flex-end;
    margin: 20px;
}

button{
    background-color: blue;
    color: white;
    border: transparent solid 2px;
    padding: 5px 10px;
    border-radius: 10px;
    transition: 0.4s ease-in;
}

button:hover{
    cursor: pointer;
    background-color: lightskyblue;
    border: 2px solid blue;
    transition: 0.4s ease-out;
}

.textarea{
    grid-column: 1/span 2;
}
.textarea textarea{
    width: 100%;
}

@media (max-width:460px){
    .textarea{
        grid-column: 1/span 1;
    }
}
    </style>
</body>
</html>