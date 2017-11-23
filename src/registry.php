<?php
include_once('users.php');
		 $pass=""; 
		 $name="";
		 $email="";
		 $confirmpass ="";

if(isset($_POST["registry"])){
	
	if(!empty($_POST["name"]) && !empty($_POST["pass"]) && !empty($_POST["confirmpass"]) && !empty($_POST["email"])){
		
		 $pass=$_POST["pass"]; 
		 $name=$_POST["name"];
		 $email= $_POST["email"];
		 $confirmpass = $_POST["confirmpass"];
		 if($pass != $confirmpass ){
		 	echo "Please confirm your password by entering it again!";
		 }else if(strlen($pass) <3)
		 {
		 	echo "Your password is too short!";
		 }
		 else{

	$user = new Users();
	$user -> createUser($name,$email,$pass);
	$result = $user -> register();
	$final_res =json_decode($result, true) ;
    if($final_res['success']==0){
	echo $final_res['error_msg'];
} else if ($final_res['success']==1){
	$uid = $final_res["uid"];
	$user = $final_res["user"];
	$name = $user["name"];
	$email = $user["email"];
	$created_at = $user["created_at"];
	$updated_at = $user["updated_at"];
	echo "Successfully added user:<br />Name: ".$name."<br />Email: ".$email."<br />Created at: ".$created_at."<br />";
}
	


		 }
}else {
	echo "Please fill out this form completely.";
		
		if(!empty($_POST["pass"])) $pass=$_POST["pass"]; 
		 if(!empty($_POST["name"]))$name=$_POST["name"];
		 if(!empty($_POST["email"]))$email= $_POST["email"];
		 if(!empty($_POST["confirmpass"])) $confirmpass = $_POST["confirmpass"];

}

  



}
	    

?>