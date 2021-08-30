<?php
include_once "header.php";


if (!isset($_SESSION['login'])){
    header("location:login.php");
}
else{
    echo "به صفحه داشبورد خوش امدید";
}
?>


</body>
</html>

