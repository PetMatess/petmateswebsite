
<?php
include("connect.php");
include("userinfo.php");

?>
<!doctype html>
<html lang="en">

<head>
  <!-- her sayfa için değişecek -->
  <title>petmates.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Ramazan Gencer" />
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
            </li>
          
<li class="nav-item">
            <a class="nav-link" href="Pet_Health.php">Pet Health</a>
          </li>

<li class="nav-item">
            <a class="nav-link" href="Pet_Newsw.php">Pet News</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="About_Usw.php">About US</a>
          </li>
        </ul>
        <img src=<?php
        
        
        if ($user_img != null) {
          echo "userphotos/".$user_img;
        }else{
          echo "img/acunt.png";
        }
        
        ?> class="user" onclick="toggleMenu()"  style="height:90px; width: 90px;"/>
    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <div class="user-info">
               <img src=<?php
        
        
        if ($user_img != null) {
          echo "userphotos/".$user_img;
        }else{
          echo "img/acunt.png";
        }
        
        ?> >
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


  <div class="main-content " style="padding-top: 190px;">
    <div class="container backfont">
      <section class="container">
        <div class="card1">
          <div class="bg-image">
            <img src="img/High_resolution_wallpaper_background_ID_77701862854.jpg" alt="">
          </div>
          <div class="pic">
            <img src="img/IMG_20190723_184551_560.jpg" alt="">

          </div>
          <div class="info">
            <h3>Adem Doğan</h3>
            <span><i class="fas fa-code"></i> Frontend Deweloper</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dicta suscipit possimus fugiat
              eos? At illum numquam quia odio ipsa enim eveniet animi explicabo omnis ullam! Illum mollitia
              expedita perferendis.</p>
          </div>
          <div class="iconss">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
          </div>
        </div>

        <div class="card1">
          <div class="bg-image">
            <img src="img/High_resolution_wallpaper_background_ID_77701862854.jpg" alt="">
          </div>
          <div class="pic">
            <img src="img/IMG-20200309-WA0000.jpg" alt="">

          </div>
          <div class="info">
            <h3>Ramazan Gencer</h3>
            <span><i class="fas fa-code">
              </i>Full Stack Developer</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dicta suscipit possimus fugiat
              eos? At illum numquam quia odio ipsa enim eveniet animi explicabo omnis ullam! Illum mollitia
              expedita perferendis.</p>
          </div>
          <div class="iconss">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
          </div>
        </div>

        <div class="card1">
          <div class="bg-image">
            <img src="img/High_resolution_wallpaper_background_ID_77701862854.jpg" alt="">
          </div>
          <div class="pic">
            <img src="img/indir1.png" alt="">

          </div>
          <div class="info">
            <h3>Göksu Turaç</h3>
            <span><i class="fas fa-code"></i> Mobile Application Developer</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dicta suscipit possimus fugiat
              eos? At illum numquam quia odio ipsa enim eveniet animi explicabo omnis ullam! Illum mollitia
              expedita perferendis.</p>
          </div>
          <div class="iconss">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
          </div>
        </div>

        <div class="card1">
          <div class="bg-image">
            <img src="img/High_resolution_wallpaper_background_ID_77701862854.jpg" alt="">
          </div>
          <div class="pic">
            <img src="img/Utku2.jpg" alt="">

          </div>
          <div class="info">
            <h3>Utku Ozan</h3>
            <span><i class="fas fa-code"></i> Mobile Application Developer</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dicta suscipit possimus fugiat
              eos? At illum numquam quia odio ipsa enim eveniet animi explicabo omnis ullam! Illum mollitia
              expedita perferendis.</p>
          </div>
          <div class="iconss">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
          </div>
        </div>

        <div class="card1">
          <div class="bg-image">
            <img src="img/High_resolution_wallpaper_background_ID_77701862854.jpg" alt="">
          </div>
          <div class="pic">
            <img src="img/WhatsAppImage2022-01-13at23.04.12.jpeg" alt="">

          </div>
          <div class="info">
            <h3>Onur Haktan</h3>
            <span><i class="fas fa-code"></i> Backend Deweloper</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dicta suscipit possimus fugiat
              eos? At illum numquam quia odio ipsa enim eveniet animi explicabo omnis ullam! Illum mollitia
              expedita perferendis.</p>
          </div>
          <div class="iconss">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
          </div>
        </div>

        <div class="card1">
          <div class="bg-image">
            <img src="img/High_resolution_wallpaper_background_ID_77701862854.jpg" alt="">
          </div>
          <div class="pic">
            <img src="img/1655994544885.jpg" alt="">

          </div>
          <div class="info">
            <h3>Ayşegül Kadiroğlu</h3>
            <span><i class="fas fa-code"></i> Frontend Deweloper</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dicta suscipit possimus fugiat
              eos? At illum numquam quia odio ipsa enim eveniet animi explicabo omnis ullam! Illum mollitia
              expedita perferendis.</p>
          </div>
          <div class="iconss">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
          </div>
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
      <li class="nav-item"><a href="indexw.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="Breedw.php" class="nav-link px-2 text-muted">Breed</a></li>
      <li class="nav-item"><a href="Newsw.php" class="nav-link px-2 text-muted">News</a></li>
      <li class="nav-item"><a href="About_Usw.php" class="nav-link px-2 text-muted">About Us</a></li>
      <li class="nav-item"><a href="logout.php" class="nav-link px-2 text-muted">Log out</a></li>

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
    <script>
         
         let subMenu = document.getElementById("subMenu");
     
         function toggleMenu() {
             subMenu.classList.toggle("open-menu");
         }
     </script>

</body>

</html>
