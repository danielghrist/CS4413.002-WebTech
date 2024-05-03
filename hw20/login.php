<?php
echo '<section id="contact">';
echo '<div class="container">';
echo '<div class="row">';
echo '<form class="form-horizontal" id="contact-form" role="form" action="" method="post">';


if (!isset($_POST['submit'])) {
  echo '<h2>Please enter your login credentials:</h2>';

  //Username:
  echo '<div class="col-md-12 col-sm-12 has-feedback" id="username-div">';
  echo '<label class="control-label" for="username">Username:</label>';
  echo '<input type="text" class="form-control" name="username" id="username" placeholder="Please enter your a username">';
  echo '<span id="un-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
  echo '<span id="un-feedback" class="help-block"></span>';
  echo '</div>';

  // Password
  echo '<div class="col-md-12 col-sm-12 has-feedback" id="password-div">';
  echo '<label class="control-label" for="password">Password:</label>';
  echo '<input type="password" class="form-control" name="password" id="password" placeholder="Please enter a password">';
  echo '<span id="pw-icon" class="input-lg glyphicon form-control-feedback" aria-hidden="true"></span>';
  echo '<span id="pw-feedback" class="help-block"></span>';
  echo '</div>';

  // Submit Button
  echo '<div class="col-md-4 col-sm-12">';
  echo '<input type="submit" class="form-control" name="submit" value="Submit">';
  echo '</div>';
  echo '</form>';
}
if (isset($_POST['submit'])) {
  $username = addslashes($_POST['username']);
  $passText = $_POST['password'];
  $salt = 'ProfessorValadezIsTheGOAT';
  $dblink = db_connect('user_data');
  $password = hash('sha256', $salt . $passText);
  $sql = "SELECT `auto_id` FROM `accounts` WHERE `username`='$username' AND `auth_hash`='$password'";
  $result = $dblink->query($sql) or die('Something went wrong with $sql<br>' . $dblink->error);
  if ($result->num_rows > 0) {
    $salt = microtime();
    $sid = hash('sha256', $salt . $password);
    // $sql = "INSERT INTO `accounts` (`session_id`) VALUES('$sid') WHERE `auth_hash`='$password'";
    $sql = "UPDATE `accounts` SET `session_id`='$sid' WHERE `auth_hash`='$password'";
    $dblink->query($sql) or die('Something went wrong with $sql<br>' . $dblink->error);
    redirect("index.php?page=results&sid=$sid");
  }
}


echo '</div>';
echo '</div>';
echo '</section>';
?>

<!-- JavaScript for Event Listeners: -->
<script src="assets/js/event-listeners.js"></script>