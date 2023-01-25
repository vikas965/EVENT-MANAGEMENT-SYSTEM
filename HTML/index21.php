<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EVENT MANAGEMENT</title>
    <link rel="stylesheet" href="../CSS/navbar.css" />
    <link rel="stylesheet" href="../CSS/common.css" />
    <link rel="stylesheet" href="../CSS/single-featured.css" />
    <link rel="stylesheet" href="../CSS/style.css" />
  </head>
  <body>
    <style>
        .login{
    width: 300px;
    height: 380px;
    background: white;
    /* position: absolute;
    top:25%;
    left: 55%; */
    border-radius: 10px;
}
.login h2{
    width: 200px;
    height: 30px;
    background: white;
    color: orangered;
    border-radius: 10px;
    margin-top: 20px;
    margin-left: 40px;
    margin-bottom: 30px;
    text-align: center;
}

.login input{
    background: transparent;
    color: black;
    border: none;
    border-bottom: 1px solid orangered;
    margin-left: 40px;
    margin-bottom: 20px;
}

.login button{
    width: 200px;
    height: 30px;
    background: orangered;
    margin-top: 20px;
    margin-left: 40px;
    margin-top: 0px;
    text-align: center;
    border-radius: 10px;
}

.login button a{
    text-decoration: none;
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    color: black;
}

.login p{
    color:black;
    margin-top: 20px;
    text-align: center;
}
.login p a{
    color: darkblue;
    text-decoration: none;
}

#butt{
  margin-left :240px;
  margin-top: 40px;
  display:inline-block ;
  border: solid 5px red;
  padding: 20px 20px ;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}
    </style>
    <!-- navbar  -->
    <nav class="nav-container">
      <div class="nav-center wrapper">
        <div class="logo-section">
          <a href="https://gmrit.edu.in/" target="_blank">
            <img
              src="../ASSESTS/icons/university.svg"
              alt="university logo"
              class="logo"
            />
          </a>
        </div>
      </div>
    </nav>
    <!-- navbar  -->

    <!-- registration  -->
    <?php if($_SESSION['login'] === 1)
            {
              echo "<a id='butt' href = logout.php>logout</a>";
              die();
            }
            ?>
    <div class="registration-container light-blue-background">
      <div class="registration-center wrapper">
        <div
          class="section-title paddingTopDesktop-hundred paddingTopMobile-fifty"
        >
          <h3 class="title">MODE OF REGISTRATIONS</h3>
          <div class="underline"></div>
        </div>
        <section
          class="featured-courses paddingTopDesktop-fifty paddingBottomDesktop-fifty paddingTopMobile-fifty paddingBottomMobile-fifty three-column-layout"
        >
          <!-- single course start -->
          <article class="single-course">
            <div class="img-container">
              <a href="#"
                ><img src="../ASSESTS/icons/admin2logo.webp" alt="CSE"
              /></a>
            </div>
            <div class="course-title">
              <p>ADMIN</p>
            </div>
            <div class="login">
                <h2>Login Here</h2>
                <form action="main2.php" method="POST">
                <input type="text" name="email" placeholder="Enter Email Here" required>
                <input type="password" name="password" placeholder="Enter Password Here" required><br>
                <p><?php if($_SESSION['error1']==1)
                {
                  echo "invalid email or password";
                }
                  ?></p>

                <button><a href="#">login</a></button>
                <p>Don't have an account?<br><a href="organizer.php">Sign up </a>here</p>
                <p>log in here</p>
                </form>
            </div>
          </article>
          <!-- single course end -->
          <!-- single course start -->
          <article class="single-course">
            <div class="img-container">
              <a href="#"
                ><img src="../ASSESTS/icons/adminlogo.jpg" alt="ECE"
              /></a>
            </div>
            <div class="course-title">
              <p>USER</p>
            </div>
            <div class="login">
              <form action="main3.php" method="POST">
                <h2>Login Here</h2>
                <input type="text" name="email" placeholder="Enter Email Here" required>
                <input type="password" name="password" placeholder="Enter Password Here" required><br>
                <p><?php if($_SESSION['error2']==1)
                {
                  echo "invalid email or password";
                }
                  ?></p>
                <button><a>login</a></button>
                <p>Don't have an account?<br><a href="participant.php">Sign up </a>here</p>
                <p>log in here</p>
                </form>
            </div>
          </article>
        </section>
      </div>
    </div>

    <!-- registration -->
  </body>
</html>
