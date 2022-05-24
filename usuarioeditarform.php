<?php

  session_start();
  //Verifica o acesso.
  if(isset($_SESSION["acesso"]) and $_SESSION['acesso']=="Admin"){

  //Faz a leitura do dado passado pelo link.
  $campoid = $_GET["id"];

  //Faz a conexão com o BD.
  require 'acesso/login/conexao.php';

  //Cria o SQL (consulte tudo da tabela usuarios)
  $sql = "SELECT * FROM usuarios WHERE Id = $campoid";

  //Executa o SQL
  $result = $conn->query($sql);

	//Se a consulta tiver resultados
	 if ($result->num_rows > 0) {

  // Cria uma matriz com o resultado da consulta
  $row = $result->fetch_assoc();
  
?>


<?php
	//Se a consulta não tiver resultados  			
	}else{
		echo "<h1>Nenhum resultado foi encontrado.</h1>";
	}
	$conn->close();
    //Se o usuário não tem acesso.
    }else{
        header('Location: index.php'); //Redireciona para o form
    exit; // Interrompe o Script
    }

?> 