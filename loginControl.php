<?php
require('config/config.php');

$username = $_POST["username"];
$pwd = $_POST["password"];


$qry = $conn->query("SELECT * FROM tb_user WHERE username='" . $username . "' AND password='" . $pwd . "'");

if (mysqli_num_rows($qry) < 1) {
    echo "Not found this username";
    header("refresh: 2, login.php");
    exit();
}

echo "Login successfully !";
header("refresh: 2, index.php");
