<?php
session_start()
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
    <link href="../css/stayle.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid menobox">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">صفحه اصلی </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">صفحه ورود</a>
                        </li>
                        <?php if (isset($_SESSION['login'])) :?>

                        <li class="nav-item">
                            <a class="nav-link" href="check.php">داشبورد</a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">صفحه خروج</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="formtakmili.php">فرم تکمیلی</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="list.php">لیست</a>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </div>


