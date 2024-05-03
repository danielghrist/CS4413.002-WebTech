<!-- Include JQuery Library Scripts: -->
<script src="assets/js/jquery-3.5.1.js"></script>

<?php
if (isset($_REQUEST['sid']) && $_REQUEST['sid'] != "") {
  $dblink = db_connect('user_data');
  $sid = addslashes($_REQUEST['sid']);
  $sql = "SELECT `auto_id` FROM `accounts` WHERE `session_id`='$sid'";
  $result = $dblink->query($sql) or die("<p>Something went wrong with $sql<p>" . $dblink->error);
  if ($result->num_rows <= 0) {
    redirect('index.php?page=login&errMsg=InvalidSid');
  }

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
  echo '<tbody id="results">';
  echo '</tbody>';
  echo '</table>';
} else {
  redirect('index.php?page=login&errMsg=NullSid');
}
?>

<script>
  function refresh_data() {
    $.ajax({
      type: 'post',
      url: 'https://ec2-3-134-77-36.us-east-2.compute.amazonaws.com/hw19/query_contacts.php',
      success: function(data) {
        $('#results').html(data);
      }
    });
  }
  setInterval(function() {
    refresh_data();
  }, 500);
</script>