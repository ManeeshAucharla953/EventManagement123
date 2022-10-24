<?php

include 'DB.php';

function getPricePerEventFromDB($eventType, $category) {
    $databaseObj = new DB();
    $selectQuery = "SELECT price FROM PRICES WHERE eventName =  '$eventType';";
    
    $result = $databaseObj->performDBQuery($selectQuery);
    
    if ($result) {
        return $result;
    } else {
        return 0;
    }
}

function getAllScheduledEventsFromDB() {
    
    $databaseObj = new DB();
    $selectQuery = "SELECT * FROM EVENTS;";
    
    $result = $databaseObj->performDBQuery($selectQuery);
    
    if ($result) {
        return $result;
    } else {
        return 0;
    }
}
function getEventsForCategory($param) {
    
    $databaseObj = new DB();
    $whereClause = "";
    
    if ($param != "All") {
        $whereClause = "WHERE `event`='$param'";
    }
    
    $selectQuery = "SELECT * FROM `events`".$whereClause;
        
    $result = $databaseObj->performDBQuery($selectQuery);
    
    if ($result) {
        return $result;
    } else {
        return 0;
    }
}

?>