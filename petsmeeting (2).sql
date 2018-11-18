-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Nov-2018 às 23:39
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsmeeting`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `idanimais` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `ano_nascimento` year(4) DEFAULT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `fk_idtipo_animal` int(11) NOT NULL,
  `fk_idUsuario` int(11) NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `fk_idraca` int(11) DEFAULT NULL,
  `foto_principal` varchar(1000) DEFAULT NULL,
  `descricao` longtext,
  PRIMARY KEY (`idanimais`),
  KEY `fk_animais_tipo_animal1_idx` (`fk_idtipo_animal`),
  KEY `fk_animais_Usuario1_idx` (`fk_idUsuario`),
  KEY `fk_idraca_idx` (`fk_idraca`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`idanimais`, `nome`, `ativo`, `peso`, `altura`, `ano_nascimento`, `apelido`, `fk_idtipo_animal`, `fk_idUsuario`, `sexo`, `fk_idraca`, `foto_principal`, `descricao`) VALUES
(21, 'Bethoven', 1, 50, 0.7, 2017, NULL, 1, 1, 'm', 65, '10_Things_Bordeaux_Stack.jpg', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `idcidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `ativo` varchar(45) DEFAULT '1',
  `fk_idestado` int(11) NOT NULL,
  PRIMARY KEY (`idcidade`),
  KEY `fk_cidade_estado1_idx` (`fk_idestado`)
) ENGINE=InnoDB AUTO_INCREMENT=463 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`idcidade`, `nome`, `ativo`, `fk_idestado`) VALUES
(1, 'Abadia dos Dourados', '1', 1),
(2, 'Abaeté', '1', 1),
(3, 'Abre Campo', '1', 1),
(4, 'Acaiaca', '1', 1),
(5, 'Açucena', '1', 1),
(6, 'Água Boa', '1', 1),
(7, 'Água Comprida', '1', 1),
(8, 'Aguanil', '1', 1),
(9, 'Águas Formosas', '1', 1),
(10, 'Águas Vermelhas', '1', 1),
(11, 'Aimorés', '1', 1),
(12, 'Aiuruoca', '1', 1),
(13, 'Alagoa', '1', 1),
(14, 'Albertina', '1', 1),
(15, 'Além Paraíba', '1', 1),
(16, 'Alfenas', '1', 1),
(17, 'Alfredo Vasconcelos', '1', 1),
(18, 'Almenara', '1', 1),
(19, 'Alpercata', '1', 1),
(20, 'Alpinópolis', '1', 1),
(21, 'Alterosa', '1', 1),
(22, 'Alto Caparaó', '1', 1),
(23, 'Alto Jequitibá', '1', 1),
(24, 'Alto Rio Doce', '1', 1),
(25, 'Alvarenga', '1', 1),
(26, 'Alvinópolis', '1', 1),
(27, 'Alvorada de Minas', '1', 1),
(28, 'Amparo do Serra', '1', 1),
(29, 'Andradas', '1', 1),
(30, 'Andrelândia', '1', 1),
(31, 'Angelândia', '1', 1),
(32, 'Antônio Carlos', '1', 1),
(33, 'Antônio Dias', '1', 1),
(34, 'Antônio Prado de Minas', '1', 1),
(35, 'Araçaí', '1', 1),
(36, 'Aracitaba', '1', 1),
(37, 'Araçuaí', '1', 1),
(38, 'Araguari', '1', 1),
(39, 'Arantina', '1', 1),
(40, 'Araponga', '1', 1),
(41, 'Araporã', '1', 1),
(42, 'Arapuá', '1', 1),
(43, 'Araújos', '1', 1),
(44, 'Araxá', '1', 1),
(45, 'Arceburgo', '1', 1),
(46, 'Arcos', '1', 1),
(47, 'Areado', '1', 1),
(48, 'Argirita', '1', 1),
(49, 'Aricanduva', '1', 1),
(50, 'Arinos', '1', 1),
(51, 'Astolfo Dutra', '1', 1),
(52, 'Ataléia', '1', 1),
(53, 'Augusto de Lima', '1', 1),
(54, 'Baependi', '1', 1),
(55, 'Baldim', '1', 1),
(56, 'Bambuí', '1', 1),
(57, 'Bandeira', '1', 1),
(58, 'Bandeira do Sul', '1', 1),
(59, 'Barão de Cocais', '1', 1),
(60, 'Barão de Monte Alto', '1', 1),
(61, 'Barbacena', '1', 1),
(62, 'Barra Longa', '1', 1),
(63, 'Barroso', '1', 1),
(64, 'Bela Vista de Minas', '1', 1),
(65, 'Belmiro Braga', '1', 1),
(66, 'Belo Horizonte', '1', 1),
(67, 'Belo Oriente', '1', 1),
(68, 'Belo Vale', '1', 1),
(69, 'Berilo', '1', 1),
(70, 'Berizal', '1', 1),
(71, 'Bertópolis', '1', 1),
(72, 'Betim', '1', 1),
(73, 'Bias Fortes', '1', 1),
(74, 'Bicas', '1', 1),
(75, 'Biquinhas', '1', 1),
(76, 'Boa Esperança', '1', 1),
(77, 'Bocaina de Minas', '1', 1),
(78, 'Bocaiúva', '1', 1),
(79, 'Bom Despacho', '1', 1),
(80, 'Bom Jardim de Minas', '1', 1),
(81, 'Bom Jesus da Penha', '1', 1),
(82, 'Bom Jesus do Amparo', '1', 1),
(83, 'Bom Jesus do Galho', '1', 1),
(84, 'Bom Repouso', '1', 1),
(85, 'Bom Sucesso', '1', 1),
(86, 'Bonfim', '1', 1),
(87, 'Bonfinópolis de Minas', '1', 1),
(88, 'Bonito de Minas', '1', 1),
(89, 'Borda da Mata', '1', 1),
(90, 'Botelhos', '1', 1),
(91, 'Botumirim', '1', 1),
(92, 'Brás Pires', '1', 1),
(93, 'Brasilândia de Minas', '1', 1),
(94, 'Brasília de Minas', '1', 1),
(95, 'Brasópolis', '1', 1),
(96, 'Braúnas', '1', 1),
(97, 'Brumadinho', '1', 1),
(98, 'Bueno Brandão', '1', 1),
(99, 'Buenópolis', '1', 1),
(100, 'Bugre', '1', 1),
(101, 'Buritis', '1', 1),
(102, 'Buritizeiro', '1', 1),
(103, 'Cabeceira Grande', '1', 1),
(104, 'Cabo Verde', '1', 1),
(105, 'Cachoeira da Prata', '1', 1),
(106, 'Cachoeira de Minas', '1', 1),
(107, 'Cachoeira de Pajeú', '1', 1),
(108, 'Cachoeira Dourada', '1', 1),
(109, 'Caetanópolis', '1', 1),
(110, 'Caeté', '1', 1),
(111, 'Caiana', '1', 1),
(112, 'Cajuri', '1', 1),
(113, 'Caldas', '1', 1),
(114, 'Camacho', '1', 1),
(115, 'Camanducaia', '1', 1),
(116, 'Cambuí', '1', 1),
(117, 'Cambuquira', '1', 1),
(118, 'Campanário', '1', 1),
(119, 'Campanha', '1', 1),
(120, 'Campestre', '1', 1),
(121, 'Campina Verde', '1', 1),
(122, 'Campo Azul', '1', 1),
(123, 'Campo Belo', '1', 1),
(124, 'Campo do Meio', '1', 1),
(125, 'Campo Florido', '1', 1),
(126, 'Campos Altos', '1', 1),
(127, 'Campos Gerais', '1', 1),
(128, 'Cana Verde', '1', 1),
(129, 'Canaã', '1', 1),
(130, 'Canápolis', '1', 1),
(131, 'Candeias', '1', 1),
(132, 'Cantagalo', '1', 1),
(133, 'Caparaó', '1', 1),
(134, 'Capela Nova', '1', 1),
(135, 'Capelinha', '1', 1),
(136, 'Capetinga', '1', 1),
(137, 'Capim Branco', '1', 1),
(138, 'Capinópolis', '1', 1),
(139, 'Capitão Andrade', '1', 1),
(140, 'Capitão Enéas', '1', 1),
(141, 'Capitólio', '1', 1),
(142, 'Caputira', '1', 1),
(143, 'Caraí', '1', 1),
(144, 'Caranaíba', '1', 1),
(145, 'Carandaí', '1', 1),
(146, 'Carangola', '1', 1),
(147, 'Caratinga', '1', 1),
(148, 'Carbonita', '1', 1),
(149, 'Careaçu', '1', 1),
(150, 'Carlos Chagas', '1', 1),
(151, 'Carmésia', '1', 1),
(152, 'Carmo da Cachoeira', '1', 1),
(153, 'Carmo da Mata', '1', 1),
(154, 'Carmo de Minas', '1', 1),
(155, 'Carmo do Cajuru', '1', 1),
(156, 'Carmo do Paranaíba', '1', 1),
(157, 'Carmo do Rio Claro', '1', 1),
(158, 'Carmópolis de Minas', '1', 1),
(159, 'Carneirinho', '1', 1),
(160, 'Carrancas', '1', 1),
(161, 'Carvalhópolis', '1', 1),
(162, 'Carvalhos', '1', 1),
(163, 'Casa Grande', '1', 1),
(164, 'Cascalho Rico', '1', 1),
(165, 'Cássia', '1', 1),
(166, 'Cataguases', '1', 1),
(167, 'Catas Altas', '1', 1),
(168, 'Catas Altas da Noruega', '1', 1),
(169, 'Catuji', '1', 1),
(170, 'Catuti', '1', 1),
(171, 'Caxambu', '1', 1),
(172, 'Cedro do Abaeté', '1', 1),
(173, 'Central de Minas', '1', 1),
(174, 'Centralina', '1', 1),
(175, 'Chácara', '1', 1),
(176, 'Chalé', '1', 1),
(177, 'Chapada do Norte', '1', 1),
(178, 'Chapada Gaúcha', '1', 1),
(179, 'Chiador', '1', 1),
(180, 'Cipotânea', '1', 1),
(181, 'Claraval', '1', 1),
(182, 'Claro dos Poções', '1', 1),
(183, 'Cláudio', '1', 1),
(184, 'Coimbra', '1', 1),
(185, 'Coluna', '1', 1),
(186, 'Comendador Gomes', '1', 1),
(187, 'Comercinho', '1', 1),
(188, 'Conceição da Aparecida', '1', 1),
(189, 'Conceição da Barra de Minas', '1', 1),
(190, 'Conceição das Alagoas', '1', 1),
(191, 'Conceição das Pedras', '1', 1),
(192, 'Conceição de Ipanema', '1', 1),
(193, 'Conceição do Mato Dentro', '1', 1),
(194, 'Conceição do Pará', '1', 1),
(195, 'Conceição do Rio Verde', '1', 1),
(196, 'Conceição dos Ouros', '1', 1),
(197, 'Cônego Marinho', '1', 1),
(198, 'Confins', '1', 1),
(199, 'Congonhal', '1', 1),
(200, 'Congonhas', '1', 1),
(201, 'Congonhas do Norte', '1', 1),
(202, 'Conquista', '1', 1),
(203, 'Conselheiro Lafaiete', '1', 1),
(204, 'Conselheiro Pena', '1', 1),
(205, 'Consolação', '1', 1),
(206, 'Contagem', '1', 1),
(207, 'Coqueiral', '1', 1),
(208, 'Coração de Jesus', '1', 1),
(209, 'Cordisburgo', '1', 1),
(210, 'Cordislândia', '1', 1),
(211, 'Corinto', '1', 1),
(212, 'Coroaci', '1', 1),
(213, 'Coromandel', '1', 1),
(214, 'Coronel Fabriciano', '1', 1),
(215, 'Coronel Murta', '1', 1),
(216, 'Coronel Pacheco', '1', 1),
(217, 'Coronel Xavier Chaves', '1', 1),
(218, 'Córrego Danta', '1', 1),
(219, 'Córrego do Bom Jesus', '1', 1),
(220, 'Córrego Fundo', '1', 1),
(221, 'Córrego Novo', '1', 1),
(222, 'Couto de Magalhães de Minas', '1', 1),
(223, 'Crisólita', '1', 1),
(224, 'Cristais', '1', 1),
(225, 'Cristália', '1', 1),
(226, 'Cristiano Otoni', '1', 1),
(227, 'Cristina', '1', 1),
(228, 'Crucilândia', '1', 1),
(229, 'Cruzeiro da Fortaleza', '1', 1),
(230, 'Cruzília', '1', 1),
(231, 'Cuparaque', '1', 1),
(232, 'Curral de Dentro', '1', 1),
(233, 'Curvelo', '1', 1),
(234, 'Datas', '1', 1),
(235, 'Delfim Moreira', '1', 1),
(236, 'Delfinópolis', '1', 1),
(237, 'Delta', '1', 1),
(238, 'Descoberto', '1', 1),
(239, 'Desterro de Entre Rios', '1', 1),
(240, 'Desterro do Melo', '1', 1),
(241, 'Diamantina', '1', 1),
(242, 'Diogo de Vasconcelos', '1', 1),
(243, 'Dionísio', '1', 1),
(244, 'Divinésia', '1', 1),
(245, 'Divino', '1', 1),
(246, 'Divino das Laranjeiras', '1', 1),
(247, 'Divinolândia de Minas', '1', 1),
(248, 'Divinópolis', '1', 1),
(249, 'Divisa Alegre', '1', 1),
(250, 'Divisa Nova', '1', 1),
(251, 'Divisópolis', '1', 1),
(252, 'Dom Bosco', '1', 1),
(253, 'Dom Cavati', '1', 1),
(254, 'Dom Joaquim', '1', 1),
(255, 'Dom Silvério', '1', 1),
(256, 'Dom Viçoso', '1', 1),
(257, 'Dona Eusébia', '1', 1),
(258, 'Dores de Campos', '1', 1),
(259, 'Dores de Guanhães', '1', 1),
(260, 'Dores do Indaiá', '1', 1),
(261, 'Dores do Turvo', '1', 1),
(262, 'Doresópolis', '1', 1),
(263, 'Douradoquara', '1', 1),
(264, 'Durandé', '1', 1),
(265, 'Elói Mendes', '1', 1),
(266, 'Engenheiro Caldas', '1', 1),
(267, 'Engenheiro Navarro', '1', 1),
(268, 'Entre Folhas', '1', 1),
(269, 'Entre Rios de Minas', '1', 1),
(270, 'Ervália', '1', 1),
(271, 'Esmeraldas', '1', 1),
(272, 'Espera Feliz', '1', 1),
(273, 'Espinosa', '1', 1),
(274, 'Espírito Santo do Dourado', '1', 1),
(275, 'Estiva', '1', 1),
(276, 'Estrela Dalva', '1', 1),
(277, 'Estrela do Indaiá', '1', 1),
(278, 'Estrela do Sul', '1', 1),
(279, 'Eugenópolis', '1', 1),
(280, 'Ewbank da Câmara', '1', 1),
(281, 'Extrema', '1', 1),
(282, 'Fama', '1', 1),
(283, 'Faria Lemos', '1', 1),
(284, 'Felício dos Santos', '1', 1),
(285, 'Felisburgo', '1', 1),
(286, 'Felixlândia', '1', 1),
(287, 'Fernandes Tourinho', '1', 1),
(288, 'Ferros', '1', 1),
(289, 'Fervedouro', '1', 1),
(290, 'Florestal', '1', 1),
(291, 'Formiga', '1', 1),
(292, 'Formoso', '1', 1),
(293, 'Fortaleza de Minas', '1', 1),
(294, 'Fortuna de Minas', '1', 1),
(295, 'Francisco Badaró', '1', 1),
(296, 'Francisco Dumont', '1', 1),
(297, 'Francisco Sá', '1', 1),
(298, 'Franciscópolis', '1', 1),
(299, 'Frei Gaspar', '1', 1),
(300, 'Frei Inocêncio', '1', 1),
(301, 'Frei Lagonegro', '1', 1),
(302, 'Fronteira', '1', 1),
(303, 'Fronteira dos Vales', '1', 1),
(304, 'Fruta de Leite', '1', 1),
(305, 'Frutal', '1', 1),
(306, 'Funilândia', '1', 1),
(307, 'Galiléia', '1', 1),
(308, 'Gameleiras', '1', 1),
(309, 'Glaucilândia', '1', 1),
(310, 'Goiabeira', '1', 1),
(311, 'Goianá', '1', 1),
(312, 'Gonçalves', '1', 1),
(313, 'Gonzaga', '1', 1),
(314, 'Gouveia', '1', 1),
(315, 'Governador Valadares', '1', 1),
(316, 'Grão Mogol', '1', 1),
(317, 'Grupiara', '1', 1),
(318, 'Guanhães', '1', 1),
(319, 'Guapé', '1', 1),
(320, 'Guaraciaba', '1', 1),
(321, 'Guaraciama', '1', 1),
(322, 'Guaranésia', '1', 1),
(323, 'Guarani', '1', 1),
(324, 'Guarará', '1', 1),
(325, 'Guarda-Mor', '1', 1),
(326, 'Guaxupé', '1', 1),
(327, 'Guidoval', '1', 1),
(328, 'Guimarânia', '1', 1),
(329, 'Guiricema', '1', 1),
(330, 'Gurinhatã', '1', 1),
(331, 'Heliodora', '1', 1),
(332, 'Iapu', '1', 1),
(333, 'Ibertioga', '1', 1),
(334, 'Ibiá', '1', 1),
(335, 'Ibiaí', '1', 1),
(336, 'Ibiracatu', '1', 1),
(337, 'Ibiraci', '1', 1),
(338, 'Ibirité', '1', 1),
(339, 'Ibitiúra de Minas', '1', 1),
(340, 'Ibituruna', '1', 1),
(341, 'Icaraí de Minas', '1', 1),
(342, 'Igarapé', '1', 1),
(343, 'Igaratinga', '1', 1),
(344, 'Iguatama', '1', 1),
(345, 'Ijaci', '1', 1),
(346, 'Ilicínea', '1', 1),
(347, 'Imbé de Minas', '1', 1),
(348, 'Inconfidentes', '1', 1),
(349, 'Indaiabira', '1', 1),
(350, 'Indianópolis', '1', 1),
(351, 'Ingaí', '1', 1),
(352, 'Inhapim', '1', 1),
(353, 'Inhaúma', '1', 1),
(354, 'Inimutaba', '1', 1),
(355, 'Ipaba', '1', 1),
(356, 'Ipanema', '1', 1),
(357, 'Ipatinga', '1', 1),
(358, 'Ipiaçu', '1', 1),
(359, 'Ipuiúna', '1', 1),
(360, 'Iraí de Minas', '1', 1),
(361, 'Itabira', '1', 1),
(362, 'Itabirinha de Mantena', '1', 1),
(363, 'Itabirito', '1', 1),
(364, 'Itacambira', '1', 1),
(365, 'Itacarambi', '1', 1),
(366, 'Itaguara', '1', 1),
(367, 'Itaipé', '1', 1),
(368, 'Itajubá', '1', 1),
(369, 'Itamarandiba', '1', 1),
(370, 'Itamarati de Minas', '1', 1),
(371, 'Itambacuri', '1', 1),
(372, 'Itambé do Mato Dentro', '1', 1),
(373, 'Itamogi', '1', 1),
(374, 'Itamonte', '1', 1),
(375, 'Itanhandu', '1', 1),
(376, 'Itanhomi', '1', 1),
(377, 'Itaobim', '1', 1),
(378, 'Itapagipe', '1', 1),
(379, 'Itapecerica', '1', 1),
(380, 'Itapeva', '1', 1),
(381, 'Itatiaiuçu', '1', 1),
(382, 'Itaú de Minas', '1', 1),
(383, 'Itaúna', '1', 1),
(384, 'Itaverava', '1', 1),
(385, 'Itinga', '1', 1),
(386, 'Itueta', '1', 1),
(387, 'Ituiutaba', '1', 1),
(388, 'Itumirim', '1', 1),
(389, 'Iturama', '1', 1),
(390, 'Itutinga', '1', 1),
(391, 'Jaboticatubas', '1', 1),
(392, 'Jacinto', '1', 1),
(393, 'Jacuí', '1', 1),
(394, 'Jacutinga', '1', 1),
(395, 'Jaguaraçu', '1', 1),
(396, 'Jaíba', '1', 1),
(397, 'Jampruca', '1', 1),
(398, 'Janaúba', '1', 1),
(399, 'Januária', '1', 1),
(400, 'Japaraíba', '1', 1),
(401, 'Japonvar', '1', 1),
(402, 'Jeceaba', '1', 1),
(403, 'Jenipapo de Minas', '1', 1),
(404, 'Jequeri', '1', 1),
(405, 'Jequitaí', '1', 1),
(406, 'Jequitibá', '1', 1),
(407, 'Jequitinhonha', '1', 1),
(408, 'Jesuânia', '1', 1),
(409, 'Joaíma', '1', 1),
(410, 'Joanésia', '1', 1),
(411, 'João Monlevade', '1', 1),
(412, 'João Pinheiro', '1', 1),
(413, 'Joaquim Felício', '1', 1),
(414, 'Jordânia', '1', 1),
(415, 'José Gonçalves de Minas', '1', 1),
(416, 'José Raydan', '1', 1),
(417, 'Josenópolis', '1', 1),
(418, 'Juatuba', '1', 1),
(419, 'Juiz de Fora', '1', 1),
(420, 'Juramento', '1', 1),
(421, 'Juruaia', '1', 1),
(422, 'Juvenília', '1', 1),
(423, 'Ladainha', '1', 1),
(424, 'Lagamar', '1', 1),
(425, 'Lagoa da Prata', '1', 1),
(426, 'Lagoa dos Patos', '1', 1),
(427, 'Lagoa Dourada', '1', 1),
(428, 'Lagoa Formosa', '1', 1),
(429, 'Lagoa Grande', '1', 1),
(430, 'Lagoa Santa', '1', 1),
(431, 'Lajinha', '1', 1),
(432, 'Lambari', '1', 1),
(433, 'Lamim', '1', 1),
(434, 'Laranjal', '1', 1),
(435, 'Lassance', '1', 1),
(436, 'Lavras', '1', 1),
(437, 'Leandro Ferreira', '1', 1),
(438, 'Leme do Prado', '1', 1),
(439, 'Leopoldina', '1', 1),
(440, 'Liberdade', '1', 1),
(441, 'Lima Duarte', '1', 1),
(442, 'Limeira do Oeste', '1', 1),
(443, 'Lontra', '1', 1),
(444, 'Luisburgo', '1', 1),
(445, 'Luislândia', '1', 1),
(446, 'Luminárias', '1', 1),
(447, 'Luz', '1', 1),
(448, 'Machacalis', '1', 1),
(449, 'Machado', '1', 1),
(450, 'Madre de Deus de Minas', '1', 1),
(451, 'Malacacheta', '1', 1),
(452, 'Mamonas', '1', 1),
(453, 'Manga', '1', 1),
(454, 'Manhuaçu', '1', 1),
(455, 'Manhumirim', '1', 1),
(456, 'Mantena', '1', 1),
(457, 'Mar de Espanha', '1', 1),
(458, 'Maravilhas', '1', 1),
(459, 'Maria da Fé', '1', 1),
(460, 'Mariana', '1', 1),
(461, 'Marilac', '1', 1),
(462, 'Mário Campos', '1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo_notificacao`
--

DROP TABLE IF EXISTS `conteudo_notificacao`;
CREATE TABLE IF NOT EXISTS `conteudo_notificacao` (
  `idnotificacao` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(300) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `id_destino` int(11) DEFAULT NULL,
  PRIMARY KEY (`idnotificacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversa`
--

DROP TABLE IF EXISTS `conversa`;
CREATE TABLE IF NOT EXISTS `conversa` (
  `fk_idUsuario` int(11) NOT NULL,
  `Fk_idMensagem` int(11) NOT NULL,
  `id_destinatario` int(11) DEFAULT NULL,
  PRIMARY KEY (`fk_idUsuario`,`Fk_idMensagem`),
  KEY `fk_Usuario_has_Mensagem_Mensagem1_idx` (`Fk_idMensagem`),
  KEY `fk_Usuario_has_Mensagem_Usuario1_idx` (`fk_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `encontro`
--

DROP TABLE IF EXISTS `encontro`;
CREATE TABLE IF NOT EXISTS `encontro` (
  `animais_idanimais` int(11) NOT NULL,
  `animais_idanimais1` int(11) NOT NULL,
  `ativo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`animais_idanimais`,`animais_idanimais1`),
  KEY `fk_animais_has_animais_animais2_idx` (`animais_idanimais1`),
  KEY `fk_animais_has_animais_animais1_idx` (`animais_idanimais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `idendereco` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `fk_idcidade` int(11) NOT NULL,
  `fk_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idendereco`),
  KEY `fk_endereco_cidade1_idx` (`fk_idcidade`),
  KEY `fk_endereco_Usuario1_idx` (`fk_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `idestado` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idestado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`idestado`, `nome`, `ativo`) VALUES
(1, 'Minas Gerais', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_animal`
--

DROP TABLE IF EXISTS `fotos_animal`;
CREATE TABLE IF NOT EXISTS `fotos_animal` (
  `idfotos` int(11) NOT NULL,
  `diretorio` varchar(200) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `fk_idanimais` int(11) NOT NULL,
  PRIMARY KEY (`idfotos`),
  KEY `fk_fotos_animais_animais1_idx` (`fk_idanimais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_usuario`
--

DROP TABLE IF EXISTS `fotos_usuario`;
CREATE TABLE IF NOT EXISTS `fotos_usuario` (
  `idfotos` int(11) NOT NULL,
  `diretorio` varchar(200) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `fk_idtipo_fotos` int(11) NOT NULL,
  `fk_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idfotos`),
  KEY `fk_fotos_tipo_fotos1_idx` (`fk_idtipo_fotos`),
  KEY `fk_fotos_Usuario1_idx` (`fk_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacao`
--

DROP TABLE IF EXISTS `localizacao`;
CREATE TABLE IF NOT EXISTS `localizacao` (
  `idlocalizacao` int(11) NOT NULL AUTO_INCREMENT,
  `lagitude` varchar(300) DEFAULT NULL,
  `longitude` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idlocalizacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `log_acesso`
--

DROP TABLE IF EXISTS `log_acesso`;
CREATE TABLE IF NOT EXISTS `log_acesso` (
  `idlog_acesso` int(11) NOT NULL AUTO_INCREMENT,
  `ip_usuario` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idlog_acesso`),
  KEY `fk_log_acesso_Usuario1_idx` (`Usuario_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE IF NOT EXISTS `mensagem` (
  `idMensagem` int(11) NOT NULL AUTO_INCREMENT,
  `chatMensagem` longtext,
  `ativo` int(11) DEFAULT '1',
  `id_destinatario` varchar(45) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  `codigoMensagem` varchar(1000) DEFAULT NULL,
  `codigoMensagemReverso` varchar(1000) DEFAULT NULL,
  `codigofinal` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idMensagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

DROP TABLE IF EXISTS `notificacao`;
CREATE TABLE IF NOT EXISTS `notificacao` (
  `idnotificacao` int(11) NOT NULL AUTO_INCREMENT,
  `fk_idtipo_notificacao` int(11) DEFAULT NULL,
  `idAmigo` int(11) DEFAULT NULL,
  `codigoTotal` varchar(1000) DEFAULT NULL,
  `fk_idUsuario` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT '1',
  PRIMARY KEY (`idnotificacao`),
  KEY `fk_idtipo_notificacao_idx` (`fk_idtipo_notificacao`),
  KEY `fk_idUsuario_idx` (`fk_idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notificacao`
--

INSERT INTO `notificacao` (`idnotificacao`, `fk_idtipo_notificacao`, `idAmigo`, `codigoTotal`, `fk_idUsuario`, `ativo`) VALUES
(1, 1, 1, '44', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `racas`
--

DROP TABLE IF EXISTS `racas`;
CREATE TABLE IF NOT EXISTS `racas` (
  `idracas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `ativo` int(11) DEFAULT '1',
  PRIMARY KEY (`idracas`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `racas`
--

INSERT INTO `racas` (`idracas`, `nome`, `ativo`) VALUES
(1, 'Affenpinscher', 1),
(2, 'Afghan Hound', 1),
(3, 'Airedale Terrier', 1),
(4, 'Akita', 1),
(5, 'Akita Americano', 1),
(6, 'American Pit Bull Terrier', 1),
(7, 'American Staffordshire Terrier', 1),
(8, 'Australian Shepherd', 1),
(9, 'Basenji', 1),
(10, 'Basset Fulvo da Bretanha', 1),
(11, 'Basset Hound', 1),
(12, 'Beagle', 1),
(13, 'Beagle-Harrier', 1),
(14, 'Bearded Collie', 1),
(15, 'Bedlington Terrier', 1),
(16, 'Bernese Mountain Dog', 1),
(17, 'Bichon Bolonhês', 1),
(18, 'Bichon Frisé', 1),
(19, 'Bichon Havanês', 1),
(20, 'Boerboel', 1),
(21, 'Boiadeiro de Entlebuch', 1),
(22, 'Border Collie', 1),
(23, 'Border Terrier', 1),
(24, 'Borzoi', 1),
(25, 'Boston Terrier', 1),
(26, 'Bouvier de Flandres', 1),
(27, 'Boxer', 1),
(28, 'Braco Alemão Pelo Curto', 1),
(29, 'Braco Alemão Pelo Duro', 1),
(30, 'Braco Italiano', 1),
(31, 'Buldogue Americano', 1),
(32, 'Buldogue Francês', 1),
(33, 'Buldogue Inglês', 1),
(34, 'Bull Terrier', 1),
(35, 'Bullmastiff', 1),
(36, 'Cairn Terrier', 1),
(37, 'Cane Corso', 1),
(38, 'Cão de Crista Chinês', 1),
(39, 'Cão de Santo Humberto', 1),
(40, 'Cão D’água Espanhol', 1),
(41, 'Cão D’água Português', 1),
(42, 'Cão Lobo Checoslovaco', 1),
(43, 'Cão Pelado Mexicano', 1),
(44, 'Cão Pelado Peruano', 1),
(45, 'Cavalier King Charles Spaniel', 1),
(46, 'Cesky Terrier', 1),
(47, 'Chesapeake Bay Retriever', 1),
(48, 'Chihuahua', 1),
(49, 'Chin', 1),
(50, 'Chow-chow Pelo Curto', 1),
(51, 'Chow-chow Pelo Longo', 1),
(52, 'Cirneco do Etna', 1),
(53, 'Clumber Spaniel', 1),
(54, 'Cocker Spaniel Americano', 1),
(55, 'Cocker Spaniel Inglês', 1),
(56, 'Collie pelo longo', 1),
(57, 'Coton de Tulear', 1),
(58, 'Dachshund Teckel - Pelo Curto', 1),
(59, 'Dálmata', 1),
(60, 'Dandie Dinmont Terrier', 1),
(61, 'Dobermann', 1),
(62, 'Dogo Argentino', 1),
(63, 'Dogo Canário', 1),
(64, 'Dogue Alemão', 1),
(65, 'Dogue de Bordeaux', 1),
(66, 'Elkhound Norueguês Cinza', 1),
(67, 'Fila Brasileiro', 1),
(68, 'Flat-Coated Retriever', 1),
(69, 'Fox Terrier Pelo Duro', 1),
(70, 'Fox Terrier Pelo Liso', 1),
(71, 'Foxhound Inglês', 1),
(72, 'Galgo Espanhol', 1),
(73, 'Golden Retriever', 1),
(74, 'Grande Münsterländer', 1),
(75, 'Greyhound', 1),
(76, 'Griffon Belga', 1),
(77, 'Griffon de Bruxelas', 1),
(78, 'Husky Siberiano', 1),
(79, 'Ibizan Hound', 1),
(80, 'Irish Soft Coated Wheaten Terrier', 1),
(81, 'Irish Wolfhound', 1),
(82, 'Jack Russell Terrier', 1),
(83, 'Kerry Blue Terrier', 1),
(84, 'Komondor', 1),
(85, 'Kuvasz', 1),
(86, 'Labrador Retriever', 1),
(87, 'Lagotto Romagnolo', 1),
(88, 'Lakeland Terrier', 1),
(89, 'Leonberger', 1),
(90, 'Lhasa Apso', 1),
(91, 'Malamute do Alasca', 1),
(92, 'Maltês', 1),
(93, 'Mastiff', 1),
(94, 'Mastim Espanhol', 1),
(95, 'Mastino Napoletano', 1),
(96, 'Mudi', 1),
(97, 'Nordic Spitz', 1),
(98, 'Norfolk Terrier', 1),
(99, 'Norwich Terrier', 1),
(100, 'Old English Sheepdog', 1),
(101, 'Papillon', 1),
(102, 'Parson Russell Terrier', 1),
(103, 'Pastor Alemão', 1),
(104, 'Pastor Beauceron', 1),
(105, 'Pastor Belga', 1),
(106, 'Pastor Bergamasco', 1),
(107, 'Pastor Branco Suíço', 1),
(108, 'Pastor Briard', 1),
(109, 'Pastor da Ásia Central', 1),
(110, 'Pastor de Shetland', 1),
(111, 'Pastor dos Pirineus', 1),
(112, 'Pastor Maremano Abruzês', 1),
(113, 'Pastor Polonês', 1),
(114, 'Pastor Polonês da Planície', 1),
(115, 'Pequeno Basset Griffon da Vendéia', 1),
(116, 'Pequeno Cão Leão', 1),
(117, 'Pequeno Lebrel Italiano', 1),
(118, 'Pequinês', 1),
(119, 'Perdigueiro Português', 1),
(120, 'Petit Brabançon', 1),
(121, 'Pharaoh Hound', 1),
(122, 'Pinscher Miniatura', 1),
(123, 'Podengo Canário', 1),
(124, 'Podengo Português', 1),
(125, 'Pointer Inglês', 1),
(126, 'Poodle Anão', 1),
(127, 'Poodle Médio', 1),
(128, 'Poodle Standard', 1),
(129, 'Poodle Toy', 1),
(130, 'Pug', 1),
(131, 'Puli', 1),
(132, 'Pumi', 1),
(133, 'Rhodesian Ridgeback', 1),
(134, 'Rottweiler', 1),
(135, 'Saluki', 1),
(136, 'Samoieda', 1),
(137, 'São Bernardo', 1),
(138, 'Schipperke', 1),
(139, 'Schnauzer', 1),
(140, 'Schnauzer Gigante', 1),
(141, 'Schnauzer Miniatura', 1),
(142, 'Scottish Terrier', 1),
(143, 'Sealyham Terrier', 1),
(144, 'Setter Gordon', 1),
(145, 'Setter Inglês', 1),
(146, 'Setter Irlandês Vermelho', 1),
(147, 'Setter Irlandês Vermelho e Branco', 1),
(148, 'Shar-pei', 1),
(149, 'Shiba', 1),
(150, 'Shih-Tzu', 1),
(151, 'Silky Terrier Australiano', 1),
(152, 'Skye Terrier', 1),
(153, 'Smoushond Holandês', 1),
(154, 'Spaniel Bretão', 1),
(155, 'Spinone Italiano', 1),
(156, 'Spitz Alemão Anão', 1),
(157, 'Spitz Finlandês', 1),
(158, 'Spitz Japonês Anão', 1),
(159, 'Springer Spaniel Inglês', 1),
(160, 'Stabyhoun', 1),
(161, 'Staffordshire Bull Terrier', 1),
(162, 'Terra Nova', 1),
(163, 'Terrier Alemão de caça Jagd', 1),
(164, 'Terrier Brasileiro', 1),
(165, 'Terrier Irlandês de Glen do Imaal', 1),
(166, 'Terrier Preto da Rússia', 1),
(167, 'Tibetan Terrier', 1),
(168, 'Tosa Inu', 1),
(169, 'Vira-Latas', 1),
(170, 'Vizsla', 1),
(171, 'Volpino Italiano', 1),
(172, 'Weimaraner', 1),
(173, 'Welsh Corgi Cardigan', 1),
(174, 'Welsh Corgi Pembroke', 1),
(175, 'Welsh Springer Spaniel', 1),
(176, 'Welsh Terrier', 1),
(177, 'West Highland White Terrier', 1),
(178, 'Whippet', 1),
(179, 'Yorkshire Terrier', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao_senha`
--

DROP TABLE IF EXISTS `solicitacao_senha`;
CREATE TABLE IF NOT EXISTS `solicitacao_senha` (
  `idsolicitacao_senha` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(45) DEFAULT NULL,
  `ativo` varchar(45) DEFAULT NULL,
  `fk_idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idsolicitacao_senha`),
  KEY `fk_solicitacao_senha_Usuario1_idx` (`fk_idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_animal`
--

DROP TABLE IF EXISTS `tipo_animal`;
CREATE TABLE IF NOT EXISTS `tipo_animal` (
  `idtipo_animal` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_animal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_animal`
--

INSERT INTO `tipo_animal` (`idtipo_animal`, `nome`) VALUES
(1, 'cachorro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_fotos`
--

DROP TABLE IF EXISTS `tipo_fotos`;
CREATE TABLE IF NOT EXISTS `tipo_fotos` (
  `idtipo_fotos` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtipo_fotos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_fotos`
--

INSERT INTO `tipo_fotos` (`idtipo_fotos`, `nome`, `ativo`) VALUES
(1, 'pets', 1),
(2, 'usuario', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_notificacao`
--

DROP TABLE IF EXISTS `tipo_notificacao`;
CREATE TABLE IF NOT EXISTS `tipo_notificacao` (
  `idtipo_notificacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idtipo_notificacao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_notificacao`
--

INSERT INTO `tipo_notificacao` (`idtipo_notificacao`, `nome`) VALUES
(1, 'mensagem'),
(2, 'solicitacao de encontro'),
(3, 'confirmação de encontro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `ativo` varchar(45) DEFAULT NULL,
  `fk_idlocalizacao` int(11) DEFAULT NULL,
  `data_criacao` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_idCidade` int(11) DEFAULT NULL,
  `fk_idEstado` int(11) DEFAULT NULL,
  `foto_principal` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_localizacao1_idx` (`fk_idlocalizacao`),
  KEY `fk_idEstado_idx` (`fk_idEstado`),
  KEY `fk_idCidade_idx` (`fk_idCidade`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `email`, `senha`, `ativo`, `fk_idlocalizacao`, `data_criacao`, `fk_idCidade`, `fk_idEstado`, `foto_principal`) VALUES
(1, 'Felipe Vilella', 'felipevilellaalves@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', NULL, '2018-11-15 12:46:29', 66, 1, NULL),
(2, 'Julia alves', 'julia@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', NULL, '2018-11-15 12:46:57', 66, 1, NULL),
(3, 'Marina ', 'marina@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', NULL, '2018-11-15 12:47:24', 66, 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `fk_animais_Usuario1` FOREIGN KEY (`fk_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_animais_tipo_animal1` FOREIGN KEY (`fk_idtipo_animal`) REFERENCES `tipo_animal` (`idtipo_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idraca` FOREIGN KEY (`fk_idraca`) REFERENCES `racas` (`idracas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_cidade_estado1` FOREIGN KEY (`fk_idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `conversa`
--
ALTER TABLE `conversa`
  ADD CONSTRAINT `fk_Usuario_has_Mensagem_Mensagem1` FOREIGN KEY (`Fk_idMensagem`) REFERENCES `mensagem` (`idMensagem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_has_Mensagem_Usuario1` FOREIGN KEY (`fk_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idMesagem` FOREIGN KEY (`Fk_idMensagem`) REFERENCES `mensagem` (`idMensagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `encontro`
--
ALTER TABLE `encontro`
  ADD CONSTRAINT `fk_animais_has_animais_animais1` FOREIGN KEY (`animais_idanimais`) REFERENCES `animal` (`idanimais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_animais_has_animais_animais2` FOREIGN KEY (`animais_idanimais1`) REFERENCES `animal` (`idanimais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_endereco_Usuario1` FOREIGN KEY (`fk_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_endereco_cidade1` FOREIGN KEY (`fk_idcidade`) REFERENCES `cidade` (`idcidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fotos_animal`
--
ALTER TABLE `fotos_animal`
  ADD CONSTRAINT `fk_fotos_animais_animais1` FOREIGN KEY (`fk_idanimais`) REFERENCES `animal` (`idanimais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fotos_usuario`
--
ALTER TABLE `fotos_usuario`
  ADD CONSTRAINT `fk_fotos_Usuario1` FOREIGN KEY (`fk_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fotos_tipo_fotos1` FOREIGN KEY (`fk_idtipo_fotos`) REFERENCES `tipo_fotos` (`idtipo_fotos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `log_acesso`
--
ALTER TABLE `log_acesso`
  ADD CONSTRAINT `fk_log_acesso_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicitacao_senha`
--
ALTER TABLE `solicitacao_senha`
  ADD CONSTRAINT `fk_solicitacao_senha_Usuario1` FOREIGN KEY (`fk_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_localizacao1` FOREIGN KEY (`fk_idlocalizacao`) REFERENCES `localizacao` (`idlocalizacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idCidade` FOREIGN KEY (`fk_idCidade`) REFERENCES `cidade` (`idcidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idEstado` FOREIGN KEY (`fk_idEstado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
