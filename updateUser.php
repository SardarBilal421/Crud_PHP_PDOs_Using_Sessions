<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    # code...
    header('Location: ./Login.php');
}


include ("./db.config.php");
include ("./User.php");
$id = $_GET['id'];
$db = new Database();
$qry = "SELECT * FROM users WHERE id = '".$id."'";
$result = $db->Search($qry,User::class);
if($result != null){
foreach ($result as $data){

?>
    <!DOCTYPE html>
    <html>
    <head>

        <meta charset="UTF-8">
        <title>User Recode Updateion</title>
    </head>
    <body >

           <h1 style="font-family: Gabriola;color: white;"> <center>Registeration Foam</center></h1>
             <form id="s1" style="border: solid black 2px" action="./updatedUser.php?id='.$data->getId().'" method="post"  >
             <table style="position: absolute;">
             <tr>
                 <td><input type="text" id="fname" name="fname" value="<?php echo $data->getFname();  ?>"><br><br></td>
                 <td><input type="text" id="lname" name="lname" value="<?php echo $data->getLname();  ?>"><br><br></td>
             </tr>
             <tr>
                 <td><label for="accountType">Admin</label>
                    <input type="radio" id="accountType" name="accountType" value="admin" <?php if($data->getAcountType() == "admin"){ echo "checked";}?> ></td>
                <td> <label for="accountType">User</label>
                    <input type="radio" id="accountType" name="accountType" value="user" <?php if($data->getAcountType() == "user"){ echo "checked";}?> ></td>
             </tr>
             <tr >
                 <td colspan="2" ><input type="text" id="phone" name="phone" value="<?php echo $data->getPhone();  ?>" style="width: 100%;"><br><br></td>
 
             </tr>
             <tr>
                 <td colspan="2"><input type="text" id="email" name="email" value="<?php echo $data->getEmail();  ?>" style="width: 100%;"><br><br></td>
             </tr>
             <tr>
                      
             <td colspan="2"><input type="text" id="password" name="password" value="<?php echo $data->getPassword();  ?>" style="width: 100%;"><br><br></td>
             </tr>
            <tr><td><input type="hidden" id="ID" name="ID" value="<?php echo $data->getId();  ?>"></td> 
                <td><input type="submit" value="Update" style="opacity: 1;" formaction="./updatedUser.php?id='.$data->getId().'"></td></tr>
            </table>
            </form>

            <?php
            }
            }else {
                echo "No record Fond" ;
            }

            ?>



    </body>
    </html>