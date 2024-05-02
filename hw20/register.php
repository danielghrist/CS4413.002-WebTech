<?php
echo '<section id="contact">';
echo '<div class="container">';
echo '<div class="row">';
echo '<form class="form-horizontal" id="contact-form" role="form" action="" method="post">';


if (!isset($_POST['submit'])) {
  //Username:
  echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="username-div">';
  echo '<label class="control-label" for="username">Username:</label>';
  echo '<input type="text" class="form-control" name="username" id="username" placeholder="Please enter your a username">';
  echo '<span id="un-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
  echo '<span id="un-feedback" class="help-block">Username cannot be blank.</span>';
  echo '</div>';

  // Password
  echo '<div class="col-md-12 col-sm-12 has-feedback has-error" id="password-div">';
  echo '<label class="control-label" for="password">Password:</label>';
  echo '<input type="password" class="form-control" name="password" id="password" placeholder="Please enter a password">';
  echo '<span id="pw-icon" class="input-lg glyphicon form-control-feedback glyphicon-remove" aria-hidden="true"></span>';
  echo '<span id="pw-feedback" class="help-block">Password cannot be blank.</span>';
  echo '</div>';

  // Submit Button
  echo '<div class="col-md-4 col-sm-12">';
  echo '<input type="submit" class="form-control" name="submit" value="Submit">';
  echo '</div>';
  echo '</form>';
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $passText = $_POST['password'];
  $salt = 'ProfessorValadezIsTheGOAT';
  $dblink = db_connect('user_data');
  $password = hash('sha256', $salt . $passText);
  $sql = "Insert into `accounts` (`username`, `auth_hash`) values('$username', '$password')";
  $dblink->query($sql) or die('Something went wrong with $sql<br>' . $dblink->error);
  redirect('index.php?page=login');
}


echo '</div>';
echo '</div>';
echo '</section>';
