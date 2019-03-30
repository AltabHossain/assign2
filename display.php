<?php include 'config.php' ?>
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
    <a href="./index.php">Back to the main page</a>

    <!-- Embedded PHP code with Table -->
      <table border="1" width="30%" height="30%">
       <tr>
       <th><font color='Red'>ID</font></th>
       <th><font color='Red'>NAME</font></th>
       <th><font color='Red'>PRICE</font></th>
       <th><font color='Red'>QUANTITY</font></th>
       <th><font color='Red'>PATH</font></th>
       </tr>

      <?php
       $sql="SELECT * FROM products";
       $aResult=mysql_query($sql);
       while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
      {
       $id = $rows['id'];
       $name = $rows['name'];
       $price = $rows['price'];
       $qty = $rows['qty'];
       $path = $rows['path'];
      ?>
       <tr>

       <td><b><font color='#663300'><?php echo $id;?></font></b></td>
       <td><b><font color='#663300'><?php echo $name;?></font></b></td>
       <td><b><font color='#663300'><?php echo $price;?></font></b></td>
       <td><b><font color='#663300'><?php echo $qty;?></font></b></td>
       <td><b><font color='#663300'><?php echo $path;?></font></b></td>
       </td>
       </tr>
      <?php } ?>
      </table>
    <!-- footer -->
    <?php include('footer.php'); ?>
  </body>
</html>
