<?php include 'connection.php' ?>
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

 <td><?php echo $id;?></td>
 <td><?php echo $name;?></td>
 <td><?php echo $price;?></td>
 <td><?php echo $qty;?></td>
 <td><?php echo $path;?></td>
 </td>
 </tr>
<?php } ?>
