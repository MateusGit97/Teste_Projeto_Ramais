$(document).ready(function(){
	
	carregaArea();
	carregaCargo();
	areaEditar();
	cargoEditar();
	
	$("#txtIdpessoal").on("keyup",function(){
		var temp = $("#txtIdpessoal").val();
		var aux = $("#txtIdpessoal").val();
		if(isNumero(temp)){
			aux = temp;
		} else{
			aux = temp.substring(0, temp.length-1);
		}
		$("#txtIdpessoal").val(aux);
	});
	
	$("#txtDataadmi").on("keyup",function(){
		var temp = $("#txtDataadmi").val();
		$("#txtDataadmi").val(formatacaoData(temp));
	});
	
	$("#txtDataniver").on("keyup",function(){
		var temp = $("#txtDataniver").val();
		$("#txtDataniver").val(formatacaoData(temp));
	});
	
	$("#submitCadastrar").on("click", function(){
		var email = $("#txtEmail").val();
		var txtDataadmi = $("#txtDataadmi").val();
		var txtDataniver = $("#txtDataniver").val();
		if(validaTudo(email,txtDataadmi,txtDataniver)){
			//var txtIdpessoal = $("#txtIdpessoal").val();
			var txtNome = $("#txtNome").val();
			var cbbArea = $("#cbbArea").val();
			var cbbCargo = $("#cbbCargo").val();
			var txtDataadmi = $("#txtDataadmi").val();
			var txtDataniver = $("#txtDataniver").val();
			var txtSala = $("#txtSala").val();
			var txtRamal = $("#txtRamal").val();
			var txtEmail = $("#txtEmail").val();
			
			$.post( "efetuarCadastroPHP.php", 
			{ txtNome: txtNome, cbbArea: cbbArea, cbbCargo: cbbCargo, txtDataadmi: txtDataadmi, txtDataniver: txtDataniver, txtSala: txtSala, txtRamal: txtRamal, txtEmail: txtEmail})
					.done(function( data ) {
						$("#resultado").html(data);
					})
					.fail(function( data ) {
						$("#resultado").html(data);
					});				
		}
		
	});
	
	$("#submitBuscar").on("click", function(){
		
		var txtNome = $("#txtNome").val();
		var cbbArea = $("#cbbArea").val();
		var cbbCargo = $("#cbbCargo").val();
		$.post( "formResultdadoBuscaPHP.php", 
			{ txtNome: txtNome, cbbArea: cbbArea, cbbCargo: cbbCargo})
					.done(function( data ) {
						$("#resultado").html(data);
					})
					.fail(function( data ) {
						$("#resultado").html(data);
					});	
	});
	
	$("#btnEditar").on("click", function(){
		var email = $("#txtEmail").val();
		var txtDataadmi = $("#txtDataadmi").val();
		var txtDataniver = $("#txtDataniver").val();
		if(validaTudo(email,txtDataadmi,txtDataniver)){
			var hddIdpessoal = $("#hddIdpessoal").val();
			var txtNome = $("#txtNome").val();
			var cbbAreaEditar = $("#cbbAreaEditar").val();
			var cbbCargoEditar = $("#cbbCargoEditar").val();
			var txtDataadmi = $("#txtDataadmi").val();
			var txtDataniver = $("#txtDataniver").val();
			var txtSala = $("#txtSala").val();
			var txtRamal = $("#txtRamal").val();
			var txtEmail = $("#txtEmail").val();
			
			$.post( "formEfetuarEdicao.php", 
			{ hddIdpessoal: hddIdpessoal, txtNome: txtNome, cbbAreaEditar: cbbAreaEditar, cbbCargoEditar: cbbCargoEditar, txtDataadmi: txtDataadmi, txtDataniver: txtDataniver, txtSala: txtSala, txtRamal: txtRamal, txtEmail: txtEmail})
					.done(function( data ) {
						$("#resultado").html(data);
						alert(data);
					})
					.fail(function( data ) {
						$("#resultado").html(data);
					});	
			
		}
	});
});
/*
txtIdpessoal = Request.Form("txtIdpessoal")
	txtNome = Request.Form("txtNome")
	cbbArea = Request.Form("cbbArea")
	cbbCargo = Request.Form("cbbCargo")
	txtDataadmi = Request.Form("txtDataadmi")
	txtDataniver = Request.Form("txtDataniver")
	txtSala = Request.Form("txtSala")
	txtRamal = Request.Form("txtRamal")
	txtEmail = Request.Form("txtEmail")
*/
function isLetra(p1,form)
{
	var ascii = p1.value.charCodeAt(p1.value.length-1);
	if (!((ascii >=65 && ascii <=90) || (ascii >=97 && ascii <=122) || ( ascii == 32))){
		form.value = form.value.substring(0, form.value.length-1);
		alert('Digite somente letras!');
	}
	
}

function isNumero(valor)
{
	str = valor.substring(valor.length-1, valor.length);
	if (!($.isNumeric(str))){
		alert('Digite somente numeros!' + valor);
		return 0;
	}else{
		return 1;
	}
}

function formatacaoData(valor){
	var KeyID = event.keyCode;
	var data =  valor.length;
	if(!((KeyID==8)||(KeyID==46))){

		if ((data == 2) || (data == 5) ){
			if (isNumero(valor)){
				valor = valor + "/";
				return valor;
			} else{
				valor = valor.substring(0, valor.length-1);
				return valor;
			}
		} else{
			if(!(isNumero(valor))){
				valor = valor.substring(0, valor.length-1);
				return valor;
			} else{
				return valor;
			}
			
		}
	} 
}

function validaTudo(email,txtDataadmi,txtDataniver){
	var validado = true;
	var retorno ="";
	if(!(isEmail(email))){
		validado = false;
		retorno = retorno + "\nEmail";
	}
	
	if(!(isData(txtDataadmi))){
		validado = false;
		retorno = retorno + "\nData de admissão";
	}

	if(!(isData(txtDataniver))){
		validado = false;
		retorno = retorno + "\nData de aniversario";
	}
	
	if(validado){
		alert('Envia Form');
		return true;
	}else{
		alert("O(s) campo(s): "+ retorno+"\nforam preenchidos de maneira incorreta");
		return false;
	}
}

function isEmail(strEmail){
	var regex = new RegExp('^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+))*[A-Za-z0-9]+@(([A-Za-z0-9])|([A-Za-z0-9]+\.))+[A-Za-z0-9]{1,63}\.[a-zA-Z]{2,6}$');
    
    if (regex.test(strEmail)){
            return true;
    }
	return false;
}

function isData(strData){
	var regex = new RegExp('^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[012])/[12][0-9]{3}$');
    
    if (regex.test(strData)){
            return true;
    }
	return false;
}

function carregaArea(){
	$.post( "carregaArea.php", { })
	.done(function( data ) {
		$("#cbbArea").html(data);
	})
	.fail(function( data ) {
		$("#cbbArea").html(data);
	});	
}

function carregaCargo(){
	$.post( "carregaCargo.php", { })
	.done(function( data ) {
		$("#cbbCargo").html(data);
	})
	.fail(function( data ) {
		$("#cbbCargo").html(data);
	});	
}

function areaEditar(){
	var valArea = $("#hddArea").val();
	$.post( "areaDetalhamento.php", { hddArea:valArea})
	.done(function( data ) {
		$("#cbbAreaEditar").html(data);
	})
	.fail(function( data ) {
		$("#cbbAreaEditar").html(data);
	});	
}

function cargoEditar(){
	var valCargo = $("#hddCargo").val();
	$.post( "cargoDetalhamento.php", { hddCargo:valCargo})
	.done(function( data ) {
		$("#cbbCargoEditar").html(data);
	})
	.fail(function( data ) {
		$("#cbbCargoEditar").html(data);
	});	
}