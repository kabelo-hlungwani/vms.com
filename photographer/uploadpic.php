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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #preview { padding:30px; border:1px solid; background:#3d3d3d; }
    </style>
</head>
<?php

include 'connect.php';

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
session_start();
$email=$_SESSION['email'];

$id=$_GET['edt'];



if(isset($_POST['add']))
{

    $myimg = $_POST['image'];
    $destinationPath = "images/";
  
    $web_capture_part = explode(";base64,", $myimg);
    $image_type_aux = explode("image/", $web_capture_part[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($web_capture_part[1]);
    $myimgName = uniqid() . '.png';
  
    $file = $destinationPath . $myimgName;
    file_put_contents($file, $image_base64);
  

    





$command="INSERT INTO photograph(staff_id,image) 
            VALUES ('$id','".$myimgName."')";



$edit=mysqli_query($conn,$command);  


if($edit){
mysqli_close($conn);

echo '<script>alert(" image added successfully");window.location = "images.php";</script>';

exit;

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
                                                    <form data-aos="fade-up-left"  action="" class="custom-form" style="font-family: Alata, sans-serif;font-weight: 6;" enctype="multipart/form-data" name="form" action="" method="post">
                                                        <div class="text-right" style="margin-top: -54px;margin-right: -47px;"><a href="images.php" style="color: rgb(0,21,93);"><i class="fa fa-window-close" style="color: #d60020;"></i></a><span></span></div><img src="assets/img/photography-icon-png-2401.png" style="height: 112.992px;filter: contrast(100%);">
                                                        <p style="font-size: 22px;color: rgb(191,34,58);">Upload Photo</p>
                                                        <hr style="background: #d60020;">
                                                        <div class="container">
   

        <div class="row pakainfo">
            <div class="col-md-6 pakainfo">
                <div id="live_camera"></div>
               
                <input type=button style="font-weight: 6;background: rgb(191,34,58);color:rgb(255,255,255)" class="btn btn-sm submit-button" value="Take Snapshot" onClick="capture_web_snapshot()">
                <input type="hidden" name="image" class="image-tag">
              
            </div>
            <br>
            <div class="col-md-6">
                <div style="background:rgb(255,255,255);width: 200px;height: 150px;color: rgb(191,34,58);border-top-color: rgb(191,34,58);border-right-color: rgb(191,34,58);border-bottom-color: rgb(191,34,58);border-left-color: rgb(191,34,58);font-family: Alata, sans-serif;" id="preview">Image Here!</div>
                <button class="btn btn-sm submit-button" name="add" style="font-weight: 6;background: rgb(191,34,58);color:rgb(255,255,255)"   >Upload</button>
            </div>
            <div class="col-md-12 text-center pakainfo">
            <hr style="background: #d60020;">
               
            </div>
        </div>
  
</div>
  
<!-- Settings a few settings and (php capture image from camera) web attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 280,
        height: 150,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#live_camera' );
  
    function capture_web_snapshot() {
        Webcam.snap( function(site_url) {
            $(".image-tag").val(site_url);
            document.getElementById('preview').innerHTML = '<img src="'+site_url+'"/>';
        } );
    }
</script>
                                                        
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