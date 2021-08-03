-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 19, 2021 alle 04:28
-- Versione del server: 10.4.13-MariaDB
-- Versione PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `provapratica_1_unimarconi`
--
CREATE DATABASE IF NOT EXISTS `provapratica_1_unimarconi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `provapratica_1_unimarconi`;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

DROP TABLE IF EXISTS `clienti`;
CREATE TABLE IF NOT EXISTS `clienti` (
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  PRIMARY KEY (`Nome`,`Cognome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Svuota la tabella prima dell'inserimento `clienti`
--

TRUNCATE TABLE `clienti`;
--
-- Dump dei dati per la tabella `clienti`
--

INSERT INTO `clienti` (`Nome`, `Cognome`) VALUES
('Ernesto', 'Nicoletti'),
('Francesca', 'Tullio');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
