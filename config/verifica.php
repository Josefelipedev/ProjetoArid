<?php 

require_once "config.php";

$name= $_POST['name'];
$level= $_POST['level'];
$address= $_POST['address'];
$reference_point = $_POST['reference_point'];
$coordinates= $_POST['coordinates'];
$description= $_POST['description'];
$erro= 0;
//Verificação de alguns campos 
if (!empty($name)==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}
if (empty($coordinates)) {
	echo "Favor digitar sua coordenadas.<br>";
	$erro = 1;
}
if (empty($reference_point)) {
	echo "Por favor informei algum ponto de referencia.<br>";
	$erro = 1;
}
//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	header("Location: ../index.php");
	
	include 'insere.php';
}


?>