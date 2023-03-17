<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>OUR TEAM</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/timeveneto.css">
  <link rel="stylesheet" href="/javascripts/timeevent.js">
  <link rel="stylesheet" href="/css/style.css" />
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
    $('a[href^="#"]').on('click', function (event) {
      var target = $(this.getAttribute('href'));
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });

  </script>


  <style>
    /* CSS styling for the page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f1faee;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
      color: #f1faee;
      background-color: #457b9d;
      display: flex;
      background-color: #457b9d;
      color: #f1faee;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
      justify-content: center;
      margin: 0 auto;
      max-width: 230px;
      flex-direction: row;
      flex-wrap: wrap;
      align-content: space-around;
      align-items: center;

    }

    .team {
      margin-top: 50px;
    }

 

    .teammate {
      color: #457b9d;
      margin: 15px;
      padding: 5px;
      border-radius: 10px;
      background-color: #FFFFFF;
      box-shadow: 0px 0px 5px #999999;
      text-align: center;
      width: 250px;
    }

    .teammate img {
      width: 100%;
      height: auto;
      box-sizing: border-box;
      border-radius: 5%;
    }

    .teammate:hover {
      background-color: #457b9d;
      color: #f1faee;
    }

    h1:hover {
      background-color: #FE6234;

    }

    p {
      text-align: center;
    }
  </style>
</head>
<header>
  <a href="#" class="logo">
    <img src="/iamges/logo.png" alt="my website logo">
  </a>

  <nav>

    <ul>
      <li><a href="timevento.php" class="navigation">Home</a></li>
      <li><a href="Event.php" class="navigation">Events</a></li>
      <li><a href="#" class="navigation">Gallary</a></li>
      <li><a href="#" class="navigation">Blog</a></li>
      <li><a href="timevento.php#about-us" class="navigation">About Us</a></li>
      <li><a href="timevento.php#contact-us" class="navigation">Contact</a></li>
      <li><a href="registeration.php" class="navigation">Register</a></li>
    	<li><a href="/signup-login-logout/register.php" class="navigation">Sign Up</a></li>
			<li><a href="/signup-login-logout/login.php" class="navigation">Log In</a></li>
    </ul>
  </nav>
  <button onclick="myFunction()" type="submit" id="button"><img src="/iamges/search.png" alt="search icon"
      width="30px"></button>
  <input type="text" placeholder="search here" id="search">
</header>

<body>
  <section class="team">
    <h1>Meet My Team</h1>
    <div class="container">
      <div class="teammate">
        <img src="/iamges/niloy.jpg" alt="Teammate 1" width="300px">
        <h2>Teammate 1</h2>
        <p>ID: 1802017</p>
        <p>Dept. Of Education</p>
        <p>Email: shniloy@gmail.com</p>
      </div>
      <div class="teammate">
        <img src="/iamges/ema.jpg" alt="Teammate 1">
        <h2>Teammate 2</h2>
        <p>ID: 1802006</p>
        <p>Dept. Of Education</p>
        <p>Email: munema@gmail.com</p>
      </div>
      <div class="teammate">
        <img src="/iamges/sumona.jpg" alt="Teammate 2">
        <h2>Teammate 3</h2>
        <p>ID: 1802046</p>
        <p>Dept. Of Education</p>
        <p>Email: sumona@gmail.com</p>
     
      </div>
      <div class="teammate">
        <img src="/iamges/shampa.jpg" alt="Teammate 3">
        <h2>Teammate 4</h2>
        <p>ID: 1802008</p>
        <p>Dept. Of Education</p>
        <p>Email: shampa@gmail.com</p>
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
		<div class="column">
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