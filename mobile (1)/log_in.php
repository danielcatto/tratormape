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
        <div class="chamadas-div"><!-- InstanceBeginEditable name="conteudo" -->
        
		 <p>
                  <form id="form1" method="post" action="check_session_on.php">
					      
                         <table width="264" border="0" align="left" bgcolor="#FFFFFF">

<tr>
          <td colspan="3">Fazer Login</td>
      </tr>
        <tr>
          <td width="15%">Login</td>
          <td colspan="2"><input name="loginentra" type="text" id="loginentra" size="30" maxlength="30" /></td>
        </tr>
        <tr>
          <td>Senha</td>
          <td colspan="2"><input name="senhaentra" type="password" id="senhaentra" size="30" maxlength="30" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="27%"><input type="submit" name="enviarlogin" id="enviarlogin" value="enviar" /></td>
          <td width="58%">&nbsp;&nbsp;
            <input type="reset" name="Reset" id="button" value="Limpar" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><a href="/cadastro_usuario.php">Fazer Cadastro </a></td>
        </tr>
    </table>
					    </form>
                  
                  </p>
		
		<!-- InstanceEndEditable --></div>
        <div class="chamadas-div left17"></div>
    </div>
</div>

</body>
<!-- InstanceEnd --></html>
