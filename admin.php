<?php
    
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"hostel");
    
    if(isset($_POST["submit"]))
    {
        $fnm=$_POST["name"];
        $foodvr=$_POST["variety"];
        $foodnm=$_POST["food"];
        $foodqnt=$_POST["quantity"];
        $fprice=$_POST["price"];
        $date=$_POST["date"];
    
        $insertq= "insert into food( name, variety, food, quantity, price, date) values('$fnm', '$foodvr', '$foodnm', '$foodqnt', '$fprice', '$date')";
                        
       $t=mysqli_query($con, $insertq);
    
        if($t){
            ?>
            <script>
                alert('Inserted successfull');
            </script>
            <?php
            }else{
                ?>
                <script>
                    alert('Not Inserted');
                </script>
                <?php
            }
            
    }
    ?>
    

<html>
    <meta charset="UTF-8">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
    <body>
    
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    *{
        margin: 0;
        padding: 0;
    }
     body{
        background-size: cover;
        background-position: center;
        background-image: linear-gradient(45deg, #0000006b, #0000006b),url('https://www.cypressgreen.in/blog/wp-content/uploads/2021/03/food.jpg');
    
     }
     .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 40px;
      font-family: 'Franklin Gothic Medium';
      color: #000;
      text-decoration: none;
      margin-left: 498px;
    }

    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
      font-family: 'Franklin Gothic Medium';
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
      font-size: 20px;
    }

     
   h3 .logo{
        color: #ff7a00;
        align-items: center;
        background-color: rgb(255 255 255 / 86%);
    } 

    h3{
    width: 350px;
    font-family: 'Franklin Gothic Medium';
    text-align: center;
    color: #ff7200;
    font-size: 50px;
    background-color: rgb(212, 55, 55);
    border-radius: 10px;
    margin: 6px;
    padding: 8px;   
}
    
     h2{
        width: 315px;
        font-family: 'Franklin Gothic Medium';
        text-align: center;
        color: #fff;
        font-size: 50px;
        border-radius: 10px;
        margin: auto;
        margin-top: 10px;
        margin-bottom: 31px;
    }
    #text{
    
        height: 26px;
        border-radius: 14px;
        padding: 9px;
        border: solid thin #aaa;
        width: 57%;
    
    
    }
    
    #box{
        background-image: radial-gradient( circle 597px at 93% 9.8%, rgba(255,61,89,1) 1.7%, rgba(252,251,44,1) 97% );
    margin: auto;
    width: 339px;
    padding: 22px;
    margin-top: 81px;
    border-radius: 38px;
    }
    
    
    #btn{
        background-color: #ef6b2b;;
    border-radius: 10px;
    background-size: 20px;
    border: none;
    color: white;
    font-family: 'Franklin Gothic Medium';
    font-size: 20px;
    width: 100px;
    cursor: pointer;
    height: 35px;
    }
    
    </style>
         
        <header class="header">
    <a href="#" class="logo">Hostel Food Management System</a>
    <nav class="nav-items">
      <!-- <a href="select.php">Order Summary</a> -->
      <a href="home.php">LogOut</a>
    </nav>
  </header>
  <center>
        </center> 
    <div id="box">
    
        <form method="post" action="#">
        <h2>Food Select</h2> 
                <font size="3" color="black">Full Name: </font>
                <input id="text" type="text" name="name" placeholder="Enter Full Name" REQUIRED><br><br>
                
                <font size="3" color="black">Food Variety: </font>
                <select name="variety">
                    <option selected disabled>--Select Food--</option>
                    <option value="Veg Food">Veg Food</option>
                    <option value="Non-Veg Food">Non-Veg Food</option>
                </select><br><br>
                
                <font size="3" color="black">Food Name: </font>
                <select name="food" id="select">
                    <option selected disabled>Veg Food</option>
                    <option value="Roti-Bhaji">Roti-Bhaji</option>
                    <option value="Boiled Rise">Boiled Rise</option>
                    <option value="Palak Panner">Palak Panner</option>
                    <option value="Chhole-Bhature">Chhole-Bhature</option>
                    <option value="Pav-Bhaji">Pav-Bhaji</option>
                    <option value="Boile Rise">Boile Rise</option>
                    <option value="Khichadi">Khichadi</option>
                </select>
    
                <select name="food" id="select">
                    <option selected disabled>Non-Veg Food</option>
                    <option value="Boile Egg">Boile Egg</option>
                    <option value="Omlet">Omlet</option>
                    <option value="Chiken Tikka">Chiken Tikka</option>
                    <option value="Fish Friy">Fish Friy</option>
                    <option value="Biryani">Biryani</option>
                    <option value="Meal Pulav">Meal Pulav</option>
                </select>
                <br><br>
                
                <font size="3" color="black">Food Quantity: </font>
                <input id="text" type="number" name="quantity" placeholder="Enter Quantity" REQUIRED><br><br>
                
                <font size="3" color="black">Food Price: </font>
                <input id="text" type="number" name="price" placeholder="Select Price" REQUIRED><br><br>
                
                <font size="3" color="black">Date & Time: </font>
                <input id="text" type="datetime-local" name="date" placeholder="Date-Time" REQUIRED><br><br>
            
               <input id="btn" type="submit" name="submit" value="Submit"/> 
        
                </form>
        </div>
        
    </body>
    </html>
    &nbsp;&nbsp;&nbsp;
    
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
    #up a{
        color: green;
    }

    #del a{
        color: red;
    }
        </style>

<div class="main">
            <center>
            <h1 style="font-size: 50px;font-family:'Franklin Gothic Medium';color:#fff;">Order Summary</h1>
                <table class="content-table">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>variety food</th>
                        <th>food name</th>
                        <th>quantity</th>
                        <th>price</th>
                        <th>date</th>  
                        <th colspan="4">Opration</th>
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
                            <td><?php echo $result['date']; ?></td>
                            <td id="up"><a href="update.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td id="del"><a href="delete.php?id=<?php echo $result['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
            <?php
    
           }
    
        ?>
                    </tbody>
                </table>
        </div>
    </body>
    </html>