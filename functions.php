<?php
require_once 'dbconnect.php';

function getWebmbyid($id){
	global $link;
	$query = "SELECT * FROM twebm WHERE cId = $id";
	$result = $link->query($query) or die('Запрос не удался: ' . mysql_error());
	return mysql_fetch_array($result, MYSQL_ASSOC);
}

function getallwebms()
{
	global $link;
	$query = 'SELECT * FROM `twebm` WHERE `cid` NOT IN (SELECT `cWebmid` FROM ttagtowebm WHERE `ctagid` IN (SELECT `cid` FROM `ttags` where `cHidden`=1))';
	return  $link->query($query);
}

function addWebm($webm){
	global $link;
	$query = "INSERT INTO twebm(cname,cfilename) VALUES ('$webm','$webm')";
	$link->query($query);
}

function checkExist($name){
	global $link;
	$query = "SELECT COUNT(*) AS cnt FROM twebm WHERE cName = '$name'";
	$result = $link->query($query) or die(mysqli_error($link));
	return mysqli_fetch_array($result, MYSQL_ASSOC);
}

function getalltags()
{
	global $link;
	$query = 'SELECT * FROM ttags';
	return  $link->query($query);
}

function addtag($name, $hidden){
	global $link;
	$query = "INSERT INTO ttags(cname,chidden) VALUES ('".$name."','".$hidden."')";
	$link->query($query);
}

function updatetag($id, $name, $hidden){
	global $link;
	$query = "UPDATE `ttags` SET `cName`='".$name."',`cHidden`='".$hidden."' WHERE `cId`='".$id."'";
	$link->query($query);
}

function deletetag($id)
{
	global $link;
		$query = "DELETE FROM `ttags` WHERE `cId`='".$id."'";
		//УДАЛЕНИЕ ВСЕХ ПРИВЯЗОК КАТЕГОРИИ!!!
	$link->query($query);
}
?>