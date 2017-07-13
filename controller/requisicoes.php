<?php


	Class Controller {

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
		echo $this->pj_nome . "</br>";
		echo $this->pj_responsavel. "</br>";
		echo $this->pj_solicitante . "</br>";
		echo $this->pj_prazo . "</br>";
		echo $this->pj_inicio . "</br>";
		
	}

	public function IniciaProjeto($conexao,$pj_nome, $pj_responsavel, $pj_solicitante, $pj_prazo, $pj_inicio, $token){


		$query = mysqli_query($conexao, "
		insert into projeto (projeto, responsavel, solicitante, prazo_dias, projeto_status, 
		iniciado, analise, desenvolvendo, corrigindo, aprovado, entregue, pausar_projeto,
		data_inicio, data_iniciado) value (
		\"$pj_nome\",\"$pj_responsavel\", \"$pj_solicitante\", 
		$pj_prazo, 1, 1, 0, 0, 0, 0, 0, 0, 
		\"$pj_inicio\",\"$pj_inicio\",\"$token\"
		);

		");

		return $query;
	
	}

	public function RetornaProjetos($conexao,$pj_busca){
		$query = mysqli_query($conexao, "

			select id_projeto, projeto, responsavel, prazo_dias, data_inicio, token from projeto
			where projeto like '%$pj_busca%'

			order by data_inicio desc
			"
			);

		return $query;
	}

	public function VerificaToken($conexao,$token){
		
		$query = mysqli_query($conexao, "

			select id_projeto from projeto
			where token = '$token'

			"
			);
		$q = mysqli_num_rows($query);
		
		return $q;
	}

	public static function VisualizaProjeto($conexao, $id){
		$query = mysqli_query($conexao, "
			select id_projeto, projeto, responsavel, 
			prazo_dias, projeto_status, 
			 iniciado, data_iniciado,
			  analise, data_analise,
			  desenvolvendo, data_desenvolvendo,
			  corrigindo, data_corrigindo,
			  aprovado, data_aprovado,
			  entregue, data_entregue
			  from projeto where id_projeto = $id
			");
	
		return $query;

	}

	public static function Status($conexao){
		$query = mysqli_query($conexao, "

			select * from status order by id asc;
			");
		return $query;
	}


	public static function IncluirComentario($conexao, $id, $nome, $status_id, $comentario, $data_comentario){

		$query = mysqli_query($conexao, "
			insert into comentarios (
			id_projeto, nome_comentarista, status_id,
			status_comentario, data
			) value(
			$id, \"$nome\", $status_id, \"$comentario\", \"$data_comentario\"
			);			
			");

		return $query;

	}


	public static function RetornaComentarios($conexao, $id){

		$query = mysqli_query($conexao, "
			select s.id, c.id_projeto, c.nome_comentarista, s.status_nome,
			c.status_comentario, c.data
			 from comentarios c
			left join status s
			on s.id = c.status_id
			where id_projeto = $id

			order by data desc;
			");

		return $query;

	}

	
	public static function RetornaProjetoAndamento($conexao, $id){

		$query = mysqli_query($conexao, "
				select id_projeto, projeto,
				 iniciado, data_iniciado,
				 analise, data_analise,
				 desenvolvendo, data_desenvolvendo,
				 corrigindo, data_corrigindo,
				 aprovado, data_aprovado,
				 entregue, data_entregue
				 from projeto

				 where id_projeto = $id;
			");		
				return $query;
	}

	}


?>