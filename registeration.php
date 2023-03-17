<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registered";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $event =  $_POST['event'];
  $approx_people = $_POST['approx_people'];
  $color_theme = $_POST['color_theme'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $note = $_POST['note'];

  // Insert the form data into the database
  $stmt = $conn->prepare("INSERT INTO orders (name, event_type, approx_people, color_theme, phone, email, address, note) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param('ssisssss', $name, $event, $approx_people, $color_theme, $phone, $email, $address, $note);
  $stmt->execute();


  // Redirect to a thank-you page

  
  $message = "Your data has been registered.";
  echo "<script>alert('$message'); window.location.href = 'timevento.php';</script>";

  
 
  exit;

}
?>




<html lang="en">

<head>
  <title> Booking Page </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/Register.css">
  <link rel="stylesheet" href="/css/timeveneto.css">
  <link rel="stylesheet" href="/javascripts/timeevent.js">
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

</head>


<header>
  <a href="/timevento.php" class="logo">
    <img src="iamges/timevent.png" alt="my website logo">
  </a>

  <nav>

    <ul>
      <li><a href="timevento.php" class="navigation">Home</a></li>
      <li><a href="Event.php" class="navigation">Events</a></li>
      <li><a href="/Gallery/gallery - Copy.php" class="navigation">Gallary</a></li>
      <li><a href="/Gallery/blog.php" class="navigation">Blog</a></li>
      <li><a href="timevento.php#about-us" class="navigation">About Us</a></li>
      <li><a href="/timevento.php#contact-us" class="navigation">Contact</a></li>
      <li><a href="registeration.php" class="navigation">Register</a></li>
      <li><a href="/signup-login-logout/register.php" class="navigation">Sign Up</a></li>
			<li><a href="/signup-login-logout/login.php" class="navigation">Log In</a></li>
    </ul>
  </nav>
  <button onclick="myFunction()" type="submit" id="button"><img src="/iamges/search.png" alt="search icon" width="30px"></button>
  <input type="text" placeholder="search here" id="search">
  </button>
  <input type="text" placeholder="search here" id="search">
</header>

<body>


  <!--middle start-->
  <section>

    <div class="middle-content-right">
      <h1 class="btn" style="display:inline-block;margin-left:40%">Event Booking Form</h1>
      <hr>
      <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="field">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="field-checkbox" id="event">
          <label for="event">Event Type:</label><br>
          <input type="checkbox" id="wedding" name="event" value="Wedding">
          <label for="wedding">Wedding</label><br>
          <input type="checkbox" id="birthday" name="event" value="Birthday">
          <label for="birthday">Birthday</label><br>
          <input type="checkbox" id="conference" name="event" value="Conference">
          <label for="conference">Conference</label><br>
          <input type="checkbox" id="catering" name="event" value="Catering">
          <label for="catering">Catering Service</label><br>
        </div>

        <div class="field">
          <label for="approx_people">Approximate People:</label>
          <input type="number" id="approx_people" name="approx_people" min="50">
        </div>

        <div class="field">
          <label for="color_theme">Color/Theme:</label>
          <input type="text" id="color_theme" name="color_theme">
        </div>

        <div class="field">
          <label for="phone">Phone:</label>
          <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="field">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="field">
          <label for="address">Address:</label><br>
          <textarea id="address" name="address" rows="4" cols="50"></textarea>
        </div>

        <div class="field">
          <label for="note">Note:</label><br>
          <textarea id="note" name="note" rows="4" cols="50"></textarea>
        </div>

        <div class="field">
          <input type="submit" value="Submit" class="btn">
        </div>
      </form>



  </section>


</body>

<footer style="height:220px;">
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