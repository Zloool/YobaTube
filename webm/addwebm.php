<?php
require_once '../functions.php';
$files = glob("*.webm");
foreach($files as $webm)
{
	$existance = checkExist($webm);
	if($existance['cnt']<1)
	{
		addWebm($webm);
	}
}
?>
