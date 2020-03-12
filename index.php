<?php

include "includes/config.php";

$sql = "SELECT * FROM AREA";

if($resultado = mysqli_query($con,$sql))
{
	
	?>
<table width=”600” height=”500”>
 <tr>
      <td>IDPESSOA</td>
      <td>NOME</td>
      <td>E-MAIL</td>
 </tr>  
 
 <?php
		while ($linha = mysqli_fetch_assoc($resultado)) {
 ?>
 <tr>
 <td><?php //echo mysql_result($resultado,"");?></td>
 <td><?php echo $linha["idarea"];?></td>
 <td><?php echo $linha["descricao"];?></td>
 </tr>
 <?php     
		}
		mysqli_close($connect);
		echo '</table>';
 echo 'funcionou';
}
 ?>