-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/11/2019 às 06h59min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_bellprox`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `tb_agendamento`
--

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
(18, '2019-12-30', '00:02:00', 2, 3, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `cd_tel_fixo_cliente`, `cd_tel_cell_cliente`, `nm_email_cliente`, `cd_cpf_cliente`, `dt_nasc_cliente`, `cd_senha_cliente`, `ds_caminho_img`) VALUES
(1, 'Yago Silva de Jesus', '1334063601', '2147483647', 'yago@hotmail.com', '1822831008', '1996/02/20', '123', NULL),
(2, 'Camila Prieto Martins', '1334638303', '2147483647', 'camila@gmail.com', '2147483647', '2002/09/15', '123', 'camila.jpg'),
(3, 'Davi', NULL, '0', 'davi@gmail.com', NULL, NULL, '123', NULL),
(4, 'davi ', NULL, '(13) 9978-54245', 'davi@hotmail.com', NULL, NULL, '123', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE IF NOT EXISTS `tb_endereco` (
  `cd_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(250) DEFAULT NULL,
  `nm_rua` varchar(250) DEFAULT NULL,
  `nm_bairro` varchar(250) DEFAULT NULL,
  `nm_cidade` varchar(250) DEFAULT NULL,
  `nm_estado` varchar(250) DEFAULT NULL,
  `cd_tb_endereco_c_p` int(11) DEFAULT NULL,
  PRIMARY KEY (`cd_endereco`),
  KEY `fk_endereco_tb_endereco_c_p_idx` (`cd_tb_endereco_c_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_endereco`
--

INSERT INTO `tb_endereco` (`cd_endereco`, `cep`, `nm_rua`, `nm_bairro`, `nm_cidade`, `nm_estado`, `cd_tb_endereco_c_p`) VALUES
(1, '11345045', 'irma maria', 'samarita', 'são vicente', 'São Paulo', 1);

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

--
-- Extraindo dados da tabela `tb_endereco_cliente_profissional`
--

INSERT INTO `tb_endereco_cliente_profissional` (`cd_tb_endereco_c_p`, `cd_profissional`, `cd_cliente`) VALUES
(1, 3, 2);

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

INSERT INTO `tb_profissional` (`cd_profissional`, `nm_profissional`, `cd_tel_fixo_profissional`, `cd_tel_cell_profissional`, `nm_email_profissional`, `cd_cpf_profissional`, `dt_nasc_profissional`, `cd_senha_profissional`, `ds_profissional`, `ds_caminho_img`) VALUES
(3, 'Luiz Guilherme ', NULL, '(13) 9815-84772', 'luiz@gmail.com', NULL, NULL, '123', 'Sou um profissional especializado na área de beleza, saúde e bem-estar.', 'luiz.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servico`
--

CREATE TABLE IF NOT EXISTS `tb_servico` (
  `cd_servico` int(11) NOT NULL AUTO_INCREMENT,
  `nm_servico` varchar(256) DEFAULT NULL,
  `ds_servico` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`cd_servico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `tb_servico`
--

INSERT INTO `tb_servico` (`cd_servico`, `nm_servico`, `ds_servico`) VALUES
(1, 'corte de sobra', ''),
(2, 'corte de sobra', 'oi clodo'),
(6, 'corte de sobra', 'oi'),
(9, 'corte de sobra', 'olÃ¡ de novo'),
(10, '', 'Maquiagem, cabelo, ETC'),
(11, '', 'Barba e cabelo'),
(12, '', 'Barba e cabelo'),
(13, '', 'Barba e cabelo'),
(14, 'Barba e Cabelo', 'Corte com a familia');

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
(1, 7, 0, 424, 1);

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
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `tb_agendamento`
--
ALTER TABLE `tb_agendamento`
  ADD CONSTRAINT `fk_tb_agendamento_tb_cliente` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_agendamento_tb_profissional` FOREIGN KEY (`cd_profissional`) REFERENCES `tb_profissional` (`cd_profissional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD CONSTRAINT `fk_endereco_tb_endereco_c_p` FOREIGN KEY (`cd_tb_endereco_c_p`) REFERENCES `tb_endereco_cliente_profissional` (`cd_tb_endereco_c_p`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `tb_endereco_cliente_profissional`
--
ALTER TABLE `tb_endereco_cliente_profissional`
  ADD CONSTRAINT `tb_endereco_c_p_cliente` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_endereco_c_p_profissional` FOREIGN KEY (`cd_profissional`) REFERENCES `tb_profissional` (`cd_profissional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `tb_servico_agendamento`
--
ALTER TABLE `tb_servico_agendamento`
  ADD CONSTRAINT `fk_servico_agendamento_agendamento` FOREIGN KEY (`cd_agendamento`) REFERENCES `tb_agendamento` (`cd_agendamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servico_agendamento_servico` FOREIGN KEY (`cd_servico`) REFERENCES `tb_servico` (`cd_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `tb_servico_profissional`
--
ALTER TABLE `tb_servico_profissional`
  ADD CONSTRAINT `fk_servico_profissional_tb_profissional` FOREIGN KEY (`cd_profissional`) REFERENCES `tb_profissional` (`cd_profissional`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servico_profissional_tb_servico` FOREIGN KEY (`cd_servico`) REFERENCES `tb_servico` (`cd_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
