<?php

class dbconnection{
	protected $db_conn;
	public $db_name = '323data';
	public $db_user = 'user_app';
	public $db_pass = '500gram';
	public $db_host = 'localhost';
	//Base url
	public $base_url = 'http://localhost/323-api/api';
	public $options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);
	//Connect to database
	function connect(){
	try{
		$this->db_conn = new PDO("mysql:host=$this->db_host;dbname=$this->db_name"
		,$this->db_user,$this->db_pass,$this->options);
		return $this->db_conn;
		}
		catch(PDOException $e){
		
		return $e->getMessage();
		}
	}
	
	function database(){
		return $this->db_name;
	}
	
	function base_url(){
		return $this->base_url;
	}
}


?>