<?php
// Get values from the web form
$name=$_POST['name'];
$price=$_POST['price'];
$qty=$_POST['qty'];
$path=$_POST['path'];

//Check all input fields are not blank
If (($name == “” || $name == null) || ($price == “” || $price == null) ||
($qty == “” || $qty == null)) {
  /*If (($name == “” || $name == null) || ($price == “” || $price == null) ||
  ($qty == “” || $qty == null) || ($path == “” || $path == null)) {*/

  //echo "Product information are missing!";
  echo "<script type='text/javascript'>document.location='./add.php';</script>";
}
else {
  include ('connection.php');

//we can use NULL for the auto incremented primary key
$sql = "INSERT INTO `products`(`id`,`name`,`price`,`qty`,`path`) VALUES (NULL,'$name',$price,$qty,'$path');";

//EXECUTING THE QUERY AND STORING THE RESULT IN A VARIABLE
$result = mysqli_query($dbh, $sql);

//CHECKING IF THE QUERY AFFECTED A ROW USING mysqli_affected_rows()
if(mysqli_affected_rows($dbh) == 1){
  //positive response
  //echo "Data added successfully.";
  $message = "Data added successfully.";
  echo "<script type='text/javascript'>alert('$message');
  document.location='./add.php';</script>";
} else {
  //negative response
  echo "Could not insert data.";
}
//CLOSING DATABASE CONNECTION
mysqli_close($dbh);
}
//header('location:./add.php');
?>
