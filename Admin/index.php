<?php

session_start();

include("./connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Bhavjot Singh" />
  <title>Login Page || CodeChef ITM Raipur Chapter</title>
  <link rel="stylesheet" href="./style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body oncontextmenu="return false">
  <section class="container-fluid text-center page-header">
    <div class="container">
      <a href="https://itmraipurchapter.000webhostapp.com/" target="_blank" rel="noopener noreferrer">
        <img src="./images/itm_logo.png" class="img-fluid" width="15%" alt="Chapter Logo" />
        <p class="heading">CodeChef < ITM Raipur> Chapter</p>
      </a>
    </div>
    <hr />
  </section>

  <section class="container-fluid text-center m-0 p-0 main_container">
    <div class="container mt-5 p-3 login_form">

      <?php
      if (isset($_SESSION['msg'])) {
        echo "<p class='text-center text-danger h2 p-0 m-0'>";
        echo $_SESSION['msg'];
        echo "</p>";
      }
      ?>

      <!-- col-md-8 col-xs-12 col-sm-12 -->
      <div class="row">
        <p class="h3 p-3 text-center">Login</p>
      </div>

      <div class="row container-fluid">
        <form class="form-group" action="validate.php" method="POST">

          <?php
          if (isset($_GET['error'])) {
          ?>

            <div class="row">
              <p class="error">
                <?php echo $_GET['error']; ?>
              </p>
            </div>

          <?php
          }
          ?>

          <div class="row">
            <input type="text" name="username" id="username" class="form_input" placeholder="Username" required />
          </div>
          <div class="row">
            <input type="password" name="password" id="password" class="form_input" placeholder="Password" required />
          </div>

          <div class="row d-flex">
            <div class="align-self-center mx-auto p-3">
              <button type="submit" name="sign-in-bttn" class="btn">
                <span class="fa fa-sign-in">&nbsp;&nbsp;&nbsp;</span>
                Log In
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>