<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

        <?php 


$login = $_SESSION['loginCadastro'];
$senha = $_SESSION['senhaCadastro'];
$data = date('d/m/Y');
$hora = date('H:i:s');

$query = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
$resultado = mysql_query($query,$conexao);

//Executamos o comando
$num = mysql_num_rows($resultado);
if ($num > 0){
	while ($linha = mysql_fetch_array($resultado)){
	$_SESSION['validacodigo'] = $linha['idUs']; 
	$_SESSION['validanome'] = $linha['nomeUs'];
	$_SESSION['validalogin'] = $linha['login']; 
  	$_SESSION['validasenha'] = $linha['senha'];
	$_SESSION['nivelUsuario'] = $linha['nivelUsuario'];
	$_SESSION['diaLogin'] = $data;
	$_SESSION['horaLogin'] = $hora;

	//echo "sessão codigo = " .$_SESSION['validacodigo'];
 	$codigo = $_SESSION['validacodigo'];
	$nivel = $_SESSION['nivelUsuario'];
	$inserir = " INSERT INTO dialogin  VALUES ('$codigo', '$nivel', '$data', '$hora', '', '')";
 	mysql_query($inserir,$conexao);

		}
}
else
{
	echo "Usuário ou senha ERRADA!!! <br><br>";
//	echo "<meta HTTP-EQUIV='Refresh' CONTENT='5;URL=log_in.php'>";
	// echo '<input type="button" value="voltar" onclick=javascript:window.history.back()>';

}
?>

</body>
</html>