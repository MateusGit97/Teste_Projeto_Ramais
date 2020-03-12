<?php 
include "includes/config.php";
//Response.Charset="ISO-8859-1" 
?>
<HTML lang="pt-br">
<head>
	<title>Cadastro</title>
	<LINK REL="STYLESHEET" TYPE="TEXT/CSS" HREF="CSS/menu.css" MEDIA="ALL"/>
	<script language="javascript" src="js/jquery-3.4.1.min.js"></script>
	<script language="javascript" src="js/funcoesJavaScript.js"></script>
	<script language="javascript" src="js/funcoesJquery.js"></script>
</head>
<BODY>
<DIV CLASS="TOPO">
	
</DIV>
<DIV CLASS="ESQUERDA">

</DIV>
<DIV CLASS="DIREITA">

</DIV>
<DIV CLASS="CENTRO">

<center><h2>Cadastro de Ramais</h1></center>
<FORM ACTION="efetuarCadastroPHP.php" NAME="CADASTRO" ID="CADASTRO" METHOD="POST">
	<p>
	
	<!--Idpessoal: <INPUT TYPE="TEXT" NAME="txtIdpessoal" ID="txtIdpessoal"><br><br>-->
	
	Nome: <INPUT TYPE="TEXT" NAME="txtNome" id="txtNome" MAXLENGTH="50"><br><br>
	
	Area: <SELECT ID=cbbArea name=cbbArea>
				
	</SELECT><br><br>
	Cargo: <SELECT ID=cbbCargo name=cbbCargo>
			
	</SELECT><br><br>
	
	Data de Admiss&atilde;o: <INPUT TYPE="TEXT" NAME="txtDataadmi" ID="txtDataadmi" MAXLENGTH="10"><br><br>
	
	Data de Anivers&aacute;rio: <INPUT TYPE="TEXT" NAME="txtDataniver" ID="txtDataniver" MAXLENGTH="10"><br><br>
	
	Ramal: <INPUT TYPE="TEXT" NAME="txtRamal" id="txtRamal"><br><br>
	
	Sala: <INPUT TYPE="TEXT" NAME="txtSala" id="txtSala"><br><br>
	Email: <INPUT TYPE="TEXT" NAME="txtEmail" ID="txtEmail" MAXLENGTH="50"><br><br>
	<INPUT TYPE="BUTTON" NAME="submitCadastrar" ID="submitCadastrar" VALUE = "CADASTRAR">
	<INPUT TYPE="RESET" NAME="resetCampos" ID = "resetCampos" VALUE = "LIMPAR"><br><br>
	<INPUT TYPE="BUTTON" NAME="buttonTeste" ID="buttonTeste" VALUE = "TESTE" ONCLICK="MostraAlerta();">
	<A HREF= "IndexMenu.php" > Voltar </a><br>
	<div id="resultado"></div>
	</p>
</FORM>
</DIV>
<DIV CLASS="BAIXO">

</DIV>
</BODY>
</HTML>