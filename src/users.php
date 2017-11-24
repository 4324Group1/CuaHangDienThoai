<?php
include_once('Db_mysql.php');
class Users
{
	
	var $uid;
	var $name;
	var $email;
	var $created_at;
	var $updated_at;
	var $mcv;
	var $gender;
	var $address;
	var $phone;
	
	function __construct(){
	
	}
	function createUser($name, $email, $password){
	$this->	name = $name;
	$this->	email=$email;
	$this->	password=$password;
	}
	function checkpass($uid,$pass){
		$data = array('tag'=>'checkpass', 
					  'uid' =>$uid,
					  'password' => $pass
					);
		$query = http_build_query($data);
		$db_mysql = new Db_mysql($query,'POST');
		return $db_mysql -> getResult();
	}
	function register(){
		$data = array('tag'=>'register', 
					  'name' => $this -> name,
					  'email' => $this -> email,
					  'password' => $this -> password 
					);
		$query = http_build_query($data);
		$db_mysql = new Db_mysql($query,'POST');
		return $db_mysql -> getResult();
		
	}
	function edituser($argument){
		
		$data = array('tag'=>'editprofile', 
					   'uid'=>$argument['uid'],
					  'name' => $argument['name'],
					  'email' => $argument['email'],
					  'password'=> $argument['password'],
					  'gender' => $argument['gender'],
					  'address'=> $argument['address'],
					  'phone'=>$argument['phone']
					);

		$query = http_build_query($data);
		$db_mysql = new Db_mysql($query,'POST');
		return $db_mysql -> getResult();
		
	}
	function getAllUser(){
		$query ='tag=getAllUser';
		$db_mysql = new Db_mysql($query,'GET');
		return $db_mysql -> getResult();
		
	}
	function getUserbyID($uid){
		$query ='tag=getuserbyid&uid='.$uid;
		$db_mysql = new Db_mysql($query,'GET');
		return $db_mysql -> getResult();
		
	}
	function login($email,$password){
		$data = array('tag'=>'login', 
					  'email' => $email,
					  'password' =>$password 
					);
		$query = http_build_query($data);
		$db_mysql = new Db_mysql($query,'POST');
		return $db_mysql -> getResult();
		
	}

}
?>