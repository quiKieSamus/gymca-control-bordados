<?php
if (include_once("../src/db/db.php") !== true) {
    include_once("../src/db/db.php");
} else {
    include_once("../db/db.php");
}
class ClienteModel
{
    private $db;
    private $con;
    function __construct()
    {
        $this->db = new Db;
        $this->con = $this->db->connect();
    }

    public function select($row=""){
        if($row !== "") { //selecting specific row from table
            $query = "SELECT $row from cliente";
        } else { // selects all
            $query = "SELECT * FROM cliente";
        }

        $result = $this->con->query($query);
        
        if ($result->num_rows > 0) {
            
            return $result;
        } else {
            //nothing was found
            return 0;
        }
        
    }

    public function insert($name, $doc, $direccion) {
        $query = "INSERT INTO cliente(nombre, documento, direccion) VALUES ('$name', '$doc', '$direccion')";
        $result = $this->con->query($query);
        return $result;
    }

    public function checkClientDoc ($doc) {
        $query = "SELECT documento FROM cliente where documento='$doc'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>
