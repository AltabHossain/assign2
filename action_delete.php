<?php
  include 'connection.php';

  //User defined function
  function ScriptMessage($message){
    echo "<script type='text/javascript'>
    alert('$message');
    document.location='./delete.php';
    </script>";
  }

  // Get value of id from the web form
  $id=$_POST['id'];

  $sql = "DELETE FROM products WHERE id='$id'";

  $sql = mysqli_query ($dbh,$sql);

  if (mysqli_affected_rows($dbh) == 1) {
      //Use the user defined function
      ScriptMessage("Records were deleted successfully.");
  }
  else {
    ScriptMessage("Records not found with id.".$id);
      //echo "<script type='text/javascript'>document.location='./delete.php';</script>";
  }
?>
