<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];


	if (!empty($username) && !empty($password) && !is_numeric($username)) {

		//save to database
		$query = "insert into user_details (username,password,name,email,mobile,address) values ('$username','$password','$name','$email','$mobile','$address')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please enter some valid information!";
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Signup</title>
</head>

<body background="https://images.unsplash.com/photo-1626866059866-90456ddd67ab?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bW9ybmluZyUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1700&q=80s">

	<style type="text/css">
		#text {

			height: 25spx;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button {

			padding: 10px;
			width: 140px;
			height: 50px;
			color: white;
			background-color: green;
			border: none;
		}

		#box {

			background-image: linear-gradient(to bottom, #000000, hsla(341, 90%, 25%, 0.7));
			margin: auto;
			width: 500px;
			padding: 20px;
		}
	</style>

	<div id="box">

		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: orange;">Signup</div><br>
			<font size="3" color="white">Username: </font>
			<input id="text" type="text" name="username" placeholder="Enter Your Name" REQUIRED><br><br>
			<font size="3" color="white">Password: </font>
			<input id="text" type="password" name="password" placeholder="Enter Password" REQUIRED><br><br>
			<font size="3" color="white">Name: </font>
			<input id="text" type="text" name="name" placeholder="Enter Full Name" REQUIRED><br><br>
			<font size="3" color="white">Email: </font>
			<input id="text" type="email" name="email" placeholder="Enter Email" REQUIRED><br><br>
			<font size="3" color="white">Mobile:</font>
			<input id="text" type="mobile" name="mobile" placeholder="Enter mobile" REQUIRED><br><br>
			<font size="3" color="white">Address:</font> &nbsp; &nbsp;
			<textarea name="address" rows="5" cols="33"></textarea>

			<center><input id="button" type="submit" value="Signup"></center><br><br>

			<center>
				<h3> If you are already registered! </h3>
				<h2 /><a href="login.php">Click to Login</a>
			</center><br>
		</form>
	</div>
</body>

</html>