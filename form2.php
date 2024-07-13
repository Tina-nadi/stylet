<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
?>
<html dir="rtl">
<div class="container mt-5">
    <form action="get_data.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">نام و نام خانوادگی</label>
                <br><br>
            <input type="text" name="name" class="form-control">
        </div>
        <br>
            <div class="form-group">
            <label for="exampleInputPassword1">شماره همراه</label>
                <br><br>
            <input type="number" name="phone" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">نام کالایی که قصد مرجوع نمودن آن را دارید ، عنوان نمایید.</label>
                <br><br>
            <input type="text" name="title" class="form-control">
        </div>
        <br>
        
        <div class="form-group">
            <label for="exampleInputPassword1">علت مرجوعی کالا را شرح دهید.</label>
            <br><br>
            <textarea name="msgbody" cols="70" rows="7"></textarea>
        </div>
        <br>
            <div class="form-group">
            <label for="exampleInputPassword1">تاریخ دریافت کالا</label>
                <br><br>
            <input type="date" name="date" class="form-control">
        </div>
            <br><br>
            
             <div class="form-group">
            <label for="exampleInputPassword1">شماره کارت</label>
                <br><br>
            <input type="number" name="cart" class="form-control">
        </div>
            <br><br>
            <div class="form-group">
            <label for="exampleInputPassword1">در صورت لزوم تصویر یا فیلم از ایراد کالا ضمیمه نمایید(ارسال تصویر یا فیلم میتواند به روند کارشناسی سرعت بخشد)</label>
                <br><br>
            <input type="file" name="imgone" class="form-control">
        </div>
            <br><br>
               <div class="form-group">
            <label for="exampleInputPassword1">لطفا در صورتی که کالا را پست نموده اید ، یک تصویر از رسید پستی ارسال فرمایید.</label>
                <br><br>
            <input type="file" name="imgtwo" class="form-control">
        </div>
            <br><br>
           
        <input type="submit" name="formsubmit" value="ارسال فرم">
    </form>
</div>
</html>
