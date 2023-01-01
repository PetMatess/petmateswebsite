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
          <link rel="stylesheet" href="ilan.css">
          
          <style>
            @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap');
            </style>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Navbar</title>
   <style>.fa {
    font-size: 40px;
    cursor: pointer;
    user-select: none;
  }
  
  .fa:hover {
    color: red;
  }
</style>
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
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Breed.php">Breed</a>
      
      
      <li class="nav-item">
        <a class="nav-link" href="About_Us.php">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <a class="nav-link header-btn my-2 my-sm-0" href="login.php"  >log in</a>
    </form>
  </div>
</nav>
    </div>
  </div>
</header>


<div class="main-content backfont "style="padding-top: 190px;">
  <div class="container">
  


<!-- buraya istediğiniz kadar kod yazabilirsiniz-->
<section>

  <div class="navbar  "  >
    <div id="typeBar" class="form-inline m-auto">
     
      <div style=" padding: 5px 20px !important;">
          <div class="btn  btn-outline-secondary nav-link type-bar index-test tablink " onclick="openPage('mix', this, 'pink')"id="defaultOpen">
            <img class="index-img" src="img/logo2(1).png" alt="">All
          </div>
        </div>
        <div style=" padding: 5px 20px !important;">
          <div class="btn  btn-outline-secondary nav-link type-bar index-test  tablink"onclick="openPage('dog', this, 'pink')"  >
            <img class="index-img" src="img/9f43d521e6825f48958825c38be21ff2.png" alt="">Dog
          </div>
        </div>
        <div style=" padding: 5px 20px !important;">
          <div class="btn  btn-outline-secondary nav-link type-bar index-test tablink "onclick="openPage('cat', this, 'pink')">
            <img class="index-img" src="img/d01735d8553cc24192f4109011a0bc54.png" alt="">Cat
          </div>
        </div>
        <div style=" padding: 5px 20px !important;"> 
          <div class="btn  btn-outline-secondary nav-link type-bar index-test tablink " onclick="openPage('bird', this, 'pink')" >
            <img class="index-img" src="img/2c3d1794f4418b671b520b1480d7877a.png" alt="">Bird
          </div>
        </div>
        <div style=" padding: 5px 20px !important;"> 
          <div class="btn  btn-outline-secondary nav-link type-bar index-test tablink " onclick="openPage('fish', this, 'pink')" >
            <img class="index-img" src="img/28280f3c4f81a7799e8765b9073fb7e1.png" alt="">Fish
          </div>
        </div>
      </div>
  </div>








  <div id="mix" class="tabcontent">
<div id ='Cards' class='row'>
    <?php
include("connect.php");
$sec="SELECT * FROM `adverts`;";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
     
$dogumTarihi = $cek['birthday'];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));


      
      ?>

       

        <div class='col-md-3'>
        <div class='' style='border-radius: 50px 50px 0px 0px; background-color: #F9F9F9;' onclick='selectedId(this)' >
        <a href="login.php" >
        <img class='card-img-top  cardimg'  src=<?php
        
        
        if ($cek['first_picture'] != null) {
          echo "uploads/".$cek['first_picture'];
        }else{
          echo "petmates_icons/petmates_logo.png";
        }
        
        ?> alt='Card image cap'>
        </a><div class='card-body'>
        <div class='d-flex justify-content-between align-items-center'>
        <div>
        <h5 class='cardtitle'><?php echo $cek['pet_name'] ?></h5>

        <p class='cardcity'><?php echo $cek['advert_city_name'] ?></p>
       
        </div>
        <div>
        <button onclick="like(this)"
                  style="width:40px 
                  "
                  
                  name = <?php echo $cek['pet_name'] ?> class="delete-adverts"><img src="img/favheart.png" style="width: 40px; height:40px "></button>
                       

                   </div>
                </div>
         
                  <div class='d-flex ' > 
      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/genders.png' alt=''><?php echo $cek['gender'] ?></div>
        
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/2591741a30ef24af7d953808babe06ab.png' alt=''><?php echo $cek['pet_breed'] ?></div>
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/5e07484fa0adae51e26d5d8fe3c09253.png' alt=''><?php 
        $month = $diff->format('%m'); // Ayı alır
        $year = $diff->format('%Y');
        if ($year == 0) {
          echo ("$month month");
      }else{
        echo ("$year year");
      }
        ?></div></div> 
        </div>
        </div>
        </div>
        

        <?php
    }
    
    
}
else{
    echo"empt";
}
?>
    </div>
  </div>



 
  

  <div id="dog" class="tabcontent">
<div id ='Cards' class='row'>
    <?php
include("connect.php");
$sec="SELECT * FROM `adverts` WHERE pet_type='dog';";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
$dogumTarihi = $cek['birthday'];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));

      ?>

       

      <div class='col-md-3'>
      <div class='' style='border-radius: 50px 50px 0px 0px; background-color: #F9F9F9;' onclick='selectedId(this)' >
      <a href="login.php" >
      <img class='card-img-top  cardimg' src=<?php
        
        
        if ($cek['first_picture'] != null) {
          echo "uploads/".$cek['first_picture'];
        }else{
          echo "petmates_icons/petmates_logo.png";
        }
        
        ?> alt='Card image cap'>
      </a><div class='card-body'>
      <div class='d-flex justify-content-between align-items-center'>
      <div>
      <h5 class='cardtitle'><?php echo $cek['pet_name'] ?></h5>

      <p class='cardcity'><?php echo $cek['advert_city_name'] ?></p>
      </div>
        <div>
        <button onclick="like(this)"
                  style="width:40px 
                  "
                  
                  name = <?php echo $cek['pet_name'] ?> class="delete-adverts"><img src="img/favheart.png" style="width: 40px; height:40px "></button>
                       

                   </div>
                </div>
         
                  <div class='d-flex ' > 
      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/genders.png' alt=''><?php echo $cek['gender'] ?></div>
        
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/2591741a30ef24af7d953808babe06ab.png' alt=''><?php echo $cek['pet_breed'] ?></div>
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/5e07484fa0adae51e26d5d8fe3c09253.png' alt=''><?php 
        $month = $diff->format('%m'); // Ayı alır
        $year = $diff->format('%Y');
        if ($year == 0) {
          echo ("$month month");
      }else{
        echo ("$year year");
      }
        ?></div></div> 
        </div>
        </div>
        </div>
        
      <?php
  }
  
  
}
else{
  echo"empt";
}
?>
    </div>
  </div>





  <div id="cat" class="tabcontent">
<div id ='Cards' class='row'>
    <?php
include("connect.php");
$sec="SELECT * FROM `adverts` WHERE pet_type='cat';";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
      $dogumTarihi = $cek['birthday'];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));

      ?>

       

      <div class='col-md-3'>
      <div class='' style='border-radius: 50px 50px 0px 0px; background-color: #F9F9F9;' onclick='selectedId(this)' >
      <a href="login.php" >
      <img class='card-img-top  cardimg' src=<?php
        
        
        if ($cek['first_picture'] != null) {
          echo "uploads/".$cek['first_picture'];
        }else{
          echo "petmates_icons/petmates_logo.png";
        }
        
        ?> alt='Card image cap'>
      </a><div class='card-body'>
      <div class='d-flex justify-content-between align-items-center'>
      <div>
      <h5 class='cardtitle'><?php echo $cek['pet_name'] ?></h5>

      <p class='cardcity'><?php echo $cek['advert_city_name'] ?></p>
      </div>
        <div>
        <button onclick="like(this)"
                  style="width:40px 
                  "
                  
                  name = <?php echo $cek['pet_name'] ?> class="delete-adverts"><img src="img/favheart.png" style="width: 40px; height:40px "></button>
                       

                   </div>
                </div>
         
                  <div class='d-flex ' > 
      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/genders.png' alt=''><?php echo $cek['gender'] ?></div>
        
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/2591741a30ef24af7d953808babe06ab.png' alt=''><?php echo $cek['pet_breed'] ?></div>
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/5e07484fa0adae51e26d5d8fe3c09253.png' alt=''><?php 
        $month = $diff->format('%m'); // Ayı alır
        $year = $diff->format('%Y');
        if ($year == 0) {
          echo ("$month month");
      }else{
        echo ("$year year");
      }
        ?></div></div> 
        </div>
        </div>
        </div>
        
      <?php
  }
  
  
}
else{
  echo"empt";
}
?>
    </div>
  </div>





  <div id="bird" class="tabcontent">
<div id ='Cards' class='row'>
    <?php
include("connect.php");
$sec="SELECT * FROM `adverts` WHERE pet_type='bird';";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
      $dogumTarihi = $cek['birthday'];
      $bugun = date("Y-m-d");
      $diff = date_diff(date_create($dogumTarihi), date_create($bugun));
      ?>

       

      <div class='col-md-3'>
      <div class='' style='border-radius: 50px 50px 0px 0px; background-color: #F9F9F9;' onclick='selectedId(this)' >
      <a href="login.php" >
      <img class='card-img-top  cardimg' src=<?php
        
        
        if ($cek['first_picture'] != null) {
          echo "uploads/".$cek['first_picture'];
        }else{
          echo "petmates_icons/petmates_logo.png";
        }
        
        ?> alt='Card image cap'>
      </a><div class='card-body'>
      <div class='d-flex justify-content-between align-items-center'>
      <div>
      <h5 class='cardtitle'><?php echo $cek['pet_name'] ?></h5>

      <p class='cardcity'><?php echo $cek['advert_city_name'] ?></p>
      </div>
        <div>
        <button onclick="like(this)"
                  style="width:40px 
                  "
                  
                  name = <?php echo $cek['pet_name'] ?> class="delete-adverts"><img src="img/favheart.png" style="width: 40px; height:40px "></button>

                   </div>
                </div>
         
                  <div class='d-flex ' > 
      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/genders.png' alt=''><?php echo $cek['gender'] ?></div>
        
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/2591741a30ef24af7d953808babe06ab.png' alt=''><?php echo $cek['pet_breed'] ?></div>
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/5e07484fa0adae51e26d5d8fe3c09253.png' alt=''><?php 
        $month = $diff->format('%m'); // Ayı alır
        $year = $diff->format('%Y');
        if ($year == 0) {
          echo ("$month month");
      }else{
        echo ("$year year");
      }
        ?></div></div> 
        </div>
        </div>
        </div>
        
      <?php
  }
  
  
}
else{
  echo"empt";
}
?>
    </div>
  </div>





  <div id="fish" class="tabcontent">
<div id ='Cards' class='row'>
    <?php
include("connect.php");
$sec="SELECT * FROM `adverts` WHERE pet_type='fish';";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
      $dogumTarihi = $cek['birthday'];
      $bugun = date("Y-m-d");
      $diff = date_diff(date_create($dogumTarihi), date_create($bugun));
      ?>

       

      <div class='col-md-3'>
      <div class='' style='border-radius: 50px 50px 0px 0px; background-color: #F9F9F9;' onclick='selectedId(this)' >
      <a href="login.php" >
      <img class='card-img-top  cardimg' src=<?php
        
        
        if ($cek['first_picture'] != null) {
          echo "uploads/".$cek['first_picture'];
        }else{
          echo "petmates_icons/petmates_logo.png";
        }
        
        ?> alt='Card image cap'>
      </a><div class='card-body'>
      <div class='d-flex justify-content-between align-items-center'>
      <div>
      <h5 class='cardtitle'><?php echo $cek['pet_name'] ?></h5>

      <p class='cardcity'><?php echo $cek['advert_city_name'] ?></p>
      </div>
        <div>
        
                  <button onclick="like(this)"
                  style="width:40px 
                  "
                  
                  name = <?php echo $cek['pet_name'] ?> class="delete-adverts"><img src="img/favheart.png" style="width: 40px; height:40px "></button>
                 
                       

                   </div>
                </div>
         
                  <div class='d-flex ' > 
      <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/genders.png' alt=''><?php echo $cek['gender'] ?></div>
        
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/2591741a30ef24af7d953808babe06ab.png' alt=''><?php echo $cek['pet_breed'] ?></div>
        <div class='d-flex align-items-center ' style='font-size: 10px; padding: 5px;'><img style='width: 20px; height: 20px;'  src='img/5e07484fa0adae51e26d5d8fe3c09253.png' alt=''><?php 
        $month = $diff->format('%m'); // Ayı alır
        $year = $diff->format('%Y');
        if ($year == 0) {
          echo ("$month month");
      }else{
        echo ("$year year");
      }
        ?></div></div> 
        </div>
        </div>
        </div>
        
      

      <?php
  }
  
  
}
else{
  echo"empt";
}
?>
    </div>
  </div>
    






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

 
</section>





<div id="Cards" class="row ">
 

 
  
        
  

  
 
 
  </div>
  


<!-- Modal -->



 </div>

</div>
  
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
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="Breed.php" class="nav-link px-2 text-muted">Breed</a></li>
      <li class="nav-item"><a href="News.php" class="nav-link px-2 text-muted">News</a></li>
      <li class="nav-item"><a href="About_Us.php" class="nav-link px-2 text-muted">About Us</a></li>
      <li class="nav-item"><a href="login.php" class="nav-link px-2 text-muted">Login</a></li>
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
  <script type="text/javascript">
   function like(x) {
   
    alert("you should login..")
};
  </script>
  <script src="Card.js"></script>
  <script src="detail.js"></script>
  </body>
</html>