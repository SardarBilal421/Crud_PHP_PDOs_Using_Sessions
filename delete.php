<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ./Login.php');
}

$ID = $_GET['id'];
include("./db.config.php");
$db = new Database();
$ID = $_GET['id'];
$qry = "Delete from users where id = '" . $ID . "'";

if ($db->UDI($qry) == true) {
    echo " <br> Deleted Successfully \n";
} else {
    echo "Error" . $qry . "\n " . $db->error;
}
session_start();
if (isset($_SESSION['user_id'])) {
    # code...
    session_destroy();
}
header(
    'Location: ./Index.php'
);

