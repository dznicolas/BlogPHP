-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 04:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `artigos`
--

DROP TABLE IF EXISTS `artigos`;
CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `conteudo`) VALUES
(1, 'Inteligência Artificial (IA)', 'Em termos mais simples, IA, que significa inteligência artificial, refere-se a sistemas ou máquinas que imitam a inteligência humana para realizar tarefas e podem se aprimorar iterativamente com base nas informações que coletam. A IA se manifesta de várias formas. Alguns exemplos são:\r\n\r\n-> Os chatbots usam a IA para entender os problemas dos clientes mais rapidamente e fornecer respostas mais eficientes;\r\n-> Os assistentes inteligentes usam a IA para analisar informações críticas de grandes conjuntos de dados de texto livre para melhorar a programação;\r\n-> Os mecanismos de recomendação podem fornecer recomendações automatizadas para programas de TV com base nos hábitos de visualização dos usuários.\r\n\r\nA IA está mais relacionada ao processo e a capacidade de pensamento superpoderoso e a análise de dados do que a qualquer formato ou função em particular. Embora a IA traga imagens de robôs parecidos com os homens de alto funcionamento que dominam o mundo, a IA não pretende substituir os seres humanos. Seu objetivo é melhorar significativamente as habilidades e contribuições humanas. Isso faz dela um ativo de negócios muito valioso.'),
(2, 'Internet das Coisas (IoT)', 'A Internet das Coisas (IoT) descreve a rede de objetos físicos incorporados a sensores, software e outras tecnologias com o objetivo de conectar e trocar dados com outros dispositivos e sistemas pela internet. Esses dispositivos variam de objetos domésticos comuns a ferramentas industriais sofisticadas. Com mais de 7 bilhões de dispositivos IoT conectados hoje, os especialistas esperam que esse número cresça para 10 bilhões em 2020 e 22 bilhões em 2025. A Oracle tem uma rede de parceiros de dispositivo.'),
(3, 'Segurança digital', 'Segurança digital é o nome dado para todos os processos usados para a proteção de computadores, redes, servidores, programas e dispositivos conectados na Internet das Coisas (IoT) contra ataques cibernéticos. \r\n\r\nO roubo de informações pode causar danos enormes para as vítimas, com os criminosos virtuais podendo realizar compras, realizar emprétimos ou abrir empresas, tudo no nome dos afetados. A segurança digital tenta, a partir do uso de ferramentas que preservam a privacidade das informações e que também monitorarem e bloquearem possíveis ameaças que tentam comprometer os sistemas, diminuir a ocorrência desses tipos de crimes digitais. '),
(4, 'Metaverso', 'Metaverso é uma espécie de nova camada da realidade que integra os mundos real e virtual. Na prática, é um ambiente virtual imersivo construído por meio de diversas tecnologias, como Realidade Virtual, Realidade Aumentada e hologramas.\r\n\r\nPara visualizar o conceito, pense no filme Matrix, dirigido por Lilly e Lana Wachowski. No longa, as pessoas vivem em uma realidade virtual arquitetada por uma inteligência artificial assassina que usa seus corpos para produzir energia. O metaverso é mais ou menos por aí, mas sem as máquinas vilãs – pelo menos por ora.\r\n\r\nNesse universo, que ainda não é real em sua totalidade, as pessoas poderiam interagir umas com as outras, trabalhar, estudar e ter uma vida social por meio de seus avatares (bonecos virtuais customizados) 3D. Ou seja, o objetivo é que pessoas não sejam apenas observadores do virtual, mas façam parte dele.\r\n\r\nEntusiastas veem no metaverso a evolução da internet. Outros enxergam nele um risco para a privacidade, e uma “droga” viciante. A implantação dessa utopia, no entanto, ainda depende do amadurecimento de algumas tecnologias, como o próprio 5G.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
