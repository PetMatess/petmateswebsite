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
  <meta name="author" content="Ayşegül Kadiroğlu"  />
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
    <link rel="stylesheet" href="news_health.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap');
  </style>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">


  <title>Navbar</title>
</head>
<style>
    .projcard:nth-child(n) .projcard-img {
        left: initial;
        right: 0;
    }

    .projcard:nth-child(n) .projcard-textbox {
        left: initial;
        right: 430px;
    }

    .projcard-textbox::before,
    .projcard-textbox::after {
        content: "";
        position: absolute;
        display: block;
        background: #ff0000bb;
        background: #fff;
        top: -20%;
        right: -55px;
        height: 140%;
        width: 60px;
        transform: rotate(8deg);
    }
</style>


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
            <a class="nav-link" href="Pet_Healthw.php">Pet Health</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Pet_Newsw.php">Pet News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About_usw.php">About Us</a>
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
      </nav>
    </div>
    </div>
  </header>
  
  <div class="main-content " style="padding-top: 230px;">
        
        <div class="bree">
            <h2>
                <style>
                    .bree {
                        font-family: 'Kalam';
                        color: #424242;
                        text-align: center;
                        padding-top: 0.1px;
                        font-weight: bolder;
                        font-size: 20em;	
                    }
                </style>PET NEWS
            </h2>
        </div>


            <!-- buraya istediğiniz kadar kod yazabilirsiniz-->
            <div class="projcard-container">
            
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-leeds-63988419">
                            <img class="projcard-img"
                                src="https://www.halifaxcourier.co.uk/webimg/b25lY21zOmRjYTk3NGE0LTY2MTgtNDExMS05ZmI5LTBjNDJlYWFmZTFhZjpjMzM2MGNjNS0zYTE5LTQwYTYtYWZjOS1iNGJjM2MxYmYxYTQ=.jpg?width=1200&enable=upscale" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Todmorden: PAWS animal rescue charity's plea for new home</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Volunteers at an animal rescue charity in
                                    West Yorkshire have pleaded for help in their search for a new home.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">PAWS</span>
                                    <span class="projcard-tag">Rescue</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/world-us-canada-63885434">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/14B19/production/_118116748_gettyimages-1216611895-1.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Big cats: US Senate unanimously passes bill to curb private ownership</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A bill to restrict the private ownership of big cats like lions and tigers in the US has passed by unanimous consent in
                                the Senate.The Big Cat Public Safety Act would stop people from keeping the animals as pets and from them being exposed
                                to public petting and photo opportunities. </div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Big cats</span>
                                    <span class="projcard-tag">US</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/business-63565576">
                            <img class="projcard-img"
                                src="https://s.yimg.com/ny/api/res/1.2/CRb1vNZZ2EXENTL9qxrwIA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTM2MA--/https://media.zenfs.com/en/bbc_us_articles_995/b9fbe1d01d53fc8a16e93890752237df" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Would you switch your dog to eating lab-grown meat?</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A UK study earlier this year found that 61% of pet owners now want to know about the environmental impact of the food
                                they buy for their animal. Given the footprint of the pet food industry, this may well be a good thing. The global pet
                                food sector emits more greenhouse gases than countries including Mozambique and the Philippines, according to one
                                report.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Dog</span>
                                    <span class="projcard-tag">Lab-grown meat</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-wales-63845111">
                            <img class="projcard-img"
                                src="https://c.files.bbci.co.uk/12D83/production/_127878177_swanseajackbookwithbluebackground.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Swansea Jack: Dog's lifesaving tales remembered after 90 years</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A dog that became a hero 90 years ago is being celebrated to make sure the story of his bravery lives on. Swansea Jack,
                                a black retriever, saved at least 27 people and two dogs from drowning in the city between 1930 and 1937. Writer Berni
                                Hellier and illustrator Gayle Simmonds, who grew up in the area, have been fascinated with his story since their school
                                days.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Swansea Jack</span>
                                    <span class="projcard-tag">Tales</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.dogandcatshelter.com/">
                            <img class="projcard-img"
                                src="https://www.dogandcatshelter.com/wp-content/uploads/2021/03/Copy-of-Untitled-1.png" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Newcastle Dog and Cat Shelter</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">An animal rescue centre has appealed for help as it faces its heating bill increasing fourfold next year. The Newcastle
                                Dog and Cat Shelter said it expected its annual £50,000 bill to rise to over £200,000. The cost of heating each
                                individual kennel is predicted to go up from an average of £259 to more than £1,000.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Rescue</span>
                                    <span class="projcard-tag">Shelter</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/world-europe-isle-of-man-63402512">
                            <img class="projcard-img"
                                src="https://c.files.bbci.co.uk/BA5A/production/_118460774_024618253-2.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">New laws to protect pets from harm on Isle of Man make progress</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">New laws will strengthen the protection of pets from mistreatment and increase penalties for animal cruelty, an MHK has
                                said. The Animal Welfare Bill 2022 was unanimously backed at its second reading in the House of Keys. Michelle Haywood,
                                the Member for the Department of Environment, Food and Agriculture, said the new laws would apply to all kept animals.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Law</span>
                                    <span class="projcard-tag">Pets</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-suffolk-62724631">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/6F68/production/_126502582_6d092886-b8e5-4e5e-9ba5-af055539259a.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Cost of living puts the crunch on pet owners, says RSPCA</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">The "soaring demand" for help with vet fees due to the cost of living increase has resulted in the RSPCA opening a new
                                clinic to help struggling pet owners.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">RSPCA</span>
                                    <span class="projcard-tag">Vet fees</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-shropshire-62649240">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/F5F2/production/_126426926_8dadc926-8047-4272-84c6-fdc8d3894138.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Shropshire girl's online rescue bid for neglected pets</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A 13-year-old schoolgirl has rescued more than 
                                    45 animals over the past two years by trawling social media for neglected
                                pets that needed rehoming.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Rescue</span>
                                    <span class="projcard-tag">Animal</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-northamptonshire-62650444">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/2E1A/production/_126420811_rescue_dog.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Irthlingborough Nanna animal rescue shelter receiving 'unprecedented' call numbers</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">An animal shelter has said it has been handling 
                                    an "unprecedented" 75 calls a day from people considering giving up
                                their pets.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Shelter</span>
                                    <span class="projcard-tag">Animal</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-wiltshire-62608840">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/640/cpsprodpb/1390A/production/_126383108_whatsappimage2022-08-18at2.19.15pm.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Swindon care home gifted three goats</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A care home in Wiltshire has been given three goats to cheer up the residents and support their wellbeing. They were
                                bought by the daughters of one of the residents as a thank you to Orchid Care Home staff in Swindon. The goats have been
                                named Bourbon, Thor and Domino and animal therapy is known to be beneficial for dementia patients.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Goats</span>
                                    <span class="projcard-tag">Therapy</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-scotland-62135261">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/17E7D/production/_125871979_gettyimages-594808373.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Dog poo forms a significant part of foxes' diet</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Dog poo forms a significant part of the diet of red foxes living in pine forests in the Scottish Highlands, a study has
                                revealed. Researchers found that dog faeces has a calorific content similar to foxes' wild prey. But it is much easier
                                to "hunt" - with the foxes feeding on it especially when wild prey is scarce. The study said it was unprecedented for
                                one species to eat the faeces of another.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Diet</span>
                                    <span class="projcard-tag">Dog poo</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-london-62134068">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/5C9B/production/_125870732_mediaitem125870728.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Cat saved with animal oxygen mask after Paddington fire</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A cat saved from a house fire has become the first pet in London to use a specially adapted animal oxygen mask. Fire
                                crews attended a blaze in Paddington, central London, on Friday and saved two cats from the ground floor, putting a mask
                                on one of them. Station officer Nathan Beeby, who was at the scene, said the apparatus "ultimately saved the cat's
                                life".</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Cat</span>
                                    <span class="projcard-tag">Mask</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-wales-62010629">
                            <img class="projcard-img"
                                src="https://c.files.bbci.co.uk/100F6/production/_125828756_gettyimages-482144385.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Animal cruelty: RSPCA urges Wales ban on fair prize pets</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A century-old tradition of goldfish as 
                                    funfair prizes could come to an end as the RSPCA calls for a Wales-wide ban.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Funfair</span>
                                    <span class="projcard-tag">RSPCA</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.co.uk/news/uk-england-south-yorkshire-62068739">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/2E72/production/_125809811_smudge.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Smudge the stranded M18 motorway kitten on road to recovery</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A kitten which was rescued from the central reservation 
                                    of a motorway is said to have made a good recovery from its
                                ordeal.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Kitten</span>
                                    <span class="projcard-tag">Recovery</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/business-62056386">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/6E63/production/_125795282_mediaitem125795281.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Whiskas pet food off Tesco shelves after price row</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Mars has stopped supplying supermarket chain 
                                    Tesco with its Whiskas pet food in a row over prices.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Pet food</span>
                                    <span class="projcard-tag">Discount</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-south-yorkshire-62013191">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/640/cpsprodpb/11FBE/production/_125726637_cat3.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Kitten rescued from M18 motorway near Doncaster</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A motorway was brought to a standstill as a traffic officer 
                                    rescued a kitten stranded on the central reservation.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Kitten</span>
                                    <span class="projcard-tag">Rescue</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-beds-bucks-herts-62015116">
                            <img class="projcard-img"
                                src="https://c.files.bbci.co.uk/8752/production/_125724643_fnhhayleyandpassion30-6-22-158.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Terminally ill woman reunited with horse at Aylesbury hospice</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A woman who is receiving end of life care has been reunited with her beloved horse outside a hospice.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Horse</span>
                                    <span class="projcard-tag">Woman</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/articles/cd1kgd2191do">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/2048/cpsprodpb/a169/live/e4e94f60-f6e2-11ec-80a1-b39be3dad727.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Sharp rise in abandoned rabbits blamed on lockdown pet boom</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">The numbers of pet rabbits being found abandoned in 
                                    Scotland has increased sharply, according to animal welfare charity
                                the Scottish SPCA. It said 29 had been rescued and taken into its care already this year, 
                                compared with nine in 2021.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Rabbits</span>
                                    <span class="projcard-tag">Scottish SPCA</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-cambridgeshire-61959279">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/640/cpsprodpb/1693C/production/_125667429_woodgreen4.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Cost of living: Pet owners struggling with food bills says charity</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">An animal charity said it was helping people with pet 
                                    food and rehoming more animals due to the rising cost of living.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Animal</span>
                                    <span class="projcard-tag">Charity</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-wales-61938252">
                            <img class="projcard-img"
                                src="https://c.files.bbci.co.uk/A911/production/_125618234_dsc00582.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Illegal dog breeding investigations rise by 63% in Wales</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">The number of investigations into illegal dog breeding 
                                    in Wales rose by 63% last year, figures have shown.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Dog</span>
                                    <span class="projcard-tag">Investigation</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-norfolk-61910087">
                            <img class="projcard-img" 
                            src="https://ichef.bbci.co.uk/news/976/cpsprodpb/8D35/production/_125594163_animals4.png" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">West Norfolk RSPCA sees more animals due to cost of living</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">The rise in the cost of living has caused an increase 
                                    in animals being handed over to an animal rehoming centre, a charity said.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">RSPCA</span>
                                    <span class="projcard-tag">Animal</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-surrey-61907786">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/11F76/production/_105709537_dog-eating-index.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Cost of Living: Surrey RSPCA donating pet food to food bank</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">An animal charity has appealed for pet food donations as a 
                                    food bank scheme is coming under increasing pressure.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Pet food</span>
                                    <span class="projcard-tag">RSPCA</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-norfolk-61881882">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/4481/production/_125573571_petsfoodbank2.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Founder of North Walsham pet food bank appeals for delivery help</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">The founder of a food bank for pets has appealed for more 
                                    delivery drivers after the cost of living crisis prompted a
                                hike in demand.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Pet food</span>
                                    <span class="projcard-tag">Delivery</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.co.uk/news/uk-england-devon-61750371">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/16638/production/_125340719_3f7f34ef-fc49-441d-857c-11b34353957e.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Cost of living: Pets given up as owners struggle with rising prices</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">People are being forced to give up their pets because of the 
                                    increasing cost of living, according to animal shelters.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Animal</span>
                                    <span class="projcard-tag">Shelter</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/science-environment-61799718">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/3EE4/production/_125400161_bulldoggettyimages-934316346.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Dog health: Don't buy a bulldog until breed is reshaped, vets plead</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">The flat faces bred into bulldogs can cause a "lifetime of 
                                    suffering" and vets are urging people not to buy one.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Bulldog</span>
                                    <span class="projcard-tag">Breed</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-south-yorkshire-61719772">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/1368D/production/_125310597_shefffoodbanklandscape.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Sheffield pet food bank sees increase in requests for help</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">More pet owners are asking for help to feed 
                                    their animals due to the rising cost of living, a national animal charity
                                has said.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Pet food</span>
                                    <span class="projcard-tag">Prices</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-wales-61652175">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/7FC5/production/_124990723_catsnewproject.jpg2.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Facebook star Sainsbury's Cat found after going missing in Cardiff</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A social media star cat that vanished from its adopted 
                                    home at a supermarket has been located 25 miles away.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Cat</span>
                                    <span class="projcard-tag">Social media</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-wiltshire-61646311">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/44AA/production/_124987571_collagemaker-31-may-2022-02.45-pm.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Vet advises dogs to wear sunglasses to protect their eyes</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Active dogs that enjoy running on the beach, or joining 
                                    their humans out cycling or stand-up paddle boarding, might
                                benefit from wearing sunglasses.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Dog</span>
                                    <span class="projcard-tag">Vet</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-wiltshire-61646311">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/1567A/production/_123947678_rab.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">RSPCA sees increase in number of pets abandoned</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">The RSPCA has said it is seeing a big rise in 
                                    the number of abandoned pets as many owners struggle with the rising cost
                                of living.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">RSPCA</span>
                                    <span class="projcard-tag">Pets</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-wales-61634378">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/640/cpsprodpb/7D80/production/_124982123_img_9553.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Cost of Living: Cardiff pet food bank finds demand escalating</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A man who is struggling with the cost of living 
                                    crisis has said: "I feed my dog before I feed myself."</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Cardiff</span>
                                    <span class="projcard-tag">Pet food</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-wales-61530935">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/1024/branded_news/7806/production/_124862703_mediaitem124855944.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Ukraine War: Families want pet quarantine rule change</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A man who is struggling with the cost of living
                                    crisis has said: "I feed my dog before I feed myself."</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">War</span>
                                    <span class="projcard-tag">Dog</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/world-asia-61543052">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/124AE/production/_124862947_dogsafp.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Pampered pooches ride Japan</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Oh to be a pampered pooch on one of Japan's iconic Shinkansen 
                                    trains heading to a beautiful resort town.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Japan</span>
                                    <span class="projcard-tag">Pooche</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-bristol-61400337">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/14358/production/_124667728_photo-2022-05-10-14-20-03-1.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Rising costs leading to lockdown pets being dumped, RSPCA says</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Animal rescue centres say they are being inundated with 
                                    pets abandoned after being bought during lockdown.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">RSPCA</span>
                                    <span class="projcard-tag">Pet</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-york-north-yorkshire-60675499">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/640/cpsprodpb/1041E/production/_123609566_mediaitem123609565.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Harrogate pet crematorium and 'goodbye room' to open</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A pet crematorium complete with a "goodbye room" for 
                                    bereaved owners is to open in Harrogate.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Crematorium</span>
                                    <span class="projcard-tag">Pet</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/world-asia-india-60657698">
                            <img class="projcard-img"
                                src="https://c.files.bbci.co.uk/4842/production/_123589481_aryaz.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Ukraine: The Indian girl who would not abandon her dog in a war zone</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">Is it selfish to bring your pet along when you are being evacuated from a war zone? 
                                    Arya Aldrin, a 20-year-old medical
                                student who just fled Ukraine with her Siberian husky in tow, doesn't think so: "It would have been more selfish to
                                leave my dog behind."</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">War</span>
                                    <span class="projcard-tag">Dog</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/world-us-canada-60454480">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/11410/production/_123327607_zoey3.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Missing dog Zoey reunited with owners after 12 years</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A dog has been reunited with her owners in California after being missing for 12 years.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">California</span>
                                    <span class="projcard-tag">Dog</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/world-asia-60426585">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/10263/production/_121074166_2f4f27ca-e0af-4db6-b38a-31b406ebff10.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Vietnam: Viral dog owners rescue 15 puppies after Covid cull</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A Vietnamese couple whose dogs were killed by authorities over 
                                    Covid fears have adopted new puppies, following an
                                outpouring of public sympathy and donations.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Covid</span>
                                    <span class="projcard-tag">Dog</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/business-60137427">
                            <img class="projcard-img"
                                src="https://c.files.bbci.co.uk/1475A/production/_123020838_hi052228232.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Pet spending boom continues despite rising cost of living</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">The growth in pet ownership during the Covid pandemic has 
                                    continued with retailer Pets at Home forecasting record sales
                                and profits.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Covid</span>
                                    <span class="projcard-tag">Pet</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-scotland-north-east-orkney-shetland-60142736">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/E24B/production/_123013975_fergusmissingcat2.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Pet cat missing for 11 years reunited with owners</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A pet cat which went missing more than 11 years ago in north-east 
                                    Scotland has been reunited with his owners.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Pet</span>
                                    <span class="projcard-tag">Reunite</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="projcard">
                    <div class="projcard-innerbox">
                        <a href="https://www.bbc.com/news/uk-england-norfolk-59750121">
                            <img class="projcard-img"
                                src="https://ichef.bbci.co.uk/news/976/cpsprodpb/C977/production/_122357515_4fdeaeb4-8871-4e2b-87e7-3a124704437c.jpg" />
                            <div class="projcard-textbox">
                                <div class="projcard-title">Norwich Cathedral cat Budge is 'therapy' for parishioners</div>
                                <div class="projcard-bar"></div>
                                <div class="projcard-description">A cat which regularly attends services at a cathedral has been a 
                                    calming and "therapeutic" influence on parishioners,
                                the dean has said.</div>
                                <div class="projcard-tagbox">
                                    <span class="projcard-tag">Cat</span>
                                    <span class="projcard-tag">Therapeutic</span>
                                </div>
                            </div>
                        </a>
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

    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }
  </script>
</body>

</html>
