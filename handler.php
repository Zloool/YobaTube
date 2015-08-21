<?php
require_once 'dbconnect.php';
require_once 'functions.php';
switch($_POST["action"])
{
	case 'changetag':
	updatetag($_POST["cid"], $_POST["cname"], $_POST["ñhidden"]);
	header('Location:catmng.php');
	//response
	break;
	
	case 'addtag':
	addtag($_POST["cname"], $_POST["ñhidden"]);
	header('Location:catmng.php');
	//response
	break;
	
	case 'deletetag':
	deletetag($_POST["cid"]);
	header('Location:catmng.php');
	//response
	break;
	
	
	default:
	break;
}
?>