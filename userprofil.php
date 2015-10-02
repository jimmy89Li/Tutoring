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
<?php include"config.php"; ?>
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
				<ul class="nav navbar-nav navbar nav-tabs">
					<li class="dropdown active" role="presentation">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php if(isset($_SESSION['sess_user'])) echo $_SESSION['sess_user']; ?><span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li role="presentation" class="active"><a href="userprofil.php">User Profile</a></li>
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
				<li role="presentation"><a href="home.php">Home</a></li>
				<li><a href="workshops.php">Workshops</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutoring<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="tutoring-offers.php">Offers</a></li>
						<li><a href="tutoring-requests.php">Requests</a></li>
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
  		<h2>User profile</h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-4 col-md-5 col-lg-6">
							<img src="img/ed.jpg" class="userimg" alt="Image" />
						</div>
						<div class="col-xs-8 col-md-7 col-lg-6">
							<h3>John Doe</h3>
							<p>User name: joh_do1578</p>
							<button type="button" class="btn btn-default btn-lg">Change username</button>
							</br>
							</br>
							<p>Password: ******* </p>
							<button type="button" class="btn btn-default btn-lg">Change password</button>
							</br>
							</br>
							</br>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-lg-6">
								<ul class="left">
									<li class="list-group-item">I'm here to:
										<div class="checkbox">
											<label><input type="checkbox">Learn</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox">Teach</label>
										</div>
									</li>					
								</ul>
							<button type="button" class="btn btn-default btn-lg">Save profile</button>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-6">
							<ul class="left">
								<li class="list-group-item">I speak:
									<div class="checkbox">
										<label><input type="checkbox">English</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox">Danish</label>
									</div>
								</li>					
							</ul>
						</div>
						
					</div>
					</br>
				</div>
			</div>
  </div>
  <div class="col-xs-12 col-md-4 sidebar usersidebar">
		<div class="panel panel-default">
			<div class="panel-heading">Your registered workshops</div>
			<div class="panel-body">
				<h4>PHP Introduction Workshop</h4>
				<p>Date: 1st of July 2016 @ 12:00</p>
				</br>
				<h4>JavaScript workshop</h4>
				<p>Date: 8th of July 2016 @ 15:00</p>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">Your tutoring appointments</div>
			<div class="panel-body">
				<h4>Help on PHP assigment</h4>
				<p>Tutor: Hans</p>
				<p>Date: 15th of september 2016 @ 10:00</p>
				</br>
				<h4>Git exorcises</h4>
				<p>Tutor: Gitte</p>
				<p>Date: 8th of august 2016 @ 16:00</p>
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