<?php

$dblink = db_connect('contact_data');
$sql = "SELECT * FROM `contact_info`";
$result = $dblink->query($sql) or die("Soemthing went wrong wtih $sql" . $dblink->error);

echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Email</th>';
echo '<th>Phone</th>';
echo '<th>Message</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

while ($data = $result->fetch_array(MYSQLI_ASSOC)) {
  echo '<tr>';
  echo '<td>' . $data['first_name'] . '</td>';
  echo '<td>' . $data['last_name'] . '</td>';
  echo '<td>' . $data['email'] . '</td>';
  echo '<td>' . $data['phone'] . '</td>';
  echo '<td>' . $data['comments'] . '</td>';
  echo '</tr>';
}

echo '</tbody>';
echo '</table>';
