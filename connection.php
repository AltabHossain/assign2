<?php
<<<<<<< HEAD
 // load the values into variables: host, username, passwd, database
$host='localhost'; // Host name.
$db_user='root'; // MySQL username.
$db_password='root'; // MySQL password.
$database=('techipltd'); // Database name.

// Connect to database server.
$dbh = mysqli_connect($host, $db_user, $db_password);
if (!$dbh) {
 die("Connection Error: " . mysqli_connect_error());
}
// select a specific database to access
mysqli_select_db($dbh, $database) or die('Could not select db');
//echo "Connected to database <b>$database</b> as user <b>$user</b>.";
=======
$host="localhost"; // Host name.
$db_user="root"; // MySQL username.
$db_password=""; // MySQL password.
$database=("techipltd"); // Database name.
$dbh=@mysql_connect($host,$db_user,$db_password) or die ("Mysql Connection Error");; //Connection to the database
mysql_select_db($database,$dbh) or die ("Mysql Database Error");
>>>>>>> 0e238d027913a54d40a847b3511c30afae35331a
?>
