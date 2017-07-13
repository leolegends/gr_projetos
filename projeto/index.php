<html>
	<head>
		<title>GR Projetos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=600, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="../materialize/css/style.css">
		<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
		<script type="text/javascript" src="../materialize/js/jquery.min.js"></script>
		<script type="text/javascript" src="../materialize/js/config.js"></script>
	</head>
		<body>
			<div class='center'>
				<div class="row container">
					<form method="post" action="visualizar_projeto.php">
					<div class="col m12">
					<label style='font-size: 60px;'>TOKEN</label>
					<input type='password' name='token' style='height: 4cm; font-size: 50px; text-align: center;' required>
					</div>
				</div>
				<div class="row">
					<div class="col m12 s12 center">
						<i class="material-icons" style='font-size: 60px; color: #1976d2;' class='pulse'>fingerprint</i>
					</div>
				</div>
				<div class="row">
					<div class="col m12 s12 center">
						<button class='btn  cyan darken-4' style='color: white'>Verificar Token</button>
					</div>
				</div>
				<div class="row">
					<div class="col m12 s12">
					<p><b>Utilize o seu código de Acesso ao Projeto.</b></p>
					</div>
				</div>
				</form>
			</div>
		</body>
</html>