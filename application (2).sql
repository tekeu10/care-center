DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `idagenda` int(11) NOT NULL AUTO_INCREMENT,
  `idmed` int(11) NOT NULL,
  `temps` varchar(500) NOT NULL,
  `datejour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idtemps` int(11) NOT NULL,
  PRIMARY KEY (`idagenda`),
  KEY `idmed` (`idmed`),
  KEY `idtemps` (`idtemps`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agenda`
--

INSERT INTO `agenda` (`idagenda`, `idmed`, `temps`, `datejour`, `idtemps`) VALUES
(1, 9, '08:00', '2022-03-15 15:28:38', 1),
(2, 9, '10:00', '2022-03-15 15:28:39', 1),
(3, 9, '12:00', '2022-03-15 15:28:39', 1),
(4, 9, '14:00', '2022-03-15 15:28:39', 1),
(5, 9, '08:30', '2022-03-15 15:28:44', 4),
(6, 9, '10:30', '2022-03-15 15:28:44', 4),
(7, 9, '12:30', '2022-03-15 15:28:44', 4),
(8, 9, '14:30', '2022-03-15 15:28:44', 4),
(9, 9, '09:00', '2022-03-15 15:28:49', 3),
(10, 9, '11:00', '2022-03-15 15:28:49', 3),
(11, 9, '13:00', '2022-03-15 15:28:49', 3),
(12, 9, '11:30', '2022-03-15 15:29:09', 6),
(13, 9, '13:00', '2022-03-15 15:29:09', 6),
(14, 9, '13:00', '2022-03-15 15:29:09', 6),
(15, 9, '15:00', '2022-03-15 15:29:09', 6),
(16, 9, '08:30', '2022-03-15 17:34:44', 3),
(17, 9, '09:00', '2022-03-15 17:34:44', 3),
(18, 9, '09:30', '2022-03-15 17:34:44', 3),
(19, 9, '12:30', '2022-03-15 17:34:44', 3),
(20, 9, '13:00', '2022-03-15 17:34:44', 3),
(21, 9, '15:00', '2022-03-15 17:34:45', 3),
(27, 6, '08:00', '2022-03-19 18:29:42', 1),
(28, 6, '10:00', '2022-03-19 18:29:42', 1),
(29, 6, '12:00', '2022-03-19 18:29:42', 1),
(30, 6, '08:30', '2022-03-19 18:29:50', 2),
(31, 9, '08:30', '2022-03-22 16:53:17', 1),
(32, 9, '13:00', '2022-03-22 16:58:57', 3);

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `idmed` int(11) NOT NULL AUTO_INCREMENT,
  `nommedecin` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idspe` int(11) NOT NULL,
  `idville` int(11) NOT NULL,
  `clinique` varchar(100) NOT NULL,
  `montant` int(50) NOT NULL,
  `nomfichier` varchar(100) NOT NULL,
  `urlfichier` varchar(100) NOT NULL,
  `mdp` varchar(300) NOT NULL,
  PRIMARY KEY (`idmed`),
  UNIQUE KEY `email` (`email`),
  KEY `idspe` (`idspe`),
  KEY `idville` (`idville`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`idmed`, `nommedecin`, `email`, `idspe`, `idville`, `clinique`, `montant`, `nomfichier`, `urlfichier`, `mdp`) VALUES
(6, 'BAKA', 'vero@gmail.com', 2, 2, 'clinique la paix, bonamoussadi', 5000, '22370.jpg', 'files/22370.jpg', 'sssssssssssd'),
(8, 'jhggggg', 'elle@gmail.com', 5, 1, 'clinique, bepanda omnisport', 10000, 'AA10.png', 'files/AA10.png', 'liticiakouam'),
(9, 'davze', 'abc@gmail.com', 2, 2, 'clinique le bien', 5000, 'AA8.png', 'files/AA8.png', 'abc'),
(10, 'MAURICIO', 'root@mail.com', 5, 1, 'clinique le bien', 10000, 'ag (2).png', 'files/ag (2).png', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `idpat` int(11) NOT NULL AUTO_INCREMENT,
  `nompatient` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `numero` int(13) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`idpat`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mdp` (`mdp`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`idpat`, `nompatient`, `email`, `numero`, `mdp`) VALUES
(12, 'thy', 'yyyyyy@gmail.com', 237312, 'DFFFFFFFF'),
(13, 'RGGGGGGG', 'ERG@GMAIL.COM', 237444444, '2TCCCCCCCC'),
(14, 'delson', 'ro@gmail.com', 23732, 'zerrrrrrrrrrrr'),
(15, 'jhggggggg', 'fgeji@gmail.com', 237233, 'sfsfeeeeeeeeeeeeeeee'),
(16, 'anzek', 'elle@gmail.com', 237222, 'liticiakouam'),
(17, 'sdr', 'rze@gmail.com', 237432, 'RGZTRZ'),
(18, 'ANZE', 'akl@gmail.com', 237, 'akl'),
(19, 'cedric tiako', 'tiako@gmail.com', 237422341, 'tiako'),
(20, 'erika', 'erika@gmail.com', 2372222, 'erika'),
(21, 'erika2', 'erika2@gmail.com', 2372222, 'erika2'),
(22, 'erika1', 'erika1@gmail.com', 2372222, 'erika1'),
(23, 'dav', 'erik@gmal.com', 237222, 'dav'),
(24, 'merlin', 'merlin@gmail.com', 2374511, 'merlin'),
(26, 'fd', 'st@gmail.com', 237324444, 'FDDDDD'),
(27, 'mm', 'mel@gmail.com', 23732, 'mel');

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

DROP TABLE IF EXISTS `quartier`;
CREATE TABLE IF NOT EXISTS `quartier` (
  `idquart` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`idquart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `idrdv` int(11) NOT NULL AUTO_INCREMENT,
  `idmed` int(11) NOT NULL,
  `idtemps` int(11) NOT NULL,
  `heure` varchar(20) NOT NULL,
  `motif` text NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `idpat` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `datejour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrdv`),
  KEY `idspe` (`idmed`),
  KEY `idpat` (`idpat`),
  KEY `idtemps` (`idtemps`),
  KEY `idstatus` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`idrdv`, `idmed`, `idtemps`, `heure`, `motif`, `sexe`, `idpat`, `status`, `datejour`) VALUES
(1, 8, 3, '08:00', 'JGHJK', 'feminin', 16, 1, '2022-03-22 21:18:15'),
(8, 9, 1, '10:00', 'QTTTT', 'feminin', 19, 0, '2022-03-22 21:18:15'),
(10, 9, 1, '10:00', 'QTTTT', 'feminin', 19, 0, '2022-03-22 21:18:15'),
(12, 9, 6, '09:00', 'ghajkg', 'feminin', 19, 0, '2022-03-22 21:18:15'),
(14, 9, 6, '09:00', 'ghajkg', 'feminin', 19, 0, '2022-03-22 21:18:15'),
(17, 9, 3, '09:00', 'hhuiy', 'feminin', 19, 0, '2022-03-22 21:18:15'),
(18, 9, 5, '12:30', 'RTYIGUHIJKL', 'masculin', 14, 0, '2022-03-22 21:18:15'),
(26, 9, 1, '09:00', 'dsss', '0', 19, 0, '2022-03-22 21:18:15'),
(27, 9, 3, ' 11:30', 'jkth\'', '1', 24, 0, '2022-03-22 21:18:15'),
(28, 9, 1, ' 08:00', 'yjttt', '0', 24, 0, '2022-03-22 21:18:15'),
(30, 9, 7, ' 09:00', 'jj', '1', 24, 0, '2022-03-22 21:18:15'),
(33, 9, 1, ' 15:00', 'sfgfh', '1', 19, 0, '2022-03-22 21:18:15'),
(35, 9, 4, ' 13:00', 'dgffffffff', '0', 19, 0, '2022-03-22 21:18:15'),
(36, 9, 3, ' 15:00', 'consultation', '1', 19, 0, '2022-03-22 21:18:15'),
(38, 9, 6, ' 09:00', 'uihihjk', '1', 19, 0, '2022-03-22 21:18:15'),
(45, 9, 1, '14:00', 'jjjjjjjjj', '0', 19, 1, '2022-03-23 07:20:52');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
CREATE TABLE IF NOT EXISTS `specialite` (
  `idspe` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  PRIMARY KEY (`idspe`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`idspe`, `nom`) VALUES
(2, 'Pediatrie'),
(5, 'Chirurgie'),
(6, 'Hophtamologie'),
(10, 'Dermathologie'),
(11, 'BAKA');

-- --------------------------------------------------------

--
-- Structure de la table `statusrdv`
--

DROP TABLE IF EXISTS `statusrdv`;
CREATE TABLE IF NOT EXISTS `statusrdv` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statusrdv`
--

INSERT INTO `statusrdv` (`idstatus`, `status`) VALUES
(1, 'attente'),
(2, 'valider');

-- --------------------------------------------------------

--
-- Structure de la table `temps`
--

DROP TABLE IF EXISTS `temps`;
CREATE TABLE IF NOT EXISTS `temps` (
  `idtemps` int(11) NOT NULL AUTO_INCREMENT,
  `noms` varchar(50) NOT NULL,
  `datejour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idtemps`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `temps`
--

INSERT INTO `temps` (`idtemps`, `noms`, `datejour`) VALUES
(1, 'Lundi', '2022-03-13 16:44:59'),
(2, 'Mardi', '2022-03-13 16:44:59'),
(3, 'Mercredi', '2022-03-13 16:44:59'),
(4, 'Jeudi', '2022-03-13 16:44:59'),
(5, 'Vendredi', '2022-03-13 16:45:50'),
(6, 'Samedi', '2022-03-13 16:45:50'),
(7, 'Dimanche', '2022-03-13 16:46:04');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `idville` int(11) NOT NULL AUTO_INCREMENT,
  `nomville` varchar(100) NOT NULL,
  PRIMARY KEY (`idville`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idville`, `nomville`) VALUES
(1, 'douala'),
(2, 'yaounde'),
(3, 'bafoussam'),
(5, 'bamenda'),
(6, 'kumba'),
(7, 'garoua');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`idmed`) REFERENCES `medecin` (`idmed`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`idtemps`) REFERENCES `temps` (`idtemps`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD CONSTRAINT `medecin_ibfk_1` FOREIGN KEY (`idspe`) REFERENCES `specialite` (`idspe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medecin_ibfk_2` FOREIGN KEY (`idville`) REFERENCES `ville` (`idville`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`idmed`) REFERENCES `medecin` (`idmed`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rendezvous_ibfk_2` FOREIGN KEY (`idpat`) REFERENCES `patient` (`idpat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rendezvous_ibfk_3` FOREIGN KEY (`idtemps`) REFERENCES `temps` (`idtemps`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
