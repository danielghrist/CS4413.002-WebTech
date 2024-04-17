<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>💻 Welcome to Daniel Ghrist's (kda458) homepage! 💻</title>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="assets/css/templatemo-style.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

  <!-- MENU -->
  <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>

        <!-- lOGO TEXT HERE -->
        <a href="#" class="navbar-brand">Danny's Site</a>
      </div>

      <!-- MENU LINKS -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-nav-first">
          <li><a href="index.html" class="smoothScroll">Home</a></li>
          <li><a href="work.html" class="smoothScroll">Work</a></li>
          <li><a href="school.html" class="smoothScroll">School</a></li>
          <li><a href="hobbies.html" class="smoothScroll">Hobbies</a></li>
          <li><a href="movies.html" class="smoothScroll">Movies</a></li>
          <li><a href="contact.html" class="smoothScroll">Contact</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><img src="assets/images/your_image.png" class="me-img" alt="Simpsonized Version of Myself"
              title="Simpson Me"></i></li>
        </ul>
      </div>

    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-sm-12">
        <?php
            if (isset($_GET['submit'])) {
                echo '<h2>Hello From Results</h2>';
                echo '<p>First Name: '.$_GET['firstname'].'</p>';
                echo '<p>Last Name: '.$_GET['lastname'].'</p>';
                echo '<p>Email: '.$_GET['email'].'</p>';
                echo '<p>Phone Number: '.$_GET['phone'].'</p>';
                echo '<p>Username: '.$_GET['username'].'</p>';
                echo '<p>Password: '.$_GET['password'].'</p>';
                echo '<p>Comments: '.$_GET['message'].'</p>';
            } else {
                echo "<p>Ah Ah Ah you sneaky mouse. You have to enter your data and submit the form to view this page.</p>";
            }
        ?>
        
        </div>

        <div class="col-md-6 col-sm-12">
          <div class="contact-image">
            <img src="assets/images/your_image.png" class="img-responsive" alt="Simpsonized Version of Myself"
              title="Simpson Me">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- BootStrap 3 Javascript -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/event-attributes.js"></script>

</body>

</html>
