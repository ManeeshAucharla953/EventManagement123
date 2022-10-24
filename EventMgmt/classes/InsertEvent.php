<?php
include 'DB.php';
    
    function insertEventIntoDB($regId, $userName, $phone, $email, $eventType, $address, $category, $peopleCount,$eventDate) {
        $databaseObj = new DB();
        $insertQuery = "INSERT INTO events (regId, name, phone, email, event, address, category, attendees,eventDate) 
        VALUES ('$regId','$userName', '$phone', '$email', '$eventType', '$address', '$category', '$peopleCount','$eventDate');";
        

        
        $result = $databaseObj->performDBQuery($insertQuery);
        
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
    
?>