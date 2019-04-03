<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Add</title>
    <link rel='stylesheet' type="text/css" href='./assign3.php'/>
    <script type="text/javascript" src="./validate.js"></script>
  </head>
  <body>
    <!-- Logo and Nav bar -->
    <?php include 'header.php' ?>
    <!-- Logo and Nav bar -->

    <h1>Add</h1>
    <form name="input"action="./action_add.php" method="post" onsubmit="validate_data()">
      <label for="Name">Enter Name:</label>
      <input id="Name" type="text" name="name" size="32" placeholder="Apple"><br><br>
      <label for="price">Enter Price:</label>
      <input id="price" type="number" name="price" step="0.01" placeholder="500.50"><br><br>
      <label for="Qty">Enter Quantity:</label>
      <input id="Qty" type="number" name="qty" placeholder="5"><br><br>
      <label for="Path">Enter image path:</label>
      <input id="Path" type="text" name="path" size="50" placeholder="/~uli705_191a09/public_html/assign3/apple.png"><br><br><br><br>
      <input type="submit" value="Add"><br><br>
    </form>
    <?php include 'action_display.php'; ?>
    <a href="./index.php">Back to the main page</a>

    <!-- footer -->
    <?php include('footer.php'); ?>
  </body>
</html>
