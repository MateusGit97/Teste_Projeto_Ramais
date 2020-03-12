<?php
	include "includes/config.php";
	
	$txtNome = $_POST['txtNome'];
	$cbbArea = $_POST['cbbArea'];
	$cbbCargo = $_POST['cbbCargo'];
	
	$strSQL = "SELECT PES.IDPESSOA, PES.NOME, PES.SALA, PES.RAMAL, AR.DESCRICAO ";  
	$strSQL = $strSQL . " FROM (PESSOA PES ";
	$strSQL = $strSQL . " INNER JOIN AREA AR ON PES.IDAREA = AR.IDAREA)";
	$strSQL = $strSQL . " INNER JOIN CARGO CAR ON PES.IDCARGO = CAR.IDCARGO ";
	$strSQL = $strSQL . " WHERE 1=1 ";
	
	if($txtNome<>""){
		$strSQL = $strSQL . " AND PES.NOME LIKE '" . $txtNome . "%'";
	}	
	if($cbbArea<>0){
		$strSQL = $strSQL . " AND AR.IDAREA=" . $cbbArea;
	}
	
	if($cbbCargo<>0) {
		$strSQL = $strSQL . " AND CAR.IDCARGO=" . $cbbCargo;
	}
?>
<?php
if($resultado = mysqli_query($con, $strSQL)){     		//if (!(rsBusca.EOF))
	
	echo '<center><TABLE BORDER="1">';
	echo '<TR>';
	echo '<TH> Nome </TH>';
	echo '<TH> Ramal </TH>';
	echo '<TH> Sala </TH>';
	echo '<TH> Area </TH>';
	echo '<TH> Detalhamento </TH>';
	echo '<TH> Editar </TH>';
	echo '</TR>';

			$resp="";
			While ($linha = mysqli_fetch_assoc($resultado)){
				$resp = $resp . "<TR>";
				$resp = $resp . "<TD>" . $linha["NOME"] . "</TD>";
				$resp = $resp . "<TD>" . $linha["RAMAL"] . "</TD>";
				$resp = $resp . "<TD>" . $linha["SALA"] . "</TD>";
				$resp = $resp . "<TD>" . $linha["DESCRICAO"] . "</TD>";
				$resp = $resp . "<TD><a href='formDetalhamento.php?idpessoa=" . $linha["IDPESSOA"] . "'>Detalhamento</a></TD>";
				$resp = $resp . "<TD><a href='formEditar.php?idpessoa=" . $linha["IDPESSOA"] . "'>Editar</a></TD>";
				$resp = $resp . "</TR>";
			}
			
	echo $resp;
	echo '</TABLE></center>';
	mysqli_close($con);
}
?>