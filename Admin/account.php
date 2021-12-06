<?php

session_start();

include("./connection.php");

if (!isset($_SESSION['userName'])) {

  $_SESSION['msg'] = "You have to log in first";
  header('location: ./index.php');
} else {

  if ((time() - $_SESSION['last_login_timestamp']) > 600) // 600 = 10 * 60  
  {
    $_SESSION['msg'] = "You have been logged out due to inactivity";
    header("location: log-out.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Bhavjot Singh" />
  <title> <?php echo $_SESSION['name']; ?> | <?php echo $_SESSION['userDesignation']; ?> | CodeChef <&nbsp;ITM Raipur&nbsp;> Chapter</title>
  <link rel="stylesheet" href="./styleCommon.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="bg-dark" oncontextmenu="return false">
  <section class="page_header">
    <div class="
          container-fluid
          bg-light
          d-flex
          justify-content-between
          align-items-center
        ">
      <div class="container p-2">
        <img src="./images/itm_logo.png" class="img-thumbnail" width="25%" alt="CodeChef ITM Raipur Chapter" />
      </div>
      <div class="container text-center">
        <p class="h2">CodeChef <&nbsp;ITM Raipur&nbsp;> Chapter</p>
      </div>

      <div class="container text-end align-self-end">
        <div class="dropdown">
          <button class="
                btn btn-dark
                dropdown-toggle
                bg-light
                text-dark text-uppercase
                fw-bolder
                border-0
              " type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="fa fa-user-circle-o"></span>
            <?php echo $_SESSION['name']; ?>
          </button>

          <div class="dropdown-menu text-center" aria-labelledby="dropdownMenu">
            <button class="dropdown-item" type="button" onclick="document.location='./log-out.php';">
              <span class="fa fa-sign-out fa-rotate-180"></span> Log Out
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--*******************************-->
  <!--*******************************-->
  <!--          Header Ends          -->
  <!--*******************************-->
  <!--*******************************-->

  <section class="page_content">
    <div class="container-fluid d-flex container__div">
      <div class="container-left bg-light text-dark">
        <div class="list" onclick="document.location='./index.php';">
          <span class="fa fa-id-badge"></span> Contact Us
        </div>
        <div class="list active" onclick="document.location='./account.php';">
          <span class="fa fa-user"></span> Account
        </div>
      </div>

      <!--#####################################################################################-->
      <!--#####################################################################################-->
      <!--#####################################################################################-->
      <!--                                                                                     -->
      <!-- Common for all the pages till above, need to be added in all the pages of dashboard -->
      <!--                                                                                     -->
      <!--#####################################################################################-->
      <!--#####################################################################################-->
      <!--#####################################################################################-->

      <div class="container-right flex-grow-1 text-center">

        <?php
        if ($_SESSION['userType'] === 'user') {
        ?>

          <div class="container-fluid mt-5">
            <div class="container">
              <div class="card mx-auto" style="width: 60%">
                <div class="text-center p-3">
                  <h3>Change Password</h3>
                </div>
                <form action="" method="POST">
                  <div class="form mt-2">
                    <div class="inputbox">
                      <input type="password" placeholder="Old Password" class="form-control" name="oldPass" />
                    </div>

                    <div class="inputbox d-flex justify-content-between">
                      <input type="password" placeholder="New Password" class="form-control" name="newPass" />
                      <input type="password" placeholder="Confirm Password" class="form-control" name="confirmNewPass" />
                    </div>
                  </div>
                  <div class="mt-4 pb-4 proceed">
                    <button class="btn btn-primary btn-block" name="submit">Submit</button>
                  </div>
                </form>

                <?php

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                  $oldPassword = $_POST['oldPass'];
                  $newPassword = $_POST['newPass'];
                  $confirmNewPassword = $_POST['confirmNewPass'];

                  if ($oldPassword === $_SESSION['userPassword']) {

                    if ($newPassword == $confirmNewPassword) {

                      $currentUser = $_SESSION['userName'];

                      $sqlUpdate = "UPDATE login_details SET userPassword = '$newPassword' WHERE userName = '$currentUser'";

                      if (mysqli_query($conn, $sqlUpdate)) {
                        $_SESSION['updateMessage'] = "Dear " . $_SESSION['name'] . ", Your Password has been Changed Successfully.";
                      } else {
                        $_SESSION['updateMessage'] = "Dear " . $_SESSION['name'] . ", Your Password is not able to Changed Successfully.";
                      }
                    } else {
                      $_SESSION['updateMessage'] = "Dear " . $_SESSION['name'] . ", Your New Password & Confirm Password are not Same.";
                    }
                  } else {
                    $_SESSION['updateMessage'] = "Dear " . $_SESSION['name'] . ", You have entered wrong Current Password.";
                  }
                }

                ?>



              </div>
            </div>
          </div>

        <?php
        } else {
        ?>

          <!------------------------------------->
          <!------------------------------------->
          <!--         Only For Admins         -->
          <!------------------------------------->
          <!------------------------------------->

          <?php

          // Query for Printing the total number of Queries Received

          $dataQueryUserCount = mysqli_query($conn, "select count(distinct id) from login_details");

          $count = mysqli_fetch_array($dataQueryUserCount);

          ?>


          <div class="container text-light p-3">
            <p class="h3">
              Total Accounts Created :
              <span class="text-danger h2" style="text-decoration: underline">
                <?php echo $count[0]; ?>
              </span>
            </p>
          </div>

          <div class="container-fluid">
            <div class="container">
              <?php

              // Query for Printing the Complete Table

              $dataQueryUser_table = mysqli_query($conn, "select * from login_details");

              // Query for the Serial Number
              $serialCount = mysqli_num_rows($dataQueryUser_table);

              $i = 1;
              ?>

              <div class="container table-reponsive mt-1">
                <p class="h3 text-light">List of Accounts Created</p>
                <table class="table table-bordered table-hover table-light">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Designation</th>
                      <th scope="col">Account Type</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    while ($row = mysqli_fetch_assoc($dataQueryUser_table) and $i <= $serialCount) {

                    ?>
                      <tr>
                        <th scope="row"> <?php echo $i; ?> </th>
                        <td> <?php echo $row['name']; ?> </td>
                        <td> <?php echo $row['userName']; ?> </td>
                        <td> <?php echo $row['userPassword']; ?> </td>
                        <td> <?php echo $row['userDesignation']; ?> </td>
                        <td> <?php echo $row['userType']; ?> </td>
                      </tr>
                    <?php
                      $i++;
                    };
                    ?>

                  </tbody>
                </table>
              </div>

              <div class="container">
                <div class="card mx-auto" style="width: 60%">
                  <div class="text-center p-3">
                    <h3>Create an account</h3>
                  </div>
                  <form action="#" method="post">
                    <div class="
                        form
                        mt-2
                        container
                        d-flex
                        justify-content-center
                        flex-column
                      ">
                      <div class="inputbox">
                        <input type="text" class="form-control" placeholder="Name" />
                      </div>

                      <div class="inputbox">
                        <input type="text" placeholder="Username" class="form-control" />
                      </div>

                      <div class="inputbox">
                        <input type="text" class="form-control" placeholder="Designation" />
                      </div>

                      <div class="inputbox d-flex justify-content-between">
                        <input type="password" placeholder="Password" class="form-control" />
                        <input type="password" placeholder="Confirm Password" class="form-control" />
                      </div>

                      <div class="inputbox">
                        <label for="accountType"> Select Account Type : </label>
                        <select name="accountType" id="accountType">
                          <option value="user">User</option>
                          <option value="admin">Admin</option>
                        </select>
                      </div>
                    </div>
                    <div class="mt-4 pb-4 proceed">
                      <button class="btn btn-primary btn-block">Submit</button>
                    </div>
                  </form>
                </div>
              </div>


              <div class="container-fluid mt-5">
                <div class="container">
                  <div class="card mx-auto" style="width: 60%">
                    <div class="text-center p-3">
                      <h3>Change Password</h3>
                    </div>
                    <form action="#" method="post">
                      <div class="form mt-2">
                        <div class="inputbox">
                          <input type="password" placeholder="Old Password" class="form-control" />
                        </div>

                        <div class="inputbox d-flex justify-content-between">
                          <input type="password" placeholder="New Password" class="form-control" />
                          <input type="password" placeholder="Confirm Password" class="form-control" />
                        </div>
                      </div>
                      <div class="mt-4 pb-4 proceed">
                        <button class="btn btn-primary btn-block">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            <?php
          };
            ?>

            <div class="text-center text-danger fw-bolder m-3">
              <?php
              if (isset($_SESSION['updateMessage'])) {

                echo $_SESSION['updateMessage'];
              } else {
                echo "Welcome " . $_SESSION['name'] . " || " . $_SESSION['userDesignation'] . "";
              }

              ?>
            </div>
            </div>
          </div>
      </div>
    </div>
  </section>
</body>

</html>