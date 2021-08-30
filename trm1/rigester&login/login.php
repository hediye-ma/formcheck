<?php
include_once "header.php";
include_once'connect.php';

    if (isset($_POST['send'])) {
        $user = $_POST['username'];
        $pass = $_POST['pass'];

        if(isset($_POST['remember'])){
                setcookie('user',$user,time()+15);
                setcookie('pass',$pass,time()+15);
        }


        $pdo = connect_db();
        $query = $pdo->prepare("select * from users_tbl where username='$user'");
        $query->execute();
        $rez = $query->fetch(pdo::FETCH_OBJ);

        if (!$rez=="") {
            if ($rez->password == $pass) {
                header("location:check.php");
                $_SESSION['login']=$rez->username; // سشن یک متغییر سراسیه که وقتی جایی تعریف میکنیم در همه صفحه ها میتونیم از ان ایتفاده کینم اینجا یک سشن به نام لاگین تعریف کردیم و مقدار اون را برابر با $rez مقدار username قرار دادیم
                // نکته قبل از تعریف سشن حتما باید سشن رو استارت کنیم که ما در صبحه header استارک کردیم و در این صفحه include کردیم
            }
            else {
                echo "<h4 style='color: red'>رمز عبور اشتباه است<h4>";
            }
        }
        else{
                echo "<h4 style='color: #0f5132'>کاربر یافت نشد<h4>";
        }
    }

    ?>

    <div class="form">
        <!-- action = ادرس صفحه ای رو میگیره ک میخوای اطلاعات رو بهش ارسال کنی
             method =   اطلاعات رو ارسال میکنه و مقادیر رو هم در نوار بالا نمایش نمیده و محرمانه تره(post)  اطلاعات رو ارسال میکنه ولی در نوار منوی بالا هم نمایش میده (get) دو تا پارامتر داره
             -->
        <form method="post">
                <h4 class="title_box">فرم ثبت نام</h4>
     نام کاربری:           <br>
                <input type="text" name="username" class="form-control" value="<?php if (isset($_COOKIE['user'])){echo $_COOKIE['user']; }  ?>" required> <br>
    رمزعبور:           <br>
                <input type="password" name="pass" class="form-control" value="<?php if (isset($_COOKIE['pass'])){echo $_COOKIE['pass']; }  ?>"> <br>
                <div class="form-check-inline">
                    <input class="form-check-inline" type="checkbox" name="remember" value="php" id="flexCheckDefault">
                    <label class="form-check-label" for="php">
                        مرا به خاطر بسپار
                    </label>
                </div><br><hr>
            <input type="submit" name="send" value="send" class="btn btn-primary">
        </form>
    </div>

    </body>
    </html>