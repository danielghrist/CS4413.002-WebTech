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
          <li><a href="contact.php" class="smoothScroll">Contact</a></li>
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
        if (!isset($_POST['submit'])) {
        ?>

          <!-- If action attribute is left blank it will send the results back to itself. -->
          <form class="form-horizontal" id="contact-form" role="form" action="" method="get">
            <div class="section-title">
              <h2>Contact Me <small>we love conversations. let us talk!</small></h2>
            </div>
            <div class="col-md-12 col-sm-12 has-feedback" id="fname-div">
              <label class="control-label" for="firstname">First name:</label>
              <input type="text" class="form-control" name="firstname" id="firstname"
                placeholder="Please enter your first name" required>
              <span id="fn-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>
              <span id="fn-feedback" class="help-block"></span>
            </div>
            <div class="col-md-12 col-sm-12 has-feedback" id="lname-div">
              <label class="control-label" for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="lastname" id="lastname"
                placeholder="Please enter your last name" required>
              <span id="ln-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>
              <span id="ln-feedback" class="help-block"></span>
            </div>
            <div class="col-md-12 col-sm-12 has-feedback" id="email-div">
              <label class="control-label" for="email">Email:</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Please enter your email"
                required>
              <span id="email-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>
              <span id="email-feedback" class="help-block"></span>
            </div>
            <div class="col-md-12 col-sm-12 has-feedback" id="phone-div">
              <label class="control-label" for="phone">Phone Number:</label>
              <input type="text" class="form-control" name="phone" id="phone"
                placeholder="Please enter your phone number" required>
              <span id="phone-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>
              <span id="phone-feedback" class="help-block"></span>
            </div>
            <div class="col-md-12 col-sm-12 has-feedback" id="username-div">
              <label class="control-label" for="username">Username:</label>
              <input type="text" class="form-control" name="username" id="username"
                placeholder="Please enter your a username" required>
              <span id="un-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>
              <span id="un-feedback" class="help-block"></span>
            </div>
            <div class="col-md-12 col-sm-12 has-feedback" id="password-div">
              <label class="control-label" for="password">Password:</label>
              <input type="password" class="form-control" name="password" id="password"
                placeholder="Please enter a password" required>
              <span id="pw-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>
              <span id="pw-feedback" class="help-block"></span>
            </div>
            <div class="col-md-12 col-sm-12" id="comments-div">
              <label class="control-label" for="comments">Comments:</label>
              <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message"
                id="comments" required></textarea>
              <span id="comments-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>
              <span id="comments-feedback" class="help-block"></span>
            </div>

            <div class="col-md-4 col-sm-12">
              <input type="submit" class="form-control" name="submit" value="Send Message">
            </div>

          </form>

        <?php
        }   else {
                echo '<h2>Hello From Results</h2>';
                echo '<p>First Name: '.$_POST['firstname'].'</p>';
                echo '<p>Last Name: '.$_POST['lastname'].'</p>';
                echo '<p>Email: '.$_POST['email'].'</p>';
                echo '<p>Phone Number: '.$_POST['phone'].'</p>';
                echo '<p>Username: '.$_POST['username'].'</p>';
                echo '<p>Password: '.$_POST['password'].'</p>';
                echo '<p>Comments: '.$_POST['message'].'</p>';
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