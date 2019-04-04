<?php
 // load the values into variables: host, username, passwd, database
/*
$host='localhost'; // Host name.
$db_user='root'; // MySQL username.
$db_password='root'; // MySQL password.
$database=('techipltd'); // Database name.
*/
$host='mymysql.senecacollege.ca'; // Host name.
$db_user='uli705_191a09'; // MySQL username.
$db_password='djJL@6726'; // MySQL password.
$database=('uli705_191a09'); // Database name.

// Connect to database server.
$dbh = mysqli_connect($host, $db_user, $db_password);
if (!$dbh) {
 die("Connection Error: " . mysqli_connect_error());
}
// select a specific database to access
mysqli_select_db($dbh, $database) or die('Could not select db');
//echo "Connected to database <b>$database</b> as user <b>$user</b>.";
?>
