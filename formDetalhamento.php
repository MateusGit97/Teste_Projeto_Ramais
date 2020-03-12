<?php
	include "includes/config.php";
	
	$idpessoa = $_GET['idpessoa']; 
	
	$strSQL = "SELECT PES.NOME, AR.DESCRICAO AS AREA, CAR.DESCRICAO AS CARGO, DATE_FORMAT(PES.DATA_ADIM, '%d/%m/%Y') AS ADIMISSAO, DATE_FORMAT(PES.DATA_NASC, '%d/%m/%Y') AS ANIVERSARIO, PES.SALA, PES.RAMAL, PES.EMAIL "; 
	$strSQL = $strSQL . "FROM (PESSOA PES INNER JOIN AREA AR ON PES.IDAREA = AR.IDAREA) INNER JOIN CARGO CAR ON PES.IDCARGO = CAR.IDCARGO ";
	$strSQL = $strSQL . "WHERE PES.IDPESSOA = " . $idpessoa;
?>
<HTML>
<HEAD>
	<TITLE> Detalhamento </TITLE>
	<LINK REL="STYLESHEET" TYPE="TEXT/CSS" HREF="CSS/menu.css" MEDIA="ALL"/>
</HEAD>
<BODY>
<DIV CLASS="TOPO">
	
</DIV>
<DIV CLASS="ESQUERDA">
	
</DIV>
<DIV CLASS="DIREITA">
	
</DIV>
<DIV CLASS="CENTRO">
<p>
<?php if($resultado = mysqli_query($con, $strSQL)){ 
	if($linha = mysqli_fetch_assoc($resultado)){?>
		Nome: <?php echo $linha["NOME"];?><br>
		Area: <?php echo $linha["AREA"];?><br>
		Cargo: <?php echo $linha["CARGO"];?><br>
		Admissão: <?php echo $linha["ADIMISSAO"];?><br>
		Aniversário: <?php echo $linha["ANIVERSARIO"];?><br>
		Sala: <?php echo $linha["SALA"];?><br>
		Ramal: <?php echo $linha["RAMAL"];?><br>
		Email: <?php echo $linha["EMAIL"];?><br>
		<?php
		mysqli_close($con);
		?><br>
		<A HREF= "IndexMenu.php" > Voltar </a>
	<?php }
	} ?>
</p>
</DIV>
<DIV CLASS="BAIXO">

</DIV>
</BODY>
</HTML>