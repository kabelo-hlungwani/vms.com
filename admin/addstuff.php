<!DOCTYPE html>
<html>
<?php

include 'connect.php';

$id=$_GET['edt'];


if(isset($_POST['add']))
{
    


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$idno=$_POST['idno'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$position=$_POST['position'];

   

$query="select * from staff";



$result=mysqli_query($conn,$query) or die(mysqli_error($conn));


$row=mysqli_fetch_array($result);

if(strtolower($row['email'])==strtolower($email)&& $row['position']==$position)
{

    echo '<script>alert(" Staff with this email account exist.");window.location = "staff.php";</script>';
exit;

}else
{

$command="
INSERT INTO staff(sadmin_id,first_name ,last_name,id_number,position,email, phone) 
            VALUES ('$id','$fname','$lname','$idno','$position','$email','$phone')";



$edit=mysqli_query($conn,$command);  


if($edit){
mysqli_close($conn);

echo '<script>alert(" staff added successfully");window.location = "staff.php";</script>';

exit;

}


}



}


?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
</head>

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
                                                    <form data-aos="fade-up-left" action="" method="post" class="custom-form" style="font-family: Alata, sans-serif;font-weight: 6;">
                                                        <div class="text-right" style="margin-top: -54px;margin-right: -47px;"><a href="staff.php" style="color: rgb(0,21,93);"><i class="fa fa-window-close"></i></a><span></span></div><img src="assets/img/pngwing.com.png" style="height: 112.992px;filter: contrast(136%);">
                                                        <p style="font-size: 22px;color: rgb(36,53,109);">Add Staff</p>
                                                        <hr style="background: #263873;">
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field">Name </label></div>
                                                            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="fname" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);"></div>
                                                        </div>
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field">Surname</label></div>
                                                            <div class="col-sm-6 input-column"><input class="form-control" type="text"  name="lname" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);"></div>
                                                        </div>
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="name-input-field">Id Number</label></div>
                                                            <div class="col-sm-6 input-column"><input class="form-control" type="text"  name="idno" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);"></div>
                                                        </div>
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="email-input-field">Email </label></div>
                                                            <div class="col-sm-6 input-column"><input class="form-control" type="email"  name="email" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);"></div>
                                                        </div>
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="email-input-field">Phone </label></div>
                                                            <div class="col-sm-6 input-column"><input class="form-control" type="text"  name="phone" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);"></div>
                                                        </div>
                                                        <div class="form-row form-group">
                                                            <div class="col-sm-4 label-column" style="text-align: left;"><label class="col-form-label" for="dropdown-input-field">Position</label></div>
                                                            <div class="col-sm-4 input-column"><select class="form-control"  name="position" style="border-top-color: rgb(255,255,255);border-right-color: rgb(255,255,255);border-left-color: rgb(255,255,255);">
                                                                    <optgroup label="Position">
                                                                        <option value="" selected="">Select Position</option>
                                                                        <option value="Admin">Admin</option>
                                                                        <option value="Photographer">Photographer</option>
                                                                    </optgroup>
                                                                </select></div>
                                                        </div><button class="btn btn-sm submit-button" type="submit" name="add" style="font-weight: 6;background: rgb(33,47,100);"><i class="fa fa-plus-square"></i>&nbsp;Add Staff</button>
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
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.php5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>