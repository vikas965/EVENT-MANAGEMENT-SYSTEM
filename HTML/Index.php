<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Events Management</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css" />

    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css" />

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css" />
  </head>

  <body>
    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
      <div class="nav-menu flex-row">
        <div class="nav-brand">
          <a href="#" class="text-gray">Event Mangement</a>
        </div>
        <div class="toggle-collapse">
          <div class="toggle-icons">
            <i class="fas fa-bars"></i>
          </div>
        </div>
        <div>
          <ul class="nav-items">
            <li class="nav-link">
              <a href="#">Home</a>
            </li>
            <li class="nav-link">
              <a href="index21.php">Register</a>
            </li>
            <li class="nav-link">
              <a href="#">About</a>
            </li>
            <li class="nav-link">
              <a href="#section3">Events</a>
            </li>
            <li class="nav-link">
              <a href="#">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="social text-gray">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </nav>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>
      <!------------------------ Site Title ---------------------->

      <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
          <h1>Event Management System</h1>
          <button class="btn">Explore Events</button>
        </div>
      </section>

      <!------------x----------- Site Title ----------x----------->

      <!-- --------------------- Blog Carousel ----------------- -->

      <section>
        <div class="blog">
          <div class="container">
            <div class="owl-carousel owl-theme blog-post">
              <div
                class="blog-content"
                data-aos="fade-right"
                data-aos-delay="200"
              >
                <img src="./css/Fests.jpg" alt="post-1" />
                <div class="blog-title">
                  <h3>Event Management System</h3>
                  <button class="btn btn-blog">Fests</button>
                  <!-- <span>2 minutes</span> -->
                </div>
              </div>
              <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                <img src="./css/Competition.webp" alt="post-1" />
                <div class="blog-title">
                  <h3>Event Management System</h3>
                  <button class="btn btn-blog">Competitions</button>
                  <!-- <span>2 minutes</span> -->
                </div>
              </div>
              <div
                class="blog-content"
                data-aos="fade-left"
                data-aos-delay="200"
              >
                <img src="./css/hackathon.jpg" alt="post-1" />
                <div class="blog-title">
                  <h3>Event Management System</h3>
                  <button class="btn btn-blog">Hackathons</button>
                  <!-- <span>2 minutes</span> -->
                </div>
              </div>
              <div
                class="blog-content"
                data-aos="fade-right"
                data-aos-delay="200"
              >
                <img src="./css/Webinar.webp" alt="post-1" />
                <div class="blog-title">
                  <h3>Event Management System</h3>
                  <button class="btn btn-blog">Webinar</button>
                  <!-- <span>2 minutes</span> -->
                </div>
              </div>
            </div>
            <div class="owl-navigation">
              <span class="owl-nav-prev"
                ><i class="fas fa-long-arrow-alt-left"></i
              ></span>
              <span class="owl-nav-next"
                ><i class="fas fa-long-arrow-alt-right"></i
              ></span>
            </div>
          </div>
        </div>
</section>

      <!-- ----------x---------- Blog Carousel --------x-------- -->

      <!-- ---------------------- Site Content -------------------------->

      <section class="container">
        <div class="site-content" >
          <div class="posts">
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
              <div class="post-image">
                <div>
                  <img
                    src="./css/gmr4.jpg"
                    class="img"
                    alt="blog1"
                  />
                </div>
                <!-- <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14, 2019</span>
                                <span>2 Commets</span>
                            </div> -->
            <hr />
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
              <div class="post-image">
                <div>
                  <img
                    src="./css/gmr4.jpg"
                    class="img"
                    alt="blog1"
                  />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user text-gray"></i
                    >&nbsp;&nbsp;Admin</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt text-gray"></i
                    >&nbsp;&nbsp;January 16, 2019</span
                  >
                  <span>7 Commets</span>
                </div>
              </div>
              <div class="post-title">
                <a href="#"
                  >Why should boys have all the fun? it's the women who are
                  making india an alcohol-loving contry</a
                >
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                  voluptas deserunt beatae adipisci iusto totam placeat corrupti
                  ipsum, tempora magnam incidunt aperiam tenetur a nobis,
                  voluptate, numquam architecto fugit. Eligendi quidem ipsam
                  ducimus minus magni illum similique veniam tempore unde?
                </p>
                <button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>
            <hr />
            <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
              <div class="post-image">
                <div>
                  <img
                    src="./assets/Blog-post/blog3.png"
                    class="img"
                    alt="blog1"
                  />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user text-gray"></i
                    >&nbsp;&nbsp;Admin</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt text-gray"></i
                    >&nbsp;&nbsp;January 19, 2019</span
                  >
                  <span>5 Commets</span>
                </div>
              </div>
              <div class="post-title">
                <a href="#"
                  >New data recording system to better analyse road accidents</a
                >
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                  voluptas deserunt beatae adipisci iusto totam placeat corrupti
                  ipsum, tempora magnam incidunt aperiam tenetur a nobis,
                  voluptate, numquam architecto fugit. Eligendi quidem ipsam
                  ducimus minus magni illum similique veniam tempore unde?
                </p>
                <button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div>
            <hr />
            <!-- <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
              <div class="post-image">
                <div>
                  <img
                    src="./assets/Blog-post/blog4.png"
                    class="img"
                    alt="blog1"
                  />
                </div>
                <div class="post-info flex-row">
                  <span
                    ><i class="fas fa-user text-gray"></i
                    >&nbsp;&nbsp;Admin</span
                  >
                  <span
                    ><i class="fas fa-calendar-alt text-gray"></i
                    >&nbsp;&nbsp;January 21, 2019</span
                  >
                  <span>12 Commets</span>
                </div>
              </div> -->
              <!-- <div class="post-title">
                <a href="#"
                  >New data recording system to better analyse road accidents</a
                >
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
                  voluptas deserunt beatae adipisci iusto totam placeat corrupti
                  ipsum, tempora magnam incidunt aperiam tenetur a nobis,
                  voluptate, numquam architecto fugit. Eligendi quidem ipsam
                  ducimus minus magni illum similique veniam tempore unde?
                </p>
                <button class="btn post-btn">
                  Read More &nbsp; <i class="fas fa-arrow-right"></i>
                </button>
              </div>
            </div> -->
            <div class="pagination flex-row">
              <a href="#"><i class="fas fa-chevron-left"></i></a>
              <a href="#" class="pages">1</a>
              <a href="#" class="pages">2</a>
              <a href="#" class="pages">3</a>
              <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <aside class="sidebar" >
            <div class="category" >
              <h2 id="section3">EVENTS</h2>
              <ul class="category-list">
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="100"
                >
                <?php if( isset($_SESSION['type']) && $_SESSION['type'] === 1)
                {
                  echo "<a href='event.php'>add new event</a>";
                }
                ?>
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="200"
                >
                <?php if(isset($_SESSION['type']) && $_SESSION['type'] === 1)
                {
                  echo "<a href='edit.php'>edit the event</a>";
                }
                ?>
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="300"
                >
                <?php if(isset($_SESSION['type']) && $_SESSION['type'] === 2)
                {
                  echo "<a href='reg.php'>join the event</a>";
                }
                ?>                  

                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="400"
                >
                <?php if(isset($_SESSION['type']) && $_SESSION['type'] === 2)
                {
                  echo "<a href='#'>event regestration</a>";
                }
                ?>
                  
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="500"
                >
                <?php if(isset($_SESSION['type']) && $_SESSION['type'] === 1)
                {
                  echo "<a href='delete.php'>delete the event</a>";
                }
                ?>
                </li>
                <li
                  class="list-items"
                  data-aos="fade-left"
                  data-aos-delay="500"
                >
                  <a href="#">Fests</a>
                </li>
              </ul>
            </div>
            <div class="popular-post">
              <h2>Popular Post</h2>
              <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                <div class="post-image">
                  <div>
                    <img
                      src="./assets/popular-post/m-blog-1.jpg"
                      class="img"
                      alt="blog1"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;January 14, 2019</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="#"
                    >New data recording system to better analyse road
                    accidents</a
                  >
                </div>
              </div>
              <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                <div class="post-image">
                  <div>
                    <img
                      src="./assets/popular-post/m-blog-2.jpg"
                      class="img"
                      alt="blog1"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;January 14, 2019</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="#"
                    >New data recording system to better analyse road
                    accidents</a
                  >
                </div>
              </div>
              <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                <div class="post-image">
                  <div>
                    <img
                      src="./assets/popular-post/m-blog-3.jpg"
                      class="img"
                      alt="blog1"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;January 14, 2019</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="#"
                    >New data recording system to better analyse road
                    accidents</a
                  >
                </div>
              </div>
              <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                <div class="post-image">
                  <div>
                    <img
                      src="./assets/popular-post/m-blog-4.jpg"
                      class="img"
                      alt="blog1"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;January 14, 2019</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="#"
                    >New data recording system to better analyse road
                    accidents</a
                  >
                </div>
              </div>
              <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                <div class="post-image">
                  <div>
                    <img
                      src="./assets/popular-post/m-blog-5.jpg"
                      class="img"
                      alt="blog1"
                    />
                  </div>
                  <div class="post-info flex-row">
                    <span
                      ><i class="fas fa-calendar-alt text-gray"></i
                      >&nbsp;&nbsp;January 14, 2019</span
                    >
                    <span>2 Commets</span>
                  </div>
                </div>
                <div class="post-title">
                  <a href="#"
                    >New data recording system to better analyse road
                    accidents</a
                  >
                </div>
              </div>
            </div>
            <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
              <h2>Newsletter</h2>
              <div class="form-element">
                <input type="text" class="input-element" placeholder="Email" />
                <button class="btn form-btn">Subscribe</button>
              </div>
            </div>
            <div class="popular-tags">
              <h2>Popular Tags</h2>
              <div class="tags flex-row">
                <span class="tag" data-aos="flip-up" data-aos-delay="100"
                  >Software</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="200"
                  >technology</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="300"
                  >travel</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="400"
                  >illustration</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="500"
                  >design</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="600"
                  >lifestyle</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="700"
                  >love</span
                >
                <span class="tag" data-aos="flip-up" data-aos-delay="800"
                  >project</span
                >
              </div>
            </div>
          </aside>
        </div>
      </section>

      <!-- -----------x---------- Site Content -------------x------------>
    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->

    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer">
      <div class="container">
        <div class="about-us" data-aos="fade-right" data-aos-delay="200">
          <h2>About us</h2>
          <p>
            Colleges often have a large number of events happening throughout
            the year. This hackathon aims to develop a web-based Event
            Management System for a college.
          </p>
        </div>
        <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
          <h2>Mail Us</h2>
          <p>Stay update with our latest</p>
          <div class="form-element">
            <input type="text" placeholder="Email" /><span
              ><i class="fas fa-chevron-right"></i
            ></span>
          </div>
        </div>

        <div class="follow" data-aos="fade-left" data-aos-delay="200">
          <h2>Follow us</h2>
          <p>Let us be Social</p>
          <div>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>

      <div class="move-up">
        <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
      </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
  </body>
</html>
