<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'timeschedular';

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!isset($_SESSION)) {
    session_start();
}


if (!$connection) {
    echo "Not connected";
}
