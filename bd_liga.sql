-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Jun-2022 às 02:39
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_liga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_basquete`
--

DROP TABLE IF EXISTS `tb_basquete`;
CREATE TABLE IF NOT EXISTS `tb_basquete` (
  `id_basquete` int(200) NOT NULL AUTO_INCREMENT,
  `foto_basquete` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_basquete` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_basquete` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_basquete` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_basquete` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pf_basquete` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ps_basquete` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_basquete` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_basquete`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_basquete`
--

INSERT INTO `tb_basquete` (`id_basquete`, `foto_basquete`, `nome_basquete`, `v_basquete`, `d_basquete`, `p_basquete`, `pf_basquete`, `ps_basquete`, `sp_basquete`) VALUES
(5, '62af37f3a8514.png', 'Flamengo', '1', '2', '3', '4', '5', '6'),
(6, '62af44d8005c6.png', 'Flamengo', '10', '10', '8', '1', '1', '6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carimba`
--

DROP TABLE IF EXISTS `tb_carimba`;
CREATE TABLE IF NOT EXISTS `tb_carimba` (
  `id_carimba` int(200) NOT NULL AUTO_INCREMENT,
  `foto_carimba` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_carimba` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_carimba` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_carimba` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_carimba` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_carimba` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_carimba`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut_feminino_classificacaoa`
--

DROP TABLE IF EXISTS `tb_fut_feminino_classificacaoa`;
CREATE TABLE IF NOT EXISTS `tb_fut_feminino_classificacaoa` (
  `id_fut_feminino_classificacaoA` int(200) NOT NULL AUTO_INCREMENT,
  `foto_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gc_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sg_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fut_feminino_classificacaoA`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_fut_feminino_classificacaoa`
--

INSERT INTO `tb_fut_feminino_classificacaoa` (`id_fut_feminino_classificacaoA`, `foto_fut_feminino_classificacaoA`, `nome_fut_feminino_classificacaoA`, `p_fut_feminino_classificacaoA`, `j_fut_feminino_classificacaoA`, `v_fut_feminino_classificacaoA`, `e_fut_feminino_classificacaoA`, `d_fut_feminino_classificacaoA`, `gp_fut_feminino_classificacaoA`, `gc_fut_feminino_classificacaoA`, `sg_fut_feminino_classificacaoA`) VALUES
(6, '62af61453510b.png', 'CearÃ¡', '5', '1', '1', '1', '0', '2', '10', '5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut_feminino_classificacaob`
--

DROP TABLE IF EXISTS `tb_fut_feminino_classificacaob`;
CREATE TABLE IF NOT EXISTS `tb_fut_feminino_classificacaob` (
  `id_fut_feminino_classificacaoB` int(200) NOT NULL AUTO_INCREMENT,
  `foto_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gc_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sg_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fut_feminino_classificacaoB`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut_masculino_classificacaoa`
--

DROP TABLE IF EXISTS `tb_fut_masculino_classificacaoa`;
CREATE TABLE IF NOT EXISTS `tb_fut_masculino_classificacaoa` (
  `id_fut_masculino_classficacaoA` int(11) NOT NULL AUTO_INCREMENT,
  `foto_fut_masculino_classificacaoA` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gc_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sg_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fut_masculino_classficacaoA`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_fut_masculino_classificacaoa`
--

INSERT INTO `tb_fut_masculino_classificacaoa` (`id_fut_masculino_classficacaoA`, `foto_fut_masculino_classificacaoA`, `nome_fut_masculino_classificacaoA`, `p_fut_masculino_classificacaoA`, `j_fut_masculino_classificacaoA`, `v_fut_masculino_classificacaoA`, `e_fut_masculino_classificacaoA`, `d_fut_masculino_classificacaoA`, `gp_fut_masculino_classificacaoA`, `gc_fut_masculino_classificacaoA`, `sg_fut_masculino_classificacaoA`) VALUES
(50, '62af6a22e461f.png', 'Flamengo', '1', '1', '1', '1', '1', '1', '1', '1'),
(49, '62adf00bc2ec7.png', 'CearÃ¡', '2', '2', '2', '2', '2', '2', '2', '4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut_masculino_classificacaob`
--

DROP TABLE IF EXISTS `tb_fut_masculino_classificacaob`;
CREATE TABLE IF NOT EXISTS `tb_fut_masculino_classificacaob` (
  `id_fut_masculino_classficacaoB` int(200) NOT NULL AUTO_INCREMENT,
  `foto_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gc_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sg_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fut_masculino_classficacaoB`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_fut_masculino_classificacaob`
--

INSERT INTO `tb_fut_masculino_classificacaob` (`id_fut_masculino_classficacaoB`, `foto_fut_masculino_classificacaoB`, `nome_fut_masculino_classificacaoB`, `p_fut_masculino_classificacaoB`, `j_fut_masculino_classificacaoB`, `v_fut_masculino_classificacaoB`, `e_fut_masculino_classificacaoB`, `d_fut_masculino_classificacaoB`, `gp_fut_masculino_classificacaoB`, `gc_fut_masculino_classificacaoB`, `sg_fut_masculino_classificacaoB`) VALUES
(15, '62af3a480e42b.png', 'CearÃ¡', '11', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_volei_a`
--

DROP TABLE IF EXISTS `tb_volei_a`;
CREATE TABLE IF NOT EXISTS `tb_volei_a` (
  `id_volei_A` int(200) NOT NULL AUTO_INCREMENT,
  `foto_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sc_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ds_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_volei_A`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_volei_a`
--

INSERT INTO `tb_volei_a` (`id_volei_A`, `foto_volei_A`, `nome_volei_A`, `j_volei_A`, `v_volei_A`, `d_volei_A`, `p_volei_A`, `sp_volei_A`, `sc_volei_A`, `ds_volei_A`) VALUES
(6, '62af4d0d900e1.png', 'Fortaleza', '1', '1', '1', '1', '1', '1', '111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_volei_b`
--

DROP TABLE IF EXISTS `tb_volei_b`;
CREATE TABLE IF NOT EXISTS `tb_volei_b` (
  `id_volei_B` int(200) NOT NULL AUTO_INCREMENT,
  `foto_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sc_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ds_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_volei_B`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_volei_b`
--

INSERT INTO `tb_volei_b` (`id_volei_B`, `foto_volei_B`, `nome_volei_B`, `j_volei_B`, `v_volei_B`, `d_volei_B`, `p_volei_B`, `sp_volei_B`, `sc_volei_B`, `ds_volei_B`) VALUES
(9, '62adf28e7ba30.png', 'Flamengo', '22', '1', '1', '2', '1', '1', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_registro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_registro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_registro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_registro`, `usuario_registro`, `email_registro`, `senha_registro`) VALUES
(1, 'admin', 'admin@gmail.com', 'MTIz'),
(2, 'admin', 'admin2@gmail.com', 'MTIz'),
(3, 'admin', 'amdin@gmail.com', 'MTIz'),
(4, 'admin', 'admin@gmail.com', 'MTIz'),
(5, 'admin3', 'admin@gmail.com', 'MTIz'),
(6, 'asd', 'asda@gmail.com', 'MTIz'),
(7, '123', 'asd@gmail.com', 'MTIz'),
(8, 'dfsdf', 'sdfd@gmail.com', 'MTIz'),
(9, '123', 'sada@gmail.com', 'MTIz'),
(10, '123', 'sada@gmail.com', 'MTIz'),
(11, '123', 'sada@gmail.com', 'MTIz'),
(12, '123', 'sada@gmail.com', 'MTIz'),
(13, '123', 'sada@gmail.com', 'MTIz'),
(14, '123', 'sada@gmail.com', 'MTIz'),
(15, 'admin', 'admin@gmail.com', 'aXRhbG8xMjM='),
(16, 'admin', 'admin@gmail.com', 'dWJzZGY='),
(17, 'ubdbf', 'bsuf@gmail.com', 'aXRhbG8xMjM='),
(19, 'dbafs', 'ubsdfb@gmail.com', 'aXRhMTIz'),
(20, 'asd', 'Asd@gmail.com', 'aXRhbG8xMjM='),
(21, 'sad', 'SAd@gmail.com', 'YXNk'),
(22, 'AmÃ©rica Mineiro', 'devroseno@gmail.com', 'MTIz'),
(23, 'roseno', 'devroseno@gmail.com', 'MTIz'),
(24, 'Carlos Daniel', 'devroseno@gmail.com', 'MTIz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
