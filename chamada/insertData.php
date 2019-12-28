<?php 
	//erros
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//conexao
	$banco = mysqli_connect("localhost", "root", "", "t201_adriel_chamada");
	//$banco = mysqli_connect("localhost", "root", "", "t201_chamada_adriel");
	mysqli_set_charset($banco, "utf8");
	
	$data = $_POST["data"];
	$faltas = $_POST["numFalta"];
	
	//query
	$query="INSERT INTO aulas (data, num_aulas) VALUES ('$data', $faltas)";
	$result = mysqli_query($banco, $query);
	
	//volta para a pagina
	header("Location: http://localhost/Projetos/Cedup/chamada/listaAulas.php");
	
?>