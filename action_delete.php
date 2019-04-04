<?php
  include 'connection.php';

  // Get value of id from the web form
  $id=$_POST['id'];

  $sql = "DELETE FROM products WHERE id='$id'";

  $sql = mysqli_query ($dbh,$sql);

  if (mysqli_affected_rows($dbh) == 1) {
      //echo "Records were deleted successfully.";
      //include 'action_display.php';
      //header('location:./delete.php');
      $message = "Records were deleted successfully.";
      echo "<script type='text/javascript'>alert('$message');
      document.location='./delete.php';</script>";
  }
  else {
      //echo "ERROR: No records found with Id $id.";
      //header('location:./delete.php');
      echo "<script type='text/javascript'>document.location='./delete.php';</script>";

  }
?>
