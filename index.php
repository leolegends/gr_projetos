<html>
	<head>
		<title>GR Projetos</title>
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="materialize/css/style.css">
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
		<script type="text/javascript" src="materialize/js/jquery.min.js"></script>
		<script type="text/javascript" src="materialize/js/config.js"></script>

	</head>
	<body class="corpo">
		<div class="container">
			<div class="row">
				<div class="col m12 center">
					<h1>Cadastro de Projetos <i style="font-size: 50px;"class="material-icons">bubble_chart</i></h1>
				</div>
			</div>
			<form method="get" action="visualizar_projeto.php">
			<div class="row">
				<div class="col m4">
					<label>Nome do Projeto</label>
					<input type="text" name="pj_name" required>
				</div>
				<div class="col m3">
					<label>Reponsável</label>
					<input type="text" name="pj_responsavel" required>
				</div>
				<div class="col m3">
					<label>Solicitante</label>
					<input type="text" name="pj_solicitante" required>
				</div>
				<div class="col m2"
				>
					<label>Prazo do Projeto (dias)</label>
					<input type="number" name="pj_prazo" id="pj_prazo" required>
				</div>
			</div>
			<div class="row">
			<div class="col m12 center">
				<button class="btn waves white" style="color: black;" name="start" value="start">Começar o projeto
				</button>
			</div>
			</div>

			</form>




		</div>
	</body>