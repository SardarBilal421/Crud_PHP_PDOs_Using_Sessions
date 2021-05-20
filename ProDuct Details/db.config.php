<?php
// print_r(PDO::getAvailableDrivers());

    define('DNS','mysql:host=localhost;dbname=products');
    define('Username','root');
    define('Password','');
    define('Debugging',true);
    include ("./ProductInfo.php");

        class Database{
            private function getPDOObj(){
                try {
                    $db = new PDO(DNS,Username,Password);
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch (PDOException $e){
                    if(Debugging){
                        die("Error while Connecting to DataBase ". $e);

                    }else {
                        die("Error ! Pls Try Later ");
                    }
                }
                return $db;
            }
            public function UDI($qry){
                $pdo = $this->getPDOObj();
                return $pdo->exec($qry);
            }
            public function Search($qry , $classRef){
                $pdo = $this->getPDOObj();
                $result = $pdo->query($qry);
                if($result->rowCount()>0)
                {
                    $rows = $result->fetchAll(PDO::FETCH_CLASS,$classRef);
                    return $rows;
                }
                return null;
            }

        }

/*

    $qry = "Select * from prodcuts";
    $result = $db->query($qry);


    if($result->rowCount()>0){
        $rows = $result->fetchAll(PDO::FETCH_CLASS,User::class);
        echo '<table>';
        foreach($rows as $row){
            echo '<tr>';
                echo '<td>'.$row->getDetail().'</td>';
            echo '<tr>';
        }
        echo '<table>';
    }*/