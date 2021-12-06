<?php

session_start();

include("./connection.php");

if (!isset($_SESSION['userName'])) {

  $_SESSION['msg'] = "You have to log in first";
  header('location: ./index.php');
} else {

  if ((time() - $_SESSION['last_login_timestamp']) > 600) // 600 = 10 * 60  
  {
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
        <div class="list active" onclick="document.location='./index.php';">
          <span class="fa fa-id-badge"></span> Contact Us
        </div>
        <div class="list" onclick="document.location='./account.php';">
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

      <?php

      // Query for Printing the total number of Queries Received

      $dataQueryMessageCount = mysqli_query($conn, "select count(distinct id) from contact_form_details");

      $count = mysqli_fetch_array($dataQueryMessageCount);

      ?>

      <div class="container-right flex-grow-1 text-center">
        <div class="container text-light p-3">
          <p class="h3">
            Total Queries Received Till Now :
            <span class="text-danger h2" style="text-decoration: underline">
              <?php echo $count[0]; ?>
            </span>
          </p>
        </div>

        <?php

        // Query for Printing the Complete Table

        $dataQueryContact_table = mysqli_query($conn, "select * from contact_form_details");

        // Query for the Serial Number
        $serialCount = mysqli_num_rows($dataQueryContact_table);

        $i = 1;
        ?>


        <div class="container p-3">
          <div class="container table-reponsive mt-5">
            <table class="table table-bordered table-hover table-light">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>
              <tbody>

                <?php

                while ($row = mysqli_fetch_assoc($dataQueryContact_table) and $i <= $serialCount) {

                ?>

                  <tr>
                    <th scope="row"> <?php echo $i; ?> </th>
                    <td> <?php echo $row['name']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                    <td>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $row['name']; ?>">
                        View Message
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="<?php echo $row['name']; ?>" tabindex="-1" aria-labelledby="<?php echo $row['name']; ?>" aria-hidden="true">
                        <div class="
                            modal-dialog
                            modal-dialog-centered
                            modal-dialog-scrollable
                          ">
                          <div class="modal-content bg-dark text-light">
                            <div class="modal-header">
                              <h5 class="modal-title" id="<?php echo $row['name']; ?>">
                                Message From <?php echo $row['name']; ?>
                              </h5>
                              <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="user-select: all">
                              <?php echo $row['messsage']; ?>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>

                <?php
                  $i++;
                };
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>