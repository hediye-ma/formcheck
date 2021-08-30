<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link href="/font/IRANSansWeb.ttf" rel="stylesheet">
        <link href="/font/IRANSansWeb.woff" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <script src="../js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

      <div class="form">
        <form action="check.php" method="post" >
            <select name="madrak"  class="form-control">
                  <?php
                  for ($i=1;$i<=6;$i++) {
                      echo"<option  value=\"$i\">$i</option>";
                  }
                  ?>

            </select>
            <br>
            <input type="submit" name="sub" value="send" class="btn btn-primary">

        </form>
    </div>

    <div class="form">
        <form action="check.php" method="post" >
            <select name="madrak"  class="form-control">

                  <?php
                  $a=1;
                while ($a<=10):
                  echo "<option value='$a'> $a </option>";
                  $a++;
                  endwhile;
                  ?>
            </select>
            <br>
            <input type="submit" name="sub" value="send" class="btn btn-primary">

        </form>
    </div>

<!--*******************  توجه! بسیار مهم! ****************
 foreach = محسوب میشه و در ارایه ها کاربرد داره  php یکی از پر کاربرد ترین حلقه ها در
اولین عنصر این حلقه حتما باید یه ارایه باشه و در عنصر بعدی یه متغییر به داخواه تعرین میکنیم
 و عناصر اریه رو به صورت رشته به ما برمیگردونه
نکته!!! = حتما باید یه ارایه بهت بدیم در قسمت اول
              مثال1:  -->
        <?php
      $array= array('hediye','reza','mehdi','mahdiye','mona');
      foreach ($array as $nam){
          echo $nam." ";
      }
      ?>
<!--        مثال2: اعضای یک ارایه رو به صورت یک کلیک باکس در بیارید   -->
      <div class="form">
          <form action="check.php" method="post" >
              <select name="madrak"  class="form-control">

                  <?php
                  $array= array('hediye','reza','mehdi','mahdiye','mona');
                  foreach ($array as $nam) {
                      echo "<option value='$nam'> $nam </option>";
                  }
                  ?>
              </select>
              <br>
              <input type="submit" name="sub" value="send" class="btn btn-primary">


          </form>
      </div>
<!-- مثال 3 :  اگر اسم مورد نظر در اراییه موجود بود یک عبارتی رو چاپ کن    -->

      <?php
      $array= array('hediye','reza','mehdi','mahdiye','mona');
      foreach ($array as $add=>$nam) {
            if ($nam=="mehdi"){
                echo $nam." ".$add." پیدا شد ";
            }
        }
      ?>
      <br>
      <br>
      <br>
<!--    مثال 4:  چاپ اندیس مقدار های ارایه   -->
<?php
$array= array('hediye','reza','mehdi','mahdiye','mona');
foreach ($array as $add=>$nam) {
    echo $add."<br>";
 }
?>

</body>
</html>





