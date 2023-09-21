-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 21 sep. 2023 à 12:15
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexionb2`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `firstname`, `lastname`, `password`) VALUES
(1, 'admiN1337$', 'admiN1337$', 'admiN1337$', '$2y$12$Xtbjw/lCe.yEM6LA8HsdCuFrILVlLFBB3dBz6r0RnJ.9AR9OJ2/wi'),
(2, 'mohamed', 'momo', 'mamo', '$2y$12$ckHVs0mDTRwxzj2.VGmRXOlJmSR6CnkB.NLkosIlZKXAb.BkLD4vO'),
(3, 'toto', 'toto', 'tat', '$2y$12$vD13cTs.Coe2qV45gXZPXuhgAno5.PgasozWOO8FwSecnoDtQGVjC'),
(4, 'mohamed1', 'aaa', 'aaa', '$2y$12$TWdrPPUbPFY3oF4V6Hz.f.Ez/L7avcngyyNkR0oxwXZOZaGshe1Iq'),
(5, 'tata', 'tata', 'tata', '$2y$12$HNHKks4kRfHvegj73RFe.eK7rkivWJ4BEmh..wkRaFUMvxzlKf7i6'),
(6, 'aaa', 'dd', 'gg', '$2y$12$hqCfhlnZ0Rf718TTqc6oZOWFPt2OAHyUB0JDRH3v1nO69DlkpPEPq'),
(7, 'babo', 'aaa', 'hj', '$2y$12$FKhKjmU8zE8HhFEBNINX1O2zhUDbWAcWKWA//wZOCQS1VevSoolJS'),
(8, 'babo1', 'babo', 'aa', '$2y$12$a7NAEe0YEco/B5EoeoQrrOC3RruZDqRGYynmfDVSW8qZIUjSzeGTG'),
(11, 'admiN1337', 'admiN1337', 'admiN1337', '$2y$12$Xtbjw/lCe.yEM6LA8HsdCuFrILVlLFBB3dBz6r0RnJ.9AR9OJ2/wi'),
(12, 'mohamed5', 'MOHAMED0', 'jjjjjjj', '$2y$12$TfuWs6oc0tzW7kti/Iz4E.XplMpJXVx7tWWmPXigLBc4uy9S5w7QK');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
