<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/timeveneto.css">
	<link rel="stylesheet" href="/javascripts/timeevent.js">
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="icon" type="image/png" sizes="50x50" href="/iamges/logo.png">
	<script src="https://kit.fontawesome.com/dee4bdf293.js" crossorigin="anonymous"></script>
	<script>
		function myFunction() {
			var x = document.getElementById('search');
			if (x.style.display === 'none') {
				x.style.display = 'flex';
			} else {
				x.style.display = 'none';
			}
		}
	</script>
	<script>
		// Smooth scrolling for anchor links
		$('a[href^="#"]').on('click', function(event) {
			var target = $(this.getAttribute('href'));
			if (target.length) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
			}
		});
	</script>
	

	<title>TIMEVENTS</title>
</head>
<header>
	<a href="/timevento.php" class="logo">
		<img src="/iamges/logo.png" alt="my website logo">
	</a>

	<nav>

		<ul>
			<li><a href="timevento.php" class="navigation">Home</a></li>
			<li><a href="Event.php" class="navigation">Events</a></li>
			<li><a href="/Gallery/gallery - Copy.php" class="navigation">Gallary</a></li>
			<li><a href="/Gallery/blog.php" class="navigation">Blog</a></li>
			<li><a href="timevento.php#about-us" class="navigation">About Us</a></li>
			<li><a href="timevento.php#contact-us" class="navigation">Contact</a></li>
			<li><a href="registeration.php" class="navigation">Register</a></li>
			<li><a href="/signup-login-logout/register.php" class="navigation">Sign Up</a></li>
			<li><a href="/signup-login-logout/login.php" class="navigation">Log In</a></li>
		</ul>
	</nav>
	<button onclick="myFunction()" type="submit" id="button"><img src="/iamges/search.png" alt="search icon" width="30px"></button>
	<input type="text" placeholder="search here" id="search">
</header>



<body>
	<section class="hero">
		<div class="overlay"></div>
		<div class="container">
			<h1 class="containerh">TIMEVENT</h1>
			<p class="containerh">Bringing Memories To Life</p>
			<a href="#" class="btn">Let's Go</a>
		</div>
	</section>
	<section id="about-us">
		<div class="containers" style="    width: 100%;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center">
			<h2>About Us</h2>
			<p>we are passionate about creating unforgettable experiences that bring people together. With years of
				experience in the industry, we have the skills, creativity, and attention to detail needed to plan and
				execute events of all types and sizes.Our team is made up of dedicated professionals who are committed
				to providing exceptional service to our clients. We work closely with each client to understand their
				vision and goals, and then we bring that vision to life through careful planning, thoughtful design, and
				flawless execution.We take pride in our ability to handle every aspect of an event, from the initial
				concept to the final details. Whether it's a corporate event, wedding, or social gathering, we are
				dedicated to ensuring that every detail is perfect and that every guest has a truly memorable
				experience.
				At our core, we believe that events have the power to bring people together, to create lasting memories,
				and to inspire. We are honored to be a part of this industry and look forward to continuing to create
				unforgettable events for our clients.</p>
			<h1><a href="team.php" class="btn"><b>OUR TEAM</b></a></h1>
		</div>
	</section>
	<section class="features">
		<div class="iconic">
			<i class="fa-solid fa-chart-line"></i>
			<h5>Great Speakers</h5>
		</div>
		<div class="iconic">
			<i class="fa-solid fa-users"></i>
			<h5>New People</h5>
		</div>
		<div class="iconic">
			<i class="fa-sharp fa-solid fa-globe"></i>
			<h5>More Networking</h5>
		</div>
		<div class="iconic">
			<i class="fa-solid fa-wand-magic-sparkles"></i>
			<h5>Have Fun</h5>
		</div>

	</section>
	<section>

		<div class="middle-content-right">



			<h1><a href="/Event.php" class="btn"><b>OUR PACKAGES</b></a></h1>
			<br>
			<div class="container">
				<div class="item-container">
					<div class="img-container">
						<img src="/iamges/img1.jpg" alt="Event image">
					</div>

					<div class="body-container">
						<div class="overlay"></div>

						<div class="event-info">
							<p class="title">Wedding</p>
							<div class="separator"></div>
							<p class="info">Gazipur</p>
							<p class="price">2000TK</p>

							<div class="additional-info">
								<p class="info">
									<i class="fas fa-map-marker-alt"></i>
									Kaliakoir,Gazipur
								</p>
								<p class="info">
									<i class="far fa-calendar-alt"></i>
									March 2023
								</p>

								<p class="info description">
									Welcome! Wedding is a dream event for everyone.Manage your dream wedding with us.Our
									best offers including wedding venue,decoration,food and phptography wil mesmerize
									you.Full package is only 2000tk
								</p>
							</div>
						</div>
						<button class="action"><a href="/registeration.php" style="text-decoration: none;color:#ffffff;;">BOOK NOW</a></button>
					</div>
				</div>

				<div class="item-container">
					<div class="img-container">
						<img src="/iamges/img2.jpg" alt="Event image">
					</div>

					<div class="body-container">
						<div class="overlay"></div>

						<div class="event-info">
							<p class="title">Birthday</p>
							<div class="separator"></div>
							<p class="info">Gazipur</p>
							<p class="price">1000TK</p>

							<div class="additional-info">
								<p class="info">
									<i class="fas fa-map-marker-alt"></i>
									Kaliakoir,Gazipur
								</p>
								<p class="info">
									<i class="far fa-calendar-alt"></i>
									March,2023
								</p>

								<p class="info description">
									Welcome! Birthday is an important and special occasion of a person's life.Celebrate
									your birthday with our special birthday events.We arrange birthday venue,cake,food
									as per your choice.The amount of this package is only 1000 tk.
								</p>

							</div>
						</div>
						<button class="action"><a href="/registeration.php" style="text-decoration: none;color:#ffffff;;">BOOK NOW</a></button>
					</div>
				</div>

				<div class="item-container">
					<div class="img-container">
						<img src="/iamges/img3.jpg" alt="Event image">
					</div>

					<div class="body-container">
						<div class="overlay"></div>

						<div class="event-info">
							<p class="title">Conference</p>
							<div class="separator"></div>
							<p class="info">Gazipur</p>
							<p class="price">3000 TK</p>

							<div class="additional-info">
								<p class="info">
									<i class="fas fa-map-marker-alt"></i>
									Kaliakoir,Gazipur
								</p>
								<p class="info">
									<i class="far fa-calendar-alt"></i>
									March,2023
								</p>

								<p class="info description">
									Welcome! Are you looking for an event management to manage your conference?Here we
									are! We will arrange your conference program within a reasonable price as per your
									choice.The full package is only 3000 tk.
								</p>
							</div>
						</div>
						<button class="action"><a href="/registeration.php" style="text-decoration: none;color:white;">BOOK NOW</a></button>
					</div>
				</div>

				<div class="item-container">
					<div class="img-container">
						<img src="/iamges/img4.jpg" alt="Event image">
					</div>

					<div class="body-container">
						<div class="overlay"></div>

						<div class="event-info">
							<p class="title">Catering Service</p>
							<div class="separator"></div>
							<p class="info">Gazipur</p>
							<p class="price">1500TK</p>

							<div class="additional-info">
								<p class="info">
									<i class="fas fa-map-marker-alt"></i>
									Kaliakoir,Gazipur
								</p>
								<p class="info">
									<i class="far fa-calendar-alt"></i>
									March,2023
								</p>

								<p class="info description">
									Welcome! We provide catering service in various type of event like gaye
									holud,birthday,meetings,weedings etc.Book us now to arrange a perfect catering
									service.Our full package is only 1500tk.
								</p>
							</div>
						</div>
						<button class="action"><a href="/registeration.php" id="hov" style="text-decoration:none;color:#ffffff;">BOOK NOW</a></button>
					</div>
				</div>
			</div>


	</section>

</body>
<footer>
	<div class="containerh">
	<div class="column">
			<h3>TIMEVENT</h3>
			<ul>
				<li><a href="#">About TIMEVENT</a></li>
				<li><a href="#">Explore our eco-system</a></li>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">License</a></li>
				<li><a href="#">Terms & Conditions</a></li>
			</ul>
		</div>
		<div class="column">
			<h3>Quick Links</h3>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Events</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
		<div class="column" id="contact-us">
			<h3>Contact Us</h3>
			<ul>
				<li><i class="fas fa-map-marker-alt"></i> 123 Bagan bari Road, Latifpur, Kaliakoir</li>
				<li><i class="fas fa-phone"></i> +880 1875595927</li>
				<li><i class="fas fa-envelope"></i> info@timevent.com</li>
				<li>
					<div class="social-icons">
						<a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="copywrite">
		<p>&copy; 2023 TIMEVENTS All Rights Reserved by Sazzad Hossain</p>
	</div>
</footer>


</html>