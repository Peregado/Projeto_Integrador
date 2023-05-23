-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2023 às 02:15
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senacars`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `Id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `km` int(11) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `valor` double(10,2) NOT NULL,
  `tipo` int(11) NOT NULL,
  `imagem` varchar(300) NOT NULL,
  `em_destaque` int(2) NOT NULL DEFAULT 0,
  `disponivel` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`Id`, `modelo`, `placa`, `km`, `cor`, `valor`, `tipo`, `imagem`, `em_destaque`, `disponivel`) VALUES
(1, 'Honda Civic 2.0', 'CUM-4508', 5000, 'Preto', 180.00, 2, 'https://www.honda.com.br/automoveis/sites/hab/files/2019-10/Civic_Sport.png', 1, 1),
(2, 'Fiat Argo 1.8', 'CGD-3825', 5000, 'Preto', 90.00, 3, 'https://argo.fiat.com.br/content/dam/fiat/products/358/acc/1/2023/page/hero.png', 0, 0),
(3, 'Jeep Renegade 2.0', 'SOU-9631', 15000, 'LARANJA', 190.00, 4, 'https://cdn.appdealersites.com.br/dealersites/modelo-jeep/conteudo-online/novo-renegade/trailhawk%403x.png', 0, 1),
(4, 'Ford Ranger 2.2', 'FAB-4561', 25000, 'Preto', 250.00, 1, 'https://www.webmotors.com.br/imagens/prod/344508/FORD_RANGER_2.5_LIMITED_4X2_CD_16V_FLEX_4P_MANUAL_34450816391497059.png?s=fill&w=440&h=330&q=80&t=true', 0, 1),
(5, 'Chevrolet Onix 1.4', 'BIA-7894', 14000, 'Vermelho', 75.00, 3, 'https://revistacarro.com.br/wp-content/uploads/2018/05/chevrolet_onix_joy1.png', 1, 1),
(6, 'Hyundai HB20 1.0', 'YAS-2201', 7000, 'Branco', 100.00, 3, 'https://www.tragial.com.br/wp-content/uploads/2020/02/hb20.png', 0, 1),
(7, 'FIAT Mobi 1.0', 'REG-5642', 13000, 'Prata', 80.00, 3, 'https://cdn.salaodocarro.com.br/_upload/carros/fiat/mobi.png', 0, 1),
(8, 'Nissan Kicks 1.6', 'ABC-9874', 5000, 'Vermelho', 250.00, 4, 'https://digital.nissan.com.br/catalogo-kicks/img/colores/kicks-rojo.png', 1, 1),
(9, 'Volkswagen T-Cross 2.0', 'LAR-2136', 18000, 'Prata escuro', 250.00, 4, 'https://volkswagenpampa.com.br/wp-content/uploads/2023/01/VW_Novos_T-Cross_Prata.png', 0, 1),
(10, 'Toyota Hilux 2.8', 'LUK-6951', 2000, 'Preta', 350.00, 1, 'https://cdn.autopapo.com.br/box/uploads/2020/06/04105618/toyota-hilux-revo-prerunner-2021-preta.png', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros_tipos`
--

CREATE TABLE `carros_tipos` (
  `id` int(10) NOT NULL,
  `nome` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carros_tipos`
--

INSERT INTO `carros_tipos` (`id`, `nome`) VALUES
(1, 'Picape'),
(2, 'Sedan'),
(3, 'Hatch'),
(4, 'SUV');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacoes`
--

CREATE TABLE `locacoes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_carro` int(11) NOT NULL,
  `dt_locacao` datetime NOT NULL,
  `dt_final` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `locacoes`
--

INSERT INTO `locacoes` (`id`, `id_usuario`, `id_carro`, `dt_locacao`, `dt_final`) VALUES
(1, 2, 1, '2023-05-08 22:03:03', '2023-05-12 22:03:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `rank` int(2) NOT NULL DEFAULT 1,
  `data_nasc` date NOT NULL,
  `cpf` varchar(15) NOT NULL DEFAULT '00000000000',
  `tel` int(11) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `rank`, `data_nasc`, `cpf`, `tel`, `endereco`) VALUES
(1, 'Pedro Henrique Sassmannshausen Regado', 'pedro_regado@hotmail.com', '202cb962ac59075b964b07152d234b70', 2, '1995-03-07', '44492000000', 0, ''),
(2, 'Lukete', 'lukete@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '2023-04-28', '00000000000', 0, ''),
(3, 'Pedro Henrique', 'addasdas@gmail.com', '698d51a19d8a121ce581499d7b701668', 1, '2023-05-05', '00000000000', 0, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `carros_tipos`
--
ALTER TABLE `carros_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `locacoes`
--
ALTER TABLE `locacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros_tipos`
--
ALTER TABLE `carros_tipos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `locacoes`
--
ALTER TABLE `locacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
