<?php
ob_start();
session_start();

//echo date('d- M - Y H:i:s');
//include("db_config.php");
//include("engine/http_request.php");

$con=mysqli_connect("localhost","root","","tutor") or die("error connecting to mysql ".mysqli_error($con));

//workshopname=&datetime=&location=&category=&tutorname=&message=

if(isset($_POST['workshopname'])){ addWorkshop(); }
function GetField($field)
{
	$field=$_POST[$field];
	return $field;
	}
	

//echo $wokshopname;

function addWorkshop()
{
	$workshopname = GetField('workshopname');
$datetime = GetField('datetime');
$location = GetField('location');
$category = GetField('category');
$tutorname = GetField('tutorname');
$message = GetField('message');

	$query=mysqli_query($GLOBALS['con'],"INSERT INTO workshop VALUES ( NULL,'".$workshopname."','".$datetime."','".$location."','".$category."','".$tutorname."','".$message."')") or die('error saving data: '.mysqli_error($GLOBALS['con']));
		if($query)
		{
			echo 'You have registered a workshop';
		}
	}
?>