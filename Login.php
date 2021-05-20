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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="s1" style="width: 30%; margin-left: 35%;margin-right: 35%; position: relative; "" action="" method="post"  >
        <table style="position: absolute;">
        <tr>
                <td><input type="text" id="email" name="email" placeholder="Email"><br><br></td>
            </tr>
            <tr>
                <td ><input type="password" id="password" name="password" placeholder="Password"><br><br></td>
            </tr>
           <tr><td><input type="submit" name="submit" value="Log In" style="opacity: 1;"></td></tr>
           <tr>
               <td>
                   <p>
                       Haven't Registered Yet. <a href="./Registeration.php">Register Now</a>
                   </p>
               </td>
           </tr>
           </table>
    </foam>


</body>
</html>

<?php
    if (isset($_POST['submit'])) {
        include ("./db.config.php");
        include ("./User.php");
        $Email =$_POST['email'];
        $Password =$_POST['password'];

        $qry = "select * from users where email='".$Email."' and password = '".$Password."' ";
        $db = new Database();
        $users = $db->Search($qry,User::class);
        $user = $users[0];
        if ($user!=null) {
            # code...
            $_SESSION["user_id"] =$user->getId();
            $_SESSION["AccountType"] = $user->getAcountType();
            header("Location:. /Index.php");
        }else{
            echo "log in missmatch Try Again";
        }
    }


?>