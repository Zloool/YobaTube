<?php
require_once 'settings.php';
$link = mysqli_connect($mysqlhost, $dblogin, $dbpass,$dbname)
    or die('Не удалось соединиться: ' . mysqli_error($link));
?>