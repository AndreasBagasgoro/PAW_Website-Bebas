<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoes_store";

$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection Failed" . $db->connect_eror);
}
?>