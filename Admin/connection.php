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
