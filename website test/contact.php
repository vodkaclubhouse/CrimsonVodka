<?php 
if(isset($_POST['submit'])){
    $to = "ciaforces@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " Subscribed to CIA Forces Club NewsLetter" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/favicon.png">
    <title>CIA Forces Club Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html"><span class="img" style="background-image: url(images/author.png);"></span>CIA Forces Club</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="collection.php">Collection</a></li>
					<li><a href="about.php">About us</a></li>
					<li class="colorlib-active"><a href="contact.php">Contact</a></li>
										<li><a href="ts3server://CIA Forces Club" onclick="location.href='connectts3.php';" target="_blank" >Connect To TS³</a></li>
					<li><span></span> <a href="https://discord.gg/UNmXtsq">Connect To Discord</a></li>
				</ul>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h3></h3>
				<div class="d-flex justify-content-center">
					<form action="" class="colorlib-subscribe-form" method="post">
                <div class="form-group d-flex">
            	<div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address" name="email">
              <input type="submit" value="" class="mt-2 btn btn-white submit" name="submit">
            </div>
          </form>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE NBK.us.to-->
		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
	            <h1 class="bread">Contact Us</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section contact-section">
	      <div class="container">
	        <div class="row d-flex mb-5 contact-info">
	          <div class="col-md-12 mb-4">
	            <h2 class="h3 font-weight-bold">Contact Us</h2>
	          </div>
	          <div class="w-100"></div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Discord Click</span> <a href="https://discord.gg/UNmXtsq"> Here</a></a></p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Teamspeak 3 Click</span> <a href="ts3server://CIA Forces Club"> Here</a></p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Email:</span> <a href="mailto:CIAForces@gmail.com">CIAForces@gmail.com</a></p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Website :</span> <a href="">NBK.us.to</a></p>
		          </div>
	          </div>
	        </div>
	        <div class="row block-9">
	          <div class="col-md-6 d-flex">
	              
	            <form action="" class="bg-light p-5 contact-form" method="post">
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Name" name="first_name">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Email" name="email">
	              </div>
	              <div class="form-group">
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="submit">
	              </div>
	            </form>
	          
	          </div>

	          <div class="col-md-6 d-flex">
<iframe width="1000" height="500" src="https://www.youtube.com/embed/MG5gURoHScQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	          </div>
	        </div>
	      </div>
	    </section>
	    <footer class="ftco-footer ftco-bg-dark ftco-section">
	      <div class="container px-md-5">
	        <div class="row mb-5">
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4 ml-md-4">
	              h2 class="ftco-heading-2">Recent Photos</h2>
	              <ul class="list-unstyled photo">
	                <li><a href="images/art9.jpg" class="img" style="background-image: url(images/art9.jpg);"></a></li>
	                <li><a href="images/art10.jpg" class="img" style="background-image: url(images/art10.jpg);"></a></li>
	                <li><a href="images/art11.jpg" class="img" style="background-image: url(images/art11.jpg);"></a></li>
	                <li><a href="images/art12.jpg" class="img" style="background-image: url(images/art12.jpg);"></a></li>
	                <li><a href="images/art13.jpg" class="img" style="background-image: url(images/art13.jpg);"></a></li>
	                <li><a href="images/art14.jpg" class="img" style="background-image: url(images/art14.jpg);"></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md">
	             
	          </div>
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-facebook"></span><span class="text">https://www.facebook.com/CIAForces</span></li>
		                <li><span class="icon icon-youtube"></span><span class="text">https://www.youtube.com/CIAFORCES</span></li>
		                <li><span class="icon icon-envelope"></span><span class="text">CIAForces@gmail.com</span></li>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">

            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <p style="color:red;"class="text-capitalize"><b>Powered by <a href="ts3server://CIA Forces Club">CIA Forces Clan</b></a></a></p>
                    <img src="images/author.png" alt="Smiley face" height="42" width="42"></center>
	          </div>
	        </div>
	      </div>
	    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
  const button = new Crate({
    server: '412655767620157461',
    channel: '598871582563106837',
    shard: 'https://disweb.deploys.io',
    location: ['bottom', 'left']
  })
  
  // Random color every 300 milliseconds
  setInterval(() => {
    button.options.color = "#000000".replace(/0/g, () => {
          return (~~(Math.random() * 16)).toString(16)
        })
  }, 300)

</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/582b3fa5fccdfa3ec8332284/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->    
  </body>
</html>