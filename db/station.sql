-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 20/08/2013 às 06:03:22
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `sta_clientes`
--

INSERT INTO `sta_clientes` (`cliente_10_id`, `cliente_30_nome`, `cliente_30_cnpj`, `cliente_30_razaoSocial`, `cliente_30_inscMunicipal`, `cliente_30_inscEstadual`, `cliente_30_endereco`, `cliente_30_complemento`, `cliente_30_cidade`, `cliente_30_estado`, `cliente_30_cep`, `cliente_30_nomeResponsavel`, `cliente_30_sobrenomeResponsavel`, `cliente_30_emailResponsavel`, `cliente_30_telefoneResponsavel`, `cliente_30_celularResponsavel`, `cliente_10_idPai`) VALUES
(1, 'teste empresa', 'fasfa', 'fasf', 'safa', 'fsa', 'fsaf', 'fsas', 'fdasf', 'SP', 'cvfa', 'fasf', 'fasfs', 'dsa', 'dsa', 'dfasf', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `sta_contatos_cliente`
--

INSERT INTO `sta_contatos_cliente` (`contato_cliente_10_id`, `contato_cliente_30_nome`, `contato_cliente_30_sobrenome`, `contato_cliente_30_email`, `contato_cliente_30_telefone`, `contato_cliente_30_celular`, `cliente_10_id`) VALUES
(1, 'contato teste', 'fads', 'afafsfas', 'fsasf', 'fsafsaf', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `sta_produtos`
--

INSERT INTO `sta_produtos` (`produto_10_id`, `produto_30_nome`, `produto_15_valor`, `produto_20_quantidade`, `produto_60_observacoes`, `tipo_produto_10_id`) VALUES
(1, 'Coffee Teste', 20.00, '300', 'Teste', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_propostas`
--

CREATE TABLE `sta_propostas` (
  `proposta_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_10_id` int(11) NOT NULL,
  `contato_10_id` int(11) NOT NULL,
  `proposta_12_status` int(3) NOT NULL,
  `proposta_22_data` date NOT NULL,
  PRIMARY KEY (`proposta_10_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  `reserva_20_quantidadeParticipantes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_12_formatoSala` int(3) NOT NULL,
  `reserva_60_coffeeObs` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reserva_60_observacoes` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`reserva_10_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `sta_tipos_produto`
--

INSERT INTO `sta_tipos_produto` (`tipo_produto_10_id`, `tipo_produto_30_nome`) VALUES
(1, 'Tipo Teste'),
(2, 'Outro Tipo'),
(3, 'Coffee Break');

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
