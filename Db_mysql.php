<?php 
/**
* 
*/
require_once ('config.php');

class Db_mysql
{
	private $webservice_url;
	private $query;
	private $result;
	private $method;
	
	function __construct($query,$method)
	{
		$this -> webservice_url = DB_Service ;
		$this -> query = $query;
		$this -> method = $method;
	// use key 'http' even if you send the request to https://...
	
	switch ($this -> method) {
		case 'POST':
			{
				$options = array('http' => array(
				'header' => 'Content-type: application/x-www-form-urlencoded',
				'method'  => 'POST',
				'content' =>$query
			));
				$context  = stream_context_create($options);
				$this -> result = file_get_contents($this -> webservice_url , false , $context);
			}
			break;
			
		case 'GET':
			{
				$context  =$this -> webservice_url.'?'.$query;
				$this -> result = file_get_contents($context);
			}
			break;
		
		
		default:
			
			break;
	}
	
	

	}

	function getResult(){
		return $this -> result;
	}
}