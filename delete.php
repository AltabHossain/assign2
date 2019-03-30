<?php include 'connection.php' ?>
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
    <a href="./index.php">Back to the main page</a> <br><br>

    <!-- Embedded PHP code with Table -->
      <table border="1" width="30%" height="30%">
       <tr>
       <th>ID</th>
       <th>NAME</th>
       <th>PRICE</th>
       <th>QUANTITY</th>
       <th>PATH</th>
       </tr>

      <?php include 'actiondisplay.php' ?>
      </table>

	<!-- set this form to POST method and target this form to delete.php -->
  <form id="form2" name="form2" method="post" action="actiondelete.php">
  <br />
  <label for="id">Enter the ID of the record to delete:</label>
  <input name="id" type="text" id="id" /><br><br>
<p>
  <input type="submit" name="submit" value="Delete this record" />
</p>
  </form>
 <!-- footer -->
 <?php include('footer.php')?>
</body>
</html>
