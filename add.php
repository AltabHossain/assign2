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

    <h1>Add new product:</h1>
    <form name="input" action="./action_add.php" method="post" onsubmit=" return validate_data()">
      <label for="Name">Enter Product Name:</label>
      <input id="Name" class="input-no-spinner" type="text" name="name" size="32" placeholder="Enter product name (eg.Apple)"><br><br>
      <label for="price">Enter Price:</label>
      <input id="price" class="input-no-spinner" type="number" name="price" step="0.01" placeholder="Enter price (eg.1000.50)"><br><br>
      <label for="Qty">Enter Quantity:</label>
      <input id="Qty" class="input-no-spinner" type="number" name="qty" placeholder="Enter quantity (eg.1)"><br><br>
    <!--  <label for="Path">Enter image file name:</label>
      <input id="Path" type="text" name="path" size="50" placeholder="Please enter product image (eg.mac.jpg)"><br><br><br><br> -->
      <input type="submit" value="Add"><br><br>
    </form>
    <?php include 'action_display.php'; ?>
    <br><br>
    <a href="./index.php">Back to the main page</a>

    <!-- footer -->
    <?php include('footer.php'); ?>
  </body>
</html>
