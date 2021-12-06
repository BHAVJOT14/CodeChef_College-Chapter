<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta data -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#4285f4" />
  <!-- css links -->
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./css/slider.css" />
  <link rel="stylesheet" href="./css/navbar.css" />
  <link rel="stylesheet" href="css/progressBar.css" />
  <link rel="stylesheet" href="./css/waveAnim.css" />
  <!-- <link rel="stylesheet" href="css/contact.css" /> -->
  <link rel="stylesheet" href="./css/footer.css" />
  <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
  <link rel="stylesheet" href="./css/responsive.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />

  <!-- font awsome link  -->
  <script src="https://kit.fontawesome.com/c16a2977ef.js" crossorigin="anonymous"></script>

  <!-- title -->
  <title>CodeChef ITM Raipur Chapter</title>
</head>

<body>
  <!-- Nav Bar Start -->
  <!-- Progress Bar -->
  <div id="progressBar"></div>
  <div id="scrollPath"></div>
  <!-- to edit the js of changing color of navbar goto js/progressBar.js  -->

  <section class="main_header_section">
    <header class="main-header">
      <div class="container">
        <h1 class="mh-logo">
          <a href="#top">
            <img src="./img/College Chapters Logo.svg" width="119" height="50" alt="Codechef ITMR Chapter Logo" />
          </a>
        </h1>
        <nav class="main-nav">
          <ul class="main-nav-list">
            <li><a href="#home">Home</a></li>
            <li><a href="#about-us">About</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#video">Video</a></li>
            <li><a href="#contact-us">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </section>

  <!-- Nav Bar End -->

  <!-- Slider Start -->
  <section>
    <div class="sliderParent" id="top">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img/banner-campus.jpg.png" style="width: 100%" alt="img1" />
          <!-- <div class="text">Caption Text</div> -->
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/img2.png" style="width: 100%" alt="img2" />
          <!-- <div class="text">Caption Two</div> -->
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/img3.png" style="width: 100%" alt="img3" />
          <!-- <div class="text">Caption Three</div> -->
        </div>
      </div>

      <div style="text-align: center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

      <script src="js/main.js"></script>
      <!-- div for tagline start -->
      <div class="tagLine">
        <div class="logoDiv">
          <!-- <img class="logo" src="img/ITM1.png" alt=""> -->
        </div>
        <div>
          <p class="welcomeTxt">Welcome to ITM University Raipur</p>
          <p class="welcomeTxt" id="codechef">CodeChef College Chapter</p>
        </div>
      </div>
      <!-- div for tagline  -->
    </div>
    <!-- Div for wave animation -->
    <div class="waveWrapper waveAnimation">
      <div class="waveWrapperInner bgTop">
        <div class="wave waveTop" style="
              background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png');
            "></div>
      </div>
      <div class="waveWrapperInner bgMiddle">
        <div class="wave waveMiddle" style="
              background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png');
            "></div>
      </div>
      <div class="waveWrapperInner bgBottom">
        <div class="wave waveBottom" style="
              background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png');
            "></div>
      </div>
    </div>
  </section>
  <!-- Slider End  -->

  <!-- Intro Section Start  -->
  <section class="part2" id="home" data-aos="fade-right">
    <div class="vector">
      <img src="img/vector.png" alt="vector art coding" id="coding-vector" />
    </div>
    <div class="aboutus-card">
      <div class="aboutus-card-sub">
        <h3 id="aboutus-card-head">Hey there!</h3>
        <p id="aboutus-info">
          <b>
            Welcome to the official website of CodeChef ITM Raipur Chapter.
          </b>
          This college chapter is run by the students of Computer Science &
          Engineering department from the School of Engineering and Research
          at ITM University, Naya Raipur (C.G.). The President of this college
          chapter is Ms Riya Deshmukh, Competitive Programming Lead is Mr
          Ashraf Khan, Media and Outreach Lead is Ms Shruti Harwani and Events
          Lead is Mr Gaurav Sangewar and club president is Mr Vikas Soni. This
          College Chapter is managed by the students of ITM University and
          supervised by CodeChef. We are very grateful to be associated with
          this global platform and also to achieve this chapter for our
          university.
        </p>
      </div>
    </div>
  </section>

  <!-- Intro Section End  -->

  <!-- Chapter Leader Section Start  -->
  <section class="part4">
    <div class="Volunteers p4-section">
      <div class="p4-head" data-aos="fade-down">
        <span>Faculty</span>
        <span>Advisors</span>
      </div>
      <div class="p4-sub Volunteers-card" data-aos="fade-left">
        <div class="chapter-cards">
          <img src="img/ManishSir.jpeg" alt="" />
          <div class="info">
            <h1>Dr. Manish Taram</h1>
            <p>Faculty Advisor</p>
            <div class="social-handles">
              <i class="fa fa-github"></i>
              <i class="fa fa-linkedin-square"></i>
            </div>
          </div>
        </div>
        <div class="chapter-cards">
          <img src="img/VikasSir.jpeg" alt="" />
          <div class="info">
            <h1>Mr. Vikas Tiwari</h1>
            <p>Coding Mentor</p>
            <div class="social-handles">
              <i class="fa fa-github"></i>
              <i class="fa fa-linkedin-square"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="horizontal-Pill"></div>

    <div class="coding-club p4-section">
      <div class="p4-head" data-aos="fade-down">
        <span>Coding</span>
        <span>Club</span>
      </div>
      <div class="p4-sub coding-club-card" data-aos="fade-left">
        <div class="chapter-cards">
          <img src="img/vikas.jpg" alt="" />
          <div class="info">
            <h1>Vikas Dinesh Soni</h1>
            <p>- Coding Club President &nbsp; &nbsp; at ITM University</p>
            <p>-Website Developement</p>
            <div class="social-handles">
              <a href="https://github.com/vikassonigit" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://instagram.com/vikass_sonii" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="http://linkedin.com/in/Vikas-D-Soni" target="_blank"><i class="fa fa-linkedin-square"></i></a>
            </div>
          </div>
        </div>
        <div class="chapter-cards">
          <img src="img/jaspreet.jpeg" alt="" />
          <div class="info">
            <h1>Jaspreet Singh Kohli</h1>
            <p>Website-Developement Team</p>
            <div class="social-handles">
              <a href="https://github.com/Jaspreetkohli72" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://www.instagram.com/i_jaspreet_singh_kohli/" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/jaspreet-singh-k-b65b64118/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
            </div>
          </div>
        </div>
        <div class="chapter-cards">
          <img src="img/jagriti.jpeg" alt="" />
          <div class="info">
            <h1>Jagriti Ranglani</h1>
            <p>Website-Developement Team</p>
            <div class="social-handles">
              <a href="https://github.com/Jagriti-Ranglani" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://www.instagram.com/ranglanijagriti" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
              <a href=" https://www.linkedin.com/in/jagriti-ranglani-05605b183" target="_blank">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="chapter-cards">
          <img src="img/Bhavjot.jpeg" alt="" />
          <div class="info">
            <h1>Bhavjot Singh</h1>
            <p>Website-Developement Team</p>
            <div class="social-handles">
              <a href=" https://github.com/bhavi140201" target="_blank"><i class="fa fa-github"></i></a>
              <a href=" https://www.instagram.com/_bhavjot._/" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
              <a href=" https://in.linkedin.com/in/bhavjot-singh" target="_blank">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="horizontal-Pill"></div>

    <div class="Chapter Leaders p4-section">
      <div class="p4-head" data-aos="fade-down">
        <span>Chapter</span>
        <span>Leaders</span>
      </div>
      <div class="p4-sub" data-aos="fade-left">
        <div class="chapter-cards">
          <img src="img/Riya.png" alt="" />
          <div class="info">
            <h1>Riya Deshmukh</h1>
            <p>CodeChef ITM Raipur Chapter president</p>
            <div class="social-handles">
              <a href=" https://github.com/RiyaDeshmukh130299" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://www.linkedin.com/in/riyadeshmukh1399" target="_blank">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="chapter-cards">
          <img src="img/ashraf.jpg" alt="" />
          <div class="info">
            <h1>Ashraf Khan</h1>
            <p>CodeChef ITM Raipur Chapter Programming Lead</p>
            <div class="social-handles">
              <a href=" https://github.com/AshrafKhan-77" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://www.instagram.com/ashraf_khan_77/" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/ashraf-khan-1987471b3" target="_blank">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="chapter-cards">
          <img src="img/gaurav.jpg" alt="" />
          <div class="info">
            <h1>Gaurav Sangewar</h1>
            <p>CodeChef ITM Raipur Chapter Events Coordinator</p>
            <div class="social-handles">
              <a href=" https://github.com/techrider27" target="_blank"><i class="fa fa-github"></i></a>
              <a href=" https://www.instagram.com/its_gauravsangewar/" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
              <a href=" https://www.linkedin.com/in/g-sangewar27/" target="_blank">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="chapter-cards">
          <img src="img/shruti.jpg" alt="" />
          <div class="info">
            <h1>Shruti Harwani</h1>
            <p>CodeChef ITM Raipur Chapter Media and Outreach Lead</p>
            <div class="social-handles">
              <a href="https://github.com/shrutiharwani" target="_blank"><i class="fa fa-github"></i></a>
              <a href="https://www.instagram.com/shruti_harwani/" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
              <a href="https://www.linkedin.com/in/shruti-h-597218216" target="_blank">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Chapter Leader Section End -->

  <!-- About Us Section Start  -->
  <section class="part3" id="about-us">
    <div class="about-vector" data-aos="fade-right">
      <img src="img/about.svg" alt="" />
    </div>
    <div class="p3" data-aos="fade-left">
      <div class="p3-head">
        <h2>&lt; About Us /&gt;</h2>
      </div>
      <div class="p3-body">
        With around 30 years of relevant experience marching along with tons
        of successful stories, ITM Group of Institutions established ITM
        University Raipur, Chhattisgarh in 2012 with Management & Engineering
        programs. Currently ITM offers Engineering, Life Science, Law, Hotel
        Management, Architecture, Fashion Designing, and Commerce programes.
        ITM envisages a great learning opportunity for their students with
        well existing technological resources and guidance from Industry
        Experts and well-trained Faculties. In the presence of honorable Vice
        Chancellor Dr. Vikas Singh, ITM University further aims to provide
        industry relevant, product specific & process specific education to
        students, which will transform information into knowledge, making them
        efficient to enter the competitive world with explicit technical
        know-how and practical knowledge.
      </div>
    </div>
  </section>

  <!-- About Us Section End -->

  <!-- Our Event Section Start  -->
  <section class="part5" id="events">
    <div class="p5-head" data-aos="fade-up">
      <h1>Our Events</h1>
    </div>
    <div class="events">
      <div class="events-bx-row" data-aos="fade-right">
        <div class="event-bx">
          <div class="bx-img">
            <img src="img/bx1.png" alt="" />
          </div>
          <div class="bx-head">Bug Busters</div>
        </div>
        <div class="event-bx">
          <div class="bx-img">
            <img src="img/bx2.png" alt="" />
          </div>
          <div class="bx-head">Samurai Hack</div>
        </div>
        <div class="event-bx">
          <div class="bx-img">
            <img src="img/bx3.png" alt="" />
          </div>
          <div class="bx-head">Code Paper</div>
        </div>
      </div>
      <div class="events-bx-row" data-aos="fade-right">
        <div class="event-bx">
          <div class="bx-img">
            <img src="img/bx4.png" alt="" />
          </div>
          <div class="bx-head">Lan War</div>
        </div>
        <div class="event-bx">
          <div class="bx-img">
            <img src="img/bx5.png" alt="" />
          </div>
          <div class="bx-head">Who am I?</div>
        </div>
        <div class="event-bx">
          <div class="bx-img">
            <img src="img/bx6.png" alt="" />
          </div>
          <div class="bx-head">UI/UX Battle</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Event Section End  -->

  <!-- Video Section Start -->
  <section class="part6" id="video">
    <div class="p6-title" data-aos="fade-right">
      <h1>Watch Us</h1>
      <h1 id="youtube">On Youtube !</h1>
    </div>
    <div class="p6-youtube-video" data-aos="fade">
      <iframe width="772" height="415" src="https://www.youtube.com/embed/wnHW6o8WMas" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </section>
  <!-- Video Section Ends -->

  <?php

  $servername = "localhost:3306";
  $username = "root";
  $password = "";
  $db = "codechef_itm_raipur_chapter";

  // Create Connection
  $conn = mysqli_connect($servername, $username, $password, $db);

  // Check Connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  ?>


  <!-- Contact Us Section Start  -->
  <section class="part8" id="contact-us">
    <div class="contact-form" data-aos="zoom-in">
      <?php

      if (isset($_POST['submit-Bttn'])) {
        $message_Status = false;
        $user_name = $_POST['userName'];
        $user_email = $_POST['userEmail'];
        $user_message = $_POST['userComment'];

        $Query = "INSERT INTO contact_form_details (name, email, messsage) VALUES ('$user_name', '$user_email', '$user_message')";

        $db_Query = mysqli_query($conn, $Query);

        if ($db_Query) {

          $message_Status = true;

      ?>

          <div class="message" style="color: #fff !important; width: 90%;">
            <p class="head" style="font-size: 30px; font-weight: 700; text-align: left; padding: 20px;">
              Dear <?php echo $user_name; ?>,

              <br>
              <br>
            </p>

            <p class="body" style="font-size: 26px; padding: 0.5rem 0 0 6rem;">
              Thank you for getting in touch with us!, We’re thrilled to hear from you. We appreciate that you’ve taken the time to write us. One of our CodeChef College Chapter Leaders will get back in touch with you very soon!
            </p>

            <br>
            <br>

            <p class="foot" style="font-size: 23px; padding: 30px 0 0 20px;">
              Have a great day!

              <br><br>

              Cheers!
            </p>

          </div>
      <?php
        } else {
          echo "<h1>Your Message Cannot be able to send</h1>";
        }
      }
      ?>

      <?php

      if ($message_Status != true) {

      ?>

        <form method="POST" action="./index.php#contact-us">
          <div class="name text-box">
            <label for="name">Name</label>
            <input type="text" id="name" name="userName" placeholder="Enter Your Name" required />
          </div>
          <div class="Email text-box">
            <label for="Email">Email Id</label>
            <input type="email" id="Email" name="userEmail" placeholder="james@abc.com" class="email-box" required />
          </div>
          <div class="comment text-box">
            <label for="comment">Comment</label>
            <textarea name="userComment" id="comment-box" cols="30" rows="10" placeholder="Enter Your Comment here" required></textarea>
          </div>
          <div class="submit text-box">
            <button type="submit" name="submit-Bttn" id="submit">submit</button>
          </div>
        </form>
    </div>
    <div class="p7-title" data-aos="fade-left">
      <h1 id="query">Queries ?</h1>
      <h2>Get In Touch</h2>
    </div>
  <?php
      }; ?>
  </section>
  <!-- Contact Us Section End -->

  <!-- Footer Start -->

  <footer>
    <div class="main_container">
      <div class="left_container">
        <a href="https://www.google.com/maps/dir//ITM+University,+Sector+40,+Uparwara,+Chhattisgarh+493661/@21.1808139,81.6301962,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a28c5bf2677c107:0x9e406387e30d62b0!2m2!1d81.7545773!2d21.1121376" target="_blank">
          <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
          &nbsp;&nbsp; ITM University Raipur <br />
          &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Chhattisgarh : 493661
        </a>

        <a href="tel:+918269938081" target="_blank">
          <i class="fas fa-phone-alt fa-2x"></i>
          &nbsp;&nbsp; +91 8269938081
        </a>

        <a href="mailto:itmraipurchapter21@gmail.com" target="_blank">
          <i class="fas fa-envelope fa-2x"></i>
          &nbsp;&nbsp; itmraipurchapter21@gmail.com
        </a>
      </div>

      <div class="separatorPill"></div>

      <div class="center_container">
        <h3>Core Committee</h3>

        <br />

        <span> Vikas Soni - B.Tech 7th sem (President of Coding Club) </span>

        <span>
          Riya Deshmukh - B.Tech 7th sem (CodeChef Chapter President)
        </span>

        <span>
          Gaurav Sangewar - BCA 5th sem (CodeChef Chapter Events Lead)
        </span>

        <span>
          Ashraf Khan - B.Tech 5th sem (CodeChef Chapter Programming Lead)
        </span>

        <span>
          Shruti Harwani - BCA 3rd sem (CodeChef Chapter Media & Outreach
          Lead)
        </span>
      </div>

      <div class="separatorPill"></div>

      <div class="right_container">
        <a href="https://twitter.com/codechefITMUR?t=bmc_DMdKOQnFsGfjnqyU4w&s=0" target="_blank">
          <i class="fab fa-twitter fa-2x favicon"></i>
        </a>
        <a href="https://www.instagram.com/codechef.itmraipur.chapter/?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram fa-2x favicon"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100074007610114" target="_blank">
          <i class="fab fa-facebook fa-2x favicon"></i>
        </a>
        <a href="https://www.linkedin.com/in/codechef-itm-raipur-chapter-56a231222" target="_blank">
          <i class="fab fa-linkedin-in fa-2x favicon"></i>
        </a>
        <a href="#" target="_blank">
          <i class="fab fa-youtube fa-2x favicon"></i>
        </a>
      </div>
    </div>
  </footer>

  <!-- Footer End -->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="js/progressBar.js"></script>
  <script>
    AOS.init({
      offset: 200,
      duration: 800,
    });
  </script>
</body>

</html>