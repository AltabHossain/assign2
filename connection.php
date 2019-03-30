<?php
$host="localhost"; // Host name.
$db_user="root"; // MySQL username.
$db_password=""; // MySQL password.
$database=("techipltd"); // Database name.
$dbh=@mysql_connect($host,$db_user,$db_password) or die ("Mysql connection Error");; //Connection to the database
mysql_select_db($database,$dbh) or die ("Mysql database Error");
?>
