-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 11/02/2014 às 21:05:59
-- Versão do Servidor: 5.5.25
-- Versão do PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `station`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_briefings`
--

CREATE TABLE `sta_briefings` (
  `briefing_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `proposta_10_id` int(11) NOT NULL,
  `unidade_10_id` int(11) NOT NULL,
  `briefing_12_periodo` int(3) NOT NULL,
  `sala_10_id` int(11) NOT NULL,
  `briefing_12_formatoSala` int(3) NOT NULL,
  `briefing_20_quantidadeParticipantes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `briefing_12_coffee` int(3) NOT NULL,
  `coffe_10_id` int(11) NOT NULL,
  `coffee_12_periodo` int(3) NOT NULL,
  `coffee_20_quantidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `briefing_12_cafe` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `briefing_20_quantidadeCafe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `briefing_12_periodoCafe` int(3) NOT NULL,
  `briefing_12_agua` int(3) NOT NULL,
  `briefing_20_quantidadeAgua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `briefing_12_periodoAgua` int(3) NOT NULL,
  `briefing_60_coffeeObs` longtext COLLATE utf8_unicode_ci NOT NULL,
  `briefing_60_observacoes` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`briefing_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `sta_briefings`
--

INSERT INTO `sta_briefings` (`briefing_10_id`, `proposta_10_id`, `unidade_10_id`, `briefing_12_periodo`, `sala_10_id`, `briefing_12_formatoSala`, `briefing_20_quantidadeParticipantes`, `briefing_12_coffee`, `coffe_10_id`, `coffee_12_periodo`, `coffee_20_quantidade`, `briefing_12_cafe`, `briefing_20_quantidadeCafe`, `briefing_12_periodoCafe`, `briefing_12_agua`, `briefing_20_quantidadeAgua`, `briefing_12_periodoAgua`, `briefing_60_coffeeObs`, `briefing_60_observacoes`) VALUES
(1, 15, 0, 0, 0, 0, '', 1, 1, 1, '10', '2', '', 0, 2, '', 0, 'coffeeee', 'briefingggg'),
(2, 16, 0, 0, 0, 0, '', 0, 0, 0, '', '', '', 0, 0, '', 0, '', ''),
(3, 17, 1, 3, 3, 3, '42', 1, 1, 1, '42', '2', '', 0, 2, '', 0, 'obs coffee', 'obs briefing'),
(4, 18, 1, 2, 1, 1, '10', 1, 1, 1, '10', '1', '2', 3, 1, '10', 3, 'coffee teste', 'briefing teste'),
(5, 19, 1, 3, 1, 1, '10', 1, 1, 1, '10', '1', '2', 3, 1, '10', 3, 'obs coffee', 'obs briefing');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_briefings_equipamento`
--

CREATE TABLE `sta_briefings_equipamento` (
  `briefing_equipamento_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_produto_10_id` int(11) NOT NULL,
  `produto_10_id` int(11) NOT NULL,
  `briefing_equipamento_20_quantidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `briefing_10_id` int(11) NOT NULL,
  PRIMARY KEY (`briefing_equipamento_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `sta_briefings_equipamento`
--

INSERT INTO `sta_briefings_equipamento` (`briefing_equipamento_10_id`, `tipo_produto_10_id`, `produto_10_id`, `briefing_equipamento_20_quantidade`, `briefing_10_id`) VALUES
(1, 3, 1, '20', 1),
(2, 3, 1, '30', 1),
(3, 0, 0, '', 2),
(8, 3, 1, '10', 3),
(9, 3, 1, '30', 3),
(12, 1, 4, '3', 4),
(13, 1, 5, '2', 4),
(16, 1, 4, '2', 5),
(17, 1, 5, '1', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_clientes`
--

CREATE TABLE `sta_clientes` (
  `cliente_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_cnpj` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_razaoSocial` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_inscMunicipal` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_inscEstadual` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_endereco` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_complemento` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_cidade` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_estado` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_cep` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_nomeResponsavel` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_sobrenomeResponsavel` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_emailResponsavel` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_telefoneResponsavel` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_30_celularResponsavel` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_10_idPai` int(11) NOT NULL,
  PRIMARY KEY (`cliente_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `sta_clientes`
--

INSERT INTO `sta_clientes` (`cliente_10_id`, `cliente_30_nome`, `cliente_30_cnpj`, `cliente_30_razaoSocial`, `cliente_30_inscMunicipal`, `cliente_30_inscEstadual`, `cliente_30_endereco`, `cliente_30_complemento`, `cliente_30_cidade`, `cliente_30_estado`, `cliente_30_cep`, `cliente_30_nomeResponsavel`, `cliente_30_sobrenomeResponsavel`, `cliente_30_emailResponsavel`, `cliente_30_telefoneResponsavel`, `cliente_30_celularResponsavel`, `cliente_10_idPai`) VALUES
(1, 'Cliente Teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'TO', 'teste', 'tetsd', 'tets', 'gs', 'gsrs', 'gsxg', 0),
(2, 'empresa teste 2 ed', 'edteste', 'tesdete', 'testede', 'testede', 'gsde', 'fadfde', 'fdsfde', 'SP', 'fdfsdde', 'fsdfgde', 'gsdged', 'fgsdged', 'fgdsgde', 'gsdgsde', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_contatos_cliente`
--

CREATE TABLE `sta_contatos_cliente` (
  `contato_cliente_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `contato_cliente_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  `contato_cliente_30_sobrenome` text COLLATE utf8_unicode_ci NOT NULL,
  `contato_cliente_30_email` text COLLATE utf8_unicode_ci NOT NULL,
  `contato_cliente_30_telefone` text COLLATE utf8_unicode_ci NOT NULL,
  `contato_cliente_30_celular` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_10_id` int(11) NOT NULL,
  PRIMARY KEY (`contato_cliente_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `sta_contatos_cliente`
--

INSERT INTO `sta_contatos_cliente` (`contato_cliente_10_id`, `contato_cliente_30_nome`, `contato_cliente_30_sobrenome`, `contato_cliente_30_email`, `contato_cliente_30_telefone`, `contato_cliente_30_celular`, `cliente_10_id`) VALUES
(1, 'Contato Teste', 'teste', 'teste', 'teste', 'teste', 1),
(3, 'contato 2 ed', 'gdsgsqfdh ed', 'gsfd ed', 'hfdb ed', 'nuu ed', 2),
(4, 'contato 3', 'mfmmfi', 'mi', 'mf', 'mif', 2),
(5, 'teste contato 2', 'gdsgm', 'gmso', 'mfgdso', 'mfgdso', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_produtos`
--

CREATE TABLE `sta_produtos` (
  `produto_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  `produto_15_valor` decimal(10,2) NOT NULL,
  `produto_20_quantidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produto_60_observacoes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tipo_produto_10_id` int(11) NOT NULL,
  PRIMARY KEY (`produto_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `sta_produtos`
--

INSERT INTO `sta_produtos` (`produto_10_id`, `produto_30_nome`, `produto_15_valor`, `produto_20_quantidade`, `produto_60_observacoes`, `tipo_produto_10_id`) VALUES
(1, 'Coffee Teste', 20.00, '30', 'Coffee', 3),
(2, 'CafÃ©', 10.00, '00', 'A jarra', 4),
(3, 'Ãgua', 1.00, '00', 'O copo', 4),
(4, 'Produto Teste 1', 10.00, '20', '', 1),
(5, 'Produto Teste 2', 20.00, '30', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_propostas`
--

CREATE TABLE `sta_propostas` (
  `proposta_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_10_id` int(11) NOT NULL,
  `contato_10_id` int(11) NOT NULL,
  `proposta_12_status` int(3) NOT NULL,
  `proposta_60_itens` longtext COLLATE utf8_unicode_ci NOT NULL,
  `proposta_12_vencimentoFatura` int(3) NOT NULL,
  `proposta_22_data` date NOT NULL,
  PRIMARY KEY (`proposta_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `sta_propostas`
--

INSERT INTO `sta_propostas` (`proposta_10_id`, `cliente_10_id`, `contato_10_id`, `proposta_12_status`, `proposta_60_itens`, `proposta_12_vencimentoFatura`, `proposta_22_data`) VALUES
(7, 1, 1, 3, '', 0, '2013-08-20'),
(8, 1, 1, 2, '', 0, '2013-08-20'),
(9, 1, 1, 1, '', 0, '2013-08-20'),
(10, 1, 1, 1, '', 0, '2013-08-20'),
(11, 1, 1, 2, '', 0, '2013-08-20'),
(12, 1, 1, 3, '', 0, '2013-08-20'),
(13, 1, 1, 3, '', 0, '2013-08-20'),
(14, 0, 0, 0, '', 0, '2013-08-21'),
(15, 2, 3, 1, '', 0, '2013-09-04'),
(16, 0, 0, 4, '', 0, '2013-09-04'),
(17, 1, 5, 1, '', 0, '2013-11-25'),
(18, 1, 1, 1, '', 0, '2014-01-31'),
(19, 1, 1, 1, 'LocaÃ§Ã£o da sala para os dias descritos;Projetor multimÃ­dia;Notebook;Sistema de sonorizaÃ§Ã£o;Mouse sem fio;Flip chart;Item Teste;Item Teste 2;Item Teste 3', 15, '2014-02-06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_reservas`
--

CREATE TABLE `sta_reservas` (
  `reserva_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `proposta_10_id` int(11) NOT NULL,
  `unidade_10_id` int(11) NOT NULL,
  `sala_10_id` int(11) NOT NULL,
  `reserva_12_periodo` int(3) NOT NULL,
  `reserva_22_data` date NOT NULL,
  `reserva_12_coffee` int(3) NOT NULL,
  `coffe_10_id` int(11) NOT NULL,
  `coffee_12_periodo` int(3) NOT NULL,
  `coffee_20_quantidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_12_cafe` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_20_quantidadeCafe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_12_periodoCafe` int(3) NOT NULL,
  `reserva_12_agua` int(3) NOT NULL,
  `reserva_20_quantidadeAgua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_12_periodoAgua` int(3) NOT NULL,
  `reserva_20_capacidadeSala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_20_quantidadeParticipantes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_12_formatoSala` int(3) NOT NULL,
  `reserva_60_coffeeObs` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reserva_60_briefingObs` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reserva_60_observacoes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reserva_15_valorSala` decimal(10,2) NOT NULL,
  `reserva_15_valorCoffee` decimal(10,2) NOT NULL,
  `reserva_15_valorCafe` decimal(10,2) NOT NULL,
  `reserva_15_valorAgua` decimal(10,2) NOT NULL,
  `reserva_15_valorEquipamentos` decimal(10,2) NOT NULL,
  `reserva_15_valorDesconto` decimal(10,2) NOT NULL,
  `reserva_15_valorTotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`reserva_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

--
-- Extraindo dados da tabela `sta_reservas`
--

INSERT INTO `sta_reservas` (`reserva_10_id`, `proposta_10_id`, `unidade_10_id`, `sala_10_id`, `reserva_12_periodo`, `reserva_22_data`, `reserva_12_coffee`, `coffe_10_id`, `coffee_12_periodo`, `coffee_20_quantidade`, `reserva_12_cafe`, `reserva_20_quantidadeCafe`, `reserva_12_periodoCafe`, `reserva_12_agua`, `reserva_20_quantidadeAgua`, `reserva_12_periodoAgua`, `reserva_20_capacidadeSala`, `reserva_20_quantidadeParticipantes`, `reserva_12_formatoSala`, `reserva_60_coffeeObs`, `reserva_60_briefingObs`, `reserva_60_observacoes`, `reserva_15_valorSala`, `reserva_15_valorCoffee`, `reserva_15_valorCafe`, `reserva_15_valorAgua`, `reserva_15_valorEquipamentos`, `reserva_15_valorDesconto`, `reserva_15_valorTotal`) VALUES
(10, 7, 1, 1, 1, '2013-08-21', 1, 1, 1, '30', '1', '40', 2, 1, '50', 3, '', '20', 1, 'obs coffee 1', '', 'obs res 1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(11, 7, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(12, 7, 1, 1, 4, '2013-08-22', 1, 1, 3, '40', '1', '50', 2, 1, '60', 1, '', '30', 2, 'obs coffee 2', '', 'obs coffee 2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(13, 8, 1, 1, 4, '2013-08-21', 2, 1, 2, '20', '2', '13', 1, 2, '', 0, '', '20', 1, 'cof obs', '', 'res obs', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(14, 8, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(15, 9, 1, 1, 2, '2013-08-02', 2, 0, 0, '', '2', '', 0, 2, '', 0, '', '20', 1, 'obs', '', 'obsss', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(16, 9, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(17, 10, 1, 1, 3, '2013-08-29', 2, 0, 0, '', '2', '', 0, 2, '', 0, '', '20', 1, 'obs cof', '', 'obs res', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(18, 10, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(19, 11, 1, 1, 1, '2013-08-24', 2, 0, 0, '', '2', '', 0, 2, '', 0, '', '50', 4, 'obs cof', '', 'obs res', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(20, 11, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(21, 12, 1, 1, 2, '2013-08-30', 2, 0, 0, '', '2', '', 0, 2, '', 0, '', '50', 4, 'cof obs', '', 'res obs', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(22, 12, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(23, 13, 1, 1, 1, '2013-08-16', 2, 0, 0, '', '2', '', 0, 2, '', 0, '', '40', 3, 'cof obs 1', '', 'res obs 1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(24, 13, 1, 1, 4, '2013-08-28', 2, 0, 0, '', '2', '', 0, 2, '', 0, '', '60', 5, 'cof obs 2', '', 'res obs 2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(25, 14, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(26, 15, 1, 1, 4, '2013-09-05', 1, 1, 1, '10', '2', '', 0, 2, '', 0, '', '50', 4, 'coffeeee', 'briefingggg', 'data1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(27, 15, 1, 1, 1, '2013-09-06', 1, 1, 1, '10', '2', '', 0, 2, '', 0, '', '20', 1, 'coffeeee', 'briefingggg', 'data2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(28, 16, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(33, 17, 1, 1, 2, '2013-09-10', 2, 0, 0, '', '2', '', 0, 2, '', 0, '40', '42', 3, 'obs coffee', 'obs briefing', 'data1', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(34, 17, 1, 1, 3, '2013-09-09', 2, 0, 0, '', '2', '', 0, 2, '', 0, '20', '42', 1, 'obs coffee', 'obs briefing', 'data2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(37, 18, 1, 1, 1, '2014-01-31', 1, 1, 3, '10', '1', '2', 3, 1, '10', 3, '50', '10', 1, 'coffee teste', 'briefing teste', 'data teste 1', 1300.00, 400.00, 40.00, 20.00, 70.00, 230.00, 1600.00),
(38, 18, 1, 1, 4, '2014-02-01', 1, 1, 1, '10', '1', '2', 3, 1, '10', 3, '50', '10', 1, 'coffee teste', 'briefing teste', 'data teste 2', 3000.00, 200.00, 40.00, 20.00, 70.00, 330.00, 3000.00),
(39, 18, 1, 1, 3, '2014-01-31', 1, 1, 1, '10', '1', '2', 3, 1, '10', 3, '50', '10', 1, 'coffee teste', 'briefing teste', '', 1100.00, 200.00, 40.00, 20.00, 70.00, 430.00, 1430.00),
(43, 19, 1, 1, 4, '2014-02-07', 1, 1, 1, '10', '1', '2', 3, 1, '10', 3, '50', '10', 1, 'obs coffee', 'obs briefing', 'obs data 1', 3000.00, 200.00, 40.00, 20.00, 40.00, 300.00, 3000.00),
(44, 19, 1, 1, 1, '2014-02-10', 1, 1, 1, '10', '1', '2', 3, 1, '10', 3, '50', '10', 1, 'obs coffee', 'obs briefing', 'obs data 2', 1300.00, 200.00, 40.00, 20.00, 40.00, 100.00, 1500.00),
(45, 19, 1, 1, 2, '2014-02-11', 1, 1, 1, '10', '1', '2', 3, 1, '10', 3, '50', '10', 1, 'obs coffee', 'obs briefing', 'obs data 3', 1200.00, 200.00, 40.00, 20.00, 70.00, 30.00, 1500.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_reservas_equipamento`
--

CREATE TABLE `sta_reservas_equipamento` (
  `reserva_equipamento_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_produto_10_id` int(11) NOT NULL,
  `produto_10_id` int(11) NOT NULL,
  `reserva_equipamento_20_quantidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_10_id` int(11) NOT NULL,
  PRIMARY KEY (`reserva_equipamento_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=67 ;

--
-- Extraindo dados da tabela `sta_reservas_equipamento`
--

INSERT INTO `sta_reservas_equipamento` (`reserva_equipamento_10_id`, `tipo_produto_10_id`, `produto_10_id`, `reserva_equipamento_20_quantidade`, `reserva_10_id`) VALUES
(6, 0, 0, '', 10),
(7, 0, 0, '', 10),
(8, 0, 0, '', 12),
(9, 0, 0, '', 12),
(10, 0, 0, '', 12),
(11, 0, 0, '', 13),
(12, 0, 0, '', 13),
(13, 0, 0, '', 15),
(14, 0, 0, '', 15),
(15, 0, 0, '', 15),
(16, 0, 0, '', 15),
(17, 0, 0, '', 17),
(18, 0, 0, '', 17),
(19, 0, 0, '', 19),
(20, 0, 0, '', 19),
(21, 3, 1, '', 21),
(22, 3, 1, '', 21),
(23, 3, 1, '', 21),
(24, 3, 1, '', 23),
(25, 3, 1, '', 24),
(26, 3, 1, '', 24),
(27, 0, 0, '', 25),
(28, 3, 1, '20', 26),
(29, 3, 1, '30', 26),
(30, 3, 1, '20', 27),
(31, 3, 1, '30', 27),
(32, 0, 0, '', 28),
(41, 3, 1, '10', 33),
(42, 3, 1, '30', 33),
(43, 3, 1, '10', 34),
(44, 3, 1, '30', 34),
(49, 1, 4, '3', 37),
(50, 1, 5, '2', 37),
(51, 1, 4, '3', 38),
(52, 1, 5, '2', 38),
(53, 1, 4, '3', 39),
(54, 1, 5, '2', 39),
(61, 1, 4, '2', 43),
(62, 1, 5, '1', 43),
(63, 1, 4, '2', 44),
(64, 1, 5, '1', 44),
(65, 1, 4, '3', 45),
(66, 1, 5, '2', 45);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_salas`
--

CREATE TABLE `sta_salas` (
  `sala_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `sala_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  `sala_30_numero` text COLLATE utf8_unicode_ci NOT NULL,
  `sala_15_valorManha` decimal(10,2) NOT NULL,
  `sala_15_valorTarde` decimal(10,2) NOT NULL,
  `sala_15_valorNoite` decimal(10,2) NOT NULL,
  `sala_15_valorIntegral` decimal(10,2) NOT NULL,
  `sala_20_metros` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sala_20_uMesa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sala_20_uSimples` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sala_20_grupos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sala_20_escolar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sala_20_auditorio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unidade_10_id` int(11) NOT NULL,
  PRIMARY KEY (`sala_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `sta_salas`
--

INSERT INTO `sta_salas` (`sala_10_id`, `sala_30_nome`, `sala_30_numero`, `sala_15_valorManha`, `sala_15_valorTarde`, `sala_15_valorNoite`, `sala_15_valorIntegral`, `sala_20_metros`, `sala_20_uMesa`, `sala_20_uSimples`, `sala_20_grupos`, `sala_20_escolar`, `sala_20_auditorio`, `unidade_10_id`) VALUES
(1, 'Sala 1', '1', 1300.00, 1200.00, 1100.00, 3000.00, '60', '50', '40', '30', '20', '10', 1),
(2, 'Sala 2', '2', 30.00, 30.00, 30.00, 30.00, '10', '20', '30', '40', '50', '60', 1),
(3, 'Sala 1', '1', 30.00, 30.00, 30.00, 30.00, '60', '50', '40', '30', '20', '10', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_tipos_produto`
--

CREATE TABLE `sta_tipos_produto` (
  `tipo_produto_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_produto_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tipo_produto_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `sta_tipos_produto`
--

INSERT INTO `sta_tipos_produto` (`tipo_produto_10_id`, `tipo_produto_30_nome`) VALUES
(1, 'Tipo Teste'),
(2, 'Outro TIpo'),
(3, 'Coffee Break'),
(4, 'Infinitos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_unidades`
--

CREATE TABLE `sta_unidades` (
  `unidade_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `unidade_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_logradouro` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_numero` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_bairro` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_complemento` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_cidade` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_estado` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_cep` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_ddd` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_telefone` text COLLATE utf8_unicode_ci NOT NULL,
  `unidade_30_nomeContato` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`unidade_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `sta_unidades`
--

INSERT INTO `sta_unidades` (`unidade_10_id`, `unidade_30_nome`, `unidade_30_logradouro`, `unidade_30_numero`, `unidade_30_bairro`, `unidade_30_complemento`, `unidade_30_cidade`, `unidade_30_estado`, `unidade_30_cep`, `unidade_30_ddd`, `unidade_30_telefone`, `unidade_30_nomeContato`) VALUES
(1, 'Unidade Teste', 'end', 'nr', 'ba', 'comp', 'cid', 'SP', 'cp', '11', '11111111', 'cont');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_usuarios`
--

CREATE TABLE `sta_usuarios` (
  `usuario_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_20_login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_20_senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  `usuario_30_email` text COLLATE utf8_unicode_ci NOT NULL,
  `usuario_20_fotoUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_12_tipo` int(1) NOT NULL,
  `usuario_12_ativo` int(1) NOT NULL,
  PRIMARY KEY (`usuario_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `sta_usuarios`
--

INSERT INTO `sta_usuarios` (`usuario_10_id`, `usuario_20_login`, `usuario_20_senha`, `usuario_30_nome`, `usuario_30_email`, `usuario_20_fotoUrl`, `usuario_12_tipo`, `usuario_12_ativo`) VALUES
(1, 'admin', 'MjEyMzJmMjk3YTU3YTVhNzQzODk0YTBlNGE4MDFmYzM=', 'Administrador', '', 'admin.jpg', 1, 1),
(2, 'teste', 'Njk4ZGMxOWQ0ODljNGU0ZGI3M2UyOGE3MTNlYWIwN2I=', 'UsuÃ¡rio Teste', 'emailteste@stationct.com.br', '139214874552fa8109b1a16.jpg', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
