<?php
include "db.php";
class Reporte extends Database
{

    public function fetch_record($table){
        $sql = "SELECT SUM(comp_totalpago) as total_dia FROM ".$table." GROUP BY DAY(comp_fecregistro)";
        $array = array();
        $query = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }
}


$obj = new Reporte;

?>