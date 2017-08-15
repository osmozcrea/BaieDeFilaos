-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Août 2017 à 23:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id2435357_baie_de_filaos`
--
CREATE DATABASE IF NOT EXISTS `id2435357_baie_de_filaos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `id2435357_baie_de_filaos`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `administrateur`
--

TRUNCATE TABLE `administrateur`;
-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `datenaissance` varchar(255) DEFAULT NULL,
  `pieceidentite` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `paysresidence` varchar(255) NOT NULL,
  `villeresidence` varchar(255) DEFAULT NULL,
  `id_commercial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `client`
--

TRUNCATE TABLE `client`;
--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `datenaissance`, `pieceidentite`, `profession`, `paysresidence`, `villeresidence`, `id_commercial`) VALUES
(2, '01/02/1990', NULL, 'testeur', 'azertyLand', 'azerty', NULL),
(3, '01/01/1900', NULL, 'Dev', 'France', 'Rennes', NULL),
(4, '01/02/1234', NULL, 'inconnu', 'testLan', 'Test', NULL),
(5, '01/01/1597', NULL, 'poiuyt', 'azerty', 'ytreza', NULL),
(6, '01/01/1597', NULL, 'poiuyt', 'azerty', 'ytreza', NULL),
(7, '01/01/1597', NULL, 'poiuyt', 'azerty', 'ytreza', NULL),
(8, '01/01/1597', NULL, 'poiuyt', 'azerty', 'ytreza', NULL),
(9, '01/01/1597', NULL, 'poiuyt', 'azerty', 'ytreza', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commercial`
--

CREATE TABLE `commercial` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `commercial`
--

TRUNCATE TABLE `commercial`;
-- --------------------------------------------------------

--
-- Structure de la table `lot`
--

CREATE TABLE `lot` (
  `id` int(11) NOT NULL,
  `titre_foncier` varchar(255) NOT NULL,
  `superficie` varchar(255) NOT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `altitude` varchar(50) DEFAULT NULL,
  `id_terrain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `lot`
--

TRUNCATE TABLE `lot`;
-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_lot` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `reservation`
--

TRUNCATE TABLE `reservation`;
-- --------------------------------------------------------

--
-- Structure de la table `statut_reservation`
--

CREATE TABLE `statut_reservation` (
  `id` int(11) NOT NULL,
  `libelle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `statut_reservation`
--

TRUNCATE TABLE `statut_reservation`;
-- --------------------------------------------------------

--
-- Structure de la table `suivi_reservation`
--

CREATE TABLE `suivi_reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_statut_reservation` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `suivi_reservation`
--

TRUNCATE TABLE `suivi_reservation`;
-- --------------------------------------------------------

--
-- Structure de la table `terrain`
--

CREATE TABLE `terrain` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `terrain`
--

TRUNCATE TABLE `terrain`;
-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `utilisateur`
--

TRUNCATE TABLE `utilisateur`;
--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `login`, `pwd`) VALUES
(2, 'Doe', 'John', 'test@abc.com', '', ''),
(3, 'N''GUESSAN', 'Yannick', 'yannickossuih@gmail.com', '', ''),
(4, 'Doe', 'Jane', 'abc@test.com', '', ''),
(5, 'toto', 'martin', 'toto@martin.com', '', ''),
(6, 'toto', 'martin', 'toto@martin.com', '', ''),
(7, 'toto', 'martin', 'toto@martin.com', '', ''),
(8, 'toto', 'martin', 'toto@martin.com', '', ''),
(9, 'toto', 'martin', 'toto@martin.com', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `versement`
--

CREATE TABLE `versement` (
  `id` int(11) NOT NULL,
  `date_versement` date NOT NULL,
  `date_prevue` date NOT NULL,
  `montant_prevu` int(11) NOT NULL,
  `montant_verse` int(11) NOT NULL,
  `mode_de_paiement` varchar(255) NOT NULL,
  `justificatif` varchar(255) NOT NULL,
  `id_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vider la table avant d'insérer `versement`
--

TRUNCATE TABLE `versement`;
--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_commercial` (`id_commercial`);

--
-- Index pour la table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_terrain` (`id_terrain`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_lot` (`id_lot`);

--
-- Index pour la table `statut_reservation`
--
ALTER TABLE `statut_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suivi_reservation`
--
ALTER TABLE `suivi_reservation`
  ADD PRIMARY KEY (`id_reservation`,`id_statut_reservation`),
  ADD KEY `id_statut_reservation` (`id_statut_reservation`);

--
-- Index pour la table `terrain`
--
ALTER TABLE `terrain`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `versement`
--
ALTER TABLE `versement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_versement` (`id_reservation`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `lot`
--
ALTER TABLE `lot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `statut_reservation`
--
ALTER TABLE `statut_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `terrain`
--
ALTER TABLE `terrain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `versement`
--
ALTER TABLE `versement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`id_commercial`) REFERENCES `commercial` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commercial`
--
ALTER TABLE `commercial`
  ADD CONSTRAINT `commercial_ibfk_1` FOREIGN KEY (`id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `lot`
--
ALTER TABLE `lot`
  ADD CONSTRAINT `lot_ibfk_1` FOREIGN KEY (`id_terrain`) REFERENCES `terrain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_lot`) REFERENCES `lot` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `suivi_reservation`
--
ALTER TABLE `suivi_reservation`
  ADD CONSTRAINT `suivi_reservation_ibfk_2` FOREIGN KEY (`id_statut_reservation`) REFERENCES `statut_reservation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suivi_reservation_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `versement`
--
ALTER TABLE `versement`
  ADD CONSTRAINT `versement_ibfk_1` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
