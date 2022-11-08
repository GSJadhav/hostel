<?php
    
    include ("dbconn.php");

    $id = $_GET["id"];

    $selectq = "select * from food where id=$id";
    
    $query = mysqli_query($con, $selectq );

    $result = mysqli_fetch_assoc($query);

    
    if(isset($_POST["submit"]))
    {
        $id = $_GET["id"];

        $fnm=$_POST["name"];
        $foodvr=$_POST["variety"];
        $foodnm=$_POST["food"];
        $foodqnt=$_POST["quantity"];
        $fprice=$_POST["price"];
        $date=$_POST["date"];
       
    
     $updateq= " update food set id=$id, name='$fnm', variety='$foodvr', food='$foodnm', quantity=' $foodqnt', price='$fprice', date='$date' where id=$id ";
                        
       $t = mysqli_query($con, $updateq);
    
        if($t){
            ?>
            <script>
                alert('Updated Successfull');
            </script>
            <?php
            }
            else
            {
                ?>
                <script>
                    alert('Not Updated');
                </script>
                <?php
            } 
             
    }
?>





<html>
    <body>
    
    <style type="text/css">
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
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
      font-size: 20px;
      font-family: 'Franklin Gothic Medium';
      
    }


    /* .logo{ 
        color: #ff7a00;
        align-items: center;
        background-color: rgb(255 255 255 / 86%);
     }  */
    
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
        background-color: #2eef2b;;
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
      <a href="admin.php">Check Summary</a>

    </nav>
  </header>       
    
    <div id="box">
    
        <form method="POST" action="#">
        <h2>Edit Order</h2> 
        
                <font size="3" color="black">Full Name: </font>
                <input id="text" type="text" name="name" value="<?php echo $result['name']; ?>" placeholder="Enter Full Name" REQUIRED><br><br>
                
                <font size="3" color="black">Food Variety: </font>
                <select name="variety">
                    <option value="">></option>
                    <option selected disabled>--Select--</option>
                    <option value="Veg Food">Veg Food </option>
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
                    <option selected disabled >Non-Veg Food</option>
                    <option value="Boile Egg">Boile Egg</option>
                    <option value="Omlet">Omlet</option>
                    <option value="Chiken Tikka">Chiken Tikka</option>
                    <option value="Fish Friy">Fish Friy</option>
                    <option value="Biryani">Biryani</option>
                    <option value="Meal Pulav">Meal Pulav</option>
                </select>
                <br><br>
                
                <font size="3" color="black">Food Quantity: </font>
                <input id="text" type="number" name="quantity" value="<?php echo $result['quantity']; ?>" placeholder="Enter Quantity" REQUIRED><br><br>
                
                <font size="3" color="black">Food Price: </font>
                <input id="text" type="number" name="price"  value="<?php echo $result['price']; ?>" placeholder="Select Price" REQUIRED><br><br>
                
                <font size="3" color="black">Date & Time: </font>
                <input id="text" type="datetime-local" name="date" value="<?php echo $result['date']; ?>" placeholder="Date-Time" REQUIRED><br><br>
            
                <input id="btn" type="submit" name="submit" value="Update"/>
        
            </form>
            
        </div>
    </body>
</html>
    
   