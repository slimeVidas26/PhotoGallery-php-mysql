-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 09 fév. 2018 à 05:36
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `photogallerybis`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `name`, `user_id`) VALUES
(59, 'isaac1518151380.jpg', 8),
(60, 'isaac1518151391.jpg', 8),
(61, 'isaac1518151400.jpg', 8),
(62, 'isaac1518151409.jpg', 8),
(63, 'isaac1518151426.jpg', 8),
(64, 'isaac1518151434.jpg', 8),
(65, 'isaac1518151441.jpg', 8),
(66, 'isaac1518151448.jpg', 8),
(67, 'isaac1518151457.jpg', 8),
(68, 'isaac1518151577.jpg', 9),
(69, 'isaac1518151589.png', 9),
(70, 'isaac1518151596.jpg', 9),
(71, 'isaac1518151616.jpg', 9),
(72, 'isaac1518151624.jpg', 9),
(73, 'isaac1518151634.jpg', 9),
(74, 'isaac1518151641.jpg', 9),
(75, 'isaac1518151649.jpg', 9),
(76, 'isaac1518151669.jpg', 10),
(77, 'isaac1518151676.jpg', 10),
(78, 'isaac1518151683.jpg', 10),
(79, 'isaac1518151691.jpg', 10),
(80, 'isaac1518151699.jpg', 10),
(81, 'isaac1518151707.jpg', 10),
(82, 'isaac1518151717.jpg', 10),
(83, 'isaac1518151727.jpg', 10),
(84, 'isaac1518151733.jpg', 10),
(85, 'isaac1518151323.jpg', 8);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `hash` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`) VALUES
(8, 'lea', '$2y$07$CLpAnsCtsXxnv0IiJ4xSUegm4JhNk03FiSkLEnPuQTt7xI9JDkhA.'),
(9, 'isaac', '$2y$07$fTxckATF8KWkwd/ZegbqAuFvR5y.fPdGpw6dq3q74Gj1OliLZuUzG'),
(10, 'oren', '$2y$07$o3H49J7XsZcqVUpfG0ulZec46y99C6sl3yX2Hbr.H9Xar/DVMjezu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
