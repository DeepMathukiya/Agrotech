
<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head> 
   <link rel="icon" href="logo1.jpg" type="image/x-icon">
  <title>Signup page</title>
<?php include 'links.php'?>  
<style>
     *{margin:0px;padding:0px;
    background-color: #80A3FC;    
    }
    .abc{
        margin-top: 50px;
       height:350px;
        width:300px;
        background-color: yellow;
        border-radius:20px;
        box-shadow: 10px 10px 10px 10px rgba(0,0,0);
        text-decoration-color: rgba(0,0,0);
    }
    input{
        border-radius:10px;
    }
    </style>
</head>
<body>
<center>
    <div>
        <div style="margin-top:70px;"><h1>Registration</h1></div>
<div>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="abc"><br>
       
        <input type="text" name="name" placeholder="Enter your name*" required><br>
       <br>
        <input type = "text" name="number" placeholder="Enter Your mobile Num."><br>
        <br><input type = "email" name="email" placeholder=" Enter Your Email" required><br>
        <br>
        <input type = "password" name="pass" placeholder="Enter your password" required><br>
        <br><input type = "Password" name="conpass" placeholder="Confirm Password">
        <br>
        <br>
        <input type = submit value="Creat an account" style=" border-radius : 8px; background-color:aqua;" name="submit"><br>
    <h5><a href="login.php">Alredy have an account??</a></h5>

</div>
</div>
</center>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($con,$_POST['name']);
$number = mysqli_real_escape_string($con,$_POST['number']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);
$conpass = mysqli_real_escape_string($con,$_POST['conpass']);

$cpass = password_hash($pass,PASSWORD_BCRYPT);
$cconpass = password_hash($conpass,PASSWORD_BCRYPT);

$selemail = "select * from registration where email ='$email'";
$emailres = mysqli_query($con,$selemail);
$emailcount= mysqli_num_rows($emailres);
if($emailcount>0){
    ?>
    <script>
        alert("This email is alredy exist")
        </script>
        <?php
}

else {
    if($pass === $conpass){
        $insertQue = "insert into registration(name,number,email,password,confirmpassword) values('$name','$number','$email','$cpass','$cconpass')";
        $res = mysqli_query($con,$insertQue);
        if($res){
            ?>
            <script>
                    alert('Succesfully inserted');
                    location.replace('login.php');
            </script>
            <?php 
             }

}else {
    ?>
    <script>
    alert("Both passsword are different");
    </script>
    <?php
}
}
}



?>
</body>
</html>
