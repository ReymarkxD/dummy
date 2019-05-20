<?php include 'server.php';

	// fetch data to be updated (for update)
	if (isset($_GET['edit'])) {
		$stud_id = $_GET['edit'];
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM student WHERE stud_id=$stud_id");
		$record = mysqli_fetch_array($rec);
			$stud_lastname = $record['stud_lastname'];
			$stud_firstname = $record['stud_firstname'];
			$stud_birth = $record['stud_birth'];
			$stud_gender = $record['stud_gender'];
			$stud_email = $record['stud_email'];
			$stud_contact = $record['stud_contact'];
			$stud_address = $record['stud_address'];
			$stud_course = $record['stud_course'];
			$stud_year = $record['stud_year'];
			$stud_id = $record['stud_id'];
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <h4>Student Information Form</h4>
      </li>
    </ul>
      <a class="btn btn-secondary" href="index.php" role="button">Sign in</a>
    </form>
  </div>
</nav>

<section id="cover">
    <div id="cover-caption">
        <div id="container" class="container2" style="background:rgba(0,0,0,.5);">
            <div class="row">
                <div class="log col-sm-6 offset-sm-3 col">
                    <div class="info-form">
                        <form class="form-inlin justify-content-center" method="post" action="server.php">
                        	<input type="hidden" name="stud_id" value="<?php echo $stud_id; ?>">
                            <div class="form-group">
                            	<h2 class="h2">Student information</h2>
                            	<label>Last Name</label>
                                <input type="text" class="form-control" name="stud_lastname" value="<?php echo $stud_lastname; ?>" placeholder="Enter your last name">
                            </div>
                            <div class="form-group">
                            	<label>First Name</label>
                                <input type="text" class="form-control" name="stud_firstname" value="<?php echo $stud_firstname; ?>" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                            	<label>Birthday</label>
                                <input type="date" class="form-control" name="stud_birth" value="<?php echo $stud_birth; ?>" placeholder="Birthday">
                            </div>
                            <div class="form-group">
                            	<label>Gender</label>
                                <input type="text" class="form-control" name="stud_gender" value="<?php echo $stud_gender; ?>" placeholder="Enter Male/Female only">
                            </div>
                            <div class="form-group d-flex">
                            	<label>Course:</label>
                                <input type="text" class="form-control" name="stud_course" value="<?php echo $stud_course; ?>" placeholder="Course">
                                <input type="text" class="form-control" name="stud_year" value="<?php echo $stud_year; ?>" placeholder="Year">
                            </div>
                            <div class="form-group">
                            	<label>Address</label>
                                <input type="text" class="form-control" name="stud_address" value="<?php echo $stud_address; ?>" placeholder="Home Address">
                            </div>
                            <div class="form-group">
                            	<label>Mobile Number</label>
                                <input type="text" class="form-control" name="stud_contact" value="<?php echo $stud_contact; ?>" placeholder="Enter a valid mobile number">
                            </div>
                            <div class="form-group">
                            	<label>Email</label>
                                <input type="email" class="form-control" name="stud_email" value="<?php echo $stud_email; ?>" placeholder="Email Address">
                            </div>
                            <div class="row d-flex justify-content-around">
                            <div class="pull-left">
                            <?php if ($edit_state == false): ?>
                            	<button type="submit" name="save" class="btn btn-secondary btn-outline-light">Confirm</button>
                            <?php else: ?>
                            	<button type="submit" name="update" class="btn btn-secondary btn-outline-light">Update</button>
                            <?php endif ?>
                            	
                           
                            </div>
                            <div class="pull-right">
                              <a class="btn btn-secondary" href="dashboard.php" role="button">Back to Main page</a>
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