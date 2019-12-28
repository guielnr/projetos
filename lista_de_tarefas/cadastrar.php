<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	
	$dbM = mysqli_connect("localhost", "t201_Adriel", "adriel123", "t201_ToDoList_Adriel");
	
	mysqli_set_charset($dbM, "utf8");
	
	$valor1 = $_POST["tarefa"];
	$valor2 = $_POST["ok"];
	
	$result = mysqli_query($dbM, "INSERT INTO `tb_listaDeTarefas`(`nome_lista`, `ok`) VALUES ('$valor1' , $valor2)");
	
	header("Location: http://t201.eliti.com.br/Adriel_de_Negredo/lista_de_tarefas/index.php"); 
	
?>