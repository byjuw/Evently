-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 10 Décembre 2016 à 13:41
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `evently`
--

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('900ccd20557f04ff493a81705214d13befb3807e', '::1', 1474391431, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343339313433313b),
('b537524b2b0d3636efaa402486cac8f88119e1ce', '::1', 1474477063, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343437363935303b),
('3b3cf547be901f385311f4e1af85873e5cd2a275', '::1', 1474477627, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343437373337323b),
('b02442afe7a1b3a0ff9923d58a6f044d455c4902', '::1', 1474478861, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343437383735383b),
('114a20df7638b90b5d602ae4bff22bed725332c9', '::1', 1474479304, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343437393330343b),
('231c196955bfcf092c7ba826a3b9dced642ce10b', '::1', 1474480107, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343438303130373b),
('f179aae37b24363e74387e6483d7fb9f57084b05', '::1', 1474480404, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343438303130373b),
('63a76c7df237b135c97c3a2fb7d340c97a4874c0', '::1', 1474480703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343438303436353b),
('ac49f1af91da7d965c6821d9d73bfec2e17887f8', '::1', 1474481143, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343438303930363b),
('94df14d6cb460748a94770ee218945c7bfb8e0d7', '::1', 1474560791, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343536303739313b),
('166b6ed1d928da5da62283ac234f432d3623f2fd', '::1', 1474655766, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343635353736363b),
('61eeb7dbf6f1e3da313a3735c96fad6961306e2f', '::1', 1480426674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303432363637343b),
('c4df1293a1b708cdd7ca7f60da533183ae9df71f', '::1', 1480668525, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303636383532353b),
('0eb298224f198e74f405a01755bffe1adbd0d411', '::1', 1480669325, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303636393332313b),
('083243c53c6232f6f9a4fb368f2d29539b9579a0', '::1', 1480925794, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303932353738343b),
('efc771060ca7817b0d8196598f60ff498a96d890', '::1', 1480926326, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303932363131393b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c4e3b),
('980681edcd22e16ee995bb8c1b5359c9088a723c', '::1', 1480927118, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303932373131383b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c4e3b),
('ddcf6d83254584cb494181bf8ebeb076558444de', '::1', 1480929739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303932393731323b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c4e3b),
('c55ca343d16b5d964f040b2280359583052328ed', '::1', 1480930440, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933303136333b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c4e3b),
('428e69ac08d760786111e3c76314fee44cd8771e', '::1', 1480931548, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933313530343b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('5a1f8406f2e598ce9b46e9a1938efd6af85af29d', '::1', 1480933453, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933333230313b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('aa5682c19a48d97dde226d5003aa50d6ebc096da', '::1', 1480933678, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933333531323b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('2867dea229481aa00341365193903d7b711ba73a', '::1', 1480934199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933333930383b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('83006ebb18647c2feac026954df0fcc2b8022879', '::1', 1480934489, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933343233343b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('cb1efb11bb59960434eb230f3ba455894e8805e5', '::1', 1480934860, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933343537373b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('b70472cb9e382b9b054dc61b80cd33c4aaacf5a1', '::1', 1480935128, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933343838313b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('7d934944ae1f5012d0e6a9b76e928894d45170a8', '::1', 1480935286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303933353234363b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('b621b24722928ab97f020260b542dfe086068883', '::1', 1480940614, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303934303332363b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('da5f6b548b1cda61bf467ed9a67684553b7fff66', '::1', 1480940820, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303934303638303b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('d85f57a99f3f11d2ed88cf002fac113ad534c824', '::1', 1480970659, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303937303635393b),
('5ac0eca66c9ee32973b3c307e52d89a4397470c9', '::1', 1480971096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303937313038373b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('882ec679444e09affddedadfdd541cf8847ba54c', '::1', 1480971620, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303937313630393b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('1cf3949614e06de703debf7cf26df99fde7c1b4d', '::1', 1480973269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303937333034323b),
('d0a9d6e16d3c43ebec4baf56e54e6bdda8d6b020', '::1', 1480974392, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303937343332373b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('ffa6adbec3926fcc7ea8ac00a4e2182871788c6c', '::1', 1480974311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303937343031343b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('a605e5390a927755a67d5ead284ef7a6551b6fc8', '::1', 1480974991, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303937343731393b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('f25c85866797ef355113dd4e10be2930c8c63b3d', '::1', 1480978621, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303937383632313b),
('55524572b06d74c0332c5ada9f89a23187c0b410', '::1', 1481367487, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313336373333363b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('6c2f053a3c866e6edc479dad6852255b7f5bc8a3', '::1', 1481368026, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313336373738383b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('f16dfd2fcaa4de10f182569fa66461f8778d3ad8', '::1', 1481368367, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313336383131353b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('16f7aa8c925c4059a5d07a0a5f23f4d82490a341', '::1', 1481368598, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313336383433363b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('a97839fb4cf850ba509d6ed2cd9fb8b4b0f51d69', '::1', 1481369059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313336383835353b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('a4bec98bec2f2e09a89cdd5ec3882c0003971ccd', '::1', 1481369530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313336393233363b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('bbcecc952108cb1c6ee37d94e40da0012f476330', '::1', 1481369852, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313336393537323b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('edaea407164cf9cada61cae359475dacfcc63273', '::1', 1481372162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337313838313b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('2ff086408c64adae556ff4ae051f1d19ae2164e2', '::1', 1481372554, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337323235393b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('a4109aae81adf0a63c8cf4351bd5e0afb9fa8ec1', '::1', 1481372659, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337323537333b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('c87388c6e9e17f0b5ded6aca21d9eda2db4dba8e', '::1', 1481373211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337323937303b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('7977f82f2e0c1edb4b1156af86fe2d3337a9ddc3', '::1', 1481373643, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337333430393b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('d566549a6305795f02008a7636d85ac03a33f369', '::1', 1481374121, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337333837333b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('259762235d88e618e6eac15b2e3195331569d73d', '::1', 1481374547, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337343235323b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('cb8be1d345b72877b8daff3d3718db1ef8aa6e37', '::1', 1481374903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337343635313b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('70f315a759c6c5f2f3bb7477b59dc4ddbb97529d', '::1', 1481375246, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337343935353b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('b842f9d6246f55552c10c6cf24295832387ecb3b', '::1', 1481375508, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337353238373b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('88a97d3d61fb6a33b7e145f72a5b863d9f3ef8d1', '::1', 1481375831, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337353638323b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b),
('e391fd2276ee8d9ba7697042b657b92d8fd5aeb0', '::1', 1481376599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337363332333b6c6f676765645f696e7c623a313b656d61696c7c733a31353a22456d61696c40656d61696c2e636f6d223b69647c733a313a2232223b),
('37dc2d8bab46369362fdb095293e06210b07f8ea', '::1', 1481377022, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438313337363734323b6c6f676765645f696e7c623a313b656d61696c7c733a32343a226a756c69656e2e7761636874657240676d61696c2e636f6d223b69647c733a313a2231223b);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `description` text NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `organisateurs` varchar(60) NOT NULL,
  `createur` varchar(60) NOT NULL,
  `confidentialite` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `nom`, `lieu`, `date_ajout`, `date`, `heure`, `description`, `organisme`, `organisateurs`, `createur`, `confidentialite`) VALUES
(1, 'Evently', 'Enov Campus', '2016-12-10 14:34:47', '2016-12-12', '09:00:00', 'Présentation du projet Evently', 'Evolvers', 'Meriem, Damien, Lucas, Martin', '', 0),
(2, 'Vacances !', 'Soleil', '2016-12-10 14:36:43', '2016-12-16', '16:00:00', 'Wouallez ! C&#039;est les vacances !', 'Enov', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `organismes`
--

CREATE TABLE `organismes` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `telephone` int(11) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `admin` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_inscritpion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `organisme` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `groupe` int(11) NOT NULL DEFAULT '1',
  `profession` varchar(60) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `password`, `date_inscritpion`, `organisme`, `email`, `groupe`, `profession`, `telephone`) VALUES
(1, 'Wachter', 'Julien', '$2y$10$5cAZnSfBTRLe7iqdA8AFyeFaxzzRv8jqIVPhENgQUdzh0IxFQNBbq', '2016-12-10 14:32:57', 'Evolvers', 'julien.wachter@gmail.com', 1, 'Développeur', 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `users_events`
--

CREATE TABLE `users_events` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_events`
--

INSERT INTO `users_events` (`id`, `id_user`, `id_event`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users_organismes`
--

CREATE TABLE `users_organismes` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `id_organisme` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `organismes`
--
ALTER TABLE `organismes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_events`
--
ALTER TABLE `users_events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_organismes`
--
ALTER TABLE `users_organismes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `organismes`
--
ALTER TABLE `organismes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users_events`
--
ALTER TABLE `users_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users_organismes`
--
ALTER TABLE `users_organismes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;