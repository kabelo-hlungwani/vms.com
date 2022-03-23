<!DOCTYPE html>
<html lang="en" style="font-family: 'Advent Pro', sans-serif;">
<?php
  include 'connect.php';
  use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['email'])){
    //Assign
  
   $email=$_POST['email'];
  
   
   //check record
 
   $query="select * from staff where email='$email' and position='Photographer' ";
   
   
   
   $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
   
   
   $row=mysqli_fetch_array($result);
   
   
   if($row !== null && strtolower($row['email'])==strtolower($email) )
   {
   

      session_start();
      $_SESSION['email']=$row['email'];
      $email=$_SESSION['email'];  
 
 
  
      $code = mt_rand(1000,9999);
      
      $command="UPDATE staff SET otp='$code' WHERE email='$email' and position='Photographer'";
  
  
  
  $edit=mysqli_query($conn,$command);
    
  
  if($edit){
  mysqli_close($conn);
  
  $name = $email;
  $email = $email;
  $subject = 'OTP code for password recovery.';
  $body = 'Your verification code (OTP) is '.$code;
  
  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";
  
  $mail = new PHPMailer();
  
  //SMTP Settings
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "kabelomighty@gmail.com";
  $mail->Password = '0727780512';
  $mail->Port = 465; //587
  $mail->SMTPSecure = "ssl"; //tls
  
  //Email Settings
  $mail->isHTML(true);
  $mail->setFrom($email, $name);
  $mail->addAddress($email);
  $mail->Subject = $subject;
  $mail->Body = $body;
  
  if ($mail->send()) {
   
      echo '<script type="text/javascript">alert("Email sent."); window.location = "otp.php";</script>';
  } else {
      $status = "failed";
      $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
  }
  
  exit;
  
  
  exit;
  
  }
  else
  {
      echo mysqli_error();
  
  }

    
   
   }else
   {

    echo'<script>alert("Account of tha email mail does not exist.")</script>';    
    include 'resetpassword.php'; 
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
     
        

    

        
        if(document.forms["form"]["email"].value=="")
        {
        
        uerror.innerHTML="<span style='color:red;,font-family: Alata, sans-serif;''>"+" email address required *</span>"
   
       
        
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
  
        


//
    
        }
        
        }
        </script>
<body style="background:rgb(153,20,156););">
    <div class="bg-white shadow login-card" style="background: rgb(255,255,255);margin-top: 110px;"><img class="border rounded-circle border-white profile-img-card" src="assets/img/password.png" style="width: 150px;height: 149px;">
        <p class="profile-name-card" style="font-size: 23px;color:rgb(153,20,156);font-family: Alata, sans-serif;font-weight: 60;">Forgot Password?</p>
        <form class="form-signin"  action="" name="form" onsubmit="return validateForm();" method="post"><span class="reauth-email"> </span><input class="form-control" name="email" id="email" type="email" id="inputEmail"placeholder="Email address" autofocus="" style="border-top-color:rgb(153,20,156);border-right-color:rgb(153,20,156);border-bottom-color:rgb(153,20,156);border-left-color:rgb(153,20,156);font-family: Alata, sans-serif;"><span id="uerror"></span>
            <div class="checkbox" style="font-weight: 60;"></div><button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" style="background:rgb(153,20,156);font-family: Alata, sans-serif;font-weight: 60;">Reset password</button>
        </form><a class="forgot-password" href="login.php" style="color:rgb(153,20,156);font-family: Alata, sans-serif;"><i class="far fa-arrow-alt-circle-left"></i>&nbsp;Back</a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>