<?php

    require('connect.inc.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $room_number =  $_POST['room_number'];
        $room_name = $_POST['room_name'];
        $room_description =  $_POST['room_description'];
        $room_rate =  $_POST['room_rate'];

        $sql = "INSERT INTO room (room_number, room_name, room_description, room_rate) VALUES ('$room_number', '$room_name','$room_description','$room_rate')";
    
        if(mysqli_query($conn, $sql)){
            header("Location: ../rooms.php");
        } else{
            header("Location: rooms.php");
        }
       
    }

   
    