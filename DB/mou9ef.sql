-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2019 at 03:43 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mou9ef`
--

-- --------------------------------------------------------

--
-- Table structure for table `artisan`
--

DROP TABLE IF EXISTS `artisan`;
CREATE TABLE IF NOT EXISTS `artisan` (
  `id_art` int(10) NOT NULL AUTO_INCREMENT,
  `nom_art` varchar(150) NOT NULL,
  `prenom_art` varchar(150) NOT NULL,
  `sexe_art` varchar(150) NOT NULL,
  `dateNaissance` date NOT NULL,
  `ville` varchar(150) NOT NULL,
  `metier` varchar(150) NOT NULL,
  `email_art` varchar(150) NOT NULL,
  `tele` varchar(50) NOT NULL,
  `pwd_art` varchar(150) NOT NULL,
  `dateInscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type1` int(1) NOT NULL,
  PRIMARY KEY (`id_art`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artisan`
--

INSERT INTO `artisan` (`id_art`, `nom_art`, `prenom_art`, `sexe_art`, `dateNaissance`, `ville`, `metier`, `email_art`, `tele`, `pwd_art`, `dateInscription`, `type1`) VALUES
(3, 'Ahmed', 'Jalal', 'Homme', '1982-01-23', 'Casablanca', 'Agriculture', 'test@admin.com', '0632558417', '123123', '2019-05-22 09:25:32', 1),
(4, 'Mourad', 'idali', 'Homme', '2019-05-23', 'Casablanca', 'Cireur', 'kala@gmail.com', '06985886614', '123123', '2019-05-22 09:25:32', 1),
(5, 'jolol', 'lalal', 'homme', '2019-05-02', 'Casablanca', 'Agriculture', 'iafs@gmail.com', '0623212548', '1254125', '2019-05-22 13:52:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `artisan_details`
--

DROP TABLE IF EXISTS `artisan_details`;
CREATE TABLE IF NOT EXISTS `artisan_details` (
  `id_artisan_det` int(10) NOT NULL AUTO_INCREMENT,
  `photo` text NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `map` text NOT NULL,
  `code_postal` varchar(100) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `id_art` int(11) NOT NULL,
  PRIMARY KEY (`id_artisan_det`),
  KEY `id_art` (`id_art`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artisan_details`
--

INSERT INTO `artisan_details` (`id_artisan_det`, `photo`, `whatsapp`, `facebook`, `description`, `map`, `code_postal`, `quartier`, `id_art`) VALUES
(1, 'img/ahmad-abu-khalaf.jpg', '0620158851', '', 'Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser librement dans vos maquettes.\r\n\r\nLe texte généré est du pseudo latin et peut donner l\'impression d\'être du vrai texte.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106376.7269237843!2d-7.657033194720475!3d33.57226777541255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C+Maroc!5e0!3m2!1sfr!2sua!4v1558607917849!5m2!1sfr!2sua', '78552', 'alrad', 3),
(2, 'img/Ahmad-300x300-1.jpg', '', '', 'Lorem Ipsum est un générateur de faux textes aléatoires. Vous choisissez le nombre de paragraphes, de mots ou de listes. Vous obtenez alors un texte aléatoire que vous pourrez ensuite utiliser librement dans vos maquettes.\r\n\r\nLe texte généré est du pseudo latin et peut donner l\'impression d\'être du vrai texte.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4945.634036966293!2d-8.052776936832577!3d31.619172057923425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc724f60008c4e517!2sLyc%C3%A9e+Mohamed+VI!5e0!3m2!1sfr!2sjp!4v1554987596236!5m2!1sfr!2sjp', '40000', 'al saad', 4),
(3, 'img/morad-djabari-prix-varenne.jpg', '', '', 'bjwbdvjbxwdv', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106376.7269237843!2d-7.657033194720475!3d33.57226777541255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C+Maroc!5e0!3m2!1sfr!2sua!4v1558607917849!5m2!1sfr!2sua', '45464', 'Douha', 5);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id_eva` int(11) NOT NULL AUTO_INCREMENT,
  `note_eva` varchar(150) NOT NULL,
  `commentaire` varchar(150) NOT NULL,
  `id_uti` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  PRIMARY KEY (`id_eva`),
  KEY `id_uti` (`id_uti`),
  KEY `id_art` (`id_art`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meties`
--

DROP TABLE IF EXISTS `meties`;
CREATE TABLE IF NOT EXISTS `meties` (
  `id_met` int(11) NOT NULL AUTO_INCREMENT,
  `nom_met` varchar(150) NOT NULL,
  PRIMARY KEY (`id_met`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meties`
--

INSERT INTO `meties` (`id_met`, `nom_met`) VALUES
(1, 'Agent de sécurité '),
(2, 'Agriculture '),
(3, 'Aide personnes âgées '),
(4, 'Ambulancier '),
(5, 'Animation '),
(6, 'Aquariologiste '),
(7, 'Chauffeur '),
(8, 'Cireur '),
(9, 'Coiffure / Esthétique '),
(10, 'Conciergerie '),
(11, 'Cordonnier '),
(12, 'Décorateur d\'intérieur '),
(13, 'Dépannage Auto '),
(14, 'Encadreur '),
(15, 'Femme de Ménage '),
(16, 'Fleuriste '),
(17, 'Forage de puit '),
(18, 'Garde d\'enfants '),
(19, 'Hamam '),
(20, 'Immatriculation '),
(21, 'Infirmerie '),
(22, 'Jardinage / Paysage '),
(23, 'Lavage Auto,Tapis,... '),
(24, 'Pressing '),
(25, 'Samsar Courtier '),
(26, 'Transport / Livraison '),
(27, 'BTP '),
(28, 'Carrelage / Mosaïque '),
(29, 'Démolition '),
(30, 'Étanchéité '),
(31, 'Maçonnerie '),
(32, 'Marbre '),
(33, 'Menuiserie Aluminum '),
(34, 'Menuiserie Bois '),
(35, 'Menuiserie Métallique '),
(36, 'Menuiserie PVC '),
(37, 'Peinture '),
(38, 'Pierre Taillée '),
(39, 'Piscine / Sauna / Hammam '),
(40, 'Plâtrier '),
(41, 'Plomberie / Sanitaire '),
(42, 'Vitrerie / Miroiterie '),
(43, 'Zellige / Céramique '),
(44, 'Ascenseur '),
(45, 'Carrosserie '),
(46, 'Climatisation / Chauffage '),
(47, 'Cycliste '),
(48, 'Électricité Auto '),
(49, 'Électricité domestique '),
(50, 'Electricité Industriel '),
(51, 'Electroménager / Frigoriste '),
(52, 'Électronique '),
(53, 'Entretien Piscine/Hamam/ Sauna '),
(54, 'Garniture auto '),
(55, 'Horlogerie '),
(56, 'Installation Parabole/TNT/TV '),
(57, 'Machine agricole '),
(58, 'Maintenance Informatique '),
(59, 'Mécanique Auto '),
(60, 'Panneau Solaire '),
(61, 'Pièces Auto '),
(62, 'Pneumatique '),
(63, 'Poids Lourds et Autocars '),
(64, 'Réparation Machines industriels '),
(65, 'Serrurerie '),
(66, 'Soudeur '),
(67, 'Stores / Dressage de tentes / Bâches '),
(68, 'Surveillance / Alarmes '),
(69, 'Tolerie '),
(70, 'Volets roulants '),
(71, 'Caméraman '),
(72, 'Cuisinier '),
(73, 'Hôtelier '),
(74, 'Neggafa '),
(75, 'Organisateur des fêtes '),
(76, 'Pâtissier '),
(77, 'Photographe '),
(78, 'Restaurateur '),
(79, 'Serveur 1 '),
(80, 'Teyaba '),
(81, 'Traiteur '),
(82, 'Art des métaux / Argenterie '),
(83, 'Art du ARAR (Thuya) '),
(84, 'Art du Bois '),
(85, 'Art du Cuir / Tannerie '),
(86, 'Artisanat d\'Art / Arts plastiques '),
(87, 'Artiste peintre '),
(88, 'Babouche '),
(89, 'Bazares '),
(90, 'Bijouterie '),
(91, 'Bougies '),
(92, 'Broderie traditionnelle '),
(93, 'Ceintures Traditionnelles '),
(94, 'Couture Traditionnelle '),
(95, 'Fer Forgé '),
(96, 'Hanna '),
(97, 'Poterie '),
(98, 'Stylisme / Modélisme /Couture Moderne '),
(99, 'Tapisserie '),
(100, 'Tissage '),
(101, 'Tricotage '),
(102, 'Vannerie '),
(103, 'Boucherie '),
(104, 'Boulangerie '),
(105, 'Droguerie '),
(106, 'Electroménager / Frigoriste '),
(107, 'Epicerie '),
(108, 'Horlogerie '),
(109, 'Opticien '),
(110, 'Pépinière '),
(111, 'Vente de Miel et d\'Argan '),
(112, 'Vente de Motos '),
(113, 'Vente de Pièces Auto 1 '),
(114, 'Vente des extincteurs '),
(115, 'Vente Machines agricoles '),
(116, 'Vente Machines industrielles '),
(117, 'Vente Matériels Électroniques '),
(118, 'Vente Matériels Informatiques '),
(119, 'Vente Panneaux Solaires '),
(120, 'Epices '),
(121, 'Miel et produits apicoles '),
(122, 'Parfum et senteur '),
(123, 'Produits agricoles '),
(124, 'Produits cosmétiques '),
(125, 'Produits Laitiers');

-- --------------------------------------------------------

--
-- Table structure for table `newspaper`
--

DROP TABLE IF EXISTS `newspaper`;
CREATE TABLE IF NOT EXISTS `newspaper` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newspaper`
--

INSERT INTO `newspaper` (`email`) VALUES
('idboubker1998@gmail.com'),
('kalala@gmail.com'),
('test@test.test'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id_por` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `date_par` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description_projet` text NOT NULL,
  `id_art` int(11) NOT NULL,
  `nom_projet` varchar(255) NOT NULL,
  `date_projet` date NOT NULL,
  PRIMARY KEY (`id_por`),
  KEY `id_art` (`id_art`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_por`, `image`, `date_par`, `description_projet`, `id_art`, `nom_projet`, `date_projet`) VALUES
(1, 'Agriculture.jpg', '2019-05-23 11:12:17', 'En savoir plus sur les origines du passage Lorem Ipsum et générer votre propre texte en utilisant un nombre quelconque de caractères, des mots, des phrase', 3, 'Belle jardin', '2018-05-19'),
(2, 'img/builder.jpg', '2019-05-25 02:53:05', 'qjscbjwxbjbwjb jb bjbb kjbkbk kbkbwc', 3, 'jhgjcwbvjb', '2019-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_pics`
--

DROP TABLE IF EXISTS `portfolio_pics`;
CREATE TABLE IF NOT EXISTS `portfolio_pics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `id_por` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_por` (`id_por`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_pics`
--

INSERT INTO `portfolio_pics` (`id`, `img`, `id_por`) VALUES
(1, 'img/2.jpg', 1),
(2, 'img/1.jpg', 1),
(3, 'hjswfjk.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_uti` int(11) NOT NULL AUTO_INCREMENT,
  `nom_uti` varchar(150) NOT NULL,
  `email_uti` varchar(150) NOT NULL,
  `tele` varchar(50) NOT NULL,
  `pwd_uti` varchar(150) NOT NULL,
  `dateInsc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type1` int(1) NOT NULL,
  PRIMARY KEY (`id_uti`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_uti`, `nom_uti`, `email_uti`, `tele`, `pwd_uti`, `dateInsc`, `type1`) VALUES
(11, 'test', 'idb@test.hh', '0654541546', '202cb962ac59075b964b07152d234b70', '2019-05-18 10:43:47', 1),
(13, 'Abderrahim Id boubker', 'admin@gmail.com', '636493281', '202cb962ac59075b964b07152d234b70', '2019-05-19 05:35:45', 1),
(14, 'Abderrahim Id boubker', 'admin@gmail.com', '636493281', '202cb962ac59075b964b07152d234b70', '2019-05-19 05:35:52', 1),
(15, 'Abderrahim Id boubker', 'admin@gmail.com', '636493281', '202cb962ac59075b964b07152d234b70', '2019-05-19 05:36:33', 1),
(16, 'Abde', 'admin@gmail.com', 'admin', '$2y$10$9xMUQfwrIsel8xfsjlPL1esGcE0722Lm5CecO/zTY6f9Hb7ugDdJ2', '2019-05-19 05:52:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id_vil` int(11) NOT NULL AUTO_INCREMENT,
  `nom_vil` varchar(150) NOT NULL,
  PRIMARY KEY (`id_vil`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `villes`
--

INSERT INTO `villes` (`id_vil`, `nom_vil`) VALUES
(1, 'Casablanca'),
(2, 'Rabat'),
(3, 'Mohammedia'),
(4, 'Agadir'),
(5, 'Ain Aouda'),
(6, 'Ain Taoujtat'),
(7, 'Ait Baha'),
(8, 'Ait melloul'),
(9, 'Alhaouz'),
(10, 'Arfoud'),
(11, 'Assa'),
(12, 'Assilah'),
(13, 'Azemmour'),
(14, 'Azilal'),
(15, 'Azrou'),
(16, 'Ben Ahmed'),
(17, 'Ben Slimane'),
(18, 'Benguerir'),
(19, 'Beni mellal'),
(20, 'Berkane'),
(21, 'Berrechid'),
(22, 'Bir Jdid'),
(23, 'Bouarfa'),
(24, 'Boujdour'),
(25, 'Boulmane'),
(26, 'Bouznika'),
(27, 'Chefchaouen'),
(28, 'Chichaoua'),
(29, 'Dakhla'),
(30, 'Daraa'),
(31, 'Demnate'),
(32, 'Driouche'),
(33, 'El Gara'),
(34, 'El Ksiba'),
(35, 'Elhajeb'),
(36, 'Eljadida'),
(37, 'Errachidia'),
(38, 'Es-Semara'),
(39, 'Essaouira'),
(40, 'Fes'),
(41, 'Figuig'),
(42, 'Fkih Ben Saleh'),
(43, 'Fnideq'),
(44, 'Guelmim'),
(45, 'Guercif'),
(46, 'Hoceima'),
(47, 'Ifrane'),
(48, 'Imouzzer Kandar'),
(49, 'Inezgane'),
(50, 'Jerada'),
(51, 'Kalaat Magouna'),
(52, 'Kalaat Sraghnas'),
(53, 'Kasba Tadla'),
(54, 'Kenitra'),
(55, 'Khemisset'),
(56, 'Khenifra'),
(57, 'Khouribga'),
(58, 'Ksar El Kbir'),
(59, 'Laayoune'),
(60, 'Larache'),
(61, 'Mdiq'),
(62, 'Machraa Belksiri'),
(63, 'Marrakech'),
(64, 'Martil'),
(65, 'Médiouna'),
(66, 'Meknes'),
(67, 'Midelt'),
(68, 'Missour'),
(69, 'Nador'),
(70, 'Ouarzazate'),
(71, 'Oued Zem'),
(72, 'Ouezzane'),
(73, 'Oujda'),
(74, 'Oulmès'),
(75, 'Rhamna'),
(76, 'Rissani'),
(77, 'Rommani'),
(78, 'Safi'),
(79, 'Saïdia'),
(80, 'Salé'),
(81, 'Sefrou'),
(82, 'Settat'),
(83, 'Sidi Bennour'),
(84, 'Sidi Ifni'),
(85, 'Sidi Kacem'),
(86, 'Sidi Slimane'),
(87, 'Sidi Yahya El Gharb'),
(88, 'Skhirate'),
(89, 'Tan-Tan'),
(90, 'Tanger'),
(91, 'Taounate'),
(92, 'Taourirt'),
(93, 'Taroudant'),
(94, 'Tata'),
(95, 'Taza'),
(96, 'Témara'),
(97, 'Tetouan'),
(98, 'Tiddas'),
(99, 'Tiflet'),
(100, 'Tinghir'),
(101, 'Tiznit'),
(102, 'Youssoufia'),
(103, 'Zagora'),
(104, 'Zrarda');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artisan_details`
--
ALTER TABLE `artisan_details`
  ADD CONSTRAINT `artisan_details_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `artisan` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `artisan` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`id_uti`) REFERENCES `utilisateurs` (`id_uti`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`id_art`) REFERENCES `artisan` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portfolio_pics`
--
ALTER TABLE `portfolio_pics`
  ADD CONSTRAINT `portfolio_pics_ibfk_1` FOREIGN KEY (`id_por`) REFERENCES `portfolio` (`id_por`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
