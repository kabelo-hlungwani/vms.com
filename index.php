<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>voting management system</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	
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
    <link rel="stylesheet" href="assets/css/header-1.css">
    <link rel="stylesheet" href="assets/css/header-2.css">
    <link rel="stylesheet" href="assets/css/header.css">
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
   
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive.css">
	  
    <link rel="stylesheet" href="loader/style.css">
</head>



<?php

include 'connect.php';

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}






if(isset($_POST['post']))
{
    
$name=$_POST['name'];   
$email=$_POST['email'];
$message=$_POST['message'];




$command="INSERT INTO comment(email,message) 
            VALUES ('$email','$message')";



$edit=mysqli_query($conn,$command);  


if($edit){
mysqli_close($conn);

echo '<script>alert("Thanks for sending your message we will get back to you soon.");window.location = "index.php";</script>';

exit;

}

}


?>

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
<body>
     
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
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: var(--color-black);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about" style="color: var(--color-black);">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" style="color: var(--color-black);">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="elections.php" style="color: var(--color-black);">Visit Election Portal</a></li>
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
                    <p class="text-center" style="color: rgb(242,245,248);padding-top: 0.25em;padding-bottom: 0.25em;font-weight: normal;font-size: 20px;">No more <span style="text-decoration: underline;">corruption </span>of votes.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="newsletter-subscribe" style="height: 269.969px;font-family: Alef, sans-serif;background: var(--color-black);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(255,255,255);font-weight: normal;">Check your IEC Status Here</h2>
                <p class="text-center" style="color: rgb(255,255,255);font-size: 14px;">What are you waiting for, check your registration status by simply using a click button below.</p>
                <p class="text-center">&nbsp;<button class="btn btn-sm" type="button" onclick="window.open('https://www.elections.org.za/pw/OnlineForms/Check-My-Special-Vote-Application-Status', 'asdas', 'toolbars=0,width=400,height=320,left=200,top=200,scrollbars=1,resizable=1');" value="Open the window" style="background: #126daa;color: rgb(255,255,255);border-radius: 0px;">Click Here</button></p>
            </div>
        </div>
    </section>
    <div class="container" id="about" style="padding-top: 14px;font-family: Alef, sans-serif;font-size: 16px;">
        <h1 style="font-size: 30px;">Who Are We?</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="video-container"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/26MDGJMM8dE?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=26MDGJMM8dE&amp;controls=0"></iframe></div>
            </div>
            <div class="col-md-4">
                <h3 class="my-3"></h3>
                <div class="bs-callout bs-callout-info" style="font-size: 14px;">
                    <h4 style="font-size: 18px;color: #111010;">What is VMS</h4>
                    <p class="text-left" style="font-size: 14px;">VMS is a system designed for managing Votes and its has developed to eradicate inconveniences in terms of votes.<br></p>
                </div>
                <div class="bs-callout bs-callout-info" style="font-size: 14px;">
                    <h4 style="font-size: 18px;color: #111010;">Mission</h4>
                    <p class="text-left" style="font-size: 14px;">To restore the country's dignity ,restore country status and bring change.<br></p>
                </div>
            </div>
        </div>
        <p style="text-align: left;font-size: 14px;">Voting management systems are responsible for managing your entire election, from nominations and campaigns to voting and tabulating results. A robust system provides greater security and confidence.&nbsp;voting management systems offer an all-encompassing solution to seemingly onerous elections. From&nbsp;nominations&nbsp;to guaranteeing that ballots are safely delivered and managing a smooth election, these tools literally&nbsp;do it all. So the next time you’re in the market for a new election management agency, ask them about their software and how they organize elections. If they cover some or most of the aforementioned benefits,&nbsp;they might just get your vote.<br></p>
    </div>
    <div class="jumbotron" style="background: url(&quot;assets/img/pexels-şahin-sezer-dinçer-3953481.jpg&quot;), #7d7676;border-radius: 0px;opacity: 0.74;">
        <h1 style="text-align: center;font-size: 24px;font-family: Alef, sans-serif;font-weight: normal;color: rgb(255,255,255);">Check Results</h1>
        <p style="text-align: center;font-size: 14px;font-family: Alef, sans-serif;color: rgb(255,255,255);">You can check voting results by simple clicking button below.</p>
        <p style="text-align: center;"><a class="btn btn-sm" role="button" style="border-radius: 0px;background: #126daa;color: var(--color-white);" href="elections.php">Results</a></p>
    </div>
	 <section class="bg-info text-white" style="background: rgb(255,255,255);font-family: Alef, sans-serif;padding-left: 50px;padding-right: 50px;">
        <div class="container text-center">
            <div class="row pt-5">
                <div class="col-md-8 offset-md-2">
                    <h1 style="color: rgb(0,0,0);font-size: 24px;">VMS Statistics</h1>
                    <p class="text-center" style="color: rgb(0,0,0);font-size: 14px;">Voting stats</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-sm-6 col-lg-3 pt-5" style="color: rgb(0,0,0);font-size: 13px;">
                    <p class="m-0"><i class="fa fa-home fa-3x" aria-hidden="true"></i></p>
                    <p class="m-0 display-4"> <span class="nbanimate" style="font-size: 40px;">325</span></p>
                    <h2 style="font-size: 20px;">Political Parties&nbsp;</h2>
                </div>
                <div class="col-sm-6 col-lg-3 pt-5" style="color: rgb(0,0,0);font-size: 13px;">
                    <p class="m-0"><i class="fa fa-building fa-3x" aria-hidden="true"></i></p>
                    <p class="m-0 display-4" style="color: rgb(0,0,0);"> <span class="nbanimate nbreplay" style="font-size: 40px;">278</span></p>
                    <h2 style="font-size: 20px;">Municipality</h2>
                </div>
                <div class="col-sm-6 col-lg-3 pt-5" style="color: rgb(0,0,0);">
                    <p class="m-0" style="font-size: 13px;"><i class="fa fa-bar-chart-o fa-3x" aria-hidden="true"></i></p>
                    <p class="m-0 display-4"> <span class="nbanimate" style="font-size: 40px;">23 151<br></span></p>
                    <h2 style="font-size: 20px;">Voting Stations</h2>
                </div>
                <div class="col-sm-6 col-lg-3 pt-5" style="color: rgb(0,0,0);font-size: 13px;">
                    <p class="m-0"><i class="fa fa-users fa-3x" aria-hidden="true"></i></p>
                    <p class="m-0 display-4"> <span class="nbanimate" style="font-size: 40px;">1,000,000</span></p>
                    <h2 style="font-size: 20px;">Like it ?</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="getintouch" style="font-family: Alef, sans-serif;">
        <div class="container modern-form" style="border-style: none;">
            <div class="text-center">
                <h4 id="contact" style="color: var(--color-black);font-size: 24px;">Get in touch</h4>
            </div>
            <hr class="modern-form__hr" style="background: var(--color-black);border-width: 1px;">
            <div class="modern-form__form-container" style="padding-top: 0px;">
                <form method="post">
                    <div class="form-row">
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-r"><input class="form-control input input-tr" type="text" name="name" placeholder="First Name" style="font-size: 14px;" required="">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-contact">
                            <div class="form-group modern-form__form-group--padding-l"><input class="form-control input input-tr" type="text" name="email"placeholder="Email" style="font-size: 14px;"required="">
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group modern-form__form-group--padding-t"><textarea class="form-control input modern-form__form-control--textarea" name="message" placeholder="Message" style="padding-top: 0px;font-size: 14px;" required=""></textarea>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col text-center"><button class="btn btn-sm submit-now" type="submit" name="post" style="background: #126daa;color: var(--color-white);font-size: 14px;">Submit Now</button></div>
                    </div>
                </form>
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
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable.js"></script>
    <script src="assets/js/countdown-timer.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
</body>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
    $(window).load(function() {
	$(".preloader").delay(5000).fadeOut("slow");
  $("#overlayer").delay(5000).fadeOut("slow");
})
    </script>
</html>