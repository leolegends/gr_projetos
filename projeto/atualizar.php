<?php

extract($_REQUEST);

$hoje = date('d') . "/" .date('m') . "/" . date('Y');
$hoje_insert = date('Y') . "-" . date('m') . "-" . date('d');

require_once ('../controller/autoload.php');
$obj = new Controller($hoje_insert);

if ($update == "update"){

$objup = new atualizaProjeto($id, $hoje_insert);

if($status_nome == 1){$objup->ProjetoIniciar($conexao, $id, $hoje_insert); echo "<script>alert('Projeto em status Inicial.');</script>"; }
if($status_nome == 2){$objup->ProjetoAnalise($conexao, $id, $hoje_insert); echo "<script>alert('Projeto em status Analise.');</script>";  }
if($status_nome == 3){$objup->ProjetoDesenvolvendo($conexao, $id, $hoje_insert); echo "<script>alert('Projeto em status Desenvolvendo.');</script>"; }
if($status_nome == 4){$objup->ProjetoCorrigindo($conexao, $id, $hoje_insert); echo "<script>alert('Projeto em status Corrigindo.');</script>"; }
if($status_nome == 5){$objup->ProjetoAprovado($conexao, $id, $hoje_insert); echo "<script>alert('Projeto em status Aprovado.');</script>"; }
if($status_nome == 6){$objup->ProjetoEntregue($conexao, $id, $hoje_insert); echo "<script>alert('Projeto em status Entregue.');</script>"; }



}

$q = $obj->VisualizaProjeto($conexao, $id);

	if(mysqli_num_rows($q) == 0){
		echo "<script>
		alert('Nenhum projeto encontrado.');
		top.location='../index.php';
			</script>
		";
	}

	while($b = mysqli_fetch_array($q)){

		$projeto = $b['projeto'];

	}

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
		 			<h2 class='center'><a href="../index.php">Atualizar Andamento de Projeto</a></h2>
		 		</div>

		 	</div>
		 	<div class="row">
		 		<div class="container">
		 		<form method="post" action='atualizar.php?id=<?php echo $id;?>'>
				 		<div class="col m4">
				 			<p class='tamanho'>Projeto Selecionado:</br>
				 			<b><?php echo $projeto; ?></b></p>		
				 		</div>
							<div class="col m4">
							<p class='tamanho'>Status de Projeto </p>
								<select class="browser-default" name="status_nome">
									
								<?php
									$st = $obj->Status($conexao);
									
									while($s = mysqli_fetch_array($st)){

							echo "<option value=".$s['id'].">".$s['status_nome']."</option>";
									
									}

								?>

								</select>
							</div>	
						<div class="col m4">
				 				<p class='tamanho right'>Data Atualização de Status:</p>
								<p class='tamanho right' style='margin-top: -0.3cm;'><?php echo $hoje; ?></p>		
			 			</div>
		 		</div>

		 		<div class='row'>
		 			<div class="col m12 center altura_div">
		 				<button class="btn  light-blue darken-4" name='update' value='update'>UPDATE</button>
		 			</div>
		 		</div>

		 	</div>


		 	</form>

		</body>
</html>	
