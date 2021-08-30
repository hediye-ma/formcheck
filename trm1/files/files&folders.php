

<?php
// mkdir = برای ایجاد یک فولدر
mkdir("hdiye");
echo "<br>";
echo "<br>";
echo "<br>";



//file_exists = چک میکنه که این پوشه موجود است یا نه اگه بود 1 رو نمایش میده
file_exists("hdiye");

//مثال : یک فولدری با نام دلخواه ایجاد کنید اگه با اون نام موجود بود بگه این فایل موجود است
if (!file_exists($a="mahdi")){
    mkdir($a);
    echo "فایل ایجاد شد";
}
else {
    echo "فایل با این نام موجود بوده است";
}
// rmdir = برای حذف فایل
rmdir("reza");
rmdir("hdiye");
rmdir("mahdi");
echo "<br>";
//unlink = مسیریک فایل رو میگیره و فایل رو چاک میکنه
 if(unlink("rings/mas.php")){
    echo  "حذف شد" ;
}




