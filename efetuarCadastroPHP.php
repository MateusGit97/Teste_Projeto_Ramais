<?php

	include "includes/config.php";

	//$txtIdpessoal = $_post['txtIdpessoal'];
	$txtNome = $_POST['txtNome'];
	$cbbArea = $_POST['cbbArea'];
	$cbbCargo = $_POST['cbbCargo'];
	$txtDataadmi = $_POST['txtDataadmi'];
	$txtDataniver = $_POST['txtDataniver'];
	$txtSala = $_POST['txtSala'];
	$txtRamal = $_POST['txtRamal'];
	$txtEmail = $_POST['txtEmail'];
	
	$strSQL2 = "INSERT INTO PESSOA (NOME, DATA_ADIM, DATA_NASC, EMAIL, IDAREA, IDCARGO, RAMAL, SALA) "; 
	$strSQL2 = $strSQL2 . "VALUES('";
	$strSQL2 = $strSQL2 . $txtNome . "', ";
	$strSQL2 = $strSQL2 . "STR_TO_DATE('" . $txtDataadmi . "', '%d/%m/%Y' ),"; 
	$strSQL2 = $strSQL2 . "STR_TO_DATE('" . $txtDataniver . "', '%d/%m/%Y' ), '"; 
	$strSQL2 = $strSQL2 . $txtEmail . "', "; 
	$strSQL2 = $strSQL2 . $cbbArea . ", "; 
	$strSQL2 = $strSQL2 . $cbbCargo . ", "; 
	$strSQL2 = $strSQL2 . $txtRamal . ", '"; 
	$strSQL2 = $strSQL2 . $txtSala . "')";
	echo $strSQL2;
	
	if (mysqli_query($con, $strSQL2)) {
		echo "Cadastrado com sucesso!";
	} else {
		echo "Erro: " . $strSQL2 . "<br>" . mysqli_error($con);
	}
	
	mysqli_close($con);
	
?>