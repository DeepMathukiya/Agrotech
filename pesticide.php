<html>
    <head>
    <link rel="icon" href="logo1.jpg" type="image/x-icon">

        <title> Pesticide </title>
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
          <a class="nav-link" href="fertilizer.php">Fertilizer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pesticide.php"><b><u>Pesticide</u></b></a>
        </li>
        <button class="p11">
        <?php
if(!isset($_SESSION['username'])){
?><a href="login.php">
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
  <div class="t11"><img src="pesti1.jpg"></div>
  <div class="t12"><h2>Acephate/ Asatof/Starthene:
</h2>
<P>Its chemical composition is O-S Dimethyl acetylphosphoramidothioate .
</P>
<P>It has active ingredient of 75% wp.
</P>
<P>It is used 0.75 g per liter.
</P>
<P>It can be used against Aphids, Jassids, Bolllworms.</P>
   </div>
</div>
<br>

<div class="t2">
  <div class="t21"><h2>Actara:
</h2>

<p>Its chemical composition is Thiamethoxam.
</p>
<p>It has active ingredient of 25%,
</p>
<p>It is used 0.2 g per liter.
</p>
<p>It can be used against Sucking pest, Aphids, Hopper, WF, Root grub.</p>
</div>

  <div class="t22"><img src="pesti2.jpg"></div>
</div>
<br>
<div class="t1">
  <div class="t11"><img src="pesti3.jpg"></div>
  <div class="t12"><h2>Furadon/Tata Furan:
</h2>
<P>Its chemical composition is Carbofuron.
</P>
<P>It has active ingredient of 3%G.
</P>
<P>It is used 5 kg per acer.
</P>
<P>It can be used against Stem borer, Cutworm white grub, Termite, </p><p>Shootfly, Stem borer, Aphids, Thrips, Jassids.</P>
  </div>
</div>
<br>
<div class="t2">
  <div class="t21"><h2>Malathion:</h2>
  <p>Its chemical composition is Malathion
</p>
  <p>It has active ingredient of 50%EC.
</p>
  <p>It is used 1 ml per liter.
</p>
  <p>It can be used against Caterpillar, Fruitborer, gallmidge Fly, </p><p> eating Caterpillar, Steam Borer .</p>
 
</div>
  <div class="t22"><img src="pesti4.jpg"></div>
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