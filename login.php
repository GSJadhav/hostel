<?php
session_start();

include("dbconn.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        //read from database
        $query = "select * from user_details where username = '$username'";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {

                    $_SESSION['username'] = $user_data['username'];
                    header("Location: home.php");

                    die;
                }
            }
        }

       
    } {
        ?>   
            <script>
                alert('Wrong Username or Password!');
            </script>
            <?php
        }
           
    }
    
?>


<html lang="en">

<head>
    <title>Hostel World</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script language="javascript" src="jquery-3.6.0.min.js" /></script>
    
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
			var reg=/^[A-Za-z]\w{7,10}$/;
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


    </script>
</head>

<body>
    <style>
        
        body{
            background-repeat: no-repeat;
            background-image: linear-gradient(45deg, #0000006b, #0000006b),url('https://mbcet.ac.in/wp-content/uploads/2019/05/BROCHURE-HOSTEL-0011-1024x624.jpg');
             background-size: cover;
            background-position: center;
        }
    </style>
    
            <div class="form">
                <form name="reg" action="#" method="POST" onsubmit="return validateform()">
                    <h3>Login Here</h3> <br>
                    <label for="username" class="fl fontLabel">Username:</label>&nbsp;&nbsp;&nbsp;&nbsp;<span id="n0" class="error"></span>
                    <input type="username" name="username" onblur="return let()" placeholder="Enter Username"><br><br>
                    

                    <label for="password" class="fl fontLabel">Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;<span id="n1" class="error"></span>
                    <input type="password" name="password" onblur="return pd()" placeholder="Enter Password"><br><br>
                    

                    <button class="btn" name="login" type="submit" class="login">Log In</button>
                    <button class="btn-outline" name="signup"><a href="signup.php">Sign Up</a></button>

                </form>   
        </div>
</body>

</html>