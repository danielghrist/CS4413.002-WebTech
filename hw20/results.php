<!-- Include JQuery Library Scripts: -->
<script src="assets/js/jquery-3.5.1.js"></script>

<?php
if (isset($_REQUEST['sid']) && $_REQUEST['sid'] != "") {
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
  redirect('index.php?page=login&error=NullSid');
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