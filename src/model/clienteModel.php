<?php
require_once('../src/db/db.php');
class clienteModel
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
}

?>
