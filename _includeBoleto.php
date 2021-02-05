<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php  include('load.php');
echo $numeroBoleto = "161616161616";
$numPedido = '46';
echo ' aqui '.$numPedido;

$upBoleto = "UPDATE pedido SET numeroBoleto = '$numeroBoleto' where numPedido = '$numPedido'"; 
mysql_query($upBoleto,$conexao);
?>
</body>
</html>