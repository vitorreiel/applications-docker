-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 18-Dez-2022 às 01:12
-- Versão do servidor: 10.5.16-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id16698337_lostbook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `avaliacao` varchar(50) DEFAULT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `tamanho` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animes`
--

INSERT INTO `animes` (`id`, `id_usuario`, `tipo`, `categoria`, `status`, `avaliacao`, `descricao`, `img`, `nome`, `tamanho`) VALUES
(1, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #33cc33\\\'>assistindo</b>', '10', NULL, 'c1224ca25a440d6e3191c7562153b4e9e98a11da.png', 'Bleach', '17'),
(2, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'a695a4d1a039af9f1fe3358f2099a32dac5268e1.jpg', 'Killing Bites', '12 ep'),
(3, '1', '<i>Anime</i>', 'isekai', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'd78db68d43be915537cde7317dbc641861ad36f2.jpg', 'Shinchou Yuusha', '12 ep'),
(4, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '6', NULL, '3bc4290b06fc966c90ac54001748d542727e806a.png', 'Conception', '12 ep'),
(5, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'ba771de5ccaff94fd2ba83c7fabcda813b05cfeb.jpg', 'The Comic Artist And His Assistants', '12 ep'),
(6, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '6', NULL, '6b2a094d0dbefaf9dd5e47f5835e06d1e31992b0.jpg', 'Saijaku Muhai no Bahamut', '12 ep'),
(7, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '792286fa79c2cb847cb9116ffe14d84466108421.jpg', 'Black Clover', '170 ep'),
(8, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '5b6591f419360f7c53e3d18e6904e54194d033bd.png', 'Accelerator', '12 ep'),
(9, '1', '<i>Anime</i>', 'drama', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '5d54e080ef713a259ea1b6f0e122a29ddd0d6864.jpg', 'Mirai nikki', '28 ep'),
(10, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, 'a420fa564545417ba3f031e8a4c67ee439477a19.jpg', 'Fullmetal Alchemist: Brotherhood', '64 ep'),
(11, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '29e27e43ee353e4f6e6c07e603984a3a8c2efcad.jpg', 'Hunter x Hunter', '148 ep'),
(12, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, 'cdbe4d9d8cd4b4ad6b863c9d161e1106836f87d8.jpg', 'Dungeon ni Deai o Motomeru no wa Machigatteiru Darou ka?', '38 ep'),
(13, '1', '<i>Anime</i>', 'esporte', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '2bf77c7cc53eb9ffaa68fd758d1ce6ca82c84c58.jpg', 'Kuroko No Basket', '75 ep'),
(14, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '905d862482bc756a156b82b4bb368ea3981666ae.jpg', 'Shingeki no kyojin', '83 ep'),
(15, '1', '<i>Anime</i>', 'seinen', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '8', NULL, 'f6b5010e0be5cb326690ebeffc0546ad7fdeaad4.jfif', 'Tokyo Ghoul', '48 ep'),
(16, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '9', NULL, '8776e6d79f191f64c1ffb72a8d8599cea88efbe7.jpg', 'Boku no Hero', '88'),
(17, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '99f7063b031233d5d8b261f0e5378d910d72670e.jfif', 'Os Cavaleiros dos Zodíaco', '145 ep'),
(18, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '3', NULL, '056eeb72a979ad1d57eb53c833c8009c0c89ec5a.jpg', 'Saint Seiya Omega', '97 ep'),
(19, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, 'b98bc218e51b1b51fa3479313bfcedbc90943d0d.jpg', 'Saint Seiya - The Lost Canvas', '26 ep'),
(20, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '745de3a2736d789c10c25b01eebecca0448dfecb.jpg', 'Rakudai Kishi no Cavalry', '12 ep'),
(21, '1', '<i>Anime</i>', 'sobrenatural', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, 'f7da021f23199139d097459bfb42121cf92b5805.jpg', 'Death Note', '37 ep'),
(22, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'e0c15e35e4850f8ad001b74ae77fa2a153ebd981.jpg', 'Naruto Clássico', '220 ep'),
(23, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '086485027f1547aa00c2b925e03e981f5f75f0cb.jpg', 'Naruto Shippuden', '500 ep'),
(24, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '9', NULL, '01400927ce9c2810a93f2ef429d1687b2a867997.png', 'High School DxD', '64 ep'),
(25, '1', '<i>Anime</i>', 'sobrenatural', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '3830ac16ec832ca095d9201302356982789b7709.jfif', 'Highschool of the Dead', '13 ep'),
(26, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '14aa4dfc808d7e81f099d84a2f928a3290b89989.jfif', 'Kimetsu no yaiba', '2'),
(27, '1', '', 'fantasia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '5', NULL, '399950366c2c3fe0df30dab3cdf5a205efedef7f.jfif', 'Omamori himari', '12 ep'),
(28, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '9', NULL, 'b121bffb2e6dfaaf8cc19c90de298e4d839f42d9.jpg', 'Shokugeki no souma', '86 ep'),
(29, '1', '<i>Anime</i>', 'fantasia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, 'c2a8bdf826187318b7336800fa867950384d7ed1.jpg', 'No game no life', '12 ep'),
(30, '1', '', 'comedia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '8e74eb6050ca4c6f066a3dd78ac9c8141111cf9d.webp', 'Prison School', '13 ep'),
(31, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, '930e14b5ff7b25c3d543cc69766daf8f5bd80aa1.webp', ' Shinmai Maou no Testament', '24 ep'),
(32, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '5981913c59b3c9142d17e402babf3fd5c7b8ad44.jpg', 'Hajimete no Gal', '11 ep'),
(33, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '0c74438d81f074506c60d8ce749509bdc5a89a9e.jpg', 'Classroom of the elite', '2'),
(34, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, 'b5d6fc553a95904121dc6f9f85fab28a1719d9d0.jpg', 'Yosuga no sora', '12 ep'),
(35, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '4a981fc5cb3d91b51b3da68240373c714923bcb9.jpg', 'Shimoneta to Iu Gainen ga Sonzai Shinai Taikutsu na Sekai', '12 ep'),
(36, '1', '<i>Anime</i>', 'harém', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '8d845fad0331cdbc9f13f1c108d811bb9c2d1243.jpg', 'Campione!', '13 ep'),
(37, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '6', NULL, '42ce6d00be2574abe71bb7ff57d9e05727f8e822.jpg', 'Dakara Boku wa, H ga Dekinai', '13 ep'),
(38, '1', '<i>Anime</i>', 'scifi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '4', NULL, '4e49e8d475cd4d3c100d54fd71baa22d33312852.jpg', 'Gakusen Toshi Asterisk', '24 ep'),
(39, '1', '<i>Anime</i>', 'isekai', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '8da9d9bde805184a6b7ff601f6c9b124dd7a05f8.jfif', 'Isekai Maou to Shoukan Shoujo no Dorei Majutsu', '26 ep'),
(40, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '2bd5e821f5def6363c0c003e7537cf1c1b1756f3.jpg', ' Hagure Yuusha no Estetica', '18 ep'),
(41, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '6', NULL, '325bb05208a178a4845502a3cd2920773cc8f25a.webp', 'Hundred', '12 ep'),
(42, '1', '<i>Anime</i>', 'harém', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, 'd300aa785c4cc6b3145340ac54f67a12d645e82f.jpg', 'IS: Infinite Stratos', '24 ep'),
(43, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '5', NULL, 'ed851a7f22f7f83358a9ec66e7bc4c3ad3e9ad85.jpg', 'Iya na Kao sare nagara Opantsu Misete Moraitai', '12 ep'),
(44, '1', '<i>Anime</i>', 'harém', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '9d37d1785655674a820f09d87069d5e2a45ec3d7.jpg', 'Maji de Watashi ni Koi Shinasai!', '12 ep'),
(45, '1', '<i>Anime</i>', 'harém', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, 'a848a0e405c1f3750b3b6bdbdffb09d129a59d16.webp', 'Masou Gakuen HxH', '18 ep'),
(46, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '6', NULL, '32e4ab633f594cf2fb9f3cd8b3ba8038ee8fcbea.jpg', 'Mayo Chiki', '13 ep'),
(47, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, 'cdcd1901932f6324eacdabf3669b679cbfb024bc.jpg', 'Nanatsu no Bitoku', '10 ep'),
(48, '1', '<i>Anime</i>', 'romance', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '957c2eff2d83f96b0f4a1d70a649af3ba65510db.png', 'Okusama ga seitokaichou', '25 ep'),
(49, '1', '', 'fantasia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '3', NULL, '08f2bb25e590457561bd113ceaeca5c8c77c8bd7.jpg', 'Panty & Stocking with Garterbelt', '13 ep'),
(50, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '0ac759341e2f7ff448e250d133752c8241f25aa9.webp', 'Midara na Ao-chan wa Benkyou ga Dekinai', '12 ep'),
(51, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '043648e72de4c1ed5a60c5d1e40d685540d60184.jpg', 'Nande Koko ni Sensei ga!?', '13 ep'),
(52, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '1', NULL, 'fd034ac12ec672b124d5c11ad9f91ec2521fa930.jpg', 'Miru Tights', '12 ep'),
(53, '1', '<i>Anime</i>', 'drama', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'ac62a31cc9869a5458067741051bc2ab25875a44.jpg', 'Elfen Lied', '13 ep'),
(54, '1', '<i>Anime</i>', 'scifi', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, 'c8dc41e56331517ef369dd0726e9eb04948012a1.jpg', ' K-Project', '13 ep'),
(55, '1', '<i>Anime</i>', 'esporte', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '6', NULL, '259e763921d4bc49ba5809fe525970df3512ff15.jpg', 'Dumbbell Nan Kilo Moteru?', '12 ep'),
(56, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '94ca0db24dea40ecda0a5ea36b1a4431b18cbc83.jfif', 'Ishuzoku Reviewers', '12 ep'),
(57, '1', '<i>Anime</i>', 'scifi', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '538b269dce116199799812ec1c8228ba3d6802cf.jpg', 'Darling in the Franxx', '24 ep'),
(58, '1', '<i>Anime</i>', 'aventura', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '6', NULL, '93190fb523dcd97a8f59810e0b16e5a58647be23.jfif', 'Princess Connect! Re:Dive', '13 ep'),
(59, '1', '<i>Anime</i>', 'comedia', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '6', NULL, 'ed7bf8d290792ee341fa330ae057598468d69e21.jpg', 'Dagashi Kashi', '12 ep'),
(60, '1', '<i>Anime</i>', 'drama', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '1c35ea2935487d1c207ad298c6c4466b3ab9fe9d.jfif', 'Domestic na Kanojo', '12 ep'),
(61, '1', '<i>Anime</i>', 'harém', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '7', NULL, '46e3cfbe5fd3d96c6dcc95c55145be6ac46d7875.jpg', 'Trinity Seven', '12 ep'),
(62, '1', '<i>Anime</i>', 'aventura', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '6', NULL, '5ae8325eb5f7f51a718a6d36bb8a4c32a701c942.jpg', 'Madan no Ou to Vanadis', '13 ep'),
(63, '1', '<i>Anime</i>', 'mistério', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '7', NULL, 'ac842a617547a5ae1f33b73b9a314f40e706c187.jpg', 'Tenkuu Shinpan', '12 ep'),
(64, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, 'f163a97232ee3be882ffd3c4bda9c2f707e2c6c8.jfif', 'Jujutsu Kaisen', '1'),
(65, '1', '<i>Anime</i>', 'romance', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '', NULL, '34812ab2c2af49ea0a9d025437b3ed9266344c1e.jpg', ' Hige wo Soru. Soshite Joshikousei wo Hirou.', ''),
(66, '1', '<i>Anime</i>', 'romance', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'db53489852a7a5aa44f874feb3ff85a8b482da37.webp', 'Ijiranaide, Nagatoro-san', '12 ep'),
(67, '1', '<i>Anime</i>', 'aventura', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '', NULL, 'e5efc12fd475fc56a2f5c003970b5c5a88fc3ec1.jpg', 'Sentouin, Hakenshimasu!', ''),
(68, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '', NULL, '88b27f933c54f2868992b9dee0e14f808c1644bb.webp', 'Horimiya', '13 ep'),
(69, '1', '<i>Anime</i>', 'aventura', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'fa7e8337033d0a35ced16cf13bc7bcb20b21038f.webp', 'Ore dake Haireru Kakushi Dungeon', '12 ep'),
(70, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '7', NULL, '2461d3f4dcb99cf3bef7e4db83bcec1ac1151dc0.png', 'Gotoubun no Hanayome', '24 ep'),
(71, '1', '<i>Anime</i>', 'fantasia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '6858a8e052f376e18e79d6f29a5dd8962e957d54.webp', 'Mushoku Tensei: Isekai Ittara Honki Dasu', '11 ep'),
(72, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '2c14368817eb528e5e3a76ba08341e2412d4e7a9.jpg', ' Ore wo Suki nano wa Omae dake ka yo', '13 ep'),
(73, '1', '<i>Anime</i>', 'esporte', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '4', NULL, 'eeb6b2678a73d5f09b5f83af712c6b6f15722c75.jfif', 'Kandagawa Jet Girls', '13 ep'),
(74, '1', '<i>Anime</i>', 'fantasia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, 'ead414a8f8a37d2d9368817054351c321cc0d330.jpeg', 'Witch Craft Works', '12 ep'),
(75, '1', '<i>Anime</i>', 'sobrenatural', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '6fd55bc3c912cff4f3ff633ad23fc5b20f1a89a0.jpg', 'Hellsing Clássico', '13 ep'),
(76, '1', '<i>Anime</i>', 'sobrenatural', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, 'ce4bf36ae0668e8d5d0185df462595f7fefd6b3f.jpg', 'Hellsing Ultimate', '10 ep'),
(77, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, '4b5d8a78b1ceb921b2ddd1ab4ad49b0db2bceee6.jpg', 'Sekirei', '27 ep'),
(78, '1', '<i>Anime</i>', 'romance', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, '9672c63361663f15da2cf588f0e92e2fa98038a7.jpg', 'Kaichou Wa Maid-Sama', '26 ep'),
(79, '1', '<i>Anime</i>', 'ecchi', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '5', NULL, 'c2e00f5f2ebd932d23ed62409e99a68b06cdbec7.jpg', 'Senran Kagura', '31 ep'),
(80, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, 'b41614b7e53dc4747bd2d581f9a72cfbfd9785e2.png', 'Grisaia No Kajitsu', '34 ep'),
(81, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, '9d07cb814654c44daf3589f565874e3537412db5.jpg', 'Mahouka Koukou No Rettousei', '39 ep'),
(82, '1', '<i>Anime</i>', 'shounen', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, 'f5e21d5101cb60e910a2859876f5d9ee944fa5d8.jfif', 'Noragami', '29 ep'),
(83, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, 'cb97f7c130f30258a485e7864e6a9969b0c387f5.jfif', 'Akame ga Kill', '24 ep'),
(84, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, '985fbf61424369d562c293247346818bea56fc88.jpg', 'Yamada-kun to 7-nin no Majo', '12 ep'),
(85, '1', '<i>Anime</i>', 'drama', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'd7013aee5e58496ccb43b905bfa1eaf61185fb07.jpg', 'Charlotte', '13 ep'),
(86, '1', '<i>Anime</i>', 'seinen', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '8', NULL, 'ce77c65e9f1e7a9bfa1e3c18f2df8c901feec9f4.webp', 'One Punch Man', '30 ep'),
(87, '1', '<i>Anime</i>', 'sobrenatural', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '7', NULL, 'c0359b245428b4b156c0a274a3c85749fee07fa6.jfif', 'Overlord', '39 ep'),
(88, '1', '<i>Anime</i>', 'isekai', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '9', NULL, '6fdcc3bf0fb01f3406ed152d4962fdfe3b45f809.jfif', 'Kono Subarashii Sekai Ni Shukufuku Wo!', '20 ep'),
(89, '1', '<i>Anime</i>', 'comedia', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '', NULL, 'cc336f9ccb11c5d997986fcf74ae5cd75dd2e337.jpg', 'Sakamoto Desu Ga?', '13 ep'),
(90, '1', '', 'aventura', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '74b9d46299b32c87d60640f14520f28c588ad58c.jpg', 'UQ Holder!: Mahou Sensei Negima! 2', '15 ep'),
(91, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '4fc1e1f2c1b0ab9ef39c09b612d11ec1537e7ac8.webp', 'Rokudenashi Majutsu Koushi to Akashic Records', '12 ep'),
(92, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '9e0d58c9026910738421be98448d5c387dbdc5a9.webp', 'Masamune-Kun no Revenge', '13 ep'),
(93, '1', '<i>Anime</i>', 'romance', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, 'ae0f84625cc9ea2ddba594187dd0ef1465c335f7.webp', 'Tsurezure Children', '12 ep'),
(94, '1', '<i>Anime</i>', 'romance', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '10', NULL, '7163060d62c60f31f785b53be4756aa8fa719597.jpg', 'Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai', '13 ep'),
(95, '1', '<i>Anime</i>', 'comedia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '3aba2740611c02a09acd8d68bfbeaa9d09f09001.webp', 'Sunoharasou no Kanrinin-san', '12 ep'),
(96, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '7', NULL, '0fd803f42b6dced79f93d782b6e9fe98033f33db.jpg', 'Citrus', '12 ep'),
(97, '1', '<i>Anime</i>', 'comedia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '5', NULL, 'fe74943286c711ce43c00fabdc70dea0bc514c96.webp', 'Wotaku Ni Koi Wa Muzukashii', '11 ep'),
(98, '1', '<i>Anime</i>', 'comedia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, 'c4abbc7ca326237e0e29c299e0ad9cf5e840c410.jpg', 'Sounan desu ka?', '12 ep'),
(99, '1', '<i>Anime</i>', 'fantasia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '4885b927088f2d49383d3aec61b4f6f94844de7f.jpg', 'Kenja no Mago', '12 ep'),
(100, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '8', NULL, '980452c535a29212eb6aeb3fc25f777493fd4531.jpg', 'Kaguya-sama wa Kokurasetai', '24 ep'),
(101, '1', '<i>Anime</i>', 'aventura', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '8e8625790e659168b21e9c46ecf3ea3e2307421b.jpg', 'Arifureta Shokugyou de Sekai Saikyou', '15 ep'),
(102, '1', '<i>Anime</i>', 'seinen', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '9', NULL, '99ea4f90a3edab16c62f063e13cca4a59c52e56e.webp', 'Tate no Yuusha no Nariagari', '25 ep'),
(103, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '6', NULL, '9fdadebe2f8fb14e23d9ac81bf272a6fac8cec5d.jpg', 'Tejina-senpai', '12 ep'),
(104, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '', NULL, '9691d64344ffafda51c1040ab3e50ff7e4fc259b.jfif', 'The God of High School', '13 ep'),
(105, '1', '<i>Anime</i>', 'comedia', '<b style=\\\'color: #cc0000\\\'>abandonou</b>', '6', NULL, '7fd1f606cedbfe8ae4adda8669ab8bb389133a07.jfif', 'Uzaki-chan wa Asobitai!', '12 ep'),
(106, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '', NULL, '1052121c0d49c731a911ae8e44d5dda476354ebf.jfif', 'Kanojo, Okarishimasu', '12 ep'),
(107, '1', '<i>Anime</i>', 'fantasia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'b8e09cc8e09d804a7d184f1cbc043054e62a1d04.png', 'Plunderer', '24 ep'),
(108, '1', '<i>Anime</i>', 'escolar', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '751f66c63fddbeb9f8a11ec66bb28e31a2a0986b.jpg', 'Murenase! Seton Gakuen', '13 ep'),
(109, '1', '<i>Anime</i>', 'harém', '<b style=\\\'color: #b30059\\\'>em Lobby</b>', '', NULL, '2f19aa9d45fcd2624f718ca5da3e7ea6221f6c56.jpg', 'Osananajimi ga Zettai ni Makenai Love Comedy', ''),
(110, '1', '<i>Anime</i>', 'ação', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, 'e1b3d4126c8431bb602c3a78f28d3e315e1a5936.jpg', 'Record of Ragnarok', '12 ep'),
(111, '1', '<i>Anime</i>', 'comedia', '<b style=\\\'color: #ffaf00\\\'>assistiu</b>', '8', NULL, '61babe2763ca97c6df43162d5fc66998491cffe8.jpg', 'Grand Blue', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `img`, `login`, `senha`) VALUES
(1, NULL, 'reiel', '17acc0ce8542d5f7bb099777f788ff8e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
