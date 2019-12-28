<?php 
	//erros
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//conexao
	$banco = mysqli_connect("localhost", "root", "", "t201_adriel_chamada");
	//$banco = mysqli_connect("localhost", "root", "", "t201_chamada_adriel");
	mysqli_set_charset($banco, "utf8");
	
	//pega valor do aluno
	$query = "SELECT nome FROM alunos;";		
	$alunos = array();
	$result = mysqli_query($banco, $query);
	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$alunos[] = $row;
	}
	
	//pega a data
	$query = "SELECT data FROM aulas;";		
	$aulas = array();
	$result = mysqli_query($banco, $query);
	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$aulas[] = $row;
	}
	
	//pega valores do post
	$faltas = array();
	$i = 0;
	foreach($_POST as $p){
		$faltas[$i] = $p;
		$i++;
	}
	
	//pega o nome do aluno
	$parnome = $_GET;
	$nome = $parnome['nome'];
	
	//realiza o update
	for ($i = 0; $i < sizeof($faltas); $i++){
		$aula = $aulas[$i]['data'];
		$query = "CALL atualizaAulasFaltas('$nome', '$aula', $faltas[$i])";
		$result = mysqli_query($banco, $query);
	} 
	
	//volta para a pagina
	header("Location: http://localhost/Projetos/Cedup/chamada/listaAlunos.php");
	
?>