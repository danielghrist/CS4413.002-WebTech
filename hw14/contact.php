<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>💻 Contact Daniel Ghrist's (kda458) 💻</title>

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
          <li><img src="assets/images/your_image.png" class="me-img" alt="Simpsonized Version of Myself" title="Simpson Me"></i></li>
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
          session_start();
          if (!isset($_POST['submit'])) {

            // If action attribute is left blank it will send the results back to itself.
            echo '<form class="form-horizontal" id="contact-form" role="form" action="" method="post">';
            echo '<div class="section-title">';
            echo '<h2>Contact Me <small>we love conversations. let us talk!</small></h2>';
            echo '</div>';

            // First Name:
            if (isset($_GET['errMsg'])) {
              echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="fname-div">';
              echo '<label class="control-label" for="firstname">First name:</label>';
              echo '<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Please enter your first name">';
              echo '<span id="fn-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
              if (strstr($_GET['errMsg'], 'firstNameNULL')) {
                echo '<span id="fn-feedback" class="help-block">First name cannot be blank.</span>';
              } elseif (strstr($_GET['errMsg'], 'firstNameInvalidChar')) {
                echo '<span id="fn-feedback" class="help-block">Your first name must only be alphabetical chars and either a - or \'.</span>';
              }
              echo '</div>';
            }
            // elseif (isset($_GET['errMsg']) && strstr($_GET['errMsg'], 'firstNameInvalidChar')) {
            //   echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="fname-div">';
            //   echo '<label class="control-label" for="firstname">First name:</label>';
            //   echo '<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Please enter your first name">';
            //   echo '<span id="fn-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
            //   echo '<span id="fn-feedback" class="help-block">Your First name must only be alphabetical chars and either a - or \'</span>';
            //   echo '</div>';
            // } 
            else {
              if (isset($_SESSION['firstname']) && $_SESSION['firstname'] != "") {
                echo '<div class="col-md-12 col-sm-12 has-feedback has-success" id="fname-div">';
                echo '<label class="control-label" for="firstname">First name:</label>';
                echo '<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Please enter your first name" value="' . $_SESSION['firstname'] . '">';
                echo '<span id="fn-icon" class="input-lg glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>';
                echo '<span id="fn-feedback" class="help-block"></span>';
                echo '</div>';
              } else {
                echo '<div class="col-md-12 col-sm-12 has-feedback" id="fname-div">';
                echo '<label class="control-label" for="firstname">First name:</label>';
                echo '<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Please enter your first name">';
                echo '<span id="fn-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
                echo '<span id="fn-feedback" class="help-block"></span>';
                echo '</div>';
              }
            }

            // Last Name:
            if (isset($_GET['errMsg'])) {
              echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="lname-div">';
              echo '<label class="control-label" for="lastname">Last Name:</label>';
              echo '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Please enter your last name">';
              echo '<span id="ln-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
              if (strstr($_GET['errMsg'], 'lastNameNULL')) {
                echo '<span id="ln-feedback" class="help-block">Last name cannot be blank.</span>';
              } elseif (strstr($_GET['errMsg'], 'lastNameInvalidChar')) {
                echo '<span id="ln-feedback" class="help-block">Your last name must only be alphabetical chars and either a - or \'.</span>';
              }
              echo '</div>';
            } else {
              if (isset($_SESSION['lastname']) && $_SESSION['lastname'] != "") {
                echo '<div class="col-md-12 col-sm-12 has-feedback has-success" id="lname-div">';
                echo '<label class="control-label" for="lastname">Last Name:</label>';
                echo '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Please enter your last name" value="' . $_SESSION['lastname'] . '">';
                echo '<span id="ln-icon" class="input-lg glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>';
                echo '<span id="ln-feedback" class="help-block"></span>';
                echo '</div>';
              } else {
                echo '<div class="col-md-12 col-sm-12 has-feedback" id="lname-div">';
                echo '<label class="control-label" for="lastname">Last Name:</label>';
                echo '<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Please enter your last name">';
                echo '<span id="ln-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
                echo '<span id="ln-feedback" class="help-block"></span>';
                echo '</div>';
              }
            }

            // Email:
            if (isset($_GET['errMsg'])) {
              echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="email-div">';
              echo '<label class="control-label" for="email">Email:</label>';
              echo '<input type="text" class="form-control" name="email" id="email" placeholder="Please enter your email">';
              echo '<span id="email-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
              if (strstr($_GET['errMsg'], 'emailNULL')) {
                echo '<span id="email-feedback" class="help-block">Email cannot be blank.</span>';
              } elseif (strstr($_GET['errMsg'], 'emailInvalid')) {
                echo '<span id="email-feedback" class="help-block">Invalid email format.</span>';
              }
              echo '</div>';
            } else {
              if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
                echo '<div class="col-md-12 col-sm-12 has-feedback has-success" id="email-div">';
                echo '<label class="control-label" for="email">Email:</label>';
                echo '<input type="text" class="form-control" name="email" id="email" placeholder="Please enter your email" value="' . $_SESSION['email'] . '">';
                echo '<span id="email-icon" class="input-lg glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>';
                echo '<span id="email-feedback" class="help-block"></span>';
                echo '</div>';
              } else {
                echo '<div class="col-md-12 col-sm-12 has-feedback" id="email-div">';
                echo '<label class="control-label" for="email">Email:</label>';
                echo '<input type="text" class="form-control" name="email" id="email" placeholder="Please enter your email">';
                echo '<span id="email-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
                echo '<span id="email-feedback" class="help-block"></span>';
                echo '</div>';
              }
            }

            // Phone:
            if (isset($_GET['errMsg'])) {
              echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="phone-div">';
              echo '<label class="control-label" for="phone">Phone Number:</label>';
              echo '<input type="text" class="form-control" name="phone" id="phone" placeholder="Please enter your phone number">';
              echo '<span id="phone-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
              if (strstr($_GET['errMsg'], 'phoneNULL')) {
                echo '<span id="phone-feedback" class="help-block">Phone number cannot be blank.</span>';
              } elseif (strstr($_GET['errMsg'], 'phoneInvalid')) {
                echo '<span id="phone-feedback" class="help-block">Phone number can only contain digits.</span>';
              }
              echo '</div>';
            } else {
              if (isset($_SESSION['phone']) && $_SESSION['phone'] != "") {
                echo '<div class="col-md-12 col-sm-12 has-feedback has-success" id="phone-div">';
                echo '<label class="control-label" for="phone">Phone Number:</label>';
                echo '<input type="text" class="form-control" name="phone" id="phone" placeholder="Please enter your phone number" value="' . $_SESSION['phone'] . '">';
                echo '<span id="phone-icon" class="input-lg glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>';
                echo '<span id="phone-feedback" class="help-block"></span>';
                echo '</div>';
              } else {
                echo '<div class="col-md-12 col-sm-12 has-feedback" id="phone-div">';
                echo '<label class="control-label" for="phone">Phone Number:</label>';
                echo '<input type="text" class="form-control" name="phone" id="phone" placeholder="Please enter your phone number">';
                echo '<span id="phone-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
                echo '<span id="phone-feedback" class="help-block"></span>';
                echo '</div>';
              }
            }

            // Username:
            if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], 'usernameNULL')) {
              echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="username-div">';
              echo '<label class="control-label" for="username">Username:</label>';
              echo '<input type="text" class="form-control" name="username" id="username" placeholder="Please enter your a username">';
              echo '<span id="un-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
              echo '<span id="un-feedback" class="help-block">Username cannot be blank.</span>';
              echo '</div>';
            } else {
              if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
                echo '<div class="col-md-12 col-sm-12 has-feedback has-success" id="username-div">';
                echo '<label class="control-label" for="username">Username:</label>';
                echo '<input type="text" class="form-control" name="username" id="username" placeholder="Please enter your a username" value="' . $_SESSION['username'] . '">';
                echo '<span id="un-icon" class="input-lg glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>';
                echo '<span id="un-feedback" class="help-block"></span>';
                echo '</div>';
              } else {
                echo '<div class="col-md-12 col-sm-12 has-feedback" id="username-div">';
                echo '<label class="control-label" for="username">Username:</label>';
                echo '<input type="text" class="form-control" name="username" id="username" placeholder="Please enter your a username">';
                echo '<span id="un-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
                echo '<span id="un-feedback" class="help-block"></span>';
                echo '</div>';
              }
            }

            // Password
            if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], 'passwordNULL')) {
              echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="password-div">';
              echo '<label class="control-label" for="password">Password:</label>';
              echo '<input type="password" class="form-control" name="password" id="password" placeholder="Please enter a password">';
              echo '<span id="pw-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
              echo '<span id="pw-feedback" class="help-block">Password cannot be blank.</span>';
            } else {
              if (isset($_SESSION['password']) && $_SESSION['password'] != "") {
                echo '<div class="col-md-12 col-sm-12 has-feedback has-success" id="password-div">';
                echo '<label class="control-label" for="password">Password:</label>';
                echo '<input type="password" class="form-control" name="password" id="password" placeholder="Please enter a password" value="' . $_SESSION['password'] . '">';
                echo '<span id="pw-icon" class="input-lg glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>';
                echo '<span id="pw-feedback" class="help-block"></span>';
              } else {
                echo '<div class="col-md-12 col-sm-12 has-feedback" id="password-div">';
                echo '<label class="control-label" for="password">Password:</label>';
                echo '<input type="password" class="form-control" name="password" id="password" placeholder="Please enter a password">';
                echo '<span id="pw-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
                echo '<span id="pw-feedback" class="help-block"></span>';
              }
            }

            // Comments:
            if (isset($_GET['errMsg']) && strstr($_GET['errMsg'], 'messageNULL')) {
              echo '<div class="col-md-12 col-sm-12 has-error" id="comments-div">';
              echo '<label class="control-label" for="comments">Comments:</label>';
              echo '<textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" id="comments"></textarea>';
              echo '<span id="comments-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
              echo '<span id="comments-feedback" class="help-block">Comments cannot be blank.</span>';
              echo '</div>';
            } else {
              if (isset($_SESSION['message']) && $_SESSION['message'] != "") {
                echo '<div class="col-md-12 col-sm-12 has-success" id="comments-div">';
                echo '<label class="control-label" for="comments">Comments:</label>';
                echo '<textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" id="comments" value="' . $_SESSION['message'] . '"></textarea>';
                echo '<span id="comments-icon" class="input-lg glyphicon form-control-feedback glyphicon-ok" aria-hidden="true"></span>';
                echo '<span id="comments-feedback" class="help-block"></span>';
                echo '</div>';
              } else {
                echo '<div class="col-md-12 col-sm-12" id="comments-div">';
                echo '<label class="control-label" for="comments">Comments:</label>';
                echo '<textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" id="comments"></textarea>';
                echo '<span id="comments-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
                echo '<span id="comments-feedback" class="help-block"></span>';
                echo '</div>';
              }
            }

            // Submit Button
            echo '<div class="col-md-4 col-sm-12">';
            echo '<input type="submit" class="form-control" name="submit" value="Send Message">';
            echo '</div>';

            echo '</form>';
          } else {
            // Clear out previous errors:
            $errors = '';

            // Clear out previous SESSION data:
            // unset($_SESSION['firstname']);
            // unset($_SESSION['lastname']);
            // unset($_SESSION['email']);
            // unset($_SESSION['phone']);
            // unset($_SESSION['username']);
            // unset($_SESSION['password']);
            // unset($_SESSION['message']);
            $_SESSION['firstname'] = "";
            $_SESSION['lastname'] = "";
            $_SESSION['email'] = "";
            $_SESSION['phone'] = "";
            $_SESSION['username'] = "";
            $_SESSION['password'] = "";
            $_SESSION['message'] = "";

            // Set variables from POST:
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $message = $_POST['message'];

            // Validate data:
            if ($firstname == NULL) {
              $errors .= 'firstNameNULL';
            } elseif (!preg_match('/^[a-zA-Z\'-]+$/', $firstname)) {
              $errors .= 'firstNameInvalidChar';
            } else {
              $_SESSION['firstname'] = $firstname;
            }
            if ($lastname == NULL) {
              $errors .= 'lastNameNULL';
            } elseif (!preg_match('/^[a-zA-Z\'-]+$/', $lastname)) {
              $errors .= 'lastNameInvalidChar';
            } else {
              $_SESSION['lastname'] = $lastname;
            }
            if ($email == NULL) {
              $errors .= 'emailNull';
            } elseif (!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
              $errors .= 'emailInvalid';
            } else {
              $_SESSION['email'] = $email;
            }
            if ($phone == NULL) {
              $errors .= 'phoneNull';
            } elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
              $errors .= 'phoneInvalid';
            } else {
              $_SESSION['phone'] = $phone;
            }
            if ($username == NULL) {
              $errors .= 'usernameNULL';
            }
            if ($password == NULL) {
              $errors .= 'passwordNULL';
            }
            if ($message == NULL) {
              $errors .= 'messageNULL';
            }
            if ($errors != NULL) {
              header("Location: contact.php?errMsg=$errors");
            } else {
              echo '<h2>Hello From Results</h2>';
              echo '<p>First Name: ' . $_POST['firstname'] . '</p>';
              echo '<p>Last Name: ' . $_POST['lastname'] . '</p>';
              echo '<p>Email: ' . $_POST['email'] . '</p>';
              echo '<p>Phone Number: ' . $_POST['phone'] . '</p>';
              echo '<p>Username: ' . $_POST['username'] . '</p>';
              echo '<p>Password: ' . $_POST['password'] . '</p>';
              echo '<p>Comments: ' . $_POST['message'] . '</p>';
            }
          }
          ?>

        </div>

        <div class="col-md-6 col-sm-12">
          <div class="contact-image">
            <img src="assets/images/your_image.png" class="img-responsive" alt="Simpsonized Version of Myself" title="Simpson Me">
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