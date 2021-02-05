<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/trator.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>


<?php
//criado 


 session_start();
include('../../../../../wamp/www/load.php');

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
	
	
	
	
	}
	?>
    
    
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />


<!-- InstanceBeginEditable name="doctitle" -->
<title>Trator Mape</title>
<!-- InstanceEndEditable -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="../../../../../wamp/www/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../../../../../wamp/www/mobile/mobile.css" rel="stylesheet" type="text/css" media="screen" />



 
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
 <div id="menuTopo">
<?php if ($_SESSION['nivelUsuario'] == ""){
		include('../../../../../wamp/www/log_out.php');
		$_SESSION['nivelUsuario'] == "vis";
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='5;URL=../log_in.php'>";
}?>
  
	<!--  foto usuario e saudação -->
    Olá <?php echo $_SESSION['validanome'];?> 
	<!-- fim -->
    
    
<?php  
// montar menu

	if ($_SESSION['nivelUsuario'] =="")
	{
	$tipo_usuario = 'onUser';
		echo "Olá Visitante <a href='../log_in.php'>Entrar</a>";
	}else{
		$tipo_usuario = $_SESSION['nivelUsuario']; 
		$query = "SELECT * FROM menus WHERE tipo_menu = '$tipo_usuario' order by nome_menu";
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
				<h2><a href="../../../../../wamp/www/index.php"><br />
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
			<div class="content"><img src="../../../../../wamp/www/images/img02.jpg" width="999" height="200" alt="" /></div>
		</div>
            <div id="menuBar"> <a href="../../../../../wamp/www/index.php">Inicio</a> | <!-- InstanceBeginEditable name="MenuBar" -->&nbsp;<a href="meusPedidos.php">Meus Pedidos</a> | Detalhe do Pedido <!-- InstanceEndEditable --></div>
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
				<p class="meta"><span class="date"><?php echo "Orlândia ". date(' d/m/Y ');?></span></p>
				<div style="clear: both;">&nbsp;<!-- InstanceBeginEditable name="conteúdo" -->
                  <p>
<?php	

if (($_SESSION['nivelUsuario'] == "") or ($_SESSION['validacodigo'] ==  "") or ($_SESSION['validalogin'] == "") ){
		echo "Você não tem permissão!!! Faça o login";
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='5;URL=../login.php'>";
}else{


$pedido = $_GET['numpedido'];
	$sel = "select ped.* as pedido, us.* as usuarios from pedido as ped inner join usuarios as us on ped.idUsPedido = us.idUs where ped.numPedido = $pedido";
	$resultado2 = mysql_query($sel,$conexao);
?>

<table width="100%" border="1" cellpadding="5" cellspacing="0">
  
    <td colspan="6" bgcolor="#CCCCCC"><h1>Detalhe do pedido</h1></td>
     </tr>
<?php while ($lista = mysql_fetch_array($resultado2)){?>
  <tr>
    <td colspan="2"><strong>Número do Pedido</strong></td>
    <td colspan="2"><?php echo $lista['numPedido']; ?>&nbsp;</td>
    <td width="117"><strong>Data do pedido</strong></td>
    <td><?php echo $lista['datapedido']; ?></td>
  </tr>
  <tr>
    <td width="67"><strong>Codigo</strong></td>
    <td width="70"><?php echo $lista['idUs']; ?></td>
    <td width="95"><strong>Nome Cliente</strong></td>
    <td colspan="3"><?php echo $lista['nomeUs']; ?></td>
      </tr>
  <tr>
    <td colspan="2"><strong>Forma de pagamento</strong></td>
    <td><?php echo $lista['formaPagamento']; ?></td>
     <td width="101"><strong>Juros: <?php echo $juros = $lista['jurototal'].'%'; ?></strong></td>
      <td><strong>juros a.a: 
        <?php if ($juros == 0){ echo '0%';}else { echo $juros / $lista['parcelamento'].'%'; } ?>
      </strong></td>
      <td><strong>Desconto:</strong> <?php echo 'R$ '.number_format($lista['desconto'], 2 , "," , "."); ?></td>
    </tr>
  <tr>
    <td colspan="3"><strong>Parcelamento</strong></td>
    <td><?php echo $lista['parcelamento']; ?>X</td>
    <td><strong>Total do pedido</strong></td>
    <td><?php echo 'R$ '.number_format($lista['totalpedido'], 2 , "," , "."); ?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><strong>Valor da Parcela</strong></td>
    <td><?php echo 'R$ '.number_format($lista['valorparcela'], 2 , "," , "."); ?></td>
    <td><strong>Total Receber</strong></td>
    <td><?php echo 'R$ '.number_format($lista['totalReceber'], 2 , "," , "."); ?></td>
  </tr>
  <tr>
  	<td colspan="6" bgcolor="#FFFF99"><?php echo '<a href="boleto2/boleto_itau.php?numPedido='.$pedido.'">Clique aqui para gerar seu boleto para pagamento</a>';?></td>
  </tr>
  <tr>
  <?php } ?>
</table>



<table width="100%" border="1" cellpadding="5" cellspacing="0">
  
  <tr bgcolor="#CCCCCC">
  	
    <td width="62"><strong>Código</strong></td>
    <td width="355"><strong>Descição</strong></td>
    <td width="58"><strong>Unidade</strong></td>
    <td width="46"><strong>Qdade</strong></td>
    <td width="102"><strong>Valor</strong></td>
    <td width="103"><strong>Total</strong></td>
   
  </tr>

<?php 
$sel2 = "select itens.* as itens_pedido, prod.* as produtos from itens_pedido as itens inner join produtos as prod on itens.idproduto = prod.id where itens.pedidoItens = $pedido";

//$sel2 = "SELECT * FROM itens_pedido where pedidoItens = '$pedido'" ;
	$resultado = mysql_query($sel2,$conexao);
?>

  <?php while ($itens = mysql_fetch_array($resultado)){?>

  <tr>
    <td>  <?php echo $itens['idproduto']; ?></td>
    <td><?php echo $itens['nome']; ?></td>
    <td>PÇ</td>
    <td><?php echo $itens['qtdItens']; ?></td>
    <td><?php echo 'R$ '.number_format($itens['valor'], 2 , "," , "."); ?></td>
    <td><?php echo 'R$ '.number_format($itens['valor'] * $itens['qtdItens'], 2 , "," , ".");?></td>
    </tr><?php } }?>
  
</table>
</p>                 



</p>
                  <div class="entry"></div>
				
			  <!-- InstanceEndEditable --></div>
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
<!-- InstanceEnd --></html>
<?php  mysql_close($conexao); ?>