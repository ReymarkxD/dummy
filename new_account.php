<?php include('server.php');  ?>

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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <h4>Create new user</h4>
      </li>
    </ul>
      <a class="btn btn-success" href="index.php" role="button">Sign in</a>
    </form>
  </div>
</nav>

<section id="cover">
    <div id="cover-caption">
        <div id="container" class="container">
            <div class="row">
                <div class="log col-sm-6 offset-sm-3 col">
                   <img src="p.png" class="user">
                    <div class="info-form">
                        <form class="form-inlin justify-content-center" method="post" action="index.php">
                          <h3 class="h1">Create new user</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="uLast_name" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="uFirst_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="uEmail" placeholder="Email Address">
                            </div>
                          <div class="row d-flex justify-content-around">
                            <div class="pull-left"><button type="submit" name="save" class="btn btn-secondary btn-outline-light">Confirm</button></div>
                            <div class="pull-right">
                              <a class="btn btn-secondary" href="index.php" role="button">Back to Main page</a>
                            </div>
                          </div>
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>