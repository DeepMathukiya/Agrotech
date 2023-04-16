 <?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="logo1.jpg" type="image/x-icon">
<title>Log In</title>
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
     <?php
     include 'connection.php';
     if(isset($_POST['submit'])){
        $email=  $_POST['email'];
        $pass = $_POST['pass'];
        $que = "select * from registration where email='$email'";
        $resQue = mysqli_query($con , $que);
        $noOfRow = mysqli_num_rows($resQue);
        if($noOfRow){
            $row = mysqli_fetch_assoc($resQue);
            $get_pass = $row['password'];
            $_SESSION['username'] = $row['name'];
            $verify = password_verify($pass ,$get_pass);
            if($verify){
                    if(isset($_POST['remember'])){
                        setcookie('emailid' ,$email, time()+3600);
                        setcookie('pass' ,$pass, time()+3600);

                    }else{

                    }
                header('location: index.php');
            }else{
                ?>
                <script>
                    alert(" Incorrect Password");
                    </script>
                    <?php
            }
        }else{
            ?>
            <script>
                alert("Invalid Email");
        
                </script>
                <?php
        }

     }
     
     
     
     ?>
    <center>
<div>
        <div style="margin-top:70px;"><h1>LogIn</h1></div>
<div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  class="abc" style="padding-top:80px;">
    <input type="email" placeholder= "Email id" name="email" value="<?php   if (isset($_COOKIE['emailid'])){echo$_COOKIE['emailid'];}
        ?>"><br><br>
    <input type="Password" placeholder= "Password" name="pass" value = "<?php  if(isset($_COOKIE['pass'])) {
        echo$_COOKIE['pass'];}?>"><br><br>
    <input type="Checkbox" name = "remember"> Remember Me<br><br>
    <input type="Submit" value="Login Now" style=" border-radius : 8px;" name="submit"><br><br>
    <h5> <a href="regis.php"> Don`t have an account yet ??</h5></a>

</form>
</div>
</div>
</center>
</body>
</html>
