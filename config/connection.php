<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'healthy_lifestyle';

$conn = mysqli_connect($host, $username, $password, $database);
if(mysqli_connect_errno()) {
    echo 'Error connection';
}
//echo 'Connection complete';
?>