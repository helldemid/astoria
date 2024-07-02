<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'astoria1_cartiges');

$mysql = new mysql(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if($mysql->connect_errno) exit('Error 101');
$mysql->set_charset('utf8');
$mysql->close();



?>