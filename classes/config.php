<?php
class config 
{	
	private $host = 'localhost';
	private $user = 'root';
	private $password = 'root';
	private $db = 'test';
	
	protected $conn;
	
	public function __construct()
	{
		if (!isset($this->conn)) {
			
			$this->conn = new mysqli($this->host, $this->user, $this->password, $this->db);
			
			if (!$this->conn) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->conn;
	}
}
?>
