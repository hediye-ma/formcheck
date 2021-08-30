<?php


//*************** data = برای نمایش تاریخ و زمان  به اینگلیسی استفاده میشه********************
echo (date('y'));


echo "<br>";
echo "<br>";


echo (date('y/m'));


echo "<br>";
echo "<br>";

echo (date('y/m/d'));
echo "<br>";
echo "<br>";


// نکته = اگر از Y بزرگ استفاده کنید سال رو به صورت کامل نمایش میده
//  اگر به جای m از M یا F استفاده کنیم اسم ماه رو نمایش میده
// اگز به جای d از l استفاده کنیم اسم روز رو نمایش میده

echo (date('Y/M/l'));

echo "<br>";
echo "<br>";


echo (date('H'));

echo "<br>";

echo (date('g'));

echo "<br>";

echo (date('h:i:s'));


echo "<br>";
echo "<br>";

//   برای تبدیل تاریخ به فارسی در به صورت زیر عمل میکنیم = date_default_timezone_set

date_default_timezone_set("asia/tehran");
echo (date('h:i:s'));
