<?php
class DB {

    protected static $connectionObj = NULL;
    
    public function createConnection() {
        
        if (!isset(self::$connectionObj)) {
            include ("Connection.php");
            self::$connectionObj = new mysqli($host, $username, $password, $database);
        }
        
        if (self::$connectionObj == false) {
            return false;
        }
        return self::$connectionObj;
    }

    public function connectToDB($connectionQuery) {
        
        $connectionObj = $this->createConnection();
        
        $resultObj = $connectionObj->query($connectionQuery);
        
        if (!$resultObj) {
            return $connectionObj->error;
        }
        else {
            return $resultObj;
        }
        
    }
    
    public function performDBQuery($actionQuery) {
        
        $connectionObj = $this->createConnection();
        
        $resultObj = $connectionObj->query($actionQuery);
     
        
        if ($resultObj) {
            return $resultObj;
        }
        else {
            return false;
        }
    }
    
    public function error() {
        $connectionObj = $this->createConnection();
        
        return $connectionObj->error;
    }
}