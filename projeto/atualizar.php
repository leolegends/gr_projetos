<?php

$hoje = date('d') . "/" .date('m') . "/" . date('Y');
$hoje_insert = date('Y') . "-" . date('m') . "-" . date('d');


require_once ('../controller/autoload.php');
$obj = new Controller($hoje_insert);
?>

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
		 	<div class="row">
		 		<div class="col m12 Atualiza_title">
		 			<h2 class='center'>Atualizar Andamento de Projeto</h2>
		 		</div>

		 	</div>
		 	<div class="row">
		 		<div class="container">

				 		<div class="col m4">
				 			<p class='tamanho'>Projeto Selecionado:</br>
				 			<b>(variable Leonardo)</b></p>		
				 		</div>
							<div class="col m4">
							<p class='tamanho'>Status de Projeto </p>
								<select class="browser-default" name="status_nome">
									
								<?php
									$st = $obj->Status($conexao);
									
									while($s = mysqli_fetch_array($st)){

							echo "<option value=".$s['id']."'>".$s['status_nome']."</option>";
									
									}

								?>

								</select>
							</div>	
						<div class="col m4">
				 				<p class='tamanho right'>Data Atualização de Status:</p>
								<p class='tamanho right' style='margin-top: -0.3cm;'><?php echo $hoje; ?></p>		
			 			</div>
		 		</div>
		 	</div>




		</body>
</html>	