<?php


// try {
    $stmt=$conn -> prepare("Insert into users(fname,lname,mobile) values (:fname,:lname,:mobile)");
  
    $stmt->bindParam(':fname',$name);
    $stmt->bindParam(':lname',$lname);
    $stmt->bindParam(':mobile',$mobile);
  
    $name="jhon";
    $lname="jhon";
    $mobile="555 555 555";
  
    $stmt->execute();
  
  
  
//     echo "New record created successfully";
//   } catch(PDOException $e) {
//     echo  "<br>" . $e->getMessage();
//   }
  





?>