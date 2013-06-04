-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 04/06/2013 às 05:01:11
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `sta_salas`
--

INSERT INTO `sta_salas` (`sala_10_id`, `sala_30_nome`, `sala_30_numero`, `sala_15_valorManha`, `sala_15_valorTarde`, `sala_15_valorNoite`, `sala_15_valorIntegral`, `sala_20_metros`, `sala_20_uMesa`, `sala_20_uSimples`, `sala_20_grupos`, `sala_20_escolar`, `sala_20_auditorio`, `unidade_10_id`) VALUES
(1, 'Outra Sala3', '033', 100.00, 200.00, 300.00, 400.00, '10', '20', '30', '40', '50', '60', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_tipos_produto`
--

CREATE TABLE `sta_tipos_produto` (
  `tipo_produto_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_produto_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tipo_produto_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `sta_tipos_produto`
--

INSERT INTO `sta_tipos_produto` (`tipo_produto_10_id`, `tipo_produto_30_nome`) VALUES
(1, 'Tipo Teste');

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
(1, 'nome', 'end', 'nr', 'ba', 'comp', 'cid', 'SP', 'cp', '11', '11111111', 'cont');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_usuarios`
--

CREATE TABLE `sta_usuarios` (
  `usuario_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_20_login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_20_senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  `usuario_20_fotoUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_12_tipo` int(1) NOT NULL,
  `usuario_12_ativo` int(1) NOT NULL,
  PRIMARY KEY (`usuario_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `sta_usuarios`
--

INSERT INTO `sta_usuarios` (`usuario_10_id`, `usuario_20_login`, `usuario_20_senha`, `usuario_30_nome`, `usuario_20_fotoUrl`, `usuario_12_tipo`, `usuario_12_ativo`) VALUES
(1, 'admin', 'MjEyMzJmMjk3YTU3YTVhNzQzODk0YTBlNGE4MDFmYzM=', 'Administrador', 'admin.jpg', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
