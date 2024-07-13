<?php
require_once('../mahsolat/inc/confing.php');
$digit = rand(1000,9999);
/*echo $digit;*/
session_start();
?>

<html lang="pt-BR">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
     <style>
             body{
          background-image: url(back3.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
          
        }
        .sidebody{
                width: 40%;
                text-align: center;
                background-color: white;
                box-shadow: 0 0 20px #eda5c6;
                border-radius: 10px;
              }
                @media (max-width:768px) {
                .sidebody{
                  width: 100%;
                  font-size: small;
                }
            }
        .sidebody input{
            padding: 10px;
            margin: 3px;
            border-radius: 5px;
            border-color: rgb(200, 199, 199);
        }
      
        .sidebody input:focus{
            outline: 2px solid #eda5c6;
            border-color: #eda5c6;
        }
        button{
            background-color: #eda5c6;
            color: white;
            padding: 10px;
            margin:5px ;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
         .fixNav{
          position: fixed;
          width: 100%;
          z-index: 100;
        }

        .topnav {
  overflow: hidden;
  background-color: #ffffff;
  border-radius: 50px;
  box-shadow: 0 0 20px rgb(205, 205, 205);

}

.topnav a {
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 35px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: pink;
  color: black;
}

.topnav a.active {
  background-color: rgb(222, 187, 255);
  color: rgb(0, 0, 0);
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
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
               </style>       
  <title>Login</title>
</head>

<body>
        <?php
             global $connection;
             $query = mysqli_query($connection, query: "SELECT * FROM `users`");
             $row = mysqli_fetch_array($query)
            ?>
                
        <!-- ***** navbar Start ***** -->
<div class="topnav2">
    <div class="hamburger-icon">&#9776;</div> <!-- Hamburger menu icon -->

    <div class="fixNav">
    <div class="topnav" id="myTopnav">
                  <a> <img style="width: 20px;" src="../pic/icon/logo estylet.png" alt="" class="active"></a>
      <a id="myButton" onclick="showPopup()" href="#home" ><img src="..\pic/icon/user.png" alt="" style="width: 15px;">
             <?php   if (isset($_SESSION["name"])) {
             echo $_SESSION["name"];
              }
   ?>       
            </a>
      <a href="..\Tina/nweChoose.html"><img src="..\pic/icon/magic-wand.png" alt="" style="width: 15px;"> طراحی لباس</a>
      <a href="#"> <img src="..\pic/icon/tshirt.png" alt="" style="width: 15px;"> لباس‌های آماده</a>
      <a href="..\Tina/modeles.php"> <img src="..\pic/icon/tshirt.png" alt="" style="width: 15px;">طرح‌های شیدرس</a>
      <a href="..\index.php"><img src="..\pic/icon/list-check.png" alt="" style="width: 15px;"> مراحل کار</a>
      <a href="#"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> (به‌زودی)جذب طراح</a>
      <a href="#"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> (به‌زودی)جذب خیاط</a>
      <a href="..\index.php"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> ارتباط با ما</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <img style="width: 15px;" src="icon-bar.png" alt="">
      </a>
            
     </div>
            
    <div id="myPopup" class="popup">
      <p>آیا از قبل عضو سایت نیستید؟  <a href="">ثبت نام </a> کنید</p>
      <input type="text" name="" id="" placeholder="نام خود را وارد کنید">
      <input type="text" placeholder="رمز عبور خود را وارد کنید">
      <a href="cart2.html">
        <button id="myButton" >ارسال</button>
      </a>
      <button onclick="closePopup()">بستن</button>
    </div>
  </div>
  
        <br>

        
  <div class="container" id="container">
   <div class="position-absolute top-50 start-50 translate-middle sidebody form-container sign-up">
      <form name="myForm" method="POST" onsubmit="return validateForm()" action="action/sign-up.php">
        <h1 align="center">ثبت نام</h1>   
       <input type="text" name="username" placeholder="*نام کاربری"> <br><br>
       <input type="email" name="email" placeholder="ایمیل"><br><br>
       <input type="text" name="mobile" name placeholder="*شماره موبایل"> <br><br>
       <input type="password" name="password" placeholder="*رمز عبور"><br><br>
       <img src="captcha.php" alt="captcha"><br><input type="text" name="captcha"placeholder="*کد امنیتی"><br><br>
        <button type="submit" name="signup" href="">ارسال</button>
      </form>
    </div>
  </div>
        
</body>
                <script type="text/javascript">
        function validateForm() {
            var username = document.forms["myForm"]["username"].value;
            var password = document.forms["myForm"]["password"].value;
            var email = document.forms["myForm"]["email"].value;
            var mobile = document.forms["myForm"]["mobile"].value;
            var captcha = document.forms["myForm"]["captcha"].value;

            if (username == "" || password == "" || email == "" || mobile == ""|| captcha == "") {
                alert("لطفاً تمامی فیلدها را پر کنید");
                return false;
            }
        }
                        
                      
const button = document.getElementById("myButton");
const popup = document.getElementById("myPopup");

button.addEventListener("click", function() {
  popup.style.display = "block";
});

function closePopup() {
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
                        
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
                        
        </script>

</html>