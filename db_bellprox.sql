-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_bellprox
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_bellprox
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_bellprox` DEFAULT CHARACTER SET latin1 ;
USE `db_bellprox` ;

-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_cliente` (
  `cd_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_cliente` VARCHAR(256) NULL DEFAULT NULL,
  `cd_tel_fixo_cliente` VARCHAR(250) NULL DEFAULT NULL,
  `cd_tel_cell_cliente` VARCHAR(250) NULL DEFAULT NULL,
  `nm_email_cliente` VARCHAR(256) NULL DEFAULT NULL,
  `cd_cpf_cliente` VARCHAR(250) NULL DEFAULT NULL,
  `dt_nasc_cliente` VARCHAR(45) NULL DEFAULT NULL,
  `cd_senha_cliente` VARCHAR(256) NULL DEFAULT NULL,
  `ds_caminho_img` VARCHAR(256) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_cliente`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_profissional`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_profissional` (
  `cd_profissional` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_profissional` VARCHAR(256) NULL DEFAULT NULL,
  `cd_tel_fixo_profissional` VARCHAR(250) NULL DEFAULT NULL,
  `cd_tel_cell_profissional` VARCHAR(250) NULL DEFAULT NULL,
  `nm_email_profissional` VARCHAR(256) NULL DEFAULT NULL,
  `cd_cpf_profissional` VARCHAR(250) NULL DEFAULT NULL,
  `dt_nasc_profissional` DATE NULL DEFAULT NULL,
  `cd_senha_profissional` VARCHAR(256) NULL DEFAULT NULL,
  `ds_profissional` VARCHAR(256) NULL DEFAULT NULL,
  `ds_caminho_img` VARCHAR(256) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_profissional`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_agendamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_agendamento` (
  `cd_agendamento` INT(11) NOT NULL AUTO_INCREMENT,
  `dt_agendamento` DATE NULL DEFAULT NULL,
  `hr_agendamento` TIME NULL DEFAULT NULL,
  `cd_cliente` INT(11) NULL DEFAULT NULL,
  `cd_profissional` INT(11) NULL DEFAULT NULL,
  `ds_confirmacao_agendamento` TINYINT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_agendamento`),
  INDEX `fk_tb_agendamento_tb_cliente_idx` (`cd_cliente`),
  INDEX `fk_tb_agendamento_tb_profissional_idx` (`cd_profissional`),
  CONSTRAINT `fk_tb_agendamento_tb_cliente`
    FOREIGN KEY (`cd_cliente`)
    REFERENCES `db_bellprox`.`tb_cliente` (`cd_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_agendamento_tb_profissional`
    FOREIGN KEY (`cd_profissional`)
    REFERENCES `db_bellprox`.`tb_profissional` (`cd_profissional`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_endereco_cliente_profissional`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_endereco_cliente_profissional` (
  `cd_tb_endereco_c_p` INT(11) NOT NULL AUTO_INCREMENT,
  `cd_profissional` INT(11) NULL DEFAULT NULL,
  `cd_cliente` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_tb_endereco_c_p`),
  INDEX `tb_endereco_c_p_cliente_idx` (`cd_cliente`),
  INDEX `tb_endereco_c_p_profissional_idx` (`cd_profissional`),
  CONSTRAINT `fk_endereco_c_p_cliente`
    FOREIGN KEY (`cd_cliente`)
    REFERENCES `db_bellprox`.`tb_cliente` (`cd_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_c_p_profissional`
    FOREIGN KEY (`cd_profissional`)
    REFERENCES `db_bellprox`.`tb_profissional` (`cd_profissional`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_endereco` (
  `cd_endereco` INT(11) NOT NULL AUTO_INCREMENT,
  `cep` VARCHAR(250) NULL DEFAULT NULL,
  `nm_rua` VARCHAR(250) NULL DEFAULT NULL,
  `nm_bairro` VARCHAR(250) NULL DEFAULT NULL,
  `nm_cidade` VARCHAR(250) NULL DEFAULT NULL,
  `nm_estado` VARCHAR(250) NULL DEFAULT NULL,
  `cd_tb_endereco_c_p` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_endereco`),
  INDEX `fk_endereco_tb_endereco_c_p_idx` (`cd_tb_endereco_c_p`),
  CONSTRAINT `fk_endereco_tb_endereco_c_p`
    FOREIGN KEY (`cd_tb_endereco_c_p`)
    REFERENCES `db_bellprox`.`tb_endereco_cliente_profissional` (`cd_tb_endereco_c_p`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_servico` (
  `cd_servico` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_servico` VARCHAR(256) NULL DEFAULT NULL,
  `ds_servico` VARCHAR(256) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_servico`))
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_servico_agendamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_servico_agendamento` (
  `cd_servico_agendamento` INT(11) NOT NULL AUTO_INCREMENT,
  `cd_agendamento` INT(11) NULL DEFAULT NULL,
  `cd_servico` INT(11) NULL DEFAULT NULL,
  `vl_servico` DECIMAL(10,0) NULL DEFAULT NULL,
  `cd_avaliacao_profissional` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_servico_agendamento`),
  INDEX `fk_servico_agendamento_agendamento_idx` (`cd_agendamento`),
  INDEX `fk_servico_agendamento_servico_idx` (`cd_servico`),
  CONSTRAINT `fk_servico_agendamento_agendamento`
    FOREIGN KEY (`cd_agendamento`)
    REFERENCES `db_bellprox`.`tb_agendamento` (`cd_agendamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servico_agendamento_servico`
    FOREIGN KEY (`cd_servico`)
    REFERENCES `db_bellprox`.`tb_servico` (`cd_servico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_servico_profissional`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_servico_profissional` (
  `cd_servico_profissional` INT(11) NOT NULL AUTO_INCREMENT,
  `cd_profissional` INT(11) NULL DEFAULT NULL,
  `cd_servico` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_servico_profissional`),
  INDEX `fk_servico_profissional_tb_profissional_idx` (`cd_profissional`),
  INDEX `fk_servico_profissional_tb_servico_idx` (`cd_servico`),
  CONSTRAINT `fk_servico_profissional_tb_profissional`
    FOREIGN KEY (`cd_profissional`)
    REFERENCES `db_bellprox`.`tb_profissional` (`cd_profissional`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servico_profissional_tb_servico`
    FOREIGN KEY (`cd_servico`)
    REFERENCES `db_bellprox`.`tb_servico` (`cd_servico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_bellprox`.`tb_portifolio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_bellprox`.`tb_portifolio` (
  `cd_portifolio` INT(11) NOT NULL AUTO_INCREMENT,
  `ds_caminho_img` VARCHAR(256) NULL,
  `cd_profissional` INT NULL,
  PRIMARY KEY (`cd_portifolio`),
  INDEX `fk_protifolio_tb_profissional_idx` (`cd_profissional`),
  CONSTRAINT `fk_protifolio_tb_profissional`
    FOREIGN KEY (`cd_profissional`)
    REFERENCES `db_bellprox`.`tb_profissional` (`cd_profissional`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- INSERT 

INSERT INTO `tb_agendamento` (`cd_agendamento`, `dt_agendamento`, `hr_agendamento`, `cd_cliente`, `cd_profissional`, `ds_confirmacao_agendamento`) VALUES
(1, '2018-10-22', '14:20:20', 1, 1, NULL),
(2, '2018-09-15', '15:52:20', 2, 1, 1),
(7, '2019-11-02', '23:59:00', 2, 1, NULL),
(8, '2000-11-06', '22:58:00', 2, 1, NULL),
(9, '2000-11-05', '00:00:00', 2, 1, NULL),
(10, '2003-12-05', '00:00:00', 2, 1, NULL),
(11, '2019-11-01', '22:58:00', 2, 1, NULL),
(12, '2019-11-01', '22:58:00', 2, 1, NULL),
(13, '2000-04-18', '22:00:00', 2, 3, 1),
(14, '2000-11-30', '03:33:00', 2, 3, NULL),
(15, '2019-11-02', '21:00:00', 2, 3, NULL),
(16, '2019-11-02', '21:00:00', 2, 3, NULL),
(17, '2019-11-02', '21:00:00', 2, 3, NULL),
(18, '2019-12-30', '00:02:00', 2, 3, NULL),
(19, '2019-12-24', '20:00:00', 2, 3, 1);


INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `cd_tel_fixo_cliente`, `cd_tel_cell_cliente`, `nm_email_cliente`, `cd_cpf_cliente`, `dt_nasc_cliente`, `cd_senha_cliente`, `ds_caminho_img`) VALUES
(1, 'Yago Silva de Jesus', '1334063601', '2147483647', 'yago@hotmail.com', '1822831008', '1996/02/20', '123', NULL),
(2, 'Camila Prieto Martins', '1334638303', '2147483647', 'camila@gmail.com', '2147483647', '2002/09/15', '123', 'Koala.jpg'),
(3, 'Davi', NULL, '0', 'davi@gmail.com', NULL, NULL, '123', NULL),
(4, 'davi ', NULL, '(13) 9978-54245', 'davi@hotmail.com', NULL, NULL, '123', NULL);

INSERT INTO `tb_endereco` (`cd_endereco`, `cep`, `nm_rua`, `nm_bairro`, `nm_cidade`, `nm_estado`, `cd_tb_endereco_c_p`) VALUES
(1, '11345045', 'irma maria', 'samarita', 'são vicente', 'São Paulo', 1);

INSERT INTO `tb_profissional` (`cd_profissional`, `nm_profissional`, `cd_tel_fixo_profissional`, `cd_tel_cell_profissional`, `nm_email_profissional`, `cd_cpf_profissional`, `dt_nasc_profissional`, `cd_senha_profissional`, `ds_profissional`, `ds_caminho_img`) VALUES
(3, 'Luiz Guilherme ', NULL, '(13) 9815-84772', 'luiz@gmail.com', NULL, NULL, '123', 'Sou um profissional especializado na área de beleza, saúde e bem-estar.', 'luiz.jpg');


INSERT INTO `tb_servico` (`cd_servico`, `nm_servico`, `ds_servico`) VALUES
(1, 'corte de sobra', ''),
(2, 'corte de sobra', 'oi clodo'),
(6, 'corte de sobra', 'oi'),
(9, 'corte de sobra', 'olÃ¡ de novo'),
(10, '', 'Maquiagem, cabelo, ETC'),
(11, '', 'Barba e cabelo'),
(12, '', 'Barba e cabelo'),
(13, '', 'Barba e cabelo'),
(14, 'Barba e Cabelo', 'Corte com a familia'),
(15, 'Corte de cabelo', 'Preciso de corte de cabelo e Maquiagem ');

INSERT INTO `tb_servico_agendamento` (`cd_servico_agendamento`, `cd_agendamento`, `cd_servico`, `vl_servico`, `cd_avaliacao_profissional`) VALUES
(1, 7, 0, '424', 1);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
