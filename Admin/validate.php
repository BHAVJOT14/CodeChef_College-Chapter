<?php

session_start();

include "./connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: ./index.php?error= Username Field Can't be Empty.");

        exit();
    } elseif (empty($password)) {
        header("Location: ./index.php?error= Password Field Can't be Empty.");

        exit();
    } else {

        $query = "select * from login_details where userName = '$username' and userPassword = '$password'";

        $data = mysqli_query($conn, $query);

        if (mysqli_num_rows($data) === 1) {

            $row = mysqli_fetch_assoc($data);

            if ($username === $row['userName'] && $password === $row['userPassword']) {

                $_SESSION['userName'] = $row['userName'];

                $_SESSION['userPassword'] = $row['userPassword'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                $_SESSION['userType'] = $row['userType'];

                $_SESSION['userDesignation'] = $row['userDesignation'];

                $_SESSION['last_login_timestamp'] = time();

                header("Location: ./home.php");
                echo "Logged In";

                exit();
            } else {

                header("Location: ./index.php?error=Incorect Username or Password");

                exit();
            }
        } else {
            header("Location: ./index.php?error=Incorect Username or Password");
        }
    }
} else {

    header("Location: ./index.php");

    exit();
}
