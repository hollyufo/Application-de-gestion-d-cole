-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 mai 2022 à 17:23
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `classid` int(11) NOT NULL,
  `classname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

CREATE TABLE `parents` (
  `parentid` int(11) NOT NULL,
  `parentname` varchar(255) DEFAULT NULL,
  `parentphone` varchar(255) DEFAULT NULL,
  `parentjob` varchar(255) DEFAULT NULL,
  `parentgender` varchar(255) DEFAULT NULL,
  `parentaddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(255) DEFAULT NULL,
  `studentphone` varchar(255) DEFAULT NULL,
  `studentclass` varchar(255) DEFAULT NULL,
  `studentide` varchar(255) DEFAULT NULL,
  `studentgender` varchar(255) DEFAULT NULL,
  `studentaddress` varchar(255) DEFAULT NULL,
  `studentemail` varchar(255) DEFAULT NULL,
  `studentbirth` varchar(255) DEFAULT NULL,
  `studentparent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`studentid`, `studentname`, `studentphone`, `studentclass`, `studentide`, `studentgender`, `studentaddress`, `studentemail`, `studentbirth`, `studentparent`) VALUES
(4, 'Idola Olsen', '+1 (951) 793-9348', 'Velit incidunt aut ', 'female', 'Dolor non quis moles', '10', 'kofetal@mailinator.com', '2002-10-16', '0'),
(5, 'Shaine Livingston', '+1 (996) 315-6534', 'Alias adipisicing no', 'male', 'Voluptas sed esse ea', '62', 'gocys@mailinator.com', '1974-08-15', 'Halee Blankenship');

-- --------------------------------------------------------

--
-- Structure de la table `teachers`
--

CREATE TABLE `teachers` (
  `teacherid` int(11) NOT NULL,
  `teachername` varchar(255) NOT NULL,
  `teacherphone` varchar(255) NOT NULL,
  `teacherclass` varchar(255) NOT NULL,
  `teacheride` varchar(255) NOT NULL,
  `teachergender` varchar(100) NOT NULL,
  `teachersubject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `teachers`
--

INSERT INTO `teachers` (`teacherid`, `teachername`, `teacherphone`, `teacherclass`, `teacheride`, `teachergender`, `teachersubject`) VALUES
(7, 'Ivory Fulton', '+1 (357) 754-1061', 'two', 'Incidunt laborum nu', 'male', 'Et accusantium vero '),
(8, 'Natalie Walls', '+1 (821) 929-3437', 'one', 'Nobis sed commodi au', 'male', 'Voluptates qui labor'),
(9, 'Samson Chen', '+1 (998) 288-4676', 'two', 'Voluptatum ex ea omn', 'male', 'Consequat Explicabo');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `matricule` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userid`, `username`, `useremail`, `password`, `role`, `matricule`) VALUES
(6, 'oussama', 'oussama@gmail.com', '$2y$10$k1c2DZ9gMFK4I/q8vHiuxuuOwfamFed14qUFozvv7IawGO..O8zqS', 'zab', '9liwat');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentid`);

--
-- Index pour la table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherid`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
