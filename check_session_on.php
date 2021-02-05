<?php session_start(); ?>

<html>
<head>

<title>IPISO - Verifica usuario</title>
<?php include('load.php');?>
</head>

<body>
<?php 


$login = $_POST['loginentra'];
$senha = $_POST['senhaentra'];
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

	echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Aguarde... Voce sera redirecionado! <meta HTTP-EQUIV='Refresh' CONTENT='5;URL=check.php'>";
	echo "<img src='images/loading.gif' width='32' height='32' />";

	}
}
else
{
	echo "Usuário ou senha ERRADA!!! <br><br>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='5;URL=log_in.php'>";
	// echo '<input type="button" value="voltar" onclick=javascript:window.history.back()>';

}
?>



</body>
</html>