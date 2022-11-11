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
            background-repeat: no-repeat;
            background-size: cover;

            background-image: url('Background1.jpg');

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
            width: 75%;
            min-height: 600px;
            background-size: contain;
            border-radius: 10px;
            box-shadow:5px 7px #888888 ;
            background-color: white;
            
        }

        


        table  {
            margin-top: 10px;
            border-collapse: collapse;
        }
        th  {
            border: solid 1px black;
            background-color: black;
            color: white;
            width: 100px;
            text-align: center;
        }
        tr{
            height: 30px;

        }

        td{
            width: 100px;
            text-align: center;

        }

        .InsertData{
            position: absolute;
            text-decoration: none;
            
            background-color: lightcoral;
            border: none;
            border-radius: 5px;
            height: 35px;
            width: 150px;
            box-shadow:2px 2px #000001 ;
            color: black bold;

        }
        .InsertData:active{
            background-color: darkgrey;
            box-shadow:none;


        }
        .Edit{
            text-decoration: none;
            
            background-color: lightcoral;
            border: none;
            border-radius: 5px;
            
            box-shadow:2px 2px #000001 ;
            color: black bold;

        }
        .Edite:active{
            background-color: darkgrey;
            box-shadow:none;


        }

        .Delete{
            text-decoration: none;
            
            background-color: lightcoral;
            border: none;
            border-radius: 5px;
         
            box-shadow:2px 2px #000001 ;
            color: black bold;

        }
        .Delete:active{
            background-color: darkgrey;
            box-shadow:none;


        }
        
      

    </style>
</head>
<body>

<header>
PHP Write in database</header>

<div class="shadow"></div>
<button class="InsertData"><a href="InsertPage.Php">Insert New Data</a></button>

<div class="container">

<table>
<tr>
<th><a href="SelectPage.php?Order=<?php echo 'ID' ?>">ID</a></th>
<th><a href="SelectPage.php?Order=<?php echo 'FN' ?>">First Name</a></th>
<th><a href="SelectPage.php?Order=<?php echo 'LN' ?>">Last Name</a></th>
<th><a href="SelectPage.php?Order=<?php echo 'BD' ?>">birth date</a></th>
<th><a href="SelectPage.php?Order=<?php echo 'PIN' ?>">Pin</a></th>
<th><a href="SelectPage.php?Order=<?php echo 'POS' ?>">Position</a></th>
<th><a href="SelectPage.php?Order=<?php echo 'RD' ?>">Registration date</a></th>
<th><a href="SelectPage.php?Order=<?php echo 'Number' ?>">Number</a></th>
<th>Edit</th>
<th>Delete</th>
</tr>

</form>

<?php





class InsertData{
    
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




        if (isset($_GET['Order'])){
            $OrderBy=$_GET['Order'];
            echo $OrderBy;

        
        
        $stmt = $conn->prepare("select * from `users` order by :OrderBy desc");
        $stmt->bindParam(':OrderBy', $OrderBy);




        
        }else{

        $stmt = $conn->prepare("select * from `users` ");

        }



        try{
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            

            
            foreach($result as $output) {
                echo 
            "<tr>
                <td style='background:lightblue;'>".$output['ID']. "</td>
                <td>".$output['FN']. "</td>
                <td style='background:lightblue;'>".$output['LN']. "</td>
                <td>".$output['BD']. "</td>
                <td style='background:lightblue;'>".$output['PIN']. "</td>
                <td>".$output['POS']. "</td>
                <td style='background:lightblue;'>".$output['RD']. "</td>
                <td >".$output['Number']. "</td>
                <td style='background:tomato;' ><button class='Edit'><a href=Edit.php?id=".$output['ID'].">Edit</a></button></td>
                <td style='background:black;' ><button class='Delete'><a href=Delete.php?id=".$output['ID']. ">Delete</a></button></td>
            </tr>";
            }

            


        }catch(PDOException $e){
            echo "<br> <br> Can't Insert Data". $e->getMessage();

        }

        
    }





}






$InsertData =new InsertData();

$InsertData->Connection();
















?>






</table>

</div>
<br>
<br>















    
</body>
</html>