-- phpMyAdmin SQL Dump
-- version 3.3.10deb2
-- http://www.phpmyadmin.net
--
-- Servidor: mysql01.stationct.hospedagemdesites.ws
-- Tempo de Geração: Abr 14, 2014 as 04:48 PM
-- Versão do Servidor: 5.1.70
-- Versão do PHP: 5.3.3-7+squeeze18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `stationct`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_briefings`
--

CREATE TABLE IF NOT EXISTS `sta_briefings` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `sta_briefings`
--

INSERT INTO `sta_briefings` (`briefing_10_id`, `proposta_10_id`, `unidade_10_id`, `briefing_12_periodo`, `sala_10_id`, `briefing_12_formatoSala`, `briefing_20_quantidadeParticipantes`, `briefing_12_coffee`, `coffe_10_id`, `coffee_12_periodo`, `coffee_20_quantidade`, `briefing_12_cafe`, `briefing_20_quantidadeCafe`, `briefing_12_periodoCafe`, `briefing_12_agua`, `briefing_20_quantidadeAgua`, `briefing_12_periodoAgua`, `briefing_60_coffeeObs`, `briefing_60_observacoes`) VALUES
(1, 4, 0, 0, 0, 0, '', 1, 3, 3, '22', '1', '22', 3, 1, '22', 3, 'Obs 1', 'Obs 2'),
(2, 5, 0, 0, 0, 0, '', 1, 3, 3, '10', '1', '10', 3, 1, '10', 3, '', ''),
(3, 6, 3, 0, 0, 0, '20', 1, 3, 3, '20', '1', '20', 3, 1, '20', 3, 'Eh o que', 'Eh o que'),
(4, 7, 3, 0, 0, 0, '20', 1, 3, 3, '20', '1', '20', 3, 1, '20', 3, 'Sempre 10 a mais', ''),
(5, 8, 3, 0, 0, 0, '20', 1, 3, 3, '20', '1', '20', 3, 1, '20', 3, '', 'Dias'),
(6, 9, 3, 0, 0, 0, '10', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '', ''),
(7, 10, 3, 0, 0, 0, '10', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '', ''),
(8, 11, 3, 0, 0, 0, '10', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '', ''),
(9, 12, 3, 4, 3, 4, '10', 1, 3, 3, '10', '1', '10', 3, 1, '10', 3, 'Poe mais', ''),
(10, 13, 3, 4, 4, 1, '10', 1, 3, 1, '10', '1', '2', 3, 1, '10', 3, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_briefings_equipamento`
--

CREATE TABLE IF NOT EXISTS `sta_briefings_equipamento` (
  `briefing_equipamento_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_produto_10_id` int(11) NOT NULL,
  `produto_10_id` int(11) NOT NULL,
  `briefing_equipamento_20_quantidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `briefing_10_id` int(11) NOT NULL,
  PRIMARY KEY (`briefing_equipamento_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `sta_briefings_equipamento`
--

INSERT INTO `sta_briefings_equipamento` (`briefing_equipamento_10_id`, `tipo_produto_10_id`, `produto_10_id`, `briefing_equipamento_20_quantidade`, `briefing_10_id`) VALUES
(1, 1, 1, '22', 1),
(2, 3, 3, '22', 1),
(3, 0, 0, '', 1),
(4, 2, 0, '10', 2),
(5, 2, 0, '1', 3),
(6, 3, 3, '10', 3),
(7, 2, 0, '1', 4),
(8, 3, 3, '10', 4),
(9, 0, 0, '', 4),
(10, 2, 0, '1', 5),
(11, 0, 0, '', 5),
(14, 3, 0, '10', 7),
(15, 0, 0, '', 7),
(18, 3, 0, '10', 8),
(19, 0, 0, '', 8),
(22, 2, 0, '10', 9),
(23, 0, 0, '', 9),
(24, 3, 0, '10', 6),
(25, 0, 0, '', 6),
(27, 1, 1, '10', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_clientes`
--

CREATE TABLE IF NOT EXISTS `sta_clientes` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=130 ;

--
-- Extraindo dados da tabela `sta_clientes`
--

INSERT INTO `sta_clientes` (`cliente_10_id`, `cliente_30_nome`, `cliente_30_cnpj`, `cliente_30_razaoSocial`, `cliente_30_inscMunicipal`, `cliente_30_inscEstadual`, `cliente_30_endereco`, `cliente_30_complemento`, `cliente_30_cidade`, `cliente_30_estado`, `cliente_30_cep`, `cliente_30_nomeResponsavel`, `cliente_30_sobrenomeResponsavel`, `cliente_30_emailResponsavel`, `cliente_30_telefoneResponsavel`, `cliente_30_celularResponsavel`, `cliente_10_idPai`) VALUES
(1, 'nomeemp', 'cnpjemp', 'razemp', 'inscesemp', 'inscmuemp', 'endemp', 'compemp', 'cidemp', 'SP', 'cepemp', 'respemp', 'sobremp', 'emailemp', 'telemp', 'celemp', 0),
(2, 'DIA GROUP', '03.476.811/0001-51', 'DIA BRASIL SOCIEDADE LIMITADA', '', '2.847.875-4', 'AVENIDA CARDOSO DE MELO 1855', '1Âº, 2Âº E 10Âº ANDAR', 'SÃƒO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(3, 'Station Centros de Treinamento', '', '', '', '', 'Av Dr Cardoso de Melo, 1491', '', 'SÃ£o Paulo', 'SP', '05535070', '', '', '', '', '', 0),
(4, 'A5 SOLUTIONS', '08.571.310/0001-78', 'A5 SOLUTIONS SERVIÇOS E COMERCIO EM TELECOMUNICAÇÕES LTDA', '', '3.596.167-8', 'RUA TENERIFE, 67', '9º ANDAR', 'SÃO PAULO', 'SP', '04548-040', '', '', '', '', '', 0),
(5, 'ABRAFATI', '54.961.347/0001-20', 'ASSOCIAÇÃO BRASILEIRA DOS FABRICANTES DE TINTAS', '', '9.357.358-8', 'AVENIDA DOUTOR CARDOSO DE MELO, 1340', 'CONJ 131 - 13º ANDAR', 'SÃO PAULO', 'SP', '04548-004', '', '', '', '', '', 0),
(6, 'AKATUS', '14.575.597/0001-21', 'AKATUS MEIOS DE PAGAMENTO S.A.', '', '4.635.358-5', 'AVENIDA DOUTOR CARDOSO DE MELO, 1460', 'CONJ 91/92/93', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(7, 'ALATUR', '66.822.537/0004-98', 'WALHALATUR VIAGENS E TURISMO S.A.', '', '3.602.137-7', 'AVENIDA SÃO LUIS, 50', '4º ANDAR - CJ41 ABC', 'SÃO PAULO', 'SP', '01046-000', '', '', '', '', '', 8),
(8, 'ALATUR', '15.279.665/0003-15', 'ALATUR VIAGENS E TURISMO S.A', '', '4.823.058-8', 'AVENIDA SÃO LUIS, 50', 'CJ 41 A', 'SÃO PAULO', 'SP', '01046-000', '', '', '', '', '', 0),
(9, 'ALPARGATAS', '61.079.117/0001-05', 'ALPARGATAS S.A.', '', '8.561.033-0', 'AVENIDA DOUTOR CARDOSO DE MELO, 1336', '14º ANDAR', 'SÃO PAULO', 'SP', '04548-004', '', '', '', '', '', 0),
(10, 'AMWAY', '58.473.398/0001-63', 'AMWAY DO BRASIL LIMITADA', '', '9.479.639-4', 'RUA JULIO DINIZ, 56', '7º ANDAR', 'SÃO PAULO', 'SP', '04547-090', '', '', '', '', '', 0),
(11, 'AOC', '04.176.689/0002-41', 'ENVISION INDUSTRIA DE PRODUTOS ELETRÔNICOS LTDA', '', '3.388.898-1', 'AL RAJA GABAGLIA, 188', '', 'SÃO PAULO', 'SP', '04551-090', '', '', '', '', '', 0),
(12, 'APADI', '08.295.919/0001-86', 'ASSOCIACAO PAULISTA DAS AGENCIAS DIGITAIS APADI', '', '3.569.507-2', 'RUA FUNCHAL, 375', '3ºANDAR', 'SÃO PAULO', 'SP', '04551-060', '', '', '', '', '', 0),
(13, 'AQUANIMA', '03.726.934/0001-01', 'AQUANIMA BRASIL LTDA', '', '2.892.592-0', 'AVENIDA ROQUE PETRONI JUNIOR, 999', '11º ANDAR', 'SÃO PAULO', 'SP', '04707-000', '', '', '', '', '', 0),
(14, 'ARCOR', '06.042.467/0001-80', 'BAGLEY DO BRASIL ALIMENTOS LTDA', '', '', 'RUA HENRIQUE VEIGA, 500', '', 'CAMPINAS', 'SP', '13080-290', '', '', '', '', '', 15),
(15, 'ARCOR', '54.360.656/0001-44', 'ARCOR DO BRASIL LTDA', '', '', 'RUA JOÃO BATISTA MARTINS, 225', '', 'RIO DAS PEDRAS', 'SP', '13390-000', '', '', '', '', '', 0),
(16, 'AREZZO', '07.900.208/0007-00', 'ZZAB COMERCIO DE CALÇADOS LTDA', '', '3.884.031-6', 'AVENIDA ROQUE PETRONI JUNIOR, 1089', 'LOJA 226/227', 'SÃO PAULO', 'SP', '04707-000', '', '', '', '', '', 17),
(17, 'AREZZO', '16.590.234/0010-67', 'AREZZO INDUSTRIAL E COMERCIO S.A.', '', '2.520.299-5', 'RUA GOMES DE CARVALHO, 1507', '3º ANDAR', 'SÃO PAULO', 'SP', '04547-005', '', '', '', '', '', 0),
(18, 'AREZZO', '07.900.208/0009-63', 'ZZAB COMERCIO DE CALÇADOS LTDA', '', '3.941.630-5', 'RUA OSCAR FREIRE, 944', '', 'SÃO PAULO', 'SP', '01426-000', '', '', '', '', '', 17),
(19, 'AREZZO', '07.900.208/0001-06', 'ZZAB COMERCIO DE CALÇADOS LTDA', '', '3.505.368-2', 'AVENIDA BRIGADEIRO FARIA LIMA, 2232', 'LOJA E7 E 7A', 'SÃO PAULO', 'SP', '01451-000', '', '', '', '', '', 17),
(20, 'AREZZO', '07.900.208/0003-78', 'ZZAB COMERCIO DE CALÇADOS LTDA', '', '3.831.007-4', 'AVENIDA BRIGADEIRO FARIA LIMA, 2232', '', 'SÃO PAULO', 'SP', '01451-000', '', '', '', '', '', 17),
(21, 'AREZZO', '07.900.208/0020-79', 'ZZAB COMERCIO DE CALÇADOS LTDA', '', '4.325.581-7', 'AVENIDA PRESIDENTE JUSCELINO KUBITSCHEK, 2041', 'LOJA 273 - PISO 1', 'SÃO PAULO', 'SP', '04543-011', '', '', '', '', '', 17),
(22, 'AREZZO/ DWL', '04.026.335/0002-10', 'DWL VIAGENS E TURISMO LTDA', '', '', 'RUA CAPITÃO PORFIRIO, 1697', '', 'MONTENEGRO', 'RS', '95780-000', '', '', '', '', '', 17),
(23, 'ARTPLAN', '33.673.286/0001-25', 'ARTPLAN COMUNICACAO S.A', '', '', 'AVENIDA DAS AMERICAS, 4430', 'SALA 204', 'RIO DE JANEIRO', 'RJ', '22640-102', '', '', '', '', '', 0),
(24, 'BARILLA', '02.195.380/0001-92', 'BARILLA DO BRASIL LTDA', '', '', 'RUA ROSA KASINSKI, 1109', 'GALPAO 27 SALA 1', 'MAUÁ', 'SP', '09380-128', '', '', '', '', '', 0),
(25, 'BASF', '48.539.407/0001-18', 'BASF S.A.', '', '3.659.042-8', 'AVENIDA DAS NAÇÕES UNIDAS, 14171', '10º,12º,14º E 17º TORRE C', 'SÃO PAULO', 'SP', '04794-000', '', '', '', '', '', 0),
(26, 'BB E MAPFRE', '61.074.175/0001-38', 'MAPFRE SEGUROS GERAIS S.A.', '', '1.069.937-6', 'AVENIDA DAS NAÇÕES UNIDAS, 11711', '21º ANDAR', 'SÃO PAULO', 'SP', '04578-000', '', '', '', '', '', 0),
(27, 'BCD TRAVEL', '33.054.115/0006-22', 'AVIPAM TURISMO E TECNOLOGIA LTDA', '', '2.022.498-2', 'AVENIDA PAULISTA, 352', 'CJ 91,97,131,137', 'SÃO PAULO', 'SP', '01310-000', '', '', '', '', '', 0),
(28, 'BIOTEC', '01.142.107/0001-37', 'POLYTECHNO INDUSTRIAS QUIMICAS LTDA', '', '', 'RUA ROSA MAFEI, 563', '', 'GUARULHOS', 'SP', '07177-110', '', '', '', '', '', 0),
(29, 'BOEHRINGER', '60.831.658/0001-77', 'BOEHRINGER INGELHEIM DO BRASIL QUIMICA E FARMAUCETICA LTDA', '', '1.007.464-3', 'AVENIDA DAS NAÇÕES UNIDAS, 14171', 'B - 18º  CJ 1801 A 1804', 'SÃO PAULO', 'SP', '04794-000', '', '', '', '', '', 0),
(30, 'BOTICÁRIO', '06.147.451/0017-08', 'CALAMO DISTRIBUIDORA DE PRODUTOS DE BELEZA S.A', '', '4.452.208-8', 'AVENIDA ROQUE PETRONI JUNIOR, 999', '16º ANDAR', 'SÃO PAULO', 'SP', '04707-910', '', '', '', '', '', 0),
(31, 'BOTICÁRIO', '11.370.510/0882-41', 'INTERBELLE.COMERCIO DE PRODUTOS DE BELEZA LTDA', '', '', 'AVENIDA DOUTOR DARIO LOPES DOS SANTOS, 2079', '', 'SÃO PAULO', 'SP', '80210-010', '', '', '', '', '', 30),
(32, 'BRASIL PHARMA', '11.395.624/0001-71', 'BRASIL PHARMA S.A.', '', '3.997.597-5', 'RUA GOMES DE CARVALHO, 1629', '6º E 7º ANDAR', 'SÃO PAULO', 'SP', '04547-006', '', '', '', '', '', 0),
(33, 'BSI BRASIL', '06.200.724/0001-65', 'BSI BRASIL SISTEMAS DE GESTÃO LTDA', '', '3.461.633-0', 'RUA GOMES DE CARVALHO, 1069', 'CONJ 183', 'SÃO PAULO', 'SP', '04547-004', '', '', '', '', '', 0),
(34, 'BUENO NETO', '10.308.689/0001-70', 'BENX EMPREENDIMENTOS IMOBILIARIOS LTDA', '', '3.807.812-0', 'AVENIDA DOUTOR CARDOSO DE MELO, 1340', 'CONJUNTO 61', 'SÃO PAULO', 'SP', '04548-004', '', '', '', '', '', 0),
(35, 'BUENO NETO', '08.808.196/0001-57', 'BN CONSTRUCOES LTDAA', '', '3.630.056-0', 'AVENIDA DOUTOR CARDOSO DE MELO, 1340', 'CONJ 21', 'SÃO PAULO', 'SP', '04548-004', '', '', '', '', '', 34),
(36, 'CASA DE IDÉIA', '08.960.101/0001-16', 'CASA DE IDEIA EVENTOS LTDA', '', '3.663.141-8', 'AVENIDA ACOCE, 281', '', 'SÃO PAULO', 'SP', '04075-021', '', '', '', '', '', 0),
(37, 'CIELO', '01.416.845/0001-25', 'SERVINET SERVIÇOS LTDA', '', '2.505.613-1', 'AVENIDA BRIGADEIRO FARIA LIMA, 2055', '20º ANDAR', 'SÃO PAULO', 'SP', '01452-001', '', '', '', '', '', 0),
(38, 'CIPASA', '05.262.743/0001-53', 'CIPASA DESENVOLVIMENTO URBANO S/A', '', '3.183.015-3', 'RUA JOAQUIM FLORIANO, 466', 'ED. CORPORATE 151', 'SÃO PAULO', 'SP', '04534-002', '', '', '', '', '', 0),
(39, 'COSAN', '50.746.577/0001-15', 'COSAN S/A INDUSTRIA E COMERCIO', '', '4.380.395-4', 'AVENIDA PRESIDENTE JUSCELINO KUBITSCHEK, 1327', '4º ANDAR - SALA1', 'SÃO PAULO', 'SP', '04543-011', '', '', '', '', '', 0),
(40, 'CUATTRO', '07.339.147/0001-50', 'TM CUATTRO MARKETING DE RESULTADO LTDA', '', '3.565.083-4', 'RUA DO ROCIO, 199', '2º ANDAR', 'SÃO PAULO', 'SP', '04552-000', '', '', '', '', '', 0),
(41, 'CYTEC', '00.182.969/0001-20', 'CYTEC BRASIL ESPECIALIDADES QUIMICAS LTDA', '', '2.320.711-6', 'AVENIDA DOUTOR CARDOSO DE MELO, 1450', '', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(42, 'DASA', '61.486.650/0001-83', 'DIAGNOSTICOS DA AMERICA S/A', '', '', 'AVENIDA JURUA, 434', '', 'BARUERI', 'SP', '06455-010', '', '', '', '', '', 0),
(43, 'DIA', '03.476.811/0001-51', 'DIA BRASIL SOCIEDADE LIMITADA', '', '2.847.875-4', 'AVENIDA DOUTOR CARDOSO DE MELO, 1855', '1º,2º E 10º ANDAR', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(44, 'DIAGEO', '62.166.848/0001-42', 'DIAGEO BRASIL LTDA', '', '9.711.690-4', 'RUA OLIMPIADAS, 205', 'CJS 111,112,113 E 114', 'SÃO PAULO', 'SP', '04551-000', '', '', '', '', '', 0),
(45, 'DURR ', '61.067.997/0001-91', 'DURR BRASIL LTDA', '', '1.186.439-7', 'RUA ARNALDO MAGNICCARO, 500', '', 'SÃO PAULO', 'SP', '04691-060', '', '', '', '', '', 0),
(46, 'ECOLAB', '00.536.772/0035-91', 'ECOLAB QUÍMICA LTDA', '', '4.547.791-4', 'AVENIDA DAS NAÇÕES UNIDAS, 17891', '6º ANDAR', 'SÃO PAULO', 'SP', '04795-100', '', '', '', '', '', 0),
(47, 'ECOLAB', '00.536.772/0001-42', 'ECOLAB QUIMICA LTDA', '', '', 'AVENIDA GUPE, 10933', '', 'BARUERI', 'SP', '06422-120', '', '', '', '', '', 46),
(48, 'EDP', '03.983.431/0001-03', 'EDP ENERGIAS DO BRASIL S.A', '', '2.941.519-5', 'RUA GOMES DE CARVALHO, 1996', '8º ANDAR', 'SÃO PAULO', 'SP', '04547-006', '', '', '', '', '', 0),
(49, 'EDP', '02.302.100/0001-06', 'BANDEIRANTES ENERGIA S.A', '', '2.655.508-5', 'RUA GOMES DE CARVALHO, 1996', '9º ANDAR SALA 1', 'SÃO PAULO', 'SP', '04547-006', '', '', '', '', '', 47),
(50, 'ENOX', '05.963.175/0001-18', 'ENOX PUBLICIDADE S.A.', '', '3.782.364-7', 'AVENIDA DOUTOR CARDOSO DE MELO, 1608', 'CJ 121', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(51, 'EUROBIKE', '04.871.143/0019-58', 'BCLV COMERCIO DE VEICULOS LTDA', '', '4.320.462-7', 'AVENIDA DOUTOR CARDOSO DE MELO, 1551', '', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(52, 'FABER CASTELL', '59.596.908/0001-52', 'A. W. FABER-CASTELL S. A. ', '', '', 'RUA CORONEL JOSE AUGUSTO DE OLIVEIRA SALLES, 1876', '', 'SÃO CARLOS', 'SP', '13570-820', '', '', '', '', '', 0),
(53, 'FEBRACORP', '06.112.441/0001-61', 'EBUSINESS-BRASIL-ASSOCIAÇÃO BRASILEIRA DE EBUSINESS', '', '3.375.456-0', 'AVENIDA DOUTOR CARDOSO DE MELO, 1340', 'CONJ 11 SALA 1', 'SÃO PAULO', 'SP', '04548-004', '', '', '', '', '', 0),
(54, 'FEDEX', '00.676.486/0001-82', 'FEDERAL EXPRESS CORPORATION', '', '8.778.377-0', 'AVENIDA DAS NAÇÕES UNIDAS, 17891', 'TERREO, 1º E 3º ANDAR', 'SÃO PAULO', 'SP', '04795-100', '', '', '', '', '', 0),
(55, 'FIA', '44.315.919/0001-40', 'FUNDAÇÃO INSTITUTO DE ADMINISTRAÇÃO', '', '8.584.453-5', 'RUA JOSE ALVES CUNHA LIMA, 172', '', 'SÃO PAULO', 'SP', '05360-050', '', '', '', '', '', 0),
(56, 'FLYTOUR / GOODYEAR', '02.167.320/0001-66', 'FLYTOUR TRAVEL SOLUTION', '', '', 'AVENIDA JURUÁ, 641 ', '', 'BARUERI', 'SP', '06455-010', '', '', '', '', '', 0),
(57, 'GAFOR', '61.288.940/0001-12', 'GAFOR S.A.', '', '1.006.201-7', 'AVENIDA DAS NAÇÕES UNIDAS, 10989', 'CJ 32', 'SÃO PAULO', 'SP', '04578-000', '', '', '', '', '', 0),
(58, 'GERDAU', '33.611.500/0180-85', 'GERDAU S/A', '', '4.234.541-3', 'AVENIDA DAS NAÇÕES UNIDAS, 8501', '5º ANDAR SALA 1', 'SÃO PAULO', 'SP', '05425-070', '', '', '', '', '', 0),
(59, 'GERDAU', '17.227.422/0144-08', 'GERDAU ACOMINAS S/A', '', '3.461.817-1', 'AVENIDA DAS NAÇÕES UNIDAS, 8501', '7º ANDAR', 'SÃO PAULO', 'SP', '05425-070', '', '', '', '', '', 58),
(60, 'GERDAU', '07.358.761/0040-75', 'GERDAU AÇOS LONGOS S.A.', '', '3.431.447-4', 'AVENIDA DAS NAÇÕES UNIDAS, 8501', '5º,6º E 7º ANDAR', 'SÃO PAULO', 'SP', '05425-070', '', '', '', '', '', 58),
(61, 'GERDAU', '07.359.641/0004-29', 'GERDAU ACOS ESPECIAIS S.A', '', '3.431.445-8', 'AVENIDA DAS NAÇÕES UNIDAS, 8501', '8º ANDAR', 'SÃO PAULO', 'SP', '05425-070', '', '', '', '', '', 58),
(62, 'HERING', '78.876.950/0034-30', 'CIA HERING', '', '9.889.911-2', 'RUA DO ROCIO, 430', '3º ANDAR', 'SÃO PAULO', 'SP', '04552-000', '', '', '', '', '', 0),
(63, 'HIDROVIAS DO BRASIL', '12.648.327/0001-53', 'HIDROVIAS DO BRASIL S.A.', '', '4.160.350-8', 'AVENIDA BRIGADEIRO FARIA LIMA, 1912', '21º ANDAR', 'SÃO PAULO', 'SP', '01451-907', '', '', '', '', '', 0),
(64, 'HOSPITAL SC', '10.257.164/0001-52', 'SAUDE SANTA CECILIA ASSISTENCIA MEDICA S.A', '', '3.810.781-3', 'AVENIDA INDIANOPOLIS, 3366', '', 'SÃO PAULO', 'SP', '04062-003', '', '', '', '', '', 0),
(65, 'ICTS GLOBAL', '03.720.991/0001-75', 'ICTS GLOBAL LTDA', '', '2.894.415-1', 'RUA JAMES JOULE, 65', '5º ANDAR CONJUNTO 52', 'SÃO PAULO', 'SP', '04576-080', '', '', '', '', '', 0),
(66, 'IN METRICS', '04.959.158/0002-25', 'INMETRICS S/A', '', '3.849.759-0', 'AVENIDA GUIDO CALOI, 1000', 'B1 ES 121 E 40 VGS B', 'SÃO PAULO', 'SP', '05802-140', '', '', '', '', '', 0),
(67, 'JOHNSON E JOHNSON', '54.516.661/0040-00', 'JOHNSON E JOHNSON DO BRASIL IND E COM DE PROD P/ SAUDE LTDA', '', '3.706.522-0', 'RUA GERIVATIBA, 207', '7º ANDAR', 'SÃO PAULO', 'SP', '05501-900', '', '', '', '', '', 0),
(68, 'JUMP', '04.020.628/0001-00', 'JUMPEDUCATION - TREINAMENTOS, NEGOCIOS E TI LTDA', '', '2.945.122-1', 'AVENIDA PEDRO SEVERINO JUNIOR, 366', 'CJ 34,61,94,144,146 E 146', 'SÃO PAULO', 'SP', '04310-060', '', '', '', '', '', 0),
(69, 'JUMP', '04.020.628/0001-00', 'JUMPSOLUTIONS - NEGOCIOS E TI LTDA', '', '2.945.122-1', 'AVENIDA PEDRO SEVERINO JUNIOR, 366', 'CJ 34,61,94,144,145, 146', 'SÃO PAULO', 'SP', '04310-060', '', '', '', '', '', 68),
(70, 'LAB SSJ', '04.515.503/0001-50', 'LABORATORIO DE NEGÓCIOS SSJ S.A.', '', '3.046.024-7', 'AVENIDA DOUTOR CARDOSO DE MELO, 1450', 'CJ 401 E CJ 501', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(71, 'LAB SSJ', '67.830.471/0001-06', 'SSJ TREINAMENTOS LTDA', '', '4.310.654-4', 'AL RAJA GABAGLIA, 188', '11º ANDAR - CJ 111', 'SÃO PAULO', 'SP', '04551-090', '', '', '', '', '', 70),
(72, 'LASELVA', '53.928.891/0001-07', 'LASELVA COMERCIO DE LIVROS E ARTIGOS DE CONVENIENCIA LTDA', '', '9.166.812-3', 'RUA GOMES DE CARVALHO, 1467', '', 'SÃO PAULO', 'SP', '04547-005', '', '', '', '', '', 0),
(73, 'LEVITATUR', '08.867.977/0001-12', 'LEVITATUR VIAGENS E TURISMO LTDA', '', '3.638.902-1', 'RUA ITAPURA, 843', '', 'SÃO PAULO', 'SP', '03310-000', '', '', '', '', '', 0),
(74, 'MARCONDES', '49.512.213/0001-91', 'MARCONDES & CONSULTORES ASSOCIADOS LTDA', '', '8.367.847-6', 'RUA ENGENHEIRO ANTONIO JOVINO, 220', 'CJ 61/64', 'SÃO PAULO', 'SP', '05727-220', '', '', '', '', '', 0),
(75, 'METODO', '43.710.946/0001-54', 'METODO ENGENHARIA S.A.', '', '8.000.327-3', 'PC PROFESSOR JOSE LANNES, 40', 'ED BERRINI 500', 'SÃO PAULO', 'SP', '04571-100', '', '', '', '', '', 0),
(76, 'MOSAIC', '61.156.501/0001-56', 'MOSAIC FERTILIZANTES DO BRASIL LTDA', '', '1.119.364-6', 'AVENIDA ROQUE PETRONI JUNIOR, 999', 'SL 14 E 15', 'SÃO PAULO', 'SP', '04707-000', '', '', '', '', '', 0),
(77, 'MOTOROLA', '01.472.720/0003-84', 'MOTOROLA MOBILITY COMERCIO DE PRODUTOS ELETRONICOS LTDA', '', '3.020.551-4', 'AVENIDA CHEDID JAFET, 222', '', 'SÃO PAULO', 'SP', '04551-065', '', '', '', '', '', 0),
(78, 'NEOGRID', '03.553.145/0001-08', 'MERCADOR S.A.', '', '', 'AVENIDA SANTOS DUMONT, 935', '', 'JOINVILLE', 'SC', '89218-105', '', '', '', '', '', 0),
(79, 'NET', '00.108.786/0001-65', 'NET SERVICOS DE COMUNICAÇÃO S.A', '', '2.939.581-0', 'RUA VERBO DIVINO, 1356', '1º ANDAR', 'SÃO PAULO', 'SP', '04719-002', '', '', '', '', '', 0),
(80, 'NOVA OPERSAN', '07.234.499/0001-40', 'OPERSAN RESÍDUOS INDUSTRIAIS S.A.', '', '4.721.320-5', 'AVENIDA DOUTOR CARDOSO DE MELO, 1750', '8º ANDAR', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(81, 'NOVA PONTOCOM', '09.358.108/0001-25', 'NOVA PONTOCOM COMERCIO ELETRONICO S/A', '', '4.186.731-9', 'RUA GOMES DE CARVALHO, 1609', '3º AO 7º ANDARES', 'SÃO PAULO', 'SP', '04547-006', '', '', '', '', '', 0),
(82, 'OI', '33.000.118/0001-79', 'TELEMAR NORTE LESTE S/A', '', '', 'RUA GENERAL POLIDORO, 99', '', 'RIO DE JANEIRO', 'RJ', '22280-004', '', '', '', '', '', 0),
(83, 'OI', '04.164.616/0001-59', 'TNL PCS S/A', '', '', 'RUA JANGADEIROS, 48', '', 'RIO DE JANEIRO', 'RJ', '22420-010', '', '', '', '', '', 82),
(84, 'OI/ MILESSIS', '01.891.402/0001-96', 'MILESSIS VIAGENS E TURISMO LTDA', '', '', 'AVENIDA RIO BRANCO , 156', 'GRUPO 1008', 'RIO DE JANEIRO', 'RJ', '20040-003', '', '', '', '', '', 82),
(85, 'OMELTECH', '14.692.361/0001-50', 'OMELTECH DESENVOLVIMENTO EM FINANÇAS LTDA', '', '', 'RUA MARIA JOSÉ CELESTINO SAAD, 245', '', 'SÃO PAULO', 'SP', '06719-429', '', '', '', '', '', 0),
(86, 'PATRIA INVESTIMENTOS', '12.461.756/0001-17', 'PATRIA INVESTIMENTOS LTDA', '', '4.177.389-6', 'AVENIDA BRIGADEIRO FARIA LIMA, 2055', '6º ANDAR', 'SÃO PAULO', 'SP', '01452-001', '', '', '', '', '', 0),
(87, 'PDG', '09.045.897/0001-44', 'PDG VENDAS CORRETORA IMOBILIARIA LTDA', '', '3.763.616-2', 'RUA GOMES DE CARVALHO, 1629', '1º ANDAR', 'SÃO PAULO', 'SP', '04547-006', '', '', '', '', '', 89),
(88, 'PDG', '11.344.100/0001-51', 'LONDRES INCORPORADORA LTDA', '', '4.900.123-0', 'RUA GOMES DE CARVALHO, 1510', '6º ANDAR', 'SÃO PAULO', 'SP', '04547-005', '', '', '', '', '', 89),
(89, 'PDG', '08.974.252/0001-23', 'PDG INCORPORADORA, CONST, URBANIZADORA E CORRETORA LTDA', '', '3.685.609-6', 'RUA GOMES DE CARVALHO, 1510', '6º ANDAR', 'SÃO PAULO', 'SP', '04547-005', '', '', '', '', '', 0),
(90, 'PERNOD', '33.856.394/0017-09', 'PERNOD RICARD BRASIL INDUSTRIA E COMERCIO LTDA', '', '3.181.186-8', 'AVENIDA DAS NAÇÕES UNIDAS, 4777', 'CJ A/B', 'SÃO PAULO', 'SP', '05477-000', '', '', '', '', '', 0),
(91, 'PET LOVE', '10.864.846/0001-23', 'PETSUPERMARKET COMÉRCIO DE PRODUTOS PARA ANIMAIS S/A.', '', '3.921.834-1', 'RUA ZANZIBAR, 728', '', 'SÃO PAULO', 'SP', '02512-010', '', '', '', '', '', 0),
(92, 'PROMON', '04.000.158/0001-12', 'PROMON INTELLIGENS ESTRATEGIA E TECNOLOGIA LTDA', '', '3.075.604-9', 'AVENIDA PRESIDENTE JUSCELINO KUBITSCHEK, 1830', '14º ANDAR', 'SÃO PAULO', 'SP', '04543-000', '', '', '', '', '', 0),
(93, 'RACIONAL ENGENHARIA', '43.202.951/0001-56', 'RACIONAL ENGENHARIA LTDA', '', '1.076.606-5', 'AVENIDA CHEDID JAFET, 222', 'BL D 3º ANDAR', 'SÃO PAULO', 'SP', '04551-065', '', '', '', '', '', 0),
(94, 'RENASE', '00.480.633/0001-44', 'RENASE AGÊNCIA DE VIAGENS TURISMO LTDA', '', '2.343.422-8', 'RUA CHILON, 344', '', 'SÃO PAULO', 'SP', '04552-030', '', '', '', '', '', 0),
(95, 'ROBERT HALF', '10.279.522/0005-51', 'ROBERT HALF TRABALHO TEMPORARIO LTDA', '', '4.652.851-2', 'AVENIDA DOUTOR CARDOSO DE MELO, 1184', 'CJ 111 E 112', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(96, 'RUMO LOGÍSTICA', '715.503.888/0001-42', 'RUMO LOGÍSTICA OPERADORA MIL TIMODAL S.A', '', '', 'AVENIDA CANDIDO GAFFREE, ', 'ENTRE ARMAZENS V E 1', 'SANTOS', 'SP', '11013-240', '', '', '', '', '', 0),
(97, 'SABGROUP', '04.463.785/0001-90', 'SAB EMPREENDIMENTOS IMOBILIARIOS LTDA', '', '3.025.440-0', 'RUA BANDEIRA PAULISTA, 662', 'CONJ 14', 'SÃO PAULO', 'SP', '04532-002', '', '', '', '', '', 0),
(98, 'SAENG ENGENHARIA', '59.456.095/0001-03', 'SAENG ENGENHARIA E COMERCIO LTDA', '', '9.561.791-4', 'RUA CHILON, 326', '', 'SÃO PAULO', 'SP', '04552-030', '', '', '', '', '', 0),
(99, 'SANTISTA', '61.520.607/0001-97', 'TAVEX BRASIL S.A.', '', '1.099.265-0', 'AVENIDA MARIA COELHO AGUIAR, 215', 'BL A - 2º ANDAR', 'SÃO PAULO', 'SP', '05805-000', '', '', '', '', '', 0),
(100, 'SETE EVENTOS', '07.739.783/0001-79', 'M BERTOLIN PRODUCOES E EVENTOS LTDA', '', '', 'RUA VOLUNTARIOS DA PATRIA, 552', 'SALA 03', 'SÃO JOSÉ DOS PINHAIS', 'PR', '83005-020', '', '', '', '', '', 0),
(101, 'SKANSKA', '02.154.943/0001-02', 'SKANSKA BRASIL LTDA', '', '2.629.151-7', 'RUA VERBO DIVINO, 1207', 'CONJ 11 E 12', 'SÃO PAULO', 'SP', '04719-002', '', '', '', '', '', 0),
(102, 'SMG TURISMO', '12.164.961/0001-10', 'SMG AGENCIA DE VIAGENS E TURISMO LTDA ME', '', '', 'AVENIDA PRESIDENTE GETULIO VARGAS, 2932', 'CONJ 405 - 4º ANDAR', 'CURITIBA', 'PR', '80240-040', '', '', '', '', '', 0),
(103, 'SOARES BUMACHAR', '12.812.198/0001-97', 'SOARES BUMACHAR CHAGAS BARROS SOCIEDADE DE ADVOGADOS', '', '4.198.281-9', 'RUA FIDENCIO RAMOS, 213', '2º ANDAR - CJ 21 E 22', 'SÃO PAULO', 'SP', '04551-010', '', '', '', '', '', 0),
(104, 'SOCIEDADE BRASILEIRA DE PSICANALISE', '62.794.920/0001-86', 'SOCIEDADE BRASILEIRA DE PSICANALISE', '', '1.236.051-1', 'AVENIDA DOUTOR CARDOSO DE MELO, 1450', '1º,9º E 10º ANDAR', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(105, 'SODEXO', '49.930.514/0001-35', 'SODEXO DO BRASIL COMERCIAL LTDA', '', '8.394.759-0', 'AVENIDA GUIDO CALOI, 1000', '1º E 2º ANDAR - BL 3', 'SÃO PAULO', 'SP', '05802-140', '', '', '', '', '', 0),
(106, 'SOFTVAR IT SOLUTIONS', '06.246.012/0001-87', 'SOFTVAR SOLUÇÕES EM INFORMATICA LTDA', '', '', 'AVENIDA NOSSA SENHORA DE COPACABANA, 647', 'GRUPO 1010', 'RIO DE JANEIRO', 'RJ', '22050-002', '', '', '', '', '', 0),
(107, 'SOLUTIA', '02.283.939/0001-36', 'SOLUTIA BRASIL LTDA', '', '3.012.430-1', 'RUA GOMES DE CARVALHO, 1306', '6º ANDAR', 'SÃO PAULO', 'SP', '04547-005', '', '', '', '', '', 0),
(108, 'SOMAGUE', '14.900.382/0001-14', 'SOMAGUE MPH CONSTRUCOES S.A.', '', '4.446.730-3', 'AVENIDA DOUTOR CARDOSO DE MELO, 1666', '9º ANDAR', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(109, 'SONAE SIERRA BRASIL', '04.895.134/0001-79', 'CONDOMINIO SHOPPING PARQUE DOM PEDRO', '', '', 'AVENIDA GUILHERME CAMPOS, 500', '', 'CAMPINAS', 'SP', '13087-901', '', '', '', '', '', 115),
(110, 'SONAE SIERRA BRASIL', '01.169.817/0001-50', 'UNISHOPPING ADMINISTRADORA LTDA', '', '3.669.842-3', 'AVENIDA DOUTOR CARDOSO DE MELO, 1184', '14º ANDAR - SALA 141', 'SÃO PAULO', 'SP', '04548-004', '', '', '', '', '', 115),
(111, 'SONAE SIERRA BRASIL', '00.787.330/0001-79', 'CONDOMINIO SHOPPING CENTER PLAZA SUL', '', '2.393.986-9', 'AVENIDA PROFESSOR ABRAÃO DE MORAIS, 100', '', 'SÃO PAULO', 'SP', '04123-000', '', '', '', '', '', 115),
(112, 'SONAE SIERRA BRASIL', '06.261.948/0001-87', 'CONDOMINIO BOAVISTA SHOPPING', '', '3.326.233-0', 'RUA BORBA GATO, 59', '', 'SÃO PAULO', 'SP', '04747-030', '', '', '', '', '', 115),
(113, 'SONAE SIERRA BRASIL', '68.323.609/0001-35', 'CONDOMINIO FRANCA SHOPPING CENTER', '', '', 'AVENIDA RIO NEGRO, 1100', '', 'FRANCA', 'SP', '14406-005', '', '', '', '', '', 115),
(114, 'SONAE SIERRA BRASIL', '02.583.678/0001-70', 'CONDOMINIO TIVOLI SHOPPING CENTER', '', '', 'AVENIDA SANTA BARBARA, 777', 'SHOPPING CENTER', 'SANTA BARBARA D''OESTE', 'SP', '13450-013', '', '', '', '', '', 115),
(115, 'SONAE SIERRA BRASIL', '01.874.077/0001-53', 'SIERRA INVESTIMENTOS BRASIL LTDA', '', '2.654.170-0', 'AVENIDA DOUTOR CARDOSO DE MELO, 1184', '13º ANDAR -  SALA 131', 'SÃO PAULO', 'SP', '04548-004', '', '', '', '', '', 0),
(116, 'SONAE SIERRA BRASIL', '71.538.367/0001-01', 'CONDOMINIO CIVIL CENTER SHOP SÃO BERNARDO', '', '', 'RUA PCA SAMUEL SABATINI, 200', '', 'SÃO PAULO', 'SP', '09750-070', '', '', '', '', '', 115),
(117, 'SONAE SIERRA BRASIL', '08.430.570/0002-04', 'PATIO UBERLANDIA SHOPPING LTDA', '', '', 'AVENIDA PAULO GRACINDO, 15', '', 'UBERLÂNDIA', 'MG', '38411-145', '', '', '', '', '', 115),
(118, 'SONAE SIERRA BRASIL', '67.969.964/0001-13', 'CONDOMINIO SHOPPING CENTER PENHA', '', '2.138.616-1', 'RUA DOUTOR JOÃO RIBEIRO, 304', '', 'SÃO PAULO', 'SP', '03634-000', '', '', '', '', '', 115),
(119, 'SPRING', '04.144.280/0001-62', 'SPRING WIRELESS ( BRASIL) SERV EM TEC DA INFORM LTDA', '', '2.970.979-2', 'RUA GOMES DE CARVALHO, 1356', 'CJ 141,142,151,152, 14 A', 'SÃO PAULO', 'SP', '04547-005', '', '', '', '', '', 0),
(120, 'SYNTHES', '58.577.370/0002-57', 'SYNTHES INDUSTRIA E COMERCIO LTDA', '', '3.351.786-0', 'AVENIDA DOUTOR CARDOSO DE MELO, 1450', 'CJ 792 - 7º ANDAR', 'SÃO PAULO', 'SP', '04548-003', '', '', '', '', '', 0),
(121, 'SYNTHES', '58.577.370/0001-76', 'SYNTHES INDUSTRIA E COMERCIO LTDA', '', '', 'AVENIDA PENNWALT, 501', '', 'RIO CLARO', 'SP', '13505-650', '', '', '', '', '', 120),
(122, 'TAM', '02.012.862/0001-60', 'TAM LINHAS AEREAS S/A', '', '2.509.823-3', 'AVENIDA JURANDIR, 856', 'LOTE 4 - 2º ANDAR', 'SÃO PAULO', 'SP', '04072-000', '', '', '', '', '', 0),
(123, 'THOMSON REUTERS', '29.508.686/0001-08', 'THOMSON REUTERS SERVICOS ECONOMICOS LTDA', '', '8.697.453-0', 'AVENIDA DAS NAÇÕES UNIDAS, 17891', 'CJ 801 - 8º ANDAR', 'SÃO PAULO', 'SP', '04795-100', '', '', '', '', '', 0),
(124, 'TIISA', '10.579.577/0001-53', 'TIISA - TRIUNFO IESA INFRA-ESTRUTURA S/A', '', '3.851.632-2', 'AVENIDA DOUTOR CARDOSO DE MELO, 1608', '3º ANDAR', 'SÃO PAULO', 'SP', '04548-005', '', '', '', '', '', 0),
(125, 'TOLEDO COMUNICAÇÃO', '04.328.857/0001-96', 'TOLEDO COMUNICAÇÃO E MARKETING - EIRELI', '', '', 'RUA CRISTÓVÃO NUNES PIRES, 110', 'SALA 1102', 'FLORIANÓPOLIS', 'SC', '88010-120', '', '', '', '', '', 0),
(126, 'UNILEVER', '61.068.276/0001-04', 'UNILEVER BRASIL LTDA', '', '8.366.515-3', 'AVENIDA PRESIDENTE JUSCELINO KUBITSCHEK, 1309', '1 AO 12 E 14 E PART 2 13', 'SÃO PAULO', 'SP', '04543-011', '', '', '', '', '', 127),
(127, 'UNILEVER', '61.068.276/0101-69', 'UNILEVER BRASIL LTDA', '', '1.036.881-7', 'AVENIDA PRESIDENTE JUSCELINO KUBITSCHEK , 1455', 'ANDAR 7º,8º E 9º', 'SÃO PAULO', 'SP', '04543-011', '', '', '', '', '', 0),
(128, 'VTEX', '05.314.972/0001-74', 'COMPANHIA BRASILEIRA DE TECNOLOGIA PARA E-COMMERCE', '', '3.186.697-2', 'AVENIDA DOUTOR CARDOSO DE MELO, 1750', '', 'SÃO PAULO', 'SP', '05360-050', '', '', '', '', '', 0),
(129, 'XEROX', '16.668.736/0001-72', 'AFFILIATED COMPUTER SERV. CALL CENTER OPER. DO BRASIL LTDA.', '', '4.591.130-4', 'AVENIDA DAS NAÇÕES UNIDAS, 17891', '10º ANDAR', 'SÃO PAULO', 'SP', '04795-100', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_contatos_cliente`
--

CREATE TABLE IF NOT EXISTS `sta_contatos_cliente` (
  `contato_cliente_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `contato_cliente_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  `contato_cliente_30_sobrenome` text COLLATE utf8_unicode_ci NOT NULL,
  `contato_cliente_30_email` text COLLATE utf8_unicode_ci NOT NULL,
  `contato_cliente_30_telefone` text COLLATE utf8_unicode_ci NOT NULL,
  `contato_cliente_30_celular` text COLLATE utf8_unicode_ci NOT NULL,
  `cliente_10_id` int(11) NOT NULL,
  PRIMARY KEY (`contato_cliente_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=246 ;

--
-- Extraindo dados da tabela `sta_contatos_cliente`
--

INSERT INTO `sta_contatos_cliente` (`contato_cliente_10_id`, `contato_cliente_30_nome`, `contato_cliente_30_sobrenome`, `contato_cliente_30_email`, `contato_cliente_30_telefone`, `contato_cliente_30_celular`, `cliente_10_id`) VALUES
(1, 'cont1', 'sobr1', 'email1', 'tel1', 'cel1', 1),
(2, 'cont2', 'sobr2', 'email2', 'tel2', 'cel2', 1),
(3, 'VANESSA', 'FONSECA', 'VANESSA.INOCENCIO.FONSECA@DIAGROUP.COM', '(11) 3886-8633', '(11) 99236-2944', 2),
(4, 'Rodrigo', 'Saporito', 'rodrigo@stationct.com.br', '1137044377', '11996844998', 3),
(5, 'Juliana', 'Jacinavicius', 'jjacinavicius@a5solutions.com', '', '', 4),
(6, 'Rita Maria', 'Dias', 'Rita@abrafati.com.br', '(011) 4083 0505', '', 5),
(7, 'Ana Paula', 'Martin Figuera', 'ana@abrafati.com.br', '(011) 4083 0504', '', 5),
(8, 'Malu', 'Ramos', 'Malu@abrafati.com.br', '(011) 4083 0511', '', 5),
(9, 'Clelia', 'Pinheiro', 'Clelia@abrafati.com.br', '(011) 4083 0509', '', 5),
(10, 'Fernando', 'Zulino', 'fernando.zulino@akatus.com', '(011) 4873-4016', '', 6),
(11, 'Silizi', 'Andrade', 'silizi.andrade@akatus.com', '(011) 4873 4039', '', 6),
(12, 'Emanuela', 'Campos de Sá', 'rheducacao-18@alatur.com', '(011) 3469-0709', '', 8),
(13, 'Marcela', 'Luisa Appinhanesi', 'marcela.appinhanesi@alatur.com', '(011) 3469-0717', '', 8),
(14, 'Mariana', 'Corrêa', 'marianac@alpargatas.com.br', '(011) 3847-7312', '', 9),
(15, 'Mariana', 'Martinez Facin', 'marianaf@alpargatas.com.br', '(011) 3847 7236', '', 9),
(16, 'Renata', 'Martinez', 'renata.martinez@amway.com', '(011) 5696-3295', '', 10),
(17, 'Ana', 'Vergamini', 'ana.vergamini@amway.com', '(011) 5696-3347', '', 10),
(18, 'Débora', 'Ferreira', 'debora.ferreira@tpv-tech.com', '(011) 2139-9992', '(011) 9 7356-2283', 11),
(19, 'Celma', 'Barros', 'celma.barros@aoc.com', '(011) 2139-9992', '(011) 9 8495-2838', 11),
(20, 'Najara', 'Matos', 'najara.silva@aoc.com', '(011) 2139-9921', '', 11),
(21, 'Kiany', 'Carvalho', 'kiany.carvalho@tpv-tech.com', '(011) 2139-9995', '', 11),
(22, 'Milene', 'Moysés', 'Apadi@apadi.com.br', '(011) 3871-0108', '(011) 9 6607-3308', 12),
(23, 'Paulo', 'Centenaro Filho', 'paulo@apadi.com.br', '(011) 3871-0108', '(011) 9 8286-0577', 12),
(24, 'Keuri', 'Costa Gianetti', 'keuri.gianetti@aquanima.com', '(011) 3512-8062', '(011) 9 9793-6334', 13),
(25, 'Meire', 'Souza', 'mesouza@arcor.com', '(011) 3046-6118', '', 15),
(26, 'Claudia', 'Cruz', 'cdcruz@arcor.com', '(011) 3046-6824', '', 15),
(27, 'Paola', 'Bastos', 'pbastos@arezzo.com.br', '(011) 2132 4300', '', 17),
(28, 'Daniela', 'Peres', 'daniela.peres@arezzo.com.br', '(011) 2132-4300', '(011) 98949-7064', 17),
(29, 'Eline', 'Galláfrio', 'eline.gallafrio@arezzo.com.br', '(011) 2132-4300', '', 17),
(30, 'Marcella', 'Salles', 'msalles@arezzo.com.br', '(011) 2132-4307', '', 17),
(31, 'Ana Paulo', 'Santos', 'asantos@arezzo.com.br', '(011) 2132-4300', '(011) 9 9437-0425', 17),
(32, 'Beatriz', 'Vianna', 'beatriz.vianna@arezzo.com.br', '(011) 2132-4300', '(011) 9 9357-5105', 17),
(33, 'Daniele', 'Duwal', 'dduwal@arezzo.com.br', '(011) 2132-4333', '', 17),
(34, 'Leila', 'Barbosa', 'academia.corporativa@artpla.com.br', '(011) 2122-8290', '(011) 9 5935-9082', 23),
(35, 'Nathalie', 'Marienberg', 'Nathalie.Marienberg@barilla.com', '(011) 5644-8302', '', 24),
(36, 'Michelle', 'Akemy', 'michelle.akemy@basf.com', '(011) 2349-1128', '', 25),
(37, 'Fernanda', 'Kfouri', 'fernanda.kfouri@basf.com', '(011) 2039-2356', '(011) 9 5552-9282', 25),
(38, 'Leticia', 'Silva Freitas', 'leticia-da-silva.freitas@basf.com', '(011) 2349-2120', '', 25),
(39, 'Camila', 'Soares Santana', 'cssantana@bbmapfre.com.br', '(011) 5112-7654', '(011) 9 4116-7211', 26),
(40, 'Larissa', 'Francielly Borgo Rolim', 'lrolim@bbmapfre.com.br', '(011) 5112-7713', '(011) 9 9739-9367', 26),
(41, 'Ivan', 'Vieira', 'Ivan.Vieira@bcdtravel.com.br', '(011) 3372-0543', '', 27),
(42, 'Gisele', 'Franco Salvador', 'giselefrancosalvador@gmail.com', '(011) 3047-2472', '(011) 9 8111-4489', 28),
(43, 'Ketila', 'Silva', 'ketila.silva@boehringer-ingelheim.com', '(011) 4949-4707', '', 29),
(44, 'Vanessa', 'Leite Silva', 'vanessaleite@grupoboticario.com.br', '(011) 3675-7108', '(011) 9 9396-0180', 30),
(45, 'Beatriz', 'Dias', 'beatriz.dias@thebeautybox.com.br', '(011) 3809-5723', '(011) 9 9263-3277', 30),
(46, 'Arenda', 'Freitas', 'arenda.freitas@brph.com.br', '(011) 2117-5238', '(011) 9 7311-8114', 32),
(47, 'Najla', 'Polisel', 'Najla.Polisel@bsigroup.com', '(011) 2148-9613', '', 33),
(48, 'Janaina', 'Santos', 'Janaina.Santos@bsigroup.com', '(011) 2148-9623', '', 33),
(49, 'Fernanda', 'Guiss Monteiro', 'fernanda.monteiro@benx.com.br', '(011) 4083-5146', '', 34),
(50, 'Eliane', 'Bongianni', 'eliane.bongianni@bnvendas.com.br', '(011) 4083-6452', '(011) 9 7207-8307', 34),
(51, 'Cristiane', 'Amaral', 'cristiane.amaral@buenonetto.com.br>', '(011) 4083-6441', '', 34),
(52, 'Juliana', 'Paula Viana', 'juliana.viana@buenonetto.com.br', '(011) 4083-5101', '', 34),
(53, 'Gisele', 'Cristina Soares', 'gisele.soares@buenonetto.com.br', '(011) 4083-6441', '', 34),
(54, 'Ângela', 'Demetrio', 'angela.demetrio@casadeideia.com.br', '(11) 5053-6300', '(011) 9 7364-5847', 36),
(55, 'Amanda', 'Oliveira', 'amoliveira@cielo.com.br', '(011) 2596-8436', '', 37),
(56, 'Carla', 'Martins', 'carlaa@cielo.com.br', '(11) 2596-8458', '', 37),
(57, 'Marcia', 'Graziele', 'marcias@cielo.com.br>', '(011) 2596-1618', '', 37),
(58, 'Marly', 'Ribeiro', 'marly.ribeiro@cipasa.com', '(011) 4096-0581', '', 38),
(59, 'Gisele', 'Corilliano', 'Gisele.Coriliano@cosan.com.br', '', '(011) 99798-2743', 39),
(60, 'Marco', 'Marinho', 'Marco.Marinho@cytec.com', '(011) 3048-8013', '(011) 9270-2650', 41),
(61, 'Sandro', 'Anaz', 'Sandro.Anaz@cytec.com', '(011) 3048-8030', '(011) 9 9608-5352', 41),
(62, 'Edivan', 'Araujo', 'Edivan.Araujo@cytec.com', '', '', 41),
(63, 'Elaine', 'Fecchio', 'Elaine.Fecchio@cytec.com', '', '', 41),
(64, 'Leandro', 'Oliveira', 'leandro.oliveira@dasa.com.br', '(011) 4197-5315', '(011) 9 6648-5940', 42),
(65, 'Luiz', 'Alberto Magyar', 'luiz.magyar@dasa.com.br', '', '', 42),
(66, 'Jaqueline', 'Garutti', 'jaqueline.garutti@diagroup.com', '(011) 3886-8633', '(011) 9 9236-2944', 43),
(67, 'Alessandro', 'Antonio Amorim', 'alessandro.antonio.amorim@diagroup.com', '(011) 3886-8086', '(011) 9 9664-2792', 43),
(68, 'Vanessa', 'Fonseca', 'vanessa.inocencio.fonseca@diagroup.com', '(011) 3886-8633', '(011) 9 9236- 2944', 43),
(69, 'Andrea', 'Guidi', 'andrea.guidi@diagroup.com', '(011) 3886-8768', '(011) 9 7093-7786', 43),
(70, 'Patrícia', 'Varelo Honorato', 'patricia.varelo.honorato@diagroup.com', '(011) 3886-7689', '(011) 9 4191- 6562', 43),
(71, 'Fatima', 'Carvalho', 'fatima.c.carvalho@diageo.com', '', '', 44),
(72, 'Barbara', 'Carvalho', 'Barbara.L.Carvalho@diageo.com', '(011) 3897-2076', '', 44),
(73, 'Marlene', 'Souza', 'marlene.souza@diageo.com', '', '', 44),
(74, 'Carla', 'Picolli', 'carla.picolli@durr.com.br', '(011) 5633-3575', '', 45),
(75, 'Doris', 'Seifried', 'dseifried@nalco.com', '(011) 5644-6607', '(011) 9 9322-2940', 46),
(76, 'Monica', 'Brisola', 'mbrisola@nalco.com', '(011) 5644-6607', '', 46),
(77, 'Francielle', 'Aparecida Marino', 'famarino@nalco.com', '(011) 5644-6500', '', 46),
(78, 'Regina', 'Francisco', 'regina.francisco@edpbr.com.br', '(011) 2185-5233', '', 48),
(79, 'Mariana', 'Mavila', 'mariana.mavila@edpbr.com.br', '(011) 2185-5487', '', 48),
(80, 'Carolina', 'Siqueira', 'carolina.siqueira@edpbr.com.br', '(011) 2178-7456', '', 48),
(81, 'Roberta', 'Santos', 'roberta.santos@edpbr.com.br', '(011) 2185-5537', '', 48),
(82, 'Debora', 'Aranha', 'debora.aranha@edpbr.com.br', '', '(011) 9-9942-5563', 48),
(83, 'Ana', 'Bitencourt', 'ana.bitencourt@edpbr.com.br', '(011) 2185-5305', '', 48),
(84, 'Lucia', 'Mami', 'luciamami@edpbr.com.br', '(011) 2178-7252', '', 48),
(85, 'Leticia', 'Oliveira', 'leticia.oliveira@edpbr.com.br', '(011) 2178-7255', '', 48),
(86, 'Renata', 'Munhoz', 'renata.munhoz@enox.com.br', '(011) 3044-1798', '(011) 9 7433-5019', 50),
(87, 'Emmanoelle', 'Cunha', 'emmanoelle.cunha@faber-castell.com.br', '(011) 2108-5197', '(011) 9 9245-4720', 52),
(88, 'Deise', 'Amorim', 'deise.amorim@faber-castell.com.br', '(011) 2108-5166', '', 52),
(89, 'Giovanna', 'Oliveira', 'giovanna.oliveira@faber-castell.com.br', '(011) 2108-5108', '', 52),
(90, 'Silvio', 'Antunes', 'silvio.antunes@gmail.com', '', '(011) 9 8238-3810', 52),
(91, 'Celeste', 'Simões', 'celeste.simoes@faber-castell.com.br', '(011) 2108-5102', '', 52),
(92, 'Fernando', 'Mazzini', 'fernando.mazzini@febracorp.org.br', '(011) 3302-9214', '(011) 9 8488-9211', 53),
(93, 'Adriana', 'Nascimento', 'adriana.nascimento@febracorp.org.br', '(011) 3302-9218', '', 53),
(94, 'Sergio', 'Penha', 'sergio.penha@fedex.com  ', '', '(011) 9.5258.7844', 54),
(95, 'Cecilia', 'Lavoie', 'cecilia.lavoie@fedex.com', '(011) 5514-7071', '', 54),
(96, 'Izis', 'Morais', 'IzisM@fia.com.br', '(011) 3732 -2031', '', 55),
(97, 'Raquel', 'Castro de Paula', 'raquelc@fia.com.br', '(011) 3732-2018', '', 55),
(98, 'Pablo', 'Turbuk Garran', 'pablog@fia.com.br', '(011) 3847-3707', '', 55),
(99, 'Iria', 'Juppa', 'iriaj@fia.com.br', '', '', 55),
(100, 'Marcia', 'Vitack', 'labfin_provar@fia.com.br', '(011) 3894-5002', '', 55),
(101, 'Joyce', 'Pereira Ramos', 'joyce.ramos@fia.com.br', '(011) 3818-4022', '', 55),
(102, 'Munique', 'Alves', 'muniquea@fia.com.br', '(011) 3732-2029', '', 55),
(103, 'Francisca', 'Paula Salvador', 'Franciscap@fia.com.br', '(011) 3894-5011', '', 55),
(104, 'Glauciene', 'Campos Mendes', 'Glauciene@fia.com.br', '(011) 3732-2031', '', 55),
(105, 'Catherine', 'Guimarães', 'Catherinep@fia.com.br', '(011) 3818-4022', '', 55),
(106, 'Ariadne', 'Sousa Silva', 'ariadnes@fia.com.br', '(011) 3732-2029', '', 55),
(107, 'Gisele', 'Borba Lima', 'Giseleb@fia.com.br', '(011) 3894-5011', '', 55),
(108, 'Keley', 'Caroline Calligari', 'keleyc@fia.com.br', '(011) 3894-5000', '', 55),
(109, 'Marcos', 'Luppe', 'Marcosl@fia.com.br', '(011) 3894-5009', '', 55),
(110, 'Simonetta', 'Elsa Massi', 'Simonettae@fia.com.br', '(011) 3894-5021', '(011) 9 8698-2432', 55),
(111, 'Kelly', 'Gomes', 'kelly.silva@flytour.com.br', '(011) 4502-2644', '', 56),
(112, 'Cintia', 'Aparecida Rocha', 'carocha@gafor.com.br', '', '', 57),
(113, 'Nara', 'Viana', 'nfviana@gafor.com.br', '(011) 2164-4603', '', 57),
(114, 'Nelson', 'Henrique Soares Sampaio', 'Nnhsampaio@gafor.com.br', '', '(011) 98999-3899', 57),
(115, 'Marta', 'Regina Ribeiro Ferreira', 'mrrferreira@gafor.com.br', '(011) 2164-4648', '', 57),
(116, 'Renata', 'Salgado', 'renata.salgado@gerdau.com.br', '(011) 3094-6600', '', 58),
(117, 'Jorge', 'Shimão', 'jorge.shimao@gerdau.com.br', '(011) 3094-6374', '', 58),
(118, 'Dionisia', 'Ventura', 'dionisia.ventura@gerdau.com.br', '(011) 3094-4264', '(011) 9 9317-4264', 58),
(119, 'Silvana', 'Cavalcante', 'silvana.souza@gerdau.com.br', '(011) 30944375', '', 58),
(120, 'Danielly', 'Portolani', 'danielly.portolani@gerdau.com.br', '(011) 3094-6537', '(011)99317-6537', 58),
(121, 'Giuliana', 'Baretta', 'giuliana.daniel@gerdau.com.br', '(011) 3094-6454', '(011) 9 9317-6454', 58),
(122, 'Edwiges', 'Parra', 'edwiges_parra@goodyear.com', '(011) 3281-4392', '', 56),
(123, 'Agatha', 'Bartmeyer', 'agatha_bartmeyer@goodyear.com', '(011) 4373-6056', '', 56),
(124, 'Bianca', 'Silveira', 'bianca_silveira@goodyear.com', '(011) 2818-4257', '', 56),
(125, 'Thanya', 'Pereira Fernandes', 'tfernandes@hering.com.br', '(011) 3371-4823', '', 62),
(126, 'Ana', 'Paula Matos Santos', 'apsantos@hering.com.br', '', '', 62),
(127, 'Rute', 'Lucas Kneipp de Souza', 'rsouza@hering.com.br', '(011) 3371-4872', '', 62),
(128, 'Felipe', 'Tatsch Donaduzzi', 'fdonaduzzi@hering.com.br', '(011) 3371-4807', '', 62),
(129, 'Fernanda', 'Mondini', 'fernanda.mondini@hbsa.com.br', '(011) 3905 6050', '', 63),
(130, 'Isabel', 'Cunha', 'isabel.cunha@hbsa.com.br', '(011) 3905-6060', '', 63),
(131, 'Evelize', 'Hirata', 'evelize.hirata@hbsa.com.br', '(011) 3905-6026', '', 63),
(132, 'Fátima', 'Seyfarth', 'fatima.seyfarth@gruposantacelina.com.br', '(011) 5593-5205', '', 64),
(133, 'Aline', 'Lie Yamada', 'aline.yamada@br.ictsglobal.com', '(011) 2198-4200', '', 65),
(134, 'Camila', 'Venancio', 'camilave@inmetrics.com.br', '(011) 3303-3200', '(011) 9 9156-4315', 66),
(135, 'Miriam', 'Rotondaro', 'mrotondaro@jumpsolutions.com.br', '(011) 5071-4057', '', 68),
(136, 'Daniela', 'Pereira Cappelletti', 'daniela.pereira@jumpeducation.com.br', '(011) 5071-4057', '(011) 9 7511-9918', 68),
(137, 'Monica', 'Silva', 'msilva@jumpeducation.com.br', '(011) 5071-4057', '(011) 7511-9918', 68),
(138, 'Dânia', 'Letícia Q. Carvalho', 'dania.carvalho@jumpsolutions.com.br', '(011) 5071 4057', '(011) 9 6647 8134', 68),
(139, 'Elizabeth', 'Lomaski', 'elizabeth.lomaski@afferolab.com.br', '(011) 3386-5500', '(011)  99543-4591', 70),
(140, 'Raphael', 'Fernandes', 'raphael.fernandes@labssj.com.br', '(011) 3040-4343', '', 70),
(141, 'Leide', 'Silva', 'leide.silva@laselva.com.br', '(011) 2186-2607', '', 72),
(142, 'Daniela', 'Marques', 'daniela@levitatur.com.br', '(011) 2090-1030', '', 73),
(143, 'Debora', 'Brito', 'debora@levitatur.com.br', '(011) 2090-1030', '', 73),
(144, 'Ana Claudia', 'Patrocinio', 'ana.patrocinio@marcondes.net', '(011) 3746-2985', '(011) 9 8488-0611', 74),
(145, 'Jacqueline', 'Souza', 'jacqueline.souza@marcondes.net', '(011) 3746-2986', '(011) 7798-3141', 74),
(146, 'Juliane', 'Matozinho da Luz', 'juliane.luz@marcondes.net', '(011) 3746-2999', '', 74),
(147, 'Caroline', 'Tagliapietra', 'Caroline.Tagliapietra@metodo.com.br', '(011) 5501-0054', '', 75),
(148, 'Cyntia', 'Alves Wolter', 'Cyntia.Wolter@metodo.com.br', '', '', 75),
(149, 'Patrícia', 'Sakamoto', 'Patricia.Sakamoto@metodo.com.br', '(011) 5501-0097', '', 75),
(150, 'Vivian', 'Magalhães', 'Vivian.Magalhaes@metodo.com.br', '', '', 75),
(151, 'Marina', 'Antwarg', 'Marina.Antwarg@mosaicco.com', '(011) 4950-2865', '', 76),
(152, 'Silvia', 'Pietro', 'wsp012@motorola.com', '(011) 3847-3441', '(011) 9 8371-5804', 77),
(153, 'Claudia', 'Araujo', 'wpt463@motorola.com', '(011) 3847-3481', '', 77),
(154, 'Larissa', 'Messano', 'Larissa.Messano@netservicos.com.br', '(011) 2111-2671', '', 79),
(155, 'Carolina', 'Arjona', 'carolina.arjona@opersan.com.br', '(011) 3504-3226', '', 80),
(156, 'Aline', 'Felipe dos Santos', 'aline.santos@opersan.com.br', '(011) 3504-3250', '', 80),
(157, 'Carolina', 'Calamari', 'carolina.calamari@novapontocom.com.br', '(011) 4949-8943', '', 81),
(158, 'Bruno', 'Omeltech', 'bruno@omeltech.com.br', '', '(011) 9 9648-5466', 85),
(159, 'Roberta', 'Omeltech', 'roberta@omeltech.com.br', '', '(011) 9 7165-0001', 85),
(160, 'Bruno', 'Camargo', 'camargo@omeltech.com.br', '(011) 2898-9735', '', 85),
(161, 'Adriana', 'Bodon', 'Adriana.Bodon@patriainvestimentos.com.br', '(011) 3039-9829', '', 86),
(162, 'Patrícia', 'Cunilleras Pierallini', 'Patricia.Pierallini@pdg.com.br', '(011) 3296-0234', '(011) 9 6440-0897', 89),
(163, 'Janaina', 'Souza Silva', 'Janaina.SSilva@pdg.com.br', '(011) 3296-0206', '', 89),
(164, 'Ivian', 'Silva Santos', 'ivian.santos@pdg.com.br', '(011) 3296-0408', '(011) 97345-0746', 89),
(165, 'Talita', 'Bortolon Bazza', 'talita.bazza@pdg.com.br', '(011) 3296-0106', '', 89),
(166, 'Bruno', 'Palenzuela', 'bruno.palenzuela@pdg.com.br', '(011) 3296-0304', '(011) 98986-0985', 89),
(167, 'Dany', 'Priscila do Nascimento Vasco', 'dany.vasco@pdg.com.br', '(011) 3296- 0223', '', 89),
(168, 'Alaor', 'Mendonça dos Reis', 'alaor.reis@pdg.com.br', '(011) 3296-6263', '', 89),
(169, 'Samara', 'Pires', 'samara.pires@pdg.com.br', '(011) 3041-1014', '(011) 98933-5815', 89),
(170, 'Rachel', 'Soares', 'RACHEL.SOARES@pdg.com.br', '(011) 3296-0290', '(011) 9 9388-0549', 89),
(171, 'Caroline', 'Magnoni', 'caroline.magnoni@pdg.com.br', '(011) 3296-0291', '', 89),
(172, 'Otilia', 'Cardoso', 'Otilia.Cardoso@pernod-ricard.com', '(011) 3026-3504', '(011) 9 9286-6880', 90),
(173, 'Daniel', 'Okamura', 'Daniel.Okamura@pernod-ricard.com', '(011) 3026-3379', '', 90),
(174, 'Paula', 'Pagliarini', 'Paula.Pagliarini@pernod-ricard.com', '(011) 3026-3400', '', 90),
(175, 'Nando', 'Guerreiro', 'nando.guerreiro@petlove.com.br', '', '', 91),
(176, 'Regiane', 'Kwiatkowski', 'regiane.k@petlove.com.br', '(011) 3335-0203', '', 91),
(177, 'Bruna', 'Rufino', 'bruna.rufino@promon.com.br', '(011) 5213-5810', '', 92),
(178, 'Roberta', 'Bonamigo', 'Roberta.Bonamigo@promon.com.br', '(011) 5213-4218', '', 92),
(179, 'Luciana', 'Smith', 'luciana.smith@promon.com.br', '(011) 5213-4539', '', 92),
(180, 'Julio', 'Silva', 'julio.silva@racional.com', '(011) 3732-3798', '(011) 9 8765-3344', 93),
(181, 'Priscila', 'Oliveira', 'priscila.oliveira@racional.com', '(011) 3732-3760', '(011) 7710-5117', 93),
(182, 'Thaís', 'Torres', 'thais@renase.com.br', '(011) 2344-0007', '', 94),
(183, 'Daniela', 'Moriwaki', 'daniela@renase.com.br', '(011) 2344-0000', '', 94),
(184, 'Aruê', 'Flexa', 'arue@renase.com.br', '(011) 2344-0000', '', 94),
(185, 'Taissia', 'Bibikoff', 'taissia@renase.com.br', '(011) 2344-0008', '', 94),
(186, 'Fernanda', 'Santos', 'fernanda.santos@roberthalf.com.br', '(011) 3382-0142', '(011) 99478-8685', 95),
(187, 'Bruna', 'Amorim', 'Bruna.Amorim@rumologistica.com.br', '(013) 2101-3323', '', 96),
(188, 'Daniela', 'Santos de Oliveira', 'Daniela.Oliveira@rumologistica.com.br', '(013) 2101-3320', '', 96),
(189, 'Epitacio', 'Raimundo de Jesus Jr.', 'Epitacio.Jesus@rumologistica.com.br', '(013) 2101-3307', '', 96),
(190, 'Roberta', 'Souza', 'roberta.souza@sabgroup.com.br', '(011) 3080-1850', '(011) 7867-9686', 97),
(191, 'Vivian', 'Araujo', 'vivian@saeng.com.br', '(011) 3058-6833', '', 98),
(192, 'Gabriel', 'Gonçalves', 'gabriel.akamine@tavex.com.br', '(011) 3748-6181', '(011) 9 5776-8901', 99),
(193, 'Bianca', 'Jaimes', 'bianca@smgturismo.com.br', '(041) 3343-0106', '(041) 9685-5210', 102),
(194, 'Elaine', 'Rosa Gonçalves', 'elaine.rosa@soaresbumachar.com.br', '(011) 4064-4968', '', 103),
(195, 'Adriana', 'Champes', 'adriana.champes@soaresbumachar.com.br', '(011) 4064-4937', '(011) 99319-9714', 103),
(196, 'Édina', 'Mais', 'edina.masi@sbpsp.org.br', '(011) 2125-3705', '', 104),
(197, 'Andre', 'Cordeiro', 'andre.cordeiro@softvar.com.br', '(021) 2548-4452', '', 106),
(198, 'Maximiliano', 'Muniz', 'maximiliano.muniz@softvar.com.br', '(011) 2503-1007', '(021) 8891-9311', 106),
(199, 'Lucia', 'Ianni', 'lucia.ianni@somaguemph.com', '(011) 3044-4704', '(011) 9 5121-1275', 108),
(200, 'Juliana', 'Nascimento', 'jsnascimento@sonaesierra.com', '(011) 3371-1445', '', 115),
(201, 'Renata', 'Teixeira', 'rteixeira@sonaesierra.com', '(011) 3371 4178', '(011) 9 9463-8074', 115),
(202, 'Andrezza', 'Gaona', 'agaona@sonaesierra.com', '(011) 3371-4123', '(011) 9 9479-5628', 115),
(203, 'William', 'Terceiro', 'wterceiro@sonaesierra.com', '(011) 3371-3693', '(011) 9 9479-4278', 115),
(204, 'Talita', 'Silva', 'tcsilva@sonaesierra.com', '(011) 3371-4133', '', 115),
(205, 'Vinicius', 'Ribas Vicente', 'vrvicente@sonaesierra.com>', '(011) 3371-1445', '', 115),
(206, 'Ary', 'Wolfenberg Neto', 'aneto@sonaesierra.com', '(011) 3371-4137', '', 115),
(207, 'Fabrício', 'Olsson', 'folsson@sonaesierra.com', '(011) 3371-3684', '', 115),
(208, 'Ricardo', 'Caldas', 'rcaldas@springwireless.com', '(011) 3076-8050', '(011) 9 6908-1532', 119),
(209, 'Marcelo', 'Saraiva', 'saraiva.marcelo@synthes.com', '(011) 3040-7069', '', 120),
(210, 'Otavio', 'Silva', 'silva.otavio@synthes.com', '', '', 120),
(211, 'Wendel', 'Lopes', 'lopes.wendel@synthes.com', '(019) 2112-6691', '', 120),
(212, 'Edilaine', 'Sousa', 'sousa.edilaine@synthes.com', '(011) 3040-7075', '', 120),
(213, 'Fernando', 'Reatto', 'reatto.fernando@synthes.com', '(019) 2112-6600', '', 120),
(214, 'Vanderlei', 'Goes', 'goes.Vanderlei@synthes.com', '(019) 2112-6650', '', 120),
(215, 'Vanessa', 'Santos', 'santos.vanessa@synthes.com', '(011) 3040-7050', '', 120),
(216, 'Daiane', 'Silva', 'silva.daiane@synthes.com', '(019) 2112-6600', '', 120),
(217, 'Larissa', 'Rosseto', 'larissa.rosseto@tam.com.br', '(011) 5582-7889', '', 122),
(218, 'Eduardo', 'Kirchner', 'eduardo.kirchner@thomsonreuters.com', '', '(011) 9 9799-6097', 123),
(219, 'Bruno', 'Nunes', 'Bruno.Nunes@thomsonreuters.com', '(011) 5644-7615', '(011) 9 8463-0910', 123),
(220, 'Andressa', 'Silva', 'Andressa.Silva@thomsonreuters.com', '(011) 5644-7529', '', 123),
(221, 'Alessandra', 'Bruno', 'alessandra.bruno@thomsonreuters.com', '(011) 5644-7513', '(011) 9 7245-6006', 123),
(222, 'Amanda', 'Viana', 'Amanda.Viana@thomsonreuters.com', '(011) 5644-7818', '', 123),
(223, 'Monica', 'Angelo', 'monica.angelo@thomsonreuters.com', '(011) 2159-0500', '(011) 9 9422-4335', 123),
(224, 'Stella Marys', 'Aro Gomes', 'stella.gomes@tiisa.com.br', '(011) 3320-3067', '', 124),
(225, 'Bruno', 'Guimarães', 'bruno.guimaraes@tiisa.com.br', '(011) 3320-3038', '', 124),
(226, 'Débora', 'Fonseca da Silva', 'debora.silva@tiisa.com.br', '(011) 3320-3042', '', 124),
(227, 'Vanessa', 'Porfirio Buchwieser', 'vanessa.porfirio@tiisa.com.br', '(011) 3320-3055', '', 124),
(228, 'Gabriel', 'Folzke', 'gabriel@toledocom.com.br', '(011) 3044-5871', '(011) 9 8556-0180', 125),
(229, 'Renato', 'Oliveira', 'renato@toledocom.com.br', '(011) 3044-5871', '', 125),
(230, 'Renata', 'Rangel', 'Renata.Rangel@unilever.com', '(011) 3703 7047', '', 127),
(231, 'Natalia', 'Boaretto', 'natalia.boaretto@unilever.com', '(011) 3703-7227', '', 127),
(232, 'Allanna', 'Nigro', 'Allanna.Nigro@unilever.com', '(011) 3703-7047', '', 127),
(233, 'Elisa', 'Melo', 'Elisa.Melo@unilever.com', '(011) 3703-7022', '', 127),
(234, 'Érica', 'Molon', 'erica.molon@vtex.com.br', '(011) 4058-7977', '', 128),
(235, 'Vivian', 'Paulino', 'vivian.paulino@vtex.com.br', '(011) 4058-9990', '', 128),
(236, 'Alexandre', 'Santos', 'alexandre.santos@vtex.com.br', '(011) 4058-7977', '', 128),
(237, 'Rafael', 'Forte', 'rafael.forte@vtex.com.br', '', '(011) 9 9974-0121', 128),
(238, 'Joice', 'Gationi', 'joice.gationi@vtex.com.br', '(011) 4058-7977', '', 128),
(239, 'Priscila', 'Chiva', 'priscila.chiva@vtex.com.br', '(011) 4058-9990', '', 128),
(240, 'Fernanda', 'Jordão', 'fernanda.jordao@vtex.com.br', '', '(011) 9 6419-4215', 128),
(241, 'Alessandra', 'Hypolit o', 'alessandra.hypolito@vtex.com.br', '(011) 3028-7245', '', 128),
(242, 'Fabiana', 'Cunha', 'fabiana.cunha@vtex.com.br', '(011) 4058-9990', '', 128),
(243, 'Marisa', 'Oliveira', 'Brasil.Compras@xerox.com', '(011) 2177-0355', '', 129),
(244, 'Vanessa', 'Cestaro', 'Vanessa.Cestaro@xerox.com', '(011) 2177-0269', '', 129),
(245, 'Camila', 'Rodrigues', 'Camila.Rodrigues@xerox.com>', '(011) 3382-0373', '(011) 9 5300-6260', 129);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_produtos`
--

CREATE TABLE IF NOT EXISTS `sta_produtos` (
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
(1, 'Prod1', 20.00, '10', 'obs1', 1),
(2, 'Prod2', 30.00, '20', 'obs2', 1),
(3, 'Oregon', 12.00, '00', '', 3),
(4, 'Ãgua', 1.00, '99', 'Copo 250 ml', 1),
(5, 'TÃ©rmica de cafÃ©', 17.00, '99', 'Garrafa tÃ©rmica 1L', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_propostas`
--

CREATE TABLE IF NOT EXISTS `sta_propostas` (
  `proposta_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_10_id` int(11) NOT NULL,
  `contato_10_id` int(11) NOT NULL,
  `proposta_12_status` int(3) NOT NULL,
  `proposta_60_itens` longtext COLLATE utf8_unicode_ci NOT NULL,
  `proposta_12_vencimentoFatura` int(3) NOT NULL,
  `proposta_22_data` date NOT NULL,
  PRIMARY KEY (`proposta_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `sta_propostas`
--

INSERT INTO `sta_propostas` (`proposta_10_id`, `cliente_10_id`, `contato_10_id`, `proposta_12_status`, `proposta_60_itens`, `proposta_12_vencimentoFatura`, `proposta_22_data`) VALUES
(1, 2, 3, 1, '', 0, '2013-08-21'),
(2, 3, 4, 1, '', 0, '2013-08-21'),
(3, 2, 3, 1, '', 0, '2013-09-04'),
(4, 2, 3, 1, '', 0, '2013-09-04'),
(5, 2, 3, 1, '', 0, '2013-09-04'),
(6, 2, 3, 1, '', 0, '2013-09-19'),
(7, 2, 3, 1, '', 0, '2013-09-19'),
(8, 2, 3, 1, '', 0, '2013-09-19'),
(9, 3, 0, 1, '', 0, '2013-12-20'),
(10, 0, 0, 1, '', 0, '2013-10-18'),
(11, 0, 0, 1, '', 0, '2013-10-18'),
(12, 2, 3, 1, '', 0, '2013-11-25'),
(13, 3, 4, 1, 'LocaÃ§Ã£o da sala para os dias descritos;Projetor multimÃ­dia;Notebook;Sistema de sonorizaÃ§Ã£o;Mouse sem fio;Flip chart;Item Extra 1; Item Extra 2', 15, '2014-02-06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_reservas`
--

CREATE TABLE IF NOT EXISTS `sta_reservas` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `sta_reservas`
--

INSERT INTO `sta_reservas` (`reserva_10_id`, `proposta_10_id`, `unidade_10_id`, `sala_10_id`, `reserva_12_periodo`, `reserva_22_data`, `reserva_12_coffee`, `coffe_10_id`, `coffee_12_periodo`, `coffee_20_quantidade`, `reserva_12_cafe`, `reserva_20_quantidadeCafe`, `reserva_12_periodoCafe`, `reserva_12_agua`, `reserva_20_quantidadeAgua`, `reserva_12_periodoAgua`, `reserva_20_capacidadeSala`, `reserva_20_quantidadeParticipantes`, `reserva_12_formatoSala`, `reserva_60_coffeeObs`, `reserva_60_briefingObs`, `reserva_60_observacoes`, `reserva_15_valorSala`, `reserva_15_valorCoffee`, `reserva_15_valorCafe`, `reserva_15_valorAgua`, `reserva_15_valorEquipamentos`, `reserva_15_valorDesconto`, `reserva_15_valorTotal`) VALUES
(1, 1, 3, 4, 4, '2013-08-14', 1, 3, 3, '20', '1', '1', 3, 1, '20', 3, '', '20', 4, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(2, 1, 3, 4, 4, '2013-08-15', 1, 3, 3, '20', '1', '1', 3, 1, '20', 3, '', '20', 4, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(3, 1, 3, 4, 4, '2013-08-16', 1, 3, 3, '20', '1', '1', 3, 1, '20', 3, '', '20', 4, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(4, 2, 3, 5, 4, '2013-08-22', 1, 3, 3, '32', '1', '12', 3, 1, '12', 3, '', '32', 1, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(5, 2, 0, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(6, 4, 3, 4, 4, '2013-09-13', 1, 3, 3, '22', '1', '22', 3, 1, '22', 3, '', '22', 2, 'Obs 1', 'Obs 2', 'Obs 3', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(7, 4, 3, 4, 4, '2013-09-19', 1, 3, 3, '22', '1', '22', 3, 1, '22', 3, '', '22', 2, 'Obs 1', 'Obs 2', 'Obs 4', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(8, 5, 3, 5, 4, '2013-09-12', 1, 3, 3, '10', '1', '10', 3, 1, '10', 3, '', '30', 1, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(9, 6, 3, 4, 3, '2013-09-20', 1, 3, 3, '20', '1', '20', 3, 1, '20', 3, '60', '20', 5, 'Eh o que', 'Eh o que', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(10, 7, 3, 5, 4, '2013-09-20', 1, 3, 3, '20', '1', '20', 3, 1, '20', 3, '30', '20', 1, 'Sempre 10 a mais', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(11, 7, 3, 0, 0, '0000-00-00', 1, 3, 3, '20', '1', '20', 3, 1, '20', 3, '', '', 0, 'Sempre 10 a mais', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(14, 10, 3, 4, 1, '2013-10-18', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '20', '10', 1, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(15, 10, 3, 4, 1, '2013-10-19', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '20', '10', 2, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(18, 11, 3, 4, 1, '2013-10-18', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '20', '10', 1, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(19, 11, 3, 4, 1, '2013-10-19', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '20', '10', 2, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(23, 12, 3, 4, 4, '2013-11-04', 1, 3, 3, '10', '1', '10', 3, 1, '10', 3, '36', '10', 4, 'Poe mais', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(24, 12, 3, 3, 1, '2013-11-04', 1, 3, 3, '10', '1', '10', 3, 1, '10', 3, '46', '10', 4, 'Poe mais', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(25, 12, 3, 0, 0, '0000-00-00', 0, 0, 0, '', '', '', 0, 0, '', 0, '', '', 0, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(26, 9, 3, 4, 1, '2013-10-18', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '20', '10', 1, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(27, 9, 3, 4, 1, '2013-10-19', 1, 0, 1, '10', '1', '10', 1, 1, '10', 1, '20', '10', 2, '', '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(31, 13, 3, 4, 4, '2014-02-07', 1, 3, 1, '10', '1', '2', 3, 1, '10', 3, '20', '10', 1, '', '', '', 1250.00, 120.00, 68.00, 20.00, 200.00, 58.00, 1600.00),
(32, 13, 3, 4, 1, '2014-02-11', 1, 3, 1, '10', '1', '2', 3, 1, '10', 3, '20', '10', 1, '', '', '', 1000.00, 120.00, 68.00, 20.00, 400.00, 8.00, 1600.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_reservas_equipamento`
--

CREATE TABLE IF NOT EXISTS `sta_reservas_equipamento` (
  `reserva_equipamento_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_produto_10_id` int(11) NOT NULL,
  `produto_10_id` int(11) NOT NULL,
  `reserva_equipamento_20_quantidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserva_10_id` int(11) NOT NULL,
  PRIMARY KEY (`reserva_equipamento_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Extraindo dados da tabela `sta_reservas_equipamento`
--

INSERT INTO `sta_reservas_equipamento` (`reserva_equipamento_10_id`, `tipo_produto_10_id`, `produto_10_id`, `reserva_equipamento_20_quantidade`, `reserva_10_id`) VALUES
(1, 0, 0, '', 1),
(2, 0, 0, '', 2),
(3, 0, 0, '', 3),
(4, 3, 3, '', 4),
(5, 1, 1, '', 4),
(6, 0, 0, '', 4),
(7, 0, 0, '', 5),
(8, 3, 3, '22', 3),
(9, 1, 1, '22', 3),
(10, 3, 3, '22', 3),
(11, 3, 3, '22', 10),
(12, 1, 1, '22', 10),
(13, 3, 3, '22', 10),
(14, 1, 1, '22', 6),
(15, 3, 3, '22', 6),
(16, 0, 0, '', 6),
(17, 1, 1, '22', 7),
(18, 3, 3, '22', 7),
(19, 0, 0, '', 7),
(20, 2, 0, '10', 8),
(21, 2, 0, '1', 9),
(22, 3, 3, '10', 9),
(23, 2, 0, '1', 10),
(24, 3, 3, '10', 10),
(25, 0, 0, '', 10),
(26, 2, 0, '1', 11),
(27, 3, 3, '10', 11),
(28, 0, 0, '', 11),
(33, 3, 0, '10', 14),
(34, 0, 0, '', 14),
(35, 3, 0, '10', 15),
(36, 0, 0, '', 15),
(41, 3, 0, '10', 18),
(42, 0, 0, '', 18),
(43, 3, 0, '10', 19),
(44, 0, 0, '', 19),
(51, 2, 0, '10', 23),
(52, 0, 0, '', 23),
(53, 2, 0, '10', 24),
(54, 0, 0, '', 24),
(55, 2, 0, '10', 25),
(56, 0, 0, '', 25),
(57, 3, 0, '10', 26),
(58, 0, 0, '', 26),
(59, 3, 0, '10', 27),
(60, 0, 0, '', 27),
(64, 1, 1, '10', 31),
(65, 1, 1, '20', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_salas`
--

CREATE TABLE IF NOT EXISTS `sta_salas` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `sta_salas`
--

INSERT INTO `sta_salas` (`sala_10_id`, `sala_30_nome`, `sala_30_numero`, `sala_15_valorManha`, `sala_15_valorTarde`, `sala_15_valorNoite`, `sala_15_valorIntegral`, `sala_20_metros`, `sala_20_uMesa`, `sala_20_uSimples`, `sala_20_grupos`, `sala_20_escolar`, `sala_20_auditorio`, `unidade_10_id`) VALUES
(1, 'Sala Teste', '12', 120.00, 130.00, 140.00, 200.00, '20', '21', '22', '23', '24', '25', 1),
(2, 'Sala João Menino', '23', 0.00, 0.00, 0.00, 0.00, '11', '13', '14', '22', '24', '122', 2),
(3, 'Sala Station Vila Olimpia', '1', 1120.00, 1120.00, 840.00, 1400.00, '79', '24', '24', '40', '46', '90', 3),
(4, 'Sala Station', '2', 1000.00, 1000.00, 750.00, 1250.00, '65', '20', '20', '30', '36', '60', 3),
(5, 'Sala Station', '3', 1120.00, 1120.00, 840.00, 1400.00, '79', '30', '30', '40', '50', '90', 3),
(6, 'Sala Station', '4', 1000.00, 1000.00, 750.00, 1250.00, '52', '20', '20', '25', '30', '50', 3),
(7, 'Sala Station', '5', 640.00, 640.00, 480.00, 800.00, '25', '12', '12', '10', '12', '12', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_tipos_produto`
--

CREATE TABLE IF NOT EXISTS `sta_tipos_produto` (
  `tipo_produto_10_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_produto_30_nome` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tipo_produto_10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `sta_tipos_produto`
--

INSERT INTO `sta_tipos_produto` (`tipo_produto_10_id`, `tipo_produto_30_nome`) VALUES
(1, 'Teste Tipo'),
(2, 'Equipamento'),
(3, 'Coffee Break');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_unidades`
--

CREATE TABLE IF NOT EXISTS `sta_unidades` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `sta_unidades`
--

INSERT INTO `sta_unidades` (`unidade_10_id`, `unidade_30_nome`, `unidade_30_logradouro`, `unidade_30_numero`, `unidade_30_bairro`, `unidade_30_complemento`, `unidade_30_cidade`, `unidade_30_estado`, `unidade_30_cep`, `unidade_30_ddd`, `unidade_30_telefone`, `unidade_30_nomeContato`) VALUES
(1, 'nome', 'end', 'nr', 'ba', 'comp', 'cid', 'SP', 'cp', '11', '11111111', 'cont'),
(2, 'Unidade Teste', 'Rua do Teste', '23', 'Bairro Teste', 'Sala 2', 'São Paulo', 'SP', '00000-123', '011', '1111-2323', 'Contato Teste'),
(3, 'Station Lab', 'Avenida Doutor Cardoso de Mello', '1491', 'Vila Olímpia', '', 'São Paulo', 'SP', '04548-005', '011', '3704-4377', 'Nathalia Saporito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sta_usuarios`
--

CREATE TABLE IF NOT EXISTS `sta_usuarios` (
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
(2, 'nathalia', 'ZTI2OTYwN2M1MzQxZjMxZGJmM2U3OTZhMDMxNmMzMWM=', 'Nathalia Saporito', 'nathalia@stationct.com.br', 'user-nophoto.jpg', 2, 1);
