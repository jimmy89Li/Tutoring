<?php
ob_start();
session_start();

//echo date('d- M - Y H:i:s');
//include("db_config.php");
//include("engine/http_request.php");

$con=mysqli_connect("localhost","root","","tutor") or die("error connecting to mysql ".mysqli_error($con));


//when login is triggered, it is loaded here
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] =='login')
{
	login();
	}
	
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] =='signup')
{
	register_user();
	}	

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
	
	// function for login
	function login()
{
	//$con=mysqli_connect("localhost","root","","tutor") or die("error connecting to mysql ".mysql_error());

	$email=$_REQUEST['userid'];
	$pwd = sha1($_REQUEST['passwrd']);
	
	if($query = mysqli_query($GLOBALS['con'],"select * from login where userid='".$email."' and password='".$pwd."'"))
	{
		if(mysqli_num_rows($query)>0) {echo '1';$_SESSION['sess_user']=$email;} else
		{ echo 'email or password is wrong';}
		mysqli_free_result($query);
	}
	
		
	}
	
	
	function register_user(){


	
		
		
		$uid = sha1($_REQUEST['userid']);
		$email = $_REQUEST['userid'];
		
		$pwd = sha1($_REQUEST['passwrd']);
		//$now = date('Y-m-d H:i:s');
		$query=mysqli_query($GLOBALS['con'],"INSERT INTO users(uid) VALUES ( '".$uid."')") or die('error saving data: '.mysqli_error($GLOBALS['con']));
		if($query)
		{
			$query=mysqli_query($GLOBALS['con'],"INSERT INTO login VALUES ( '".$uid."','".$email."','".$pwd."')");
			if($query)
			{
				$_SESSION['sess_user']=$email;
			echo "You have been successfully registered";unset($uid); unset($email); unset($pwd);
			
			?>
           
        <a class="btn btn-primary" href="index.php" role="button">Continue to login</a>
      
			<?
			}
		
		}
		}
?>