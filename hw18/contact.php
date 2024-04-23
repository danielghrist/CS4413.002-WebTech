  <!-- CONTACT CONTENT -->
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
                echo '<span id="phone-feedback" class="help-block">Phone number can only contain 10 digits.</span>';
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
            $firstname = addslashes($_POST['firstname']);
            $lastname = addslashes($_POST['lastname']);
            $email = addslashes($_POST['email']);
            $phone = addslashes($_POST['phone']);
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            $message = addslashes($_POST['message']);

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
              $errors .= 'emailNULL';
            } elseif (!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
              $errors .= 'emailInvalid';
            } else {
              $_SESSION['email'] = $email;
            }
            if ($phone == NULL) {
              $errors .= 'phoneNULL';
            } elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
              $errors .= 'phoneInvalid';
            } else {
              $_SESSION['phone'] = $phone;
            }
            if ($username == NULL) {
              $errors .= 'usernameNULL';
            } else {
              $_SESSION['username'] = $username;
            }
            if ($password == NULL) {
              $errors .= 'passwordNULL';
            } else {
              $_SESSION['password'] = $password;
            }
            if ($message == NULL) {
              $errors .= 'messageNULL';
            } else {
              $_SESSION['message'] = $message;
            }
            if ($errors != NULL) {
              // header("Location: index.php?page=contact&errMsg=$errors");
              redirect("contact.php?errMsg=$errors");
            } else { // If no errors than we will send information to database:
              // Connect to database:
              $dblink = db_connect('contact_data');

              // Insert Query:
              $sql = "INSERT INTO `contact_info` (`first_name`, `last_name`, `email`, `phone`, `username`, `password`, `comments`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$username', '$password', '$message')";
              $dblink->query($sql) or die("<h2>Something went wrong with: $sql<br>' . $dblink->error . '</h2>");
              echo '<h2>Your data has been saved successfully.</h2>';
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

  <!-- JavaScript for Event Listeners: -->
  <script src="assets/js/event-listeners.js"></script>