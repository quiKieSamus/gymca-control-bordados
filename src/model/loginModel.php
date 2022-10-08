<?php 

require_once('../src/db/db.php');
class loginModel {
    
    private $db;
    private $con;
    
    function __construct()
    {
        $this->db = new Db;
        $this->con = $this->db->connect(); 
    }

    function checkLogin ($email, $password) {
        $query = "SELECT correo, password from user WHERE correo = '$email' AND password = '$password'";
        $result = $this->con->query($query);
        if ($result->num_rows === 1) {
            return true;
        } else {
            return false;
        }
    }
}

?>