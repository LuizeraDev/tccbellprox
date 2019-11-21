-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Nov-2019 às 01:09
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
CREATE DATABASE IF NOT EXISTS `db_bellprox` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_agendamento`
--

INSERT INTO `tb_agendamento` (`cd_agendamento`, `dt_agendamento`, `hr_agendamento`, `cd_cliente`, `cd_profissional`, `ds_confirmacao_agendamento`) VALUES
(1, '2018-10-22', '14:20:20', 1, 1, NULL),
(2, '2018-09-15', '15:52:20', 2, 1, 1),
(7, '2019-11-02', '23:59:00', 2, 1, NULL),
(8, '2000-11-06', '22:58:00', 2, 1, NULL),
(9, '0000-00-00', '00:00:00', 2, 1, NULL),
(10, '0000-00-00', '00:00:00', 2, 1, NULL),
(11, '2019-11-01', '22:58:00', 2, 1, NULL),
(12, '2019-11-01', '22:58:00', 2, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bairro`
--

CREATE TABLE IF NOT EXISTS `tb_bairro` (
  `cd_bairro` int(11) NOT NULL,
  `nm_bairro` varchar(156) DEFAULT NULL,
  `cd_cidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_bairro`),
  KEY `fk_tb_bairro_tb_cidade_idx` (`cd_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_bairro`
--

INSERT INTO `tb_bairro` (`cd_bairro`, `nm_bairro`, `cd_cidade`) VALUES
(1, 'Liberdade', 1),
(2, 'Vila Margarida', 2),
(3, 'Humaitá', 2),
(4, 'Gonzaga', 3),
(5, 'Vila Matias', 3),
(6, 'Acapulco', 4),
(7, 'Jardim Casqueiro', 5),
(8, 'Enseada', 6),
(9, 'Centro', 2),
(10, 'Cascatinha', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cidade`
--

CREATE TABLE IF NOT EXISTS `tb_cidade` (
  `cd_cidade` int(11) NOT NULL,
  `nm_cidade` varchar(156) DEFAULT NULL,
  `cd_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_cidade`),
  KEY `fk_tb_cidade_tb_estado_idx` (`cd_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cidade`
--

INSERT INTO `tb_cidade` (`cd_cidade`, `nm_cidade`, `cd_estado`) VALUES
(1, 'São Paulo', 1),
(2, 'São Vicente', 1),
(3, 'Santos', 1),
(4, 'Guarujá', 1),
(5, 'Cubatão', 1),
(6, 'Bertioga', 1),
(7, 'Rio Branco', 2),
(8, 'Niterói', 2),
(9, 'Angra dos Reis', 2),
(10, 'Marica', 2),
(11, 'Parati', 2),
(12, 'Volta Redonda', 2);

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
  `cd_logradouro` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_cliente`),
  KEY `fk_tb_cliente_tb_logradouro_idx` (`cd_logradouro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `cd_tel_fixo_cliente`, `cd_tel_cell_cliente`, `nm_email_cliente`, `cd_cpf_cliente`, `dt_nasc_cliente`, `cd_senha_cliente`, `ds_caminho_img`, `cd_logradouro`) VALUES
(1, 'Yago Silva de Jesus', '1334063601', '2147483647', 'yago@hotmail.com', '1822831008', '1996/02/20', '123', NULL, 3),
(2, 'Camila Prieto Martins', '1334638303', '2147483647', 'camila@gmail.com', '2147483647', '2002/09/15', '123', 'camila.jpg', 1),
(3, 'Davi', NULL, '0', 'davi@gmail.com', NULL, NULL, '123', NULL, NULL),
(4, 'davi ', NULL, '(13) 9978-54245', 'davi@hotmail.com', NULL, NULL, '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estado`
--

CREATE TABLE IF NOT EXISTS `tb_estado` (
  `cd_estado` int(11) NOT NULL,
  `nm_estado` varchar(156) DEFAULT NULL,
  `sg_estado` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`cd_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_estado`
--

INSERT INTO `tb_estado` (`cd_estado`, `nm_estado`, `sg_estado`) VALUES
(1, 'São Paulo', 'SP'),
(2, 'Rio de Janeiro', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_logradouro`
--

CREATE TABLE IF NOT EXISTS `tb_logradouro` (
  `cd_logradouro` int(11) NOT NULL,
  `nm_endereco` varchar(156) DEFAULT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `cd_cep` varchar(8) DEFAULT NULL,
  `cd_bairro` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_logradouro`),
  KEY `fk_tb_logradouro_tb_bairro_idx` (`cd_bairro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_logradouro`
--

INSERT INTO `tb_logradouro` (`cd_logradouro`, `nm_endereco`, `ds_complemento`, `cd_cep`, `cd_bairro`) VALUES
(1, 'Rua Câmara Júnior, 93', 'casa', '11335100', 1),
(2, 'Rua José Bonifácio, 257', 'apartamento 63', '11310080', 9),
(3, 'Rua Trasybulo P de Albuquerque', 'casa', '11349200', 3),
(4, 'Rua Estevão de Almeida, 46', 'casa', '11370080', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_profissional`
--

CREATE TABLE IF NOT EXISTS `tb_profissional` (
  `cd_profissional` int(11) NOT NULL AUTO_INCREMENT,
  `nm_profisisonal` varchar(256) DEFAULT NULL,
  `cd_tel_fixo_profissional` varchar(250) DEFAULT NULL,
  `cd_tel_cell_profissional` varchar(250) DEFAULT NULL,
  `nm_email_profissional` varchar(256) DEFAULT NULL,
  `cd_cpf_profissional` varchar(250) DEFAULT NULL,
  `dt_nasc_profissional` date DEFAULT NULL,
  `cd_senha_profissional` varchar(256) DEFAULT NULL,
  `ds_formacao_profissional` varchar(256) DEFAULT NULL,
  `ds_caminho_img` varchar(256) DEFAULT NULL,
  `cd_logradouro` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_profissional`),
  KEY `fk_tb_profissional_tb_logradouro_idx` (`cd_logradouro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_profissional`
--

INSERT INTO `tb_profissional` (`cd_profissional`, `nm_profisisonal`, `cd_tel_fixo_profissional`, `cd_tel_cell_profissional`, `nm_email_profissional`, `cd_cpf_profissional`, `dt_nasc_profissional`, `cd_senha_profissional`, `ds_formacao_profissional`, `ds_caminho_img`, `cd_logradouro`) VALUES
(1, 'Luiz Guilherme Gomes', '1333333333', '1399627706', 'luiz@gmail.com', '1086652754', '2001-12-26', '123', 'Manicure', NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servico`
--

CREATE TABLE IF NOT EXISTS `tb_servico` (
  `cd_servico` int(11) NOT NULL AUTO_INCREMENT,
  `nm_servico` varchar(256) DEFAULT NULL,
  `ds_servico` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`cd_servico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_servico`
--

INSERT INTO `tb_servico` (`cd_servico`, `nm_servico`, `ds_servico`) VALUES
(0, 'corte de sobra', 'oi'),
(1, 'corte de sobra', ''),
(2, 'corte de sobra', 'oi clodo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servico_agendamento`
--

CREATE TABLE IF NOT EXISTS `tb_servico_agendamento` (
  `cd_servico_agendamento` int(11) NOT NULL AUTO_INCREMENT,
  `cd_agendamento` int(11) DEFAULT NULL,
  `cd_servico` int(11) DEFAULT NULL,
  `vl_servico` decimal(10,0) DEFAULT NULL,
  `cd_avaliacao_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_servico_agendamento`),
  KEY `fk_servico_agendamento_agendamento_idx` (`cd_agendamento`),
  KEY `fk_servico_agendamento_servico_idx` (`cd_servico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tb_servico_agendamento`
--

INSERT INTO `tb_servico_agendamento` (`cd_servico_agendamento`, `cd_agendamento`, `cd_servico`, `vl_servico`, `cd_avaliacao_profissional`) VALUES
(1, 7, 0, '424', 1);

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
-- Limitadores para a tabela `tb_bairro`
--
ALTER TABLE `tb_bairro`
  ADD CONSTRAINT `fk_tb_bairro_tb_cidade` FOREIGN KEY (`cd_cidade`) REFERENCES `tb_cidade` (`cd_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_cidade`
--
ALTER TABLE `tb_cidade`
  ADD CONSTRAINT `fk_tb_cidade_tb_estado` FOREIGN KEY (`cd_estado`) REFERENCES `tb_estado` (`cd_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD CONSTRAINT `fk_tb_cliente_tb_logradouro` FOREIGN KEY (`cd_logradouro`) REFERENCES `tb_logradouro` (`cd_logradouro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_logradouro`
--
ALTER TABLE `tb_logradouro`
  ADD CONSTRAINT `fk_tb_logradouro_tb_bairro` FOREIGN KEY (`cd_bairro`) REFERENCES `tb_bairro` (`cd_bairro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_profissional`
--
ALTER TABLE `tb_profissional`
  ADD CONSTRAINT `fk_tb_profissional_tb_logradouro` FOREIGN KEY (`cd_logradouro`) REFERENCES `tb_logradouro` (`cd_logradouro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
