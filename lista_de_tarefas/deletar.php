<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	
	$dbM = mysqli_connect("localhost", "t201_Adriel", "adriel123", "t201_ToDoList_Adriel");
	
	mysqli_set_charset($dbM, "utf8");
	
	$id = $_POST["apagar"];
	
	$result = mysqli_query($dbM, "DELETE FROM tb_listaDeTarefas WHERE id_lista = $id");
	
	header("Location: http://t201.eliti.com.br/Adriel_de_Negredo/lista_de_tarefas/index.php"); 