<?php require_once ('../mahsolat/inc/confing.php');
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>طرح‌های شیدرس</title>
    <style>
        html,
        body {
          position: relative;
          height: 100%;
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
  padding: 10px 10px;
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
       
    
        .swiper {
          padding-top: 50px;
          padding-bottom: 50px;
          margin-top: 10px;
        }
    
        .swiper-slide {
          background-position: center;
          width: 400px;
          height: 1000px;
          overflow: hidden;
        }
    
        .swiper-slide img {
          display: block;
          width: 100%;
        }

        #detail{
          text-align: right;
          box-shadow: 0 0 20px rgb(205, 205, 205);
          margin: 10px;
          padding: 10px;
          border-radius: 20px;
        }
        #sendButton{
          background-color: #eda5c6;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
        }
      </style>
</head>
<body>
        <?php
             global $connection;
             $query = mysqli_query($connection, query: "SELECT * FROM `users`");
             $row = mysqli_fetch_array($query)
            ?>
  <div class="fixNav">
    <div class="topnav" id="myTopnav">
      <a href="http://mydesigndress.medianewsonline.com"> <img style="width: 20px; border-radius:50%;" src="../pic/icon/logo estylet.png" alt="" class="active"></a>
      <a id="myButton" onclick="showPopup()" href="#home"><img src="..\pic/icon/user.png" alt="" style="width: 15px;">
             <?php   if (isset($_SESSION["name"])) {
             echo $_SESSION["name"];
              }
   ?></a>
      <a href="nweChoose.html"><img src="..\pic/icon/magic-wand.png" alt="" style="width: 15px;"> طراحی لباس</a>
      <a href="..\mahsolat/mahsolat.php"> <img src="..\pic/icon/tshirt.png" alt="" style="width: 15px;"> لباس‌های آماده</a>
      <a href="modeles.html"> <img src="..\pic/icon/tshirt.png" alt="" style="width: 15px;">طرح‌های شیدرس</a>
      <a href="..\index.php"><img src="..\pic/icon/list-check.png" alt="" style="width: 15px;"> مراحل کار</a>
      <a href="#"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> (به‌زودی)جذب طراح</a>
      <a href="#"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> (به‌زودی)جذب خیاط</a>
                  <a href="..\index.php"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> آموزش طراحی(به زودی)</a>
      <a href="..\index.php"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> ارتباط با ما</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <img style="width: 15px;" src="icon-bar.png" alt="">
</a>
            
     </div>
            
    <div id="myPopup" class="popup">
      <p>آیا از قبل عضو سایت نیستید؟  <a href="../signup/index.php">ثبت نام </a> کنید</p>
      <input type="text" name="" id="" placeholder="نام خود را وارد کنید">
      <input type="text" placeholder="رمز عبور خود را وارد کنید">
      <a href="cart2.html">
        <button id="myButton" >ارسال</button>
      </a>
      <button onclick="closePopup()">بستن</button>
    </div>
  </div>
  
  
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img name="پیرهن یقه دلبری بالا چین" src="pic/photo_2024-04-30_14-54-02.jpg" />
          </div>
          <div class="swiper-slide">
            <img name="پیرهن کوتاه جذب" src="pic/photo_2024-04-30_14-54-18.jpg" />
          </div>
          <div class="swiper-slide">
            <img name="پیرهن ماکسی مدل ماهی" src="pic/photo_2024-04-30_14-54-58.jpg" />
          </div>
          <div class="swiper-slide">
            <img name="ست کراپ و دامن دو جیب" src="pic/photo_2024-04-30_14-54-30.jpg" />
          </div>
          <div class="swiper-slide">
            <img name="ست کراپ تاپ دامن love" src="pic/photo_2024-04-30_14-54-36.jpg" />
          </div>
          <div class="swiper-slide">
            <img name="پیرهن شطرنجی" src="pic/photo_2024-04-30_14-54-41.jpg" />
          </div>
          <div class="swiper-slide">
            <img name="ست کراپ تاپ رومی و دامن مدل ماهی" src="pic/photo_2024-04-30_14-54-47.jpg" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div id="detail" class="row">
        <div class="col">
          <p>اگر رنگبندی خاصی از طرح‌های شیدرس را در نظر دارید همراه با سفارش خورد برای ما ارسال کنید:</p>
          <textarea  id="textareaContent" cols="30" rows="2"></textarea>
          <p>سایز مورد نظر خود را انتخاب کنید</p>
          <label for="Smal">S</label>
          <input type="radio" name="options" value="Smal" >
          <label for="Medium">M</label>
          <input type="radio" name="options" value="Medium">
          <label for="Larg">L</label>
          <input type="radio" name="options" value="Larg" >
        </div>
        <a href="shopping-cart.html"> <button id="sendButton"> ثبت سفارش</button> </a>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
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
        var swiper = new Swiper(".mySwiper", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: ".swiper-pagination",
          },
        });

        let selectedImage = null;

       const images = document.getElementsByTagName('img');
       
       for (let i = 0; i < images.length; i++) {
         images[i].addEventListener('click', function() {
           selectedImage = this.src;
           localStorage.setItem('selectedImageName', this.name);
           localStorage.setItem('selectedModel', selectedImage);
         });
       }
       const textareaContent = document.getElementById("textareaContent");
       const sendButton = document.getElementById("sendButton");
       
       sendButton.addEventListener("click", () => {
         localStorage.setItem("textareaContent", textareaContent.value);
         const options = document.getElementsByName("options");
         let selectedValue = "";
         for (let i = 0; i < options.length; i++) {
           if (options[i].checked) {
             selectedValue = options[i].value;
             break;
           }
         }
         localStorage.setItem("selectedRadioValue", selectedValue);
       });

      </script>
</body>
</html>