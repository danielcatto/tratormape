<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/trator.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>


<?php
//criado 


 session_start();
include('load.php');

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
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="mobile/mobile.css" rel="stylesheet" type="text/css" media="screen" />
<script language="JavaScript">
function isMobile(){
	var a = navigator.userAgent||navigator.vendor||window.opera;
	if(/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile|o2|opera m(ob|in)i|palm( os)?|p(ixi|re)\/|plucker|pocket|psp|smartphone|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce; (iemobile|ppc)|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a))
		return true;
	else
		return false;
}

/* Exemplo de Chamada da Função */
if (isMobile() == false){
document.write ('<link href="../style.css" rel="stylesheet" type="text/css" media="screen" />	');
	}else {
document.write ('<meta HTTP-EQUIV="refresh" CONTENT="1; URL=http://suba.site88.net/mobile">');
	}
</script>


 
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
 <div id="menuTopo">
<?php if ($_SESSION['nivelUsuario'] == ""){
		include('log_out.php');
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
	$tipo_usuario = 'vis';
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
				<h2><a href="index.php"><br />
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
			<div class="content"><img src="images/img02.jpg" width="999" height="200" alt="" /></div>
		</div>
            <div id="menuBar"> <a href="index.php">Inicio</a> | <!-- InstanceBeginEditable name="MenuBar" -->
            
            
             


&nbsp;<!-- InstanceEndEditable --></div>
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
$sql = "SELECT * FROM produto WHERE id = '$id ' ";
	session_start();
	
	if (!isset($_SESSION['carrinho'])){
		$_SESSION['carrinho'] = array();
	}
	//ADICIONA PRODUTO
	if (isset($_GET['acao'])){
		
		//ADICIONA CARRINHO
		if ($_GET['acao'] == 'add'){
			
			$id = intval($_GET['id']);
			if (!isset($_SESSION['carrinho'][$id])){
				$_SESSION['carrinho'][$id] += 1;
			}else{
				$_SESSION['carrinho'][$id] = 1;
			}
		
		}	
		//REMOVE PRODUTOS
		if ($_GET['acao'] == 'del'){
			$id = intval($_GET['id']);
			if (isset ($_SESSION['carrinho'][$id])){
				unset ($_SESSION['carrinho'][$id]);
				$sub = "";
				$total = "";
				}
			
			}
		//ALTERAR QUANTIDADE
		if ($_GET['acao'] == 'up'){
			if (is_array($_POST['prod'])){
				foreach($_POST['prod'] as $id => $qtd){
					$id = intval($id);
					$qtd = intval($qtd);

		$query = "select * from produtos where id = '$id'";
		$exec = mysql_query($query, $conexao) or die(mysql_error()); 
		$total = mysql_num_rows($exec);
		
		while($data = mysql_fetch_array($exec, MYSQL_ASSOC )) {
		 $verqtd = $data['qtd'];
}
			if ($qtd > $verqtd ){echo '<font color="red" size="5"> quantidade Insuficiente</font> ';}
			else{
						if (!empty($qtd) || $qtd <> 0){
								$_SESSION['carrinho'][$id] = $qtd;
						}else{
							unset($_SESSION['carrinho'][$id]);
							 }
			}
				  }
			
		    }
		  }
	    }
	
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<h3>	Carrinho de Compras</h1>
<form action = "carrinho.php?acao=up" method="post" >
  <thead>
  <tr>
  <td colspan="5"><hr /></td>
</tr>
<tr>

    <td width="49%" ><strong><font size="4">Produto</font></strong></td>
    <td width="16%" ><strong><font size="4">Quantidade</font></strong></td>
    <td width="13%"><strong><font size="4">Preço</font></strong></td>
    <td width="13%"><strong><font size="4">SubTotal</font></strong></td>
    <td width="9%"></td>
   </tr>
  </thead>
  
  
 
      
  <tbody>
  <?php
  
  
  	if (!empty($_SESSION['carrinho'])){
	foreach($_SESSION['carrinho'] as $id => $qtd){
	
			$sql = "SELECT * FROM produtos WHERE id = '$id ' ";
			$qr  = mysql_query($sql) or die (mysql_error());
			$ln = mysql_fetch_assoc($qr);
			
			$nome = $ln['nome'];
			$valor = $ln['valor'];
			$sub = $valor * $qtd ;
			$totalGeral +=  $sub;
			
			
			echo ' <tr>
    				<td>'.$nome.'</td>
    				<td><input type="text" size="3" name="prod['.$id.']"  value = "'.$qtd.'" /> </td>
					<td>'.number_format($valor, 2 , "," , ".").'</td>
    				<td> '.number_format($sub, 2 , "," , ".").'</td>
    				<td><a href="?acao=del&id='.$id.'"> <img src="icones/icon_carrinho_excluir.gif" width="26" height="21" /> </a></td>
  					</tr>';}
					



echo '
		<tr>
			<td colspan="4">Total</td>
			<td colspan="4">'.number_format($totalGeral, 2 , "," , ".").'</td>
		</tr>
			';
	}else{
	echo'
		<tr><td colspan="5">Não há produtos no carrinho</td></tr>
	';	
		
	}

	
$total = 0;

  ?>
  </td>
   
 
  
 	<tr>
    <td colspan="4"><p>&nbsp;
      </p>
      <p>
        <input type="Submit" value = "Atualizar Carrinho" />
      </p>
      <p>
</p></td>
    </tr>
    <td colspan="1"><a href="index.php">Continuar Comprando</a></td>
       <td colspan="4"><a href="checkOut.php">Concluir</a></td>
    </form>
    </tbody>  
    <!--
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  -->
  </tbody>
  </form>
</table>

&nbsp;</p>
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