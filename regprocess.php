<?php
include"config.php";

$workshopname = $_POST['workshopname'];
$datetime = $_POST['datetime'];
$location = $_POST['location'];
$category = $_POST['category'];
$tutorname = $_POST['tutorname'];
$description = $_POST['description'];

$insert = 'INSERT into workshops(workshopname, datetime, location, category, tutorname, description) VALUES("'.$workshopname.'", "'.$datetime.'", "'.$location.'", "'.$category.'", "'.$tutorname.'", "'.$description.'")';

if(mysql_query($insert)) echo 'data has been saved';

mysql_close($connect);

?>