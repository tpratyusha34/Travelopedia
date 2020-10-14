<?php
$db_host='localhost';
$db_user='root';
$db_passwd='12345';
$db_name='travelopedia';
$con =mysqli_connect($db_host,$db_user,$db_passwd,$db_name)
or
die("Error connecting to the database");
echo "Connection success";
?>