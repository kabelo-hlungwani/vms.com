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
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
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
    
    
$heading=$_POST['heading'];
$content=$_POST['editor1'];
$image = $_FILES['art']['tmp_name']; 
$imgContent = addslashes(file_get_contents($image));



$command="INSERT INTO newsfeed(staff_id,heading,image,content) 
            VALUES ('$id','$heading','$imgContent','$content')";



$edit=mysqli_query($conn,$command);  


if($edit){
mysqli_close($conn);

echo '<script>alert(" feed added successfully");window.location = "news.php";</script>';

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
                                                    <form data-aos="fade-up-left" class="custom-form" style="font-family: Alata, sans-serif;font-weight: 6;" enctype="multipart/form-data" name="form" action="" method="post">
                                                        <div class="text-right" style="margin-top: -54px;margin-right: -47px;"><a href="news.php" style="color: rgb(153,20,156);"><i class="fa fa-window-close" style="color: rgb(153,20,156);"></i></a><span></span></div><img src="assets/img/news.png" style="height: 112.992px;filter: contrast(100%);">
                                                        <p style="font-size: 22px;color:rgb(153,20,156);">Add newsfeed</p>
                                                        <hr style="background: rgb(153,20,156);">
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field">Heading </label></div>
                                                            <div class="col-sm-6 input-column"><input class="form-control" type="text"required="" name="heading" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);"></div>
                                                        </div>    
														<div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field" >upload image </label></div>
                                                            <div class="col-sm-6 input-column"><input class="form-control" type="file"required="" accept="image/x-png,image/gif,image/jpeg" name="art" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);"></div>
                                                        </div>
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field">Content</label></div>
                                                            <div class="col-sm-6 input-column">
                                                            <div class="form-group">
                                                              <label for=""></label>
                                                              <textarea class="form-control" name="editor1" required="" rows="13"style="border-top-color: rgb(153,20,156);border-right-color: rgb(153,20,156);border-left-color: rgb(153,20,156);border-bottom-color: rgb(153,20,156);"></textarea>
                                                            </div>    
                                                            
                                                
                                                        </div>
                                                        </div>
                                                        <button class="btn btn-sm submit-button" type="submit" name="add" style="font-weight: 6;background: rgb(153,20,156);"><i class="fa fa-plus-square"></i>&nbsp;Add</button>
                                                    </form>
                                                    <script>
            CKEDITOR.replace( 'editor1' );
    </script>
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