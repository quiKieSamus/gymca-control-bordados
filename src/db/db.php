<?php 
class Db {
    public static function connect() {
        $con = new mysqli("localhost", "artorias", "dostoyevskiwiiu10100", "gymca");
        
        return $con;
    }

    public static function checkConnection($con) {
        if (!$con) {
            return false;
        } else {
            return true;
        }
        return false;
    }
}