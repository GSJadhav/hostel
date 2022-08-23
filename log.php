<!DOCTYPE html>
<html>
<head>

<title>Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center><h1 style="font-family: lucida fax;color:white ">Hostel Management</h1>
<style>
body {font-family: verdana, Helvetica, sans-serif;
     background-image: url('https://mbcet.ac.in/wp-content/uploads/2019/05/BROCHURE-HOSTEL-0011-1024x624.jpg');
     background-size:cover;
     background-attachment: fixed
}

form {
border: 0px solid ;
}

button:hover {
opacity: 0.7;
}

.container {
    background-color:  rgba(187, 209, 142, 0.462);
    box-shadow: 0 25px 30px black;
    width: 400px;
    height: 350px;
    padding-bottom: 20px;
    position: absolute;
    top:40%;
    left: 50%;
    transform: translate(-50%, -40%);   
    margin: auto;
    padding: 70px 50px 20px 50px;
    display: grid;
   
}
.fl{
    float: left;
    width: 110px;
    font-weight: 900;
    line-height: 50px;
}
.fontLabel{
    color: white;
}
.fr{
    float: left;
}
.clr{
    clear: both;
}
.textBox{
    height: 35px;
    width: 140px;
    font-weight: 700;
    border: none;
    padding-right: 25px;
}
.iconBox{
    height: 37px;
    width: 42px;
    line-height: 38px;
    text-align: center;
    background: #ff6600;
    }    
.remember{
    line-height: 55px;
    text-align: left;
    color: white;
    }
.loginbtn{
    float: left;
    border: none;
    font-weight: 700;
    text-align: center;
    justify-content: center;
    color: white;
    width: 57px;
    height: 27px;
    background: #ff6600;
    text-transform: uppercase;
    cursor: pointer;
    }

.cancelbtn {
    float: left;
    border: none;
    font-weight: 700;
    color: rgb(27, 3, 3);
    width: 60px;
    height: 27px;
    background: #f7f7f8;
    text-transform: uppercase;
    cursor: pointer;
}
</style>
</head>
<body>
    
<div class="container">
    <center> <h3 style="font-family:lucida fax;font-size: 40px;color: rgb(13, 221, 214);">Student Login</h3> </center>
    <form method="post" autocomplete="on">

     <div class="box">
        <label for="username" class="fl fontLabel">
         Username:
        </label>
        <div class="fl iconBox">
            <i class="fa fa-user retro fa-lg" aria-hidden="true"></i>
        </div> 
        <div class="fr"> 
            <input type="text" required name="userName" placeholder="Enter Username"
                     class="textBox">
        </div>
        <div class="clr"></div>
    </div>

<div class="box">
    <label for="password" class="fl fontLabel">
        Password:</label>
       <div class="fl iconBox">
           <i class="fa fa-key retro fa-lg" aria-hidden="true"></i>
       </div> 
       <div class="fr">
           <input type="Password" required name="password" placeholder="Enter Password"
                    class="textBox">
       </div>
       <div class="clr"></div>
</div>
<div class="box remember">
    <input type="checkbox" name="remember" required>Remember Me
</div>


<div class="box"><a href="in1.php">
        <input type="Submit" name="login" class="loginbtn" value="LOGIN"></a>
    </div>



<div style="font-family:lusid fax;font-size: 18px;">
<a href="regi.php">SignUp</a></div>

<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"student");


if(isset($_POST["login"]))
{
    $uname=$_POST["userName"];
    $pwd=$_POST["password"];
    
    $q="insert into login values ('$uname','$pwd')";
    $t=mysqli_query($con,$q);

    if($t)  
        echo "<br> Successfull";
}
?>

</form>
</div>
</body>
</html>							