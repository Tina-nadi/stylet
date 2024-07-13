<?php
include 'db.php';
if(isset($_POST['formsubmit'])){
    $selectedCollar = $_POST['selectedCollar'];
    $selectedCollarName= $_POST['selectedCollarName'];
    $selectedCollarColor = $_POST['selectedCollarColor'];    
    $selectedCollarSize = $_POST['selectedCollarSize'];
   
        
        
        
    $selectedSkirt = $_POST['selectedSkirt'];
    $selectedSkirtName= $_POST['selectedSkirtName'];
    $selectedSkirtColor = $_POST['selectedSkirtColor'];    
    $selectedSkirtSize = $_POST['selectedSkirtSize'];  
        
        
    $selectedModel = $_POST['selectedModel'];
    $selectedImageName= $_POST['selectedImageName'];
    $textareaContent = $_POST['textareaContent'];    
    $selectedRadioValue = $_POST['selectedRadioValue'];  
        
        
    $selectedProduct = $_POST['selectedProduct'];
    $selectedProductName= $_POST['selectedProductName'];
    $selectedProductPrice = $_POST['selectedProductPrice'];    
    $selectedRadioColorValue= $_POST['selectedRadioColorValue'];
    $selectedRadioSizeValue = $_POST['selectedRadioSizeValue'];  
            
            
            
        
        
        
   
    // Prepared statement to prevent SQL injection
    $insert = $conn->prepare("INSERT INTO cart (selectedCollar, selectedCollarName, selectedCollarColor, selectedCollarSize, selectedSkirt, selectedSkirtName, selectedSkirtColor, selectedSkirtSize, selectedModel, selectedImageName, textareaContent, selectedRadioValue, selectedProduct, selectedProductName, selectedProductPrice ,selectedRadioColorValue, selectedRadioSizeValue) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,)");
    $insert->bind_param("ssssssssssssssss", $selectedCollar, $selectedCollarName, $selectedCollarColor, $selectedCollarSize, $selectedSkirt, $selectedSkirtName, $selectedSkirtColor, $selectedSkirtSize, $selectedModel, $selectedImageName, $textareaContent, $selectedRadioValue, $selectedProduct, $selectedProductName, $selectedProductPrice ,$selectedRadioColorValue, $selectedRadioSizeValue);,,
    
    if($insert->execute()){
        echo 'Data inserted successfully.';
    }
    else{
        echo 'Error: ' . $conn->error;
    }
}
?>
