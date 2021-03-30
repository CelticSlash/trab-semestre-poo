-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2019 às 21:57
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chamado_tecnico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_chamado`
--

CREATE TABLE `tbl_chamado` (
  `razao_social` varchar(60) NOT NULL,
  `nome_responsavel` varchar(40) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `data_abertura` date NOT NULL,
  `ordem_servico` int(11) NOT NULL,
  `equipamento` varchar(50) NOT NULL,
  `garantia` varchar(3) NOT NULL,
  `patrimonio` varchar(15) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `situacao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_chamado`
--

INSERT INTO `tbl_chamado` (`razao_social`, `nome_responsavel`, `endereco`, `cidade`, `estado`, `data_abertura`, `ordem_servico`, `equipamento`, `garantia`, `patrimonio`, `marca`, `modelo`, `descricao`, `valor`, `situacao`) VALUES
('Fiat Automóveis do Brasil', 'João das Neves', 'Av das Nações Unidas', 'São Paulo', 'SP', '2019-05-15', 23, 'Computador', 'Sim', '12354', 'Positivo', 'PDS', 'Fonte queimada', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chamado`
--
ALTER TABLE `tbl_chamado`
  ADD PRIMARY KEY (`ordem_servico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chamado`
--
ALTER TABLE `tbl_chamado`
  MODIFY `ordem_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
