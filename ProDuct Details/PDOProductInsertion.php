<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ../Login.php');
}



include('./db.config.php');
$Name = $_POST['name'];
$Price = $_POST['price'];
$Description = $_POST['description'];
$Cost_Price = $_POST['cost_price'];
$Sale_Price = $_POST['sale_price'];


$db = new  Database();
$qry = "INSERT INTO products (name,price,description,cost_price,sale_price) VALUES (
              '" . $Name . "','" . $Price . "','" . $Description . "','" . $Cost_Price . "','" .$Sale_Price . "'
                                    )";


if($db->UDI($qry) == true){
    echo '<br> Inserted<br>';
    echo "<a href='./PDOProductSelection.php' style='font-size: 20px'>Home</a>";
}else {
    echo 'Record Not Inserted';
}

