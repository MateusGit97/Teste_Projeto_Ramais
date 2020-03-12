<?php
	include "includes/config.php";
	
	$hddIdpessoal = $_POST['hddIdpessoal'];
	$txtNome = $_POST['txtNome'];
	$cbbAreaEditar = $_POST['cbbAreaEditar'];
	$cbbCargoEditar = $_POST['cbbCargoEditar'];
	$txtDataadmi = $_POST['txtDataadmi'];
	$txtDataniver = $_POST['txtDataniver'];
	$txtRamal = $_POST['txtRamal'];
	$txtSala = $_POST['txtSala'];
	$txtEmail = $_POST['txtEmail'];
	
	$strSQL = "UPDATE PESSOA SET NOME = '" . $txtNome . "',";
	$strSQL = $strSQL . "DATA_ADIM = STR_TO_DATE('" . $txtDataadmi . "', '%d/%m/%Y' ),"; 
	$strSQL = $strSQL . "DATA_NASC = STR_TO_DATE('" . $txtDataniver . "', '%d/%m/%Y' ), "; 
	$strSQL = $strSQL . " EMAIL = '" . $txtEmail . "',";
	$strSQL = $strSQL . " IDAREA = " . $cbbAreaEditar . ",";
	$strSQL = $strSQL . " IDCARGO = " . $cbbCargoEditar . ",";
	$strSQL = $strSQL . " RAMAL = " . $txtRamal . ",";
	$strSQL = $strSQL . " SALA = '" . $txtSala . "' ";
	$strSQL = $strSQL . " WHERE IDPESSOA = ". $hddIdpessoal;
	
	if (mysqli_query($con, $strSQL)) {
		echo "Cadastrado com sucesso!";
	} else {
		echo "Erro: " . $strSQL2 . "<br>" . mysqli_error($con);
	}
	
	mysqli_close($con);
?>


