<?php
session_start();

if (!$_SESSION['username']) {
	header('Location: login.php');
}
if (!isset($_SESSION)) session_start();



// Verifica se não há a variável da sessão que identifica o usuário
if ($_SESSION['nivel'] != 1 ) {
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: index.php"); exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
	<script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/projetocss.css">
	<link rel="stylesheet" href="css/projetocss.css">
	<title>Reportei</title>
</head>

<body>

	<header class="cabecalho">
		<h1>Reportei</h1>
	</header>
	<nav class="navegacao">
		<span class="usuario">Usuário: <?= $_SESSION['username'] ?></span>
		<a href="logout.php" class="btn btn-light">Sair</a>

	</nav>


	<main class="principal">
		<div class="conteudo">
			<h1 class="titulotabela">Tabela das Solicitaçãos</h1>

			<table class="table table-bordered table-dark ">

				<tr>
					<th scope="col">ID</th>
					<th scope="col">nome</th>
					<th scope="col">Nivel da solicitação</th>
					<th scope="col">Endereço</th>
					<th scope="col">Ponto de Referência</th>
					<th scope="col">Coordenadas</th>
					<th scope="col">Descrição</th>
				</tr>

				<?php include "config/conn.php";


				$sql_tipo = "SELECT * FROM main_users.solicitation";
				$resulta = $conexao->query($sql_tipo);

				if ($resulta->num_rows > 0) {

					while ($row = $resulta->fetch_assoc()) {

						echo '<tr>';
						echo '<td>' . $row['id_solicitation'] . '</td>';
						echo '<td>' . $row['name'] . '</td>';
						echo '<td>' . $row['level'] . '</td>';
						echo '<td>' . $row['address'] . '</td>';
						echo '<td>' . $row['reference_point'] . '</td>';
						echo '<td>' . $row['coordinates'] . '</td>';
						echo '<td>' . $row['description'] . '</td>';
						echo '</tr>';
					}
				}
				?>
			</table>

		</div>



	</main>
	<footer class="rodape">
		Arid <?= date('Y'); ?>
	</footer>
</body>

</html>