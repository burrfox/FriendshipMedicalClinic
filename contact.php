
<?php

if($_POST["submit"]) {
    $recipient="hampalford@gmail.com";
    $subject=$_POST["subject"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<?php


if($_POST["message"]) {


mail("your@email.address", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>



<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
			section > p, li {
				color: #3b3b3b;
			}
			h1, h2, h3, h4, h5 {
				color: #203e64;
			}
			h3 {
				font-size: 1.7em;
			}
			b {
				color:	#4f88bd;
			}
			.h-line {
				border:solid 2px #f0f0f0;
				border-radius: 8px;
			}

			.outer-flexbox .pleft {
				padding-left: 4em;
			}

			@media screen and (max-width: 780px) {
				.outer-flexbox {
					flex-wrap: wrap;
					justify-content: flex-start;
				}
				.outer-flexbox .pleft {
					padding-left: 0;
				}
			}
			
		</style>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<img src="images/fmclogo.jpg" alt="logo" class="fmclogo" />
			</header>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li ><a href="index.html">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li >
						<a href="paitentinfo.html">Patient Information</a>
						<ul>
							<li><a href="paitentinfo.html">Patient Information</a></li>
							<li><a href="about_us.html">About Us</a></li>
							<li><a href="mission.html">Our Mission</a></li>
							<li><a href="history.html">History</a></li>
							<li><a href="team.html">Meet The Team</a></li>
							<li></li>
							<li><a href="benefits.html">Why We Benefit Everyone</a></li>
						</ul>
					</li>
					<li >
						<a href="outreach.html">Community Partners</a>
						<ul>
							<li><a href="outreach.html">Community Partners</a></li>
							<li><a href="how_to_help.html">How You Can Help</a></li>
							<li><a href="volunteer.html">Volunteering</a></li>
							<li><a href="giving.html">Giving</a></li>
						</ul>
					</li>
					<!-- <li><a href="success_stories.html">Success Stories</a></li> -->
					<li  class="current"><a href="contact.html">Contact Us</a></li>
					<li><a href="donate.html">Donate</a></li>
				</ul>
			</nav>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="content">

									<!-- Content -->

										<article class="box page-content" style="padding-top: 50px;">

											<header>
												<h2 class="major"><span id="section-heading">Contact Us</span></h2>
												<p>Please submit any questions, comments, or concerns you might have here.</p>
												<?=$thankYou ?>
												<div class="h-line" style="margin-top:2em"></div>
											</header>


											<section>
												
												<div class="box" >
													<form method="post" action="contact.php">												
														<div class="row gtr-50 gtr-uniform">
															<div class="col-6 col-12-mobilep">
																<input type="text" name="name" id="name" placeholder="Name" />
															</div>
															<div class="col-6 col-12-mobilep">
																<input type="email" name="email" id="email" placeholder="Email" />
															</div>
															<div class="col-12">
																<input type="text" name="subject" id="subject" placeholder="Subject" />
															</div>
															<div class="col-12">
																<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
															</div>
															<div class="col-12">
																<ul class="actions special">
																	<li><input type="submit" name="submit">Submit</input></li>
																</ul>
															</div>
														</div>
													</form>
														
												</div>
											</section>

											<section>
												<h3 class="major"><span id="section-heading">Contact Information</span></h3>
												<div class="outer-flexbox">
													<p id="address">
														<b>Our Address:</b><br>
														Friendship Medical Clinic<br>
														1396 Highway 544<br>
														Conway, SC 29526
													</p>
													
												
													
													<p class="pleft">
														<b>Our Hours of Operation:</b><br>
														Monday - Thursday<br>
														8:30 a.m. - 4 p.m.
													</p>
													
													<p class="pleft">
														<b>Patient Line information/appointments:</b> 843-347-7178 <br>
														<b>All others phone:</b> 843-347-7199<br>
														<b>Fax:</b> 843-347-7180<br>
														<b>E-mail:</b> info@friendshipmedicalclinic.org<br>
													</p>
													
												</div>
												<p>
													<b>Maps and Directions: </b>
													Friendship Medical Clinic & Pharmacy is located 2/10 of a mile past the McDonald's located on the corner 
													of Singleton Ridge Road and Highway 544. You will be driving west towards Conway. The clinic is a cream-colored 
													brick building on the left. There is a small red and white sign near the road.<br><br>
													<b>Or just click on the map down at the bottom to get directions.</b>
												</p>
											</section>

										</article>

								</div>
							</div>
							
						</div>
					</div>
					
						<!-- 
							
						 -->
				</section>
				
				<!-- Footer -->
				<div class="container-fluid" style="background-color: #203e64;">

				<div class="container">
					<footer id="footer">

						<div class="row">
							<div class="col-12">
								<section id="map" >
									<p style="padding-left: 1em;font-weight: bold;padding-bottom:.3em">Get Directions</p>
									<iframe style="border:solid 1px black;border-radius: 5px;height: 15em;width:100%; margin-bottom: 3em;" loading="lazy" 
							allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJKULMATMTAIkRMrlRclFWGn4&key=AIzaSyAxbkhRBHYPDh_IJpbzWvOE1m4HE9FdTaM"></iframe>
						
								</section>
							</div>
						</div>
						<div class="row" id="contact-row">
							<div class="col-4 col-12-small">
								<div>
									<h2 class="icon solid fa-home">  Address</h2>
									<p style="margin-bottom: 1em;">
										Friendship Medical<br />
										Center & Pharmacy<br />
										1396 Highway 544<br /> 
										Conway, SC 29526	
									</p>
								</div>
							</div>
							<div class="col-4 col-12-small">
								<div>
									<h2 class="icon solid fa-phone">  Contact</h2>
									<p style="margin-bottom: 1em;">
										Phone: 843-347-7199<br /> Fax: 843-347-7180<br />
										Patient Line: 843-347-7178
									</p>
								</div>
								
							</div>
							<div class="col-4 col-12-small">
								<div>
									<h2 class="icon fa-comment">  Hours</h2>
									<p style="margin-bottom: 1em;">
										Clinic Hours:<br />
										Monday - Thursday<br />8:30am - 4:00pm
									</p>
								</div>
							</div>
						</div>
	
						<div class="row" id="footer-row-3">
							<div class="col-12">
								<ul class="contact" >
									<li><a class="icon brands fa-facebook-f" href="#"><span class="label">Facebook</span></a></li>
									<li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a></li>
									<li><a class="icon brands fa-instagram" href="#"><span class="label">Instagram</span></a></li>
									<li><a class="icon brands fa-linkedin-in" href="#"><span class="label">LinkedIn</span></a></li>
								</ul>
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li>
									</ul>
								</div>
							</div>
							
							
						</div>
					</footer>
				</div>	
				
			</div>	
		</div>

		
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>


<!-- <!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>


    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html> -->


