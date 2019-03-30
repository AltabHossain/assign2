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
    <a href="./index.php">Back to the main page</a> <br><br>

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

	<!-- set this form to POST method and target this form to delete.php -->
  <form id="form2" name="form2" method="post" action="deleterow.php">
  <br />
  <label for="id">Enter the id of the record to delete:</label>
  <input name="id" type="text" id="id" /><br><br>
<p>
  <input type="submit" name="submit" value="Delete this record" />
</p>
  </form>
 <!-- footer -->
 <?php include('footer.php')?>
</body>
</html>
