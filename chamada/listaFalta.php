<?php
	//erros
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//conexao
	$banco = mysqli_connect("localhost", "root", "", "t201_adriel_chamada");
	//$banco = mysqli_connect("localhost", "root", "", "t201_chamada_adriel");
	mysqli_set_charset($banco, "utf8");
	
	//pega o nome do aluno selecionado
	$nome = "";
	$nome = $_GET['nome'];
	
	//lista alunos e faltas
	$query="SELECT aulas.data, num_aulas, faltas
			FROM aulas INNER JOIN alunos_aulas
			ON aulas.id = id_aulas
			INNER JOIN alunos ON alunos.id = id_alunos
			WHERE nome = '$nome';";
			
	$aulas = array();
	$result = mysqli_query($banco, $query);
	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$aulas[] = $row;
	}
	$i = 1;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Alteração de faltas</title>
		<link type="text/css" rel="stylesheet" href="http://localhost/Projetos/Cedup/chamada/meuEstilo.css" />
		<link rel="stylesheet" type="text/css" href="meuEstilo.css">
		<script type="text/javascript" src="meuScript.js"></script>
	</head>
	<body>
		<div>
			<br><br><h1 class="centralizado">Alterar faltas de <?= $nome ?></h1>
			<div class="menu centralizado">
				<a href="listaAlunos.php">Listar alunos</a><br><br><br>
			</div>
			<div class="centralizado">
				<form action="updateFaltas.php?nome=<?= $nome ?>" method="post">
					<table>
						<tr>
							<th>Data</th><th>Aulas</th><th>Faltas</th>
						</tr>
						<?php foreach($aulas as $a) : ?>
						<tr>
							<td class="dia"><?=$a['data'] ?></td>	
							<td class="aulas"><?=$a['num_aulas'] ?></td>
							<td><input id="f<?=$i ?>" maxlength="1" class="campoFalta" type="text" name="aula<?=$i ?>" value="<?=$a['faltas'] ?>"></input></td>
						</tr>
						<?php $i++; endforeach?>
					</table>
					<br><input type="submit" value="Salvar" onclick="return validaFalta()">
				</form>
			</div>
		</div>
	</body>
</html>