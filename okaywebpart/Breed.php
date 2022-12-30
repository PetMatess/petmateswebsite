<!doctype html>
<html lang="en">

<head>
    <!-- her sayfa için değişecek -->
    <title>Animal Breeds</title>
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
    <link href='https://fonts.googleapis.com/css?family=Tienne' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Maven Pro' rel='stylesheet'>
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

    

    <div class="main-content " style="padding-top: 250px;  
    background-color: rgb(255, 210, 217);">
        
        <div class="bree">
            <h2>
                <style>
                    .bree {
                        font-family: 'Yuji Mai';
                        
                    }
                </style>Animal Breeds
            </h2>
        </div>
        <br>
        <div class="container backfont">

            <div id="carouselExampleIndicators" class="carousel slide w-80 h-80" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $r['pet-health-insurance'];?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $r['maxresdefault'];?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $r['cat_care_app_ui_4x.webp'];?>" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
        <div class="container backfont">
            <div class="container">
                <a href="<?php echo 'Breed_detail.php?pet_breeds_info=dog'?>" >
                <section class="mx-auto my-5" style="max-width: 23rem;">

                    <div class="card" style="background-color: #f5f7fa;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="img/puppy-2785074__340.jpg" 
                                class="img-fluid" />
                          
                        </div></a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Dog Breeds</h5>

                            <p class="card-text" style="text-transform: none;">
                                People have been breeding dogs since prehistoric times. The earliest dog breeders used
                                wolves to
                                create domestic dogs.
                                From the beginning, humans purposefully bred dogs to perform various tasks. Hunting,
                                guarding, and
                                herding are thought to be among
                                the earliest jobs eagerly performed by the animal destined to be called “man’s best
                                friend.”
                            </p>
                            <br><br><br>
                            <hr class="my-4" />

                        </div>
                    </div>

                </section> 
                <section class="mx-auto my-5" style="max-width: 23rem;">
                    <a href="<?php echo 'Breed_detail.php?pet_breeds_info=cat'?>">
                    <div class="card" style="background-color: #f5f7fa;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://static01.nyt.com/images/2021/09/14/science/07CAT-STRIPES/07CAT-STRIPES-jumbo.jpg?quality=75&auto=webp"
                                class="img-fluid" />
                            
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold"><a>Cat Breeds</a></h5>

                            <p class="card-text" style="text-transform: none;">
                                Domestic cat, small, usually hairy, domesticated, carnivorous mammal. Those who are
                                generally kept as pets are called
                                house cats, or if it is not necessary to distinguish them from other felines and small
                                cats, they are called cats.
                                People value the companionship of cats and their ability to hunt domestic pests.
                                <br><br><br><br>
                            </p>
                            <hr class="my-4" />

                        </div>
                    </div>

                </section>
                <section class="mx-auto my-5" style="max-width: 23rem;">
<a href="<?php echo 'Breed_detail.php?pet_breeds_info=bird'?>">
                    <div class="card" style="background-color: #f5f7fa;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="img/istockphoto-183412466-612x612.jpg"
                                class="img-fluid" />
                            
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body" style="text-transform: none;">
                            <h5 class="card-title font-weight-bold"><a>Bird Breeds</a></h5>

                            <p class="card-text">
                                There are numerous bird species all over the world. Typically, many scientists estimate
                                the number of bird species to be
                                about over 10,000. Do you know that birds are the only animals with features ? The tale
                                of the disappearance of dinosaurs is an interesting and mysterious one.
                                However, what they left behind is even
                                more interesting.
                                <br><br><br><br>
                            </p>
                            <hr class="my-4" />

                        </div>
                    </div>

                </section>
            </div>




            <div class="container">
                <section class="mx-auto my-5" style="max-width: 23rem;">
 <a href="<?php echo 'Breed_detail.php?pet_breeds_info=fish'?>">
                    <div class="card" style="background-color: #f5f7fa;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://images.unsplash.com/photo-1535591273668-578e31182c4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&w=1000&q=80"
                                class="img-fluid" />
                           
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body" style="text-transform: none;">
                            <h5 class="card-title font-weight-bold"><a>Fish Breeds</a></h5>

                            <p class="card-text">
                                Get ready to meet the tiny and colorful creatures that decorate your home. Fishes can
                                feel pain, fear and psychological stress so
                                recreating the natural habitat of the fish is one way of making it happy. After building
                                the appropriate environment for them with some music,
                                let's choose together which one will be your
                                friend.
                            </p>
                            <br><br>
                            <hr class="my-4" />

                        </div>
                    </div>

                </section>
                <section class="mx-auto my-5" style="max-width: 23rem;">

                    <div class="card" style="background-color: #f5f7fa;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://cdn.shopify.com/s/files/1/2394/1045/articles/Pet_Medicine_1_1000x.jpg?v=1614215092"
                                class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body" style="text-transform: none;">
                            <h5 class="card-title font-weight-bold"><a>Pet Tips & Tricks</a></h5>

                            <p class="card-text">
                                What your dog's body language is trying to tell you ?
                                <hr><p class="card-text">20 things you can learn from your pet</p>
                                <hr><p class="card-text">What is a curbside vet visit</p>
                            </p>
                            <br><br><br>
                            <hr class="my-4" />

                        </div>
                    </div>
                </section>
                <section class="mx-auto my-5" style="max-width: 23rem;">

                    <div class="card" style="background-color: #f5f7fa;">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="img/image-31471-800.jpg"
                                class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body" style="text-transform: none;">
                            <h5 class="card-title font-weight-bold"><a>Pet Health</a></h5>

                            <p class="card-text">
                                How can I help my cat stay at a healthy weight at home?
                                <hr><p class="card-text">Can I give my pet table scraps as treats?</p>
                                <hr><p class="card-text">Affordable pet-care options for southern Nevadans</p>
                            </p>
                            <br><br>
                            <hr class="my-4" />

                        </div>
                    </div>
                </section>
            </div>



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
            
            //handle Bootstrap carousel slide event
            $(".carousel").attr("data-interval", "2000");
        </script>

</body>

</html>
