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

    for($i = 0; $i < sizeof($lista); $i++){
        if ($lista[$i]["ok"] == 1){
            $lista[$i]["ok"] = "Sim";
        }
        else{
            $lista[$i]["ok"] = "Não";
        }
    }

?>
<!DOCTYPE HTML>
<html>
	<style>
	    table{
	        margin: auto;
	    }
		td, table, th{
	        border:solid 1px;
	    }
	    td, th{
	        padding:5px;
	    }
	    form{
	        margin-left: 35%;
	    }
	    .centralizado, h1{
	        text-align:center;
	    }
	    .sep{
	        margin-top: 30px;
	    }
	    .pequeno{
	        width: 100px;
	    }
	</style>
	<head>
	    <meta charset="utf-8">
		<title>Lista de tarefas</title>
	</head>
	<body>
		<h1>Lista de tarefas</h1>
		<table>
			<th>id</th> <th>Nome da tarefa</th> <th>Ok</th>
			<?php foreach($lista as $l) { ?>
			<tr>
				<td class="centralizado"><?= $l["id_lista"] ?></td><td><?= $l["nome_lista"] ?></td><td href="<?= $l["id_lista"] ?>" class="centralizado"><?= $l["ok"] ?></td>
			</tr>
			<?php } ?>
		</table>
		<form action="cadastrar.php" method="post">
    		<input value="" name="tarefa" type="text" placeholder="Nome da tarefa">
    		<input class="pequeno" value="" name="ok" type="text" placeholder="Ok: 1=sim e 0=não">
    		<input class="sep" type="submit" value="Cadastrar">
        </form>
        <form action="atualizar.php" method="get">
            <input value="" name="tarefa" type="text" placeholder="Nome da tarefa">
            <input class="pequeno" value="" name="ok" type="text" placeholder="Ok: 1=sim e 0=não">
            <input class="sep" type="submit" value="Atualizar">
        </form>
        <form action="deletar.php" method="post">
            <input value="" name="apagar" type="text" placeholder="id">
            <input class="sep" type="submit" value="Apagar">
        </form>
	</body>
</html>