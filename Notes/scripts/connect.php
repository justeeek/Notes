<?php

$dblocation = "localhost";
$dbname = "zametki";
$dbuser = "root";
$dbpasswd = "root";

$mysqli = new mysqli("p:".$dblocation, $dbuser, $dbpasswd, $dbname);
$mysqli->set_charset("utf8");

?>