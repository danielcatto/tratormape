-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.0.45-community-nt - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-06-26 19:38:28
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for banco
DROP DATABASE IF EXISTS `banco`;
CREATE DATABASE IF NOT EXISTS `banco` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `banco`;


-- Dumping structure for table banco.administrador
DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(10) NOT NULL auto_increment,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.administrador: ~1 rows (approximately)
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
REPLACE INTO `administrador` (`id`, `nome`, `email`, `login`, `senha`, `data`) VALUES
	(1, 'edgar', 'cabrunxo@gmail.com', 'cabrunxo', '123', '2011-10-09 22:35:39');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;


-- Dumping structure for table banco.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(10) NOT NULL auto_increment,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY  (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.categoria: ~6 rows (approximately)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
REPLACE INTO `categoria` (`idCategoria`, `categoria`) VALUES
	(1, 'Colhedeira'),
	(2, 'Tratores'),
	(3, 'Pa Carregadeira'),
	(4, 'Caminhoes'),
	(5, 'Implementos'),
	(6, 'Carretas');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


-- Dumping structure for table banco.cfop
DROP TABLE IF EXISTS `cfop`;
CREATE TABLE IF NOT EXISTS `cfop` (
  `id` int(10) NOT NULL auto_increment,
  `codigoCfop` int(10) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigoCfop`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.cfop: ~0 rows (approximately)
/*!40000 ALTER TABLE `cfop` DISABLE KEYS */;
/*!40000 ALTER TABLE `cfop` ENABLE KEYS */;


-- Dumping structure for table banco.dialogin
DROP TABLE IF EXISTS `dialogin`;
CREATE TABLE IF NOT EXISTS `dialogin` (
  `codigo` int(15) NOT NULL,
  `nivelUsuario` varchar(7) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `dataOut` varchar(50) default NULL,
  `horaOut` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.dialogin: ~33 rows (approximately)
/*!40000 ALTER TABLE `dialogin` DISABLE KEYS */;
REPLACE INTO `dialogin` (`codigo`, `nivelUsuario`, `data`, `hora`, `dataOut`, `horaOut`) VALUES
	(1, 'adm', '20/09/2010', '09:51', '0000-00-00', '00:00:00'),
	(3, 'alu', '20/09/2010', '09:52', '0000-00-00', '00:00:00'),
	(1, 'adm', '21/09/2010', '16:08', '0000-00-00', '00:00:00'),
	(2, 'alu', '22/09/2010', '15:11', '0000-00-00', '00:00:00'),
	(2, 'alu', '22/09/2010', '15:11', '0000-00-00', '00:00:00'),
	(2, 'alu', '22/09/2010', '15:29', '0000-00-00', '00:00:00'),
	(1, 'adm', '22/09/2010', '17:33:56', '0000-00-00', '00:00:00'),
	(1, 'adm', '23/09/2010', '13:26:34', '0000-00-00', '00:00:00'),
	(1, 'adm', '24/09/2010', '10:40:05', '0000-00-00', '00:00:00'),
	(1, 'adm', '24/09/2010', '10:56:26', '0000-00-00', '00:00:00'),
	(2, 'alu', '24/09/2010', '11:11:42', '0000-00-00', '00:00:00'),
	(2, 'alu', '24/09/2010', '11:12:27', '0000-00-00', '00:00:00'),
	(1, 'adm', '24/09/2010', '13:13:50', '0000-00-00', '00:00:00'),
	(5, 'alu', '24/09/2010', '14:43:35', '0000-00-00', '00:00:00'),
	(1, 'adm', '24/09/2010', '14:43:49', '0000-00-00', '00:00:00'),
	(5, 'alu', '24/09/2010', '15:02:56', '0000-00-00', '00:00:00'),
	(5, 'alu', '24/09/2010', '15:03:18', '0000-00-00', '00:00:00'),
	(5, 'alu', '24/09/2010', '15:03:30', '0000-00-00', '00:00:00'),
	(5, 'alu', '24/09/2010', '15:04:17', '0000-00-00', '00:00:00'),
	(5, 'alu', '24/09/2010', '16:32:18', '0000-00-00', '00:00:00'),
	(5, 'alu', '24/09/2010', '16:36:13', '0000-00-00', '00:00:00'),
	(79, 'onU', '26/10/2012', '14:47', '0000-00-00', '00:00:00'),
	(79, 'onUser', '26/10/2012', '14:48', '0000-00-00', '00:00:00'),
	(79, 'onUser', '26/10/2012', '14:52', '0000-00-00', '00:00:00'),
	(79, 'onUser', '26/10/2012', '14:56', '0000-00-00', '00:00:00'),
	(79, 'onUser', '26/10/2012', '14:59', '0000-00-00', '00:00:00'),
	(79, 'onUser', '26/10/2012', '15:19', '0000-00-00', '00:00:00'),
	(79, 'onUser', '26/10/2012', '15:20', '0000-00-00', '00:00:00'),
	(79, 'onUser', '27/10/2012', '20:13', '0000-00-00', '00:00:00'),
	(79, 'onUser', '28/10/2012', '20:22', '0000-00-00', '00:00:00'),
	(79, 'onUser', '28/10/2012', '20:27', '0000-00-00', '00:00:00'),
	(79, 'onUser', '28/10/2012', '20:41', '0000-00-00', '00:00:00'),
	(80, 'onUser', '22/06/2013', '15:39:34', '2013-06-24', '17:27:16'),
	(80, 'onUser', '26/06/2013', '19:36:29', '', '');
/*!40000 ALTER TABLE `dialogin` ENABLE KEYS */;


-- Dumping structure for table banco.dialogout
DROP TABLE IF EXISTS `dialogout`;
CREATE TABLE IF NOT EXISTS `dialogout` (
  `codigoOut` int(10) NOT NULL,
  `nivelUsuario` varchar(7) NOT NULL,
  `dataOut` varchar(10) NOT NULL,
  `horaOut` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.dialogout: ~3 rows (approximately)
/*!40000 ALTER TABLE `dialogout` DISABLE KEYS */;
REPLACE INTO `dialogout` (`codigoOut`, `nivelUsuario`, `dataOut`, `horaOut`) VALUES
	(0, 'vis', '26/10/2012', '15:18'),
	(0, 'vis', '26/10/2012', '15:19'),
	(79, 'vis', '26/10/2012', '15:21');
/*!40000 ALTER TABLE `dialogout` ENABLE KEYS */;


-- Dumping structure for table banco.estoque
DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `idProd` int(10) NOT NULL,
  `nfProd` varchar(50) NOT NULL,
  `dataNf` datetime NOT NULL,
  `qtdProd` int(10) NOT NULL,
  PRIMARY KEY  (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.estoque: ~1 rows (approximately)
/*!40000 ALTER TABLE `estoque` DISABLE KEYS */;
REPLACE INTO `estoque` (`idProd`, `nfProd`, `dataNf`, `qtdProd`) VALUES
	(6, '1', '2011-12-10 09:13:12', 3);
/*!40000 ALTER TABLE `estoque` ENABLE KEYS */;


-- Dumping structure for table banco.fabricante
DROP TABLE IF EXISTS `fabricante`;
CREATE TABLE IF NOT EXISTS `fabricante` (
  `idFabricante` int(10) NOT NULL auto_increment,
  `nomeFabricante` varchar(60) NOT NULL,
  PRIMARY KEY  (`idFabricante`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.fabricante: ~6 rows (approximately)
/*!40000 ALTER TABLE `fabricante` DISABLE KEYS */;
REPLACE INTO `fabricante` (`idFabricante`, `nomeFabricante`) VALUES
	(1, 'Massey Ferguson'),
	(2, 'New Holland'),
	(3, 'JOHN DEERE'),
	(4, 'Valmet'),
	(5, 'Green Horse'),
	(6, 'Case');
/*!40000 ALTER TABLE `fabricante` ENABLE KEYS */;


-- Dumping structure for table banco.formapagamentos
DROP TABLE IF EXISTS `formapagamentos`;
CREATE TABLE IF NOT EXISTS `formapagamentos` (
  `idpf` int(10) NOT NULL auto_increment,
  `formaPagamento` varchar(30) NOT NULL,
  KEY `idpf` (`idpf`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.formapagamentos: ~3 rows (approximately)
/*!40000 ALTER TABLE `formapagamentos` DISABLE KEYS */;
REPLACE INTO `formapagamentos` (`idpf`, `formaPagamento`) VALUES
	(2, 'Boleto Bancário'),
	(3, 'Cartão de Credito Visa'),
	(4, 'Cartão de Credito MastarCard');
/*!40000 ALTER TABLE `formapagamentos` ENABLE KEYS */;


-- Dumping structure for table banco.itens_pedido
DROP TABLE IF EXISTS `itens_pedido`;
CREATE TABLE IF NOT EXISTS `itens_pedido` (
  `pedidoItens` int(10) NOT NULL,
  `idproduto` int(10) NOT NULL,
  `qtdItens` decimal(5,0) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  KEY `FK_itens_pedido_produtos` (`idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.itens_pedido: ~0 rows (approximately)
/*!40000 ALTER TABLE `itens_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `itens_pedido` ENABLE KEYS */;


-- Dumping structure for table banco.juros
DROP TABLE IF EXISTS `juros`;
CREATE TABLE IF NOT EXISTS `juros` (
  `juros` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.juros: ~1 rows (approximately)
/*!40000 ALTER TABLE `juros` DISABLE KEYS */;
REPLACE INTO `juros` (`juros`) VALUES
	(0.99);
/*!40000 ALTER TABLE `juros` ENABLE KEYS */;


-- Dumping structure for table banco.menus
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `num_menu` int(10) NOT NULL auto_increment,
  `nome_menu` varchar(20) NOT NULL,
  `tipo_menu` varchar(6) NOT NULL,
  `url` varchar(30) NOT NULL,
  PRIMARY KEY  (`num_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.menus: ~7 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
REPLACE INTO `menus` (`num_menu`, `nome_menu`, `tipo_menu`, `url`) VALUES
	(1, 'Entre com sua conta', 'vis', '../log_in.php'),
	(2, 'Carrinho', 'vis', '../carrinho.php'),
	(3, 'Carrinho', 'onUser', '../carrinho.php'),
	(4, 'Meus Pedidos', 'onUser', '../meusPedidos.php'),
	(5, 'Meu Cadastro', 'onUser', '../userChange.php'),
	(6, 'Dicas', 'onUser', '../dicas.php'),
	(7, 'Sair', 'onUser', '../log_out.php');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;


-- Dumping structure for table banco.parcelamento
DROP TABLE IF EXISTS `parcelamento`;
CREATE TABLE IF NOT EXISTS `parcelamento` (
  `idPar` int(10) NOT NULL,
  `numpar` varchar(30) NOT NULL,
  `parcelamento` varchar(60) NOT NULL,
  `juros` varchar(10) NOT NULL,
  KEY `FK_parcelamento_formapagamentos` (`idPar`),
  CONSTRAINT `FK_parcelamento_formapagamentos` FOREIGN KEY (`idPar`) REFERENCES `formapagamentos` (`idpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.parcelamento: ~13 rows (approximately)
/*!40000 ALTER TABLE `parcelamento` DISABLE KEYS */;
REPLACE INTO `parcelamento` (`idPar`, `numpar`, `parcelamento`, `juros`) VALUES
	(2, '1', 'Vista (10% desconto)', '0'),
	(3, '1', 'Cartão Visa - 1 vez sem juros', '0'),
	(3, '2', 'Cartão Visa - 2 vezes sem juro', '0'),
	(3, '3', 'Cartão Visa - 3 vezes sem juro', '0'),
	(3, '4', 'Cartão Visa - 4 vezes com juros (1,9)', '0'),
	(3, '6', 'Cartão Visa - 6 vezes com juros (1,9)', '0'),
	(4, '1', 'Cartão MasterCard - 1 Vez sem juros', '0'),
	(4, '3', 'Cartão MasterCard - 3 Vezes sem juros', '0'),
	(4, '4', 'Cartão MasterCard - 4 Vezes com juros', '0'),
	(4, '5', 'Cartão MasterCard - 5 Vezes com juros', '0'),
	(4, '2', 'Cartão MasterCard - 2 Vezes sem juros', '0'),
	(4, '6', 'Cartão MasterCard - 6 Vezes com juros ', '0'),
	(3, '5', 'Cartão Visa - 5 vezes com juros', '0');
/*!40000 ALTER TABLE `parcelamento` ENABLE KEYS */;


-- Dumping structure for table banco.pdapecas
DROP TABLE IF EXISTS `pdapecas`;
CREATE TABLE IF NOT EXISTS `pdapecas` (
  `codigo` int(12) NOT NULL auto_increment,
  `codigoIta` varchar(12) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `qtd` int(3) NOT NULL,
  PRIMARY KEY  (`codigoIta`),
  KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.pdapecas: ~2 rows (approximately)
/*!40000 ALTER TABLE `pdapecas` DISABLE KEYS */;
REPLACE INTO `pdapecas` (`codigo`, `codigoIta`, `descricao`, `qtd`) VALUES
	(2, '2010J2523018', 'CJ MOTHERBOARD ITAUTEC', 1),
	(3, '470000000820', 'IMPRESSORA HIBRIDA PR', 1);
/*!40000 ALTER TABLE `pdapecas` ENABLE KEYS */;


-- Dumping structure for table banco.pedido
DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `numPedido` int(10) NOT NULL auto_increment,
  `idUsPedido` int(11) NOT NULL,
  `formaPagamento` int(11) NOT NULL,
  `parcelamento` int(11) NOT NULL,
  `valorparcela` decimal(10,2) NOT NULL,
  `valorJuros` decimal(10,2) NOT NULL,
  `totalpedido` decimal(10,2) NOT NULL,
  `datapedido` date NOT NULL,
  `horapedido` time NOT NULL,
  `jurototal` varchar(5) NOT NULL,
  `titularCartao` varchar(30) NOT NULL,
  `numeroCartao` varchar(12) NOT NULL,
  `codigoCartao` varchar(3) NOT NULL,
  `validadeCartao` varchar(5) NOT NULL,
  KEY `numPedido` (`numPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.pedido: ~0 rows (approximately)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;


-- Dumping structure for table banco.produtos
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) NOT NULL auto_increment,
  `idfabri` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `categoria` int(10) NOT NULL,
  `fabricante` int(10) NOT NULL,
  `qtd` int(10) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `destaque` varchar(3) NOT NULL,
  `lancamento` varchar(3) NOT NULL,
  `caminho` varchar(50) NOT NULL,
  `imagem1` varchar(100) NOT NULL,
  `imagem2` varchar(100) NOT NULL,
  `imagem3` varchar(100) NOT NULL,
  `dataUpdate` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_produtos_categoria` (`categoria`),
  KEY `FK_produtos_fabricante` (`fabricante`),
  CONSTRAINT `FK_produtos_categoria` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`idCategoria`),
  CONSTRAINT `FK_produtos_fabricante` FOREIGN KEY (`fabricante`) REFERENCES `fabricante` (`idFabricante`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.produtos: ~2 rows (approximately)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
REPLACE INTO `produtos` (`id`, `idfabri`, `nome`, `descricao`, `categoria`, `fabricante`, `qtd`, `valor`, `destaque`, `lancamento`, `caminho`, `imagem1`, `imagem2`, `imagem3`, `dataUpdate`) VALUES
	(1, '2010G1265015', 'Trator Massey Ferguson 290 4x2 ano 84 ', 'muito bom sô', 2, 1, 1, 15000.00, 'sim', 'nao', 'produtos', 'trator.jpg', '', '', '2012-10-01'),
	(2, '201086686011', 'TRATOR PA CARREGADEIRA', 'MUITO BOA MESMO', 3, 1, 1, 15000.00, 'SIM', 'SIM', '../produtos/', 'af30ebeeaaad3b39c85bfdb4ca9ddcee.jpg', '6496600529468188ff9936813d312ce9.jpg', 'da31fcf4c6e6cb491719b0e372ccf55e.jpg', '2012-10-20');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;


-- Dumping structure for table banco.tab_aulas
DROP TABLE IF EXISTS `tab_aulas`;
CREATE TABLE IF NOT EXISTS `tab_aulas` (
  `codigo` int(15) NOT NULL auto_increment,
  `materia` varchar(30) NOT NULL,
  `tituloMateria` varchar(80) NOT NULL,
  `conteudoMateria` mediumtext NOT NULL,
  `professor` varchar(25) NOT NULL,
  `dataAula` varchar(10) NOT NULL,
  `dataPost` varchar(10) NOT NULL,
  `codigoAluno` varchar(25) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.tab_aulas: ~8 rows (approximately)
/*!40000 ALTER TABLE `tab_aulas` DISABLE KEYS */;
REPLACE INTO `tab_aulas` (`codigo`, `materia`, `tituloMateria`, `conteudoMateria`, `professor`, `dataAula`, `dataPost`, `codigoAluno`) VALUES
	(20, 'DDW2', 'teste', 'testes inclusÃ£o de aulas', 'Claudia', '10/02/2011', '13/02/2011', '1'),
	(21, 'DDW2', 'teste de hoje', 'hoje hoje', 'Claudia', '20/08/2011', '01/06/2011', '1'),
	(22, 'DDW2', 'teste de hoje agora', 'teste teste steststsetsetse', 'Guilherme Nonino', '20/08/2011', '01/06/2011', '1'),
	(23, 'DDW2', 'ddw testw ', 'este ddw', 'Claudia', '20/08/2011', '13/08/2011', '1'),
	(24, 'GSO2', 'select com join', 'o select com join Ã© assim... tchum', 'Job Junior', '24/08/2011', '25/08/2011', '63'),
	(25, 'GSO2', 'tubala katumba', 'tubala katumba tumbata\r\ntubala katumba tumbata\r\n\r\n\r\n\r\ntubala katumba tumbata\r\n\r\ntubala katumba tumbata', 'Job Junior', '24/08/2011', '25/08/2011', '63'),
	(26, '', '', '', '', '', '', ''),
	(27, '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `tab_aulas` ENABLE KEYS */;


-- Dumping structure for table banco.tab_forum
DROP TABLE IF EXISTS `tab_forum`;
CREATE TABLE IF NOT EXISTS `tab_forum` (
  `codigo` int(15) NOT NULL,
  `loginid` varchar(15) NOT NULL,
  `postTitulo` varchar(80) NOT NULL,
  `postMensagem` mediumtext NOT NULL,
  `data` varchar(10) default NULL,
  PRIMARY KEY  (`postTitulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table banco.tab_forum: ~3 rows (approximately)
/*!40000 ALTER TABLE `tab_forum` DISABLE KEYS */;
REPLACE INTO `tab_forum` (`codigo`, `loginid`, `postTitulo`, `postMensagem`, `data`) VALUES
	(1, 'conan', 'ESTUDAR O FURM', 'ESTUDANDO O FORUM PARA LAYOUT', '26/09/2010'),
	(1, 'conan', 'novo teste de forum', 'novo teste do forum', '27/09/2010'),
	(1, 'conan', 'Teste de forum', 'ol  estamos testando o forum e bla bla', '27/09/2010');
/*!40000 ALTER TABLE `tab_forum` ENABLE KEYS */;


-- Dumping structure for table banco.tab_materias
DROP TABLE IF EXISTS `tab_materias`;
CREATE TABLE IF NOT EXISTS `tab_materias` (
  `codigo` int(5) NOT NULL auto_increment,
  `materia` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.tab_materias: ~7 rows (approximately)
/*!40000 ALTER TABLE `tab_materias` DISABLE KEYS */;
REPLACE INTO `tab_materias` (`codigo`, `materia`) VALUES
	(1, 'DDW1'),
	(2, 'DDW2'),
	(3, 'GSO1'),
	(4, 'GSO2'),
	(5, 'AD'),
	(6, 'LTT'),
	(7, 'Inglˆs');
/*!40000 ALTER TABLE `tab_materias` ENABLE KEYS */;


-- Dumping structure for table banco.tab_professores
DROP TABLE IF EXISTS `tab_professores`;
CREATE TABLE IF NOT EXISTS `tab_professores` (
  `codigo` int(5) NOT NULL auto_increment,
  `professor` varchar(25) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.tab_professores: ~6 rows (approximately)
/*!40000 ALTER TABLE `tab_professores` DISABLE KEYS */;
REPLACE INTO `tab_professores` (`codigo`, `professor`) VALUES
	(1, 'Aguinaldo Buck'),
	(2, 'Claudia'),
	(3, 'Job Junior'),
	(4, 'Guilherme Nonino'),
	(5, 'Paulo Miele'),
	(6, 'Dione');
/*!40000 ALTER TABLE `tab_professores` ENABLE KEYS */;


-- Dumping structure for table banco.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUs` int(11) NOT NULL auto_increment,
  `nomeUs` varchar(100) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL default '0',
  `numero` varchar(15) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `caminhoUs` varchar(20) NOT NULL,
  `fotoUs` varchar(100) NOT NULL,
  `nivelUsuario` varchar(6) NOT NULL,
  PRIMARY KEY  (`idUs`),
  KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

-- Dumping data for table banco.usuarios: 11 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
REPLACE INTO `usuarios` (`idUs`, `nomeUs`, `login`, `senha`, `email`, `endereco`, `numero`, `bairro`, `uf`, `cidade`, `caminhoUs`, `fotoUs`, `nivelUsuario`) VALUES
	(80, 'danilo catto', 'tijolo', '123', 'danilocatto@hotamil.com', 'rua treze', '510', 'centro', 'sp', 'orlandia', 'fotostijolo', 'du dudu e edu.png', 'onUser'),
	(79, 'Daniel Fernando Catto', 'conan', '1515', 'daniel.conanbr@gmail.com', 'rua tijuca', '351', '', '', '', 'fotosconan', 'AssasinS_Creed_1440-x-900.jpg', 'onUser'),
	(81, 'jeni catto', 'jenis', '123', 'jeni@gmail.com', 'voluntário geraldo', '100', '', '', '', 'fotosjenis', 'yakko_large.jpg', 'onUser'),
	(83, 'marisa dimas catto', 'marisa', '123', 'marisa@gmail.com', 'rua avares cunha', '85', '', '', '', 'fotosmarisa', 'foto25.jpg', 'onUser'),
	(84, 'user', 'user', '123', 'mario@gmail.com', 'av p', '245', 'zita', '', 'orlÃ¢ndia', 'fotosmario', 'super_mario_bros_50cm_shop.jpg', 'onUser'),
	(85, 'kratus gold', 'kratus', '123', 'mario@gmail.com', 'av p', '354', 'zita', 'sÃ£o paulo', 'orlÃ¢ndia', 'fotoskratus', '', 'onUser'),
	(86, 'Marcus', 'marcus', '123', 'mario@gmail.com', 'av p', '478', 'zita', 'sÃ£o paulo', 'orlÃ¢ndia', 'fotosmarcus', 'Imagem0568.jpg', 'onUser'),
	(87, 'Lara Croft', 'lara', '123', 'lara@hotmail.com', 'avenida tiradentes', '1548', 'laranjeiras', 'Rj', 'Rio de Janeiro', 'fotoslara', 'papel_de_parede_lara.jpg', 'onUser'),
	(88, 'Copa', 'copamalvado', '123', 'copa@gmail.com', 'rua pirasicaba', '52', 'jardim cidade de Deus', 'RJ', 'Rio de Janeiro', 'fotoscopamalvado', 'Imagem0610.jpg', 'onUser'),
	(89, 'Érica Catto', 'kika', '123', 'kikinha@gmail.com', 'travessa P', '1237', 'zita', 'sp', 'orlândia', 'fotoskika', '', 'onUser'),
	(90, 'dd', 'ddd', '123', '1', '1', '1', '1', '1', '1', 'fotosddd', 'shofia 2.JPG', 'onUser');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
