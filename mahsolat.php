<?php require_once ('inc/confing.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
       <!-- Bootstrap core CSS -->
       <link href="css/bootstrap.min.css" rel="stylesheet">
       <!-- Custom styles for this template -->
       <link href="css/shop-homepage.css" rel="stylesheet">
        <link rel="stylesheet" href="indexcss.css">
            <title >لباس‌های آماده</title>
        
        <style>
        body{
        background-image: url(back4.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
          
        }
                
.hamburger-icon {
  display: none; /* Hide by default */
  order: 1;
  cursor: pointer;
  font-size: 24px;
  margin-bottom: 3px;
}
                /* Add some padding or margin to the elements below the menu to prevent overlap */
body > div:not(.topnav2) {
  padding-top: 60px; /* Adjust this value based on your needs */
}

/* Media query for smaller screens */
@media screen and (max-width: 768px) {
  .topnav2 {
    flex-direction: column; 
    align-items: center; 
    justify-content: center; 
    text-align: center; 
  }

  .topnav2 .hamburger-icon {
    display: block; /* Display the hamburger icon */
  }

  .topnav2 a {
    order: 2; 
    margin: 5px 0; 
    display: none; /* Hide menu items by default */
  }
}
 
.user-icon {
    position: fixed;
    top: 20px;  
    right:150px;  
    z-index: 1000;  
}
.user-icon img {
    width: 50px; 
    border-radius: 50%;  
    border: 2px solid white;  
    box-shadow:  0px 0px 0px 1px black;  
        background-color: white;  
}
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
  padding: 5px 20px;
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
   ?></a>
      <a href="..\Tina/nweChoose.html"><img src="..\pic/icon/magic-wand.png" alt="" style="width: 15px;"> طراحی لباس</a>
      <a href="#"> <img src="..\pic/icon/tshirt.png" alt="" style="width: 15px;"> لباس‌های آماده</a>
      <a href="../Tina/modeles.php"> <img src="..\pic/icon/tshirt.png" alt="" style="width: 15px;">طرح‌های شیدرس</a>
      <a href="..\index.php"><img src="..\pic/icon/list-check.png" alt="" style="width: 15px;"> مراحل کار</a>
      <a href="#"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> (به‌زودی)جذب طراح</a>
      <a href="#"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> (به‌زودی)جذب خیاط</a>
      <a href="..\index.php"> <img src="..\pic/icon/phone-call.png" alt="" style="width: 15px;"> ارتباط با ما</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
                                  <img style="width: 15px;" src="../Tina/icon-bar.png" alt="">
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

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">دسته بندی</h1>
                <div class="list-group">
                <?php
                    global $connection;
                    $query = mysqli_query($connection, query: "SELECT * FROM `category`");
                    while ($row = mysqli_fetch_array($query)) :
                        ?>
                        <a href="#" class="list-group-item"><?php echo $row['cat_name']; ?></a>
                    <?php endwhile; ?>

                </div>

            </div>
            <!-- /.col-lg-3 -->

           <div class="col-lg-9">
                <br>
                <div class="row">
                    <?php
                         global $connection;
                         $query = mysqli_query($connection, query: "SELECT * FROM `product`");
                         while ($row = mysqli_fetch_array($query)) :
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="../mahsol.php?id=<?php echo $row['id']; ?>"><img id="Image" class="card-img-top" src="Pic/<?php echo $row['image']; ?>" alt=""></a>
                            <div class="card-body">
                                <h4 id="Title" name="مانتو" class="card-title">
                                    <a href="#"><?php echo $row['name']; ?></a>
                                </h4>
                                <h5 id="Price"><?php echo $row['price']; ?></h5>
                                <!-- <p class="card-text"><?php echo $row['discription']; ?></p> -->
                            </div>
                            <div class="card-footer">
                                <a href="../mahsol.php?id=<?php echo $row['id']; ?>" class="btn btn-success">اطلاعات بیشتر</a> <br>
                            </div>
                        </div>
                    </div>
                     <?php endwhile ?>
    </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <br>
       <div class="row">
           <div class="col-md-12">
                <ul class="pagination pull-left pagination-lg paging-me">
        <li class="btn btn-primary active"><a href="#">1</a></li>
        <li class="btn btn-primary active"><a href="#">2</a></li>
        <li class="btn btn-primary active"><a href="#">3</a></li>
    </ul>
           </div>
       </div>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
           <script>
                   function myFunction1() {
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
        </script>

 </body>

</html>
