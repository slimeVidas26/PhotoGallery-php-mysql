-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 20 fév. 2018 à 20:23
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
(112, 'isaac1519152637.jpg', 8),
(113, 'isaac1519152646.png', 8),
(114, 'isaac1519152655.jpg', 8),
(115, 'isaac1519152663.jpg', 8),
(116, 'isaac1519152675.jpg', 8),
(117, 'isaac1519152683.jpg', 8),
(118, 'isaac1519152707.jpg', 8),
(119, 'isaac1519152715.jpg', 8),
(120, 'isaac1519152722.jpg', 8),
(121, 'isaac1519152729.jpg', 8),
(122, 'isaac1519152752.jpg', 9),
(123, 'isaac1519152760.jpg', 9),
(124, 'isaac1519152766.jpg', 9),
(125, 'isaac1519152772.jpg', 9),
(126, 'isaac1519152780.jpg', 9),
(127, 'isaac1519152786.jpg', 9),
(128, 'isaac1519152793.jpg', 9),
(129, 'isaac1519152800.jpg', 9),
(130, 'isaac1519152806.jpg', 9),
(131, 'isaac1519152812.jpg', 9),
(132, 'isaac1519152832.jpg', 10),
(133, 'isaac1519152840.jpg', 10),
(134, 'isaac1519152848.jpg', 10),
(135, 'isaac1519152864.jpg', 10),
(136, 'isaac1519152895.jpg', 10),
(137, 'isaac1519152913.jpg', 10),
(138, 'isaac1519152930.jpg', 10),
(139, 'isaac1519152974.jpg', 10),
(140, 'isaac1519152988.jpg', 10),
(141, 'isaac1519153010.jpg', 10),
(142, 'isaac1519153021.jpg', 10),
(143, 'isaac1519153035.jpg', 10),
(144, '1519153063.jpg', 8),
(145, '81519153083.jpg', 8),
(146, 'isaac1519153235.jpg', 8);

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
(10, 'oren', '$2y$07$o3H49J7XsZcqVUpfG0ulZec46y99C6sl3yX2Hbr.H9Xar/DVMjezu'),
(11, 'ilan', '$2y$07$rh0UZ4mqjTKZA0oaYEHuteIvFyMBQY39CWHVlDCwXCU6YEZXeZYDu');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
