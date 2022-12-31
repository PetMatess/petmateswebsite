
<?php
include("connect.php");
include("userinfo.php");
?>



<?php
include("connect.php");
$sec="SELECT * FROM `adverts` WHERE publisher_id = $user_id;";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
      $dogumTarihi = $cek['birthday'];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));
      

}
    echo "geldi";
    
}
else{
    echo"empt";
}



?>

<?php
include("connect.php");
$sec="SELECT DISTINCT * FROM user_fav_adverts, user, adverts WHERE user.user_id=user_fav_adverts.user_id AND user_fav_adverts.advert_id= adverts.advert_id AND user.user_id=$user_id;";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
      $dogumTarihi = $cek['birthday'];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));
      

}
    echo "geldi2";
    
}
else{
    echo"empt";
}



?>