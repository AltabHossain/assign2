<?php
  include 'connection.php';

  // Get value of id from the web form
  $id=$_POST['id'];

  $sql = "DELETE FROM products WHERE id='$id'";

  $sql = mysqli_query ($dbh,$sql);

  if (mysqli_affected_rows($dbh) == 1) {
      echo "Records were deleted successfully.";
      include 'delete.php';
  }
  else {
      echo "ERROR: No records found with Id $id.";
      include 'delete.php';
  }
?>
