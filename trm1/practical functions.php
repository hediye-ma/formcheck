<?php
 $boolean=true;

 $number=3458;

echo $text=" i am hediy mashhodi from tehran";
echo "<br>";
 echo $email="hediye.mashhodi@gmail.com";
//************ strlen= تهداد کارکتر های رشته رو با عد به ما نمایش میده ********//
echo "<br>";
echo "<br>";
$txt=strlen("hedie");
echo $txt;


echo "<br>";
echo "<br>";
echo "<br>";

echo strlen($text);
echo "<br>";
echo "<br>";
echo "<br>";
//*********************** str_repeat = دو تا مقدار میگیره اولی رشته دومی عدد***************//
//************ به تعداد مقدار عددی که میگیره مقدار اول رو چاپ میکنه ***********************//
echo str_repeat("hediy ",5);
echo "<br>";
echo "<br>";
echo "<br>";


//str_replace= در داخل متغیری که بهش دادیم میگریده مقدار اول رو پیدا میکنه مقدار دوم رو بجاش قدار مید
echo str_replace("hediye","mahdiye",$text);

echo "<br>";
echo "<br>";
echo "<br>";


// strstr=داخل رشته مورد نظر میگرده اون کلمه ای که در قسمت دوم دادیم رو پیدا میکه ازاونجا به بعد چاپ میکن

echo strstr($text,"from");
echo "<br>";
echo "<br>";
echo "<br>";


// strshuffle = کارکتر های داخل رشته رو بهصورت تصادفی چاپ میکنه

echo str_shuffle($text);
echo "<br>";
echo "<br>";
echo "<br>";


// strpos= بیشتر برای شرط ها به کار میره میگه مقدار دوم در متغیر اول موجود است یا خیر ول چیزی نمایش نمیده

//strpos($text,"hediye");
 if (strpos($text,"i")){
 echo "yes";
}
 else{
     echo "no";
 }
echo "<br>";
echo "<br>";
echo "<br>";


//explode=میاد مقدار ارگمان دوم رو بر اساس چیزی چه در ارگمان اول مشخص کردیم(فاصله یاو...)خوردش میکنه
//و تبدیل به یک ارایه میکنه چیزی نمایش نمیده خروجی اون رو باید با استفاده از var_dump چک کنیم

$array= explode(' ',$text);
var_dump($array);
echo "<br>";
echo "<br>";
echo "<br>";
$array= explode('.',$email);
var_dump($array);
echo "<br>";
echo "<br>";
echo "<br>";
echo end($array);  // اخرین خونه ارایه رو نمایش میده

echo "<br>";
echo "<br>";
echo "<br>";


// implode = اجزای ارایه رو با استفاده از چیزی که در ارگمان اول گفتیم(مثلا میتونه فاصله یا نقطه یا... باشد) نمایش میده

$tx= implode(" ",$array);
echo $tx;
echo "<br>";
echo "<br>";
echo "<br>";


//gettype = ...و string یا array یا bool نوع متغییر رو نمایش میده که مثلا

echo gettype($tx);
echo "<br>";
echo gettype($array);

echo "<br>";
echo "<br>";
echo "<br>";


// rand= تولید عدد تصادفی

echo rand();
echo "<br>";
echo rand(100,900);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//is_string =   استفاده میشود (if مثل) است یا نه خروجی نداره  بیشتر در شرط ها string چک میکنه ببینه متعری که بهش دادین از نوع

if(is_string($array)){
    echo "yes";
}
else{
    echo "no" ;
}
echo "<br>";
echo "<br>";
echo "<br>";


//is_int =   استفاده میشود (if مثل) است یا نه خروجی نداره  بیشتر در شرط ها int چک میکنه ببینه متعری که بهش دادین از نوع

if(is_int($number)){
    echo "yes";
}
else{
    echo "no";
}
echo "<br>";
echo "<br>";
echo "<br>";


//is_bool =    استفاده میشود (if مثل) است یا نه خروجی نداره  بیشتر در شرط ها boolean چک میکنه ببینه متعری که بهش دادین از نوع

if(is_bool($boolean)){
    echo "yes";
}
else{
    echo "no";
}
echo "<br>";
echo "<br>";
echo "<br>";


//is_bool =    استفاده میشود (if مثل) است یا نه خروجی نداره  بیشتر در شرط ها array چک میکنه ببینه متعری که بهش دادین از نوع

if(is_array($array)){
    echo "yes";
}
else{
    echo "no";
}

echo "<br>";
echo "<br>";
echo "<br>";

// empty = چی میکنه که داخل متغییر خالی است یا نه
if(empty($tx)){
    echo "yes";
}
else{
    echo "no";
}
echo "<br>";
echo "<br>";
echo "<br>";


//  count = یک ارایه میگیره و تعداد اندیس های ارایه رو نمایش میده

echo count($array);

echo "<br>";
echo "<br>";
echo "<br>";

//  min , max =   بزرگ ترین عدد رو نمایش میده max کوچیک ترین عدد رو و min سه تا عدد میگیره
echo min(12,3,5);
echo "<br>";
echo max(3,5,15);

echo "<br>";
echo "<br>";
echo "<br>";



