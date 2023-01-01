
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






<!doctype html>
<html lang="en">

<head>
  <!-- her sayfa için değişecek -->
  <title>MyFavorites</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Adem Doğan" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="icon" type="image/png" sizes="16x16" href="img/Logo2(1).png">
  <!--fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="MyFavorites.css">
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
                <img src="img/Logo2(1).png" class="logoimg">petmates.com
            </span>
      </div>
      <div class="logobottom">
        adopt and adore
      </div>

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="Newsw.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About_Usw.php">About US</a>
          </li>
        </ul>
        <img src="img/WhatsApp-Profil-Resmi-29.webp" class="user" onclick="toggleMenu()"
          style="height:90px; width: 90px;" />
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img src="img/WhatsApp-Profil-Resmi-29.webp">
              <h3>Adem Doğan</h3>
            </div>
            <hr />

            <a href="#" class="sub-menu-link">
              <img src="img/pencil.png">
              <p>Edit Profile</p>
              <span>></span>
            </a>


            <a href="#" class="sub-menu-link">
              <img src="img/icons8-home-page-100.png">
              <p>MyAdverts</p>
              <span>></span>
            </a>


            <a href="#" class="sub-menu-link">
              <img src="img/privacy.png">
              <p>Privacy</p>
              <span>></span>
            </a>


            <a href="#" class="sub-menu-link">
              <img src="img/logout.png">
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



  <div class="main-content " style="padding-top: 190px; background-color: #efefef;">




    <section class="light" >
      <div class="container-sm">


        <article class="postcard light blue" style="background-image: url(img/cbfc106d5c5bcfee949464502816dae4_edited.jpg); background-repeat: no-repeat; background-size:cover;">
          <a class="postcard__img_link" href="#">
            <img class="postcard__img"
              src="img/close-up-of-cat-wearing-sunglasses-while-sitting-royalty-free-image-1571755145.jpg"
              alt="Image Title" />
          </a>
          <div class="postcard__text t-dark">
            <h1 class="postcard__title blue"><a href="#">Welcome</a></h1>
            <div class="postcard__subtitle small">

            </div>
            <div class="postcard__bar"></div>
            <div class="postcard__preview-txt">


              <div class="Info-user">
                <h4>Name : <?php echo $name ?> </h4>
                <h4>Surname :  <?php echo $lastname ?></h4>
                <h4>Email : <?php echo $email ?></h4>
                <h4>Mobile Number : <?php echo $phone ?></h4>
                
              </div>
              <div class="change-button"><a href="user_edit.php">
                  <button class="button-c">Change Your Information</button></a>
              </div>


            </div>

          </div>
        </article>

        <article class="postcard light blue "  style="background-image: url(img/cbfc106d5c5bcfee949464502816dae4_edited.jpg); background-repeat: no-repeat; background-size:cover;">
          <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="img/cute-dog-headshot.jpg" alt="Image Title" />
          </a>
          <div class="postcard__text t-dark">
            <h1 class="postcard__title blue"><a href="#">MyAdverts</a></h1>
            <div class="change-button" style="margin-left: 150px; display: inline-block;"><a href="Adverts_add.php">
                <button class="button-c">New Adverts</button></a>
            </div>
            <div class="postcard__subtitle small">

            </div>
            <div class="cards-adverts" style="display: inline-block;">
           
             







              <?php
include("connect.php");
$sec="SELECT * FROM `adverts` WHERE publisher_id = $user_id;";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
      $dogumTarihi = $cek['birthday'];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));
      
?>

<div class="postcard__preview-txt2" style="color: 
black;">

                <div class='ilan-style' style=' background-color: #F9F9F9;' onclick='selectedId(this)'>
                  <a href="<?php echo " detail.php?advert_id=".$cek['advert_id'];?>">
                    <div class="adverts-img" style="background-image: url(<?php echo "uploads/".$cek['first_picture'];?>);
              background-repeat: no-repeat; width: 250px ; height: 220px; background-size: contain;
              ">
              
            </div>
                  </a>
                  <form action="" method="post">
                  <button name = "guncelle" class="delete-adverts"><img src="img/x.png" style="width: 20px; height:20px "></button>
                  </form>
                  <div class='card-body'>
                    <div class='d-flex justify-content-between align-items-center'>
                      <div>
                        <h5 class='cardtitle'>
                          <?php echo $cek['pet_name'] ?>
                        </h5>

                        <p class='cardcity'>
                          <?php echo $cek['advert_city_name'] ?>
                        </p>
                        <p id='animalId'>
                          <?php echo $cek['advert_id'] ?>
                        </p>
                      </div>
                      <div>
                        <i onclick=' like(this)' class='fa fa-heart-o'></i>
                      </div>
                    </div>

                    <div class='d-flex '>
                      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px 5px;'><img
                          style='width: 20px; height: 20px;' src='img/88e42073f15a94a24e4ae7e56f70503c.png' alt=''>
                        <?php echo $cek['gender'] ?>
                      </div>

                      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px 5px;'><img
                          style='width: 20px; height: 20px;' src='img/2591741a30ef24af7d953808babe06ab.png' alt=''>
                        <?php echo $cek['pet_breed'] ?>
                      </div>
                      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px 5px;'><img
                          style='width: 20px; height: 20px;' src='img/5e07484fa0adae51e26d5d8fe3c09253.png' alt=''>
                        <?php echo $diff->format('%y y-%m m')  ?>
                      </div>
                    </div>
                  </div>
                </div>


              </div>


<?php             
     if (isset($_POST["guncelle"])){
    //$sec="select CID FROM blood_center where B_Name='".$_POST["B_Name"]."'";
    //$result=$baglan->query($sec);
    //$cek=$result->fetch_assoc();
      echo "butona basıldı";

    

      $guncel ="DELETE FROM adverts WHERE advert_id = '".$cek['advert_id']."'
      where publisher_id = '".$user_id."';";

       $sonucu=mysqli_query($baglan,$guncel);   
       if($sonucu){
           echo"silindi";
       }else{
           echo "güncelleme hatası";
       }   
  }
 


}
    }
else{
    echo"empt";
}



?>














         














            </div>

          </div>
        </article>
        <article class="postcard light red"  style="background-image: url(img/cbfc106d5c5bcfee949464502816dae4_edited.jpg); background-repeat: no-repeat; background-size:cover;">
          <a class="postcard__img_link" href="#">
            <img class="postcard__img" src="img/dog and cat.webp" alt="Image Title" />
          </a>
          <div class="postcard__text t-dark">
            <h1 class="postcard__title red"><a href="#">MyFavorites Adverts</a></h1>

            <div class="postcard__bar"></div>
            <div class="cards-adverts" style="display: inline-block;">

              




              <?php
include("connect.php");
$sec="SELECT DISTINCT * FROM user_fav_adverts, user, adverts WHERE user.user_id=user_fav_adverts.user_id AND user_fav_adverts.advert_id= adverts.advert_id AND user.user_id=$user_id;";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
      $dogumTarihi = $cek['birthday'];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));
$link= $cek['advert_id']

 ?>     


   
    
    
    
    
              <div class="postcard__preview-txt2" 
style="color: 
black;">

                <div class='ilan-style' style=' background-color: #F9F9F9;' onclick='selectedId(this)'>
                  <a href="<?php echo "detail.php?advert_id=".$link;?>">
                    <div class="adverts-img" style="background-image: url(img/close-up-of-cat-wearing-sunglasses-while-sitting-royalty-free-image-1571755145.jpg);
                background-repeat: no-repeat; width: 250px ; height: 200px; background-size: contain;
                "> 
                
                
              </div></a> <div style ="top:-80px">
                <form action="" method="post">
                  <button name = "sil" class="delete-adverts"><img src="img/x.png" style="width: 20px; height:20px "></button>
                  </form> </div>
                  <div class='card-body'>
                    <div class='d-flex justify-content-between align-items-center'>
                      <div>
                        <h5 class='cardtitle'>
                          <?php echo $cek['pet_name'] ?>
                        </h5>

                        <p class='cardcity'>
                          <?php echo $cek['advert_city_name'] ?>
                        </p>
                        <p id='animalId'>
                          <?php echo $cek['advert_id'] ?>
                        </p>
                      </div>
                      <div>
                        <i onclick=' like(this)' class='fa fa-heart-o'></i>
                      </div>
                    </div>

                    <div class='d-flex '>
                      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px 5px;'><img
                          style='width: 20px; height: 20px;' src='img/88e42073f15a94a24e4ae7e56f70503c.png' alt=''>
                        <?php echo $cek['gender'] ?>
                      </div>

                      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px 5px;'><img
                          style='width: 20px; height: 20px;' src='img/2591741a30ef24af7d953808babe06ab.png' alt=''>
                        <?php echo $cek['pet_breed'] ?>
                      </div>
                      <div class='d-flex align-items-center ' style='font-size: 10px; padding:  5px 5px;'><img
                          style='width: 20px; height: 20px;' src='img/5e07484fa0adae51e26d5d8fe3c09253.png' alt=''>
                        <?php echo $diff->format('%y y-%m m')  ?>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
    
    
    <?php
         if (isset($_POST["sil"])){
          //$sec="select CID FROM blood_center where B_Name='".$_POST["B_Name"]."'";
          //$result=$baglan->query($sec);
          //$cek=$result->fetch_assoc();
            echo "butona basıldı";
      
          
      
            $guncel ="DELETE FROM user_fav_adverts WHERE advert_id = '".$cek['advert_id']."' AND user_id= '".$user_id."';";
      
             $sonucu=mysqli_query($baglan,$guncel);   
             if($sonucu){
                 echo"silindi";
             }else{
                 echo "güncelleme hatası";
             }   
        }
       
    }
}else{
    echo"empt";
}



?>











            </div>
            <ul class="postcard__tagbox">


              </li>
            </ul>
          </div>
        </article>


      </div>
    </section>


  </div>



  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  footer">
    <div class="container p-2"></div>
    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
      <p class=" mb-0 ">Platform that finds best friends for our little and loyal friends</p>
      <p class=" mb-0 text-muted">&copy; patemates.com</p>
    </div>
    <div
      class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="img/logo1.png" class="logoimg">
    </div>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript">
    $(function () {
      var navbar = $('.header-inner');
      $(window).scroll(function () {
        if ($(window).scrollTop() <= 40) {
          navbar.removeClass('navbar-scroll');
        } else {
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>


  <script type="text/javascript">
    $(function () {
      var navbar = $('.header-inner');
      $(window).scroll(function () {
        if ($(window).scrollTop() <= 40) {
          navbar.removeClass('navbar-scroll');
        } else {
          navbar.addClass('navbar-scroll');
        }
      });
    });
  </script>
  <script>

    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>

</body>

</html>