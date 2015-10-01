<?php
$localhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tutoring_portal";
$connect = mysql_connect($localhost, $dbuser, $dbpass);
mysql_select_db("$dbname", $connect);
?>