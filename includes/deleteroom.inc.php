<?php

    require('connect.inc.php');

        $sql = "UPDATE room set active = '0' WHERE room_id='" . $_GET['id'] . "'";
    
        if(mysqli_query($conn, $sql)){
            header("Location: ../rooms.php");
        } else{
            header("Location: ../rooms.php");
        }
       

   
    