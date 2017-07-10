<?php

require_once ('../controller/autoload.php');

$hoje = date('d') . "/" .date('m') . "/" . date('Y');
$hoje_insert = date('Y') . "-" . date('m') . "-" . date('d');

extract($_REQUEST);

	function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
	
  }

$obj = new Controller($hoje_insert);

$id;

$timeline = $obj->RetornaProjetoAndamento($conexao, $id);


 while($t = mysqli_fetch_array($timeline)){
 	$projeto_id = $t['id_projeto'];
 
 	$iniciado = $t['iniciado'];
 	$data_iniciado = $t['data_iniciado'];

 	$analise = $t['analise'];
 	$data_analise = $t['data_analise'];

 	$desenvolvendo = $t['desenvolvendo'];
 	$data_desenvolvendo = $t['data_desenvolvendo'];

 	$corrigindo = $t['corrigindo'];
 	$data_corrigindo = $t['data_corrigindo'];

 	$aprovado = $t['aprovado'];
 	$data_aprovado = $t['data_aprovado'];

 	$entregue = $t['entregue'];
 	$data_entregue = $t['data_entregue'];


 }

if ($incluir_comentario == "incluir_comentario"){
	$obj->IncluirComentario($conexao, $id, $comentario_nome, $status_nome, $comentarios, $hoje_insert);
}

$view_comentarios = $obj->RetornaComentarios($conexao, $id);

$queue = $obj->VisualizaProjeto($conexao, $id);
	
	if(mysqli_num_rows($queue) == 0){
		echo "<script>
		window.alert('Seu acesso foi sem parametro.');
		top.location='../index.php'

		</script>";
		die;
	}

while($a = mysqli_fetch_array($queue)){

	$projeto = $a['projeto'];
	$responsavel = $a['responsavel'];
	$prazo_dias = $a['prazo_dias'];
	$projeto_status = $a['projeto_status'];


	if($projeto_status == 0){
		$projeto_status = "<b style='color: red;'>Desativado</b>";
	}else{
		$projeto_status = "Ativo";
	}

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
		<body class="corpo">
			<div class="row cadastro_title">
				<div class="col m12 s12">
					<center>
						<h2><a href="../index.php">Gerenciamento de Projetos</a></h2>					
					</center>		
				</div>		
			</div>
			<div class="row prazo">
				<div class="col m12 center">
						<center>
						<!-- Aqui entrara uma regra dos dias -->
							<p id="prazo">Prazo do projeto: <?php echo $prazo_dias; ?> dias</p>
						<!-- Decrementa apenas se for dias uteis -->
						</center>
				</div>	
			</div>
			<div class="container" style="border-style: black;">

			<div class="row">
				<div class="col m5 s12">
					<h5>Projetos - <b><?php echo $projeto; ?></b></h5>
				</div>
				<div class="col m2 s12">
				<center>
				<b>Projeto: <?php echo $projeto_status; ?></b>
					<i class="material-icons" style='font-size: 60px; color: #0d47a1;'>assessment</i>
				</center>
				</div>		
				<div class="col m5 s12">
					<h5>Responsável - <b><?php echo $responsavel; ?></b></h5>
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
						<?php if ($iniciado == 1) { ?>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="iniciado">
									<i class="material-icons" style="font-size: 70px; color: #7cb342; text-shadow: 0px 10px 50px #7cb342;">add_circle</i>
									<p>Iniciado</p>
									<!-- Aqui entra uma variavel -->
									<p><?php echo inverteData($data_iniciado); ?></p>
								</div>
							 </div>
						<?php }
						if ($analise == 1){
						 ?>

							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="analise">
									<i class="material-icons" style="font-size: 70px; color: #01579b; text-shadow: 0px 10px 50px #01579b;">gesture</i>
									<p>Em Análise</p>
									<!-- Aqui entra uma variavel -->
									<p><?php echo inverteData($data_analise);?></p>
								</div>
							 </div>
						<?php } 
						if ($desenvolvendo == 1){
						?>

							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="desenvolvendo">
									<i class="material-icons" style="font-size: 70px; color: #c2185b; text-shadow: 0px 10px 50px #c2185b;">bubble_charts</i>
									<p>Desenvolvendo</p>
									<p><?php echo inverteData($data_desenvolvendo);?> </p>
								</div>
							 </div>
						<?php }
						if ($corrigindo == 1){
						?>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="corrigindo">
									<i class="material-icons" style="font-size: 70px; color: #00e5ff; text-shadow: 0px 10px 50px #00e5ff;">settings</i>
									<p>Corrigindo</p>
									<p><?php echo inverteData($data_corrigindo); ?></p>
								</div>
							 </div>
							 <?php }
							 if ($aprovado == 1){
							  ?>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="aprovado">
									<i class="material-icons" style="font-size: 70px; color: #ffea00; text-shadow: 0px 10px 80px #ffea00;">thumb_up</i>
									<p>Aprovado</p>
									<p><?php echo inverteData($data_aprovado); ?></p>
								</div>
							 </div>
							<?php } 
							if ($entregue == 1){
							?>
							    <div class='col m2 s12 center'>
								<div style="margin-left: 0.5cm;" id="entregue">
									<i class="material-icons" style="font-size: 70px; color:#76ff03; text-shadow: 0px 10px 80px #76ff03;">check_circle</i>
									<!-- se a data de prazo for 
									menor que a data de tempo ok. -->
									<p>Entregue</p>
									<p><?php echo inverteData($data_entregue); ?></p>
								</div>
							 </div>
						<?php } ?>
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
						<form method="post" action='visualizar_projeto.php?id=<?php echo $id; ?>'>
							<div class="col m4">
								<p>Nome:</p>
								<input type="text" name="comentario_nome" required>
							</div>
						
							<div class="col m4 right">
							<p>Status de Projeto </p>
								<select class="browser-default" name="status_nome">
									
								<?php
									$st = $obj->Status($conexao);
									
									while($s = mysqli_fetch_array($st)){

							echo "<option value=".$s['id'].">".$s['status_nome']."</option>";
									
									}

								?>

								</select>
							</div>							
						</div>
						<div class="row">
							<div class="col m10">
								<p>Comentário:</p>
								<textarea name="comentarios" class="materialize-textarea"></textarea required>
							</div>
						</div>
						<div class="row">
							<div class="col m6">
								<button class="btn waves green darken-4" name="incluir_comentario" value="incluir_comentario" id="incluir_comentario_btn" type='submit'>Incluir comentário</button>
							</div>
							<div class='col m6'>
								<p style='color: blue; font-size: 20px; font-weight: bold;' id='alert_comentario'>Comentário Feito!</p>
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
		<?php 

		while($coments = mysqli_fetch_array($view_comentarios)){

			if ($coments['status_nome'] == "Iniciado"){$classe = "iniciado";}
			if ($coments['status_nome'] == "Analise"){$classe = "analise";}
			if ($coments['status_nome'] == "Desenvolvimento"){$classe = "desenvolvimento";}
			if ($coments['status_nome'] == "Corrigindo"){$classe = "corrigindo";}
			if ($coments['status_nome'] == "Aprovado"){$classe = "aprovado";}
			if ($coments['status_nome'] == "Entregue"){$classe = "entregue";}
		?>
				<div class="row">
					<div class="col m4 s12 center">
						<p><i class="material-icons">person_pin</i> <?php echo $coments['nome_comentarista'];?></p>
						
					</div>
					<div class="col m4 s12 center <?php echo $classe; ?>">
						<p><?php echo $coments['status_nome'];?></p>						
					</div>	
					<div class="col m4 s12 center">
						<p><?php echo inverteData($coments['data']); ?></p>
						
					</div>				
				</div>
				<hr>
				<div class="row">
					<div class="col m12 s12">
						<p style='font-weight: bold;'>Comentário: </p>
						<label><i class="material-icons">comment</i></label>
						<p><?php echo $coments['status_comentario']?>.</p>
					</div>
				</div>
				<hr>
		<?php } ?>
				</div>

			</div>
			</div>


		</body>
</html>