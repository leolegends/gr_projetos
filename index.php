<?php

require_once ('controller/requisicoes.php');
require_once ('controller/conexao.php');

$hoje = date('d') . "/" .date('m') . "/" . date('Y');
$hoje_insert = date('Y') . "-" . date('m') . "-" . date('d');

extract($_REQUEST);

$obj = new Controller($name, $responsavel, $solicitante, $prazo, $hoje_insert);


	if($start == "start"){

	$obj->IniciaProjeto(

		$conexao, 
		$name,
		$responsavel, 
		$solicitante, 
		$prazo, 
		$hoje_insert
		);

		echo "<div id='cadastrado'><center><h4 id='esconde'>Projeto: ".$name ." cadastrado com sucesso!</h4></center></div>";
	}

	function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}

?>

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
					<h2 id="title_cadastro">Cadastro de Projetos <i style="font-size: 50px;"class="material-icons">bubble_chart</i></h2>
				</div>
			</div>
		<div class="container altura_div">
			<form method="post" action="index.php">
			<div class="row">
				<div class="col m4">
					<label class="fonte">Nome do Projeto</label>
					<input class="fonte" type="text" name="name" required>
				</div>
				<div class="col m2">
					<label class="fonte">Reponsável</label>
					<input class="fonte" type="text" name="responsavel" required>
				</div>
				<div class="col m2">
					<label class="fonte">Solicitante</label>
					<input class="fonte" type="text" name="solicitante" required>
				</div>
				<div class="col m2"
				>
					<label class="fonte">Prazo do Projeto (dias)</label>
					<input class="fonte" type="number" name="prazo" id="pj_prazo" required>

					<b class="fonte" id="projeto_label"></b>
				</div>
				<div class="col m2"
				>
					<label class="fonte">Inicio do Projeto</label>
					<p class="fonte"><?php echo $hoje; ?></p>
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
						<input class='fonte' type="text" name="projeto_busca" required>
					</div>
					<div class='col m6' style="margin-top: 0.6cm;">
						<button class="btn waves blue-grey darken-4" name="localizar" value="localizar">Localizar</button>
					</div>
				</div>
			</form>


		</div>
		</div>
				<?php

				if ($localizar == "localizar"){
				

				echo "<div class=\"row\" style=\"background-color: white;\">
				<div class=\"col m12\">
				<table class='striped' style='align-text: center;'>
				
				";
				$q = $obj->RetornaProjetos($conexao,$projeto_busca);

				if (mysqli_num_rows($q) == 0){
					echo "<center><h4>Não retornou resultados.</h4></center>";
					die;
				}else{
					echo "						<tr>
						<td><b>Nome do Projeto</b></td>
						<td><b>Responsável pelo Projeto</b></td>
						<td><b>Prazo do projeto</b></td>
						<td><b>Data de Inicio</b></td>
						</tr>";
				}

					while($b = mysqli_fetch_array($q)){
						$dn = $b['data_inicio'];
						



						echo "
						<tr>
						<td><a href='projeto/visualizar_projeto?projeto_id=1'>" . $b['projeto'] . "</a></td>
						<td>". $b['responsavel'] ."</td>
						<td>" . $b['prazo_dias']. " dias </td>
						<td>" . inverteData($dn) ."</td>
						</tr>

						";
					}

				echo "
				</table>
				</div>
				</div>";
				
				}

				?>
	</body>