<?php
	//erros
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//conexao
	//$banco = mysqli_connect("localhost", "root", "", "t201_adriel_chamada");
	$banco = mysqli_connect("199.201.90.12", "t201_Adriel", "adriel123", "t201_chamada_adriel");
	//$banco = mysqli_connect("localhost", "root", "", "t201_chamada_adriel");
	mysqli_set_charset($banco, "utf8");
	
	//lista alunos e faltas
	$query="SELECT nome, sum(faltas) faltas FROM alunos
			LEFT OUTER JOIN alunos_aulas ON alunos.id = id_alunos
			GROUP BY nome
			ORDER BY nome";
	$alunos = array();
	$result = mysqli_query($banco, $query);
	while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$alunos[] = $row;
	}
	
	
	//total de aulas
	$query = "SELECT SUM(num_aulas) aulas FROM aulas";
	$result = mysqli_query($banco, $query);
	$numAulas = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	//calcula frequencia
	for($i = 0; $i < sizeof($alunos); $i++){
        $alunos[$i]['frequencia'] = round(100 - ($alunos[$i]['faltas'] * 100 / $numAulas['aulas']));
    }
	$i = 1;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lista de alunos</title>
		<link type="text/css" rel="stylesheet" href="http://localhost/Projetos/Cedup/chamada/meuEstilo.css" />
		<link rel="stylesheet" type="text/css" href="meuEstilo.css">
		<script type="text/javascript" src="meuScript.js"></script>
	</head>
	<body onload="coloreFrequencia()">
		<div><br><br>
			<h1 class="centralizado">Faltas</h1>
			<div class="menu centralizado">
				<a href="listaAulas.php">Listar aulas</a><br><br><br>
			</div>
			<div class="centralizado">
				<form action="insertAluno.php" method="post">
					<h3>Cadastrar novo aluno</h3>
					<input type="text" maxlength="44" id="campoNome" name="nome" value="" placeholder="Digite o nome"></input>
					<input type="submit" name="enviar" onclick="return validaNome()"></input>
				</form><br><br>
			</div>
			<div class="menu centralizado">
				<p>Clique no nome do aluno para editar suas faltas</p><br>
			</div>
			<div class="centralizado">
				<table>
					<tr>
						<th>Alunos</th><th>Faltas</th><th>Frequência (%)</th>
					</tr>
					<?php foreach ($alunos as $a): ?>
					<tr>
						<td class="alunos"><a class="aluno" href="listaFalta.php?nome=<?=$a['nome']?>"><?=$a['nome']?></a></td>
						<td class="faltas"><?=$a['faltas']?></td>
						<td id ="<?= $i?>" class="frequencias"><?=$a['frequencia']?></td>
					</tr>
					<?php $i++; endforeach?>
				</table><br><br><br><br>
			</div>
		</div>
	</body>
</html>