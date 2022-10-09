<?php 

require_once('../db/db.php');
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
            header('location: http://localhost/gymca-control-bordados/public/?view=home&state=success');
            return true;
        } else {
            header('location: http://localhost/gymca-control-bordados/public/?view=login&state=failure');
            return false;
        }
    }

    function loginInfoValidation ($mail, $password) {
        if (isset($mail) && isset($password)) {
            $mail = $_POST['mail'];
            $pwd = $_POST['pwd'];
            $this->checkLogin($mail, $pwd);
        } else {
            header("location: http://localhost/gymca-control-bordados/public/?view=login");
        }
    }
}

?>