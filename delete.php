<?php
include ('connection.php');


if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


$id = $_GET['id'];
$sql = "DELETE FROM books WHERE ID=$id";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
  
  ?>

  <html>
  <head>
  </head>
  
  <body>
  <div id="center_button">
      <button onclick="location.href='page2.php'">Doties atpakal</button>
  </div>
  </body>
  </html>
  
  <?php

} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();
?>