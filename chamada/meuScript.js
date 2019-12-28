function coloreFrequencia(){
	var frequencias = document.getElementsByClassName("frequencias");
	
	for(var i = 0; i <= frequencias.length; i++){
		//alert(frequencias[i].innerHTML);
		if(frequencias[i].innerHTML >= 85){
			document.getElementById(i+1).style.color = "green";
		}else{
			if(frequencias[i].innerHTML <= 75){
				document.getElementById(i+1).style.color = "red";
			}else{
				document.getElementById(i+1).style.color = "yellow";
			}
		}
		document.getElementById(i+1).style.borderColor = "white";
	}
}



function validaNome(){
	var textocampo = document.getElementById("campoNome").value;
	
	if(textocampo != ""){
		if (!textocampo.match(/^[ ]+$/)){
			if (textocampo.match(/^[a-zA-Z áÁãÃâÂéÉóÓúÚçÇ]+$/)){
				alert("Deu certo");
				return true;
			}else{
				alert("O campo deve conter apenas letras");
				return false;
			}
		}else{
			alert("Só tem space");
			return false;
		}
	}else{
		alert("O campo está vazio");
		return false;
	}
}
function validaAula(){
	var aula = document.getElementById("campoAula").value;
	var data = document.getElementById("campoData").value
	
	if(data != "" && aula.match(/^[1-5]+$/)){
		return true;
	}else{
		alert("deu ruim");
		return false;
	}
}
function validaFalta(){
	var aulas = document.getElementsByClassName("aulas");
	var faltas = document.getElementsByClassName("campoFalta");
	var certo = 0;
	
	for(var i = 0; i < aulas.length; i++){
		if((faltas[i].value <= aulas[i].innerHTML) && (faltas[i].value >= 0)){
			certo++;
		}else{
			alert("Um ou mais campos foram digitados incorretamente: tente denovo");
			return false;
		}
	}
	if(certo == aulas.length){
		return true;
	}
}













