<?php
require_once('mahsolat/inc/confing.php');
session_start();

global $connection;
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    $query = mysqli_query($connection, "SELECT * FROM product WHERE id = '$id'");
    $row = mysqli_fetch_array($query);

    if ($row) {
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $row['name']; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('back2.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .product-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-image {
            max-width: 300px;
            margin-right: 20px;
        }

        .product-details {
            flex-grow: 1;
        }

        .product-details h1 {
            margin-top: 0;
            color: #333;
        }

        .product-details p {
            color: #666;
        }

        .product-options {
            margin-top: 20px;
        }

        .product-options label {
            margin-right: 10px;
        }

        
        .product-options input[type="radio"] {
            margin-right: 5px;
            text-align: right;

        }

        .comment-section {
            margin-top: 20px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: vertical;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

       button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
        <body>
    <div class="container">
        <div class="product-info">
            <div class="product-image">
                <img width="250", height="350", id="Image" class="card-img-top" src="mahsolat/Pic/<?php echo $row['image']; ?>" alt=""> 

                
            </div>
            <div class="product-details">
                <h1 id="name"><?php echo $row['name']; ?></h1>
                <p><?php echo $row['discription']; ?></p>
                <div id="price" class="product-price">قیمت : <?php echo $row['price']; ?></div>
            </div>
        </div>
        <div class="product-options">
            <label>سایز:</label>
            <input type="radio" name="options" value="سایز1" id="size1"><label for="size1">سایز1</label>
            <input type="radio" name="options" value="سایز2" id="size2"><label for="size2">سایز2</label>
            <input type="radio" name="options" value="سایز3" id="size3"><label for="size3">سایز3</label>
            <input type="radio" name="options" value="سایز4" id="size4"><label for="size4">سایز4</label>
                <br>
            <label>رنگ:</label>
            <input type="radio" name="optionsColor" value="سبز" id="green"><label for="green">سبز</label>
            <input type="radio" name="optionsColor" value="سفید" id="white"><label for="white">سفید</label>
            <input type="radio" name="optionsColor" value="قرمز" id="red"><label for="red">قرمز</label>
            <input type="radio" name="optionsColor" value="آبی" id="blue"><label for="blue">آبی</label>
        </div>
        <div class="comment-section">
            <form method="post" action="Tina/shopping-cart.html">
                <div class="row">
                  <!---  <label for="subject">نظرات:</label>
                    <textarea id="subject" name="subject" placeholder="نظر خود را وارد کنید..."></textarea>--->
                </div>
                <div class="row">
                              <button id="sendButton" class="btn"> send</button>

                </div>
            </form>
        </div>
    </div>
                <script>
      const imageSrc = document.getElementById("Image").src;
       const name="<?php echo $row['name']; ?>";
       const price= "<?php echo $row['price']; ?>";
       const sendButton=document.getElementById("sendButton");

        localStorage.removeItem("selectedProduct");
        sendButton.addEventListener("click", () => {
        localStorage.setItem("selectedProduct", imageSrc);
        localStorage.setItem("selectedProductName", name);
        localStorage.setItem("selectedProductPrice", price);
                
         const options = document.getElementsByName("options");
         let selectedValue = "";
         for (let i = 0; i < options.length; i++) {
           if (options[i].checked) {
             selectedValue = options[i].value;
             break;
           }
         }
         localStorage.setItem("selectedRadioSizeValue", selectedValue);
         
         const optionsColor = document.getElementsByName("optionsColor");
         let selectedColorValue = "";
         for (let i = 0; i < optionsColor.length; i++) {
           if (optionsColor[i].checked) {
            selectedColorValue = optionsColor[i].value;
             break;
           }
         }
         localStorage.setItem("selectedRadioColorValue", selectedColorValue);
       });

    </script>
</body>
        </html>
<?php
    } else {
        echo "No data found for the given ID.";
    }
} else {
    echo "Invalid ID parameter.";
}
?>