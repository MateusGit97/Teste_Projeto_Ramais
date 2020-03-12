<?php
	include "includes/config.php";
	
	$strSQL1 = "SELECT IDAREA, DESCRICAO FROM AREA ORDER BY DESCRICAO"; 
	
	if($resultado = mysqli_query($con,$strSQL1))
	{
		echo '<OPTION value="0" selected>Selecione</OPTION>';
	
		While ($linha = mysqli_fetch_assoc($resultado)){
			echo '<OPTION value="' . $linha["IDAREA"] . '">' . $linha["DESCRICAO"] . '</OPTION>';
		}
		
		mysqli_close($con);
	}
?>