<?php

    include_once "../config/dbconnect.php";
   
    $order_id=$_POST['record'];
    $sql = "SELECT is_ordered from orders where id='$order_id'"; 
    $result=$conn-> query($sql);

    $row=$result-> fetch_assoc();
    
    
    if($row["is_ordered"]==0){
         $update = mysqli_query($conn,"UPDATE orders SET is_ordered=1 where id='$order_id'");
    }
    else if($row["is_ordered"]==1){
         $update = mysqli_query($conn,"UPDATE orders SET is_ordered=0 where id='$order_id'");
    }
    
     if($update){
        echo"success";
        echo $order_id;
    }
    else{
        echo"error";
    }
?>