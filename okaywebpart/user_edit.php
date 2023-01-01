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
      <div class="container rounded bg-light ">
        <div class="row">
          <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                width="150px"
                src=<?php
        
        
        if ($user_img != null) {
          echo "userphotos/".$user_img;
        }else{
          echo "img/acunt.png";
        }
        
        ?> ><span
                class="font-weight-bold"><?php echo "$name" ?> <?php echo "$lastname" ?></span><span
                class="text-black-50"><?php echo "$email" ?></span><span>
              </span></div>
              <button class="tablink1" onclick="openPage('changepassword', this,)" id="defaultOpen">Change
                Password</button>
              <button class="tablink1" onclick="openPage('changeE-mail', this)" role="button">Change E-mail</button>
              <button class="tablink1" onclick="openPage('changeprofile', this ) " role="button">Change profile photo</button>
              <button class="tablink1" onclick="openPage('changepersonal', this)" role="button">Change Personal
                information</button>

          </div>
          <div class="col-md-6 border-right">
            <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Profile Settings</h4>
              </div>


                <div id="changepassword" class="tabcontent">
                  <form method="POST" action="">
                    <div class="row mt-4">
                      <div class="mx-auto" style=" width:400px;"><label class="labels">Current Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="oldpws">
                      </div>
                      <div class="mx-auto" style=" width:400px;"><label class="labels">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="newpsw">
                      </div>
                      
                    </div>
                    <div class="mt-5 text-center">
                      <button class="btn btn-primary profile-button submit" type="submit" name="savepsw">Save
                        Password</button>
                    </div>
                  </form>
                  <?php

include("connect.php");
  if (isset($_POST["savepsw"])  ){
    echo "savepws butona basıldı";
      if($_POST["oldpws"] == $password){
        echo "if girdi";
      $guncel ="update user
      set password = '".$_POST["newpsw"]."'
      where user_id = '".$user_id."';";
       $sonucu=mysqli_query($baglan,$guncel);   
       if($sonucu){
        echo "<script type='text/javascript'>alert('successful');</script>";
        header("Location:logout.php");
        
       }else{
        echo "<script type='text/javascript'>alert('error');</script>";
       }   
}else{
  echo "<script type='text/javascript'>alert('password is wrong');</script>";
}
  }
?>
                </div>
                <div id="changeE-mail" class="tabcontent"> 
                  <form method="POST" action="">
                    <div class="row mt-4">
                      <div class="mx-auto" style=" width:400px;"><label class="labels">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="oldpws">
                      </div>
                      <div class="mx-auto" style=" width:400px;"><label class="labels">E-mail</label>
                        <input type="email" class="form-control" placeholder="Enter New E-mail" name="newmail">
                      </div>
                      
                    </div>
                    <div class="mt-5 text-center">
                      <button class="btn btn-primary profile-button submit" type="submit" name="savemail">Save
                        E-mail</button>
                    </div>
                  </form>
                  <?php

include("connect.php");
  if (isset($_POST["savemail"])  ){
    echo "savepws butona basıldı";
      if($_POST["oldpws"] == $password){
        echo "if girdi";
      $guncel ="update user
      set email = '".$_POST["newmail"]."'
      where user_id = '".$user_id."';";
       $sonucu=mysqli_query($baglan,$guncel);   
       if($sonucu){
        echo "<script type='text/javascript'>alert('successful');</script>";
       }else{
        echo "<script type='text/javascript'>alert('error');</script>";
       }   
}else{
  echo "<script type='text/javascript'>alert('password is wrong');</script>";
}
  }
?>             </div>
            <div id="changeprofile" class="tabcontent" enctype="multipart/form-data"> 
              <form method="POST" action="" enctype="multipart/form-data">
                <div class="row mt-4 mx-5">

                  <div class="avatar-upload  " >
                    <div class="avatar-edit">
                        <input type="file" id="imageUpload"  name = "photos[]" accept=".png, .jpg, .jpeg" multiple />
                        <label for="imageUpload" class="loa" ><img src="img/pencil.png" width="20px" height="20px" ></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(img/logo1.png);">
                        </div>
                    </div>
                </div>

                  <div class="mx-auto" style=" width:400px;"><label class="labels">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="oldpws">
                  </div>
                </div>
                <div class="mt-5 text-center">
                  <button class="btn btn-primary profile-button submit" type="submit" name="savephoto">Save
                 Photo</button>
                </div>
              </form>

              </form>

             
      <?php

include("connect.php");
  if (isset($_POST["savephoto"])  ){
      if($_POST["oldpws"] == $password){
         $photos = $_FILES['photos']['name'];
        
         // Looping all files
         $countfiles = count($_FILES['photos']['name']);
         error_log($countfiles);
         // Looping all files
         for($i=0;$i<$countfiles;$i++){
           $filename = $_FILES['photos']['name'][$i];
           // Upload file
           move_uploaded_file($_FILES['photos']['tmp_name'][$i],'userPhotos/'.$filename);
        echo "if girdi";
        $guncel ="update user
      set user_img = '".$photos[0]."'
      where user_id = '".$user_id."';";
       $sonucu=mysqli_query($baglan,$guncel);  }  
       if($sonucu){
        echo "<script type='text/javascript'>alert('successful');</script>";
       }else{
        echo "<script type='text/javascript'>alert('error');</script>";
       }   
}else{
  echo "<script type='text/javascript'>alert('password is wrong');</script>";
}
  }
?>

            </div>
            <div id="changepersonal" class="tabcontent"> 
              <form method="POST" action="">
                <div class="row mt-4">
                  <div class="mx-auto" style="width: 400px;"><label class="labels">Phone Number</label>
                    <input type="number" class="form-control" placeholder="05..." name="newnum">
                  </div>
                  <div class="mx-auto" style=" width:400px;"><label class="labels">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="oldpws">
                  </div>
                </div>
                <div class="mt-5 text-center">
                  <button class="btn btn-primary profile-button submit" type="submit" name="savenum">Save
                    Info</button>
                </div>
              </form>

              <?php

include("connect.php");
  if (isset($_POST["savenum"])  ){
    echo "savepws butona basıldı";
      if($_POST["oldpws"] == $password){
        echo "if girdi";
      $guncel ="update user
      set phone = '".$_POST["newnum"]."'
      where user_id = '".$user_id."';";
       $sonucu=mysqli_query($baglan,$guncel);   
       if($sonucu){
        echo "<script type='text/javascript'>alert('successful');</script>";
       }else{
        echo "<script type='text/javascript'>alert('error');</script>";
       }   
}else{
  echo "<script type='text/javascript'>alert('password is wrong');</script>";
}
  }
?> 

            </div>

            </div>
            

            
            


          </div>
          

        </div>
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
  <script>
    function openPage(pageName, elmnt, color) {
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
</body>

</html>