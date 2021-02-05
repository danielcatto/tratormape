<?php session_start(); 

include('load.php');

	$codigoOut = $_SESSION['validacodigo'];
	$nivel = $_SESSION['nivelUsuario'];
	$idUs = $_SESSION['validacodigo'];
	$_SESSION['validacodigo'] = "";
	$_SESSION['validanome'] = "";  
	$_SESSION['validalogin'] = ""; 
 	$_SESSION['validasenha'] = "";
	$_SESSION['tipousuario'] = '';
	$_SESSION['nivelUsuario'] = 'vis';
	$diaLogin = $_SESSION['diaLogin'];
	$horaLogin =  $_SESSION['horaLogin'];
	$data = date('d/m/Y');
	$hora = date('H:i:s');
	
	
	

	
	$query = "SELECT * FROM dialogin WHERE codigo = '$idUs' and data = '$diaLogin' and hora = '$horaLogin'";
	$resultado = mysql_query($query,$conexao);
	
	//Executamos o comando
	while ($linha = mysql_fetch_array($resultado)) {
		echo $idUser = $linha['codigo'];
	$CKdata = $linha['data'];
	$CKhora = $linha['hora'];
	
	$atualiza = "UPDATE dialogin  SET  dataOut = '$data', horaOut = '$hora' where data = '$CKdata' and hora = '$CKhora'";
				mysql_query($atualiza,$conexao); 
	
	$idUs = '';
	$_SESSION['diaLogin'] = "";
	$_SESSION['horaLogin'] = "";
	
	
	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVocê foi desconectado!!!<img src='images/loading.gif' width='32' height='32' />";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='3;URL=/index.php'>";
	}



?>
