<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<?php
//criado 


 session_start();
include('../load.php');

ini_set('default_charset','UTF-8')

?>
<?php $host = $_SERVER['PHP_SELF'];
	switch($host){
	case '/index.php';
	$current[1] = "current_page_item";
	$current[2] = "";
	$current[3] = "";
	$current[4] = "";
	$current[5] = "";
	break;
	case '/sign.php';
	$current[1] = "";
	$current[2] = "current_page_item";
	$current[3] = "";
	$current[4] = "";
	$current[5] = "";
	break;
	case '/venda.php';
	$current[1] = "";
	$current[2] = "";
	$current[3] = "current_page_item";
	$current[4] = "";
	$current[5] = "";
	break;
	
	case '/sobre.php';
	$current[1] = "";
	$current[2] = "";
	$current[3] = "";
	$current[4] = "current_page_item";
	$current[5] = "";
	break;
	case '/contato.php';
	$current[1] = "";
	$current[2] = "";
	$current[3] = "";
	$current[4] = "";
	$current[5] = "current_page_item";
	break;
	case '';
	$current[1] = "current_page_item";
	$current[2] = "";
	$current[3] = "";
	$current[4] = "";
	$current[5] = "";
	break;
	
	
	
	//background: url(images/img01.jpg) repeat;
	}
	?>
    
    
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Trator Mape</title>
<!-- TemplateEndEditable -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>
<body>
 <div id="menuTopo">
<?php if ($_SESSION['nivelUsuario'] == ""){
		include('../log_out.php');
		$_SESSION['nivelUsuario'] == "vis";
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='5;URL=../log_in.php'>";
}?>
 
 
	<!--  foto usuario e saudação -->&nbsp; Olá <?php echo $_SESSION['validanome'];?> 
	<!-- fim -->
    
    
<?php  
// montar menu

if ($_SESSION['nivelUsuario'] =="")
{
	$tipo_usuario = 'vis';
	echo " Visitante <a href='../log_in.php'>Entrar</a>";
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

<div id="wrapper">
	<div id="header-wrapper">
  <div id="header" class="container">
			<div id="logo">
				<h2><a href="../index.php"><br />
			    TratorMape</a></h2>
			</div>
			<div id="menu">
            
			  <ul> 			  
					<li class="<?php echo $current[1]?>"><a href="index.php">Inicio</a></li>
					<li class="<?php echo $current[2]?>"><a href="sign.php">Cadastro</a></li>
					<li class="<?php echo $current[3]?>"><a href="venda.php">Venda</a></li>
					<li class="<?php echo $current[4]?>"><a href="sobre.php">Sobre</a></li>
					<li class="<?php echo $current[5]?>"><a href="contato.php">Contato</a></li>
			 </ul>
		  </div>
	  </div>
		<div id="banner">
			<div class="content"><img src="../images/img02.jpg" width="999" height="200" alt="" /></div>
		</div>
            <div id="menuBar"> <a href="../index.php">Inicio</a> | <!-- TemplateBeginEditable name="MenuBar" -->&nbsp;<!-- TemplateEndEditable --></div>
  </div>
	<!-- end #header -->
    <div id="page">
	<div id="sidebar">
			<ul>
				<li>
					<h2>Categorias</h2>
					<ul>
                    
						<p>
						  <?php $query = "SELECT * FROM categoria order by categoria";
						$resultado = mysql_query($query,$conexao);
		
						while ($menu = mysql_fetch_array($resultado)) 
						{
							echo '<li> <a href="categorias.php?categoria='.$menu['idCategoria'].'">'.$menu['categoria']. "</a></li>";
						}// fim montar menu
						?>   
						  
					  </p>
						<a href="http://www.000webhost.com/" target="_blank"><img src="http://www.000webhost.com/images/120x60_powered.gif" alt="Web Hosting" width="120" height="60" border="0" /></a>
					</ul>
				</li>
			</ul>
		</div>
	
	
		<div id="content">
      
			<div class="post">
				<p class="meta"><span class="date"><?php echo "Orlândia ". date(' d/m/Y ')?></span></p>
				<div style="clear: both;">&nbsp;<!-- TemplateBeginEditable name="conteúdo" -->
				  <p>&nbsp;</p>
                  <div class="entry"></div>
				<p><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
			  <!-- TemplateEndEditable --></div>
					<!-- end #sidebar -->
</div>
	  </div>
		
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>Copyright (c) 2012 Trator Mape.. Design by Daniel CAtto<a href="http://ipiso.no-ip.info"> SUBA Aplicativos Web</a></p>
</div>
<!-- end #footer -->
</body>
</html>
