



<?php

include("connect.php");
ob_start();
session_start();

$password =  $_SESSION["password"] ;
$user_id = $_SESSION["user_id"];
$user_img = $_SESSION["user_img"];
$email = $_SESSION["email"];
$phone = $_SESSION["phone"];
$name = $_SESSION["name"];
$lastname = $_SESSION["surname"];


if(!isset($_SESSION["login"])){
header("Location:login.php");

}
else {

}
?>
