
<?php
	include "includes/config.php";
	$idpessoa = $_GET['idpessoa'];
	
				$strSQL = "SELECT PES.IDPESSOA, PES.NOME, AR.IDAREA, CAR.IDCARGO, AR.DESCRICAO AS AREA, CAR.DESCRICAO AS CARGO, DATE_FORMAT(PES.DATA_ADIM, '%d/%m/%Y') AS ADIMISSAO, DATE_FORMAT(PES.DATA_NASC, '%d/%m/%Y') AS ANIVERSARIO, PES.SALA, PES.RAMAL, PES.EMAIL "; 
				$strSQL = $strSQL . "FROM (PESSOA PES INNER JOIN AREA AR ON PES.IDAREA = AR.IDAREA) INNER JOIN CARGO CAR ON PES.IDCARGO = CAR.IDCARGO ";
				$strSQL = $strSQL . "WHERE PES.IDPESSOA = " . $idpessoa;
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
<center><h2>Editar</h2></center><br>
<FORM ID="formEditar" NAME="formEditar">
<p>
	<?php if($resultado = mysqli_query($con, $strSQL)){ 
	if($linha = mysqli_fetch_assoc($resultado)){?>
	<INPUT TYPE="hidden" NAME="hddIdpessoal" id="hddIdpessoal" VALUE=<?php echo $linha["IDPESSOA"];?>>
	<INPUT TYPE="hidden" NAME="hddArea" id="hddArea" VALUE=<?php echo $linha["IDAREA"];?>>
	<INPUT TYPE="hidden" NAME="hddCargo" id="hddCargo" VALUE=<?php echo $linha["IDCARGO"];?>>
	Nome: <INPUT TYPE="TEXT" NAME="txtNome" id="txtNome" MAXLENGTH="50" VALUE=<?php echo $linha["NOME"];?>><br><br>
	
	Area: <SELECT ID="cbbAreaEditar" name="cbbAreaEditar">
	
	</SELECT><br><br>
	
	Cargo: <SELECT ID="cbbCargoEditar" name="cbbCargoEditar">
	
	</SELECT><br><br>
	
	Data de Admiss&atilde;o: <INPUT TYPE="TEXT" NAME="txtDataadmi" ID="txtDataadmi" MAXLENGTH="10" VALUE=<?php echo $linha["ADIMISSAO"];?>><br><br>
	
	Data de Anivers&aacute;rio: <INPUT TYPE="TEXT" NAME="txtDataniver" ID="txtDataniver" MAXLENGTH="10" VALUE=<?php echo $linha["ANIVERSARIO"];?>><br><br>
	
	Ramal: <INPUT TYPE="TEXT" NAME="txtRamal" id="txtRamal" VALUE=<?php echo $linha["RAMAL"];?>><br><br>
	
	Sala: <INPUT TYPE="TEXT" NAME="txtSala" id="txtSala" VALUE=<?php echo $linha["SALA"];?>><br><br>
	
	Email: <INPUT TYPE="TEXT" NAME="txtEmail" ID="txtEmail" MAXLENGTH="50" VALUE=<?php echo $linha["EMAIL"];?>><br><br>
	
	<?php }
	} ?>
	<INPUT TYPE="BUTTON" NAME="btnEditar" ID="btnEditar" VALUE="EDITAR">
	<A HREF= "IndexMenu.php" > Voltar </a><br>
	</p>
</FORM>
</DIV>
<DIV CLASS="BAIXO">

</DIV>
</BODY>
</HTML>