<?php

define('DBHOST', 'localhost');
define('DBUSER', 'id4431671_wisatamalangkota');
define('DBPASS', 'wisatakotamalang111');
define('DBNAME', 'id4431671_belajar');


$dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($dbconnect->connect_error) {
	die('Database Not Connect. Error : ' . $dbconnect->connect_error);
}
