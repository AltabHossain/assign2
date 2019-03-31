<?php
  include 'connection.php';

  // Get value of id from the web form
  $id=$_POST['id'];

  $sql = "DELETE FROM products WHERE id='$id'";

  $sql = mysqli_query ($dbh,$sql);

<<<<<<< HEAD
  if (mysqli_affected_rows() > 0) {
      echo "Records were deleted successfully.";
  }
  else {
      echo "ERROR: No records found with Id $id. " . @mysql_error($dbh);
  }
?>
=======
    if (@mysql_affected_rows() > 0){
        echo "Records were deleted successfully.";
    } else {
        echo "ERROR: No records found in the database" . @mysql_error($dbh);
    }
    ?>

 <!-- footer -->
 <?php include('footer.php')?>
</body>
</html>
>>>>>>> 0e238d027913a54d40a847b3511c30afae35331a
