/*
function MostraAlerta(){
	var idpessoal = document.getElementById("txtIdpessoal").value;
	if(idpessoal==""){
		alert('Caixa de texto vazia');
	} else{
		alert('teste de alerta '+idpessoal);
	}
}

function isLetra(p1,form)
{
	var ascii = p1.value.charCodeAt(p1.value.length-1);
	if (!((ascii >=65 && ascii <=90) || (ascii >=97 && ascii <=122) || ( ascii == 32))){
		form.value = form.value.substring(0, form.value.length-1);
		alert('Digite somente letras!');
	}
	
}

function isNumero(p1,form)
{
	var ascii = p1.value.charCodeAt(p1.value.length-1);
	if (!(ascii >=48 && ascii <=57)){
		form.value = form.value.substring(0, form.value.length-1);
		alert('Digite somente numeros!');
		return 0;
	} else {
	return 1;
	}
}

function formatacaoData(p1, form){
	var KeyID = event.keyCode;
	var data =  p1.value.length;
	if((KeyID==8)||(KeyID==46)){
		if((data == 2) || (data == 5)){
		form.value = form.value.substring(0, form.value.length-1);
		}
	}else{
		if ((data == 2) || (data == 5) ){
			if (isNumero(p1, form)){
				form.value = form.value + "/";
			}
		} else{
			isNumero(p1, form);
		}
	} 
}
*/