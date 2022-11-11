<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            margin-left: auto;
            margin-right: auto;
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


      

    </style>
</head>

<header>PHP Admin Page</header>

<div class="container">


<table>
<tr>
<th><a href="SelectPage.php">ჩვენება</a></th>
<th><a href="InsertPage.php">ჩაწერა</a></th>
<th><a href="SelectPage.php">რედაქტირება</a></th>
<th><a href="Delete.php">წაშლა</a></th>

</tr>


</table>


</div>





    
</body>
</html>