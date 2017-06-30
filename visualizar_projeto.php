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
									<p>Entregue</p>
									<p>01/01/2017</p>
								</div>
							 </div>
						</div>
					</div>
					<div class="row">
						<div class="col m12">
							<center>
							<button class="btn grey darken-4" id="mostrar_comentarios">ver comentários</button>
							<button class="btn green darken-4" id="incluir_comentarios">incluir comentários</button>
							</center>
						</div>
					</div>
					<div id="add_comentario">
				<div class="row">
					<div class="col m12 s12 comentario green darken-4">
						<center>
							<h3>Incluir comentário</h3>
						</center>
					</div>
				</div>
					<div class="container">
						<div class="row">
						<form method="post">
							<div class="col m4">
								<p>Nome:</p>
								<input type="text" name="comentario_nome">
							</div>
						
							<div class="col m4 right">
							<p>Status de Projeto </p>
								<select class="browser-default" name="status_nome">
									<option>123</option>
									<option>321</option>
								</select>
							</div>							
						</div>
						<div class="row">
							<div class="col m10">
								<p>Comentário:</p>
								<textarea name="comentario" class="materialize-textarea"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col m12">
								<button class="btn waves green darken-4" name="incluir_comentario" value="incluir_comentario">Incluir comentário</button>
							</div>
						</form>
						</div>
						</div>
					</div>

				<div id="comentarios">
				<div class="row">
					<div class="col m12 s12 comentario">
						<center>
							<h3>Comentários</h3>
						</center>
					</div>
				</div>

				<div class="container">
				<div class="row">
				<hr>
					<div class="col m4 s12 center">
						<p><i class="material-icons">person_pin</i> Leonardo Ribeiro</p>
						
					</div>
					<div class="col m4 s12 center iniciado">
						<p>Iniciado</p>						
					</div>	
					<div class="col m4 s12 center">
						<p>01/01/2017</p>
						
					</div>				
				</div>
				<hr>
				<div class="row">
					<div class="col m12 s12">
						<p style='font-weight: bold;'>Comentário: </p>
						<label><i class="material-icons">comment</i></label>
						<p>Comentário simples em HTML.</p>
					</div>
				</div>
				<hr>
				</div>

			</div>
			</div>


		</body>
</html>