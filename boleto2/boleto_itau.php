<?php 
session_start();
include('../load.php');
$pedido = $_GET['numPedido'];

	$sel = "select ped.* as pedido, us.* as usuarios from pedido as ped inner join usuarios as us on ped.idUsPedido = us.idUs  where ped.numPedido = $pedido";
	//$sel = "SELECT * FROM pedido where numPedido = '$pedido'" ;
	$resultado2 = mysql_query($sel,$conexao);


while ($lista = mysql_fetch_array($resultado2)){
$dias_de_prazo_para_pagamento = 5;
$numPedido = $lista['numPedido'];
$nomeUs = $lista['nomeUs']; 
$endereco = $lista['endereco']. ' Numero: '.$lista['numero'].' Bairro: '.$lista['bairro'].'<br>'.' Cidade: '.''.$lista['cidade'].' CEP: '.$lista['CEP'];
$data = $lista['datapedido'];

$totalReceber = $lista['totalReceber']; 
} 
$data_processo = date("d/m/Y", time($data) + ($dias_de_prazo_para_pagamento * 86400));


// ------------------------- DADOS DIN�MICOS DO SEU CLIENTE PARA A GERA��O DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formul�rio c/ POST, GET ou de BD (MySql,Postgre,etc)	//

// DADOS DO BOLETO PARA O SEU CLIENTE

$taxa_boleto = 0;
$data_venc = $data_processo;
$valor_cobrado = $totalReceber; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = $numPedido;  // Nosso numero - REGRA: M�ximo de 8 caracteres!
$dadosboleto["numero_documento"] = $numPedido;	// Num do pedido ou nosso numero
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date($data); // Data de emiss�o do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com v�rgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE


	
$dadosboleto["sacado"] = $nomeUs;
$dadosboleto["endereco1"] = $endereco;
$dadosboleto["endereco2"] = '';

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = "Pagamento de Compra na Loja on line Trator Mape";
$dadosboleto["demonstrativo2"] = "Taxa banc�ria - R$ ".number_format($taxa_boleto, 2, ',', '');
$dadosboleto["demonstrativo3"] = "";
$dadosboleto["instrucoes1"] = "- Sr. Caixa, cobrar multa de 2% ap�s o vencimento";
$dadosboleto["instrucoes2"] = "- Receber at� 10 dias ap�s o vencimento";
$dadosboleto["instrucoes3"] = "";
$dadosboleto["instrucoes4"] = "&nbsp; Emitido pelo sistema Projeto BoletoPhp - www.boletophp.com.br";

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "";
$dadosboleto["valor_unitario"] = "";
$dadosboleto["aceite"] = "";		
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "";


// ---------------------- DADOS FIXOS DE CONFIGURA��O DO SEU BOLETO --------------- //


// DADOS DA SUA CONTA - ITA�
$dadosboleto["agencia"] = "0058"; // Num da agencia, sem digito
$dadosboleto["conta"] = "27479";	// Num da conta, sem digito
$dadosboleto["conta_dv"] = "6"; 	// Digito do Num da conta

// DADOS PERSONALIZADOS - ITA�
$dadosboleto["carteira"] = "175";  // C�digo da Carteira: pode ser 175, 174, 104, 109, 178, ou 157

// SEUS DADOS
$dadosboleto["identificacao"] = "Daniel Catto";
$dadosboleto["cpf_cnpj"] = "222.979.768-95";
$dadosboleto["endereco"] = "rua henrique 1173";
$dadosboleto["cidade_uf"] = "Ribeir�o Preto / sp";
$dadosboleto["cedente"] = "Trator Mape";

// N�O ALTERAR!
include("include/funcoes_itau.php"); 
include("include/layout_itau.php");


$numeroBoleto = $dadosboleto["linha_digitavel"];
$upBoleto = "UPDATE pedido  SET  numeroBoleto = '$numeroBoleto' where numPedido = $numPedido"; 
mysql_query($upBoleto,$conexao);
?>

