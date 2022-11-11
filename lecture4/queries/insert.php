<?php

if(!isset($_POST["submit"])){

?>

<form method="post" style="padding: 20px;">

    Fname: <input type="text" name="Fname">
    <br><br>
    Lname: <input type="text" name="Lname">
    <br><br>

    mobile: <input type="text" name="mobile">

    <input type="submit">
</form>


<?php

}else{


// try {
    $stmt=$conn -> prepare("Insert into users(fname,lname,mobile) values (:fname,:lname,:mobile)");
  
    $stmt->bindParam(':fname',$name);
    $stmt->bindParam(':lname',$lname);
    $stmt->bindParam(':mobile',$mobile);
  
    $name= $_POST["Fname"];
    $lname=$_POST["Lname"];
    $mobile=$_POST["mobile"];
  
    $stmt->execute();
  
  
  
    echo "New record created successfully";
//   } catch(PDOException $e) {
//     echo  "<br>" . $e->getMessage();
//   }
  
}




?>