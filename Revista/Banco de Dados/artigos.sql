-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Geração: Jul 23, 2007 as 10:04 AM
-- Versão do Servidor: 5.0.33
-- Versão do PHP: 5.2.1
-- 
-- Banco de Dados: `artigos`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `tbl_carrinho`
-- 

CREATE TABLE `tbl_carrinho` (
  `id` int(11) NOT NULL auto_increment,
  `cod` int(11) NOT NULL,
  `nome` varchar(150) collate latin1_general_ci NOT NULL,
  `preco` double(10,2) NOT NULL,
  `qtd` int(11) NOT NULL,
  `sessao` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=28 ;

-- 
-- Extraindo dados da tabela `tbl_carrinho`
-- 

INSERT INTO `tbl_carrinho` VALUES (15, 1, 'Notebook HP 2160br', 5450.00, 1, '9130a23dba5a647904fde22dbdb3ffed');
INSERT INTO `tbl_carrinho` VALUES (17, 1, 'Notebook HP 2160br', 5450.00, 1, '7c6e3c9b015eee12b4fd85e5be8cc0bb');
INSERT INTO `tbl_carrinho` VALUES (18, 2, 'Computador HP', 1400.00, 1, '7c6e3c9b015eee12b4fd85e5be8cc0bb');
INSERT INTO `tbl_carrinho` VALUES (27, 4, 'Gravador de DVD', 329.00, 1, '3d9855efc2fc99c7c0f1632f6040e5e6');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `tbl_produtos`
-- 

CREATE TABLE `tbl_produtos` (
  `cod` int(11) NOT NULL auto_increment,
  `nome` varchar(150) collate latin1_general_ci NOT NULL,
  `img` varchar(36) collate latin1_general_ci NOT NULL,
  `preco` double(10,2) NOT NULL,
  PRIMARY KEY  (`cod`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

-- 
-- Extraindo dados da tabela `tbl_produtos`
-- 

INSERT INTO `tbl_produtos` VALUES (1, 'Notebook HP 2160br', '001.jpg', 5450.00);
INSERT INTO `tbl_produtos` VALUES (2, 'Computador HP', '002.jpg', 1400.00);
INSERT INTO `tbl_produtos` VALUES (3, 'TV de LCD 32 Polegadas com HDTV', '003.jpg', 3299.00);
INSERT INTO `tbl_produtos` VALUES (4, 'Gravador de DVD', '004.jpg', 329.00);
