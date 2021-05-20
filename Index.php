<?php   
    session_start();
    if (!isset($_SESSION['user_id'])) {
        # code...
        header('Location: ./Login.php');
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGOUT</title>
    <style> 
           table{
            border-collapse: collapse;
            background-color: aquamarine;
        }tr ,td ,th{
             border: 2px black solid;
             text-align: center;
             padding: 10px;
         }
</style>
</head>
<body>
        <table> 
           
            <tr>
        <th>User All Information</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

                <?php

    include ("./db.config.php");
    include ("./User.php");
    $db = new Database();
    $qry = "select * from users where id='".$_SESSION['user_id']."' ";
  
    $users = $db->Search($qry,User::class);
    if ($users!=null) {
        # code...
      //  $user = $users[0];
   //     echo $user->getDetail();.

   foreach ($users as $user){
    echo  $user->getDetail();
}

    }else{
        echo "Record not found";
    }
        ?>
        <tr>
            <td>
            <a href="./Logout.php">LogOut</a>
            </td>
        </tr>
        </table>
</body>
</html>