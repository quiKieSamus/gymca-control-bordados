<?php 
require_once('../src/db/db.php');
class BordadoModel {
    private $db;
    private $con;
    function __construct()
    {
        $this->db = new Db;
        $this->con = $this->db->connect();
    }

    public function select($row="") {
        if($row !== "") { //selecting specific row from table
            $query = "SELECT $row from bordado";
        } else { // selects all
            $query = "SELECT * FROM bordado";
        }

        $result = $this->con->query($query);
        
        if ($result->num_rows > 0) {
            
            return $result;
        } else {
            //nothing was found
            return 0;
        }
    }

    public function insert($totalCloth, $embByCloth, $total, $desc, $doc, $type) {
        $query = "INSERT INTO bordado(prenda_total, bordado_prenda, entrada, descripcion, documento, tipo_trabajo) VALUES ('$totalCloth', '$embByCloth', '$total', '$desc', '$doc', '$type')";
        $result = $this->con->query($query);
        return $result;

    }
}

?>