<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo1.jpg" type="image/x-icon">

        <title> Agrotech </title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>       <?php session_start();
 include "index.css" ?>
       <?php include "index2.css" ?>
    </style><?php include 'links.php' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      </head>
    <body>
      <div class="p1">
        <nav class="navbar navbar-expand-lg fixed-top bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="text.jpg"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b><u>Home</u></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="crops.php">Crops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fertilizer.php">Fertilizer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pesticide.php">Pesticide</a>
        </li>
        <button class="p11">
        <?php

if(!isset($_SESSION['username'])){
?>
<img src="loginimg.jpg" style="width:30px;"><a href="login.php">Login</a>
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
      <div class="parallax" style="height: 100%; width:100%; margin-top: 50px;"><img src="logo.jpg"></div>
<DIV class="z">
<div class="w3-content w3-section"  style="height:500px;">
  <img class="mySlides" src="3.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="2.jpg" style="width:100%; height:500px">
  <img class="mySlides" src="1.jpg" style="width:100%; height:500px">
</div>
</DIV>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds

}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<div class="text"><h1>What is this?</h1></div>
<div class="main">
  <a href="crops.php"><div class="sub1"><h2> Crops  </h2><br><img src="croph.jpg"> <br><br><p>India is a land of diverse agricultural practices, where a wide range of crops are grown with care and expertise. Here, we would like to share with you some valuable information about a few of these crops.</p> </div></a>
  <a href="fertilizer.php"><div class="sub2"><h2>Fertilizer</h2><br> <img src="fertih.jpg"> <br><br><p>Fertilizers play a crucial role in enhancing agricultural productivity, and in India, there is a diverse range of fertilizers utilized to meet the unique needs of different crops. Here, we aim to provide valuable information about some of these fertilizers.</p>  </div></a> 
  <a href="pesticide.php"> <div class="sub3"><h2>Pesticide </h2><br><img src="pestih.jpg"> <br><br><p>India's agricultural sector faces various pest-related challenges that can significantly impact crop yields, making the use of pesticides a vital tool for ensuring food security. Here, we would like to provide valuable information about some of the pesticides used to safeguard crops in India
</p></div></a>
</div>

     <div class= "footer">
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