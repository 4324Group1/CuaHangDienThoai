<?php
session_start();
include_once('../config.php');
if(isset($_SESSION["user"]) && isset($_SESSION["authority"])){
	session_destroy();//xóa dữ liệu đăng nhập
}

	header("Location: ".$host."index.php");//quay về trang home

?>