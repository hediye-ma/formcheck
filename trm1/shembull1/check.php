
<?php
//$_POST = ارسال شده استفاد میشود post برای ارسال دریافت اطلاعاتی که با استفاده از متد
//$_GET = ارسال شده استفاد میشود get برای ارسال دریافت اطلاعاتی که با استفاده از متد
// in_array = میگه مقدار اول در ارایه دوم قرار دارد یا نه و فقط برای ارایه ها استفاده میشود

$name = $_POST['username'];
$pass=$_POST['pass'];
$ar=array('hediye','mahdiye','reza');
if(in_array($name,$ar)){
    echo $name.' mojod ast';
}
else{
    echo 'no';
}