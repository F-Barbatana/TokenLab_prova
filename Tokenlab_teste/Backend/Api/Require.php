<?php

    $host = "localhost"; //(IP) 
	$usuario = "id12620794_user_token";
	$senha = "gwvVwccNkZUl5gu3";
	$database = "id12620794_token_test";
	
		 //iniciando a conexão com o banco de dados 
		$conx = mysqli_connect($host, $usuario, $senha);
						  
						 //selecionando o banco de dados 
		$database = mysqli_select_db($conx , $database);
						  
		//criando a query de consulta à tabela criada 
		$sql_USER = mysqli_query($conx, " SELECT * FROM usuario") or die( 
		    mysqli_error($conx) //caso haja um erro na consulta 
		 );

		 $sql_Evento = mysqli_query($conx, " SELECT * FROM eventos") or die( 
		    mysqli_error($conx) //caso haja um erro na consulta 
		 );

?>