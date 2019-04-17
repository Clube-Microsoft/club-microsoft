-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 13-Abr-2019 às 13:43
-- Versão do servidor: 10.3.14-MariaDB
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epbclube_microsoft`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`admin_id`, `nome`, `pass`) VALUES
(1, 'admin', '3fb1b4d759aa4f5d5475df63a8aa41d5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_post`
--

CREATE TABLE `blog_post` (
  `Id_Post` int(30) NOT NULL,
  `Titulo` text NOT NULL,
  `Url_Clean` text NOT NULL,
  `Texto_Pequeno` mediumtext NOT NULL,
  `Texto_Grande` longtext NOT NULL,
  `Data` varchar(30) NOT NULL,
  `Img_Post` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `blog_post`
--

INSERT INTO `blog_post` (`Id_Post`, `Titulo`, `Url_Clean`, `Texto_Pequeno`, `Texto_Grande`, `Data`, `Img_Post`) VALUES
(21, 'Linkedin', 'linkedin', 'Dotar os alunos de conhecimentos e competÃªncias para a utilizaÃ§Ã£o eficaz do LinkedIn. No final do workshop, o aluno deverÃ¡ ser capaz de formular o seu perfil de maneira a efetuar a sua candidatura Ã¡s ofertas de emprego.', '<p><span style=\"color: #666666; font-family: Poppins-Regular; font-size: 14px; background-color: #f9f9ff;\">Nos pr&oacute;ximos dias 13 e 20 de mar&ccedil;o ser&aacute; realizado um Workshop sobre Linkedin que ir&aacute; dotar os alunos de conhecimentos e compet&ecirc;ncias para a utiliza&ccedil;&atilde;o eficaz desta ferramenta profissional. No final os alunos ser&atilde;o capazes de construir o seu perfil de maneira a efetuar a sua candidatura &agrave;s ofertas de emprego, usando o computador e/ou dispositivos m&oacute;veis.</span></p>', '2019-02-26', '15545921035ca931670d922.jpg'),
(22, 'Exame MOS', 'exame-mos', 'Este exame pode ser feito por qualquer aluno da EPB - Escola Profissional de Braga sem qualquer custo, podendo ser fornecido uma certificaÃ§Ã£o em MOS (Microsoft Office Specialist).', '<p class=\"excert-dentro\" style=\"box-sizing: border-box; margin: 60px 0px 0px; padding: 0px; font-size: 14px; line-height: 1.7; color: #666666; font-family: Roboto, sans-serif; background-color: #f9f9ff;\">Este exame pode ser feito por qualquer aluno da EPB - Escola Profissional de Braga sem qualquer custo, podendo ser fornecido uma certifica&ccedil;&atilde;o em MOS (Microsoft Office Specialist).</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 1.7; color: #666666; font-family: Roboto, sans-serif; background-color: #f9f9ff;\">Esta certifica&ccedil;&atilde;o apresenta diversas vantagens, nomeadamente o reconhecimento do sector de TI, e compet&ecirc;ncias profissionais de elevado n&iacute;vel que ir&atilde;o facilitar a entrada no mercado de trabalho aquando do recrutamento das empresas.</p>', '2019-01-16', '15545922295ca931e537159.png'),
(23, 'SeguranÃ§a na Internet', 'seguranca-na-internet', 'Esta palestra tem como objetivo sensibilizar e educar os participantes a praticarem melhores hÃ¡bitos no uso da Internet. Temos uma aproximaÃ§Ã£o prÃ¡tica para que todos possam beneficiar de novos conhecimentos.', '<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 1.7; color: #666666; font-family: Roboto, sans-serif; background-color: #f9f9ff;\">Esta palestra tem como objetivo sensibilizar e educar os participantes a praticarem melhores h&aacute;bitos no uso da Internet. Temos uma aproxima&ccedil;&atilde;o pr&aacute;tica para que todos possam beneficiar de novos conhecimentos.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 1.7; color: #666666; font-family: Roboto, sans-serif; background-color: #f9f9ff;\">Entre estes conhecimentos real&ccedil;amos 3 importantes t&oacute;picos:</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 1.7; color: #666666; font-family: Roboto, sans-serif; background-color: #f9f9ff;\">Seguran&ccedil;a... -do meu espa&ccedil;o ...na internet.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 80px; font-size: 14px; line-height: 1.7; color: #666666; font-family: Roboto, sans-serif; background-color: #f9f9ff;\">&nbsp;-psicol&oacute;gica</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 80px; font-size: 14px; line-height: 1.7; color: #666666; font-family: Roboto, sans-serif; background-color: #f9f9ff;\">&nbsp;-das redes sociais</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-size: 14px; line-height: 1.7; color: #666666; font-family: Roboto, sans-serif; background-color: #f9f9ff;\">Esta &eacute; uma iniciativa&nbsp;<span style=\"box-sizing: border-box; margin: 0px; padding: 0px; font-weight: bolder;\">Clube Microsoft</span>&nbsp;que como tal ser&aacute; apresentada pelos respetivos fundadores&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Leandro Pereira</em>,&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">R&uacute;ben Pr&iacute;ncipe</em>&nbsp;e&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">Rui Pereira</em>, alunos finalistas do curso de Gest&atilde;o e Programa&ccedil;&atilde;o de Sistemas Inform&aacute;ticos.</p>', '2019-02-01', '15545923895ca9328528507.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hastags`
--

CREATE TABLE `hastags` (
  `Id_Hastags` int(30) NOT NULL,
  `Hastag` varchar(50) NOT NULL,
  `Id_Post` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hastags`
--

INSERT INTO `hastags` (`Id_Hastags`, `Hastag`, `Id_Post`) VALUES
(44, 'Evento', 21),
(45, 'Linkedin', 21),
(46, 'Workshop', 21),
(49, 'Evento', 22),
(50, 'Microsoft Office', 22),
(55, 'Evento', 23),
(56, 'Internet', 23),
(57, 'Palestra', 23),
(58, 'SeguranÃ§a', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`Id_Post`);

--
-- Indexes for table `hastags`
--
ALTER TABLE `hastags`
  ADD PRIMARY KEY (`Id_Hastags`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `Id_Post` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hastags`
--
ALTER TABLE `hastags`
  MODIFY `Id_Hastags` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
