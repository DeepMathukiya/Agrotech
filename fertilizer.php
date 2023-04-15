<html>
    <head>
    <link rel="icon" href="logo1.jpg" type="image/x-icon">

        <title> Fertilizer </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link  rel="stylesheet" href="index.css" type = "text/css">
   
    <style>       <?php session_start();
 include "index.css" ?>
       <?php include "index2.css" ?>
    </style></head>
    <body>
      <div class="p1">
        <nav class="navbar navbar-expand-lg fixed-top bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="text.jpg"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="crops.php">Crops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="fertilizer.php"><b><u>Fertilizer</u></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pesticide.php">Pesticide</a>
        </li>
        <button class="p11">
        <?php
if(!isset($_SESSION['username'])){
?>
<a href="login.php">
<img src="loginimg.jpg" style="width:30px;" >Login</a>
<?php
}
else{
$name = $_SESSION['username'];
echo "$name";}
?>
        </button>
      </ul>
    </div>
  </div>
</nav>
      </div>
      <div class="t">

<div class="t1">
  <div class="t11"><img src="ferti1.jpg"></div>
  <div class="t12"><h2>Nitrogen fertilizer:</h2>
  <p>Nitrogen is an essential nutrient required for plant growth and development.
</p>
  <p>Nitrogen fertilizer is used to increase the nitrogen content in soil, which</p><p> helps plants to grow faster and produce higher yields. 
</p>
  <p>Some common types of nitrogen fertilizers include ammonium nitrate, urea, and</p><p> ammonium sulfate.</p>
   </div>
</div>
<br>

<div class="t2">
  <div class="t21"><h2>Phosphorus fertilizer:</h2>
  <p>Phosphorus is another important nutrient required for plant growth</p>
  <p>Phosphorus fertilizer is used to increase the phosphorus content in soil, </p><p> helps plants develop strong roots, flowers, and fruits. 
</p>
  <p>Some common types of phosphorus fertilizers include superphosphate, triple</p><p> superphosphate, and ammonium phosphate.</p>
  
</div>

  <div class="t22"><img src="ferti2.jpg"></div>
</div>
<br>
<div class="t1">
  <div class="t11"><img src="ferti3.jpg"></div>
  <div class="t12"><h2>Potassium fertilizer: </h2>
<P>Potassium is an important nutrient that helps plants to grow strong and healthy. 
</P>
<P>Potassium fertilizer is used to increase the potassium content in soil, which helps</P><p> plants to resist disease and stress, and improves the quality of crops. 
</P>
<P>Some common types of potassium fertilizers include muriate of potash and sulfate of potash.</P>

  </div>
</div>
<br>
<div class="t2">
  <div class="t21"><h2>Organic fertilizer:</h2>
  <p>Organic fertilizers are made from natural sources, such as plant or animal </p><p> materials, and are used to improve soil fertility and promote healthy plant growth. 
</p>
  <p>Organic fertilizers are often preferred by gardeners and farmers who want to </p><p> synthetic chemicals in their growing practices.
</p>
  <p>Some common types of organic fertilizers include compost, manure, bone meal,</p><p> and blood meal.</p>
 
</div>
  <div class="t22"><img src="ferti4.jpg"></div>
</div>
<br>
</div>
<div class= "footer" style="margin-top:10px">
  <div class="a22">Contact us:</div>
   <div class="a22">Instagram<br>
   <a href="https://instagram.com/deepsmathukiya?igshid=ZDdkNTZiNTM=" target="_blank"><img src="insta.jpg"></a>
   <a href="https://instagram.com/ansh_24.0?igshid=ZDdkNTZiNTM=" target="_blank"><img src="insta.jpg"></a>
   <a href="https://instagram.com/ksyp.vekariya.19.05._?igshid=YmMyMTA2M2Y=" target="_blank"><img src="insta.jpg"></a>

   </div>
  <div class="a22">Linkedin<br>
  <a href="https://www.linkedin.com/in/deep-mathukiya-512bb5266" target="_blank"><img src="lk.jpg"></a>
  <a href="https://www.linkedin.com/in/ansh-sardhara-ab0153256" target="_blank"><img src="lk.jpg"></a>
  <a href="https://www.linkedin.com/in/ksp-vekariya-252056249" target="_blank"><img src="lk.jpg"></a>
  </div>
</div> 
    </body></html>