-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jan-2021 às 02:12
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `evol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `razaoSocial` varchar(100) NOT NULL,
  `cnpj` varchar(100) NOT NULL,
  `nomeFantasia` varchar(100) NOT NULL,
  `contatoDaEmpresa` varchar(100) NOT NULL,
  `telefoneDoContato` varchar(100) NOT NULL,
  `emailDoContato` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `site` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` int(2) NOT NULL,
  `matricula` varchar(10) DEFAULT NULL,
  `responsavel` varchar(50) DEFAULT NULL,
  `filial` varchar(50) DEFAULT NULL,
  `situacaoDoContrato` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela vinculada a Clientes CNPJ';

-- --------------------------------------------------------

--
-- Estrutura da tabela `filiais`
--

CREATE TABLE `filiais` (
  `idFilial` int(11) NOT NULL,
  `nomeFilial` varchar(20) NOT NULL,
  `estadoFilial` varchar(2) NOT NULL,
  `descricaoFilial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `filiais`
--

INSERT INTO `filiais` (`idFilial`, `nomeFilial`, `estadoFilial`, `descricaoFilial`) VALUES
(1, 'Curitiba', '16', 'Matriz Curitiba'),
(2, 'Cascavel', '16', 'Filial Cascavel'),
(3, 'Goiânia', '9', 'Filial Goiânia'),
(4, 'Sorocaba', '25', 'Filial Sorocaba'),
(5, 'São Paulo', '25', 'Filial São Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `idPermissao` int(11) NOT NULL,
  `nomeFuncao` varchar(20) NOT NULL,
  `descricaoFuncao` varchar(50) NOT NULL,
  `vCliente` int(1) NOT NULL,
  `cCliente` int(1) NOT NULL,
  `eCliente` int(1) NOT NULL,
  `dCliente` int(1) NOT NULL,
  `vServico` int(1) NOT NULL,
  `cServico` int(1) NOT NULL,
  `eServico` int(1) NOT NULL,
  `dServico` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`idPermissao`, `nomeFuncao`, `descricaoFuncao`, `vCliente`, `cCliente`, `eCliente`, `dCliente`, `vServico`, `cServico`, `eServico`, `dServico`) VALUES
(1, 'Diretor', 'Diretor', 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'Supervisor', 'Supervisor', 1, 1, 1, 0, 1, 1, 1, 0),
(3, 'Gerente', 'Gerente', 1, 1, 0, 0, 1, 1, 0, 0),
(4, 'Vendedor', 'Vendedor', 1, 1, 0, 0, 1, 0, 0, 0),
(5, 'Coordenador', 'Coordenador', 1, 1, 1, 0, 1, 1, 1, 0),
(6, 'Técnico', 'Técnico', 1, 1, 0, 0, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `idServico` int(11) NOT NULL,
  `codigoServico` varchar(11) NOT NULL,
  `nomeServico` varchar(50) NOT NULL,
  `categoriaServico` varchar(50) NOT NULL,
  `descricaoServico` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`idServico`, `codigoServico`, `nomeServico`, `categoriaServico`, `descricaoServico`) VALUES
(1, 'S0001', 'REVISÃO PIS/COFINS', '1', 'REVISÃO DE CRÉDITOS E DÉBITOS TRIBUTÁRIOS DE PIS/COFINS - EMPRESAS DE LUCRO REAL E PRESUMIDO'),
(2, 'S0002', 'EXCLUSÃO ICMS DA BASE DO PIS/COFINS', '3', 'EXCLUSÃO DO ICMS DESTACADO NAS NOTAS DE SAÍDA DA BASE DE CÁLCULO DO PIS/PASEP E COFINS'),
(3, 'S0003', 'VERBAS INDENIZATÓRIAS INSS', '2', 'CÁLCULO INSS PAGO INDEVIDAMENTE SOBRE VERBAS INDENIZATÓRIAS '),
(4, 'S0004', 'EXCLUSÃO ISS DA BASE DE PIS/COFINS', '3', 'EXCLUSÃO DO ISS DESTACADO NAS NOTAS DE SAÍDA DA BASE DE CÁLCULO DO PIS/PASEP E COFINS'),
(5, 'S0005', 'PROJETO LEITE MAIS SAUDÁVEL', '1', 'CRIAÇÃO E HOMOLOGAÇÃO DO PROJETO LEITE MAIS SAUDÁVEL PARA OBTENÇÃO DE CRÉDITO PRESUMIDO NA AQUISIÇÃO DO LEITE IN NATURA'),
(6, 'S0006', 'REVISÃO ICMS', '1', 'REVISÃO DE CRÉDITOS E DÉBITOS DE ICMS POR ESTADO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `matriculaUsuario` varchar(10) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `celularUsuario` varchar(20) NOT NULL,
  `estadoUsuario` int(2) NOT NULL,
  `filialUsuario` int(2) DEFAULT NULL,
  `nivelUsuario` int(2) DEFAULT NULL,
  `situacaoUsuario` int(1) NOT NULL,
  `loginUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `matriculaUsuario`, `nomeUsuario`, `emailUsuario`, `celularUsuario`, `estadoUsuario`, `filialUsuario`, `nivelUsuario`, `situacaoUsuario`, `loginUsuario`, `senhaUsuario`) VALUES
(1, 'adm', 'Compasse Galágas', 'galagas@compasse.com.br', '41988889999', 16, 1, 1, 0, 'galagas@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(2, '001', 'Philipe Anderson', 'philipe@compasse.com.br', '41987', 1, 1, 1, 0, 'philipe@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(3, '002', 'Raphael De Campos', 'raphael@compasse.com.br', '41996500087', 1, 1, 2, 0, 'raphael@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(4, '003', 'Julya De Campos', 'julya@compasse.com.br', '41998447880', 1, 1, 3, 0, 'julya@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(5, '004', 'Leila Maria Gallice', 'leila@compasse.com.br', '41996500064', 1, 1, 4, 0, 'leila@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(6, '005', 'Alceu Nazário Ribeiro', 'alceu@compasse.com.br', '41997154749', 1, 1, 5, 0, 'alceu@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(7, '006', 'Renata Okagima De Campos', 'renata@compasse.com.br', '41996551414', 1, 1, 6, 0, 'renata@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(8, '007', 'Lucas Saldanha', 'lucas@compasse.com.br', '41998524542', 1, 2, 3, 0, 'lucas@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(9, '008', 'Luane Gallice', 'luane@compasse.com.br', '4197856321', 1, 2, 4, 0, 'luane@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(10, '009', 'Rosemary Guimarães', 'rosemary@compasse.com.br', '41996521142', 2, 3, 3, 0, 'rosemary@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(11, '010', 'Luis Antonio Wood', 'luis@compasse.com.br', '41997885263', 2, 3, 4, 0, 'luis@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(12, '011', 'Renato Serafim', 'renato@compasse.com.br', '41997852100', 3, 4, 3, 0, 'renato@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(13, '012', 'Lislane Saldanha', 'lislane@compasse.com.br', '41996780012', 3, 4, 4, 0, 'lislane@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(14, '013', 'Yasmim Gallice', 'yasmim@compasse.com.br', '41997885252', 3, 5, 3, 0, 'yasmim@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(15, '014', 'Matheus Saldanha', 'matheus@compasse.com.br', '41988557831', 3, 5, 4, 0, 'matheus@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(16, '015', 'Tatiana Figueiredo', 'tatiana@compasse.com.br', '41987441236', 1, 1, 8, 0, 'tatiana@compasse.com.br', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ci_session`
--
ALTER TABLE `ci_session`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`idFilial`);

--
-- Índices para tabela `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`idPermissao`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`idServico`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `filiais`
--
ALTER TABLE `filiais`
  MODIFY `idFilial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idPermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
