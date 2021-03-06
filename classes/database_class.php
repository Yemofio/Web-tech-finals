<?php 

require(dirname(__FILE__).'/../database/database_credentials.php');

class Connection{

	public $db = null;
	public $results = null;


	function connection(){

		$this->db = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

		if(mysqli_connect_errno()){
			return false;
		}

		return true;
	}

	function query($query){

		if($this->connection() == false){
			return false;
		}

		$this->results = mysqli_query($this->db, $query);

		if($this->results !=true){
			return false;
		}

		return true;

	}

	function fetch($query){

		if($this->query($query)) {
			return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
		}
		return false;
		
	}

	function fetchOne($query){

		if($this->query($query)) {
			return mysqli_fetch_assoc($this->results);
		}
		return false;
	}

	function getlast($query){
		if($this->query($query)) {
			return  mysqli_insert_id($this->db);
		}
		return false;
	}

}

?>
