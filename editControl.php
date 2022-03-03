<?php

require("config/config.php");

$Id = $_REQUEST["Id"];

$username = $_POST["username"];
$pwd = $_POST["password"];

$type = $_POST["type"];


if ($qry = $conn->query("UPDATE tb_user SET username='" . $username . "', password = '" . $pwd . "', type='" . $type . "' WHERE id=" . $Id)) {
    echo "Update Data Successfully !";
    header("refresh: 2, index.php");
} else {
    echo "Update Data Failed !";
    header("refresh: 2, edit.php");
}
