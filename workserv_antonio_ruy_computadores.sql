-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2022 às 15:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `workserv_antonio_ruy_computadores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_login`
--

CREATE TABLE `acesso_login` (
  `id` int(11) NOT NULL,
  `email_institucional` varchar(45) NOT NULL,
  `conf_senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `acesso_login`
--

INSERT INTO `acesso_login` (`id`, `email_institucional`, `conf_senha`) VALUES
(1, 'teste@teste.com.br', 'teste'),
(2, 'teste1@teste.com.br', 'teste1'),
(4, 'teste4@teste.com.br', 'teste4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `OFICIAL` int(2) DEFAULT NULL,
  `n_serie` varchar(30) DEFAULT NULL,
  `NÚMERO` varchar(2) DEFAULT NULL,
  `fonte` varchar(40) DEFAULT NULL,
  `ADAPTADOR` varchar(3) DEFAULT NULL,
  `CADEADO` varchar(3) DEFAULT NULL,
  `MOUSE` varchar(3) DEFAULT NULL,
  `ANTENA` varchar(3) DEFAULT NULL,
  `PILHA - AA` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `docentes`
--

INSERT INTO `docentes` (`id`, `OFICIAL`, `n_serie`, `NÚMERO`, `fonte`, `ADAPTADOR`, `CADEADO`, `MOUSE`, `ANTENA`, `PILHA - AA`) VALUES
(1, 1, 'ML - GW02 270521191604404', '', '270521000730376', 'OK', 'OK', 'SEM', 'SEM', 'SEM'),
(2, 2, 'ML - GW02 270521191603575', '15', '270521000730304', 'OK', 'OK', 'SEM', '', 'SEM'),
(3, 3, 'ML - GW02 270521191604282', '', '270521000730343', 'SEM', 'SEM', 'SEM', '', 'SEM'),
(4, 4, 'ML - GW02 270521191604312', '', '270521000730367', 'OK', 'OK', 'OK', '', 'OK'),
(5, 5, 'ML - GW02 270521191604497', '', '270521000730350', 'OK', 'OK', 'SEM', 'SEM', 'SEM'),
(6, 6, 'ML - GW02 270521191605029', '', '270521000730362', 'OK', 'OK', 'SEM', '', 'SEM'),
(7, 7, 'ML - GW02 270521191603704', '2', '270521000730348', 'SEM', 'OK', 'OK', '', 'OK'),
(8, 8, 'ML - GW02 270521191604473', '', '270521000730265', 'OK', 'OK', 'OK', 'OK', 'OK'),
(9, 9, 'ML - GW02 270521191604015', '', '270521000730370', 'OK', 'OK', 'OK', '', 'OK'),
(10, 10, 'ML - GW02 270521191604550', '12', '270521000730347', 'OK', 'OK', 'OK', 'SEM', 'OK'),
(11, 11, 'ML - GW02 270521191604602', '', '270521000730355', 'OK', 'OK', 'OK', 'OK', 'OK'),
(12, 12, 'ML - GW02 270521191604299', '', '270521000730419', 'OK', 'OK', 'SEM', 'SEM', 'SEM'),
(13, 13, 'ML - GW02 270521191604084', '', '270521000730484', 'OK', 'OK', 'OK', 'OK', 'OK'),
(14, 14, 'ML - GW02 270521191603872', '', '270521000730378', 'OK', 'OK', 'OK', '', 'OK'),
(15, 15, 'ML - GW02 270521191604275', '', '270521000730248', 'OK', 'OK', 'SEM', 'SEM', 'SEM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudantes`
--

CREATE TABLE `estudantes` (
  `id` int(10) NOT NULL,
  `Local` varchar(8) DEFAULT NULL,
  `Oficial` int(2) DEFAULT NULL,
  `n_serie` varchar(9) DEFAULT NULL,
  `SUBSTITUIÇÃO` varchar(2) DEFAULT NULL,
  `SISTEMA` varchar(6) DEFAULT NULL,
  `PROBLEMA` varchar(13) DEFAULT NULL,
  `DESCRIÇÃO` varchar(153) DEFAULT NULL,
  `SOLUÇÃO` varchar(84) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estudantes`
--

INSERT INTO `estudantes` (`id`, `Local`, `Oficial`, `n_serie`, `SUBSTITUIÇÃO`, `SISTEMA`, `PROBLEMA`, `DESCRIÇÃO`, `SOLUÇÃO`) VALUES
(1, 'CARRINHO', 1, '4AB07KF1N', '', 'OK', '', '', ''),
(2, 'CARRINHO', 2, '4AB07KL7Z', '', 'OK', '', '', ''),
(3, 'CARRINHO', 3, '4AB088D3I', '', 'OK', '', '', ''),
(4, 'CARRINHO', 4, '4AB088L7Q', '', 'OK', '', '', ''),
(5, 'CARRINHO', 5, '4AB088P03', '', 'OK', '', '', ''),
(6, 'CARRINHO', 6, '4AB088R9I', '', 'OK', '', '', ''),
(7, 'CARRINHO', 7, '4AB08959V', '', 'OK', '', '', ''),
(8, 'CARRINHO', 8, '4AB089894', '', 'OK', '', '', ''),
(9, 'CARRINHO', 9, '4AB089B73', '', 'OK', '', '', ''),
(10, 'CARRINHO', 10, '4AB089B88', '', 'OK', '', '', ''),
(11, 'CARRINHO', 11, '4AB089C4R', '', 'REPARO', 'PROXY', 'Após testes realizados no equipamento, foi constatado que não há navegação pela internet em todos os navegadores devido ao proxy', 'DESINSTALAR O PROXY'),
(12, 'CARRINHO', 12, '4AB089D79', '', 'OK', '', '', ''),
(13, 'CARRINHO', 13, '4AB089J8W', '', 'OK', '', '', ''),
(14, 'CARRINHO', 14, '4AB089S3Y', '', 'REPARO', 'PROXY', 'Após testes realizados no equipamento, foi constatado que não há navegação pela internet em todos os navegadores devido ao proxy', 'DESINSTALAR O PROXY'),
(15, 'CARRINHO', 15, '4AB089Z9D', '', 'OK', '', '', ''),
(16, 'CARRINHO', 16, '4AB08BM54', '', 'OK', '', '', ''),
(17, 'CARRINHO', 17, '4AB08BV9F', '', 'OK', '', '', ''),
(18, 'CARRINHO', 18, '4AB08C89P', '', 'OK', '', '', ''),
(19, 'CARRINHO', 19, '4AB08D52O', '', 'OK', '', '', ''),
(20, 'CARRINHO', 20, '4AB08DN3B', '', 'OK', '', '', ''),
(21, 'CARRINHO', 21, '4AB08FP3V', '', 'OK', '', '', ''),
(22, 'CARRINHO', 22, '4AB08G76Z', '', 'OK', '', '', ''),
(23, 'CARRINHO', 23, '4AB08GH29', '', 'OK', '', '', ''),
(24, 'CARRINHO', 24, '4AB08GT5O', '', 'REPARO', 'PROXY', 'Após testes realizados no equipamento, foi constatado que não há navegação pela internet em todos os navegadores devido ao proxy', 'DESINSTALAR O PROXY'),
(25, 'CARRINHO', 25, '4AB08NN1Z', '', 'OK', '', '', ''),
(26, 'CARRINHO', 26, '4AB08NN7T', '', 'OK', '', '', ''),
(27, 'CARRINHO', 27, '4AB08P33Z', '', 'REPARO', 'LOGIN', 'Após testes realizados no equipamento, foi constatado que não é possível acessar a área de qualquer usuário, devido ao bloqueio total de todos os logins ', 'RESETAR/ REINSTALAR O WINDOWS 10'),
(28, 'CARRINHO', 28, '4AB097Q3H', '', 'OK', '', '', ''),
(29, 'CARRINHO', 29, '4AB097R6Z', '', 'OK', '', '', ''),
(30, 'CARRINHO', 30, '4AB097T50', '', 'OK', '', '', ''),
(31, 'CARRINHO', 31, '4AB097X32', '', 'OK', '', '', ''),
(32, 'CARRINHO', 32, '4AB098072', '', 'OK', '', '', ''),
(33, 'CARRINHO', 33, '4AB09818A', '', 'REPARO', 'PROXY', 'Após testes realizados no equipamento, foi constatado que não há navegação pela internet em todos os navegadores devido ao proxy', 'DESINSTALAR O PROXY'),
(34, 'CARRINHO', 34, '4AB098209', '', 'OK', '', '', ''),
(35, 'CARRINHO', 35, '4AB09837B', '36', 'REPARO', 'TECLAS: V e B', 'Após testes realizados no equipamento, foi constatado problemas de funcionamento nas teclas V e B (JÁ VEIO DE FABRICA)', 'O FABRICANTE ENVIARÁ UM TÉCNICO PARA FAZER O REPARO DO MESMO, AINDA SEM DATA MARCADA'),
(36, 'CARRINHO', 36, '4AB09838G', '37', 'OK', '', '', ''),
(37, 'CARRINHO', 37, '4AB09842P', '38', 'OK', '', '', ''),
(38, 'CARRINHO', 38, '4AB09844Z', '39', 'OK', '', '', ''),
(39, 'CARRINHO', 39, '4AB098469', '40', 'OK', '', '', ''),
(40, 'CARRINHO', 40, '4AB098542', '41', 'OK', '', '', ''),
(41, 'CAIXA', 41, '4AB09866F', '', 'REPARO', 'PROXY', 'Após testes realizados no equipamento, foi constatado que não há navegação pela internet em todos os navegadores devido ao proxy', 'DESINSTALAR O PROXY'),
(42, 'CAIXA', 42, '4AB09870O', '', 'OK', '', '', ''),
(43, 'CAIXA', 43, '4AB09887Q', '', 'OK', '', '', ''),
(44, 'CAIXA', 44, '4AB09895J', '', 'OK', '', '', ''),
(45, 'CAIXA', 45, '4AB098F51', '', 'OK', '', '', ''),
(46, 'CAIXA', 46, '4AB098K21', '', 'OK', '', '', ''),
(47, 'CAIXA', 47, '4AB098L24', '', 'OK', '', '', ''),
(48, 'CAIXA', 48, '4AB098M81', '', 'OK', '', '', ''),
(49, 'CAIXA', 49, '4AB098W4B', '', 'OK', '', '', ''),
(50, 'CAIXA', 50, '4AB09983D', '', 'OK', '', '', ''),
(51, 'CAIXA', 51, '4AB09D21D', '', 'OK', '', '', ''),
(52, 'CAIXA', 52, '4AB09D77M', '', 'REPARO', 'LOGIN', 'Após testes realizados no equipamento, foi constatado que não é possível acessar a área de qualquer usuário, devido ao bloqueio total de todos os logins ', 'RESETAR/ REINSTALAR O WINDOWS 10'),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acesso_login`
--
ALTER TABLE `acesso_login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estudantes`
--
ALTER TABLE `estudantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acesso_login`
--
ALTER TABLE `acesso_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `estudantes`
--
ALTER TABLE `estudantes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
