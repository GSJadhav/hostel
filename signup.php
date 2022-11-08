<?php
session_start();

include("dbconn.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$username = $_POST['username'];
	$password = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];


	if (!empty($username) && !empty($password) && !is_numeric($username)) {

		//save to database
		$query = "insert into user_details (username,password,name,age,email,mobile,address) values ('$username','$password','$name','$age','$email','$mobile','$address')";

		mysqli_query($con, $query);

		header("Location: login.php");
		die;
	} else {
		echo "Please Enter Some Valid Information!";
	}
}
?>



<html>

<head>
	<title>Hostel World</title>
	
	<script>
		
	function let()
	{
			var nm= document.reg.username.value;
			var len = nm.length;
		
		if(len==0)
			document.getElementById("n0").innerHTML="Enter Name!"; 
		else
		{
			var reg=/^[a-zA-Z]+$/;
			if(nm.match(reg))
			{
				document.getElementById("n0").innerHTML="";
				return true;
			}
		else 
		{
			document.getElementById("n0").innerHTML="Enter Char Value Only"; 
			return false;
		}	
	}
}

function pd()
	{
			var pwd= document.reg.password.value;
			var len = pwd.length;
		
		if(len==0)
			document.getElementById("n1").innerHTML="Enter Password!"; 
		else
		{
			var reg=/^[A-Za-z0-9]\w{7,10}$/;
			if(pwd.match(reg))
			{
				document.getElementById("n1").innerHTML="";
				return true;
			}
		else 
		{
			document.getElementById("n1").innerHTML="Enter Strong Password."; 
			return false;
		}	
	}
}

function fnm()
	{
			var nm= document.reg.name.value;
			var len = nm.length;
		
		if(len==0)
			document.getElementById("n2").innerHTML="Enter Valid Name!"; 
		else
		{
			var reg=/^[a-zA-Z]+$/;
			if(nm.match(reg))
			{
				document.getElementById("n2").innerHTML="";
				return true;
			}
		else 
		{
			document.getElementById("n2").innerHTML="Enter Full Name."; 
			return false;
		}	
	}
}

function ag()
	{ 
		var ag= document.reg.age.value;
		var len = ag.length;

	if(len==0)
		document.getElementById("n3").innerHTML="Enter Age!"; 
	else
	{
		var reg=/^[0-9]{1,3}$/;
		if(ag.match(reg))
		{
			document.getElementById("n3").innerHTML=""; 
			return true;
		}
		else 
		{
			document.getElementById("n3").innerHTML="Enetr Valid Age"; 
			return false;
		}
	}
}

	function em()
	{ 
		var em= document.reg.email.value;
		var len = em.length;
	
		if(len==0)
			document.getElementById("n4").innerHTML="Enter Email!"; 
		else
		{
			var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(em.match(reg))
		{
			document.getElementById("n4").innerHTML=""; 
			return true;
		}
		else 
		{
			document.getElementById("n4").innerHTML="Enter Email Valid Format"; 
  			return false;
		}
	}
}

	function mob()
	{ 
		var mob= document.reg.mobile.value;
		var len = mob.length;

		if(len==0)
		document.getElementById("n5").innerHTML="Enter Mobile No!"; 
	else
	{
		var reg=/^[0-9]{10}$/;
		if(mob.match(reg))
	{
		document.getElementById("n5").innerHTML=""; 
		return true;
	}
		else 
		{
			document.getElementById("n5").innerHTML="Mobile No. 10 Digits"; 
			return false;
		}
	}
}

function add()
	{
			var add= document.reg.address.value;
			var len = add.length;
		
		if(len==0)
			document.getElementById("n6").innerHTML="Enter Address!"; 
		else
		{
			var reg=/^[a-zA-Z]+$/;
			if(add.match(reg))
			{
				document.getElementById("n6").innerHTML="";
				return true;
			}
		else 
		{
			document.getElementById("n6").innerHTML="Enter Proper Address."; 
			return false;
		}	
	}
}


	</script>
</head>

<body>

	<style type="text/css">
	*{
        margin: 0;
        padding: 0;
}
	body{
			background-size: cover;
            background-repeat: no-repeat;
            background-image: linear-gradient(45deg, #0000006b, #0000006b),url('https://mbcet.ac.in/wp-content/uploads/2019/05/BROCHURE-HOSTEL-0011-1024x624.jpg');
            background-position: center;
}
    #text {

			height: 25spx;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}
    .box h3{
    		width: 220px;
    		font-family: 'Franklin Gothic Medium';
    		text-align: center;
    		color: #fff;
    		font-size: 22px;
    		background-color: #ff7200;
    		border-radius: 10px;
    		margin: 6px;
    		padding: 8px;
			right: 200px;
}

	#button 
	{
		width: 220px;
    	font-family: 'Franklin Gothic Medium';
    	text-align: center;
    	font-size: 22px;
    	background-color: #fff;
    	color: #ff7200;
    	border-radius: 10px;
    	margin: 6px;
    	padding: 8px;
    	border: none;
    	cursor: pointer;
    	font-weight: bold;
}

	.box 
	{
		width: 355px;
    	height: 555px;
    	background-color: #ec801f;
    	background-image: linear-gradient(225deg, #ff743c 0%, #a04b4b 50%, #a8c52b 100%);
    	position: absolute;
    	top: 30px;
    	left: 568px;
    	border-radius: 10px;
    	padding: 20px;
}
	</style>

	<div class="box">

		<form method="post"  action="#" name="reg">
		<center> <h3>Registration</h3><br></center>
			<font size="3" color="black">Username: </font> &nbsp;&nbsp;&nbsp;&nbsp; <span id="n0" class="error"></span>
			<input id="text" type="text" name="username"  onblur="return let()" placeholder="Enter Your Name" REQUIRED><br><br>
			

            <font size="3" color="black">Password: </font> &nbsp;&nbsp;&nbsp;&nbsp; <span id="n1" class="error"></span>
			<input id="text" type="password" name="password" onblur="return pd()" placeholder="Enter Password" REQUIRED><br><br>
			

            <font size="3" color="black">Name: </font>&nbsp;&nbsp;&nbsp;&nbsp;  <span id="n2" class="error"></span>
			<input id="text" type="text" name="name" onblur="return fnm()" placeholder="Enter Full Name" REQUIRED><br><br>
			

            <font size="3" color="black">Age: </font> &nbsp;&nbsp;&nbsp;&nbsp; <span id="n3" class="error"></span>
			<input id="text" type="age" name="age" onblur="return ag()" placeholder="Enter Age" REQUIRED><br><br>
            

            <font size="3" color="black">Email: </font>&nbsp;&nbsp;&nbsp;&nbsp; <span id="n4" class="error"></span>
			<input id="text" type="email" name="email" onblur="return em()" placeholder="Enter Email" REQUIRED><br><br>
			

            <font size="3" color="black">Mobile:</font>&nbsp;&nbsp;&nbsp;&nbsp; <span id="n5" class="error"></span>
			<input id="text" type="mobile" name="mobile" onblur="return mob()" placeholder="Enter Mobile" REQUIRED><br><br>
			

			<font size="3" color="black">Address:</font>&nbsp;&nbsp;&nbsp;&nbsp; <span id="n6" class="error"></span>
			<input id="text" type="address" name="address" onblur="return add()" placeholder="Enter Address" REQUIRED><br><br>
           


			<center><input id="button" type="submit" value="Login"></center><br><br>

			<br>
		</form>
	</div>
</body>

</html>