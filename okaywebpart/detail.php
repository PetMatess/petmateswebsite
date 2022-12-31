
<?php
include("connect.php");
include("userinfo.php");
?>

<?php 

$sef = strip_tags(trim($_GET['advert_id']));
if(!$sef){

echo ("ürün ulaşılmadı");

}else{
   
}

?>





<?php
include("connect.php");
$sec="SELECT * FROM `adverts` WHERE advert_id ='".$sef."';";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
		$published_time = $cek['published_time'];
		$description = $cek['description'];
		$pet_name = $cek['pet_name'];
		$gender = $cek['gender'];
		$birthday = $cek['birthday'];
		$advert_city_name = $cek['advert_city_name'];
		$advert_district_name = $cek['advert_district_name'];
		$advert_address_line = $cek['advert_address_line'];
		$pet_type = $cek['pet_type'];
		$pet_breed = $cek['pet_breed'];
		$publisher_id = $cek['publisher_id'];
		$first_picture = $cek['first_picture'];
		
  }
  
  
  
  
}
else{
  echo"veri tabanı boş";
};
?>


  <?php
include("connect.php");
$secuser="SELECT * FROM `user` WHERE user_id ='".$publisher_id."';";
$sonucuser=$baglan->query($secuser);
if($sonucuser->num_rows>0){
	echo "$publisher_id";
    while($cekuser=$sonucuser->fetch_assoc()){
		echo "çalıştı";
		$user_img = $cekuser['user_img'];
		$user_email = $cekuser['email'];
		$user_phone = $cekuser['phone'];
		$user_name = $cekuser['name'];
		$user_surname = $cekuser['surname']	;
		
  }
  
  
  
  
}
else{
  echo"veri tabanı boş";
};


?>


<!-- buraya istediğiniz kadar kod yazabilirsiniz-->




<!doctype html>
<html lang="en">
  <head>
    <!-- her sayfa için değişecek -->
    <title>petmates.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ramazan Gencer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="img/Logo2(1).png">
      <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="navbarfooter.css">
          <style>
            @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap');
            </style>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">


    <title>Navbar</title>
  </head>
  
  
  <body>

<header class="header">
  <div class="header-inner">
    <div class="container-fluid px-lg-5">
      <nav class="navbar navbar-expand-lg my-navbar">
  <a class="navbar-brand" href="#"><span class="logo">
    <div class="logofont ">
    <img src="img/Logo2(1).png" class="logoimg">petmates.com</span>
    </div>
    <div class="logobottom">
     adopt and adore
    </div>
    
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a class="nav-link" href="ilanw.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Breedw.php">Breed</a>
          
          <li class="nav-item">
            <a class="nav-link" href="About_Usw.php">About US</a>
          </li>
        </ul>
          <img src="img/WhatsApp-Profil-Resmi-29.webp" class="user" onclick="toggleMenu()"  style="height:90px; width: 90px;"/>
    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <div class="user-info">
               <img src="img/WhatsApp-Profil-Resmi-29.webp" >
                <h3><?php echo "$name" ?> </h3>
            </div>
            <hr />

            <a href="MyFavorites.php" class="sub-menu-link">
                <img src="img/acunt.png" >
                <p>My Profile</p>
                <span>></span>
            </a>
            <a href="Adverts_add.php" class="sub-menu-link">
              <img src="img/add.png" >
                <p>Advert add</p>
                <span>></span>
            </a>
            <a href="privacy_policy.php" class="sub-menu-link">
              <img src="img/privacy.png" >
                <p>Privacy</p>
                <span>></span>
            </a>
            <a href="logout.php" class="sub-menu-link">
              <img src="img/logout.png" >
                <p>Logout</p>
                <span>></span>
            </a>
        </div>
    </div>
      </div>
      </nav>
    </div>
    </div>
  </header>


  
<div class="main-content "style="padding-top: 190px;">
  <div class="container backfont">
  
    <style>
 
  .container-page {
  display: flex;
  flex-direction: row;
  font-size: small;
  width:980px;
   background:#fff;
    border:1px solid #e9e9e9;
     padding:10px 10px 0
}

.animal-photo {
  width: 80%;
}

.animal-info {
  width: 30%;
  margin-right: 5px;
}
.animal-info table tr{
  margin: 5px;
}
.owner-info {
  width: 30%;
  margin-right: 0px;
}
.ilan-basligi{
  margin-right: auto;
}
.description{
  margin-right: auto;
}

  .slides {
    display: none;
  }
  .slideshow-container {
    max-width: 250px;
    position: relative;
    margin: auto;
  }

  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }

  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  .prev {
    left: 0;
    border-radius: 3px 0 0 3px;
  }
 
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
 
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active, .dot:hover {
    background-color: #717171;
  }
  #favorite-button {
  background-color:  #b386ef;
  border: 1px solid  #b386ef;
  padding: 8px 16px;
  width: 100px;
  height: 50px;

}

#favorite-button.selected {
  background-color:  #8528fe;
  color: #8528fe;
  border-color: #8528fe;
}

    </style>
   
   <form action="" method="">
   
    <div class="ilan-basligi">
      <h3><?php echo ($pet_name) ?></h2>
    </div>

    <div class="container-page">
      <div class="animal-photo">
        <div class="slideshow-container">

        <div class="mySlides fade">
            <img src=<?php echo "uploads/".$first_picture;?>  class=" lazyloaded" style="width:100%">
          </div>
        <?php
include("connect.php");
$sec="SELECT * FROM `advert_images` WHERE  advert_id ='".$sef."';";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
      ?>


          <div class="mySlides fade">
            <img src=<?php echo "uploads/".$cek['image'];?> class=" lazyloaded" style="width:100%">
          </div>
        

          <?php
  }
  
  
}
else{
  echo"veri tabanı boş";
}
?>



        </div>
        <div style="text-align:center">
        
        
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 



        </div>
      </div>


      <div class="animal-info">


        




            <div><label>Published Time:</label><span><?php echo ($published_time) ?></span></div>
            <div><label>Name:</label><span><?php echo ($pet_name) ?></span></div>
            <div><label>Species:</label><span><?php echo ($pet_type) ?></span></div>
            <div><label>Breed:</label><span><a href="<?php echo "Breed_detail.php?pet_breeds_info=".$pet_type;?>"><?php echo ($pet_breed) ?></a></span></div>
            <div><label>Birdth day :</label><span><?php echo ($birthday) ?></span></div>
            <div><label>Gender:</label><span><?php echo ($gender) ?></span></div>
            <div><label>Location:</label><span><?php echo ($advert_city_name) ?> / <?php echo ($advert_district_name) ?> / <?php echo ($advert_address_line) ?></span></div>
          
      </div>
      <div class="owner-info">

        <div><label>Owner:</label><span><?php echo ($user_surname) ?> <?php echo ($user_surname) ?> </span></div>
        <div><label>Email:</label><span><?php echo ($user_email) ?></span></div>
        <div><label>Phone Number: </label><span><?php echo ($user_phone) ?></span></div>
        <div><label><button id="favorite-button">Favorite</button></label></div>

      </div>
    </div>
    <div class="description">
      <div><label>Description:</label><span><br><?php echo ($description) ?></span></div>
    </div>
 </div>

</form>

<script>
  var slideIndex = 0;
      showSlides();

      function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2500); // 2,5 saniyede bir fotoğraf değiştir
      }
      const button = document.getElementById('favorite-button');
button.addEventListener('click', function() {
  button.classList.toggle('selected');
});

</script>
  
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3  footer">
  <div class="container p-2"></div>
  <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
  <p class=" mb-0 ">Platform that finds best friends for our little and loyal friends</p>
  <p class=" mb-0 text-muted">&copy; patemates.com</p>
</div>
  <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img src="img/logo1.png" class="logoimg">
  </div>

  <ul class="nav col-md-4 justify-content-end">
  <li class="nav-item"><a href="indexw.php" class="nav-link px-2 text-muted">Home</a></li>
    <li class="nav-item"><a href="Breedw.php" class="nav-link px-2 text-muted">Breed</a></li>
    <li class="nav-item"><a href="Newsw.php" class="nav-link px-2 text-muted">News</a></li>
    <li class="nav-item"><a href="About_Usw.php" class="nav-link px-2 text-muted">About Us</a></li>
    <li class="nav-item"><a href="logout.php" class="nav-link px-2 text-muted">Log out</a></li>

  </ul>
</footer>
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script type="text/javascript">
  $(function(){
    var navbar = $('.header-inner');
    $(window).scroll(function(){
      if($(window).scrollTop() <=40){
        navbar.removeClass('navbar-scroll');
      }else{
        navbar.addClass('navbar-scroll');
      }
    });
  });
</script>
<script>
    function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
    <script>
         
         let subMenu = document.getElementById("subMenu");
     
         function toggleMenu() {
             subMenu.classList.toggle("open-menu");
         }
     </script>
</body>
</html>




















