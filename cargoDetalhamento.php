<!--#include file="INCLUDES/Conexao.asp"-->
<?php
	include "includes/config.php";
	
	$hddCargo = $_POST["hddCargo"];
	
	$strSQL2 = "SELECT IDCARGO,DESCRICAO FROM CARGO ORDER BY DESCRICAO";
	
	echo '<OPTION value="0" selected>Selecione</OPTION>';
	if($resultado = mysqli_query($con,$strSQL2)){
		While($linha = mysqli_fetch_assoc($resultado)){
			if($hddCargo == $linha["IDCARGO"]){
				echo '<OPTION value="' . $linha["IDCARGO"] . '" selected>' . $linha["DESCRICAO"] . '</OPTION>';
			} else {
				echo '<OPTION value="' . $linha["IDCARGO"] . '">' . $linha["DESCRICAO"] . '</OPTION>';
			}
			mysqli_close($con);
		}
	}
?>