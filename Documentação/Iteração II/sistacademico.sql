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
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id_Aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_turma` int(11) NOT NULL,
  PRIMARY KEY (`id_Aluno`),
  KEY `fk_Aluno_Turma1_idx` (`cod_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_Aluno`, `nome`, `email`, `cod_turma`) VALUES
(1, 'Eduardo Borowski', 'dudu.borowski@gmail.com', 1),
(2, 'Leonardo Pedrotti', 'leonardo.pedrotti@bento.ifrs.edu.br', 1),
(3, 'Greice De Carli Roman', 'greice.roman@bento.ifrs.edu.br', 2),
(4, 'Vanderlei Albring Machado', 'vanderlei.machado@bento.ifrs.edu.br', 2),
(5, 'Lael Nervis', 'lael.nervis@bento.ifrs.edu.br', 3),
(6, 'Eduardo Hoff', 'eduardo.hoff@bento.ifrs.edu.br', 3),
(7, 'Eduardo Hoff', 'eduardo.hoff@bento.ifrs.edu.br', 1),
(8, 'Airton Fitarelli', 'airton.fitarelli@bento.ifrs.edu.br', 1),
(9, 'Valdir Lewandowski', 'valdir.lewandowski@bento.ifrs.edu.br', 1),
(10, 'Vinícius de Carli', 'vinicius.carli@bento.ifrs.edu.br', 1),
(11, 'Alex Zanon', 'alex.zanon@bento.ifrs.edu.br', 1),
(12, 'Gregori Ronchetti Bedin', 'gregori.bedin@bento.ifrs.edu.br', 1),
(13, 'Glauber Griffante', 'glauber.griffante@bento.ifrs.edu.br', 1),
(14, 'Márcio Bortolini dos Santos', 'marcio.santos@bento.ifrs.edu.br', 1),
(15, 'Bryan Zinn', 'bryan.zinn@bento.ifrs.edu.br', 1),
(16, 'Airton Fitarelli', 'airton.fitarelli@bento.ifrs.edu.br', 2),
(17, 'Alesander Vacari Barcelos', 'alesander.barcelos@bento.ifrs.edu.br', 2),
(18, 'Alex Zanon', 'alex.zanon@bento.ifrs.edu.br', 2),
(19, 'Bryan Zinn', 'bryan.zinn@bento.ifrs.edu.br', 2),
(20, 'Eduardo Borowski', 'dudu.borowski@gmail.com', 2),
(21, 'Eduardo Hoff', 'eduardo.hoff@bento.ifrs.edu.br', 2),
(22, 'Glauber Griffante', 'glauber.griffante@bento.ifrs.edu.br', 2),
(23, 'Gregori Ronchetti Bedin', 'gregori.bedin@bento.ifrs.edu.br', 2),
(24, 'Rodrigo Barbosa', 'rodrigo.barbosa@bento.ifrs.edu.br', 2),
(25, 'Thiago Raymundo Ribeiro', 'thiago.ribeiro@bento.ifrs.edu.br', 2),
(26, 'Vinícius de Carli', 'vinicius.carli@bento.ifrs.edu.br', 2),
(27, 'Airton Fitarelli', 'airton.fitarelli@bento.ifrs.edu.br', 4),
(28, 'Alex Zanon', 'alex.zanon@bento.ifrs.edu.br', 4),
(29, 'Bryan Zinn', 'bryan.zinn@bento.ifrs.edu.br', 4),
(30, 'Eduardo Borowski', 'dudu.borowski@gmail.com', 4),
(31, 'Eduardo Hoff', 'eduardo.hoff@bento.ifrs.edu.br', 4),
(32, 'Glauber Griffante', 'glauber.griffante@bento.ifrs.edu.br', 4),
(33, 'Gregori Ronchetti Bedin', 'gregori.bedin@bento.ifrs.edu.br', 4),
(34, 'Jonas Ludwig de Bitencourt', 'jonas.bitencourt@bento.ifrs.edu.br', 4),
(35, 'Leonardo Pedrotti', 'leonardo.pedrotti@bento.ifrs.edu.br', 4),
(36, 'Márcio Bortolini dos Santos', 'marcio.santos@bento.ifrs.edu.br', 4),
(37, 'Ricardo Brancher', 'ricardo.brancher@bento.ifrs.edu.br', 4),
(38, 'Airton Fitarelli', 'airton.fitarelli@bento.ifrs.edu.br', 3),
(39, 'Bryan Zinn', 'bryan.zinn@bento.ifrs.edu.br', 3),
(40, 'Eduardo Borowski', 'dudu.borowski@gmail.com', 3),
(41, 'Glauber Griffante', 'glauber.griffante@bento.ifrs.edu.br', 3),
(42, 'Gregori Ronchetti Bedin', 'gregori.bedin@bento.ifrs.edu.br', 3),
(43, 'Greice De Carli Roman', 'greice.roman@bento.ifrs.edu.br', 3),
(44, 'Leonardo Pedrotti', 'leonardo.pedrotti@bento.ifrs.edu.br', 3),
(45, 'Leonardo Manfredini', 'leonardo.manfredini@bento.ifrs.edu.br', 3),
(46, 'Márcio Bortolini dos Santos', 'marcio.santos@bento.ifrs.edu.br', 3),
(47, 'Ricardo Brancher', 'ricardo.brancher@bento.ifrs.edu.br', 3),
(48, 'Thiago Grassel dos Reis', 'thiago.reis@bento.ifrs.edu.br', 3),
(49, 'Valdir Lewandowski', 'valdir.lewandowski@bento.ifrs.edu.br', 3),
(50, 'Vanderlei Albring Machado', 'vanderlei.machado@bento.ifrs.edu.br', 3),
(51, 'Vinícius de Carli', 'vinicius.carli@bento.ifrs.edu.br', 3),
(52, 'Alan Dall Agnol', 'alan.dallagnol@bento.ifrs.edu.br', 5),
(53, 'Alexia Santos', 'alexia.santos@bento.ifrs.edu.br', 5),
(54, 'Anderson Mazzarolli', 'anderson.mazzarolli@bento.ifrs.edu.br', 5),
(55, 'Camila Favretto', 'camila.favretto@bento.ifrs.edu.br', 5),
(56, 'Daniel Antonio Zugno', 'daniel.zugno@bento.ifrs.edu.br', 5),
(57, 'Jander Menin', 'jander.menin@bento.ifrs.edu.br', 5),
(58, 'Júlio César Caus Pagliari', 'julio.pagliari@bento.ifrs.edu.br', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id_Aula`, `descricao`, `conteudo`, `dataAula`, `horaInicio`, `horaTermino`, `cod_turma`) VALUES
(3, 'Projeto Final', 'Slides referentes ao desenvolvimento do Projeto Final da Disciplina', '2014-04-02', '18:15:00', '20:30:00', 1),
(4, 'Gerência de Escopo', 'Slides sobre Gerência de Escopo', '2014-02-27', '19:00:00', '22:15:00', 3),
(5, 'CMM', 'Slides sobre CMM', '2014-05-14', '20:45:00', '22:15:00', 4),
(7, 'Activity', 'Ciclo de Vida de uma Activity /\r\nExercício: Exibição dos contatos da agenda em uma lista', '2014-03-24', '19:00:00', '22:15:00', 2),
(8, 'Introdução a Array', 'Slides sobre arrays em Java.', '2014-05-23', '18:15:00', '20:30:00', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_Professor`, `nome`, `username`, `password`) VALUES
(1, 'Rogério', 'rogerio', 'rogerio'),
(2, 'Mauricio', 'mauricio', 'mauricio'),
(3, 'Lissandra', 'lissandra', 'lissandra'),
(4, 'Sandro', 'sandro', 'sandro'),
(5, 'Administrador', 'admin', 'admin');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_Turma`, `descricao`, `cod_prof`) VALUES
(1, 'Desenvolvimento de Sistemas II - 2014/1', 1),
(2, 'Tópicos Avançados I - 2014/1', 2),
(3, 'Gerência de Projetos de Software - 2014/1', 2),
(4, 'Qualidade de Software - 2014/1', 3),
(5, 'Programação I - 2014/1', 4);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_Aluno_Turma1` FOREIGN KEY (`cod_turma`) REFERENCES `turma` (`id_Turma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
