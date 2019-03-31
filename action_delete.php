<?php
  include 'connection.php';

  // Get value of id from the web form
  $id=$_POST['id'];

  $sql = "DELETE FROM products WHERE id='$id'";

  $sql = mysqli_query ($dbh,$sql);

  if (mysqli_affected_rows() > 0) {
      echo "Records were deleted successfully.";
  }
  else {
      echo "ERROR: No records found with Id $id. " . @mysql_error($dbh);
  }
?>
