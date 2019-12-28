<?php
	//erros
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//conexao
	$banco = mysqli_connect("localhost", "root", "", "t201_adriel_chamada");
	//$banco = mysqli_connect("localhost", "root", "", "t201_chamada_adriel");
	mysqli_set_charset($banco, "utf8");
	
	
	//lista aulas
	$query="SELECT aulas.data 'data', num_aulas 'aulas'
			FROM aulas";
	$aulas = array();
	$result = mysqli_query($banco, $query);
	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$aulas[] = $row;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lista de Aulas</title>
		<link type="text/css" rel="stylesheet" href="http://localhost/Projetos/Cedup/chamada/meuEstilo.css"/>
		<link rel="stylesheet" type="text/css" href="meuEstilo.css">
		<script type="text/javascript" src="meuScript.js"></script>
	</head>
	<body>
		<div class="centralizado">
			<br><br><h1 class="centralizado">Aulas</h1>
			<div class="menu centralizado">
				<a href="listaAlunos.php">Listar alunos</a><br><br><br>
			</div>
			<h3>Adicionar nova data</h3>
			<form action="insertData.php" method="post">
				<input type="date" id="campoData" name="data">
				<input type="text" maxlength="1" id="campoAula" style="width: 103px" name="numFalta" placeholder="Numero de aulas" value="">
				<input type="submit" value="Adicionar" onclick="return validaAula()">
			</form>
			<br><br><br>
			<table>
				<tr>
					<th>Data</th><th>Aulas</th>			
				</tr>
				<?php foreach($aulas as $a) : ?>
				<tr>
					<td><?=$a['data'] ?></td><td><?=$a['aulas'] ?></td>
				</tr>
				<?php endforeach?>
			</table>
			<br><br>
		</div>
	</body>
</html>