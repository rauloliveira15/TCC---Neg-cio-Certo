-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2017 às 23:29
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `negocio_certo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` double(10,2) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `anuncios`
--

INSERT INTO `anuncios` (`id`, `id_categoria`, `titulo`, `descricao`, `foto`, `valor`, `id_usuario`) VALUES
(34, 4, 'Notebook Dell Inspirion', 'Ã“timo notebook para trabalho e uso pessoal, 1 ano de uso, produto muito conservado.', 'imagens/salva_imagens/dell.png', 1200.00, 28),
(35, 7, 'Iphone 5s 16GB', 'Celular muito conservado, possui apenas marcas de uso, estou vendendo por ter comprado um novo.', 'imagens/salva_imagens/img1.png', 900.00, 27),
(37, 5, 'PC Gamer', 'Ã“timo computador para jogos, ediÃ§Ã£o de vÃ­deo, ediÃ§Ã£o de imagens, entrar em contato para mais informaÃ§Ãµes.', 'imagens/salva_imagens/gabinete.png', 2000.00, 28),
(38, 17, 'TV LED 42', 'Com essa TV vocÃª vai ter uma resoluÃ§Ã£o Full HD para imagens detalhadÃ­ssimas. Alta resoluÃ§Ã£o de 1920X1080 para vocÃª desfrutar de imagens nÃ­tidas como nunca.', 'imagens/salva_imagens/tvpng.png', 1100.00, 31),
(39, 3, 'Tablet Samsung Galaxy Tab A com S Pen P355M 16GB', 'Muito conservado, apenas 3 meses de uso.', 'imagens/salva_imagens/tabletpng.png', 1000.00, 30),
(40, 7, 'Smartphone Moto G 5 Dual Chip Android 7.0 Tela 5" ', 'Aparelho fantÃ¡stico dentro de sua faixa de preÃ§o.', 'imagens/salva_imagens/motogpng.png', 800.00, 29),
(42, 17, 'ahdhahad', 'adadad', 'imagens/salva_imagens/Lighthouse.jpg', 1000.00, 26),
(43, 3, 'Nokia 3310 ', 'Celular muito resistente, com funÃ§Ã£o de ligar e receber chamadas.', 'imagens/salva_imagens/nokia-3310png.png', 1000.00, 34);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(3, 'Tablets'),
(4, 'Notebooks'),
(5, 'Computadores'),
(7, 'Celulares'),
(17, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `mensagem` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `mensagem`, `id_usuario`, `id_vendedor`, `data`, `id_produto`) VALUES
(2, '                            oi', 27, 28, '2017-05-13 17:48:42', 37),
(3, '                            Oi Raul', 28, 27, '2017-05-13 18:04:01', 37),
(4, '                            oi men', 27, 28, '2017-05-13 21:59:59', 37),
(5, '                            oi', 28, 27, '2017-05-13 22:00:40', 37),
(6, '                            oi natan', 27, 28, '2017-05-13 22:01:48', 34),
(7, '                            Oi natan, tudo bem?', 31, 28, '2017-05-20 15:57:56', 37),
(8, '                            Oi Bruno, estou interessado', 29, 30, '2017-05-20 16:45:44', 39),
(9, '          Oi Thiago, tudo bem, entre em contato comigo pelo whatsapp                  ', 30, 29, '2017-05-20 16:46:47', 39),
(10, '                            Oi Thiago', 27, 29, '2017-05-20 18:32:53', 40),
(11, '                            oi', 33, 29, '2017-05-20 21:01:24', 40),
(12, '                            oi', 34, 26, '2017-05-20 21:19:40', 42);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contato` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perfil` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `contato`, `foto`, `email`, `senha`, `perfil`) VALUES
(26, 'Admin', '', '', 'adminnc@gmail.com', 'admin', 'administrador'),
(27, 'Raul', '(019) 99374-4920', 'imagens/salva_imagens/foto.jpg', 'rauloliveirasabin15@gmail.com', '1502', 'comum'),
(28, 'Natan', '(019) 99275-1855', 'imagens/salva_imagens/17634427_1450739928331133_5748454913516581665_n.jpg', 'natan.teodoro@hotmail.com', 'natan123', 'comum'),
(29, 'Thiago', '(019) 99856-3654', 'imagens/salva_imagens/thiago.png', 'thiago@gmail.com', 'thiago123', 'comum'),
(30, 'Bruno', '(019) 99561-1312', 'imagens/salva_imagens/bruno.jpg', 'brunojesus@gmail.com', 'bruno123', 'comum'),
(31, 'Rafaela', '(019) 99637-9595', 'imagens/salva_imagens/rafa.jpg', 'rafaela@gmail.com', 'rafaela123', 'comum'),
(32, 'Lucas', '(019) 99762-3132', 'imagens/salva_imagens/14344201_1577134969262109_8410777691777841643_n.jpg', 'lucashfloriano@hotmail.com', 'lucas123', 'comum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
