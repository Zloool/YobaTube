<?php
require_once 'settings.php';
$link = mysqli_connect($mysqlhost, $dblogin, $dbpass,$dbname)
    or die('Не удалось соединиться: ' . mysql_error());
//mysqli_select_db($dbname) or die('Не удалось выбрать базу данных');
?>