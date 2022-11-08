<?php

include("dbconn.php");

session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $password = $_POST['password'];
   

   $select = " SELECT * FROM admin_ WHERE  password = '$password' ";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['name'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin.php');

      }

      }
     
   }else{
    
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>

   <!-- custom css file link  -->
   

</head>
<body>
   <style>
    *{
   font-family: 'Times New Roman', Times, serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}


.form-container{
    display: flex;
      flex-direction: column;
      /* justify-content: center; */
      /* align-items: center; */
      width: 100%;
      height: 741px;
      background: linear-gradient(to bottom, rgb(107 103 103 / 64%) 0%, rgb(35 34 34 / 64%) 100%), url("https://mbcet.ac.in/wp-content/uploads/2019/05/BROCHURE-HOSTEL-0011-1024x624.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #e3d7d3c4;
   text-align: center;
   width: 361px;
}

.form-container form h3{
   font-size: 30px;
   font-family: 'Franklin Gothic Medium';
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#1c1b1bab;
}

.form-container form input,
.form-container form select{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option{
   background: #fff;
}

.form-container form .form-btn{
    background: #09d23c;
    font-family: 'Franklin Gothic Medium';
    color: #f7f2f3;
    text-transform: capitalize;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
}

.form-container form .form-btn:hover{
   background: red;
   color:#fff;
}

   </style>
   
<div class="form-container">
<center>
   <form action="" method="post">
      <h3>Admin Login</h3>
      
      <input type="name" name="name" required placeholder="name">
      <input type="password" name="password" required placeholder="password">
      <input type="submit" name="submit" value="Enter" class="form-btn">
      </form>
      </center>
</div>

</body>
</html>