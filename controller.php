<?php

require_once 'awsClass.php';

if(isset($_POST['cservice'])){
	$cservice = trim($_POST['cservice']);
}else if(isset($_GET['cservice'])){
	$cservice = trim($_GET['cservice']);
}else{
	Die("No service selected");
}

if(isset($_POST['id'])){
	$id = trim($_POST['id']);
}else if(isset($_GET['id'])){
	$id = trim($_GET['id']);
}

if(isset($_POST['selected'])){
	$selected = $_POST['selected'];
}

$obj = new aws();

switch($cservice){
	case "ListRegions":
		$obj->ListRegions();
		break;
	default:
		echo "inside default block";
}


