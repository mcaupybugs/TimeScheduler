<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'timeschedular';

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
    echo "Not connected";
}
