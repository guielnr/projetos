<?php 
	//erros
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//conexao
	$banco = mysqli_connect("localhost", "root", "", "t201_adriel_chamada");
	//$banco = mysqli_connect("localhost", "root", "", "t201_chamada_adriel");
	mysqli_set_charset($banco, "utf8");
	
	//pega valor do post
	$nome = $_POST['nome'];
	
	//query
	$query = "INSERT INTO alunos (nome) VALUES ('$nome')";
	$result = mysqli_query($banco, $query);
	
	//volta para a pagina
	header("Location: http://localhost/Projetos/Cedup/chamada/listaAlunos.php");
?>