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

    <?php include 'action_display.php' ?>

  	<!-- set this form to POST method and target this form to delete.php -->
    <form id="delete-form" name="delete-form" method="post" action="action_delete.php"> <br />
      <label for="id">Enter the ID of the record to delete:</label>
      <input name="id" type="text" id="id" /><br><br>
      <input type="submit" name="submit" value="Delete this record"  onclick="myFunction()" /><br>
    </form>
    <!-- footer -->
    <?php include('footer.php')?>
    <script>
      function myFunction() {
        location.reload();
      }
   </script>
  </body>
</html>
