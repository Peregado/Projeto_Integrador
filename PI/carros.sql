-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2023 às 01:18
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.1.12

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
  `Id` int NOT NULL,
  `modelo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `placa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `km` int NOT NULL,
  `cor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valor` double(10,2) NOT NULL,
  `tipo` int NOT NULL,
  `imagem` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`Id`, `modelo`, `placa`, `km`, `cor`, `valor`, `tipo`, `imagem`) VALUES
(1, 'Honda Civic 2.0', 'CUM-4508', 5000, 'Preto', 180.00, 2, 'https://www.honda.com.br/automoveis/sites/hab/files/2019-10/Civic_Sport.png'),
(2, 'Fiat Argo 1.8', 'CGD-3825', 5000, 'Preto', 90.00, 3, 'https://argo.fiat.com.br/content/dam/fiat/products/358/acc/1/2023/page/hero.png'),
(3, 'Jeep Renegade 2.0', 'SOU-9631', 15000, 'LARANJA', 190.00, 4, 'https://cdn.appdealersites.com.br/dealersites/modelo-jeep/conteudo-online/novo-renegade/trailhawk%403x.png'),
(4, 'Ford Ranger 2.2', 'FAB-4561', 25000, 'Preto', 250.00, 1, 'https://www.webmotors.com.br/imagens/prod/344508/FORD_RANGER_2.5_LIMITED_4X2_CD_16V_FLEX_4P_MANUAL_34450816391497059.png?s=fill&w=440&h=330&q=80&t=true'),
(5, 'Chevrolet Onix 1.4', 'BIA-7894', 14000, 'Vermelho', 75.00, 3, 'https://revistacarro.com.br/wp-content/uploads/2018/05/chevrolet_onix_joy1.png'),
(6, 'Hyundai HB20 1.0', 'YAS-2201', 7000, 'Branco', 100.00, 3, 'https://www.tragial.com.br/wp-content/uploads/2020/02/hb20.png'),
(7, 'FIAT Mobi 1.0', 'REG-5642', 13000, 'Prata', 80.00, 3, 'https://cdn.salaodocarro.com.br/_upload/carros/fiat/mobi.png'),
(8, 'Nissan Kicks 1.6', 'ABC-9874', 5000, 'Vermelho', 250.00, 4, 'https://digital.nissan.com.br/catalogo-kicks/img/colores/kicks-rojo.png'),
(9, 'Volkswagen T-Cross 2.0', 'LAR-2136', 18000, 'Prata escuro', 250.00, 4, 'https://volkswagenpampa.com.br/wp-content/uploads/2023/01/VW_Novos_T-Cross_Prata.png'),
(10, 'Toyota Hilux 2.8', 'LUK-6951', 2000, 'Preta', 350.00, 1, 'https://cdn.autopapo.com.br/box/uploads/2020/06/04105618/toyota-hilux-revo-prerunner-2021-preta.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
