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

INSERT INTO `aluno` (`id_Aluno`, `nome`, `email`, `cod_turma`) VALUES
(1, 'Eduardo Borowski', 'dudu.borowski@gmail.com', 1),
(2, 'Leonardo Pedrotti', 'leonardo.pedrotti@bento.ifrs.edu.br', 1),
(3, 'Greice Roman', 'greice.roman@bento.ifrs.edu.br', 2),
(4, 'Vanderlei Machado', 'vanderlei.machado@bento.ifrs.edu.br', 2),
(5, 'Lael Nervis', 'lael.nervis@bento.ifrs.edu.br', 3),
(6, 'Eduardo Hoff', 'eduardo.hoff@bento.ifrs.edu.br', 3);