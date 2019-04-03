<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Delete</title>
    <link rel='stylesheet' href='assign3.php'/>
    <script type="text/javascript" src="./validate.js"></script>
  </head>
  <body>
    <!-- Logo and Nav bar -->
    <?php include 'header.php' ?>
    <!-- Logo and Nav bar -->

    <h1>Delete a product?</h1>

    <?php include 'action_display.php' ?><br><br>
  	<!-- set this form to POST method and target this form to delete.php -->
    <form name="delete" action="./action_delete.php" method="post" onsubmit="validate_id()">
      <label for="id">Enter the ID of the record to delete:</label>
      <input name="id" type="number" id="id" placeholder="10"><br><br><br>
      <input type="submit" value="Delete this record" /><br>
    </form>
    <br><br><br>
    <a href="./index.php">Back to the main page</a> <br><br>

    <!-- footer -->
    <?php include('footer.php')?>
  </body>
</html>
