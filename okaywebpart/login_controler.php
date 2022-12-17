<?php

include("connect.php");
ob_start();
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql_check = "select * from user where email='".$email."' and password='".$password."' " or die(mysql_error());
$sonuc=$baglan->query($sql_check);

if($sonuc->num_rows>0) {

    
$_SESSION["login"] = "true";
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
header("Location:ilanw.php");

while($cek=$sonuc->fetch_assoc()){
    $_SESSION["user_img"] = $cek["user_img"];
    $_SESSION["user_id"] = $cek["user_id"];
    $_SESSION["email"] = $cek["email"];
    $_SESSION["phone"] = $cek["phone"];
    $_SESSION["name"] = $cek["name"];
    $_SESSION["surname"] = $cek["surname"];
}

}
else {
if($email=="" or $password=="") {
    

echo "<center>please correct them <a href=javascript:history.back(-1)>Geri Don</a></center>";
}
else {
echo "<center>please carrect them<br><a href=javascript:history.back(-1)>go login</a></center>";

}
}

ob_end_flush();
?>