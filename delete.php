<?php

include "dbconn.php";

$id = $_GET["id"];

$deletq = "delete from food where id=$id";

$query = mysqli_query($con, $deletq);

if($query){
    ?>
    <script>
        alert('Deleted Successfull');
    </script>
    <?php
     header("location: admin.php");
    }
    else
    {
        ?>
        <script>
            alert('Not Deleted');
        </script>
        <?php
    }  
?>