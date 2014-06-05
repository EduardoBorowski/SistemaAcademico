CREATE  TABLE IF NOT EXISTS `sistacademico`.`Aluno` (
  `id_Aluno` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `cod_turma` INT NOT NULL ,
  PRIMARY KEY (`id_Aluno`) ,
  INDEX `fk_Aluno_Turma1_idx` (`cod_turma` ASC) ,
  CONSTRAINT `fk_Aluno_Turma1`
    FOREIGN KEY (`cod_turma` )
    REFERENCES `sistacademico`.`Turma` (`id_Turma` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
/* Insert inicial */
INSERT INTO `aluno` (`id_Aluno`, `nome`, `email`, `cod_turma`) VALUES
(1, 'Eduardo Borowski', 'dudu.borowski@gmail.com', 1),
(2, 'Leonardo Pedrotti', 'leonardo.pedrotti@bento.ifrs.edu.br', 1),
(3, 'Greice Roman', 'greice.roman@bento.ifrs.edu.br', 2),
(4, 'Vanderlei Machado', 'vanderlei.machado@bento.ifrs.edu.br', 2),
(5, 'Lael Nervis', 'lael.nervis@bento.ifrs.edu.br', 3),
(6, 'Eduardo Hoff', 'eduardo.hoff@bento.ifrs.edu.br', 3);

/* Insert turma 1 */
INSERT INTO `aluno` (`id_Aluno`, `nome`, `email`, `cod_turma`) VALUES 
(7, 'Eduardo Hoff', 'eduardo.hoff@bento.ifrs.edu.br', 1),
(8, 'Airton Fitarelli', 'airton.fitarelli@bento.ifrs.edu.br', 1),
(9, 'Valdir Lewandowski', 'valdir.lewandowski@bento.ifrs.edu.br', 1),
(10, 'Vinícius de Carli', 'vinicius.carli@bento.ifrs.edu.br', 1),
(11, 'Alex Zanon', 'alex.zanon@bento.ifrs.edu.br', 1),
(12, 'Gregori Ronchetti Bedin', 'gregori.bedin@bento.ifrs.edu.br', 1),
(13, 'Glauber Griffante', 'glauber.griffante@bento.ifrs.edu.br', 1),
(14, 'Márcio Bortolini dos Santos', 'marcio.santos@bento.ifrs.edu.br', 1),
(15, 'Bryan Zinn', 'bryan.zinn@bento.ifrs.edu.br', 1);

/* Insert turma 2 */
INSERT INTO `aluno` (`id_Aluno`, `nome`, `email`, `cod_turma`) VALUES 
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
(26, 'Vinícius de Carli', 'vinicius.carli@bento.ifrs.edu.br', 2);

/* Insert turma 3 */
INSERT INTO `aluno` (`id_Aluno`, `nome`, `email`, `cod_turma`) VALUES 
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
(51, 'Vinícius de Carli', 'vinicius.carli@bento.ifrs.edu.br', 3);

/* Insert turma 4 */
INSERT INTO `aluno` (`id_Aluno`, `nome`, `email`, `cod_turma`) VALUES 
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
(37, 'Ricardo Brancher', 'ricardo.brancher@bento.ifrs.edu.br', 4);

/* Insert turma 5 */
INSERT INTO `aluno` (`id_Aluno`, `nome`, `email`, `cod_turma`) VALUES 
(52, 'Alan Dall Agnol', 'alan.dallagnol@bento.ifrs.edu.br', 5),
(53, 'Alexia Santos', 'alexia.santos@bento.ifrs.edu.br', 5),
(54, 'Anderson Mazzarolli', 'anderson.mazzarolli@bento.ifrs.edu.br', 5),
(55, 'Camila Favretto', 'camila.favretto@bento.ifrs.edu.br', 5),
(56, 'Daniel Antonio Zugno', 'daniel.zugno@bento.ifrs.edu.br', 5),
(57, 'Jander Menin', 'jander.menin@bento.ifrs.edu.br', 5),
(58, 'Júlio César Caus Pagliari', 'julio.pagliari@bento.ifrs.edu.br', 5);