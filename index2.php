<?php include 'config/process.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دریافت اطلاعات از دیتابیس</title>
    <style>
        .container {
            margin: 10px auto;
            width: 80%;
        }
        .post {
            border: 1px solid #eee;
            width: 25%;
            padding: 10px 26px;
            text-align: center;
            display: inline-block;
            margin: 6px;
        }
        span {
            background-color: #eee;
            padding: 4px;
            border-radius: 4px;
        }
        email {
            background-color: cornflowerblue;
            color: white;
            padding: 4px;
            border-radius: 5px;
        }
        h3 {
            background-color: #512da8;
            padding: 6px;
            color: white;
        }
        h1{
            text-align: center;
            
        }
    </style>
</head>
<body>
    <h1>List of site members</h1>
    <div class="container">
    <?php foreach ($users as $user) : ?>
        <div class="post">
                <h3><?= $user->username ?></h3>
                <email><?= $user->email ?></email>
                <br><br>
                <span><?= $user->mobile?></span>
                <br><br>
                <span><?= $user->password?></span>
        </div>
<?php endforeach; ?>
    </div>
</body>
</html>