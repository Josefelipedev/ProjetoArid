<?php 

include "../config/cnc.inc";

echo 'estou aqui';
$name= $_POST['name'];
$level= $_POST['level'];
$address= $_POST['address'];
$reference_point = $_POST['reference_point'];
$coordinates= $_POST['coordinates'];
$description = $_POST['description'];


$sql = "INSERT INTO solicitation(name,level,address,reference_point,coordinates,description) VALUES ";
$sql .= "('$name','$level','$address','$reference_point','$coordinates','$description')"; 


if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();
