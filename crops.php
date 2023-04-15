<html>
    <head>
        <title>Crops </title>
        <link rel="icon" href="logo1.jpg" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link  rel="stylesheet" href="index.css" type = "text/css">
    <style>       <?php session_start();
 include "index.css" ?>
       <?php include "index2.css" ?>
    </style>  
  </head>
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
          <a class="nav-link active" href="crops.php"><b><u>Crops</u></b></a>
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
        <div class="t11"><img src="wheat.jpg"></div>
        <div class="t12"><h2>Wheat:</h2>
          <p>The optimum temperature range for ideal germination of wheat seed is 20-25 C.
</p>
          <p> Though the seeds can germinate in the temperature range 3.5 to 35 c.
</p>
          <p>Rainfall range: It requires rainfall of about 50 cms to 90 cms is most ideal.
</p>
          <p>Crops like wheat grow well in clayey and loamy soil. 
</p>
          <p>It was demonstrated that 120 kg nitrogen, 60 kg phosphorus and 30 kg potash per hectare were required for</p> <p>optimum productivity.
</p>
          <p>Muriate of Potash and Potassium Sulphate is the only potassic fertilizers currently available in the market.</p><p>Both are equally good for Wheat.
</p>
          <p>Dimethoate at the rate of 330 ml/ha OR Methyl Dematon 25 EC at the rate of 650 ml/ha.</p>
        </div>
      </div>
      <br>
     
      <div class="t2">
        <div class="t21"><h2>Groundnut:</h2>
      <p>Areas where the temperatures range from 20 to 30°C with an annual</p><p> of 1000 - 2000 mm are ideal for cashew growing.
</p>
      <p> Though the seeds can germinate in the temperature range 3.5 to 35 c.
</p>
      <p>The best soils are deep and well-drained sandy loams without a hard pan.
</p>
      <p>Among the available nitrogen fertilizers, ammonium sulfate is preferred </P><p> the groundnut crop because of its sulfur content (24%).
</p>
      <p>Some pesticides are Carbaryl 50 WP 2.0 kg/ha, Quinalphos 25 EC 750 ml/ha,</p><p> Dichlorvos 76 WSC 750 ml/ha, Diflubenzuron 25 WP 300-400g/ha.</p>
    </div>
      
        <div class="t22"><img src="nut.jpg"></div>
      </div>
      <br>
      <div class="t1">
        <div class="t11"><img src="cotton.jpg"></div>
        <div class="t12"><h2>Cotton:</h2>
        <p>Cotton cultivation requires frost-free conditions, 20-to-30-degree Celsius temperature.
</p>
        <p>Rainfall should be moderate, ranging between 50-75 cm.
</p>
        <p>Cotton grows well on Black soil or alluvial soil.
</p>
        <p>Cotton plant consumes Nitrogen (N) at a double quantity compared to Phosphorus (P) and Potassium (K).
</p>
        <p>Commonly used insecticides include organophosphates, pyrethroids, and neonicotinoids.</p>
        </div>
      </div>
      <br>
      <div class="t2">
        <div class="t21"><h2>Paddy:</h2>
        <p>The average temperature required throughout the life period of the crop ranges from 21 to 37º C.
</p>
        <p>Rice requires more water than any other crop. Paddy cultivation is done only in those areas where </p><p> rainfall is 115 cm.
</p>
        <p>Clay or clay loams are most suited for rice cultivation. Such soils are capable of holding water for </p><p>long and sustain crop.
</p>
        <p>The most suitable fertilizer for paddy is Ammonium sulphate.
</p>
        <p>Insecticides to control major insect pests in Paddy crop ; Pymetrozine 50% WG, 1 kg ; Triflumezopyrim </p><p>10% SC, 94 ml ; Green Leaf Hopper</p>
</div>
        <div class="t22"><img src="paddy.jpg"></div>
      </div>
      <br>
      </div>
      <div class= "footer"style="margin-top:10px">
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
  
    </body>
    </html>