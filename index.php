<?php include('server.php'); 

if (isset($_POST['submit'])) {
  $username = mysqli_escape_string($db,$_POST['username']);
  $password = mysqli_escape_string($db,$_POST['password']);
if ($username !="" && $password !="") {
  $query = "SELECT userId FROM login WHERE username='$username' and password='$password'";
  $result = mysqli_query($db,$query);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  
  if ($count==1){
    echo "<script>alert('Login Successful')</script>";
    echo "<script>window.open('dashboard.php','_self')</script>";
  }

  }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <h4>Welcome to our page</h4>
      </li>
    </ul>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>


    </ul>
    <form method="post" action="dashboard.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="username" type="text" placeholder="Username">
      <input class="form-control mr-sm-2" name="password" type="password" placeholder="Password">
      <button class="btn btn-primary" name="submit" type="submit">Login</button>&nbsp
      <a class="btn btn-success" href="new_account.php" role="button">Sign up</a>
    </form>
  </div>
</nav>


<div class="jumbotron bg-transparent">
  <h3 class="display-4">What is Registration?</h3>
  <p class="lead">Registration is the systematic process that reserves seats in particular classes for eligible students. It is accomplished by following the steps announced by the student’s home school in advance of each semester’s registration period.</p>
  <hr class="my-4">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>