<!DOCTYPE html>
<html lang="en">

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
<?php
    include 'connect.php';
 
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     


    ?>

<?PHP
              
            $id=$_GET['edt'];

               

                              

              $query="SELECT * from newsfeed,staff where  newsfeed.news_id='$id'";
              $result=mysqli_query($conn,$query);
              
              $rows=mysqli_num_rows($result);
              
              
              
              if ($rows>0) {
                
                ?>
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
                    <li class="nav-item"><a class="nav-link" href="#" style="color: var(--color-black);">Visit Election Portal</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php" style="color: var(--color-black);">Blog</a></li>
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
    <?php
                    while ($rows=mysqli_fetch_array($result)) {
                  ?>
    <div class="container" style="padding-top: 25px;font-family: Alef, sans-serif;">
        <div class="row">
            <div class="col-md-8" style="font-family: Alef, sans-serif;">
                <section class="article-clean">
                    <div class="container">
                        <div class="row" style="font-family: Barlow, sans-serif;">
                            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                                <div class="intro">
                                    <h1 class="text-center" style="font-size: 31px;font-family: Alef, sans-serif;"><?php echo $rows['heading']?></h1>
                                    <p class="text-center"><span class="by">by</span> <a href="#" style="font-family: Alef, sans-serif;"><?php echo $rows['first_name'].' '.$rows['last_name']?></a><span class="date" style="font-family: Alef, sans-serif;"><?php echo date("M",strtotime($rows['date']))?> <?php echo date("d",strtotime($rows['date']))?>, <?php echo date("Y",strtotime($rows['date']))?> </span></p><img class="img-fluid" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode ($rows['image']);?>">
                                </div>
                                <div class="text">
                                    <p style="font-size: 15px;font-family: Alef, sans-serif;"><?php echo $rows['content'] ?></p>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php
                  
                }
                ?>

<?php
              }else{
                ?>
                
                <?php
              } ?>
            <div class="col-md-4">
            <?PHP
              
           
  
                 
  
                                
  
                $query1="SELECT * from newsfeed where news_id <> '$id'";
                $result1=mysqli_query($conn,$query1);
                
                $rows1=mysqli_num_rows($result1);
                
                
                
                if ($rows1>0) {
                  
                  ?>
                <div class="row">
                    <div class="col">
                        <h1 style="margin-top: 43px;font-family: Alef, sans-serif;font-size: 20px;border-bottom: 1.75px solid var(--pink);">Related Top Stories</h1>
                    </div>
                    <div class="col-lg-4" style="min-width: 100%;margin-bottom: 17px;">
                        <div class="list-group" style="border-color: rgb(255,255,255);font-family: Barlow, sans-serif;font-size: 15px;">
                        <?php
                        $x=1;
                    while ($rows1=mysqli_fetch_array($result1)) {
                  ?>
                        <a class="list-group-item "  href="read.php?edt=<?php echo $rows1['news_id']?>" style="border-top-right-radius: 0px;border-top-left-radius: 0px;border-top-color: rgba(220,220,220,0);border-right-color: rgba(255,255,255,0);border-bottom-color: rgba(0,0,0,0);border-left-color: rgba(255,255,255,0);text-align: left;font-family: Alef, sans-serif;"><span class="border rounded-0 shadow-none" style="background: #288DC9;color: rgb(241,241,241);">&nbsp;<?php echo $x;?>&nbsp;</span>&nbsp;<span style="text-decoration: underline;"><?php echo $rows1['heading']?></span></a>
                        <?php
                  $x++;
                }
                ?>

<?php 
              }else{
                ?>
                
                <?php
              } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 style="margin-top: 43px;font-family: Alef, sans-serif;font-size: 20px;border-bottom: 1.75px solid var(--pink);">Our Social Links</h1>
                    </div>
                    <div class="col-lg-4" style="min-width: 100%;margin-bottom: 17px;">
                        <div class="list-group" style="border-color: rgb(255,255,255);font-family: Barlow, sans-serif;font-size: 15px;"><a class="list-group-item list-group-item-action" data-toggle="list" href="#list-home" style="border-top-right-radius: 0px;border-top-left-radius: 0px;border-top-color: rgba(220,220,220,0);border-right-color: rgba(255,255,255,0);border-bottom-color: rgba(0,0,0,0);border-left-color: rgba(255,255,255,0);text-align: left;font-family: Alef, sans-serif;"><i class="fab fa-youtube-square" style="color: rgb(249,57,57);"></i>&nbsp;Youtube</a><a class="list-group-item list-group-item-action" data-toggle="list" href="#list-profile" style="border-color: rgba(73,80,87,0);border-top-color: rgb(73,80,87);border-bottom-color: rgba(73,80,87,0);text-align: left;font-family: Alef, sans-serif;"><i class="fab fa-twitter-square" style="color: rgb(57,226,249);"></i>&nbsp;Twitter</a><a class="list-group-item list-group-item-action" data-toggle="list" href="#list-messages" style="border-color: rgba(73,80,87,0);border-top-color: rgb(73,80,87);border-bottom-color: rgba(227,227,227,0);text-align: left;font-family: Alef, sans-serif;"><i class="fab fa-facebook-square" style="color: rgb(57,99,249);"></i>Facebook</a><a class="list-group-item list-group-item-action" data-toggle="list" href="#list-settings" style="border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;border-color: rgba(73,80,87,0);border-top-color: rgba(73, 80, 87, 0);text-align: left;font-family: Alef, sans-serif;"><i class="fab fa-whatsapp-square" style="color: rgb(57,249,76);"></i>&nbsp;Whatsapp</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
    <div class="container">
        <div class="row"></div>
    </div>
    <footer class="footer-basic" style="margin-top: 0px;font-family: Alef, sans-serif;font-size: 14px;background: var(--color-black);">
        <div class="social"><a href="#" style="border-color: rgba(75,76,77,0);"><i class="icon ion-social-instagram" style="color: rgb(255,255,255);"></i></a><a href="#" style="border-color: rgba(75,76,77,0);"><i class="icon ion-social-twitter" style="color: rgb(255,255,255);"></i></a><a href="#" style="color: rgb(255,255,255);border-color: rgba(255,255,255,0);"><i class="icon ion-social-facebook"></i></a></div>
        <p class="copyright" style="font-weight: normal;font-size: 14px;color: rgb(255,255,255);">voting management system © 2021</p>
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