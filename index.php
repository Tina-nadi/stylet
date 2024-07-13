<?php require_once ('../mahsolat/inc/confing.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title >☆ طراح لباسهای خودت باش ☆</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="indexcss.css">


    
 <style>

        

 
.user-icon {
    position: fixed;
    top: 20px;  
    right:100px;  
    z-index: 1000;  
}
.user-icon img {
    width: 30px; 
    border-radius: 50%;  
    border: 2px solid white;  
    box-shadow:  0px 0px 0px 1px black;  
        background-color: white;  
}
 
.popup {
    margin-top: 10px;
  display: none;
  position: relative;
  width: 200px;
  height: auto;
  background-color: white;
  border: 1px solid rgb(129, 128, 128);
  border-radius: 8px;
  padding: 10px;
  z-index: 1;
}
.popup input{
  padding: 10px;
  font-size: small;
  text-align: right;
  width: 95%;
  margin: 5px;
  border-radius: 5px;
}
.popup button{
  background-color: #eda5c6;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.popup a{
  color: #eda5c6 ;
}
.popup input:focus{
  border-color: #eda5c6;
}
         *{
        box-sizing: border-box;
        text-align: right;

    }
    .open-button{
        background-color: aquamarine;
        color: rgb(37, 4, 4);
        border-radius: 50%;
        padding: 15px 15px;
        cursor: pointer;
        position: fixed;
        bottom: 30px;
        right: 30px;
    }
    .chat-popup{
        display: none;
        position: fixed;
        bottom: 90px;
        right: 20px;
        border: 10px solid white;
        z-index: 9;

    }
          </style>
            
     
     
  </head>

    <body>
        
            
<figure class="user-icon">
    <a id="myButton" onclick="showPopup()">
        <img src="user.png">
      

  
    </a>
        
         
         <div id="myPopup" class="popup">
                  <p>آیا از قبل عضو سایت نیستید؟  <a href="signup/index.php">ثبت نام </a> کنید</p>
                  <input type="text" name="username" id="" placeholder="نام خود را وارد کنید">
                  <input type="text" name="password" placeholder="رمز عبور خود را وارد کنید">
                 <button type="submit" onclick="location.href='index.php'" >ارسال</button>
                  <button id="myButton" onclick="closePopup2()">بستن</button>
                  
              </div>

<?php
try {
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Prepare SQL statement
        $sql = "SELECT id FROM users where username=? and password=?";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':password', $_POST['password']);

        // Execute statement
        $stmt->execute();
            
        $result = $stmt->get_result();
                
    
        if (result->num_rows === 1){
           $row = $result->fetch_assoc(); 
           $_SESSTION["admin_id"] = $row["id"];     
           $_SESSTION["name"] = $row["username"];
           $_SESSTION["pass"] = $row["password"];
           echo "okay";


       }
    }

} catch(PDOException $e) {
    // Display error message
    echo "Error: " . $e->getMessage();
}

// Close connection
unset($conn);
?> 
<figcaption><?php
              if (isset($_SESSTION["name"])){
             echo $_SESSTION["name"];}
             else
             echo "کاربر";
   ?>
   </figcaption> 
</figure>
           

       
   
        
        <script>
document.addEventListener("DOMContentLoaded", function() {
  const logoImg = document.querySelector(".topnav2 img.navbar-brand");
  const hamburgerIcon = document.querySelector(".topnav2 .hamburger-icon");
  const menuItems = document.querySelectorAll(".topnav2 a");

  const toggleMenu = function() {
    menuItems.forEach(item => {
      if (item.style.display === "none" || item.style.display === "") {
        item.style.display = "flex";
      } else {
        item.style.display = "none";
      }
    });
  };

  logoImg.addEventListener("click", toggleMenu);
  hamburgerIcon.addEventListener("click", toggleMenu);
});
   
                
                
                //popup
                
            const button = document.getElementById("myButton");
const popup = document.getElementById("myPopup");

button.addEventListener("click", function() {
  popup.style.display = "block";
});

function closePopup2() {
    // بستن پنجره پاپ‌آپ
    document.getElementById("myPopup").style.display = "none";
}


        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
                
                 function openform(){
        document.getElementById('myForm').style.display = "block";
    }
    function closePopup() {
    // بستن پنجره پاپ‌آپ
    document.getElementById("myForm").style.display = "none";
}
        </script>    
    
    </body>
</html>

