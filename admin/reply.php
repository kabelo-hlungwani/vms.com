<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Custom-File-Upload.css">
    <link rel="stylesheet" href="assets/css/Drag-Drop-File-Input-Upload.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
</head>
<?php

include 'connect.php';
  use PHPMailer\PHPMailer\PHPMailer;
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
session_start();
$email=$_SESSION['email'];

$id=$_GET['edt'];


$query="select * from comment where comment_id='$id'";



$result=mysqli_query($conn,$query) or die(mysqli_error($conn));


$row=mysqli_fetch_array($result);




if(isset($_POST['add']))
{
    
    
$heading=$_POST['email'];
$content=$_POST['response'];



$name = $heading;
$email = $heading;
$subject = 'No reply.';
$body = $content;

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
 
    echo '<script type="text/javascript">alert("Response sent."); window.location = "comments.php";</script>';
    exit;
} else {
    $status = "failed";
    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
}

}


?>
<body id="page-top" style="font-family: Alata, sans-serif;font-weight: 60;">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="opacity: 1;">
                <div class="container-fluid" style="opacity: 1;">
                    <div class="row">
                        <div class="col">
                            <section class="mt-4">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row register-form">
                                                <div class="col-md-8 offset-md-2">
                                                    <form data-aos="fade-up-left" class="custom-form" style="font-family: Alata, sans-serif;font-weight: 6;" enctype="multipart/form-data" name="form" action="" method="post">
                                                        <div class="text-right" style="margin-top: -54px;margin-right: -47px;"><a href="comments.php" style="color: rgb(153,20,156);"><i class="fa fa-window-close" style="color: rgb(153,20,156);"></i></a><span></span></div><img src="assets/img/pngegg.png" style="height: 112.992px;filter: contrast(100%);">
                                                        <p style="font-size: 22px;color:rgb(153,20,156);">Feedback</p>
                                                        <hr style="background: rgb(153,20,156);">
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field">Email </label></div>
                                                            <div class="col-sm-6 input-column"><input class="form-control" type="text"required="" readonly="" value="<?php echo $row['email'] ?>" name="email" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);"></div>
                                                        </div>
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field">Response</label></div>
                                                            <div class="col-sm-6 input-column">
                                                            <div class="form-group">
                                                              <label for=""></label>
                                                              <textarea class="form-control" name="response" id="content"required="" rows="13"style="border-top-color: rgb(153,20,156);border-right-color: rgb(153,20,156);border-left-color: rgb(153,20,156);border-bottom-color: rgb(153,20,156);"></textarea>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <button class="btn btn-sm submit-button" type="submit" name="add" style="font-weight: 6;background: rgb(153,20,156);"><i class="fas fa-mail-bulk"></i>&nbsp;Send</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
    <script src="assets/js/Custom-File-Upload.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>