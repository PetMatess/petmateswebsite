<!doctype html>
<html lang="en">

<head>
  <!-- her sayfa için değişecek -->
  <title>PetMates</title>
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


  <title>PetMates</title>
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
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Breed.php">Breed</a>
          
         </li>
          <li class="nav-item">
            <a class="nav-link" href="Pet_Health.php">Pet Health</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Pet_News.php">Pet News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About_us.php">About Us</a>
          </li>
        </ul>
       
      </div>
      </nav>
    </div>
    
  </header>

<!--background-image: url(/img/pattern_edited1.jpg) ; background-size:2000px 1100px;-->
  <div class="main-content " style="padding-top: 190px; ">
    <div class="container backfont" >
      <div class="login" >
        <section class="loginpage" >
            <div class="cont" style="margin-bottom: 50px; margin-top:50px;">
              <div class="form sign-in">
                <h2 id="Title">Sign In</h2>
                <form action="login_controler.php" method="POST">
                <label for="Email">
                  <!-- burada e mail ve paswora ulaşmak için  için id veriyoruz Dolayısıyla İD tanımlıyoruz-->
                  <span>Email Address</span>
                  <input type="text" placeholder="Enter email" name="email" required>
                </label>
                <label for="psw">
                  <span>Password</span>
                  <input type="password" placeholder="Enter Password" name="password" require>
                <button class="submit"  name="giris"   id="signin">Sign In</button>
                </label>
              </form>
              <?php

?>
              
              <!-- burada aubmit için aksiyon veriyoruz Dolayısıyla İD tanımlıyoruz-->
                
                <p class="forgot-pass">Forgot Password ?</p>
        
                <div class="social-media">
                  <ul>
                    <li><img src="img/facebook.png"></li>
                    <li><img src="img/twitter.png"></li>
                    <li><img src="img/github-sign.png"></li>
                    <li><img src="img/instagram.png"></li>
                  </ul>
                </div>
              </div>
        
              <div class="sub-cont">
                <div class="img">
                  <div class="img-text m-up">
                    <h2 id="Title">New here?</h2>
                    <p>
                      Sign up and make Very nice friends!</p>
                  </div>
                  <div class="img-text m-in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just sign in. We've missed you!</p>
                  </div>
                  <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                  </div>
                </div>
                
                <div   class="form sign-up">
                  
                  <h2 id="Title">Sign Up</h2>
                  <form method="POST" action="">
                  <label for="fname">
                    <span>Name</span>
                    <input type="text" name="name" required placeholder="Your name..">
                  </label>
                  <label for="lname">
                    <span>Surname</span>
                    <input type="text" name="surname" required  placeholder="Your last name..">
                  </label>
                  <label for="email">
                    <span>Email</span>
                    <input type="text"   name="email" required  placeholder="Your mail ..">
                  </label>
                  <label for="password">
                    <span>Password</span>
                    <input input type="password"   name="password" required  placeholder="Your pasw Number.." id="signuppassword">
                  </label>
                   <button type="submit" class="submit" id="signup" name="ekle">Sign Up Now</button>
                </form>
  
                </div>
 
              </div>
                
            </div> 
            <?php
  include("connect.php");
  if (isset($_POST["ekle"])){

   

    //$sec="select CID FROM blood_center where B_Name='".$_POST["B_Name"]."'";
    //$result=$baglan->query($sec);
    //$cek=$result->fetch_assoc();
    
      

      $ekli ="insert into user(name,surname,email,password) values
      ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["email"]."','".$_POST["password"]."')";


       $sonuc=mysqli_query($baglan,$ekli);
    

       if($sonuc){

        echo "<center>Registration Successful.</center>";
           
       }else{
           echo "form.php if else hatası sonuc için";
       }   
  }
 
  ?>              
            </section> 
                        
        </div>
      </div>
   
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
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="Breed.php" class="nav-link px-2 text-muted">Breed</a></li>
      <li class="nav-item"><a href="News.php" class="nav-link px-2 text-muted">News</a></li>
      <li class="nav-item"><a href="About_Us.php" class="nav-link px-2 text-muted">About Us</a></li>
      <li class="nav-item"><a href="login.php" class="nav-link px-2 text-muted">Login</a></li>
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
    document.querySelector('.img-btn').addEventListener('click', function()
      {
        document.querySelector('.cont').classList.toggle('s-signup')
      }
    );</script>

</body>

</html>