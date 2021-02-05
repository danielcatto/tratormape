<?php
 $host = $_SERVER['HTTP_HOST'];
if ($host == "localhost" ){
$msg[0] = "Conexão com o banco falhou! local";
$msg[1] = "Não foi possível selecionar o banco de dados! local";

// Fazendo a conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","root","") or mysql_pconnect("http://192.168.1.101") or die($msg[0]);
//mysql_set_charset('utf8');
mysql_select_db("banco",$conexao) or die($msg[1]);
// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
	}

	elseif ($host == "ipiso.no-ip.info" ) {
$conexao = mysql_pconnect("localhost","root","") or die($msg["IPISO"]);
mysql_select_db("banco",$conexao) or die($msg["IPISO"]);
// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML

}


elseif ($host == "suba.site88.net" ) {$msg[0] = "Conexão com o banco falhou! NUVEM";
$msg[1] = "Não foi possível selecionar o banco de dados! NUVEM";
// Fazendo a conexÃ£o com o servidor MySQL
$conexao = mysql_pconnect("mysql1.000webhost.com","a9521238_root","10vinte30") or die($msg["SUBA NUVEM"]);
mysql_select_db("a9521238_banco",$conexao) or die($msg["SUBA BANCO"]);}


else {$msg[0] = "Conexão com o banco falhou! NUVEM";
$msg[1] = "Não foi possível selecionar o banco de dados! NUVEM";
// Fazendo a conexÃ£o com o servidor MySQL
$conexao = mysql_pconnect("localhost","root","") or die($msg[0]);
//mysql_set_charset('utf8');
mysql_select_db("banco",$conexao) or die($msg[1]);}
?>

