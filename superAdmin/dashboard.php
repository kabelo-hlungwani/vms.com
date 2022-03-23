<!DOCTYPE html>
<html>
<?php
    include 'connect.php';
 
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     
      if(!isset($_SESSION)) 
      { 
          session_start(); 
          $email=$_SESSION['email'];
          $id=$_SESSION['sadmin_id'];
      }

      $qry="SELECT count(staff_id) as totaladmin from staff where position='Admin'";

      $res=mysqli_query($conn,$qry);
    
      $data=mysqli_fetch_array($res);

      $cmd="SELECT count(staff_id) as totalphotos from staff where position='Photographer'";

      $fetch=mysqli_query($conn,$cmd);
    
      $line=mysqli_fetch_array($fetch);

      $cmd1="SELECT sum(total) as total from tblvote";

      $fetch1=mysqli_query($conn,$cmd1);
    
      $line1=mysqli_fetch_array($fetch1);
      $cmd2="SELECT count(vd_id) as total from vd_station";

      $fetch2=mysqli_query($conn,$cmd2);
    
      $line2=mysqli_fetch_array($fetch2);






    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Super Admin-Dashboard</title>
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


<?PHP
              
             

               

                              

              $query="SELECT * from super_admin where email='$email'";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             
              
              if ($rows>0) {
                
                ?>
<body id="page-top" style="font-family: Alata, sans-serif;font-weight: 60;">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="opacity: 1;background: #ffffff;">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                 
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <?php
                    while ($rows=mysqli_fetch_array($result)) {
                  ?>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small" style="font-family: Alata, sans-serif;font-weight: 60;font-size: 13.8px;"><?php echo $rows['last_name'].' '. $rows['first_name'];?></span><img class="border rounded-circle img-profile" src="assets/img/password-key-pngrepo-com.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.php?edt=<?php echo $rows['sadmin_id'] ?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="staff.php"><i class="fas fa-users fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Manage staff</a>
                                    <a class="dropdown-item" href="vd_station.php"><i class="fas fa-sort-numeric-down fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Manage Votes</a>
                                    <a class="dropdown-item" href="votes.php"><i class="fas fa-sort-numeric-down fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;View Votes</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" style="opacity: 1;">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0" style="font-family: Alata, sans-serif;color: rgb(0,0,0);border-left-color: rgb(255, 255, 255);font-weight: 6;">Super Admin</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span style="font-weight: 60;">Admin</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="font-weight: 60;"><?php echo $data['totaladmin']?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user-shield fa-2x text-gray-300" style="color: rgb(18,41,178);"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span style="font-weight: 6;">Data Capture</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="font-weight: 6;"><?php echo $line['totalphotos']?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-camera-retro fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span style="font-weight: 60;">Number of Voting Stations</span></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span style="font-weight: 6;"><?php echo $line2['total'] ?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fa fa-pie-chart-alt fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-left-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span style="font-weight: 60;">People voted</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span style="font-weight: 6;"><?php echo number_format($line1['total']),0; ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-child fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
                  
                }
                ?>

<?php
              }else{
                ?>
                <h3>No record(s)</h3>
                <?php
              } ?>
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