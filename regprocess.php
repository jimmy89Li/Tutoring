<?php
include"config.php";

$workshopname = $_POST['workshopname'];
$datetime = $_POST['datetime'];
$location = $_POST['location'];
$category = $_POST['category'];
$tutorname = $_POST['tutorname'];
$description = $_POST['description'];

if(!empty($workshopname) and !empty ($datetime) and !empty($location) and !empty($category) and !empty($tutorname) and !empty($description)){
	$insert = 'INSERT into workshops(workshopname, datetime, location, category, tutorname, description) VALUES("'.$workshopname.'", "'.$datetime.'", "'.$location.'", "'.$category.'", "'.$tutorname.'", "'.$description.'")';
}
else{
	echo "<center>";
	die("Please fill all fields!");
	echo "</center>";
}
if(mysql_query($insert)) echo 'data has been saved';

mysql_close($connect);

?>