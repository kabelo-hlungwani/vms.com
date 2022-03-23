<!DOCTYPE html>
<html lang="en" style="font-family: 'Advent Pro', sans-serif;">
<?php

include 'connect.php';
 session_start();
 $email=$_SESSION['email'];


if(isset($_POST['otp']))
{
 //Assign
$otp=$_POST['otp'];


$query="select * from super_admin where email='$email'";

$result=mysqli_query($conn,$query) or die(mysqli_error($conn));

$row=mysqli_fetch_array($result);

if($otp==$row['otp'])
{

$_SESSION['email']=$row['email'];
$email=$_SESSION['email'];

include 'newp.php';
exit;

}else
{
    echo'<script>alert("Invalid OTP Code,Check your Emails.")</script>'; 

    include 'otp.php';

}


}




?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
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
        //account type

        
        if(document.forms["form"]["otp"].value=="")
        {
 
        uerror.innerHTML="<span style='color: red;font-weight: 600;font-size: 12.8px;''>"+" OTP required *</span>"
        
       
        
        return false;
        
        }
        else
        {

        var otp=document.forms["form"]["otp"].value;

        if(document.forms["form"]["otp"].value=="")
        {
        
        uerror.innerHTML="<span style='color: red;font-weight: 600;font-size: 12.8px;''>"+" OTP code required *</span>"
        
        return false;
        
        }else if(!otp.match(/^[0-9]+$/))
        {
            uerror.innerHTML="<span style='color: red;font-weight: 600;font-size: 12.8px;''>"+" Invalid OTP Code(Numbers only) *</span>"

        }else
        {
         
            uerror.innerHTML="";

        }
  

//
    
        }
        
        }
        </script>
<body style="background: rgb(153,20,156););">
    <div class="bg-white shadow login-card" style="background: rgb(255,255,255);margin-top: 110px;"><img class="profile-img-card" src="assets/img/password-key-pngrepo-com.png" style="width: 150px;height: 149px;">
        <p class="profile-name-card" style="font-size: 27px;color: rgb(153,20,156);font-family: Alata, sans-serif;">Admin</p>
        <form class="form-signin" action="" name="form" onsubmit="return validateForm();" method="post">
            <span class="reauth-email"> </span>
            <p style="font-family: Alata, sans-serif;color: rgb(153,20,156);font-weight: 60;"><strong>OTP code sent to your email Verify?</strong></p>
            <p style="font-family: Alata, sans-serif;color: rgb(153,20,156);"><i class="fas fa-user-lock"></i>&nbsp;<?php echo $email; ?></p><input class="form-control" type="number" id="otp" name="otp" placeholder="OTP" style="border-top-color: rgb(153,20,156);border-right-color: rgb(153,20,156);border-bottom-color: rgb(153,20,156);border-left-color: rgb(153,20,156);font-family: Alata, sans-serif;"><span id="uerror"></span>
            <br>
            <div class="checkbox"></div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit"  style="background: rgb(153,20,156);font-family: Alata, sans-serif;font-weight: 60;">Confirm Sign Up&nbsp;<i class="fab fa-expeditedssl btn-signin"></i></button>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>