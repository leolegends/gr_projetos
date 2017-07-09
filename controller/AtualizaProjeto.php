<?php

class atualizaProjeto {


	private $id;
	private $data;

	public function ProjetoIniciar($conexao, $id, $data){

		$query = mysqli_query($conexao, "
			update projeto 
			set iniciado = 1,
			data_iniciado = '$data'
			where id_projeto = $id;
			");
	}

	public function ProjetoAnalise($conexao, $id, $data){

		$query = mysqli_query($conexao, "
			update projeto 
			set analise = 1,
			data_analise = '$data'
			where id_projeto = $id;
			");
	}

	public function ProjetoDesenvolvendo($conexao, $id, $data){

		$query = mysqli_query($conexao, "
			update projeto 
			set desenvolvendo = 1,
			data_desenvolvendo = '$data'
			where id_projeto = $id;
			");
	}

	public function ProjetoCorrigindo($conexao, $id, $data){

		$query = mysqli_query($conexao, "
			update projeto 
			set corrigindo = 1,
			data_corrigindo = '$data'
			where id_projeto = $id;
			");
	}

	public function ProjetoAprovado($conexao, $id, $data){

		$query = mysqli_query($conexao, "
			update projeto 
			set aprovado = 1,
			data_aprovado = '$data'
			where id_projeto = $id;
			");
	}

	public function ProjetoEntregue($conexao, $id, $data){

		$query = mysqli_query($conexao, "
			update projeto 
			set entregue = 1,
			data_entregue = '$data',
			data_entrega = '$data',
			where id_projeto = $id;
			");
	


	}


}



?>