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
<script type="text/javascript" id="cookieinfo"
	src="//cookieinfoscript.com/js/cookieinfo.min.js"
	data-bg="#645862"
	data-fg="#FFFFFF"
	data-link="#F1D600"
	data-cookie="CookieInfoScript"
	data-text-align="left"
       data-close-text="Got it!">
</script>

<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/favicon.png">
    <title>CIA Forces Club TS³ Panel</title>
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
			<h1 id="colorlib-logo"><a href="index.php"><span class="img" style="background-image: url(images/author.png);"></span>CIA Forces Club</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
<input type="range" id="vol" max="1" min="0" step="0.01" onchange="changevolume(this.value)" />

				<ul>
					<li><a href="index.php">Home</a></li>
					<li><span></span> <a href="https://ciaforcescf.000webhostapp.com/Blogs/View1/News.php">News</a></li>
					<li><span></span> <a href="images/Events.gif" class="image-popup justify-content-start align-items-end">Events</a></li>
					<li class="colorlib-active"><a href="connectts3.php">TS³ WebView</a></li>
					<li><span></span> <a href="https://ciaforcescf.000webhostapp.com/teamspeak-leaderboard-master/teamspeak-leaderboard-master/">TS³ Leaderboard</a></li>
					<li><span></span> <a href="https://ciaforcescf.000webhostapp.com/QRAct">TS³ Activation</a></li>
					<li><span></span> <a href="https://ciaforcescf.000webhostapp.com/Teamspeak-3-icons-System-master/Teamspeak-3-icons-System-master/">TS³ Games manager</a></li>
					<li><span></span> <a href="https://forms.zohopublic.com/ciaforces/form/UpdatingUsersInfo/formperma/50b10b9EhK1Ek1a019153fEGf">Birthday Forum</a></li>
				</ul>
			</nav>

		</aside> <!-- END COLORLIB-ASIDE NBK.us.to-->
		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Ts3panel</span></p>
	            <h1 class="bread">⚔ Our Teamspeak 3 Panel ⚔</h1>
	          </div>
	        </div>
				</div>
			</section>
<head>
<title>Events Ticker</title>
<style>
  @keyframes ticker {
    0% { transform: translate3d(0, 0, 0); }
    100% { transform: translate3d(-150%, 0, 0); }
  }
  .tcontainer{
    width: 100%;
    overflow: hidden;
  }
  .ticker-wrap {
    width: 100%;
    padding-left: 100%;
    background-color: #eee;
  }
  .ticker-move {
    display: inline-block;
    white-space: nowrap;
    padding-right: 100%;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    animation-name: ticker;
    animation-duration: 20s;
  }
  .ticker-move:hover{
    animation-play-state: paused;
  }
  .ticker-item{
    display: inline-block;
    padding: 0 2rem;
  }
</style>
</head>
<body>
  <div class="tcontainer">
    <div class="ticker-wrap">
      <div class="ticker-move">
        <div class="ticker-item"><b>💥 Rocket League : Rocket Pass 4 will begin on Aug 28 💥</b></div>
        <div class="ticker-item"><b>🌀 League Of Legends : Patch 9.15 notes was released 🌀</b></div>
        <div class="ticker-item"><b>🚨 Rainbow 6 : NEW BUNDLES COMING TO RAINBOW SIX SIEGE JULY 30 🚨</b></div>
        <div class="ticker-item"><b>💲 Donation Plans : ComingSoon 💲</b></div>
        <div class="ticker-item"><b>👑 EuroTruck : JOIN THE #GOODYEARROLLOUT & win a free DLC 👑</b></div>
        <div class="ticker-item"><b>🔥 Overwatch : Last week in Summer Games event 🔥</b></div>
        <div class="ticker-item"><b>🤖 Killing Floor 2 : Back & Kickin' Brass Summer Event is now live! 🤖</b></div>
      </div>
    </div>
  </div>
</body>


			<script>
function changevolume(amount) {
  var audioobject = document.getElementsByTagName("video")[0];
  audioobject.volume = amount;
}
</script>
<center><video width="800" height="500" autoplay loop>
  <source src="images/NeedforSpeed™HeatOfficialRevealTrailer.mp4" type="video/mp4">
  <source src="images/NeedforSpeed™HeatOfficialRevealTrailer.mp4" type="video/ogg">
  Your browser does not support the video tag.
</video></center>	
<body>
<div class="sidebar-box ftco-animate">
    <div id="ts3viewer_1117236" style=""> </div>

<script src="https://static.tsviewer.com/short_expire/js/ts3viewer_loader.js"></script>
<script>
var ts3v_url_1 = "https://www.tsviewer.com/ts3viewer.php?ID=1117236&text=000000&text_size=13&text_family=1&text_s_color=000000&text_s_weight=bold&text_s_style=normal&text_s_variant=normal&text_s_decoration=none&text_i_color=&text_i_weight=normal&text_i_style=normal&text_i_variant=normal&text_i_decoration=none&text_c_color=&text_c_weight=normal&text_c_style=normal&text_c_variant=normal&text_c_decoration=none&text_u_color=000000&text_u_weight=bold&text_u_style=normal&text_u_variant=normal&text_u_decoration=none&text_s_color_h=&text_s_weight_h=normal&text_s_style_h=normal&text_s_variant_h=normal&text_s_decoration_h=none&text_i_color_h=000000&text_i_weight_h=bold&text_i_style_h=normal&text_i_variant_h=normal&text_i_decoration_h=none&text_c_color_h=&text_c_weight_h=normal&text_c_style_h=normal&text_c_variant_h=normal&text_c_decoration_h=none&text_u_color_h=&text_u_weight_h=normal&text_u_style_h=normal&text_u_variant_h=normal&text_u_decoration_h=none&iconset=default_colored_2014";
ts3v_display.init(ts3v_url_1, 1117236, 100);
</script>
    </div>
    </body>
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
                    <p style="color:red;"class="text-capitalize"><b>Powered by <a href="ts3server://CIA Forces Club">CIA Forces Clan</b></a></a></p><img src="images/author.png" alt="Smiley face" height="42" width="42"></center>
	          </div>
	        </div>
	      </div>
	    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/Video.js"></script>
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