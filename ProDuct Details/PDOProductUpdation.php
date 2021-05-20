<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ../Login.php');
}



include ("./db.config.php");
$id = $_GET['id'];
$db = new Database();
$qry = "SELECT * FROM products WHERE id = '".$id."'";
$result = $db->Search($qry,ProductInfo::class);
if($result != null){
foreach ($result as $data){

?>
    <!DOCTYPE html>
    <html>
    <head>

        <meta charset="UTF-8">
        <title>Product Info Updaation</title>
    </head>
    <body >

            <h1 style="font-family: Gabriola"> <center>PRODUCT INPUT FOAM</center></h1>
            <form id="s1" style="border: solid black 2px" action="./PDOProductUpdated.php?id='.$data->getId().'" method="post"  >
                <br><br>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $data->getName() ?>"><br><br>
                <label for="price">Price </label>
                <input type="text" id="price" name="price" value="<?php echo $data->getPrice() ?>"><br><br>
                <label for="des">Description </label>
                <input type="text" id="des" name="description" value="<?php echo $data->getDescription() ?>"><br><br>
                <label for="cp">Cost Price</label>
                <input type="text" id="cp" name="cost_price" value="<?php echo $data->getCostPrice() ?>"><br><br>
                <label for="sp">Sale Price</label>
                <input type="text" id="sp" name="sale_price" value="<?php echo $data->getSalePrice() ?>"><br><br>
                <input type="hidden" id="id" name="id" value="<?php echo $data->getId() ?>">
                <input type="submit" value="Update" formaction="./PDOProductUpdated.php?id='.$data->getId().'">
                <br><br>
            </form>

            <?php
            }
            }else {
                echo "No record Fond" ;
            }

            ?>



    </body>
    </html>