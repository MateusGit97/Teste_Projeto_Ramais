<?php
	include "includes/config.php";
?>
<HTML lang="pt-br">
<HEAD>
	<TITLE> Consultar </TITLE>
	<LINK REL="STYLESHEET" TYPE="TEXT/CSS" HREF="CSS/menu.css" MEDIA="ALL"/>
	<script language="javascript" src="js/jquery-3.4.1.min.js"></script>
	<script language="javascript" src="js/funcoesJquery.js"></script>
</HEAD>
<BODY>
<DIV CLASS="TOPO">
	
</DIV>
<DIV CLASS="ESQUERDA">

</DIV>
<DIV CLASS="DIREITA">

</DIV>
<DIV CLASS="CENTRO">
	<center><h2> Consulta de Ramais </h2></center>
	
	<FORM ACTION="formResultadobuscaPHP.php" NAME="CONSULTA" ID="CONSULTA" METHOD="POST">
	<p>Nome: <INPUT TYPE="TEXT" NAME="txtNome" id="txtNome"> 
	
	Area: <SELECT ID=cbbArea name=cbbArea>
		
	</SELECT>
	
	Cargo: <SELECT ID=cbbCargo name=cbbCargo>
		
	</SELECT><BR><BR>
	
	<INPUT TYPE = "BUTTON" NAME = "submitBuscar" ID = "submitBuscar" VALUE = "BUSCAR"><br><br> <A HREF= "IndexMenu.php" > Voltar </a>

	<div id="resultado"></div>
	</p></FORM>
</DIV>
<DIV CLASS="BAIXO">
</DIV>
</BODY>
</HTML>