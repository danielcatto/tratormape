<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>capa mobile</title>
<!-- TemplateEndEditable -->
<link href="../mobile/mobile.css" rel="stylesheet" type="text/css" media="screen" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
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
        <div class="chamadas-div"><!-- TemplateBeginEditable name="conteudo" -->conteudo<!-- TemplateEndEditable --></div>
        <div class="chamadas-div left17"></div>
    </div>
</div>

</body>
</html>
