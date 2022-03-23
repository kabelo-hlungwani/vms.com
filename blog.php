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

<?PHP
              
             

               

                              

              $query="SELECT * from newsfeed,staff";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
             
              
              if ($rows>0) {
                
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

<body style="background: var(--color-white);">
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
                    <li class="nav-item"><a class="nav-link" href="elections.php" style="color: var(--color-black);">Visit Election Portal</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: var(--color-black);">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div style="height: 500px;background: url(&quot;assets/img/pexels-şahin-sezer-dinçer-3953481.jpg&quot;) center / cover no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="min-height: initial;width: 100%;position: absolute;left: 0;background-color: rgba(30,41,99,0.53);height: inherit;">
            <div class="d-flex align-items-center order-12" style="height:200px;">
                <div class="container" style="font-family: Alef, sans-serif;">
                    <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">VOTING MANAGEMENT SYSTEM</h3>
                    <p class="text-center" style="color: rgb(242,245,248);padding-top: 0.25em;padding-bottom: 0.25em;font-weight: normal;font-size: 20px;">NewsFeed</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 45px;font-family: Alef, sans-serif;">
        <ul class="list-inline" style="text-align: center;font-size: 15px;font-family: Barlow, sans-serif;">
            <li class="list-inline-item" style="background: var(--pink);border-radius: 7px;color: rgb(255,255,255);">&nbsp;All&nbsp;</li>
            <li class="list-inline-item" style="color: #ffffff;background: #dd0d0d;border-radius: 7px;">&nbsp;News&nbsp;</li>
        </ul>
        <div class="cust_bloglistintro">
            <p style="margin-left:34px;color:rgba(255,255,255,0.5);font-size:14px;"></p>
        </div>
        <div class="row">
        <?php
                    while ($rows=mysqli_fetch_array($result)) {
                  ?>
            <div class="col-md-4 cust_blogteaser" style="padding-bottom:20px;margin-bottom:32px;">
                <div class="card">
                    <div class="card-body">
                        <img class="img-fluid" style="height:auto;" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode ($rows['image']);?>"><br><br>
                        <h4 class="card-title" style="font-family: Barlow, sans-serif;font-weight: 700;color: #288DC9;font-size: 16px;"><?php echo $rows['heading'] ?></h4>
                        <h6 class="text-muted card-subtitle mb-2" style="margin-top: 0px;font-family: Barlow, sans-serif;"><span style="font-size: 12px;color: rgb(4,4,4);">Author :&nbsp;<i class="fa fa-user"></i>&nbsp;<?php echo $rows['first_name'].' '.$rows['last_name'] ?>&nbsp;</span></h6>
                        <h6 class="text-muted card-subtitle mb-2" style="margin-top: 0px;font-family: Barlow, sans-serif;"><span style="font-size: 12px;color: rgb(4,4,4);">Date :&nbsp;<i class="fa fa-clock"></i>&nbsp;<?php echo $rows['date']?>&nbsp;</span></h6>
                        
                        <div style="text-align: center;"><a class="btn btn-sm" role="button" style="border-radius: 0px;border-color: rgba(0,0,0,0.125);background: #288DC9;color: rgb(255,255,255);" href="read.php?edt=<?php echo $rows['news_id']?>">Read more</a></div>
                    </div>
                </div>

            </div>
            <?php
                  
                }
                ?>

<?php
              }else{
                ?>
           ?>
                <h3 style="color:black;text-align:center;">No record(s)</h3>
                <?php
              } ?>
           
        </div>
    </div>
    <section class="newsletter-subscribe" style="height: 269.969px;font-family: Alef, sans-serif;background: var(--red);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);font-weight: normal;">Don't forget to check your IEC Status Here!</h2>
                <p class="text-center" style="color: rgb(255,255,255);font-size: 14px;">Simple Click!</p>
                <p class="text-center">&nbsp;<button class="btn btn-sm" onclick="window.open('https://www.elections.org.za/pw/OnlineForms/Check-My-Special-Vote-Application-Status', 'asdas', 'toolbars=0,width=400,height=320,left=200,top=200,scrollbars=1,resizable=1');" value="Open the window" type="button" style="background: #126daa;color: rgb(255,255,255);border-radius: 0px;">Click Here</button></p>
            </div>
        </div>
    </section>
    <footer class="footer-basic" style="margin-top: 0px;font-family: Alef, sans-serif;font-size: 14px;background: var(--color-black);">
        <div class="social"><a href="#" style="border-color: rgba(75,76,77,0);"><i class="icon ion-social-instagram" style="color: rgb(255,255,255);"></i></a><a href="#" style="border-color: rgba(75,76,77,0);"><i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i></a><a href="#" style="color: rgb(255,255,255);border-color: rgba(255,255,255,0);"><i class="icon ion-social-facebook"></i></a></div>
        <p class="copyright" style="font-weight: normal;font-size: 14px;color: rgb(255,255,255);">voting management system © <?php echo date('Y')?></p>
    </footer>
    <div class="footer-2" style="background: rgb(255,255,255);height: 10px;"></div>
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
</body>

</html>