<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Delete</title>
    <link rel='stylesheet' href='assign3.php'/>
  </head>
  <body>
    <!-- Logo and Nav bar -->
    <?php include 'header.php' ?>
    <!-- Logo and Nav bar -->

    <h1>Delete</h1>
    <a href="./index.php">Back to the main page</a></br></br>

    <?php
    // Get value of id from the web form
    $id=$_POST['id'];
    $sql = @mysql_query ("delete from products where id='$id'");

    if (@mysql_affected_rows() > 0){
        echo "Records were deleted successfully.";
    } else {
        echo "ERROR: No records found with id $id. " . @mysql_error($link);
    }
    ?>

 <!-- footer -->
 <?php include('footer.php')?>
</body>
</html>
