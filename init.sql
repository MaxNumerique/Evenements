-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2025 at 10:09 AM
-- Server version: 8.0.41-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nom`) VALUES
(1, 'Musique'),
(2, 'Sportif'),
(3, 'Théatre'),
(4, 'Cinéma'),
(5, 'Théâtre'),
(6, 'Danse'),
(7, 'Artistique'),
(8, 'Fête de ville');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `idEvents` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `prix` decimal(5,2) NOT NULL,
  `places` int NOT NULL,
  `idCategorie` int DEFAULT NULL,
  `ville` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `idOrganisateur` int NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`idEvents`, `nom`, `description`, `date`, `prix`, `places`, `idCategorie`, `ville`, `adresse`, `idOrganisateur`, `photo`) VALUES
(1, 'Solidays', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2024-06-24', 20.00, 100, 1, 'Pau', '45 rue de la Paix', 1, 'https://just-music.fr/wp-content/uploads/2022/06/Solidays-JustMusic.fr_.jpg'),
(2, 'Garorock', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2025-06-27', 20.00, 129, 1, 'Pau', '45 rue de la Paix', 1, 'https://www.djmag.fr/wp-content/uploads/2024/05/garorock2024-Jour_1920x1080_v1-1024x576.png'),
(13, 'Festival In Avignon', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2025-06-29', 12.00, 2996, 3, 'Pau', '45 rue de la Paix', 1, 'https://leclaireur.fnac.com/wp-content/uploads/2024/04/festival-avignon.jpeg'),
(14, 'Théâtre de rue de Lyon', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2025-08-21', 21.00, 3998, 5, 'Pau', '45 rue de la Paix', 1, 'https://static.actu.fr/uploads/2019/08/festival-th%C3%A9%C3%A2tre-de-rue-960x640.jpg'),
(15, 'Jeux Olympiques - Épreuve de Tir à l\'arc', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2024-09-20', 60.00, 298, 2, 'Pau', '45 rue de la Paix', 1, 'https://www.francebleu.fr/s3/cruiser-production/2023/08/85fe2c82-9554-419b-9aaa-df2f8e9a9352/1200x680_sc_1000027443.jpg'),
(16, 'Jeux Olympiques - Épreuve de natation', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2024-09-20', 50.00, 196, 2, 'Pau', '45 rue de la Paix', 1, 'https://images.lanouvellerepublique.fr/image/upload/64e1e1db209da3ef3a8b4617.jpg'),
(17, 'Jeux Olympiques - Épreuve de Ping Pong', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2024-09-20', 40.00, 139, 2, 'Pau', '45 rue de la Paix', 1, 'https://img.olympics.com/images/image/private/t_s_pog_staticContent_hero_xl_2x/f_auto/primary/yhqyxkx7fh801kjbqfpv'),
(18, 'Championnat de fléchettes', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2024-09-20', 60.00, 39999, 2, 'Pau', '45 rue de la Paix', 1, 'https://media.ouest-france.fr/v1/pictures/c5af67073fdd21db1273b0a869581094-25601675.jpg?width=1260&client_id=eds&sign=1d3113944c6add0a07cb8ef9c79eb9db2b8887ece9136849d8d9dfcc22174909'),
(19, 'Dans avec chtars', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2024-09-20', 58.00, 199, 6, 'Pau', '45 rue de la Paix', 1, 'https://cdn-s-www.leprogres.fr/images/9BA5C375-73C3-4AD4-9C4B-E5C00CBBFE45/NW_raw/michou-au-premier-rang-entoure-des-participants-des-danseurs-et-membres-du-jury-de-dalsi-photo-alexi-pavlov-1711650039.jpg'),
(20, 'Danser Bouger', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2024-09-24', 30.00, 32, 6, 'Pau', '45 rue de la Paix', 1, 'https://media.ouest-france.fr/v1/pictures/MjAyMjEwZjE3OThlY2YxOWRkNTlkYTVjZTA2NzU1NDRjZjljNmI?width=1260&height=708&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=955171d555577a855d4f41062e3ef6bf9a6dd4bf31fb861eebc2015bb315641b'),
(21, 'Concours de poterie ', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2028-06-14', 12.00, 11, 7, 'Pau', '45 rue de la Paix', 1, 'https://fyooyzbm.filerobot.com/v7/ipiccy_image+%2842%29-Gk9xGKCS.jpg?vh=6bb3f9&ci_seal=74c7a7f200&w=1200&h=675'),
(22, 'Le comte de Monte-Cristo', 'Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.Vestibulum iaculis, magna in sollicitudin laoreet, leo arcu malesuada enim, eu tempor neque ligula vel tortor.', '2024-08-14', 10.00, 19, 4, 'Pau', '45 rue de la Paix', 1, 'https://leclaireur.fnac.com/wp-content/uploads/2024/03/monte-cristo-film.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `organisateur`
--

CREATE TABLE `organisateur` (
  `idOrganisateur` int NOT NULL,
  `nomOrganisateur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisateur`
--

INSERT INTO `organisateur` (`idOrganisateur`, `nomOrganisateur`) VALUES
(1, 'Ville de Paris'),
(2, 'Ville de Lyon'),
(3, 'Un milliardaire'),
(4, 'Un millionnaire'),
(5, 'Un centenaire');

-- --------------------------------------------------------

--
-- Table structure for table `participer`
--

CREATE TABLE `participer` (
  `idEvents` int NOT NULL,
  `idUser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participer`
--

INSERT INTO `participer` (`idEvents`, `idUser`) VALUES
(1, 34),
(2, 34),
(13, 34),
(16, 34),
(1, 39),
(2, 39),
(16, 39),
(1, 43),
(14, 43),
(17, 43),
(1, 44),
(1, 45),
(1, 46);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUser` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `mail` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `nom`, `prenom`, `password`, `admin`, `mail`) VALUES
(29, 'test', 'test', '$2y$10$rpKuTrmG/6vWihMefq/jdOiqN/DgjaXHFdnMQ2azucjXOw8wiCXE2', 0, 'test@testcqd.frf'),
(30, 'testouille', 'testouille', '$2y$10$VpDmVGSmw/Qia7IzX1/7lOE1XovWaGYPOkiQzuDnsvqMD6DXIW9n6', 0, 'testouille@test.test'),
(32, 'test', 'test', '$2y$10$8u.hiYZZLamq.rTJ9/U15umFzTFpkAouFoJ5jeqrf95rN8O609Qya', 0, 'test1@test.fr'),
(33, 'deedfd', 'ddzdzd', '$2y$10$fy4d8oc2mQ3xN5De3yACeOEvl/GmSYLTfLeoefoDhpltiXElpGF0e', 0, 'dzdzd@dzdz.fr'),
(34, 'max', 'landois', '$2y$10$wA0J/Z0/AOQO6ebUuogRu.fByplUxyqQ7uCBS4MqSDeNCO9/ty5Cm', 1, 'maxnumerique@github.com'),
(35, 'dededefefe', 'ffeezfeafegeg', '$2y$10$y/mX8VAmPPJ6IA5asZmFYuY49LTddG3Tdfk2vFuUcD4E4tRDBmHvy', 0, 'dqefefef@efqzfzqf.frfr'),
(36, 'testouille', 'qfqzf', '$2y$10$3jpDP.jIGIWl.g81rVhSBudaKcLR4FXiDJHsgyIEbjjLj61Odxt1i', 0, 'fnzifq@dzfzf.fr'),
(38, 'dhiuhfdihfhfefe', 'dezofde', '$2y$10$KNJKJtyb4Jo3PikL8crH2eJOlX88Nv2VvtR8/uqc5QcXzwcYrgwW6', 0, 'test1@test.frded'),
(39, 'Julien', 'Caussade', '$2y$10$CQYxLv1nnLi5jBgQzGIc4umAS0Hu8UlvFyDx10BT0w9fO0FIZAyVK', 0, 'maxdu64@gmail.com'),
(40, 'deifzfe', 'fzfezfzfe', '$2y$10$EvpLbFHABL4r6ZYBBHQ01.z16sS6ITBnWZVj/hyzj5GxHFrAjctly', 0, 'test@test.fri'),
(42, 'qfzqz', 'dezofde', '$2y$10$EygzchyPrDMnTBeLmt0SCOHFlj.gxRSyGLX67iumd/t2CSJ3MRtp2', 0, 'dgdsrgsg@fjjf'),
(43, 'Celine', 'LA VALLE', '$2y$10$69..R7HcgJdTArJcMYqmAerA4hTA1tOOb2WpJ2IPMiyUg0EEVrY7G', 0, 'celine@yahoo.com'),
(44, 'testtt', 'dtadatzda', '$2y$10$f6/yMshXa04CCMIHuvwJjOKCm5/yM7M2FL1elJpV.I2lFFYsjlr8i', 1, 'test@test'),
(45, 'test', 'test', '$2y$10$e37PavfCi8/oHTIqWl43huGJ02R/vkrb1JHDNBjnAdX3.djScs4eK', 0, 'test1@test'),
(46, 'test', 'test', '$2y$10$jBzbzEhzFkQeuGl4vP2a.OrV0t5Y7RoLyZr4zPPq4oIbalv.DV6N.', 0, 'test2@test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`idEvents`),
  ADD KEY `events_categorie_FK` (`idCategorie`),
  ADD KEY `events_organisateur_FK` (`idOrganisateur`);

--
-- Indexes for table `organisateur`
--
ALTER TABLE `organisateur`
  ADD PRIMARY KEY (`idOrganisateur`);

--
-- Indexes for table `participer`
--
ALTER TABLE `participer`
  ADD PRIMARY KEY (`idEvents`,`idUser`),
  ADD KEY `participer_utilisateur0_FK` (`idUser`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `utilisateur_AK` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `idEvents` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `organisateur`
--
ALTER TABLE `organisateur`
  MODIFY `idOrganisateur` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_categorie_FK` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`),
  ADD CONSTRAINT `events_organisateur_FK` FOREIGN KEY (`idOrganisateur`) REFERENCES `organisateur` (`idOrganisateur`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `participer_events_FK` FOREIGN KEY (`idEvents`) REFERENCES `events` (`idEvents`),
  ADD CONSTRAINT `participer_utilisateur0_FK` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
