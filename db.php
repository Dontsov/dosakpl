<?php
require_once 'config.php';

class Db extends Config {
	private $connection;
	
	function __construct() {
		$this->open_connection();
		
	}
	
	private function open_connection() {
		$this->connection = mysql_connect($this->db_host, $this->db_user, $this->db_pass);
		if(!$this->connection) {
			die('Database connection failed:'. mysql_error());
			
		} else {
			$db_select = mysql_select_db($this->db_name);
			if(!db_select) {
				die('Database selection failed:'. mysql_error());
			}
		}
		mysql_query('set names utf8') or die('set names utf8 failed');
	}
	
	public function sql($query) {
		$result = mysql_query($query, $this->connection);
		if(!$result) {
			die('Database query failed:'. mysql_error());
			
		}
	    return $result;
	}
	
}
