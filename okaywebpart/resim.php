<!DOCTYPE HTML>

<html lang="en-US">

<head>

	<meta charset="UTF-8">

	<title></title>

</head>

<body>

<form method="get" action="" >
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="description"  class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="pet_name"  class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="gender"  class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"    name="birthday" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="advert_city_name" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit"  name= "form2" class="btn btn-primary">Submit</button>
</form>

<?php
        
        if (isset($_GET["advert_city_name"])){
          $pet_birthday=$_GET["birthday"];
          $pet_advert_city_name=$_GET["advert_city_name"];
          $pet_advert_district_name=$_GET["description"];
          $pet_breed=$_GET["pet_name"];
          $pet_description=$_GET["gender"];

          echo $pet_advert_city_name;
         
        }
      
        ?>


<form method="POST" action="" >
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="advert_district_name" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="advert_address_line" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  

  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="pet_breed" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="phone" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"   name="pet_type" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit"  name= "ekemek" class="btn btn-primary">Submit</button>
</form>

</body>

</html>
<?php


date_default_timezone_set('Europe/Istanbul');
$time_now = date('d.m.Y H:i:s');

  include("connect.php");
  if (isset($_POST["ekemek"])){
    echo $time_now;
    //$sec="select CID FROM blood_center where B_Name='".$_POST["B_Name"]."'";
    //$result=$baglan->query($sec);
    //$cek=$result->fetch_assoc();
      $ekli ="insert into adverts(published_time,description,pet_name, gender,birthday, advert_city_name, advert_district_name, advert_address_line, pet_breed,	publisher_id , pet_type) values
      ('".$time_now."','".$_POST["description"]."','".$_POST["pet_name"]."','".$_POST["gender"]."','".$pet_birthday."','".$pet_advert_city_name."','".$_POST["advert_district_name"]."','".$_POST["advert_address_line"]."','".$_POST["pet_breed"]."','5','".$_POST["pet_type"]."')";
       $sonuc=mysqli_query($baglan,$ekli);
       if($sonuc){
        echo "<center>Registration Successful.</center>";           
       }else{
           echo "form.php if else hatası sonuc için";
       }   
  }
 
  ?>