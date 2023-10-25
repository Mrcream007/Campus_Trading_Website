<?php

$host = 'localhost';
$user = 'root';
$dbpassword = '';
$dbname = 'campus';

$mysqli = new mysqli($host, $user, $dbpassword, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;