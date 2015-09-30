<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Talent Recruitment Network</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="style/main.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/functions.js"></script>
</head>
<body>



	<header>
  
    
    <nav class="navbar navbar-default navbar-fixed-top" id="navhead">
  <div class="container-fluid">
    <div class="navbar-header">
   
      <a class="navbar-brand" href="index.php">
       SRN
      </a>
     
     
    </div>
     <? if(isset($_SESSION['sess_user'])){?>
    <div class="dropdown pull-right">
    <div class="navbar-text navbar-right">Signed in as
  <a type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    <?=$_SESSION['sess_user'];?>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">logout</a></li>
    
  </ul>
   </div>
</div>
    
            
<?
  } ?>
    
  </div>
</nav>
	
	</header>
    <!--between header and footer-->
    <div id="bethnf">
	<div class="statement">
		<p><b>GET IN TOUCH WITH TALENT RECRUITMENT NETWORK</b></p>
	</div>
	
	<!--<div class="front-page">-->
	  <form class="sign-up">
			<a class="btn btn-default" href="individual_sign_up.php" role="button">Signup as individual</a>
			<br><br>
			<a class="btn btn-default" href="company_sign_up.php" role="button">Signup as company</a>
		</form>
	
		<form class="sign-in" method="get" action="feedback.php?submit=login">
		  <div class="form-group-one">
          <label id="msg"></label>
			<label class="sr-only" for="exampleInputEmail3">Email address</label>
			<input type="email" class="form-control" id="userid" placeholder="Enter email">
		  </div>
		  <div class="form-group-two">
			<label class="sr-only" for="exampleInputPassword3">Password</label>
			<input type="password" class="form-control" id="passwrd" placeholder="Password">
		  </div>
		  <div class="checkbox">
			<label>
			  <input type="checkbox">Remember me</label>
		  </div>
			<button type="button" class="btn btn-default" id="submit" onclick="login()">Sign in</button>
		</form>
	</div>
    
    
	 <footer id="footer">
	
		<div class="footer text-center">
			&copy; TRN 2015
		</div>
	
    </footer>
		
<!--</diV>-->

</body>
</html>
