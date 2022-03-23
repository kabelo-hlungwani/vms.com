<!DOCTYPE html>
<html>

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
                                                    <form data-aos="fade-up-left"  class="custom-form" style="font-family: Alata, sans-serif;font-weight: 6;">
                                                        <div class="text-right" style="margin-top: -54px;margin-right: -47px;"><a href="vd_station.php" style="color: rgb(0,21,93);"><i class="fa fa-window-close"></i></a>
                                                        <section class="mt-4" style="text-align:left;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card shadow">
                                                <div class="card-header py-2">Total number of votes per voting station</div>
                                                <div class="card-body" style="font-size: 12px;font-weight: 10;">
                                                    <div class="table-responsive table mb-0 pt-3 pr-2">
                                                        <table class="table table-striped table-sm my-0 mydatatable">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Party code</th>
                                                                    <th>Party name</th>
                                                                 
                                                                    <th>Votes</th>
                                                                    <th>Uploaded picture</th>
                                                                    <th>Status</th>
                                                                    
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <?PHP
              
include 'connect.php';
             

               

                              $vd=$_GET['v'];

              $query="SELECT
              party.party_code AS CODE,
              party.party_name AS NAME,
              party.logo AS LG,
              tblvote.image AS IM,
              tblvote.vd_id AS VI,
              tblvote.approved AS AP,
            
              sum(tblvote.total) AS VOTES
          FROM
              tblvote,party
          WHERE tblvote.vd_id='$vd' AND
              party.party_id = tblvote.party_id
            GROUP BY tblvote.party_id";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             
              
              if ($rows>0) {
                
                ?>
                                                            <tbody>
                                                            <?php
                                                            $x=1;
                                                            while ($rows=mysqli_fetch_array($result)) {

                                                                if($rows['AP']=='1')
                                                                {

                                                                     $none='style="display:none"';
                                                                     $message=' Votes approved';

                                                                }else
                                                                {
                                                                     $none='';
                                                                     $message='';


                                                                }
                                                          ?>
                  
                                                                <tr>
                                                                   
                                                                    <td><?php echo $x; ?></td>
                                                                    <td><?php echo $rows['CODE']; ?></td>
                                                                    <td><?php echo $rows['NAME']; ?></td>
                                                                    <td><?php echo $rows['VOTES']; ?></td>
                                                                    <td><a href="../datacapture/uploads/<?php echo $rows['IM']; ?>" target="blank" download>Download Image</a></td>
                                                                
                                                                    <td><a <?php echo $none; ?>  href="app.php?a=<?php echo $rows['VI']?>">Approve</a><?php echo $message;?></td>
                                                                 
                                                                   
                                                                </tr>
                                                               
                                                                <?php
                                                                $x++;
                  
                }
                ?>
                                                            </tbody>
                                                        </table>
                                                        <?php
                                                }else{
                                                  ?>
                                                  
                                                  <?php
                                                } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section></form>
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