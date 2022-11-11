



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write data</title>
    <style>

        body{
            justify-content: center;
            align-items: center;
            background-color: lightblue;
            margin: 0;


        }


        form{
            display: relative;
            align-items: center;
            justify-content: center 
            
        }

        form input{
            height: 25px;
            width: 200px;
            background-color: white;
            border: none;
            border-radius: 5px;
            
        }

        form input:hover{
            background-color: lightcyan;
            height: 30px;
            

        }


        form p{
            color: lightblue;
            font-size: 18px;
        }

        form button{
            background-color: red;
            border: none;
            border-radius: 5px;
            height: 35px;
            width: 100px;
            box-shadow:2px 2px #000001 ;

        }
        form button:active{
            background-color: darkgrey;
            box-shadow:none;


        }

        header{
            text-align: center;
            font-size: 50px;
            background-color: lightcoral;
            border-bottom: 3px black solid;
            

            
        }

        .shadow{
            width: 100%;
            height: 10px;
            margin: 0;
            background: rgb(9,9,121);
            background: linear-gradient(0deg, rgba(9,9,121,0) 10%, rgba(0,0,0,10) 110%);
        }


        .container{
            display: flex;
            align-items: center;
            justify-content: center ;
            margin: auto;
            width: 400px;
            min-height: 600px;
            background-image: url('image-asset.jfif');
            background-size: contain;
            background-repeat: no-repeat;
            border-radius: 10px;
            box-shadow:5px 7px #888888 ;
            
        }
        .Home{
            margin-left:5px;
            font-size:20px;
            position: absolute;
            margin-top: 10px;
        }

    </style>
</head>
<body>
<div class="Home"><a href="MainPage.php">Home</a></div>    

<header>
PHP Write in database</header>
<div class="shadow"></div>





<div class="container">
<form method="POST"  >
<p>First Name</p>
    <input type="text" name="FirstName" >
<p>Last Name</p>
    <input type="text" name="LastName" >
<p>BirthDate</p>
    <input type="date" name="BirthDate" >
<p>Pin</p>
    <input type="text" name="Pin" >
<p>Position</p>
    <input type="text" name="Position" >
<p>RegistrationDate</p>
    <input type="Date" name="RegistrationDate" >



<br>
<br>
<button name="submit">ჩაწერა</button>
</form>

</div>
<br>
<br>
<?php

use FTP\Connection;







class UpdateData{


    public function Connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database="Midterm22";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        return $conn;
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }


    }



    
    public function update($conn,$ID){
        $FN =$_POST['FirstName'];
        $LN =$_POST['LastName'];
        $BD =$_POST['BirthDate'];
        $PIN =strval($_POST['Pin']);
        $POS =$_POST['Position'];
        $RD =strval($_POST['RegistrationDate']);
        $NUM =strval($_POST['Number']);



        $stmt = $conn->prepare("UPDATE `users` SET `FN` = :FN,
         `LN` = :LN, `BD` = :BD,`PIN`=:Pin,`POS`=:POS, `RD` = :RD,
          `Number` = :Num WHERE `users`.`ID` = :ID");
        
        
        $stmt->bindParam(':FN', $FN);
        $stmt->bindParam(':LN', $LN);
        $stmt->bindParam(':BD', $BD);
        $stmt->bindParam(':Pin', $PIN);
        $stmt->bindParam(':POS', $POS);
        $stmt->bindParam(':RD', $RD);
        $stmt->bindParam(':Num', $NUM);
        $stmt->bindParam(':ID', $ID);


        try{
            $stmt->execute();
            echo "<br> record has been Updated ";
            //header("Location: http://localhost/Midterm2022/SelectPage.php"); 


        }catch(PDOException $e){
            echo "<br> <br> Can't Insert Data". $e->getMessage();

        }
        
    }








}
$UpdateData =new UpdateData();




$ID=$_GET['id'];

if(isset($_POST['submit'])){

$UpdateData->update($UpdateData->Connection(),$ID);

}












?>














    
</body>
</html> 




