
<?php 

	session_start();

	// to initialize variables
		$stud_lastname = "";
		$stud_firstname = "";
		$stud_birth = "";
		$stud_gender = "";
		$stud_email = "";
		$stud_contact = "";
		$stud_address = "";
		$stud_course = "";
		$stud_year = "";
		$stud_id = 0;

		$edit_state = false;

	// Database connection
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	if($db) {
     	echo "";
 	}
 	else {
     	die('Connection failed' . mysqli_error());
 	}

	// Create new data
	if (isset($_POST['save'])) {	// name of save button
		$stud_lastname = $_POST['stud_lastname'];
		$stud_firstname = $_POST['stud_firstname'];
		$stud_birth = $_POST['stud_birth'];
		$stud_gender = $_POST['stud_gender'];
		$stud_email = $_POST['stud_email'];
		$stud_contact = $_POST['stud_contact'];
		$stud_address = $_POST['stud_address'];
		$stud_course = $_POST['stud_course'];
		$stud_year = $_POST['stud_year'];

		$query = "INSERT INTO student (stud_lastname, stud_firstname, stud_birth, stud_gender, stud_email, stud_contact, stud_address, stud_course, stud_year) VALUES ('$stud_lastname', '$stud_firstname', '$stud_birth', '$stud_gender', '$stud_email', '$stud_contact', '$stud_address', '$stud_course', '$stud_year')";
      	$result = mysqli_query($db, $query);
      	//$_SESSION['msg'] = 'Record has been saved!'; // notification message 
      	if(!$result) {
            die("Query failed" . mysqli_error());
        }
		header('location: dashboard.php'); //after adding it will rederect to dashboard page
	}

	// update data
	if (isset($_POST['update'])) {
		$stud_lastname = mysqli_real_escape_string($db, $_POST['stud_lastname']);
		$stud_firstname = mysqli_real_escape_string($db, $_POST['stud_firstname']);
		$stud_birth = mysqli_real_escape_string($db, $_POST['stud_birth']);
		$stud_gender = mysqli_real_escape_string($db, $_POST['stud_gender']);
		$stud_email = mysqli_real_escape_string($db, $_POST['stud_email']);
		$stud_contact = mysqli_real_escape_string($db, $_POST['stud_contact']);
		$stud_address = mysqli_real_escape_string($db, $_POST['stud_address']);
		$stud_course = mysqli_real_escape_string($db, $_POST['stud_course']);
		$stud_year = mysqli_real_escape_string($db, $_POST['stud_year']);
		$stud_id = mysqli_real_escape_string($db, $_POST['stud_id']); // get the primary key to populate text field

		mysqli_query($db, "UPDATE student SET stud_lastname='$stud_lastname', stud_firstname='$stud_firstname', stud_birth='$stud_birth', stud_gender='$stud_gender', stud_email='$stud_email', stud_contact='$stud_contact', stud_address='$stud_address', stud_course='$stud_course', stud_year='$stud_year' WHERE stud_id='$stud_id'");
		//$_SESSION['msg'] = 'Record has been updated!'; // notification message 
		header('location: dashboard.php');
	}

	//Delete data
	if (isset($_GET['del'])) {
		$stud_id = $_GET['del'];
		mysqli_query($db, "DELETE FROM student WHERE stud_id=$stud_id");
		// $_SESSION['msg'] = "Address deleted!";
		header('location: dashboard.php');
	}


	// Get record
		$data = mysqli_query($db, "SELECT * FROM student");
		
 ?>