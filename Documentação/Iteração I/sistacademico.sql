-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sistacademico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE IF NOT EXISTS `aula` (
  `id_Aula` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conteudo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataAula` date DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaTermino` time DEFAULT NULL,
  `cod_turma` int(11) NOT NULL,
  PRIMARY KEY (`id_Aula`),
  KEY `fk_Aula_Turma_idx` (`cod_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id_Aula`, `descricao`, `conteudo`, `dataAula`, `horaInicio`, `horaTermino`, `cod_turma`) VALUES
(2, 'Aula do professor Ramos', 'Alguma coisa em redes', '2014-05-07', '19:00:00', '22:15:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `id_Professor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_Professor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_Professor`, `nome`, `username`, `password`) VALUES
(1, 'Rogério', 'rogerio', '123456'),
(2, 'Mauricio', 'mauricio', '123'),
(3, 'Lissandra', 'lissandra', 'qwerty');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id_Turma` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_prof` int(11) NOT NULL,
  PRIMARY KEY (`id_Turma`),
  KEY `fk_Turma_Professor1_idx` (`cod_prof`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_Turma`, `descricao`, `cod_prof`) VALUES
(1, 'Desenvolvimento de Sistemas II - 2014/1', 1),
(2, 'Tópicos Avançados I - 2014/1', 2),
(3, 'Gerência de Projetos de Software - 2014/1', 2),
(4, 'Qualidade de Software - 2014/1', 3);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `fk_Aula_Turma` FOREIGN KEY (`cod_turma`) REFERENCES `turma` (`id_Turma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `fk_Turma_Professor1` FOREIGN KEY (`cod_prof`) REFERENCES `professor` (`id_Professor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
