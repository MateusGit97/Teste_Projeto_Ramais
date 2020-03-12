<?php
	include "includes/config.php";
	
	$strSQL2 = "SELECT IDCARGO,DESCRICAO FROM CARGO ORDER BY DESCRICAO";
	
	if($resultado = mysqli_query($con,$strSQL2))
	{
		echo '<OPTION value="0" selected>Selecione</OPTION>';
		
		While ($linha = mysqli_fetch_assoc($resultado)){
			echo '<OPTION value="' . $linha["IDCARGO"] . '">' . $linha["DESCRICAO"] . '</OPTION>';
		}
		
		mysqli_close($con);
	}	
?>