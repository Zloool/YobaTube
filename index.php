<?php
require_once 'functions.php';



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>OwnTube</title>
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" href="swag/main.css" type="text/css" />
</head>
<body><?php


$files = scandir("webm/");

foreach($files as $webm)
{
	$existance = checkExist($webm);
	if($existance['cnt']<1)
	{
		addWebm($webm);
	}
}

echo "<table><tr><td valign='top'>";
$result ='';
if (!empty($_GET["id"]))
{
	$result = getWebmbyid($_GET["id"]);
	echo "<video src='http://$hostaddr/$webmaddr/$result[cName]' width='640' autoplay='autoplay' preload controls id='penis'></video>
	<p id='videoname'>$result[cName]</p><p id='videodesc'>$result[cDesk]</p>";
}
echo "</td><td id='list'>";

$webms = getallwebms();
$html="<table><tr>\n";
$it=0;
while ($line = mysqli_fetch_array($webms, MYSQL_ASSOC)) {
if(($it%2)==0) {$html.="\t</tr><tr>\n";}
        $html.="\t\t<td><a href='#' onclick='changetape(`$webmaddr/$line[cName]`,`$line[cId]`,`$hostaddr`)'>$line[cName]</a></td>\n";
	$it++;
}
$html.="</tr></table>\n";
$html.="</td></tr></table>";
echo $html;



// Закрытие
mysqli_close($link);
?>
</body>
</html>
