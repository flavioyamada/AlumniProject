-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jun-2019 às 06:22
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_cliente`
--

CREATE TABLE `cadastro_cliente` (
  `id_cadastro_cliente` int(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone_cell` varchar(100) NOT NULL,
  `genero` varchar(1000) NOT NULL,
  `nascimento` date NOT NULL,
  `curso` varchar(60) NOT NULL,
  `dt_clonc` date NOT NULL,
  `rg` int(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `rua` varchar(60) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_cliente`
--

INSERT INTO `cadastro_cliente` (`id_cadastro_cliente`, `nome`, `email`, `senha`, `cpf`, `telefone_cell`, `genero`, `nascimento`, `curso`, `dt_clonc`, `rg`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `complemento`, `numero`) VALUES
(10, 'Anderson', 'guilhermecesarm@gmail.com', '1234', '46875717867', '12996424687', 'masculino', '2000-10-21', 'ADS', '2020-12-31', 2147483647, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_emp` int(11) NOT NULL,
  `nsocial` varchar(40) NOT NULL,
  `nficticio` varchar(40) NOT NULL,
  `cnpj` int(20) NOT NULL,
  `cep` int(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `telefone` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_emp`, `nsocial`, `nficticio`, `cnpj`, `cep`, `estado`, `cidade`, `bairro`, `rua`, `telefone`, `email`, `senha`) VALUES
(1, 'Google', 'google', 2147483647, 12322320, 'SP', 'JacareÃ­', 'Santa Cruz dos LÃ¡zaros', 'Rua Luciano de Toledo', '', 'gui@g.com', '1234'),
(2, 'Google', 'google', 2147483647, 12322320, 'SP', 'JacareÃ­', 'Santa Cruz dos LÃ¡zaros', 'Rua Luciano de Toledo', '', 'gui@g.com', '2020'),
(3, 'Google', 'google', 2147483647, 12322320, 'SP', 'JacareÃ­', 'Santa Cruz dos LÃ¡zaros', 'Rua Luciano de Toledo', '', 'gui@g.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `tema` varchar(40) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `tema`, `data`, `descricao`) VALUES
(2, 'Internet fora do ar', '2019-06-27', 'a internet no if esta temporariamente indisponivel.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questio`
--

CREATE TABLE `questio` (
  `id` int(11) NOT NULL,
  `cf` varchar(40) NOT NULL,
  `vct` varchar(40) NOT NULL,
  `ssa` varchar(40) NOT NULL,
  `qcargo` varchar(40) NOT NULL,
  `vceapa` varchar(40) NOT NULL,
  `at_prof` varchar(40) NOT NULL,
  `sitprof` varchar(40) NOT NULL,
  `vcepap` varchar(40) NOT NULL,
  `cvcan` varchar(40) NOT NULL,
  `cmvcaec` varchar(40) NOT NULL,
  `intposgrad` varchar(40) NOT NULL,
  `sesimposgrad` varchar(40) NOT NULL,
  `sugestao` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questio`
--

INSERT INTO `questio` (`id`, `cf`, `vct`, `ssa`, `qcargo`, `vceapa`, `at_prof`, `sitprof`, `vcepap`, `cvcan`, `cmvcaec`, `intposgrad`, `sesimposgrad`, `sugestao`) VALUES
(1, 'dinteriores', 'sim', 'sim', '', 'sim_a', 'empresa_pri', 'igual', 'nada', 'devexigirmum', 'satisfatoria', 'sim', '', 'gggg'),
(2, 'ads', 'sim', 'nao', 'nagumo', 'sim_o', 'empresa_pri', 'igual', 'razoavel', 'devexigirmum', 'excelente', 'sim', 'presencial', 'n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabala_adm`
--

CREATE TABLE `tabala_adm` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabala_adm`
--

INSERT INTO `tabala_adm` (`id`, `usuario`, `senha`) VALUES
(1, 'Extensão@IFSP', 'ifspjcr@alumni2019'),
(2, 'teste', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga_emprego`
--

CREATE TABLE `vaga_emprego` (
  `id` int(11) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  `salario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vaga_emprego`
--

INSERT INTO `vaga_emprego` (`id`, `titulo`, `descricao`, `salario`) VALUES
(1, 'Aux', 'teste', '1000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_cliente`
--
ALTER TABLE `cadastro_cliente`
  ADD PRIMARY KEY (`id_cadastro_cliente`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questio`
--
ALTER TABLE `questio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabala_adm`
--
ALTER TABLE `tabala_adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaga_emprego`
--
ALTER TABLE `vaga_emprego`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_cliente`
--
ALTER TABLE `cadastro_cliente`
  MODIFY `id_cadastro_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questio`
--
ALTER TABLE `questio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabala_adm`
--
ALTER TABLE `tabala_adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vaga_emprego`
--
ALTER TABLE `vaga_emprego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
