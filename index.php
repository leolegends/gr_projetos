<html>
	<head>
		<title>GR Projetos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=400, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="materialize/css/style.css">
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
		<script type="text/javascript" src="materialize/js/jquery.min.js"></script>
		<script type="text/javascript" src="materialize/js/config.js"></script>

	</head>
	<body class="corpo light-blue darken-4">
			<div class="row">
				<div class="col m12 center cadastro_title">
					<h1 id="title_cadastro">Cadastro de Projetos <i style="font-size: 50px;"class="material-icons">bubble_chart</i></h1>
				</div>
			</div>
		<div class="container altura_div">
			<form method="get" action="visualizar_projeto.php">
			<div class="row">
				<div class="col m4">
					<label class="fonte">Nome do Projeto</label>
					<input class="fonte" type="text" name="pj_name" required>
				</div>
				<div class="col m3">
					<label class="fonte">Reponsável</label>
					<input class="fonte" type="text" name="pj_responsavel" required>
				</div>
				<div class="col m3">
					<label class="fonte">Solicitante</label>
					<input class="fonte" type="text" name="pj_solicitante" required>
				</div>
				<div class="col m2"
				>
					<label class="fonte">Prazo do Projeto (dias)</label>
					<input class="fonte" type="number" name="pj_prazo" id="pj_prazo" maxlenght="3" required>
					<b class="fonte" id="projeto_label"></b>
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
			<div class="row" style="background-color: white; height: 1cm;">
			<center>
				<button id="localizar" class="btn-flat waves" style='color: green;'>Buscar projeto</button>
			</center>
			</div>
			<div class="corpo2">
			<div class='container'>
	<!-- Formulário de busca -->
			<form action="index.php" method="post">
				<div class="row">
					<div class="col m6">
						<label class='fonte'>
							Localizar Projeto:
						</label>
						<input class='fonte' type="text" name="pj_localizar">
					</div>
					<div class='col m6' style="margin-top: 0.6cm;">
						<button class="btn waves blue-grey darken-4">Localizar</button>
					</div>
				</div>
			</form>



		</div>
		</div>
	</body>