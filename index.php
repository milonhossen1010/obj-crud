<?php require_once "vendor/autoload.php"; ?>
<?php 
	
	// Student class use
	use Crud\Controller\Student;

	// Student class instance
	$student = new Student;

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php 

			if (isset($_POST["submit"])) {

				//value get
				$name = $_POST['name'];
				$email = $_POST['email'];
				$cell = $_POST['cell'];

				// File manage
				$photo = $_FILES['photo'];

				

				if (empty($name) || empty($email) || empty($cell)) {

					$mess = '<p class="alert alert-danger">All flied are required!<button class="close" data-dismiss="alert">&times;</button></p>';

				}elseif(filter_var($email, FILTER_VALIDATE_EMAIL)==false){

					$mess = '<p class="alert alert-warning">Invalid Email!<button class="close" data-dismiss="alert">&times;</button></p>';

				} else{

					$student -> addNewStudent($name, $email, $cell, $photo);

					$mess = '<p class="alert alert-success">Registarion success!<button class="close" data-dismiss="alert">&times;</button></p>';
				}

				

			}

	 ?>

	<div class="wrap ">
        <a class="btn btn-primary " href="data.php">All Student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				<?php if (isset($mess)) {
					echo $mess;
				} ?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>