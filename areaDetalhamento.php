<?php
	include "includes/config.php";
	
	$hddArea = $_POST['hddArea'];
	$strSQL1 = "SELECT IDAREA,DESCRICAO FROM AREA ORDER BY DESCRICAO";
	echo '<OPTION value="0" selected>Selecione</OPTION>';
	
	if($resultado = mysqli_query($con,$strSQL1)){
		while($linha = mysqli_fetch_assoc($resultado)){
			if((int)$hddArea == (int)$linha["IDAREA"]){ 
				echo '<OPTION value="' . $linha["IDAREA"] . '" selected>' . $linha["DESCRICAO"] . '</OPTION>';
			} else {
				echo '<OPTION value="' . $linha["IDAREA"] . '">' . $linha["DESCRICAO"] . '</OPTION>';
			}
			mysqli_close($con);
		}
	}
?>