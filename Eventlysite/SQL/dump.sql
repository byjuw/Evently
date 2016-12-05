-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 05 Décembre 2016 à 08:20
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

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
('083243c53c6232f6f9a4fb368f2d29539b9579a0', '::1', 1480925794, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438303932353738343b);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_heure` datetime NOT NULL,
  `description` text NOT NULL,
  `organisme` varchar(30) NOT NULL,
  `organisateurs` varchar(60) NOT NULL,
  `createur` varchar(60) NOT NULL,
  `confidentialite` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `password` varchar(30) NOT NULL,
  `date_inscritpion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `organisme` varchar(30) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `groupe` int(11) NOT NULL DEFAULT '1',
  `profession` varchar(60) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `password`, `date_inscritpion`, `organisme`, `mail`, `groupe`, `profession`, `telephone`) VALUES
(1, 'Lichtle', 'David', '', '2016-08-26 15:37:06', 'Mulhouse Startups', 'david.lichtle@nova-beez.com', 2, '', 42);

-- --------------------------------------------------------

--
-- Structure de la table `users_events`
--

CREATE TABLE `users_events` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users_organismes`
--
ALTER TABLE `users_organismes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
