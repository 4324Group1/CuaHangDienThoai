<?php 
include_once('src/users.php');
$uid = $_SESSION['user'];
$user = new Users();
$info = $user -> getUserbyID($uid);
$info = json_decode($info,true);
$full_name=$info['name'];
$gender=$info['gender'];
$address=$info['address'];
$phone=$info['phone'];
$email=$info['email'];

$nam='';$nu='';
if($gender == 1) $nam="checked=''";else $nu="checked=''";

function check($crpass,$newpass,$confpass){
	if(strlen($crpass)==0)
	{
       if(strlen($newpass)>0 || strlen($confpass)>0)
       {
       	echo "Bạn vui lòng nhập mật khẩu hiện tại để xác nhận thay đôi mật khẩu!";
       	return false;
       }       	 
    }
    else
    {
       	if($newpass!=$confpass)
       	{
       		echo "Xác nhận mật khẩu mới không khớp nhau!";
       		return false;
       	}
       	else
       	{
       		if(strlen($newpass)<4)
			{
				echo "Mật khẩu phải dài hơn 4 ký tự";
				return false;
			}
       	}

	}

		return true;
}

if(isset($_POST['tag'])){

if(count($_POST) > 0){
if(check($_POST['oldpassword'],$_POST['password'],$_POST['confirmpass'])){
$f =$user -> edituser($_POST);
$result = json_decode($f,true);
$err = 'error_msg'.$result['error'];
echo $result[$err];
}
	
	
}



}


?>