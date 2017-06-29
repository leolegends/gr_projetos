<?php

extract($_REQUEST);

if ($start == "start"){





}

?>

<html>
	<head>
		<title>GR Projetos</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=600, initial-scale=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="materialize/css/style.css">
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
		<script type="text/javascript" src="materialize/js/jquery.min.js"></script>
		<script type="text/javascript" src="materialize/js/config.js"></script>
	</head>
		<body class="corpo">
			<div class="row cadastro_title">
				<div class="col m12 s12">
					<center>
						<h1><a href="index.php">Gerenciamento de Projetos</a></h1>					
					</center>		
				</div>		
			</div>
			<div class="row prazo">
				<div class="col m12 center">
						<center>
						<!-- Aqui entrara uma regra dos dias -->
							<p id="prazo">Prazo do projeto: 10 dias</p>
						<!-- Decrementa apenas se for dias uteis -->
						</center>
				</div>	
			</div>
			<div class="container" style="border-style: black;">

			<div class="row">
				<div class="col m5 s12">
					<h5>Projeto designado - <b>GR Projetos</b></h5>
				</div>
				<div class="col m2 s12">
				<center>
				<b>Projeto: Ativo</b>
					<i class="material-icons" style='font-size: 60px; color: #0d47a1;'>assessment</i>
				</center>
				</div>		
				<div class="col m5 s12">
					<h5>Responsável - <b>Leonardo Ribeiro</b></h5>
				</div>		
			</div>
			</div>
					<div>
						<div class="row">
							<div class="col m12 s12 title">
								<div class="center">	
									<h3 id="andamento_projeto">Andamento do Projeto</h3>
								</div>
							</div>
						</br>
						</div>
					<div class="container">
						<div class="row altura_div">
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="iniciado">
									<i class="material-icons" style="font-size: 70px; color: #7cb342; text-shadow: 0px 10px 50px #7cb342;">add_circle</i>
									<p>Iniciado</p>
									<!-- Aqui entra uma variavel -->
									<p>01/01/2017</p>
								</div>
							 </div>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="analise">
									<i class="material-icons" style="font-size: 70px; color: #01579b; text-shadow: 0px 10px 50px #01579b;">gesture</i>
									<p>Em Análise</p>
									<!-- Aqui entra uma variavel -->
									<p>01/01/2017</p>
								</div>
							 </div>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="desenvolvendo">
									<i class="material-icons" style="font-size: 70px; color: #c2185b; text-shadow: 0px 10px 50px #c2185b;">bubble_charts</i>
									<p>Desenvolvendo</p>
									<p>01/01/2017</p>
								</div>
							 </div>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="corrigindo">
									<i class="material-icons" style="font-size: 70px; color: #00e5ff; text-shadow: 0px 10px 50px #00e5ff;">settings</i>
									<p>Corrigindo</p>
									<p>01/01/2017</p>
								</div>
							 </div>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="aprovado">
									<i class="material-icons" style="font-size: 70px; color: #ffea00; text-shadow: 0px 10px 80px #ffea00;">thumb_up</i>
									<p>Aprovado</p>
									<p>01/01/2017</p>
								</div>
							 </div>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="entregue">
									<i class="material-icons" style="font-size: 70px; color:#76ff03; text-shadow: 0px 10px 80px #76ff03;">check_circle</i>
									<!-- se a data de prazo for 
									menor que a data de tempo ok. -->
									<p>Entregue no Prazo!</p>
									<p>01/01/2017</p>
								</div>
							 </div>
						</div>
					</div>
			</div>


		</body>
</html>