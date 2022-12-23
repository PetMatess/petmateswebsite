
<?php

$sef = strip_tags(trim($_GET['pet_breeds_info']));
if(!$sef){

echo ("ürün ulaşılmadı");

}else{
   
}?>

<!-- köpek bilgileri-->





<!doctype html>
<html lang="en">

<head>
    <!-- her sayfa için değişecek -->
    <title>Dog Breeds</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ayşegül Kadiroğlu" />
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
    <link href='https://fonts.googleapis.com/css?family=Yuji Mai' rel='stylesheet'>
    <link rel="stylesheet" href="navbarfooter.css">
    <link rel="stylesheet" href="breed.css">
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
            <a class="nav-link" href="ilanw.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Breed.php">Breed</a>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About_Us.php">About US</a>
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
<?php 

$sef = strip_tags(trim($_GET['pet_breeds_info']));
if(!$sef){

echo ("ürün ulaşılmadı");

}else{
   
}?>
     <?php
include("connect.php");
$sec="SELECT * FROM `pet_breeds_info` WHERE pet_type='$sef';";
$sonuc=$baglan->query($sec); ?>
    <div class="main-content " style="padding-top: 250px; background-color: rgb(236, 230, 222);">
        <div class="bree">
            <h2>
                <style>
                    .bree {
                        font-family: 'Yuji Mai';
                        
                    }
                </style> <?php echo $sef ?>
            </h2>
        </div>
        <br>

        <div class="container backfont">

 <?php
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
        $pet_breed_id = $cek['pet_breed_id'];
		$pet_breed_name = $cek['pet_breed_name'];
		$pet_type = $cek['pet_type'];
		$pet_breed_img = $cek['pet_breed_img'];
		$info = $cek['info']	;
        ?>
         <div class="breed-card-type-grid grid grid--flush grid-3-up grid--leave-last-row-margin">
                <div class="grid-col">
                    <div class="breed-type-card mla mra bpm-mx2 contents-filter shadow-sm p-2 mb-5 bg-white rounded" id="breed-type-card">
                        <div class="d-block relative">
                            <div class="media-wrap">
                                <img src="https://www.akc.org/wp-content/uploads/2017/11/Affenpinscher-running-outdoors.jpg"
                                    width="400" height="auto" class="attachment-rectangle_thumbnail size-rectangle_thumbnail"
                                    style="border-radius: 3em 3em 0 0;">
                                <h3 class="breed-type-card__title mt0 mb0 f-25 py3 px3"
                                    style="color: #682773; font-style: italic; font-weight: bold; text-align: center; margin-top: 20px;
                                    font-family: 'Jeju Gothic';">
                                   <?php echo $pet_breed_name ?></h3>
                                <div class="relative py3 px3 breed-type-card__content">
                                    <p class="f-16 mt1">
                          
                                    </p>
        
                                    <button data-name="one" type="button" class="link-with-arrow mbauto" data-toggle="modal"
                                        data-target="#exampleModalLong1"
                                        style="font-family: 'Jeju Gothic'; text-align: left; left: -10px;">
                                        See More
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header d-block">
                                                    <h5 class="modal-title" id="exampleModalLongTitle"
                                                        style="color: #682773; font-style: italic; font-weight: bold; text-align: center; margin-top: 20px;"><?php echo $pet_breed_name ?></h5>
                                                </div>
                                                <div class="modal-body f-16 text-center">
                                                    <img src="https://www.akc.org/wp-content/uploads/2017/11/Affenpinscher-running-outdoors.jpg" width="400" height="auto"
                                                        class="attachment-rectangle_thumbnail size-rectangle_thumbnail" style="border-radius: 3em 3em 3em 3em;">
                                                    <br><br>    
                                                    <p style="font-family: Kadwa;">
                                                    <?php echo $cek['info'] ?>
                                                    </p>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php

  }
   
}
else{
  echo"veri tabanı boş";
}
?>
            
        

            <!-- buraya istediğiniz kadar kod yazabilirsiniz-->


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

</body>

</html>
