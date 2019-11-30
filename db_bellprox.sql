<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Nov-2019 às 21:56
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_bellprox`
--
CREATE DATABASE IF NOT EXISTS `db_bellprox` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_bellprox`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agendamento`
--

CREATE TABLE IF NOT EXISTS `tb_agendamento` (
  `cd_agendamento` int(11) NOT NULL AUTO_INCREMENT,
  `dt_agendamento` date DEFAULT NULL,
  `hr_agendamento` time DEFAULT NULL,
  `cd_cliente` int(11) DEFAULT NULL,
  `cd_profissional` int(11) DEFAULT NULL,
  `ds_confirmacao_agendamento` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`cd_agendamento`),
  KEY `fk_tb_agendamento_tb_cliente_idx` (`cd_cliente`),
  KEY `fk_tb_agendamento_tb_profissional_idx` (`cd_profissional`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `tb_agendamento`
--
=======
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
>>>>>>> 4af1eaf6dc434e8d3a2ed4df741136ca96fc0f25

INSERT INTO `tb_agendamento` (`cd_agendamento`, `dt_agendamento`, `hr_agendamento`, `cd_cliente`, `cd_profissional`, `ds_confirmacao_agendamento`) VALUES
(7, '2019-11-02', '23:59:00', 2, 3, 1),
(20, '3232-03-31', '03:23:00', 2, 3, NULL);

<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cd_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nm_cliente` varchar(256) DEFAULT NULL,
  `cd_tel_fixo_cliente` varchar(250) DEFAULT NULL,
  `cd_tel_cell_cliente` varchar(250) DEFAULT NULL,
  `nm_email_cliente` varchar(256) DEFAULT NULL,
  `cd_cpf_cliente` varchar(250) DEFAULT NULL,
  `dt_nasc_cliente` varchar(45) DEFAULT NULL,
  `cd_senha_cliente` varchar(256) DEFAULT NULL,
  `ds_caminho_img` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`cd_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_cliente`
--
=======
>>>>>>> 4af1eaf6dc434e8d3a2ed4df741136ca96fc0f25

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `cd_tel_fixo_cliente`, `cd_tel_cell_cliente`, `nm_email_cliente`, `cd_cpf_cliente`, `dt_nasc_cliente`, `cd_senha_cliente`, `ds_caminho_img`) VALUES
(1, 'Yago Silva de Jesus', '1334063601', '2147483647', 'yago@hotmail.com', '1822831008', '1996/02/20', '123', NULL),
(2, 'davi', '1334638303', '2147483647', 'davi@gmaiil.com', '2147483647', '2002/09/15', '123', ''),
(3, 'Davi', NULL, '0', 'davi@gmail.com', NULL, NULL, '123', NULL),
(4, 'davi ', NULL, '(13) 9978-54245', 'davi@hotmail.com', NULL, NULL, '123', NULL),
(5, 'Paulo', NULL, '139991178578', 'paulo@hotmail.com', NULL, NULL, '123', 'avatar.png');

INSERT INTO `tb_endereco` (`cd_endereco`, `cep`, `nm_rua`, `nm_bairro`, `nm_cidade`, `nm_estado`, `cd_tb_endereco_c_p`) VALUES
(1, '11345045', 'irma maria', 'samarita', 'são vicente', 'São Paulo', 1);

<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_cliente_profissional`
--

CREATE TABLE IF NOT EXISTS `tb_endereco_cliente_profissional` (
  `cd_tb_endereco_c_p` int(11) NOT NULL AUTO_INCREMENT,
  `cd_profissional` int(11) DEFAULT NULL,
  `cd_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_tb_endereco_c_p`),
  KEY `tb_endereco_c_p_cliente_idx` (`cd_cliente`),
  KEY `tb_endereco_c_p_profissional_idx` (`cd_profissional`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_portifolio`
--

CREATE TABLE IF NOT EXISTS `tb_portifolio` (
  `cd_portifolio` int(11) NOT NULL AUTO_INCREMENT,
  `ds_caminho_img` varchar(256) DEFAULT NULL,
  `cd_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_portifolio`),
  KEY `fk_protifolio_tb_profissional_idx` (`cd_profissional`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_profissional`
--

CREATE TABLE IF NOT EXISTS `tb_profissional` (
  `cd_profissional` int(11) NOT NULL AUTO_INCREMENT,
  `nm_profissional` varchar(256) DEFAULT NULL,
  `cd_tel_fixo_profissional` varchar(250) DEFAULT NULL,
  `cd_tel_cell_profissional` varchar(250) DEFAULT NULL,
  `nm_email_profissional` varchar(256) DEFAULT NULL,
  `cd_cpf_profissional` varchar(250) DEFAULT NULL,
  `dt_nasc_profissional` date DEFAULT NULL,
  `cd_senha_profissional` varchar(256) DEFAULT NULL,
  `ds_profissional` varchar(256) DEFAULT NULL,
  `ds_caminho_img` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`cd_profissional`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_profissional`
--

=======
>>>>>>> 4af1eaf6dc434e8d3a2ed4df741136ca96fc0f25
INSERT INTO `tb_profissional` (`cd_profissional`, `nm_profissional`, `cd_tel_fixo_profissional`, `cd_tel_cell_profissional`, `nm_email_profissional`, `cd_cpf_profissional`, `dt_nasc_profissional`, `cd_senha_profissional`, `ds_profissional`, `ds_caminho_img`) VALUES
(3, 'Camila Andrade', NULL, '(13) 9815-84772', 'camila_andrade@hotmail.com', NULL, NULL, '123', 'Sou um profissional especializado na beleza e bem-estar.', 'imagem.jpeg');

<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servico`
--

CREATE TABLE IF NOT EXISTS `tb_servico` (
  `cd_servico` int(11) NOT NULL AUTO_INCREMENT,
  `nm_servico` varchar(256) DEFAULT NULL,
  `ds_servico` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`cd_servico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `tb_servico`
--
=======
>>>>>>> 4af1eaf6dc434e8d3a2ed4df741136ca96fc0f25

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
(15, 'Corte de cabelo', 'Preciso de corte de cabelo e Maquiagem '),
(16, '232332', '32323');

INSERT INTO `tb_servico_agendamento` (`cd_servico_agendamento`, `cd_agendamento`, `cd_servico`, `vl_servico`, `cd_avaliacao_profissional`) VALUES
(1, 7, 0, '424', 1);

<<<<<<< HEAD
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servico_profissional`
--

CREATE TABLE IF NOT EXISTS `tb_servico_profissional` (
  `cd_servico_profissional` int(11) NOT NULL AUTO_INCREMENT,
  `cd_profissional` int(11) DEFAULT NULL,
  `cd_servico` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_servico_profissional`),
  KEY `fk_servico_profissional_tb_profissional_idx` (`cd_profissional`),
  KEY `fk_servico_profissional_tb_servico_idx` (`cd_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_agendamento`
--
ALTER TABLE `tb_agendamento`
  ADD CONSTRAINT `fk_tb_agendamento_tb_cliente` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_agendamento_tb_profissional` FOREIGN KEY (`cd_profissional`) REFERENCES `tb_profissional` (`cd_profissional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD CONSTRAINT `fk_endereco_tb_endereco_c_p` FOREIGN KEY (`cd_tb_endereco_c_p`) REFERENCES `tb_endereco_cliente_profissional` (`cd_tb_endereco_c_p`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_endereco_cliente_profissional`
--
ALTER TABLE `tb_endereco_cliente_profissional`
  ADD CONSTRAINT `fk_endereco_c_p_cliente` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_endereco_c_p_profissional` FOREIGN KEY (`cd_profissional`) REFERENCES `tb_profissional` (`cd_profissional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_portifolio`
--
ALTER TABLE `tb_portifolio`
  ADD CONSTRAINT `fk_protifolio_tb_profissional` FOREIGN KEY (`cd_profissional`) REFERENCES `tb_profissional` (`cd_profissional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_servico_agendamento`
--
ALTER TABLE `tb_servico_agendamento`
  ADD CONSTRAINT `fk_servico_agendamento_agendamento` FOREIGN KEY (`cd_agendamento`) REFERENCES `tb_agendamento` (`cd_agendamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servico_agendamento_servico` FOREIGN KEY (`cd_servico`) REFERENCES `tb_servico` (`cd_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_servico_profissional`
--
ALTER TABLE `tb_servico_profissional`
  ADD CONSTRAINT `fk_servico_profissional_tb_profissional` FOREIGN KEY (`cd_profissional`) REFERENCES `tb_profissional` (`cd_profissional`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servico_profissional_tb_servico` FOREIGN KEY (`cd_servico`) REFERENCES `tb_servico` (`cd_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
>>>>>>> 4af1eaf6dc434e8d3a2ed4df741136ca96fc0f25
