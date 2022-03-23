<!DOCTYPE html>
<html lang="en" >
<?php
include 'connect.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
    $email=$_SESSION['email'];
   
  
}



    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
  
   
if(isset($_POST['password']))
{

$password=md5($_POST['password']);
  

  
$command="UPDATE staff SET password='$password' WHERE email='$email'and position='Admin'";



$edit=mysqli_query($conn,$command);
  

if($edit){
mysqli_close($conn);

     
echo '<script>window.location = "done.php";</script>';

exit;

}
else
{
    echo mysqli_error();

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
    var terror=document.getElementById("terror");
    var nerror=document.getElementById("nerror");
    var serror=document.getElementById("serror");
    var iderror=document.getElementById("iderror");
    var countryerror=document.getElementById("countryerror");
    var cityerror=document.getElementById("cityerror");
    var cerror=document.getElementById("cerror");
    var error=document.getElementById("error");
    var errormessage=document.getElementById("errorpass");
    var ierror=document.getElementById("ierror");
    
    if(document.forms["form"]["password"].value=="")
    {
    
    
    errormessage.innerHTML="<span style='color:red;font-size: 12.8px;font-family: Alata, sans-serif;font-weight: 60;''>"+" field should not be empty *</span>"
          ierror.innerHTML="<span style='color: red;font-size: 12.8px;,font-family: Alata, sans-serif;font-weight: 600;''>"+" field should not be empty *</span>"
    
    return false;
    
    
    }else
    {

      
     
    }
    //password
    var passd=document.forms["form"]["password"].value;
    var cpassd=document.forms["form"]["cpassword"].value;
    
    
    
    
    var cerrormessage=document.getElementById("cerrorpass");
    var pass=document.getElementById("password").value;
    
    if(pass=="")
    {
    
       errormessage.innerHTML="<span style='color: red;font-size: 12.8px;font-family: Alata, sans-serif;''>"+" field should not be empty *</span>";
      return false;
    
    }else
    {
    errormessage.innerHTML="";
    }
    //contain atleast 1 lowercase
    
    if(!pass.match(/^(?=.*[a-z])/))
    {
      errormessage.innerHTML="<span style='color: red;font-size: 12.8px;font-family: Alata, sans-serif;''>"+" Password should contain atleast 1 lowercase alphabetical character.*</span>";
    return false;
    }
    else
    {
    errormessage.innerHTML="";
    }
    //contain atleast 1 uppercase
    if(!pass.match(/^(?=.*[A-Z])/))
    {
      errormessage.innerHTML="<span style='color: red;font-size: 12.8px;font-family: Alata, sans-serif;''>"+" Password should contain atleast 1 uppercase alphabetical character.*</span>";
    return false;
    }
    else
    {
    errormessage.innerHTML="";
    }
    //contain atleast 1 numeric
    if(!pass.match(/^(?=.*[0-9])/))
    {
      errormessage.innerHTML="<span style='color: red;font-size: 12.8px;font-family: Alata, sans-serif;''>"+" Password should contain atleast 1 numeric character.*</span>"
    return false;
    }
    else
    {
    errormessage.innerHTML="";
    }
    //contain special character
    if(!pass.match(/^(?=.*[!@#\$%\^&\*])/))
    {
      errormessage.innerHTML="<span style=color: red;font-size: 12.8px;font-family: Alata, sans-serif;''>"+" Password should contain special character.*</span>";
    return false;
    }
    else
    {
    errormessage.innerHTML="";
    }
    //contain 8 or more characters
    if(!pass.match(/^(?=.{8,})/))
    {
      errormessage.innerHTML="<span style='color: red;font-size: 12.8px;font-family: Alata, sans-serif;''>"+" Password shouldcontain 8 or more characters.*</span>";
    return false;
    }
    else
    {
    errormessage.innerHTML="";
    }


    //confirm password

     //step 1
     if(cpassd==""){
    
      ierror.innerHTML="<span style='color: red;font-size: 12.8px;font-family: Alata, sans-serif;''>"+" confirm Password.*</span>";
    return false;   
    }else
    {
    
      ierror.innerHTML="";
    }
    
    
    
    
    if(cpassd!=passd){
    
    errormessage.innerHTML="<span style='color: red;font-size: 12.8px;,font-family: Alata, sans-serif;''>"+" Password doesnt match.*</span>"
  ierror.innerHTML="<span style='color: red;font-size: 12.8px;font-family: Alata, sans-serif;''>"+" Password doesnt match.*</span>"
    return false;   
    }else
    {
    errormessage.innerHTML=""
    ierror.innerHTML=""
    }
    }
    </script>
<body style="background: rgb(153,20,156););">
    <div class="bg-white shadow login-card" style="background: rgb(255,255,255);margin-top: 110px;"><img class="border rounded-circle border-white profile-img-card" src="assets/img/pngaaa.com-4051919.png" style="width: 150px;height: 149px;">
        <p class="profile-name-card" style="font-size: 23px;color: rgb(153,20,156);font-family: Alata, sans-serif;font-weight: 60;">Create Password</p>
        <form class="form-signin" action="newp.php" name="form" onsubmit="return validateForm();" method="post">

            <input class="form-control" type="password" name="password" id="password"  placeholder="Password" autofocus="" style="border-top-color: rgb(153,20,156);border-right-color: rgb(153,20,156);border-bottom-color: rgb(153,20,156);border-left-color: rgb(153,20,156);font-family: Alata, sans-serif;"><span id="errorpass"></span>
            <input class="form-control" type="password" name="cpassword" id="cpassword"  placeholder="Confirm password" autofocus="" style="border-top-color: rgb(153,20,156);border-right-color: rgb(153,20,156);border-bottom-color: rgb(153,20,156);border-left-color: rgb(153,20,156);font-family: Alata, sans-serif;"><span id="ierror"></span>
    
            <button name="enter" class="btn btn-primary btn-block btn-lg btn-signin" type="submit" style="background: rgb(153,20,156);font-family: Alata, sans-serif;font-weight: 60;">Save password</button>
        </form><a class="forgot-password" href="otppassword.php" style="color: rgb(153,20,156);font-family: Alata, sans-serif;"><i class="far fa-arrow-alt-circle-left"></i>&nbsp;Back</a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>