<?php
	//conexao ao banco.
	require_once ('conexao.php');

	class controller {

	public $pj_nome;
	public $pj_responsavel;
	public $pj_solicitante;
	public $pj_prazo;
	public $pj_inicio;

	public function __construct($pj_nome, $pj_responsavel, $pj_solicitante, $pj_prazo, $pj_inicio){
		$this->pj_nome = $pj_nome;
		$this->pj_responsavel = $pj_responsavel;
		$this->pj_solicitante = $pj_solicitante;
		$this->pj_prazo = $pj_prazo;
		$this->pj_inicio = $pj_inicio;
	}

	public function RetornaVariaveis(){
		echo $pj_nome . "</br>";
		echo $pj_responsavel. "</br>";
		echo $pj_solicitante . "</br>";
		echo $pj_prazo . "</br>";
		echo $pj_inicio . "</br>";
		
	}

	public function IniciaProjeto($pj_nome, $pj_responsavel, $pj_solicitante, $pj_prazo, $pj_inicio){


		$query = mysqli_query($conexao, ""

		insert into projeto (projeto, responsavel, solicitante, prazo_dias, projeto_status, 
		iniciado, analise, desenvolvendo, corrigindo, aprovado, entregue, pausar_projeto,
		data_inicio) value (
		"$pj_nome", "$pj_responsavel", "$pj_solicitante", 
		$pj_prazo, 1, 0, 0, 0, 0, 0, 0, 0, 
		"2017-12-20"

);


			);

	}


	}


?>