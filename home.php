<?php
ob_start();
session_start();
if(!isset($_SESSION['sess_user'])){
    header("location:index.html");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Tutoring Portal</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet" />
<link rel="icon" type="image/png" href="img/favicon.png" />
<meta charset="UTF-8">
<?php include('config.php'); ?>
</head>
<body>
<div class="container">
<header>
<div class="slider">
		<a href="home.php">
			<img class="logo img-circle" src="img/logocirkel50.png" alt="logo" />
		</a>
</div>
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="370">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>
	</div>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar navbar-tabs">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php if(isset($_SESSION['sess_user'])) echo $_SESSION['sess_user']; ?><span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="userprofil.php">User Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					  </ul>
					</li>
				</ul>
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav navbar-right nav-tabs">
				<li role="presentation" class="active"><a href="home.php">Home</a></li>
				<li><a href="workshops.php">Workshops</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutoring<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="tutoring-offers.php">Offers</a></li>
						<li><a href="#">Requests</a></li>
					</ul>
				</li>
			</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>

<section class="mainSection">
<div class="row">
  <div class="col-xs-12 col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">The next 3 workshops are:</div>
				<div class="panel-body">
					<?php
						$sql =  mysql_query("SELECT * FROM workshops ORDER BY datetime asc LIMIT 0,3");
						
						while($row = mysql_fetch_array($sql, MYSQL_ASSOC)){
						echo('<div class="row">
							<div class="col-xs-4 col-md-5 col-lg-4">
								<img src="img/workshop.jpg" alt="Image" />
							</div>
							<div class="col-xs-8 col-md-7 col-lg-8">
								<h3>'.$row["workshopname"].'</h3>
								<p>Date: '.$row["datetime"].'</p>
								<p>Location: '.$row["location"].'</p>
								<p>Category: '.$row["category"].'</p>
								<p>Tutor: '.$row["tutorname"].'</p>
								<p>Decription: '.$row["description"].'</p>
							</div>
						</div>
						</br>
						');
						}
					?>
					
				</div>
			</div>
  </div>
  <div class="col-xs-12 col-md-4 sidebar">
		<div class="panel panel-default">
			<div class="panel-heading">Latest offers</div>
			<div class="panel-body">
				<p>Lorem ipsum dolor sit amet, ornare lacus congue, laoreet accumsan luctus sed in amet, litora eget ut libero, cursus dui sit ultrices nibh aliquam quam, felis rutrum dolor in at vestibulum. Morbi lorem non scelerisque. Viverra sollicitudin quam id lectus, non semper aperiam odio id adipiscing, proin libero, mollis sed nunc vulputate purus in. Nibh non nulla, pretium aenean in ipsum neque placerat congue, eleifend ornare quia ut in eos libero. Volutpat eros, commodo erat quam elit, sit laoreet nibh eum velit. Nibh pellentesque, purus amet congue. Pede felis sed felis, platea proin sodales sodales. Aliquam laoreet beatae congue, sed nulla bibendum sit lorem vitae, nec interdum posuere amet viverra eros. Consequat phasellus magna purus molestie justo orci, donec nibh lacus felis egestas quam, eget ut vitae, in suspendisse, duis eget vestibulum porta eget suspendisse sed.</p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">Latest requests</div>
			<div class="panel-body">
				<p>Lorem ipsum dolor sit amet, ornare lacus congue, laoreet accumsan luctus sed in amet, litora eget ut libero, cursus dui sit ultrices nibh aliquam quam, felis rutrum dolor in at vestibulum. Morbi lorem non scelerisque. Viverra sollicitudin quam id lectus, non semper aperiam odio id adipiscing, proin libero, mollis sed nunc vulputate purus in. Nibh non nulla, pretium aenean in ipsum neque placerat congue, eleifend ornare quia ut in eos libero. Volutpat eros, commodo erat quam elit, sit laoreet nibh eum velit. Nibh pellentesque, purus amet congue. Pede felis sed felis, platea proin sodales sodales. Aliquam laoreet beatae congue, sed nulla bibendum sit lorem vitae, nec interdum posuere amet viverra eros. Consequat phasellus magna purus molestie justo orci, donec nibh lacus felis egestas quam, eget ut vitae, in suspendisse, duis eget vestibulum porta eget suspendisse sed.</p>
			</div>
		</div>
  </div>
</div>

</section><!--Main Section-->
<footer class="footer">
	<div class="footerContainer">
		<p>2015 | Tutoring Portal</p>
	</div>
</footer>
</div><!--Container-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>