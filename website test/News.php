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
    <title>CIA Forces Club News</title>
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
						<script>
function changevolume(amount) {
  var audioobject = document.getElementsByTagName("audio")[0];
  audioobject.volume = amount;
}
</script>
<audio autoplay loop src="images/Newssong.mp3" type="audio/mp3"></audio>

<input type="range" id="vol" max="1" min="0" step="0.01" onchange="changevolume(this.value)" />
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li class="colorlib-active"><a href="News.php">News</a></li>
					<li><span></span> <a href="images/Events.gif" class="image-popup justify-content-start align-items-end">Events</a></li>
					<li><span></span> <a href="https://ciaforcescf.000webhostapp.com/Blogs/View1/connectts3.php">TS³ WebView</a></li>
					<li><span></span> <a href="https://ciaforcescf.000webhostapp.com/teamspeak-leaderboard-master/teamspeak-leaderboard-master/">TS³ Leaderboard</a></li>
					<li><span></span> <a href="https://ciaforcescf.000webhostapp.com/QRAct">TS³ Activation</a></li>
					<li><span></span> <a href="https://ciaforcescf.000webhostapp.com/Teamspeak-3-icons-System-master/Teamspeak-3-icons-System-master/">TS³ Games manager</a></li>
					<li><span></span> <a href="https://forms.zohopublic.com/ciaforces/form/UpdatingUsersInfo/formperma/50b10b9EhK1Ek1a019153fEGf">Birthday Forum</a></li>

				</ul>
			</nav>

		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="connectts3.php">TS3Panel</a></span> <span>News</span></p>
	            <h1 class="bread">🔥 CIA Forces Club News 🔥</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-lg-8">
	    				<div class="row">
	    				    	    				    <div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
										<a href="https://www.epicgames.com/store/en-US/product/mutant-year-zero/home?sessionInvalidated=true" class="img img-2" style="background-image: url(images/MutantYearZero.jpg);"></a>
										<div class="text text-2 p-4">
				              <h3 class="mb-2"><a href="https://www.epicgames.com/store/en-US/product/mutant-year-zero/home?sessionInvalidated=true">Mutant Year Zero: Road to Eden Free 100%</a></h3>
				              <div class="meta-wrap">
												<p class="meta">
				              		<span>August 15, 2019</span>
				              		<span><a href="https://www.epicgames.com/store/en-US/product/mutant-year-zero/home?sessionInvalidated=true">Mutant Year Zero: Road to Eden Free 100%</a></span>
				              		<span>By Epic Games</span>
				              	</p>
			              	</div>
				              <p class="mb-4">Mankind has been eradicated by climate change, nuclear war, and pandemics. Will your team of mutants survive the Zone? Mutant Year Zero: Road to Eden is a tactical adventure game combining turn-based combat with real-time exploration, story, stealth, and strategy.</p>
				              <p><a href="https://www.epicgames.com/store/en-US/product/mutant-year-zero/home?sessionInvalidated=true">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            </div>
									</div>
			    			</div>
	    				    <div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
										<a href="https://www.bungie.net/en/Explore/Detail/News/48069" class="img img-2" style="background-image: url(images/newsd2.jpg);"></a>
										<div class="text text-2 p-4">
				              <h3 class="mb-2"><a href="https://www.bungie.net/en/Explore/Detail/News/48069">Destiny 2 News</a></h3>
				              <div class="meta-wrap">
												<p class="meta">
				              		<span>August 16, 2019</span>
				              		<span><a href="https://www.bungie.net/en/Explore/Detail/News/48069">Destiny 2 News</a></span>
				              		<span>By bungie</span>
				              	</p>
			              	</div>
				              <p class="mb-4">Usually, you find the majority of Destiny-related news within a This Week at Bungie blog post, dropping each Thursday around 3 PM Pacific. This week, we’ve done something different. We won’t be picking each of these apart here in the TWAB, but rather directing your attention to where this information lives.</p>
				              <p><a href="https://www.bungie.net/en/Explore/Detail/News/48069">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            </div>
									</div>
			    			</div>
			    			<div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
										<a href="https://www.rocketleague.com/news/season-12-update-coming-august-27-with-competitive-season-11-rewards/" class="img img-2" style="background-image: url(images/newsrls11.jpg);"></a>
										<div class="text text-2 p-4">
				              <h3 class="mb-2"><a href="https://www.rocketleague.com/news/season-12-update-coming-august-27-with-competitive-season-11-rewards/">RocketLeague</a></h3>
				              <div class="meta-wrap">
												<p class="meta">
				              		<span>August 15, 2019</span>
				              		<span><a href="https://www.rocketleague.com/news/season-12-update-coming-august-27-with-competitive-season-11-rewards/">RocketLeague</a></span>
				              		<span>By Max Parker</span>
				              	</p>
			              	</div>
				              <p class="mb-4">SEASON 12 UPDATE COMING AUGUST 27 WITH COMPETITIVE SEASON 11 REWARDS</p>
				              <p><a href="https://www.rocketleague.com/news/rocket-league-s-4th-birthday/" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            </div>
									</div>
			    			</div>
			    			<div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
										<a href="https://na.leagueoflegends.com/en/news/game-updates/patch/patch-916-notes" class="img img-2" style="background-image: url(images/newslol916.jpg);"></a>
										<div class="text text-2 p-4">
				              <h3 class="mb-2"><a href="https://na.leagueoflegends.com/en/news/game-updates/patch/patch-916-notes">League Of Legends NEWS</a></h3>
				              <div class="meta-wrap">
												<p class="meta">
				              		<span>8/15/2019</span>
				              		<span><a href="https://na.leagueoflegends.com/en/news/game-updates/patch/patch-916-notes">League Of Legends NEWS</a></span>
				              		<span>By AETHER, SHIO SHOUJO</span>
				              	</p>
			              	</div>
				              <p class="mb-4">Hey Humans or Dancer. It's patch 9.16! The One Where Pantheon Falls From The Skies. 

The Mantheon himself comes back to us in the form of Atreus and is ready to rock and roll with his trusty spear and shield. We're also making some smaller changes to some champions, which includes a lot of mid-laners like Corki, Azir, LeBlanc, Syndra, and others. 

See ya, space cowboy!</p>
				              <p><a href="https://na.leagueoflegends.com/en/news/game-updates/patch/patch-916-notes" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            </div>
									</div>
			    			</div>
			    			<div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
										<a href="https://rainbow6.ubisoft.com/siege/en-us/news/152-351972-16/smoke-sanguine-arsenic-advice-from-a-chemist" class="img img-2" style="background-image: url(images/newsr6elitesmoke.jpg);"></a>
										<div class="text text-2 p-4">
				              <h3 class="mb-2"><a href="https://rainbow6.ubisoft.com/siege/en-us/news/152-351972-16/smoke-sanguine-arsenic-advice-from-a-chemist">Rainbow 6 News</a></h3>
				              <div class="meta-wrap">
												<p class="meta">
				              		<span>08/15/2019 12:00 PM</span>
				              		<span><a href="https://rainbow6.ubisoft.com/siege/en-us/news/152-351972-16/smoke-sanguine-arsenic-advice-from-a-chemist">Rainbow 6 News</a></span>
				              		<span>By UbiSoft</span>
				              	</p>
			              	</div>
				              <p class="mb-4">SMOKE 'SANGUINE ARSENIC': ADVICE FROM A CHEMIST</p>
				              <p><a href="https://rainbow6.ubisoft.com/siege/en-us/news/152-351972-16/smoke-sanguine-arsenic-advice-from-a-chemist" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            </div>
									</div>
			    			</div>
			    			<div class="col-md-12">
			    				<div class="blog-entry ftco-animate d-md-flex">
										<a href="https://www.youtube.com/watch?v=DfSjGUUCsXk" class="img img-2" style="background-image: url(images/newsow.jpg);"></a>
										<div class="text text-2 p-4">
				              <h3 class="mb-2"><a href="https://playoverwatch.com/en-us/news/patch-notes/pc/#patch-60993">OverWatch News</a></h3>
				              <div class="meta-wrap">
												<p class="meta">
				              		<span>AUGUST 13, 2019</span>
				              		<span><a href="https://playoverwatch.com/en-us/news/patch-notes/pc/#patch-60993">OverWatch Patch</a></span>
				              		<span>By Blizzard</span>
				              	</p>
			              	</div>
				              <p class="mb-4">PATCH HIGHLIGHTS <b>New Feature: Role Queue</b> <b>New Hero: Sigma (Tank)</b></p>
				              <p><a href="https://playoverwatch.com/en-us/news/patch-notes/pc/#patch-60993" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
				            </div>
									</div>
			    			</div>
			    		</div><!-- END-->
			    		<div class="row">
			          <div class="col">
			            <div class="block-27">
			              <ul>
			                <li><a href="#">&lt;</a></li>
			                <li class="active"><span>1</span></li>
			                <li><a href="#">2</a></li>
			                <li><a href="#">&gt;</a></li>
			              </ul>
			            </div>
			          </div>
			        </div>
			    	</div>
	    			<div class="col-lg-4 sidebar ftco-animate bg-light">
	            <div class="sidebar-box">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	                </div>
	              </form>
	            </div>
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Categories</h3>
	              <ul class="categories">
	                <li><a href="https://www.rocketleague.com">Rocket League <span>(1)</span></a></li>
	                <li><a href="https://eune.leagueoflegends.com/en/news/game-updates/patch">League Of Legends <span>(1)</span></a></li>
	                <li><a href="https://rainbow6.ubisoft.com/siege/en-us/news/index.aspx">Rainbow 6 <span>(4)</span></a></li>
	                <li><a href="https://playoverwatch.com/en-us/news">OverWatch <span>(0)</span></a></li>
	                <li><a href="https://www.bungie.net/en/News">Destiny 2 <span>(4)</span></a></li>
	                <li><a href="https://www.facebook.com/CIAForces">CIA Forces Club News<span>(0)</span></a></li>
	              </ul>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Popular Articles</h3>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/newsrl.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="https://www.rocketleague.com/news/rocket-league-s-4th-birthday/"><span class="icon-calendar"></span> July 10, 2019 </a></div>
	                    <div><a href="https://www.rocketleague.com/news/rocket-league-s-4th-birthday/"><span class="icon-person"></span>  By Jeremy Dunham</a></div>
	                    <div><a href="https://www.rocketleague.com/news/rocket-league-s-4th-birthday/"><span class="icon-chat"></span> RocketLeague</a></div>
	                  </div>
	                </div>
	              </div>
	              

							<div class="sidebar-box subs-wrap img" style="background-image: url(images/bg_1.jpg);">
								<div class="overlay"></div>
								<h3 class="mb-4 sidebar-heading">Newsletter</h3>
								<p class="mb-4">🚨Subscribe For more news🚨</p>

	              <form action="" class="subscribe-form" method="post">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Email Address" name="email">
	                  <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit" name="submit">
	                </div>
	              </form>
	            </div>

	           

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">CIA Forces Club</h3>
	              <p>Thanks for your visit</p>
	            </div>
	            <body>
	            <h3 class="sidebar-heading">New Videos</h3>
	            <iframe width="250" height="250" src="https://www.youtube.com/embed/DfSjGUUCsXk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            
	            <iframe width="250" height="250" src="https://www.youtube.com/embed/9ewiJJe_nYI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </body>
	          </div><!-- END COL -->
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