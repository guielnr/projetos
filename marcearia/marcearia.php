<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	
	$dbM = mysqli_connect("localhost", "t201_Adriel", "adriel123", "t201_BD_Marcearia_generico");
	
	mysqli_set_charset($dbM, "utf8");
	
	$result = mysqli_query($dbM, "SELECT * FROM NomeCompleto");
	
	$nomes = array();
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	$nomes[] = $row;
    }
?>
<!DOCTYPE HTML>
<html>
	<style>
	    td, table, th{
	        border:solid 1px;
	    }
	    th{
	        background-color:#DDDDDD;
	    }
	    td{
	        height: 30px;
	        padding-left: 10px;
	        padding-right: 10px;
	    }
	    #divida{
	        text-align: right;
	    }
	    #nasc, #genero{
	        text-align: center;
	    }
	</style>
	<head>
		<meta charset="utf-8" />
		<title>CRUD Dívida Marcearia</title>
	</head>
	<body>
		<table>
			<tr>
				<th>Nome Completo</th>
				<th>Endereço</th>
				<th>Bairro</th>
				<th>Cidade</th>
				<th>Data de Nascimento</th>
				<th>Gênero</th>
				<th>Dívida (R$)</th>
			</tr>
			<?php foreach($nomes as $n) { ?>
            <tr>
                <td><?= $n["Nome Completo"] ?></td> <td><?= $n["Endereço"] ?></td><td><?= $n["Bairro"] ?></td>
                <td><?= $n["Cidade"] ?></td><td id="nasc"><?= $n["Data de Nascimento"] ?></td><td id="genero"><?= $n["Gênero"] ?></td>
                <td id="divida"><?= $n["Dívida"] ?></td>
            </tr>
            <?php } ?>
		</table>
	</body>
</html>