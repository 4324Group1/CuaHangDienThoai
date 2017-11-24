<?php
	include_once('users.php');
	$user = new Users();
	$result = $user -> getAllUser();
	$final_res =json_decode($result, true) ;


	/*
	array(4) 
	{ 
	[0]=> array(6) 
		{
			["uid"]=> string(23) "5a0c18d07dfab9.73241136" 
			["name"]=> string(4) "Hieu" 
			["email"]=> string(15) "admin@gmail.com" 
			["created_at"]=> string(19) "2017-11-15 17:37:04" 
			["updated_at"]=> NULL 
			["mcv"]=> string(1) "2" 
		} 
	[1]=> array(6) 
		{ 
			["uid"]=> string(23) "5a0c1a0398b524.32405735" 
			["name"]=> string(25) "Đặng Thị Thanh Nhàn" 
			["email"]=> string(26) "Dangthithanhnhan@gmail.com" 
			["created_at"]=> string(19) "2017-11-15 17:42:11" 
			["updated_at"]=> NULL 
			["mcv"]=> string(1) "2" 
		} 
	[2]=> array(6) 
		{ 
			["uid"]=> string(23) "5a0c1b0ee56826.30898382" 
			["name"]=> string(20) "Nguyễn Đăng Khoa" 
			["email"]=> string(10) "khoa@g.com" 
			["created_at"]=> string(19) "2017-11-15 17:46:38" 
			["updated_at"]=> NULL 
			["mcv"]=> string(1) "1" 
		} 
	[3]=> array(6) 
		{ 
			["uid"]=> string(23) "5a0d6fd059b9f1.22454736" 
			["name"]=> string(19) "Trần Trung Hiếu" 
			["email"]=> string(20) "tranhieukk@gmail.com" 
			["created_at"]=> string(19) "2017-11-16 18:00:32" 
			["updated_at"]=> NULL ["mcv"]=> string(1) "2" 
		} 
	}
	*/
?>
