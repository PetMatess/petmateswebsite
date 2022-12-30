<?php
include("connect.php");
include("userinfo.php");
?>
<!doctype html>
<html lang="en">

<head>
  <!-- her sayfa için değişecek -->
  <title>kemik</title>
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
  <link rel="stylesheet" href="Adverts_add.css">
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
          <li class="nav-item">
            <a class="nav-link" href="Newsw.php">News</a>
          </li>
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

            <a href="user_edit.php" class="sub-menu-link">
                <img src="img/pencil.png" >
                <p>Edit Profile</p>
                <span>></span>
            </a>
            

            <a href="#" class="sub-menu-link">
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
             
  <div class="main-content "
    style="padding-top: 190px;">
    <div class="container backfont">
      <main>
        <div class="stepper">
          <div class="step--1 step-active">Step 1</div>
          <div class="step--2">Step 2</div>
          <div class="step--3">Step 3</div>
          <div class="step--4">Success</div>
        </div>


        <form method="POST" action="" enctype="multipart/form-data">
        <div class="form form-active" id="form1">
          <div class="form--header-container">
            <h1 class="form--header-title">
              Hello
            </h1>
           
          </div>
          <h6 class="Date">Pet Name</h6>
          <input type="text" name="pet_name" placeholder="Pet Name" />

          <h6 class="Date">Gender</h6>
          <select class="form-select" name="gender" aria-label="Default select example" placeholder="Gender">

            <option value="Female">Female</option>
            <option value="Male">Male</option>
            
          </select>
          <h6 class="Date">Pet Type</h6>
          <select class="form-select" name="pet_type" aria-label="Default select example" placeholder="Gender">

            <option value="1">Female</option>
            <option value="2">Male</option>
            <option value="3"> Other</option>
          </select>
          <h6 class="Date">Pet Breed</h6>
          <select class="form-select" name="pet_breed" aria-label="Default select example" placeholder="Gender">

            <option value="1">Female</option>
            <option value="2">Male</option>
            <option value="3"> Other</option>
          </select>
          
          <h6 class="Date">Pet Breed Description</h6>
          <input type="text"  name="description" placeholder="Description" class="desc">
          <button  class="form__btn" id="btn-1">Next</button>
          </div>
        

      
     
     <div class="form " id="form1">
       
          <div class="form--header-container">
            <h1 class="form--header-title">
              Adress Info
            </h1>


          </div>
          <h6 class="Date">Birthday</h6>
          <input type="date" id="birthday" name="birthday" class="birthday" placeholder="Pet Birthday">

          <h6 class="Date">City</h6>
          <select class="form-select"  name="advert_city_name" aria-label="Default select example" placeholder="Gender">

            <option value="1">Ankara</option>
            <option value="2">Adana</option>
            <option value="3"> İstanbul</option>

          </select>
          <h6 class="Date">District</h6>
          <select class="form-select" name="advert_district_name" aria-label="Default select example" placeholder="Gender">

            <option value="1">Polatlı</option>
            <option value="2">Tepebaşı</option>
            <option value="3"> Odunpazarı</option>
          </select>
          <h6 class="Date">Full Addresses</h6>
          <input type="text" name="advert_address_line"  placeholder="Description" class="desc">






          <button class="form__btn" id="btn-2-prev">Previous</button>
          <button type="submit" name="form2" class="form__btn" id="btn-2-next">Next</button>
          </div>
       
      
        <div class="form " id="form1">
        
          <div class="form--header-container">
            <h1 class="form--header-title">
              Pet Photo
            </h1>
            

          </div>
          <h6 class="Date">Add Photo</h6>
         <div>
          <input type='file' name="photos[]" id="imageUpload" accept=".png, .jpg, .jpeg" multiple/>
          <label for="imageUpload" class="loa" ><img src="img/add(1).png" style="width: 70px;  height: 70px; margin-top: 27%;"></label>
          
        </div>

         
         <button id="btn-3"></button>
         <button type="submit"  class="submit " name="eklde" >Submit</button>
         </div>
        </form>
      

        <div class="form--message">
        <h1 class="form--message-text">            <?php


date_default_timezone_set('Europe/Istanbul');
$time_now = date('Y.m.d H:i:s');
echo $time_now;



  include("connect.php");
  if (isset($_POST["eklde"])){
    $photos = $_FILES['photos']['name'];
    echo $time_now;
    //$sec="select CID FROM blood_center where B_Name='".$_POST["B_Name"]."'";
    //$result=$baglan->query($sec);
    //$cek=$result->fetch_assoc();
      $ekli ="insert into adverts(published_time,description,pet_name,first_picture, gender,birthday, advert_city_name, advert_district_name, advert_address_line, pet_breed,	publisher_id , pet_type) values
      ('".$time_now."','".$_POST["description"]."','".$_POST["pet_name"]."','".$photos[0]."','".$_POST["gender"]."','".$_POST["birthday"]."','".$_POST["advert_city_name"]."','".$_POST["advert_district_name"]."','".$_POST["advert_address_line"]."','".$_POST["pet_breed"]."','".$user_id."','".$_POST["pet_type"]."')";
       $sonuc=mysqli_query($baglan,$ekli);
       if($sonuc){
        $last_id = mysqli_insert_id($baglan);

    
	      $countfiles = count($_FILES['photos']['name']);
		    error_log($countfiles);
		    // Looping all files
		    for($i=0;$i<$countfiles;$i++){
		      $filename = $_FILES['photos']['name'][$i];
		      // Upload file
		      move_uploaded_file($_FILES['photos']['tmp_name'][$i],'uploads/'.$filename);
		      $query = "INSERT INTO advert_images(advert_id,image) VALUES('$last_id','$filename')";
		      $results = mysqli_query($baglan, $query);
		         if ($results){
             echo "<center>Registration Successful.</center>";           
             }else{
              echo "çoklu resim";
             }  
           }  }else{
            echo "form.php if else hatası sonuc için";} 
          } 
  
 
  ?> </h1>
        </div>

      </main>
     




     

















     
            
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
  <script src="Advertsadd.js"></script>
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
    x.classList.toggle("fa-gratipay");
};
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