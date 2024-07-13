<?php
session_start();

// تولید عدد تصادفی برای کپچا
$_SESSION['captcha'] = rand(1000, 9999);

// ایجاد تصویر کپچا
$nums = $_SESSION['captcha'];
$width = 140;
$height = 40;
$image = imagecreate($width, $height);
imagecolorallocate($image, 255, 255, 255);
$numbers_color = imagecolorallocate($image, 0, 0, 0);
$numbers_size = 22;
$angle = 0;
$font = 'Captcha.otf';
imagettftext($image, $numbers_size, $angle, 45, 30, $numbers_color, $font, $nums);
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

// بررسی درستی عدد وارد شده توسط کاربر
if ($_POST['captcha'] == $_SESSION['captcha']) {
    echo 'کپچا صحیح می باشد';
} else {
    echo 'کپچا وارد شده صحیح نمی باشد';
}
?>