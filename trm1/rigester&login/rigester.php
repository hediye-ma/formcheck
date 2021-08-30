<?php

include_once 'connect.php';

    if (isset($_POST['send'])){
        $user=$_POST['username'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $pdo=connect_db();
        $query=$pdo->prepare("INSERT INTO users_tbl(username,password,email) values ('$user','$pass','$email')");
        $query->execute();
            }



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

<div class="form">
    <!-- action = ادرس صفحه ای رو میگیره ک میخوای اطلاعات رو بهش ارسال کنی
         method =   اطلاعات رو ارسال میکنه و مقادیر رو هم در نوار بالا نمایش نمیده و محرمانه تره(post)  اطلاعات رو ارسال میکنه ولی در نوار منوی بالا هم نمایش میده (get) دو تا پارامتر داره
            -->
    <form method="post">
            <h4 class="title_box">فرم ثبت نام</h4>
            نام کاربری:         <br>
            <input type="text" name="username" class="form-control" required> <br>
            ایمیل:         <br>
            <input type="email" name="email" class="form-control" required> <br>
                     رمزعبور:<br>
            <input type="password" name="pass" class="form-control"> <br>
            <input type="submit" name="send" value="send" class="btn btn-primary">
    </form>
</div>

</body>
</html>

