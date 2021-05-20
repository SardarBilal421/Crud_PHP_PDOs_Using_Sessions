<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ./Login.php');
}

include ("./db.config.php");
$ID=$_POST['ID'];
$FName=$_POST['fname'];
$LName=$_POST['lname'];
$Email=$_POST['email'];
$Password=$_POST['password'];
$Actype=$_POST['accountType'];
$Phone=$_POST['phone'];
$db = new Database();
$qry = "UPDATE users SET fname ='" . $FName . "',lname ='" . $LName . "',email ='" . $Email . "', password ='" . $Password . "', accountType ='" . $Actype . "', phone ='" . $Phone . "' WHERE id='" . $ID . "'";
if ($db->UDI($qry) == true) {
    echo "Record has been updated";
} else {
    echo "Error:" . $qry . "<br>" . $db->error;
}
echo "<br>";
echo "<a href='./Index.php'>Home</a>";