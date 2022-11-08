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
             header("location: select.php");
             die;
    }
    ?>
    

<html>
    

    <body background="https://www.cypressgreen.in/blog/wp-content/uploads/2021/03/food.jpg">
    
    <style type="text/css">
    *{
        margin: 0;
        padding: 3px;
    }
     body{
        background-size: cover;
        background-position: center;
    
     }
     
    .logo{
        color: #ff7a00;
        align-items: center;
        background-color: rgb(255 255 255 / 86%);
    } 

    h3{
    width: 350px;
    font-family: lusida fax;
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
        font-family: lusida fax;
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
        background-image: radial-gradient( circle 597px at 93% 9.8%,  rgba(255,61,89,1) 1.7%, rgba(252,251,44,1) 97% );margin: auto;
        width: 400px;
        padding: 15px;
        margin-top: 40px;
        border-radius: 10px;
    }
    .submit{
        border: 2px solid greenyellow;
        cursor: pointer;
    
    }
    button{
        background-color: white;
        border-radius: 10px;
        background-size: 20px;
        width: 100px;
        height: 35px;
    }
    
    </style>
    <center>
        <h3 class="logo">Hostel World</h3></center>       
    
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
                <input id="text" type="integer" name="quantity" placeholder="Enter Quantity" REQUIRED><br><br>
                
                <font size="3" color="black">Food Price: </font>
                <input id="text" type="text" name="price" placeholder="Select Price" REQUIRED><br><br>
                
                <font size="3" color="black">Date & Time: </font>
                <input id="text" type="datetime-local" name="date" placeholder="Date-Time" REQUIRED><br><br>
            
               <input id="btn" type="submit" name="submit" value="Submit"/> 
        
                </form>
        </div>
        <center>
          <button><a href="logout.php">Logout</a></button></center>
    </body>
    </html>
    
    
   <!-- <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-size: cover;
        background-position: center;
    }
    /* .main {
        background-color: aquamarine;
        height: 64px;
        width: 766px;
        margin-left: 258px;
        margin-right: 350px;
        top: 0px;
        padding: 10px 58px;
        margin-top: 13px; */
    
     h1{
        background-color: 2px solid red;
        font-size: 26px;
        text-align: center;
        font-size: 35px; 
        margin: 6px;
        padding: 8px; 
        text-shadow: 0.5px 0.5px 0.5px black;
        color: white;
    }
    /* content table{
        border-radius: 3px;
        padding: 20px 30px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 25px;
    }   */
    thead{
        background-color: orange;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.03em;
        text-shadow: 0.5px 0.5px 0.5px black;
    
    }
    
    tbody tr{
        background-color: #ffffff;
        box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.1);
        letter-spacing: 1px;
        text-align: center;
    }
    .btnup{
        background-color: greenyellow;
        border: 3px solid black;
        border-radius: 6px;
    
         
    }
    .btnup a{
        text-decoration: none;
        color: blue;
        border: green; 
    }
    .btndel{
        background-color: red;
        border: 3px solid black;
        border-radius: 6px;
    }
    .btndel a{
        text-decoration: none;
        color: white;
    }
    
    th,
    td {
    text-align: center;
        font-family: 'open sans' sans-serif;
        padding:5px 20px;
        margin:5px;
    }
    
    table{
        background-color: #ff7200;
    }
    
    </style>
    <body>
        <div class="main">
            <center>
            <h1>Order Summary</h1>
                <table>
                    <thead>
                        <th>id</th>
                        <th>name</th>
                        <th>variety food</th>
                        <th>food name</th>
                        <th>quantity</th>
                        <th>price</th>
                        <th>date</th>  
                        <th colspan="4">Opration</th>
                    </thead>
                    <tbody>
     
        <?php
            include("dbconn.php");
    
            $selectq = "select * from food";
    
            $query = mysqli_query($con, $selectq );
    
            while($result = mysqli_fetch_assoc($query)){
    
         ?>            
                       <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['variety']; ?></td>
                            <td><?php echo $result['food']; ?></td>
                            <td><?php echo $result['quantity']; ?></td>
                            <td><?php echo $result['price']; ?></td>
                            <td><?php echo $result['date']; ?></td>
                            <td class="btnup"><a href="update.php?id=<?php echo $result['id']; ?>">Update</a></td>
                            <td class="btndel"><a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
                        </tr>
            <?php
    
           }
    
        ?>
                    </tbody>
                </table>
        </div>
    </body>
    </html> -->