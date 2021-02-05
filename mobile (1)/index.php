<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/mobile.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>capa mobile</title>
<!-- InstanceEndEditable -->
<link href="mobile.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="global-div">
    <div class="topo-div">
      <h1>Trator Mape</h1>
</div>
    <div class="menu-div"></div>
  <div class="conteudo-div">
    <div class="destaques-div">
    <?php  
// montar menu

if ($_SESSION['nivelUsuario'] =="")
{
	$tipo_usuario = 'vis';
	echo " Visitante <a href='/log_in.php'>Entrar</a>";
}else{
$tipo_usuario = $_SESSION['nivelUsuario']; 
	$query = "SELECT * FROM menus WHERE tipo_menu = '$tipo_usuario'";
	$resultado = mysql_query($query,$conexao);


	while ($menu = mysql_fetch_array($resultado)) 
				{
					echo '<a href="'.$menu['url'].'".php>'.$menu['nome_menu']. "</a> | ";
					
				}
}
// fim montar menu
?>
    
    </div>
        <div class="chamadas-div"><!-- InstanceBeginEditable name="conteudo" -->conteudo<!-- InstanceEndEditable --></div>
        <div class="chamadas-div left17"></div>
    </div>
</div>

</body>
<!-- InstanceEnd --></html>
