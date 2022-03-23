<!DOCTYPE html>
<html>

<?php
  include 'connect.php';
    
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     session_start();
     $email=$_SESSION['email'];

$id=$_GET['edt'];


$qry=mysqli_query($conn,"select * from staff WHERE staff_id='$id' and position='Admin'");
$data=mysqli_fetch_array($qry);


if(isset($_POST['update']))
{

    
    
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$idno=$_POST['idno'];
$email=$_POST['email'];
$phone=$_POST['phone'];

  
$command="UPDATE  staff
 SET 
 first_name='$fname',last_name='$lname',id_number='$idno',email='$email',phone='$phone'
 WHERE staff_id='$id'and position='Admin'";


$edit=mysqli_query($conn,$command);
  

if($edit){
mysqli_close($conn);

     
echo '<script>alert("Information Updated.");window.location = "dashboard.php";</script>';

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
    <title>Profile - Brand</title>
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

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="font-family: Alata, sans-serif;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><a href="dashboard.php" style="font-weight: 6;color: #301c81;">Back To Account</a>  
                    <ul class="navbar-nav flex-nowrap ml-auto">
                           
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-family: Alata, sans-serif;font-weight: 60;font-size: 13.8px;">Kabelo Hlungwani</span><img class="border rounded-circle img-profile" src="assets/img/password-key-pngrepo-com.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="far fa-save fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Report</a><a class="dropdown-item" href="#"><i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Manage stuff</a><a class="dropdown-item" href="#"><i class="fas fa-sort-numeric-down fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Manage Votes</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-center text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-6" style="font-weight: 6;">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold" style="font-weight: 66;">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form action="" name="form" onsubmit="return validateForm();" method="post">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="username" style="font-weight: 6;"><strong>Name</strong><br></label><input class="form-control" required="" name="fname" value="<?php echo $data['first_name']?>" type="text" ></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email" style="font-weight: 6;"><strong>Surname</strong><br></label><input class="form-control" required="" type="text" name="lname"  value="<?php echo $data['last_name']?>" id="email" autocomplete="off"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name" style="font-weight: 6;">Id Number<br></label><input class="form-control" type="text" required="" name="idno" value="<?php echo $data['id_number']?>" ></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name" style="font-weight: 6;">Email<br></label><input class="form-control" type="text" required="" name="email" id="email" value="<?php echo $data['email']?>" readonly=""></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="username" style="font-weight: 6;"><strong>Phone</strong><br></label><input class="form-control" value="<?php echo $data['phone']?>" name="phone" type="text" required=""></div>
                                                    </div>
                                                    <div class="col">
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm" name="update" type="submit">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col"></div>
                            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>