<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>Add</title>
    <link rel='stylesheet' type="text/css" href='./assign3.php'/>
  </head>
  <body>
    <!-- Logo and Nav bar -->
    <?php include 'header.php' ?>
    <!-- Logo and Nav bar -->
    <h1>Add</h1>
    <form action="./action_page.php" enctype="multipart/form-data" autocomplete="on">
      <label for="Name">Enter Name:</label>
      <input id="Name" type="text" name="name" size="32" placeholder="John"><br><br>
      <label for="price">Enter Price:</label>
      <input id="price" type="number" name="price" placeholder="500"><br><br>
      <label for="Qty">Enter Quantity:</label>
      <input id="Qty" type="number" name="qty" placeholder="5"><br><br>
      <label for="Url">Enter image url:</label>
      <input id="Url" type="url" name="url" size="50" placeholder="https://zenit.senecac.on.ca/~uli705_191a09/"><br><br>
      <label for=""> OR </label>
      <label for="pic">Select image to upload:</label>
      <input type="file" name="pic" accept="image/*"><br><br><br><br>
      <input type="submit" value="Submit"><br><br>
    </form>
    <a href="./index.php">Back to the main page</a>

    <!-- footer -->
    <?php include('footer.php'); ?>
  </body>
</html>
