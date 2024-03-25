-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/03/2024 às 02:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prontuário`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `id` int(11) NOT NULL,
  `Registro Coren` text NOT NULL,
  `DataAtendimento` date NOT NULL,
  `Alergias` varchar(535) NOT NULL,
  `sintomas` text NOT NULL,
  `Atendimento` varchar(500) NOT NULL,
  `diagnostico` varchar(500) NOT NULL,
  `receituario` varchar(500) NOT NULL,
  `PosAtendimento` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `atendimento`
--

INSERT INTO `atendimento` (`id`, `Registro Coren`, `DataAtendimento`, `Alergias`, `sintomas`, `Atendimento`, `diagnostico`, `receituario`, `PosAtendimento`) VALUES
(0, 'dsdsd', '2222-03-12', 'dssds33', '3refff', 'sfsff', 'fffff', 'sfsfsfsf', 'ggsdgdsgsdg'),
(0, 'dsdsd', '2025-03-12', 'alergia a carne de porco, e a poeira', 'dor de cabeça e cansaço', 'chrorou e chorou de dor', 'depressão', 'assitir alanzoka', 'voltar se os sintomas persistirem');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sexo` text NOT NULL,
  `nomesocial` text NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `DataNascimento` date NOT NULL,
  `NomedaMãe` text NOT NULL,
  `cartãosus` int(200) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Telefone` int(20) NOT NULL,
  `TelefoneEmergencial` int(20) NOT NULL,
  `NomeEmergencial` text NOT NULL,
  `Endereço` varchar(300) NOT NULL,
  `Escolaridade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `sexo`, `nomesocial`, `cpf`, `DataNascimento`, `NomedaMãe`, `cartãosus`, `Email`, `Telefone`, `TelefoneEmergencial`, `NomeEmergencial`, `Endereço`, `Escolaridade`) VALUES
(28, '', 'masculino', '', '', '0000-00-00', '', 0, '', 0, 0, '', '', ''),
(29, 'WILLIAN DE MIRANDA SANTOS', 'masculino', 'will', '18568666612', '2005-11-08', 'Maria Cristina de Miranda', 74637829, 'Williandemiranda12@gmail.com', 2147483647, 54564645, 'pedro', 'rua di tiao', 'medio');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
