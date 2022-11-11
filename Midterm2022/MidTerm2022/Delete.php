<?php

use FTP\Connection;

class DeleteRecord{
    
    public function Connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database="Midterm22";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
        return $conn;

    }


    public function Delete($conn){


        $ID= $_GET['id'];
        $stmt = $conn->prepare("DELETE FROM `users` WHERE `users`.`ID` = :ID");
        
        
        $stmt->bindParam(':ID', $ID);
        $stmt->execute();
        header("Location: http://localhost/midterm2022/MidTerm2022/SelectPage.php"); 


    }







}

$Delete=new DeleteRecord();

$Delete->Delete($Delete->Connection());



?>