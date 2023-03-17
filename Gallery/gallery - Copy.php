<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery with Multiple Tabs</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="footer.css">
    <header>
        <a href="/timevento.php" class="logo">
            <img src="/iamges/logo.png" alt="my website logo" />
        </a>

        <nav>

            <ul>
            <li><a href="/timevento.php" class="navigation">Home</a></li>
			<li><a href="/Event.php" class="navigation">Events</a></li>
			<li><a href="/Gallery/gallery - Copy.php" class="navigation">Gallary</a></li>
			<li><a href="/Gallery/blog.php" class="navigation">Blog</a></li>
			<li><a href="/timevento.php#about-us" class="navigation">About Us</a></li>
			<li><a href="/timevento.php#contact-us" class="navigation">Contact</a></li>
			<li><a href="/registeration.php" class="navigation">Register</a></li>
			<li><a href="/signup-login-logout/register.php" class="navigation">Sign Up</a></li>
			<li><a href="/signup-login-logout/login.php" class="navigation">Log In</a></li>
            </ul>
        </nav>
        <button onclick="myFunction()" type="submit" id="button"><img src="/iamges/search.png" alt="search icon"
                width="30px"></button>
        <input type="text" placeholder="search here" id="search">
        </button>

        <div class="searchbox">
            <input type="text" placeholder="search here" id="search" />
        </div>
    </header>
   
</head>
<body>

<!-- Create a container for the gallery -->
<h1 style="text-align: center;">OUR PHOTO GALLERY</h1>
<div class="container mt-5">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">All Photos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Meeting</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Wedding</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Birthday</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Conference</a>
        </li>
    </ul>
    <!-- Create the content for each tab -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <!-- Add images for tab 1 -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="img/c1.png" alt="Image 1" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/c2.png" alt="Image 2" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/w3.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/m3.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/m1.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/w4.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/b.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/m5.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/m6.png" alt="Image 3" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <!-- Add images for tab 2 -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="img/m2.png" alt="Image 4" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/m4.png" alt="Image 5" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/m1.png" alt="Image 6" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/m6.png" alt="Image 6" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <!-- Add images for tab 3 -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="img/w1.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/w2.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/w3.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/w4.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/w5.png" alt="Image 7" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
            <!-- Add images for tab 4 -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="img/b1.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/b.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/b3.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/b4.png" alt="Image 7" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
            <!-- Add images for tab 5 -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="img/c7.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/c6.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/c5.png" alt="Image 7" class="img-fluid">
                </div>
                <div class="col-md-4 mb-3">
                    <img src="img/c4.png" alt="Image 7" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<body>
    <footer>
        <div class="containerh">
        <div class="footer_column">
            <h4>TIMEVENT</h4>
            <ul>
              <li><a href="#">About TIMEVENT</a></li>
              <li><a href="#">Explore our eco-system</a></li>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">License</a></li>
              <li><a href="#">Terms & Conditions</a></li>
            </ul>
          </div>
          <div class="footer_column">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer_column">
            <h4>Contact Us</h4>
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


 

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>


</html>

