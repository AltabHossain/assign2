
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Display</title>
    <link rel='stylesheet' href='assign3.php'/>
  </head>
  <body>
    <!-- Logo and Nav bar -->
    <?php include 'header.php' ?>
    <!-- Logo and Nav bar -->

    <h1>Display</h1>
    <a href="./index.php">Back to the main page</a><br><br>

    <!-- Embedded PHP code with Table -->
      <table border="1" width="30%" height="30%">
       <tr>
       <th>ID</th>
       <th>NAME</th>
       <th>PRICE</th>
       <th>QUANTITY</th>
       <th>PATH</th>
       </tr>
     <?php include 'action_display.php' ?>

      </table>
    <!-- footer -->
    <?php include('footer.php'); ?>
  </body>
</html>
