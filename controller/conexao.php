<?php

/*
Essa pagina é apenas para conexão ao Banco de dados.
----
Use o MYSQL ou mude as variaveis para outro tipo de SQL.
----
*/
  
  function Conexao(){

  $servidor = 'localhost';
  //defina o servidor.
  $login = 'root';
 //defina o nome do usuario.
  $senha = '***';
//a senha do banco de dados.
  $banco = 'projetos';
// e qual vai ser o banco.
  $conexao = mysqli_connect($servidor,$login,$senha,$banco);
    if (!$conexao) {
      echo "Falha ao conectar ao Banco de Dados";
      die;
    }

    return $conexao;

  }

	

?>