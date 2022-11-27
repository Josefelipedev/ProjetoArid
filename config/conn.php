<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_users";


$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
