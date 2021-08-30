<?php
include_once 'connect.php';
$id= $_GET['id'];
$pdo=connect_db();
$query=$pdo->prepare("delete from doc_tbl where id='$id'");
$query->execute();
header("location:list.php");
