<?php
require_once 'db.php';

class Mtable extends Db {
	function return_table($param) {
		if($param = 0) {
			$sql = "insert into main (dateout, timeout, dateapp, timeapp, adress, texspes, driver, comment) " .
				   "values ('$dateout', '$timeout','$dateapp', '$timeapp', '$adress', '$texspes', '$driver', '$comment')";
		}
		if($param = 1) {
			$sql = "DELETE FROM main WHERE id = $id";
		}
		
		
	}
	
}