<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>HomePage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
      background: linear-gradient(to bottom, rgb(72 65 65 / 72%) 0%, rgb(72 65 65 / 72%) 0%),  url("https://www.nmamilife.com/wp-content/uploads/2021/01/29-jan-blog.png");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 35px;
      font-family: 'Franklin Gothic Medium';
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
      font-size: 23px;
      font-family: 'Franklin Gothic Medium';
    }

    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      /* justify-content: center; */
      /* align-items: center; */
      width: 100%;
      height: 600px;
      /* background: linear-gradient(to bottom, rgb(107 103 103 / 64%) 0%, rgb(35 34 34 / 64%) 100%); */
      
    }

    .intro h1 {
      font-family: 'Franklin Gothic Medium';
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
      margin-top: 121px;
    }

    .intro p {
      font-size: 20px;
      font-family: 'Franklin Gothic Medium';
      color: #ececec;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      font-family: 'Franklin Gothic Medium';
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }
 
  </style>
  <script src="jquery-3.6.0.min.js">
  $(document).ready(function(){
    $(".btn").click(function(){
      $(".content-table").show();
    })
  })
  </script>
</head>

<body>
  <header class="header">
    <a href="#" class="logo">Home Page</a>
    <nav class="nav-items">
    <a href="admin_login.php">Admin</a>
    <a href="login.php">LogOut</a> 
    </nav>
  </header>
  
  <main>
    <div class="intro">
     <center> <h1>Hostel World </h1>
      <p>Choose Your Healthy Food. Eat Healthy and stay Healthy.</p>
      </center>
      <div class="row">
      <div class="column"> <img src="images/rise.jpg" alt="Rise" style="float:left; width:220px; height:175px; margin-top: 35px;margin-left:25px"></div>
      <div class="column"><img src="images/samosa.jpg" alt="samosa" style="float:left; width:220px; height:175px; margin-top: 35px; margin-left:30px"></div>
      <div class="column"><img src="images/rotisabji.jpg" alt="rotisabji" style="float:left; width:220px; height:175px; margin-top: 35px;margin-left:30px"></div>
      <div class="column"><img src="images/chhole.jpg" alt="chhole" style="float:left; width:220px; height:175px; margin-top: 35px;margin-left:30px"></div>
      <div class="column"><img src="images/egg.jpg" alt="egg" style="float:left; width:220px; height:175px; margin-top: 35px;margin-left:30px"></div>
      <div class="column"><img src="images/khaman.jpg" alt="khaman" style="float:left; width:220px; height:175px; margin-top: 35px;margin-left:30px"></div>
      </div>  
    </div>
     
  </main>
  
</body>
</html>

<!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <style>

    .content-table{
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.6cm;
        min-width: 400px;
        border-radius: 10px 10px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px 17px rgb(0 0 0 / 46%);
    }

    .content-table thead tr{
        background-color: #ef590f;
        color: #fff;
        text-align: center;

    }

   .content-table th,
   .content-table td{
        padding: 12px 15px;
    }

    .content-table tbody tr{
    border-bottom: 1px solid #dddddd;
    background-color: #fff
    }

    .content-table tbody tr:nth-of-type(even){
        background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type{
        border-bottom: 2px solid #009879;
    }

    .content-table tbody tr.active-row:nth-of-type(even){
        font-weight: bold;
        color: #ef590f ;

    }
        </style>
<div class="main">
            <center>
            <h1 style="font-size: 50px; font-family:'Franklin Gothic Medium';color:#fff;">List Of Order</h1>
                <table class="content-table">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>variety food</th>
                        <th>food name</th>
                        <th>quantity</th>
                        <th>price</th>
                        </tr>
                    </thead>
                    <tbody>
     
        <?php
            include("dbconn.php");
    
            $selectq = "select * from food";
    
            $query = mysqli_query($con, $selectq );
    
            while($result = mysqli_fetch_assoc($query)){
    
         ?>            
                       <tr class="active-row">
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['variety']; ?></td>
                            <td><?php echo $result['food']; ?></td>
                            <td><?php echo $result['quantity']; ?></td>
                            <td><?php echo $result['price']; ?></td>
                            </tr>
            <?php
    
           }
    
        ?>
                    </tbody>
                </table>
        </div>
    </body>
</html>
  