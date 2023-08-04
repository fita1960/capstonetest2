<?php

    require('connect.inc.php');

    $result = mysqli_query("SELECT * FROM room WHERE room_id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $room_number =  $_POST['room_number'];
        $room_name = $_POST['room_name'];
        $room_description =  $_POST['room_description'];
        $room_rate =  $_POST['room_rate'];

        $sql2 = "UPDATE room set room_number='" . $_POST['room_number'] . "', room_name='" . $_POST['room_name'] . "', room_description='" . $_POST['room_description'] . "', room_rate='" . $_POST['room_rate'] . "', WHERE room_id='" . $_GET['id'] . "'";
    
        if(mysqli_query($conn, $sql2)){
            header("Location: ../rooms.php");
        } else{
            header("Location: rooms.php");
        }
       
    }

   
    