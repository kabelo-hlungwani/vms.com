<!DOCTYPE html>
<html lang="en">
<?php
    include 'connect.php';
 
   
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     
    
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>voting management system</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Callout-Info.css">
    <link rel="stylesheet" href="assets/css/Community-ChatComments.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/countdown-timer-1.css">
    <link rel="stylesheet" href="assets/css/countdown-timer.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/index-top-info-1.css">
    <link rel="stylesheet" href="assets/css/index-top-info.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/News-Cards-4-Columns-v2.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/simple-footer.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>
<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
	.back-link a {
		color: #4ca340;
		text-decoration: none; 
		border-bottom: 1px #4ca340 solid;
	}
	.back-link a:hover,
	.back-link a:focus {
		color: #408536; 
		text-decoration: none;
		border-bottom: 1px #408536 solid;
	}
	h1 {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		margin: 0;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		margin-bottom: 3px;
	}
	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	</style>
<body style="background: var(--color-white);">

<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: rgba(255,255,255,0);font-family: Alef, sans-serif;">
        <div class="container"><a class="navbar-brand" href="#" style="font-weight: 400;">VMS</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: #ffffff;border-color: rgba(136,136,136,0);"><span class="sr-only">Toggle navigation</span><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 24px;color: rgb(0,0,0);">
                    <path d="M8 6.9834C7.44772 6.9834 7 7.43111 7 7.9834C7 8.53568 7.44772 8.9834 8 8.9834H16C16.5523 8.9834 17 8.53568 17 7.9834C17 7.43111 16.5523 6.9834 16 6.9834H8Z" fill="currentColor"></path>
                    <path d="M7 12C7 11.4477 7.44772 11 8 11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H8C7.44772 13 7 12.5523 7 12Z" fill="currentColor"></path>
                    <path d="M8 15.017C7.44772 15.017 7 15.4647 7 16.017C7 16.5693 7.44772 17.017 8 17.017H16C16.5523 17.017 17 16.5693 17 16.017C17 15.4647 16.5523 15.017 16 15.017H8Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12Z" fill="currentColor"></path>
                </svg></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="font-weight: 00;">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php" style="color: var(--color-black);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: var(--color-black);">Visit Election Portal</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php" style="color: var(--color-black);">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="height: 500px;background: url(&quot;assets/img/pexels-george-morina-4960464.jpg&quot;) center / cover no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="min-height: initial;width: 100%;position: absolute;left: 0;background-color: rgba(30,41,99,0.53);height: inherit;">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container" style="font-family: Alef, sans-serif;">
                    <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">VOTING MANAGEMENT SYSTEM</h3>
                    <p class="text-center" style="color: rgb(242,245,248);padding-top: 0.25em;padding-bottom: 0.25em;font-weight: normal;font-size: 20px;">Voting Statistics</p>
                </div>
            </div>
        </div>
    </div>
    <section class="newsletter-subscribe" style="height: 269.969px;font-family: Alef, sans-serif;background: var(--color-black);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);font-weight: normal;">Check your IEC Status Here</h2>
                <p class="text-center" style="color: rgb(255,255,255);font-size: 14px;">What are you waiting for, check your registration status by simply using a click button below.</p>
                <p class="text-center">&nbsp;<button class="btn btn-sm" type="button" style="background: #126daa;color: rgb(255,255,255);border-radius: 0px;" onclick="window.open('https://www.elections.org.za/pw/OnlineForms/Check-My-Special-Vote-Application-Status', 'asdas', 'toolbars=0,width=400,height=320,left=200,top=200,scrollbars=1,resizable=1');" value="Open the window">Click Here</button></p>
            </div>
        </div>
    </section>

      <div class="container" style="padding-bottom: 35px;">
        <section class="mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="font-family: Alef, sans-serif;font-size: 12px;padding-bottom: 25px;">
                        <div class="card shadow">
                            <div class="card-header py-2" style="background: var(--primary);color: rgb(255,255,255);">
                                <p style="font-size: 16px;color: rgb(255,255,255)">Grid Of Voting (Results)</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table mb-0 pt-3 pr-2">
                                    <table class="table table-striped table-sm my-0 mydatatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Party Code</th>
                                                <th></th>
                                                <th>Party Name</th>
                                                
                                                <th>Total votes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
              
             

               

                              

              $query="SELECT
              party.party_code AS CODE,
              party.party_name AS NAME,
              party.logo AS LG,
            
              sum(tblvote.total) AS VOTES
          FROM
              tblvote,party
          WHERE
              party.party_id = tblvote.party_id
            GROUP BY tblvote.party_id";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             $x=1;
              $total=0;
              
              $maxi=array();
              $party=array();
              if ($rows>0) {
                while ($rows=mysqli_fetch_array($result)) {
                ?>
            
                                            <tr>
                                                <td><?php echo $x ?></td>
                                                <td><?php echo $rows['CODE']; ?></td>
                                                <td><img style="height:25px;width:25px" class="img-fluid" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode ($rows['LG']);?>"></td>
                                                <td><?php echo $rows['NAME']; ?></td>
                                             
                                                <td><?php echo number_format($rows['VOTES']); ?></td>
                                                
                                            </tr>
                                            <?php
                                            $maxi[]=$rows['VOTES'];
                                            $total=$total+$rows['VOTES'];
                                            //party names
                                            $party[]=$rows['CODE'];
                                            
                                           
                                          
                  $x++;
                }
                
                
            }
                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8" style="font-family: Alef, sans-serif;font-size: 14px;padding-bottom: 25px;">
                        <div class="card shadow">
                            <div class="card-header py-2" style="background: #4cd940;color: rgb(255,255,255);">
                                <p style="font-size: 16px;color: rgb(255,255,255)">Analytics Votes Reports</p>
                            </div>
                            <div class="card-body">
                            <h2 style="font-family: Alef, sans-serif;font-size: 14px;">The total number votes </h2>
                            <?php
$con  = mysqli_connect("localhost","root","","votesdb");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT party.party_code AS CODE,
      
              party.logo AS LG,
            
              sum(tblvote.total) AS VOTES
          FROM
              tblvote,party
          WHERE
              party.party_id = tblvote.party_id
            GROUP BY tblvote.party_id";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['CODE']  ;
            $sales[] = $row['VOTES'];
        }
 
 
 }
 
 
?>
                                <div><canvas id="chartjs_bar"></canvas></div>
                                <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                                <script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Alef',
                            fontSize: 12,
                        }
                    },
 
 
                }
                });
    </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" style="font-family: Alef, sans-serif;font-size: 14px;padding-bottom: 25px;">
                        <div class="card shadow">
                            <div class="card-header py-2" style="background: var(--indigo);color: rgb(255,255,255);">
     
                                <p style="font-size: 16px;color: rgb(255,255,255)">Analytics Votes Reports</p>
                            </div>

                            <?php   $con = mysqli_connect("localhost","root","","votesdb");
		$fetchqry = "SELECT party.party_code AS CODE,
      
        party.logo AS LG,
      
        sum(tblvote.total) AS VOTES
    FROM
        tblvote,party
    WHERE
        party.party_id = tblvote.party_id
      GROUP BY tblvote.party_id";
		$result1=mysqli_query($con,$fetchqry);
		
	
?>
              
                            <div class="card-body" style="text-align:center">
                          
                                <div id="piechart"  ><canvas ></canvas></div>
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
 <script type="text/javascript">
 // Load google charts
 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(drawChart);
  
 // Draw the chart and set the chart values
 function drawChart() {
   var data = google.visualization.arrayToDataTable([
   ['Hobbies', 'Time in Hours'], <?php
         $result1=mysqli_query($con,$fetchqry);
   while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
   echo "['".$row1['CODE']."', ".$row1['VOTES']."],";
    } ?>  ]);
   // Optional; add a title and set the width and height of the chart
   var options = {'title':'', 
                  'width':'auto', 
                  'height':'auto',
                  // pieHole: 0.2,
                   };
  
   // Display the chart inside the <div> element with id="piechart"
   var chart = new google.visualization.PieChart(document.getElementById('piechart'));
   chart.draw(data, options);
 }
 </script>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>
    <section class="newsletter-subscribe" style="height: 269.969px;font-family: Alef, sans-serif;background: var(--orange);color: var(--yellow);">
        <p class="text-center" style="color: rgb(255,255,255);font-size: 17px;">Announcement of the day</p>
        <div class="container">
            <div class="intro">
                <h2 class="text-center flash animated infinite" style="color: rgb(255,255,255);font-weight: normal;font-size: 16px;">(<?php 

                $large=max($maxi);


                 $select="SELECT
                 party.party_code AS CODE,
                 party.party_name AS NAME,
                 sum(tblvote.total) AS VOTES
                 FROM
                 tblvote,party
                 WHERE
                 party.party_id = tblvote.party_id         
                 GROUP BY tblvote.party_id
                 HAVING SUM(tblvote.total)=$large";


                $resu=mysqli_query($conn,$select) or die(mysqli_error($conn));
                $data=mysqli_fetch_array($resu);
                 
                 $perc=($large/$total)*100;
                echo 'The leading party is '.$data['CODE'].' with '.number_format($perc,1).'%';?>)</h2>
            </div>
        </div>
    </section>

    <footer class="footer-basic" style="margin-top: 0px;font-family: Alef, sans-serif;font-size: 14px;background: var(--color-black);">
        <div class="social"><a href="#" style="border-color: rgba(75,76,77,0);"><i class="icon ion-social-instagram" style="color: rgb(255,255,255);"></i></a><a href="#" style="border-color: rgba(75,76,77,0);"><i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i></a><a href="#" style="color: rgb(255,255,255);border-color: rgba(255,255,255,0);"><i class="icon ion-social-facebook"></i></a></div>
        <p class="copyright" style="font-weight: normal;font-size: 14px;color: rgb(255,255,255);">voting management system © 2021</p>
    </footer>
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
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
    <script src="assets/js/countdown-timer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
</body>

</html>