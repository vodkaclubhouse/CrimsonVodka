<?php 
if(isset($_POST['submit'])){
    $to = "CIAForces@gmail.com"; // this is your Email address
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
    <title>CIA Forces Club Collection</title>
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
						<script>
function changevolume(amount) {
  var audioobject = document.getElementsByTagName("audio")[0];
  audioobject.volume = amount;
}
</script>
<audio autoplay loop src="images/Damaged.mp3" type="audio/mp3"></audio>
<input type="range" id="vol" max="1" min="0" step="0.01" onchange="changevolume(this.value)" />
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="colorlib-active"><a href="collection.php">Collection</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="contact.php" >Contact</a></li>
					<li><a href="ts3server://CIA Forces Club" onclick="location.href='connectts3.php';" target="_blank" >Connect To TS³</a></li>
					<li><span></span> <a href="https://discord.gg/UNmXtsq">Connect To Discord</a></li>
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
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Collection</span></p>
	            <h1 class="bread">CIA Forces Club Collection</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section-3">
				<div class="photograhy">
					<div class="row">
						<div class="col-md-4 ftco-animate">
							<a href="images/art1.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art1.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 01</h3>
									<span class="tag">OverWatch</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art2.png" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art2.png);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 02</h3>
									<span class="tag">Destiny 2</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art3.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art3.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 03</h3>
									<span class="tag">Rainbow 6</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art4.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art4.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 04</h3>
									<span class="tag">Rainbow 6</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art5.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art5.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 05</h3>
									<span class="tag">Rainbow 6</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art6.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art6.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 06</h3>
									<span class="tag">watchdogs 1</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art7.png" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art7.png);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 07</h3>
									<span class="tag">Destiny 2</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art8.png" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art8.png);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 08</h3>
									<span class="tag">Destiny 2</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art9.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art9.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 09</h3>
									<span class="tag">Grid</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art13.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art13.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 10</h3>
									<span class="tag">KF2</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art14.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art14.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 11</h3>
									<span class="tag">ETS2</span>
								</div>
							</a>
						</div>
						<div class="col-md-4 ftco-animate">
							<a href="images/art12.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(images/art12.jpg);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3>Photo 12</h3>
									<span class="tag">KF2</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
	    <footer class="ftco-footer ftco-bg-dark ftco-section">
	      <div class="container px-md-5">
	        <div class="row mb-5">
	          <div class="col-md">
	            <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Recent Photos</h2>
	              <ul class="list-unstyled photo">
	                <li><a href="#" class="img" style="background-image: url(images/art9.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/art10.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/art11.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/art12.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/art13.jpg);"></a></li>
	                <li><a href="#" class="img" style="background-image: url(images/art14.jpg);"></a></li>
	              </ul>
	            </div>
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
  </body>
</html>