<?php
include"config.php";

$username = $_POST['username'];
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$purpose = $_POST['purpose'];
$skills = $_POST['skills'];

$insert = 'INSERT into users(username, email, name, password, purpose, skills) VALUES("'.$username.'", "'.$email.'", "'.$name.'", "'.$password.'", "'.$purpose.'", "'.$skills.'")';

mysql_query($insert);


?>