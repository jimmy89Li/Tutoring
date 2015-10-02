<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tutoring Portal</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="frontpage.css" rel="stylesheet">

  </head>
  <body>

<div class="text">
  <h1>Welcome to the</h1>
</div>

<div id="logo">
  <img src="img/logocirkel50.png"> 
</div>
 


<div id="login">
    <div class="text">
      <h2>To enter please login</h2>
    </div>
    <div id="formHolder">
<form class="sign-in" method="get" action="">

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
      <a href="home.php"><button type="button" class="btn btn-default" id="submit" onclick="login()">Sign in</button></a></br>
      <button type="button" class="btn btn-default" id="submit-signup" onclick="login()">Sign up</button>

</form>
</div>
</div>


    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>