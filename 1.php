<html>
<body bgcolor="#58e4c6">

   <center style="color: #411eee";>
<form action="#" method ="post">
Name:   <input type="text" name="txtnm"><br><br>
E-mail: <input type="text" name="txtemail"><br><br>
      <input type="submit" name="btnsub" value="Submit Here">
</form>
   
</body>
</html>
<?php
   $nm=$_POST["txtnm"];
   $email=$_POST["txtemail"];
   echo"Welcome $nm <br><br>";
   echo"Your email is $email <br>";
   
?></center>