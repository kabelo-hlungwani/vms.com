<!DOCTYPE html>
<html lang="en" style="font-family: 'Advent Pro', sans-serif;">
<?php
 
 include 'connect.php'; 

if(isset($_POST['email']) && isset($_POST['password'])){
 //Assign

$email=$_POST['email'];
$password=md5($_POST['password']);
session_start();

//check record


$query="select * from super_admin where email='$email'and password='$password'";



$result=mysqli_query($conn,$query) or die(mysqli_error($conn));


$row=mysqli_fetch_array($result);


if($row !== null && strtolower($row['email'])==strtolower($email) && $row['password']==$password)
{


   
    $_SESSION['email']=$row['email'];
    $email=$_SESSION['email'];
    $_SESSION['sadmin_id']=$row['sadmin_id'];
    $id=$_SESSION['sadmin_id'];
   
    
echo '<script>window.location = "dashboard.php";</script>';  
    

}else
{


echo '<script>alert("Wrong login credentials provided.");window.location = "login.php";</script>';  
 exit;

}

}

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Narrow">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<script>

    
        function validateForm() 
        {
        var uerror=document.getElementById("uerror");
        var perror=document.getElementById("perror");
        

    

        
        if(document.forms["form"]["email"].value=="" && document.forms["form"]["password"].value=="")
        {
        
        uerror.innerHTML="<span style='color:red;,font-family: Alata, sans-serif;''>"+" email address required *</span>"
        perror.innerHTML="<span style='color:red;,font-family: Alata, sans-serif;''>"+" password required *</span>"
       
        
        return false;
        
        }
        else
        {



        if(document.forms["form"]["email"].value=="")
        {
        
        uerror.innerHTML="<span style='color:red;,font-family: Alata, sans-serif''>"+" email address required *</span>"
        
        return false;
        
        }else
        {
         
            uerror.innerHTML="";

        }
  
        
        if(document.forms["form"]["password"].value=="")
        {
        
        perror.innerHTML="<span style='color:red;,font-family: Alata, sans-serif''>"+" password required *</span>"
        
        return false;
        
        }
        else
        {

            perror.innerHTML="";


        }

//
    
        }
        
        }
        </script>
<body style="background: url(&quot;assets/img/blue-abstract-background-images-hd.jpg&quot;);">
    <div class="bg-white shadow login-card" style="background: rgb(255,255,255);margin-top: 110px;"><img class="profile-img-card" src="assets/img/admin.png" style="width: 150px;height: 149px;">
        <p class="profile-name-card" style="font-size: 27px;color: rgb(30,115,190);font-family: Alata, sans-serif;">Super Admin</p>
        <form class="form-signin" action="" name="form" onsubmit="return validateForm();" method="post"><span class="reauth-email"> </span>
            <input class="form-control" type="email" name="email" id="email"  placeholder="Email address" autofocus="" style="border-top-color: rgb(29,119,218);border-right-color: rgb(29,119,218);border-bottom-color: rgb(29,119,218);border-left-color: rgb(29,119,218);font-family: Alata, sans-serif;"><span id="uerror"></span>
            <input class="form-control" type="password" id="password" name="password" id="inputPassword" placeholder="Password" style="border-top-color: rgb(29,119,218);border-right-color: rgb(29,119,218);border-bottom-color: rgb(29,119,218);border-left-color: rgb(29,119,218);font-family: Alata, sans-serif;"><span id="perror"></span>
            <div class="checkbox"></div><button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" style="background: rgb(30,115,190);font-family: Alata, sans-serif;font-weight: 60;">Sign in</button>
        </form><a class="forgot-password" href="resetpassword.php" style="color: rgb(29,119,218);font-family: Alata, sans-serif;">Forgot your password?</a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>