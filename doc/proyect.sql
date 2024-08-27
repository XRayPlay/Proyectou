-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2024 a las 06:09:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyect`
--
CREATE DATABASE IF NOT EXISTS `proyect` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyect`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejocomunal`
--

CREATE TABLE `consejocomunal` (
  `idcomunidad` int(11) NOT NULL,
  `nombrecomuna` varchar(50) NOT NULL,
  `nombreconsejocomunal` varchar(50) NOT NULL,
  `N_MPPCPS` int(11) NOT NULL,
  `numeroregistro` varchar(18) NOT NULL,
  `rifconsejocomunal` varchar(13) NOT NULL,
  `numerofamilia` int(11) NOT NULL,
  `numeropersonas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consejocomunal`
--

INSERT INTO `consejocomunal` (`idcomunidad`, `nombrecomuna`, `nombreconsejocomunal`, `N_MPPCPS`, `numeroregistro`, `rifconsejocomunal`, `numerofamilia`, `numeropersonas`) VALUES
(1, 'Comuna Socialista Sierra Maestra', 'Las Islas', 44847, '01-01-22-001-0069', 'J-31181619-4', 546, 1266);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `direccid` int(11) NOT NULL,
  `bloque` varchar(5) NOT NULL,
  `letra` varchar(5) NOT NULL,
  `piso` varchar(5) NOT NULL,
  `apto` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`direccid`, `bloque`, `letra`, `piso`, `apto`) VALUES
(1, '29-C', 'A', 'PB', 'AA'),
(2, '29-C', 'A', 'PB', 'O1'),
(3, '29-C', 'A', '1', '10'),
(4, '29-C', 'A', '1', '11'),
(5, '29-C', 'A', '2', '20'),
(6, '29-C', 'A', '2', '21'),
(7, '29-C', 'A', '3', '30'),
(8, '29-C', 'A', '3', '31'),
(9, '29-C', 'A', '4', '40'),
(10, '29-C', 'A', '4', '41'),
(11, '29-C', 'A', '5', '50'),
(12, '29-C', 'A', '5', '51'),
(13, '29-C', 'A', '6', '60'),
(14, '29-C', 'A', '6', '60'),
(15, '29-C', 'A', '7', '70'),
(16, '29-C', 'A', '7', '71'),
(17, '29-C', 'A', '8', '80'),
(18, '29-C', 'A', '8', '81'),
(19, '29-C', 'A', '9', '90'),
(20, '29-C', 'A', '9', '91'),
(21, '29-C', 'A', '10', '100'),
(22, '29-C', 'A', '10', '101'),
(23, '29-C', 'A', '11', '110'),
(24, '29-C', 'A', '11', '111'),
(25, '29-C', 'A', '12', '120'),
(26, '29-C', 'A', '12', '121'),
(27, '29-C', 'A', '13', '130'),
(28, '29-C', 'A', '13', '131'),
(29, '29-C', 'A', '14', '140'),
(30, '29-C', 'A', '14', '141'),
(31, '29-C', 'B', 'PB', 'O2'),
(32, '29-C', 'B', 'PB', 'O3'),
(33, '29-C', 'B', '1', '12'),
(34, '29-C', 'B', '1', '13'),
(35, '29-C', 'B', '2', '22'),
(36, '29-C', 'B', '2', '23'),
(37, '29-C', 'B', '3', '32'),
(38, '29-C', 'B', '3', '33'),
(39, '29-C', 'B', '4', '42'),
(40, '29-C', 'B', '4', '43'),
(41, '29-C', 'B', '5', '52'),
(42, '29-C', 'B', '5', '53'),
(43, '29-C', 'B', '6', '62'),
(44, '29-C', 'B', '6', '63'),
(45, '29-C', 'B', '7', '72'),
(46, '29-C', 'B', '7', '73'),
(47, '29-C', 'B', '8', '82'),
(48, '29-C', 'B', '8', '83'),
(49, '29-C', 'B', '9', '92'),
(50, '29-C', 'B', '9', '93'),
(51, '29-C', 'B', '10', '102'),
(52, '29-C', 'B', '10', '103'),
(53, '29-C', 'B', '11', '112'),
(54, '29-C', 'B', '11', '113'),
(55, '29-C', 'B', '12', '122'),
(56, '29-C', 'B', '12', '123'),
(57, '29-C', 'B', '13', '132'),
(58, '29-C', 'B', '13', '133'),
(59, '29-C', 'B', '14', '142'),
(60, '29-C', 'B', '14', '143'),
(61, '29-C', 'C', 'PB', 'O4'),
(62, '29-C', 'C', 'PB', 'O5'),
(63, '29-C', 'C', '1', '14'),
(64, '29-C', 'C', '1', '15'),
(65, '29-C', 'C', '2', '24'),
(66, '29-C', 'C', '2', '25'),
(67, '29-C', 'C', '3', '34'),
(68, '29-C', 'C', '3', '35'),
(69, '29-C', 'C', '4', '44'),
(70, '29-C', 'C', '4', '45'),
(71, '29-C', 'C', '5', '54'),
(72, '29-C', 'C', '5', '55'),
(73, '29-C', 'C', '6', '64'),
(74, '29-C', 'C', '6', '65'),
(75, '29-C', 'C', '7', '74'),
(76, '29-C', 'C', '7', '75'),
(77, '29-C', 'C', '8', '84'),
(78, '29-C', 'C', '8', '85'),
(79, '29-C', 'C', '9', '94'),
(80, '29-C', 'C', '9', '95'),
(81, '29-C', 'C', '10', '104'),
(82, '29-C', 'C', '10', '105'),
(83, '29-C', 'C', '11', '114'),
(84, '29-C', 'C', '11', '115'),
(85, '29-C', 'C', '12', '124'),
(86, '29-C', 'C', '12', '125'),
(87, '29-C', 'C', '13', '134'),
(88, '29-C', 'C', '13', '135'),
(89, '29-C', 'C', '14', '144'),
(90, '29-C', 'C', '14', '145'),
(91, '29-C', 'D', 'PB', 'O6'),
(92, '29-C', 'D', 'PB', 'O7'),
(93, '29-C', 'D', '1', '16'),
(94, '29-C', 'D', '1', '17'),
(95, '29-C', 'D', '2', '26'),
(96, '29-C', 'D', '2', '27'),
(97, '29-C', 'D', '3', '36'),
(98, '29-C', 'D', '3', '37'),
(99, '29-C', 'D', '4', '46'),
(100, '29-C', 'D', '4', '47'),
(101, '29-C', 'D', '5', '56'),
(102, '29-C', 'D', '5', '57'),
(103, '29-C', 'D', '6', '66'),
(104, '29-C', 'D', '6', '67'),
(105, '29-C', 'D', '7', '76'),
(106, '29-C', 'D', '7', '77'),
(107, '29-C', 'D', '8', '86'),
(108, '29-C', 'D', '8', '87'),
(109, '29-C', 'D', '9', '96'),
(110, '29-C', 'D', '9', '97'),
(111, '29-C', 'D', '10', '103'),
(112, '29-C', 'D', '10', '107'),
(113, '29-C', 'D', '11', '116'),
(114, '29-C', 'D', '11', '117'),
(115, '29-C', 'D', '12', '126'),
(116, '29-C', 'D', '12', '127'),
(117, '29-C', 'D', '13', '136'),
(118, '29-C', 'D', '13', '137'),
(119, '29-C', 'D', '14', '146'),
(120, '29-C', 'D', '14', '147'),
(121, '29-C', 'E', 'PB', 'O8'),
(122, '29-C', 'E', 'PB', 'O9'),
(123, '29-C', 'E', '1', '18'),
(124, '29-C', 'E', '1', '19'),
(125, '29-C', 'E', '2', '28'),
(126, '29-C', 'E', '2', '29'),
(127, '29-C', 'E', '3', '38'),
(128, '29-C', 'E', '3', '39'),
(129, '29-C', 'E', '4', '48'),
(130, '29-C', 'E', '4', '49'),
(131, '29-C', 'E', '5', '58'),
(132, '29-C', 'E', '5', '59'),
(133, '29-C', 'E', '6', '68'),
(134, '29-C', 'E', '6', '69'),
(135, '29-C', 'E', '7', '78'),
(136, '29-C', 'E', '7', '79'),
(137, '29-C', 'E', '8', '88'),
(138, '29-C', 'E', '8', '89'),
(139, '29-C', 'E', '9', '98'),
(140, '29-C', 'E', '9', '99'),
(141, '29-C', 'E', '10', '108'),
(142, '29-C', 'E', '10', '109'),
(143, '29-C', 'E', '11', '118'),
(144, '29-C', 'E', '11', '119'),
(145, '29-C', 'E', '12', '128'),
(146, '29-C', 'E', '12', '129'),
(147, '29-C', 'E', '13', '138'),
(148, '29-C', 'E', '13', '139'),
(149, '29-C', 'E', '14', '148'),
(150, '29-C', 'E', '14', '149'),
(151, '30-C', 'A', 'PB', 'AA'),
(152, '30-C', 'A', 'PB', 'O1'),
(153, '30-C', 'A', '1', '10'),
(154, '30-C', 'A', '1', '11'),
(155, '30-C', 'A', '2', '20'),
(156, '30-C', 'A', '2', '21'),
(157, '30-C', 'A', '3', '30'),
(158, '30-C', 'A', '3', '31'),
(159, '30-C', 'A', '4', '40'),
(160, '30-C', 'A', '4', '41'),
(161, '30-C', 'A', '5', '50'),
(162, '30-C', 'A', '5', '51'),
(163, '30-C', 'A', '6', '60'),
(164, '30-C', 'A', '6', '60'),
(165, '30-C', 'A', '7', '70'),
(166, '30-C', 'A', '7', '71'),
(167, '30-C', 'A', '8', '80'),
(168, '30-C', 'A', '8', '81'),
(169, '30-C', 'A', '9', '90'),
(170, '30-C', 'A', '9', '91'),
(171, '30-C', 'A', '10', '100'),
(172, '30-C', 'A', '10', '101'),
(173, '30-C', 'A', '11', '110'),
(174, '30-C', 'A', '11', '111'),
(175, '30-C', 'A', '12', '120'),
(176, '30-C', 'A', '12', '121'),
(177, '30-C', 'A', '13', '130'),
(178, '30-C', 'A', '13', '131'),
(179, '30-C', 'A', '14', '140'),
(180, '30-C', 'A', '14', '141'),
(181, '30-C', 'B', 'PB', 'O2'),
(182, '30-C', 'B', 'PB', 'O3'),
(183, '30-C', 'B', '1', '12'),
(184, '30-C', 'B', '1', '13'),
(185, '30-C', 'B', '2', '22'),
(186, '30-C', 'B', '2', '23'),
(187, '30-C', 'B', '3', '32'),
(188, '30-C', 'B', '3', '33'),
(189, '30-C', 'B', '4', '42'),
(190, '30-C', 'B', '4', '43'),
(191, '30-C', 'B', '5', '52'),
(192, '30-C', 'B', '5', '53'),
(193, '30-C', 'B', '6', '62'),
(194, '30-C', 'B', '6', '63'),
(195, '30-C', 'B', '7', '72'),
(196, '30-C', 'B', '7', '73'),
(197, '30-C', 'B', '8', '82'),
(198, '30-C', 'B', '8', '83'),
(199, '30-C', 'B', '9', '92'),
(200, '30-C', 'B', '9', '93'),
(201, '30-C', 'B', '10', '102'),
(202, '30-C', 'B', '10', '103'),
(203, '30-C', 'B', '11', '112'),
(204, '30-C', 'B', '11', '113'),
(205, '30-C', 'B', '12', '122'),
(206, '30-C', 'B', '12', '123'),
(207, '30-C', 'B', '13', '132'),
(208, '30-C', 'B', '13', '133'),
(209, '30-C', 'B', '14', '142'),
(210, '30-C', 'B', '14', '143'),
(211, '30-C', 'C', 'PB', 'O4'),
(212, '30-C', 'C', 'PB', 'O5'),
(213, '30-C', 'C', '1', '14'),
(214, '30-C', 'C', '1', '15'),
(215, '30-C', 'C', '2', '24'),
(216, '30-C', 'C', '2', '25'),
(217, '30-C', 'C', '3', '34'),
(218, '30-C', 'C', '3', '35'),
(219, '30-C', 'C', '4', '44'),
(220, '30-C', 'C', '4', '45'),
(221, '30-C', 'C', '5', '54'),
(222, '30-C', 'C', '5', '55'),
(223, '30-C', 'C', '6', '64'),
(224, '30-C', 'C', '6', '65'),
(225, '30-C', 'C', '7', '74'),
(226, '30-C', 'C', '7', '75'),
(227, '30-C', 'C', '8', '84'),
(228, '30-C', 'C', '8', '85'),
(229, '30-C', 'C', '9', '94'),
(230, '30-C', 'C', '9', '95'),
(231, '30-C', 'C', '10', '104'),
(232, '30-C', 'C', '10', '105'),
(233, '30-C', 'C', '11', '114'),
(234, '30-C', 'C', '11', '115'),
(235, '30-C', 'C', '12', '124'),
(236, '30-C', 'C', '12', '125'),
(237, '30-C', 'C', '13', '134'),
(238, '30-C', 'C', '13', '135'),
(239, '30-C', 'C', '14', '144'),
(240, '30-C', 'C', '14', '145'),
(241, '30-C', 'D', 'PB', 'O6'),
(242, '30-C', 'D', 'PB', 'O7'),
(243, '30-C', 'D', '1', '16'),
(244, '30-C', 'D', '1', '17'),
(245, '30-C', 'D', '2', '26'),
(246, '30-C', 'D', '2', '27'),
(247, '30-C', 'D', '3', '36'),
(248, '30-C', 'D', '3', '37'),
(249, '30-C', 'D', '4', '46'),
(250, '30-C', 'D', '4', '47'),
(251, '30-C', 'D', '5', '56'),
(252, '30-C', 'D', '5', '57'),
(253, '30-C', 'D', '6', '66'),
(254, '30-C', 'D', '6', '67'),
(255, '30-C', 'D', '7', '76'),
(256, '30-C', 'D', '7', '77'),
(257, '30-C', 'D', '8', '86'),
(258, '30-C', 'D', '8', '87'),
(259, '30-C', 'D', '9', '96'),
(260, '30-C', 'D', '9', '97'),
(261, '30-C', 'D', '10', '103'),
(262, '30-C', 'D', '10', '107'),
(263, '30-C', 'D', '11', '116'),
(264, '30-C', 'D', '11', '117'),
(265, '30-C', 'D', '12', '126'),
(266, '30-C', 'D', '12', '127'),
(267, '30-C', 'D', '13', '136'),
(268, '30-C', 'D', '13', '137'),
(269, '30-C', 'D', '14', '146'),
(270, '30-C', 'D', '14', '147'),
(271, '30-C', 'E', 'PB', 'O8'),
(272, '30-C', 'E', 'PB', 'O9'),
(273, '30-C', 'E', '1', '18'),
(274, '30-C', 'E', '1', '19'),
(275, '30-C', 'E', '2', '28'),
(276, '30-C', 'E', '2', '29'),
(277, '30-C', 'E', '3', '38'),
(278, '30-C', 'E', '3', '39'),
(279, '30-C', 'E', '4', '48'),
(280, '30-C', 'E', '4', '49'),
(281, '30-C', 'E', '5', '58'),
(282, '30-C', 'E', '5', '59'),
(283, '30-C', 'E', '6', '68'),
(284, '30-C', 'E', '6', '69'),
(285, '30-C', 'E', '7', '78'),
(286, '30-C', 'E', '7', '79'),
(287, '30-C', 'E', '8', '88'),
(288, '30-C', 'E', '8', '89'),
(289, '30-C', 'E', '9', '98'),
(290, '30-C', 'E', '9', '99'),
(291, '30-C', 'E', '10', '108'),
(292, '30-C', 'E', '10', '109'),
(293, '30-C', 'E', '11', '118'),
(294, '30-C', 'E', '11', '119'),
(295, '30-C', 'E', '12', '128'),
(296, '30-C', 'E', '12', '129'),
(297, '30-C', 'E', '13', '138'),
(298, '30-C', 'E', '13', '139'),
(299, '30-C', 'E', '14', '148'),
(300, '30-C', 'E', '14', '149'),
(301, '31-C', 'A', 'PB', '1'),
(302, '31-C', 'A', 'PB', '2'),
(303, '31-C', 'A', '1', '3'),
(304, '31-C', 'A', '1', '4'),
(305, '31-C', 'A', '2', '5'),
(306, '31-C', 'A', '2', '6'),
(307, '31-C', 'A', '3', '7'),
(308, '31-C', 'A', '3', '8'),
(309, '31-C', 'B', 'PB', '1'),
(310, '31-C', 'B', 'PB', '2'),
(311, '31-C', 'B', '1', '3'),
(312, '31-C', 'B', '1', '4'),
(313, '31-C', 'B', '2', '5'),
(314, '31-C', 'B', '2', '6'),
(315, '31-C', 'B', '3', '7'),
(316, '31-C', 'B', '3', '8'),
(317, '31-C', 'C', 'PB', '1'),
(318, '31-C', 'C', 'PB', '2'),
(319, '31-C', 'C', '1', '3'),
(320, '31-C', 'C', '1', '4'),
(321, '31-C', 'C', '2', '5'),
(322, '31-C', 'C', '2', '6'),
(323, '31-C', 'C', '3', '7'),
(324, '31-C', 'C', '3', '8'),
(325, '31-C', 'D', 'PB', '1'),
(326, '31-C', 'D', 'PB', '2'),
(327, '31-C', 'D', '1', '3'),
(328, '31-C', 'D', '1', '4'),
(329, '31-C', 'D', '2', '5'),
(330, '31-C', 'D', '2', '6'),
(331, '31-C', 'D', '3', '7'),
(332, '31-C', 'D', '3', '8'),
(333, '32-C', 'A', 'PB', '1'),
(334, '32-C', 'A', 'PB', '2'),
(335, '32-C', 'A', '1', '3'),
(336, '32-C', 'A', '1', '4'),
(337, '32-C', 'A', '2', '5'),
(338, '32-C', 'A', '2', '6'),
(339, '32-C', 'A', '3', '7'),
(340, '32-C', 'A', '3', '8'),
(341, '32-C', 'B', 'PB', '1'),
(342, '32-C', 'B', 'PB', '2'),
(343, '32-C', 'B', '1', '3'),
(344, '32-C', 'B', '1', '4'),
(345, '32-C', 'B', '2', '5'),
(346, '32-C', 'B', '2', '6'),
(347, '32-C', 'B', '3', '7'),
(348, '32-C', 'B', '3', '8'),
(349, '32-C', 'C', 'PB', '1'),
(350, '32-C', 'C', 'PB', '2'),
(351, '32-C', 'C', '1', '3'),
(352, '32-C', 'C', '1', '4'),
(353, '32-C', 'C', '2', '5'),
(354, '32-C', 'C', '2', '6'),
(355, '32-C', 'C', '3', '7'),
(356, '32-C', 'C', '3', '8'),
(357, '32-C', 'D', 'PB', '1'),
(358, '32-C', 'D', 'PB', '2'),
(359, '32-C', 'D', '1', '3'),
(360, '32-C', 'D', '1', '4'),
(361, '32-C', 'D', '2', '5'),
(362, '32-C', 'D', '2', '6'),
(363, '32-C', 'D', '3', '7'),
(364, '32-C', 'D', '3', '8'),
(365, '32-C', 'CASA', '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `familiaid` int(11) NOT NULL,
  `parentesco` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`familiaid`, `parentesco`) VALUES
(1, 'Jefe (a) d Familia'),
(2, 'Pareja'),
(3, 'Hijio (a)'),
(4, 'Padre'),
(5, 'Madre'),
(6, 'Abuela'),
(7, 'Nuero (a)'),
(8, 'Sobrina (o)'),
(9, 'Tia(o)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitantes`
--

CREATE TABLE `habitantes` (
  `idhabitantes` int(11) NOT NULL,
  `cedulanac` varchar(1) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `idfamilia` int(11) DEFAULT NULL,
  `iddirecc` int(11) DEFAULT NULL,
  `comunidadid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulado`
--

CREATE TABLE `postulado` (
  `postuladoid` int(11) NOT NULL,
  `conteovotos` int(11) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `document` varchar(500) NOT NULL,
  `habitantesid` int(11) DEFAULT NULL,
  `idvocerias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `descripcion`) VALUES
(1, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `usuario`, `pass`, `idRol`) VALUES
(1, 'admin', '12345678', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vocerias`
--

CREATE TABLE `vocerias` (
  `voceriasid` int(11) NOT NULL,
  `nomvoce` varchar(100) NOT NULL,
  `nrovocep` int(11) NOT NULL,
  `nrovoces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vocerias`
--

INSERT INTO `vocerias` (`voceriasid`, `nomvoce`, `nrovocep`, `nrovoces`) VALUES
(1, 'Comite de Salud', 1, 1),
(2, 'Comite vivienda, habitat y gestion de riesgo', 1, 1),
(3, 'Comite seguridad y defensa', 2, 2),
(4, 'Comite Alimentacion y defensa al consumidor y economia comunal', 1, 1),
(5, 'Comite Comunicacion informacion  y telecomunicaciones', 1, 1),
(6, 'Comite Proteccion social Ninos adolescente y familia', 1, 1),
(7, 'Comite Adulto Mayor y Discapacidad', 1, 1),
(8, 'Comite Educacion y formacion Ciudadana', 1, 1),
(9, 'Comite Mujeres e Igualdad de genero  y parto humanizado', 1, 1),
(10, 'Comite Cutura Deporte y recreacion', 2, 2),
(11, 'Unidad Administrativa y Financiera', 5, 5),
(12, 'Unidad Contraloria Social', 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votantes`
--

CREATE TABLE `votantes` (
  `votanteid` int(11) NOT NULL,
  `comite1` int(1) NOT NULL,
  `comite2` int(1) NOT NULL,
  `comite3` int(1) NOT NULL,
  `comite4` int(1) NOT NULL,
  `comite5` int(1) NOT NULL,
  `comite6` int(1) NOT NULL,
  `comite7` int(1) NOT NULL,
  `comite8` int(1) NOT NULL,
  `comite9` int(1) NOT NULL,
  `comite10` int(1) NOT NULL,
  `comite11` int(1) NOT NULL,
  `comite12` int(1) NOT NULL,
  `habitantesid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consejocomunal`
--
ALTER TABLE `consejocomunal`
  ADD PRIMARY KEY (`idcomunidad`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`direccid`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`familiaid`);

--
-- Indices de la tabla `habitantes`
--
ALTER TABLE `habitantes`
  ADD PRIMARY KEY (`idhabitantes`),
  ADD KEY `idcomunidad` (`comunidadid`),
  ADD KEY `direccid` (`iddirecc`),
  ADD KEY `familiaid` (`idfamilia`);

--
-- Indices de la tabla `postulado`
--
ALTER TABLE `postulado`
  ADD PRIMARY KEY (`postuladoid`),
  ADD KEY `idhabitantes` (`habitantesid`),
  ADD KEY `voceriasid` (`idvocerias`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `idrol` (`idRol`);

--
-- Indices de la tabla `vocerias`
--
ALTER TABLE `vocerias`
  ADD PRIMARY KEY (`voceriasid`);

--
-- Indices de la tabla `votantes`
--
ALTER TABLE `votantes`
  ADD PRIMARY KEY (`votanteid`),
  ADD KEY `idhabitantes` (`habitantesid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consejocomunal`
--
ALTER TABLE `consejocomunal`
  MODIFY `idcomunidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `direccid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `familiaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `habitantes`
--
ALTER TABLE `habitantes`
  MODIFY `idhabitantes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulado`
--
ALTER TABLE `postulado`
  MODIFY `postuladoid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vocerias`
--
ALTER TABLE `vocerias`
  MODIFY `voceriasid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `votantes`
--
ALTER TABLE `votantes`
  MODIFY `votanteid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `habitantes`
--
ALTER TABLE `habitantes`
  ADD CONSTRAINT `habitantes_ibfk_1` FOREIGN KEY (`idfamilia`) REFERENCES `familia` (`familiaid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `habitantes_ibfk_2` FOREIGN KEY (`iddirecc`) REFERENCES `direccion` (`direccid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `habitantes_ibfk_3` FOREIGN KEY (`comunidadid`) REFERENCES `consejocomunal` (`idcomunidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `postulado`
--
ALTER TABLE `postulado`
  ADD CONSTRAINT `postulado_ibfk_1` FOREIGN KEY (`habitantesid`) REFERENCES `habitantes` (`idhabitantes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postulado_ibfk_2` FOREIGN KEY (`idvocerias`) REFERENCES `vocerias` (`voceriasid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `votantes`
--
ALTER TABLE `votantes`
  ADD CONSTRAINT `votantes_ibfk_1` FOREIGN KEY (`habitantesid`) REFERENCES `habitantes` (`idhabitantes`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
