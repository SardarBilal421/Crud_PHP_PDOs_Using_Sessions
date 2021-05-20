<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ../Login.php');
}



$ID = $_POST['id'];
$Name = $_POST['name'];
$Price = $_POST['price'];
$Description = $_POST['description'];
$Cost_Price = $_POST['cost_price'];
$Sale_Price = $_POST['sale_price'];


include ('./db.config.php');
$db = new Database();
$qry = "UPDATE products SET name ='" . $Name . "',price ='" . $Price . "',description ='" . $Description . "', cost_price ='" . $Cost_Price . "', sale_price ='" . $Sale_Price . "'  WHERE id='" . $ID . "'";
if ($db->UDI($qry) == true) {
    echo "Record has been updated";
} else {
    echo "Error:" . $qry . "<br>" . $db->error;
}
echo "<br>";
echo "<a href='./PDOProductSelection.php'>Home</a>";