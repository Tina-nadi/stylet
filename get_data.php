<?php
include 'db.php';
if(isset($_POST['formsubmit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];    
    $msgbody = $_POST['msgbody'];
    $date = $_POST['date']; 
    $cart = $_POST['cart'];
    $imgone = $_POST['imgone'];
    $imgtwo = $_POST['imgtwo']; 
        
    
    // Prepared statement to prevent SQL injection
    $insert = $conn->prepare("INSERT INTO form (name, phone, title, msgbody, date, cart, imgone, imgtwo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $insert->bind_param("ssssssss", $name, $phone, $title, $msgbody, $date, $cart, $imgone, $imgtwo);
    
    if($insert->execute()){
        echo 'Data inserted successfully.';
    }
    else{
        echo 'Error: ' . $conn->error;
    }
}
?>
