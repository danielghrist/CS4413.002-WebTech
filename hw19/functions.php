<?php

// Parameter takes in the database name:
function db_connect($db)
{
  // Set up DB connection:
  $dbusername = 'webuser';
  $dbpassword = 'A)YNQbjhwac-5vBk';
  $host = 'localhost';

  // ODBS: Open Data Base String:
  $dblink = new mysqli($host, $dbusername, $dbpassword, $db);

  // Return new database connection:
  return $dblink;
}

function redirect($uri)
{
?>
  <script type="text/javascript">
    document.location.href = '<?php echo $uri; ?>';
  </script>
<?php die;
}
?>