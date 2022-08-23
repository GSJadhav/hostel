<html>
   <head>
   <center><h1 style="font-family: lucida fax;color:white ">Hostel Management</h1>

    <style>
*{
    padding: 0;
    margin: 0;
    }
body{font-family: verdana, Helvetica, sans-serif;
        background-image: url('https://mbcet.ac.in/wp-content/uploads/2019/05/BROCHURE-HOSTEL-0011-1024x624.jpg');
        background-size: cover;
        background-attachment: fixed
        repeat center fixed;    
        
    }
.container{
    width: 400px;
    height: 400px;
    padding-bottom: 20px;
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: auto;
    padding: 70px 50px 20px 50px;
    background-color:  rgba(187, 209, 142, 0.462);
    box-shadow: 0 25px 30px black;
    display: grid;
    }
.fl{
    float: left;
    width: 110px;
    font-weight: bold;
    line-height: 35px;
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
.box{
    width: 360px;
    height: 35px;
    margin-top: 10px;
    font-family: verdana;
    font-size: 12px;
    }
.textBox{
    height: 35px;
    width: 190px;
    font-weight: 700;
    border: none;
    padding-left: 20px;
    }
    
.iconBox{
    height: 35px;
    width: 40px;
    line-height: 0px;
    text-align:center;
    background: #ff6600;
    }
.radio{
    color: white;
    font-weight: 700;
    line-height: 38px;
    }
.terms{
    line-height: 35px;
    text-align: center;
    font-weight: 700;
    color: white;
    }
.submit{
    float: right ;
    border: none;
    font-weight: 700;
    color: white;
    width: 110px;
    height: 35px;
    background: #ff6600;
    text-transform: uppercase;
    cursor: pointer;
    }

    </style>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="css-style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>    
   <body>
    <div class="container">
    
       <form method="post" autocomplete="on">
        <center> <h2 style="font-family:lucida fax;font-size: 40px;color: rgb(13, 221, 214);"> SignUp Page</h2> </center>    

        <div class="box">
        <label for="srno" class="fl fontLabel">
         Sr No:
        </label>
        <div class="fl iconBox">
            <i class="fa fa-number retro fa-lg" aria-hidden="true"></i>
        </div> 
        <div class="fr"> 
            <input type="text" required name="sno" placeholder="Sr No"
                     class="textBox">
        </div>
        <div class="clr"></div>
    </div>

        <div class="box">
        <label for="firstName" class="fl fontLabel">
         First Name:
        </label>
        <div class="fl iconBox">
            <i class="fa fa-user retro fa-lg" aria-hidden="true"></i>
        </div> 
        <div class="fr"> 
            <input type="text" required name="firstName" placeholder="First Name"
                     class="textBox">
        </div>
        <div class="clr"></div>
    </div>

    <div class="box">
        <label for="secondName" class="fl fontLabel">
            Second Name:
           </label>
           <div class="fl iconBox">
               <i class="fa fa-user retro fa-lg" aria-hidden="true"></i>
           </div> 
           <div class="fr">
               <input type="text" required name="secondName" placeholder="Last Name"
                        class="textBox">
           </div>
           <div class="clr"></div>
    </div>

    <div class="box">
        <label for="phone" class="fl fontLabel">
            Contact No:
           </label>
           <div class="fl iconBox">
               <i class="fa fa-phone-square retro fa-lg" aria-hidden="true"></i>
           </div> 
           <div class="fr">
               <input type="text" required name="phoneNo" maxlength="10" placeholder="Contact No"
                        class="textBox">
           </div>
           <div class="clr"></div>
    </div>

    <div class="box">
        <label for="email" class="fl fontLabel">
            Email ID:</label>
           <div class="fl iconBox">
               <i class="fa fa-envelope retro fa-lg" aria-hidden="true"></i>
           </div> 
           <div class="fr">
               <input type="email" required name="email" placeholder="Email ID"
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
               <input type="Password" required name="password" placeholder="Password"
                        class="textBox">
           </div>
           <div class="clr"></div>
    </div>
    <div class="box"><a href="log.php">
        <input type="Submit" name="submit" class="submit" value="SUBMIT"></a>
    </div>
    
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"student");


if(isset($_POST["submit"]))
{
    $srno=$_POST["sno"];
    $fname=$_POST["firstName"];
    $sname=$_POST["secondName"];
    $cno=$_POST["phoneNo"];
    $eid=$_POST["email"];
    $pwd=$_POST["password"];
   
    
    $q="insert into signup values ($srno,'$fname','$sname',$cno,'$eid','$pwd')";
    $t=mysqli_query($con,$q);

    if($t)  
        echo "<br> Successfull";
        

}
?>
</form>    
</div>
   </body>
</html>

