

<center> <h2 style="font-family:lucida fax;font-size: 40px;color: rgb(13, 221, 214);">Hostel Management System</h2> </center>
<style>
body{font-family: lucida fax;
        background-image: url('');
        background-size: cover;        
    }
    .container {
    background-color:  rgba(187, 209, 142, 0.462);
    box-shadow: 0 25px 30px black;
    width: 450px;
    height: 350px;
    padding-bottom: 20px;
    position: absolute;
    top:60%;
    left: 50%;
    transform: translate(-50%, -60%);   
    padding: 70px 50px 20px 50px;
    
}
 
.fontLabel{
    color: rgb(13, 221, 214);
}
.fl{
    font-family:  lucida fax;
    float: left;
   
}
.fr{
    float:left;
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
.textbox{
    width: 200px;
    height: 10px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 10px;
    letter-spacing: 1px;
    margin-top:5px ;
    font-family: sans-serif;
}
    
    .update{
   
    border: none;
    font-weight: 500;
    text-align: center;
    color: white;
    width: 55px;
    height: 20px;
    background: green;
    cursor: pointer;
    } 
    .delete{
    
    border: none;
    font-weight: 500;
    text-align: center;
    color: white;
    width: 55px;
    height: 20px;
    background: green;
    cursor: pointer;
    } 
    .display{
    
    border: none;
    font-weight: 500;
    text-align: center;
    color: white;
    width: 55px;
    height: 20px;
    background: green;
    cursor: pointer;
    } 
    
</style>

<body>
    <div class="container">
    <form method="post" action="log.php">
    
    <div class="box">
        <label for="studentid" class="fl fontLabel"> Student ID:</label>
        <div class="fr"> <input type="text" required name="studentid" placeholder="ID" class="textBox"></div>
        <div class="clr"></div>
    </div>

    <div class="box">
        <label for="studentname" class="fl fontLabel"> Student Name:</label>
        <div class="fr"> <input type="text" required name="studentname" placeholder="Name" class="textBox"></div>
        <div class="clr"></div>
    </div>

    <div class="box">
        <label for="studentcontact" class="fl fontLabel"> Student Contact:</label>
        <div class="fr"> <input type="text" required name="studentcontact" placeholder="Contact" class="textBox"></div>
        <div class="clr"></div>
    </div>

    <div class="box">
        <label for="studentemail" class="fl fontLabel"> Student Email:</label>
        <div class="fr"> <input type="text" required name="studentemail" placeholder="Email" class="textBox"></div>
        <div class="clr"></div>
    </div>

    <input type="submit" name="submit" value="SUBMIT"> &nbsp;&nbsp;
    <input type="submit" name="update"  value="UPDATE">&nbsp;&nbsp;
    <input type="submit" name="delete"  value="DELETE">&nbsp;&nbsp;
    <input type="submit" name="display"  value="DISPLAY"></div>&nbsp;&nbsp;
   
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"student");

if(isset($_POST["submit"]))
{
    $sid=$_POST["studentid"];
    $sname=$_POST["studentname"];
    $scontact=$_POST["studentcontact"];
    $semail=$_POST["studentemail"];
    
    $q="insert into stud values($sid,'$sname',$scontact,'$semail')";
    $t=mysqli_query($con,$q);

    if(isset($_POST["submit"]))
    {
    $q="select * from stud";
    $res=mysqli_query($con,$q);
    
    echo "<table border=''>";
    echo "<tr>";
    echo "<td> Student Id";
    echo "<td> Student Name";
    echo "<td> Student Contact";
    echo "<td> Student Email";
    echo "</tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo"<tr>";
        echo"<td>".$row[0];
        echo"<td>".$row[1];
        echo"<td>".$row[2];
        echo"<td>".$row[3];
        echo"</tr>";
    }
    echo"</table>";
}
}

else if(isset($_POST["update"]))
{
    $sid=$_POST["studentid"];
    $sname=$_POST["studentname"];
    $scontact=$_POST["studentcontact"];
    $semail=$_POST["studentemail"];
    
    $q="update stud set sname='$sname' where sid=$sid";
    $t=mysqli_query($con,$q);

    if($t)
      echo"<br> Record Updated";
}

else if(isset($_POST["delete"]))
{
    $sid=$_POST["studentid"];
    $sname=$_POST["studentname"];
    $scontact=$_POST["studentcontact"];
    $semail=$_POST["studentemail"];
    
    $q="delete from stud where sid=$sid";
    $t=mysqli_query($con,$q);

    if($t)
      echo"<br> Record Deleted";
}

else if(isset($_POST["display"]))
{
    $q="select * from stud";
    $res=mysqli_query($con,$q);
    
    echo "<table border=''>";
    echo "<tr>";
    echo "<td> Student Id";
    echo "<td> Student Name";
    echo "<td> Student Contact";
    echo "<td> Student Email";
    echo "</tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo"<tr>";
        echo"<td>".$row[0];
        echo"<td>".$row[1];
        echo"<td>".$row[2];
        echo"<td>".$row[3];
        echo"</tr>";
    }
    echo"</table>";
}
?>
</form>
</div>
</body>