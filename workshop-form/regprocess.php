<?php
include"config.php";

$workshopname = $_POST['workshopname'];
$datetime = $_POST['datetime'];
$location = $_POST['location'];
$category = $_POST['category'];
$tutorname = $_POST['tutorname'];
$description = $_POST['description'];

$insert = 'INSERT into Workshops(workshopname, datetime, location, category, tutorname, description) VALUES("'.$workshopname.'", "'.$datetime.'", "'.$location.'", "'.$location.'", "'.$category.'", "'.$tutor.'", "'.$description.'")';

mysql_query($insert);


?>