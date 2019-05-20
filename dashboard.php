<?php include 'server.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Main Dashboard</title>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		
	</style>
</head>
<body>

<!-- Data saved/update notification -->
<!-- 	<?php if (isset($_SESSION['msg'])): ?>
		<div class="msg">
			<?php
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			?>
		</div>
	<?php endif ?> -->

<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <h4>Main Dashboard</h4>
      </li>


    </ul>
    <a class="btn btn-info" href="Registration.php" role="button">Add Student</a>

      <a class="btn btn-info" href="index.php" role="button">Log out</a>
      
    </form>
  </div>
</nav>


<!-- display student information -->
	<section>
		<div class="container3">
			<table  class="table table-dark">
				<thead>
					<tr>
						<th>Student ID</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Gender</th>
						<th>Course</th>
						<th><div align="center">Action</div></th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = mysqli_fetch_array($data)) { ?>					
					<tr>
						<td><?php echo $row['stud_id']; ?></td>
						<td><?php echo $row['stud_lastname']; ?></td>
						<td><?php echo $row['stud_firstname']; ?></td>
						<td><?php echo $row['stud_gender']; ?></td>
						<td><?php echo $row['stud_course']; ?></td>
						<td><div align="center">
							<a class="btn btn-info" href="registration.php?edit=<?php echo $row['stud_id']; ?>" role="button">Edit</a>
							<a class="btn btn-danger" href="server.php?del=<?php echo $row['stud_id']; ?>" role="button">Delete</a></div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>