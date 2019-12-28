var duracaoDelay = 2000;
var duracaoVolta = 300;
var duracaoAnimacao = 1000;
var cont = 0;

// Animação das transições de imagens
function animacao(){
	if(cont > 3){
		cont = 0;
	}
	if (cont == 0){
		$("#primeiraImagem").delay(duracaoDelay).slideUp(duracaoAnimacao);
		$("#texto1").delay(duracaoDelay).fadeOut(duracaoAnimacao);
	}
	if (cont == 1){
		$("#segundaImagem").delay(duracaoDelay).fadeOut(duracaoAnimacao);
		$("#texto2").delay(duracaoDelay).slideUp(duracaoAnimacao);
	}
	if (cont == 2){
		$("#terceiraImagem").delay(duracaoDelay).slideUp(duracaoAnimacao);
		$("#texto3").delay(duracaoDelay).fadeOut(duracaoAnimacao);
	}
	if (cont == 3){
		$("#primeiraImagem").delay(duracaoDelay).slideDown(duracaoVolta);
		$("#texto1").delay(duracaoDelay).fadeIn(duracaoVolta);
		$("#segundaImagem").delay(duracaoDelay).fadeIn(duracaoVolta);
		$("#texto2").delay(duracaoDelay).slideDown(duracaoVolta);
		$("#terceiraImagem").delay(duracaoDelay).slideDown(duracaoVolta);
		$("#texto3").delay(duracaoDelay).fadeIn(duracaoVolta);
	}
	cont++;
	setTimeout(function(){ animacao() }, duracaoDelay);
}

// Esconde toda a tabela
function esconder() {
	$("#modulo1, #modulo2, #modulo3, #semestre1, #semestre2, #semestre3, #semestre4, #semestre5, #semestre6, #semestre7").hide();
}
function esconderErros() {
	$("#erroNome, #erroNome2, #erroTel, #erroTel2, #erroEmail, #erroEmail2, #erroComent").hide();
}
$(document).ready(function() {
	var $img = $("#imgHover");
	var $propaganda = $("#propaganda");
	var esconderMostrar = [1, 1, 1, 1, 1, 1, 1];
	animacao();
	
	// Aparecer imagem quando passar o mouse
	// durante animação
	$propaganda.mouseover(function(){
		$img.fadeTo("slow", 1);
	});
	$propaganda.mouseout(function(){
		$img.fadeTo("slow", 0);
	});
	
	// Mostra e econde os semestres
	esconder();
	$("#primeiroSemestre").click(function() {
		if(esconderMostrar [0] > 1){
			esconderMostrar [0] = 0;
		}
		if(esconderMostrar [0] == 0) {
			if(esconderMostrar[1] == 1){
				$("#modulo1, #semestre1").hide();
			}else{
				$("#semestre1").hide();
			}
			$("#primeiroSemestre").css("background-color", "#CCCCCC");
		}
		if(esconderMostrar [0] == 1) {
			$("#modulo1, #semestre1").show();
			$("#primeiroSemestre").css("background-color", "#8A8A8A");
		}
		esconderMostrar [0] ++;
	});
	$("#segundoSemestre").click(function() {
		if(esconderMostrar [1] > 1){
			esconderMostrar [1] = 0;
		}
		if(esconderMostrar [1] == 0) {
			if(esconderMostrar[0] == 1){
				$("#modulo1, #semestre2").hide();
			}else{
				$("#semestre2").hide();
			}
			$("#segundoSemestre").css("background-color", "#CCCCCC");
		}
		if(esconderMostrar [1] == 1) {
			$("#modulo1, #semestre2").show();
			$("#segundoSemestre").css("background-color", "#8A8A8A");
		}
		esconderMostrar [1] ++;
	});
	$("#terceiroSemestre").click(function() {
		if(esconderMostrar [2] > 1){
			esconderMostrar [2] = 0;
		}
		if(esconderMostrar [2] == 0) {
			if(esconderMostrar[3] == 1){
				$("#modulo2, #semestre3").hide();
			}else{
				$("#semestre3").hide();
			}
			$("#terceiroSemestre").css("background-color", "#CCCCCC");
		}
		if(esconderMostrar [2] == 1) {
			$("#modulo2, #semestre3").show();
			$("#terceiroSemestre").css("background-color", "#8A8A8A");
		}
		esconderMostrar [2] ++;
	});
	$("#quartoSemestre").click(function() {
		if(esconderMostrar [3] > 1){
			esconderMostrar [3] = 0;
		}
		if(esconderMostrar [3] == 0) {
			if(esconderMostrar[2] == 1){
				$("#modulo2, #semestre4").hide();
			}else{
				$("#semestre4").hide();
			}
			$("#quartoSemestre").css("background-color", "#CCCCCC");
		}
		if(esconderMostrar [3] == 1) {
			$("#modulo2, #semestre4").show();
			$("#quartoSemestre").css("background-color", "#8A8A8A");
		}
		esconderMostrar [3] ++;
	});
	$("#quintoSemestre").click(function() {
		if(esconderMostrar [4] > 1){
			esconderMostrar [4] = 0;
		}
		if(esconderMostrar [4] == 0) {
			if(esconderMostrar[5] == 1){
				$("#modulo3, #semestre5").hide();
			}else{
				$("#semestre5").hide();
			}
			$("#quintoSemestre").css("background-color", "#CCCCCC");
		}
		if(esconderMostrar [4] == 1) {
			$("#modulo3, #semestre5").show();
			$("#quintoSemestre").css("background-color", "#8A8A8A");
		}
		esconderMostrar [4] ++;
	});
	$("#sextoSemestre").click(function() {
		if(esconderMostrar [5] > 1){
			esconderMostrar [5] = 0;
		}
		if(esconderMostrar [5] == 0) {
			if(esconderMostrar[4] == 1){
				$("#modulo3, #semestre6").hide();
			}else{
				$("#semestre6").hide();
			}
			$("#sextoSemestre").css("background-color", "#CCCCCC");
		}
		if(esconderMostrar [5] == 1) {
			$("#modulo3, #semestre6").show();
			$("#sextoSemestre").css("background-color", "#8A8A8A");
		}
		esconderMostrar [5] ++;
	});
	$("#setimoSemestre").click(function() {
		if(esconderMostrar [6] > 1){
			esconderMostrar [6] = 0;
		}
		if(esconderMostrar [6] == 0) {
			$("#semestre7").hide();
			$("#setimoSemestre").css("background-color", "#CCCCCC");
		}
		if(esconderMostrar [6] == 1) {
			$("#semestre7").show();
			$("#setimoSemestre").css("background-color", "#8A8A8A");
		}
		esconderMostrar [6] ++;
	});
	$("#todosSemestres").click(function() {
		esconder();
		$("#modulo1, #modulo2, #modulo3, #semestre1, #semestre2, #semestre3, #semestre4, #semestre5, #semestre6, #semestre7").show();
		$("#primeiroSemestre, #segundoSemestre, #terceiroSemestre, #quartoSemestre, #quintoSemestre, #sextoSemestre, #setimoSemestre").css("background-color", "#8A8A8A");
		for(var i = 0; i < 7; i++){
			esconderMostrar[i] = 0;
		}
	});
	$("#esconderSemestres").click(function() {
		esconder();
		$(".opcoes").css("background-color", "#CCCCCC");
		for(var i = 0; i < 7; i++){
			esconderMostrar[i] = 1;
		}
	});
	// Validações em "Fale Conosco"
	esconderErros();
	$("#enviar").click(function() { 
		esconderErros();
		var testeNome = false;
		var testeNum = false;
		var testeEmail = false;
		var testeComent = false;
		// Verificar campo "Nome"
		for(var i = 0; i < $('#ex1').val().length; i++) {
			var codigo = $('#ex1').val().charCodeAt(i);
			
			// De 'A - Z' e 'a - z'
			if (codigo >= 65 && codigo <= 90 || codigo >= 97 && codigo <= 122){
				testeNome = true;
            }
			// Caracteres especiais
			else if(codigo >= 192 && codigo <= 252){
				testeNome = true;
			}
			// Tecla "Space"
			else if (codigo == 32){
				testeNome = true;
			}else{
				$("#erroNome").show();
				testeNome = false;
			}
		}
		// Verificar campo "Número"
		for(var i = 0; i < $('#ex2').val().length; i++) {
			var codigo2 = $('#ex2').val().charCodeAt(i);
			
			// Números
			if(codigo2 >= 48 && codigo2 <= 57) {
				testeNum = true;
			}else{
				$("#erroTel").show();
				testeNum = false;
			}
		}
		// Verificar campo "E-mail"
		for(var i = 0; i < $('#ex3').val().length; i++) {
			var codigo3 = $('#ex3').val().charCodeAt(i);
			
			// verifica se há "@"
			if(codigo3 == 64) {
				$("#erroEmail").hide();
				testeEmail = true;
			}if (testeEmail == false){
				$("#erroEmail").show();
			}
		}
		// Verificar campo "Comentário"
		if ($('#comment').val().length > 5){
			testeComent = true;
		}
		// caso tamanho do campo for curto
		if ($('#ex1').val().length < 5 && $('#ex1').val().length > 0 
		|| $('#ex2').val().length < 5 && $('#ex2').val().length > 0
		|| $('#ex3').val().length < 5 && $('#ex3').val().length > 0
		|| $('#comment').val().length < 5 && $('#comment').val().length > 0){
			alert("Um dos campos é muito curto!");
			testeNome = false;
			testeNum = false;
			testeEmail = false;
			testeComent = false;
		}
		// caso campo em branco
		if($('#ex1').val().length == 0){ $("#erroNome2").show(); testeNome = false }
		if($('#ex2').val().length == 0){ $("#erroTel2").show(); testeNum = false }
		if($('#ex3').val().length == 0){ $("#erroEmail2").show(); testeEmail = false }
		if($('#comment').val().length == 0){ $("#erroComent").show(); testeComent = false }
		
		// Verifica se os 4 boleanos sao verdadeiros
		if (testeNome, testeNum, testeEmail, testeComent){
			alert("Comentário enviado com sucesso!");
			$('#ex1, #ex2, #ex3, #comment').val("");
		}
	});
});