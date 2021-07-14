<!--Author Akash bhopewal-->
<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = sha1($_POST['password']);
	include_once '_dbconnect.php';
	$q = "SELECT * FROM admin where username='$username' and password='$password'";
	$result = mysqli_query($conn, $q);
	$rows = mysqli_num_rows($result);
	if ($rows > 0) {
		while($row = mysqli_fetch_assoc($result)){
	
			$_SESSION["username"] = $row['username'];
			$_SESSION["user_id"] = $row['S_No'];
			$_SESSION["user_role"] = $row['Role'];

			header("location:http://localhost/techninow/admin/Admin-dash.php");
		  }
	} else {
		//$_SESSION['Wrong'] = "Invalid Username or Password";
		header("location:http://localhost/techninow/admin/index.php?w=Username or password invalid");
	}
}
?>
<!doctype html>
<html lang="en">

<head>
	<title>Admin | Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../Images/Techninow.png">
	<link rel="stylesheet" href="css/style-login.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">

			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<div class="d-flex align-items-center justify-content-center">
							<img src="../Images/Techninow.png" alt="Logi" style="height:70px">
						</div>
						<h3 class="text-center mb-4">Admin Login</h3>
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="login-form">
							<div class="form-group">
								<input type="text" class="form-control rounded-left" name="username" placeholder="Username" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>

							</div>
							<span style="color: red;">
								<?php if (@$_GET['w']) {
									echo @$_GET["w"] ;
								}
								?>
							</span>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary rounded submit p-3 px-5" value="Login">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>