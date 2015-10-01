<!DOCTYPE html>
<html>
<head>
<title>Tutoring Portal</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet" />
<link rel="icon" type="image/png" href="img/favicon.png" />
<meta charset="UTF-8">
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
				<ul class="nav navbar-nav navbar">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">User Profile</a></li>
						<li><a href="#">Logout</a></li>
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
				<li><a href="home.php">Home</a></li>
				<li role="presentation" class="active"><a href="workshops.php">Workshops</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutoring<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Offers</a></li>
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
				<div class="panel-heading">All our upcoming workshops:</div>
				<div class="panel-body">
				<p>You can also add a workshop of your own: 
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
						Add workshop
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Create workshop</h4>
						  </div>
						  <div class="modal-body">
						  <!-- Workshop Form -->
							<form class="form-horizontal" action="" method="post">
								<fieldset>

									<div class="form-group">
									  <label class="col-md-3 control-label" for="workshopname">Title</label>
										<div class="col-md-9">
										  <input id="name" name="workshopname" type="text" placeholder="Workshop name" class="form-control">
										</div>
									</div>
								  
									<div class="form-group">
									  <label class="col-md-3 control-label" for="datetime">Date & time:</label>
										<div class="col-md-9">
										  <input id="email" name="datetime" type="datetime" placeholder="Date & time" class="form-control">
										</div>
									</div>

									<div class="form-group">
									  <label class="col-md-3 control-label" for="location">Location</label>
										<div class="col-md-9">
										  <input id="email" name="location" type="text" placeholder="Location" class="form-control">
										</div>
									</div>

									<div class="form-group">
									  <label class="col-md-3 control-label" for="category">Category</label>
										<div class="col-md-9">
										  <input id="email" name="category" type="text" placeholder="Category" class="form-control">
										</div>
									</div>

									<div class="form-group">
									  <label class="col-md-3 control-label" for="tutorname">Tutor</label>
										<div class="col-md-9">
										  <input id="email" name="tutorname" type="text" placeholder="Tutor" class="form-control">
										</div>
									</div>
								
									<div class="form-group">
									  <label class="col-md-3 control-label" for="description">Description</label>
										<div class="col-md-9">
										  <textarea class="form-control" id="description" name="message" placeholder="Write description here..." rows="5"></textarea>
										</div>
									</div>
								  
									<div class="form-group">
									  <div class="col-md-12 text-right">
										<button type="submit" class="btn btn-default btn-lg">Create</button>
									  </div>
									</div>
								</fieldset>
							</form>
						  </div>
						</div>
					  </div>
					</div>
					<div class="row">
						<div class="col-xs-4 col-md-5 col-lg-4">
							<img src="img/placeholder.jpg" alt="Image" />
						</div>
						<div class="col-xs-8 col-md-7 col-lg-8">
							<h3>PHP Introduction Workshop</h3>
							<p>Date: Monday, 1st of Juyl 2016 @ 12:00</p>
							<p>Location: MMD Building 8, Room 25</p>
							<p>Category: PHP</p>
							<p>Tutor: John Doe</p>
							<p>Decription: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
					</div>
					</br>
					<div class="row">
						<div class="col-xs-4 col-md-5 col-lg-4">
							<img src="img/placeholder.jpg" alt="Image" />
						</div>
						<div class="col-xs-8 col-md-7 col-lg-8">
							<h3>PHP Introduction Workshop</h3>
							<p>Date: Monday, 1st of Juyl 2016 @ 12:00</p>
							<p>Location: MMD Building 8, Room 25</p>
							<p>Category: PHP</p>
							<p>Tutor: John Doe</p>
							<p>Decription: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
					</div>
					</br>
					<div class="row">
						<div class="col-xs-4 col-md-5 col-lg-4">
							<img src="img/placeholder.jpg" alt="Image" />
						</div>
						<div class="col-xs-8 col-md-7 col-lg-8">
							<h3>PHP Introduction Workshop</h3>
							<p>Date: Monday, 1st of Juyl 2016 @ 12:00</p>
							<p>Location: MMD Building 8, Room 25</p>
							<p>Category: PHP</p>
							<p>Tutor: John Doe</p>
							<p>Decription: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
					</div>
					</br>
					<div class="row">
						<div class="col-xs-4 col-md-5 col-lg-4">
							<img src="img/placeholder.jpg" alt="Image" />
						</div>
						<div class="col-xs-8 col-md-7 col-lg-8">
							<h3>PHP Introduction Workshop</h3>
							<p>Date: Monday, 1st of Juyl 2016 @ 12:00</p>
							<p>Location: MMD Building 8, Room 25</p>
							<p>Category: PHP</p>
							<p>Tutor: John Doe</p>
							<p>Decription: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
					</div>
					</br>
					<div class="row">
						<div class="col-xs-4 col-md-5 col-lg-4">
							<img src="img/placeholder.jpg" alt="Image" />
						</div>
						<div class="col-xs-8 col-md-7 col-lg-8">
							<h3>PHP Introduction Workshop</h3>
							<p>Date: Monday, 1st of Juyl 2016 @ 12:00</p>
							<p>Location: MMD Building 8, Room 25</p>
							<p>Category: PHP</p>
							<p>Tutor: John Doe</p>
							<p>Decription: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
					</div>
					</br>
				</div>
			</div>
  </div>
  <div class="col-xs-12 col-md-4 sidebar">
		<div class="panel panel-default">
			<div class="panel-heading">Filter the workshops:</div>
			<div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item">Category:
						<div class="checkbox">
							<label>
							  <input type="checkbox"> PHP
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"> HTML
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"> CSS
							</label>
						</div>
						<div class="checkbox">
							<label>
							  <input type="checkbox"> JavaScript
							</label>
						</div>
					</li>
					<li class="list-group-item">Tutor:
						<div class="checkbox">
							<label><input type="checkbox">Ana</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox">Bob</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox">Charlie</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox">Danny</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox">Elena</label>
						</div>
					</li>					
				</ul>
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