<?php

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'carolinaSPA';

$db = new mysqli($hostname, $username, $password, $dbname);

if($db->connect_error) {
  $error = $db->connect_error;
}