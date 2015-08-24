<?php
foreach($files as $webm)
{
	$existance = checkExist($webm);
	if($existance['cnt']<1)
	{
		addWebm($webm);
	}
}
?>