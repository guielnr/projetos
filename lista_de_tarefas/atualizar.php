<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	
	$dbM = mysqli_connect("localhost", "t201_Adriel", "adriel123", "t201_ToDoList_Adriel");
	
	mysqli_set_charset($dbM, "utf8");
	
	$result = mysqli_query($dbM, "SELECT * FROM tb_listaDeTarefas");
	
	$lista = array();
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$lista[] = $row;
    }
	
	$tarefa = $_POST("tarefa");
	$ok = $_POST("ok");
	
	$result2 = mysqli_query($dbM, "UPDATE tb_listaDeTarefas SET nome_lista = $tarefa, ok = $ok WHERE");
	
//	header("Location: http://t201.eliti.com.br/Adriel_de_Negredo/lista_de_tarefas/index.php"); 
	
?>