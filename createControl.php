<?php

require("config/config.php");

$username = $_POST["username"];
$pwd = $_POST["password"];

$type = $_POST["type"];


if ($qry = $conn->query("INSERT INTO tb_user(username, password, type) VALUES('" . $username . "','" . $pwd . "','" . $type . "')")) {
    echo "Save Data Successfully !";
    header("refresh: 2, index.php");
} else {
    echo "Save Data Failed !";
    header("refresh: 2, create.php");
}
