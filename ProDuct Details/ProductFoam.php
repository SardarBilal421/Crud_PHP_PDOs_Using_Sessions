<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ../Login.php');
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>ProductInputFoam</title>
    <style>
        #s1{
            margin-left: 500px;
            margin-right: 500px;
            background-color: beige;
            }
        #s2{
background-color: aquamarine;
            text-indent: 5em;
        }

    </style>
</head>
<body>
<h1 style="font-family: Gabriola"> <center>PRODUCT INPUT FOAM</center></h1>
    <form id="s1" style="border: solid black 2px" action="./PDOProductInsertion.php" method="post"  >
        <br><br>
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="price">Price </label>
        <input type="text" id="price" name="price"><br><br>
        <label for="des">Description </label>
        <input type="text" id="des" name="description"><br><br>
        <label for="cp">Cost Price</label>
        <input type="text" id="cp" name="cost_price"><br><br>
        <label for="sp">Sale Price</label>
        <input type="text" id="sp" name="sale_price"><br><br>
        <input type="submit" value="Save">
        <br><br>
    </form>



</body>
</html>