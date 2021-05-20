<?php   
    session_start();
    if (isset($_SESSION['user_id'])) {
        # code...
        header('Location: ./Index.php');
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Foam</title>
</head>
<body>
<h1 style="font-family: Gabriola;color: white;"> <center>Registeration Foam</center></h1>
    <form id="s1" style="width: 30%; margin-left: 35%;margin-right: 35%;" action="" method="post"  >
        <table>
            <tr>
                <td><input type="text" id="fname" name="fname" placeholder="First Name"><br><br></td>
                <td><input type="text" id="lname" name="lname" placeholder="Last Name"><br><br></td>
            </tr>
            <tr>
                <td><label for="admin">Admin</label>
                   <input type="radio" id="accountType" name="accountType" value="admin"></td>
               <td> <label for="user">User</label>
                <input type="radio" id="accountType" name="accountType" value="user"></td>
            </tr>
            <tr >
                <td colspan="2" ><input type="text" id="phone" name="phone" placeholder="Phone" style="width: 100%;"><br><br></td>

            </tr>
            <tr>
                <td colspan="2"><input type="text" id="email" name="email" placeholder="Email" style="width: 100%;"><br><br></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" id="password" name="password" placeholder="Password" style="width: 100%;"><br><br></td>
            </tr>
           <tr><td><input type="submit" name="submit" value="Register" style="opacity: 1;"></td></tr>
           </table>

</body>
</html>


<?php
    if (isset($_POST['submit'])) {
        # code...
        include ("./db.config.php");
        $FName = $_POST['fname'];
        $LName = $_POST['lname'];
        $Type = $_POST['accountType'];
        $Phone = $_POST['phone'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];


        $db = new Database();
        $qry = "INSERT INTO users 
                (fname,lname,phone,email,password,accountType) 
                VALUES ( '" . $FName . "','" . $LName . "',
            '" . $Phone . "','" .$Email . "','" .$Password . "','" .$Type . "'
        )";

         if($db->UDI($qry) == true){
             echo '<br> New User Registerd <br>';
             echo '<p>Click <a href="./Index.php"> Login </a></p>  ';
         }else {
             echo 'Users Not Registerd ';
         }
        }
