<?php
include("config/config.php");


$Id = $_REQUEST["Id"];

if ($conn->query("DELETE FROM tb_user WHERE ID=" . $Id)) {
    echo "Delete user successfully !";
    header("refresh: 2, index.php");
} else {
    echo "Delete user failed !";
    header("refresh: 2, index.php");
}
