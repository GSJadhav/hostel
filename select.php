<!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
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
            <h1 style="font-size: 50px;font-family:'Franklin Gothic Medium';color:#000;">Order Summary</h1>
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