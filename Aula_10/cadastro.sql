-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Set-2019 às 23:25
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `feiracadastro`
--
CREATE DATABASE IF NOT EXISTS `feiracadastro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `feiracadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `idGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `nmAluno1` varchar(128) NOT NULL,
  `nmAluno2` varchar(128) NOT NULL,
  `nmAluno3` varchar(128) NOT NULL,
  `emailAluno1` varchar(128) NOT NULL,
  `emailAluno2` varchar(128) NOT NULL,
  `emailAluno3` varchar(128) NOT NULL,
  `nmProjeto` varchar(128) NOT NULL,
  `nmProfessor` varchar(128) NOT NULL,
  `riscos` varchar(128) DEFAULT NULL,
  `dsProjeto` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`idGrupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
