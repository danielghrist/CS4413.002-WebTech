<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>💻 Welcome to Daniel Ghrist's (kda458) Website! 💻</title>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="assets/css/templatemo-style.css">
</head>


<!-- TEMPLATE -->

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
        <a href="#top" class="navbar-brand">Danny's Site</a>
      </div>

      <!-- Begin Dynamic Menu Links -->
      <?php
      include('navigation.php');
      ?>
    </div>
  </section>
  <!-- End Dynamic Menu Links -->


  <!-- Begin Dynamic Content -->
  <?php
  // Check if $page is set and send the homepage if not, otherwise set $page to what was in $_GET:
  if (!isset($_GET['page'])) {
    $page = 'home';
  } else {
    $page = $_GET['page'];
  }

  // Serve the page contents depending on the $page variable:
  switch ($page) {
    case 'work':
      include('work.php');
      break;
    case 'school':
      include('school.php');
      break;
    case 'hobbies':
      include('hobbies.php');
      break;
    case 'movies':
      include('movies.php');
      break;
    case 'contact':
      include('contact.php');
      break;
    case 'results':
      include('results.php');
      break;
    case 'register':
      include('register.php');
      break;
    case 'login':
      include('login.php');
      break;
    default:
      include('home.php');
      break;
  };
  ?>
  <!-- End Dynamic Content -->


  <!-- Greeting Javascript -->
  <!-- <script src="assets/js/add-content.js"></script> -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- BootStrap 3 Javascript -->
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>