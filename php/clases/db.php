<?php
class Database
{
	public $con;
	public function __construct(){

		$this->con = mysqli_connect("localhost","root","","farmacia_2");
		// Para corregir tildes, colocar la siguiente linea de codigo:
        mysqli_set_charset($this->con,"utf8");
	}

}

?>