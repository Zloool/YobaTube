<?php
require_once 'settings.php';
require_once 'dbconnect.php';
require_once 'functions.php';



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>OwnTube Category Control</title>
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" href="swag/main.css" type="text/css" />
</head>
<body>
<?php

$tags = getalltags();
echo "<table>";
while ($tag = mysql_fetch_array($tags, MYSQL_ASSOC)) {
    echo "<tr>";
        echo "<td><form method='post' action='handler.php'>
		<input type='text' name='cname' value='".$tag['cName']."'></input>
		<input type='text' name='ñhidden' value='".$tag['cHidden']."'></input>
		<input type='hidden' name='cid' value='".$tag['cId']."'></input>
		<input type='submit' name='action' value='deletetag'></input>
		<input type='submit' name='action' value='changetag'></input></form>
		</td>\n";
    echo "</tr>";
}
echo "<tr>";
        echo "<td><form method='post' action='handler.php'>
		<input type='text' name='cname' value=''></input>
		<input type='text' name='ñhidden' value=''></input>
		<input type='hidden' name='action' value='addtag'></input>
		<input type='submit' value='add'></form>
		</td>\n";
    echo "</tr>";
echo "</table>\n";

?>
</body>
</html>