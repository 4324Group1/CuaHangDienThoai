
<?php 
if(!isset($_GET['page'])){
	$_GET['page']='profile';
}
switch ($_GET['page']) {

	case 'profile':
		$pageHeader ="Profile";
		$pagedescription="Hồ sơ cá nhân";
		break;
	case 'qlymembers':
		$pageHeader ="Membership management";
		$pagedescription='Quản lý thành viên';
		break;
	case 'editprofile':
		$pageHeader ="Edit profile";
		$pagedescription='Chỉnh sửa hồ sơ';
		break;
	default:
		# code...
		break;
}

if(isset($_SESSION['name']))
{
$name = $_SESSION['name'];
$authority = $_SESSION['authority'];
}
else {
	$name ="No name!!!";
	$authority ='member';
	}
$websitename ="HNKshop"
?>