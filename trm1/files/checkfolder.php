
<?php
//$_POST = ارسال شده استفاد میشود post برای ارسال دریافت اطلاعاتی که با استفاده از متد
//$_GET = ارسال شده استفاد میشود get برای ارسال دریافت اطلاعاتی که با استفاده از متد

$name = $_POST['username'];
$pass=$_POST['pass'];
$ar=array('hediye','mahdiye','reza');
if (!file_exists($name)){
    mkdir($name);
    echo "ایجادشد";
}
else{
    echo "فایل موجوداست";
}