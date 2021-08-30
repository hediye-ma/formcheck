<?php

include_once "header.php";
include_once "connect.php";

 if (isset($_POST['send'])){

$fullname=$_POST['fullname'];
$codmeli=$_POST['codmeli'];
$tell=$_POST['tell'];
$ostan=$_POST['ostan'];
$taahol=$_POST['taahol'];
$mahart=$_POST['mahart'];
$description=$_POST['description'];

$mahart_s=implode(',',$mahart);

$pdo=connect_db();
$query=$pdo->prepare("INSERT INTO doc_tbl(fullname,codmeli,tell,ostan,taahol,mahart,description) values ('$fullname','$codmeli','$tell','$ostan','$taahol','$mahart_s','$description')");
$query->execute();}
 ?>

<div class="container colorbox">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">


    <!-- action = ادرس صفحه ای رو میگیره ک میخوای اطلاعات رو بهش ارسال کنی
         method =   اطلاعات رو ارسال میکنه و مقادیر رو هم در نوار بالا نمایش نمیده و محرمانه تره(post)  اطلاعات رو ارسال میکنه ولی در نوار منوی بالا هم نمایش میده (get) دو تا پارامتر داره
-->
    <form method="post">
        <br><br>
        <h4 class="title_box">فرم تکمیلی</h4>
        نام و نام خانوادگی : <br>
        <input type="text" name="fullname" class="form-control" required> <hr>
        کدملی : <br>
        <input type="text" name="codmeli" class="form-control "required maxlength="10"> <hr>
        تلفن : <br>
        <input type="text" name="tell" class="form-control"required maxlength="11"> <hr>

        استان :<br>
        <select name="ostan" class="col-md-12">
            <option value="تهران">تهران</option>
            <option value="گیلان">گیلان</option>
            <option value="خراسان">خراسان</option>
            <option value="اصفهان">اصفهان</option>
        </select><hr>
        وضعیت تاهل: <br>
        <div class="form-check" >
            <input  class="form-check-inline" type="radio" value="متاهل" name="taahol" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                متاهل
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-inline" type="radio" value="مجرد" name="taahol" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                مجرد
            </label>
        </div><hr>
        مهارت: <br><br>
        <div class="form-check-inline">
            <input class="form-check-inline" type="checkbox" name="mahart[]" value="php" id="flexCheckDefault">
            <label class="form-check-label" for="php">
                php
            </label>
        </div>
        <div class="form-check-inline ">
            <input class="form-check-inline" type="checkbox" name="mahart[]" value="html" id="flexCheckDefault">
            <label class="form-check-label" for="html">
                html
            </label>
        </div>
        <div class="form-check-inline ">
            <input class="form-check-inline" type="checkbox" name="mahart[]" value="css" id="flexCheckDefault">
            <label class="form-check-label" for="css">
                css
            </label>
        </div>
        <div class="form-check-inline">
            <input class="form-check-inline" type="checkbox" name="mahart[]" value="wordpress" id="flexCheckDefault">
            <label class="form-check-label" for="wordpress">
                wordpress
            </label>
        </div><hr>

        توضیحات : <br>
        <textarea class="form-control" name="description"></textarea>
        <br>
        <input type="submit" name="send" value="send" class="btn btn-primary">
    </form>
        </div>
    </div>
</div>

</body>
</html>
