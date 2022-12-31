
<script>
    $(function(){
      $('#like').click(function(){
        const $data= $(this).data('data');
        const $url= $(this).data('url');

         $.post($url,{data: $data}, function (response) {
               $('#button-area').html(response) 
            });
        
        
      });

    });

  </script><?php

include_once("userinfo.php");
include("connect.php");
$liked=0;
$query = "SELECT * FROM `user_fav_adverts` WHERE 1;";

$sonuc=$baglan->query($query);
if($sonuc->num_rows>0){
    if($cek=$sonuc->fetch_assoc()){
        $liked = 0;
        
    }}
     
 





 if($liked==0){


    
    $guncel ="INSERT INTO user_fav_adverts user_id,advert_id VALUES '".$user_id."','".$_POST["data"]."';";
     $sonucu=mysqli_query($baglan,$guncel);   
     if($sonucu){
        echo 'başarılı';

     }

 };

 if($liked==1){

$guncel ="DELETE FROM user_fav_adverts WHERE user_id='".$user_id."' AND advert_id='".$_POST["data"]."'";
       $sonucu=mysqli_query($baglan,$guncel);   
       if($sonucu){
        echo 'başarılı';

       }

 };

?>