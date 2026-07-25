-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2026 at 08:04 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dating_socks`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `id` int UNSIGNED NOT NULL,
  `creator_id` int NOT NULL,
  `label` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`id`, `creator_id`, `label`) VALUES
(1, 1, 'Eté '),
(2, 1, 'Hiver '),
(3, 1, 'Originale'),
(4, 1, 'Trouvée'),
(5, 1, 'Sport'),
(6, 1, 'Bizarre'),
(7, 1, 'Célibataire'),
(8, 1, 'Premium'),
(9, 1, 'Drôle'),
(10, 1, 'Enfant'),
(12, 3, 'Mes favoris');

-- --------------------------------------------------------

--
-- Table structure for table `collection_item`
--

CREATE TABLE `collection_item` (
  `collection_id` int UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `collection_item`
--

INSERT INTO `collection_item` (`collection_id`, `item_id`) VALUES
(1, 1),
(5, 1),
(1, 2),
(2, 2),
(7, 3),
(1, 4),
(1, 8),
(1, 17),
(1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `conversation_message`
--

CREATE TABLE `conversation_message` (
  `id` int UNSIGNED NOT NULL,
  `sender_id` int UNSIGNED NOT NULL,
  `receiver_id` int UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `conversation_message`
--

INSERT INTO `conversation_message` (`id`, `sender_id`, `receiver_id`, `item_id`, `content`, `created_at`) VALUES
(11, 1, 1, 1, 'salut', '2026-06-26 09:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` longtext,
  `main_image` varchar(200) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `theme_id` int DEFAULT NULL,
  `material_id` int NOT NULL,
  `state_id` int UNSIGNED DEFAULT NULL,
  `creator_id` int DEFAULT NULL,
  `side` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `personality` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `looking_for` text NOT NULL,
  `red_flag` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `slug`, `label`, `description`, `content`, `main_image`, `statut`, `created_at`, `updated_at`, `theme_id`, `material_id`, `state_id`, `creator_id`, `side`, `color`, `size`, `personality`, `looking_for`, `red_flag`) VALUES
(1, 'noire-sport', 'noire sport', 'Sportive dans l\'âme, mais actuellement sur le banc des célibataires.\r\n\r\n\r\n\r\n', '« Je suis restée seule au fond du panier, mais je n’ai jamais cessé d’espérer.\r\nJ’aime la douceur, les pas lents et les retours à la maison.\r\nSi tu me choisis, je promets de tenir chaud sans jamais serrer trop fort. »\r\n\r\n', 'asset\\images-SM\\black-sm.webp', 1, '2026-04-20', '2026-06-15', 5, 1, 2, 1, 'droit', 'noir', '11', 'mielleuse', 'Une chaussette gentille, peu importe son passé;\r\nUn pied patient.\r\nUne relation simple et confortable.', 'Les pas trop pressés\r\nLes tiroirs froids et silencieux'),
(2, 'rose-chien-noel', 'Rose chien Noel', 'Rose festive avec petits chiens portant des chapeaux de Noël.', '« Je suis peut-être seule aujourd’hui, mais je garde l’esprit de Noël toute l’année. \r\nAncienne star des soirées pyjama hivernales, j’adore les chocolats chauds, les films de Noël et les paniers à linge bienveillants. \r\nMa moitié a mystérieusement disparu après des feux d’artifice beaucoup trop bruyants… » ', 'asset\\images-SM\\chien_noel-sm.webp', 1, '2026-04-20', '2026-06-15', 2, 4, 2, 1, 'gauche', 'rose', '9', 'festive', 'Une chaussette gentille qui aime les soirées cocooning et les fêtes de fin d’année.', 'Les pieds glacés, les sèche-linge agressifs et les gens qui détestent Noël.'),
(3, 'bb-trouve--bruges', 'Bébé trouvée à Bruges', 'Petite soquette bébé retrouvée seule dans une rue de Bruges.', '« Je suis une petite soquette courageuse perdue lors d’une promenade à Bruges. \r\nDepuis, j’attends patiemment qu’une nouvelle moitié croise mon chemin. \r\nJ’aime les siestes, les petits pieds tout chauds et les aventures en poussette. »', 'asset\\images-SM\\brugette-sm.webp', 1, '2026-04-20', '2026-06-15', 7, 6, 2, 1, 'gauche', 'blanc', '1', 'timide et adorable', 'Une petite chaussette gentille prête à partager de nouvelles aventures.', '❌ Les flaques d’eau, les trottinettes trop rapides et les machines à laver sans pitié.'),
(4, 'hamburger', 'Hamburger', 'Pleine de bonne humeur avec motifs hamburger ultra gourmands.', '« Ancienne reine des soirées pyjama et des repas devant les séries, je suis une chaussette festive au grand cœur. \r\nMa moitié a disparu après une soirée barbecue beaucoup trop agitée… \r\nDepuis, je cherche quelqu’un prêt à partager des aventures croustillantes et des moments ketchup-mayo. »', 'asset\\images-SM\\burger_poilu-sm.webp', 1, '2026-04-20', '2026-06-15', 6, 16, 3, 1, 'droit', 'noir', '11', 'Une chaussette qui aime les excès de snacks.', 'Une chaussette qui ne compte pas les calories, aime les soirées canapé et accepte de partager la dernière frite.\r\nRelation libre (dépareillée assumée)', 'Les pieds froids et les amateurs de brocolis vapeur.'),
(5, 'hotdog', 'Hotdog', 'Aussi drôle qu’attachante, avec une énergie de vrai chien-saucisse.', '« Petite par la taille mais immense par la personnalité, je suis une chaussette hot-dog toujours prête à rouler vers de nouveaux pot de moutarde\r\nMa moitié a filé aussi vite qu’un chien lancé après une saucisse tombée au sol… depuis, je traverse le panier à linge en solo.\r\nJe suis affectueuse, un peu ridicule sur les bords, mais impossible à oublier. »', 'asset\\images-SM\\hotdog_saucisse-sm.webp', 1, '2026-04-20', '2026-06-15', 6, 4, 3, 1, 'droit', 'vert', '11', 'énergique et collante affectivement', 'Une chaussette drôle qui aime les câlins  et les blagues douteuses.', 'Les chats moqueurs, les sandales et les gens qui disent “ce n’est qu’une chaussette”.'),
(6, 'cur-blanc', 'Cœur blanc', 'Froide en apparence, mais totalement romantique au fond du tiroir.', '« Derrière mon look sombre se cache un petit cœur sensible.\r\nJ’étais la star discrète des soirées pyjama jusqu’à ce que ma moitié disparaisse mystérieusement entre deux draps-housses.\r\nDepuis, je cherche une chaussette capable d’aimer mes défauts… et mes bouloches émotionnelles. »', 'asset\\images-SM\\coeur_blanc-sm.webp', 1, '2026-04-20', '2026-06-26', 8, 12, 3, 1, 'gauche', 'noir', '9', 'mystérieuse et affectueuse', '« Une chaussette sincère qui ne piétinera pas mes petits cœur en coton. »', 'Les relations sans lavage délicat.'),
(8, 'rose-cur', 'Rose cœur', 'Experte en dramas de panier à linge.', 'Avec mon petit cœur rose et mon humour douteux, j’apporte du style à tous les pieds qui croisent ma route.\r\nMa moitié a disparu après une soirée beaucoup trop festive et plusieurs verres de lessive émotionnelle.\r\n', 'asset/images-SM/rose-cur.jpg', 1, '2026-04-20', '2026-06-15', 10, 6, 3, 1, 'droit', 'rose', '11', 'fun et dramatiquement attachante', 'je cherche une chaussette prête à vivre une relation sérieuse… ou au moins un lavage commun. »', 'Les sandales-chaussettes et les sèche-linge trop chauds.'),
(10, 'noire-talon-rouge', 'Noire talon rouge', 'Rouge comme la passion, noire comme mon historique de relations textiles.', '« Avec mon style rouge et noir, on me croit souvent rebelle. En réalité, je suis juste une chaussette qui a beaucoup aimé... et beaucoup perdu.\r\nMa moitié a disparu lors d\'une aventure dont personne ne veut parler au panier à linge.\r\nDepuis, je cherche quelqu\'un capable de suivre mon rythme sans me laisser seule au fond d\'un tiroir. »', 'asset\\images-SM\\en_rouge_et_noir-sm.webp', 1, '2026-04-20', '2026-06-15', 6, 6, 3, 1, 'inconnu', 'rouge et noire', '11', 'passionnée, audacieuse et un peu dramatique', 'Passionnée, audacieuse et un peu dramatique', 'Les relations tièdes, les pieds qui traînent et les chaussettes qui disparaissent sans explication.'),
(11, 'lotto', 'Lotto', 'Sportive dans l\'âme, mais actuellement sur le banc des célibataires.', '« Ancienne habituée des terrains, des salles de sport et des journées bien remplies, je suis une chaussette Lotto qui a toujours donné le meilleur d\'elle-même.\r\nMa moitié s\'est malheureusement blessée lors d\'un transfert vers la machine à laver et n\'est jamais revenue.\r\nDepuis, je garde la forme et l\'espoir de retrouver une partenaire prête à relever de nouveaux défis. »', 'asset\\images-SM\\lotto_gagant-sm.webp', 1, '2026-04-20', '2026-06-15', 5, 1, 3, 1, 'droit', 'noir', '11', 'sportive, fidèle et motivée', 'Une chaussette active qui aime les défis, les longues marches et les victoires du quotidien.', 'Les cartons rouge en plein match, les pieds paresseux et les excuses pour ne pas sortir du tiroir.'),
(12, 'noire-unie', 'Noire unie', 'La preuve vivante qu\'on peut être simple, élégante et pourtant toujours célibataire.', '« Pendant des années, j\'ai assuré discrètement mon rôle au fond des chaussures. Pas de paillettes, pas de motifs extravagants, juste du professionnalisme textile.\r\nMalheureusement, ma moitié a quitté ce monde après une mission périlleuse derrière une machine à laver.\r\nAujourd\'hui, je cherche quelqu\'un qui saura apprécier les chaussettes fiables, celles qui sont là quand on en a besoin. »', 'asset\\images-SM\\black31-sm.webp', 1, '2026-04-20', '2026-04-20', 11, 6, NULL, 1, 'droite', 'noir', '11', 'calme, fiable et légèrement sarcastique', 'Une chaussette stable émotionnellement qui ne disparaît pas au premier cycle d\'essorage.', 'Les chaussettes qui font leur intéressante avec des licornes, les pieds qui traînent dans les flaques et les relations à usage unique.'),
(13, 'bb-bleue', 'Bébé bleue', 'Petite soquette toute neuve retrouvée seule dans un panier de courses chez Carrefour.', '« Je venais à peine de commencer ma carrière de chaussette quand le destin a décidé de me faire prendre un chemin inattendu.\r\nRetrouvée toute seule dans un panier de courses chez Carrefour, je cherche maintenant une nouvelle moitié avec qui découvrir le monde.\r\nJe suis encore toute neuve, pleine d\'espoir et prête à accompagner les premiers pas d\'une belle amitié textile. »', 'asset\\images-SM\\panier_carrefour-sm.webp', 1, '2026-04-20', '2026-06-15', 7, 3, 1, 1, 'inconnu', 'bleu pale', '2', 'curieuse, douce et pleine d\'optimisme', 'Une petite chaussette gentille qui aime les promenades en poussette et les siestes bien méritées.', 'Les flaques de compote, les machines à laver affamées et les paniers de courses.'),
(17, 'bleue-de-peur', 'Bleue de peur', 'Une chaussette d\'une couleur différente, mais dans les mêmes tons. Simple en apparence, mais étonnamment coriace. Elle a déjà survécu à quelques aventures, quelques trous au talon et même à des petits chiens argneux qui semblaient lui vouer une rancune inexplicable.', NULL, 'asset/images-SM/bleue-de-peur.webp', 1, '2026-05-28', '2026-06-15', NULL, 6, 3, 1, 'droit', 'grise', '9', 'Simple mais coriace. Fidèle, discrète et plus résistante qu\'elle n\'en a l\'air.', 'Un tiroir molletonné pour des confidences feutrées et une chaussette capable d\'apprécier les petits plaisirs du quotidien.', 'Jugement des autres chaussettes sur les trous .\r\nLes petits chiens, surtout ceux qui montrent les dents.\r\nLes lavages à 90°'),
(24, 'chaussette-sushi-party', 'Chaussette Sushi Party', ' Paire de chaussettes aux motifs sushi, retrouvée neuve sur la digue de Gran Canaria. Semble avoir été abandonnée avant même de vivre sa première aventure.', 'Nous sommes une paire de chaussettes sushi retrouvée toute neuve sur la digue de Gran Canaria. Aucun signe d\'usure, aucune odeur suspecte, même pas un grain de sable coincé entre nos fibres. Notre théorie ? Nous avons été oubliées lors d\'une promenade romantique face à l\'océan ou abandonnées par quelqu\'un qui n\'était manifestement pas prêt pour une relation aussi fusionnelle. Depuis, nous attendons une nouvelle aventure, de préférence avec quelqu\'un qui apprécie les makis autant que les longues balades en bord de mer. ', 'asset/images-SM/chaussette-sushi-party.webp', 1, '2026-06-15', '2026-06-15', NULL, 4, 1, 1, 'paire', 'Rose saumon', '11', 'Optimistes, gourmandes, aventurières et toujours partantes pour une escapade au soleil.', 'Une nouvelle paire de pieds prête à nous emmener découvrir le monde, les restaurants japonais et pourquoi pas quelques couchers de soleil sur la plage.', 'Dire que les sushis c\'est \"juste du riz avec du poisson\".\r\nPorter des sandales avec des chaussettes.\r\nNe jamais finir son assiette.\r\nAbandonner des chaussettes neuves sur une digue sans explication.'),
(31, 'huih', 'huih', 'gjkk', NULL, 'asset/images-SM/huih.webp', 1, '2026-07-08', '2026-07-08', NULL, 1, 1, 3, 'droit', 'hkh', '1', 'hjkh', 'nhklh', '');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int NOT NULL,
  `slug` varchar(500) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `slug`, `label`) VALUES
(1, 'acrylique', 'Acrylique'),
(2, 'bambou', 'Bambou'),
(3, 'cachemire', 'Cachemire'),
(4, 'coton', 'Coton'),
(5, 'elasthanne', 'Élasthanne'),
(6, 'eponge', 'Éponge'),
(7, 'fibre-recyclee', 'Fibre recyclée'),
(8, 'laine', 'Laine'),
(9, 'lin', 'Lin'),
(10, 'matiere-inconnue', 'Matière inconnue'),
(11, 'melange-de-fibres', 'Mélange de fibres'),
(12, 'merinos', 'Mérinos'),
(13, 'mohair', 'Mohair'),
(14, 'nylon', 'Nylon'),
(15, 'polaire', 'Polaire'),
(16, 'polyester', 'Polyester'),
(17, 'soie', 'Soie'),
(18, 'velours', 'Velours');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subject` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `assigned_to` int NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `content`, `status`, `assigned_to`, `date`) VALUES
(1, 'vdsv dfsfvsd', 'woltereve@hotmail.com', 'Contact depuis le site', 'cesczev', 0, 1, '2026-06-29 14:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '''Hashed using password_hash()',
  `last_login` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `email`, `pseudo`, `date_naissance`, `password`, `last_login`, `is_active`, `is_admin`) VALUES
(1, 'hardcoreeve@hotmail.com', '', NULL, '$2y$10$0dsKEgAQ5cKFxON0ltp3puPMuUKm6uMJg23TLzdOMjFfJpqU9gmje', NULL, 1, 0),
(3, 'socksneedlove@outlook.com', 'socksneedlove', '1980-11-07', '$2y$10$/FHcvUQt6ILn/KRzqlcHXudgyi.3mqd3345ofJ0pBiNStTKgGLOVC', NULL, 1, 1),
(4, 'test2@hotmail.com', 'chaussette-lover', '2001-12-12', '$2y$10$A0YMxarFIVzh9eAYlPfS/upsalwhegmt2oP1Uv7zlPboJaMcGtpiC', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int NOT NULL,
  `slug` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `slug`, `label`) VALUES
(1, '0-6-mois', '0–6 mois'),
(2, '6-12-mois', '6–12 mois'),
(3, '1-3-ans', '1–3 ans'),
(4, '3-5-ans', '3–5 ans'),
(5, '16-19', '16–19'),
(6, '20-23', '20–23'),
(7, '24-27', '24–27'),
(8, '28-31', '28–31'),
(9, '32-35', '32–35'),
(10, '35-38', '35–38'),
(11, '39-42', '39–42'),
(12, '43-46', '43–46'),
(13, '47-plus', '47+');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `slug`, `label`) VALUES
(1, 'neuf', 'Neuf'),
(2, 'bon_etat', 'Bon état'),
(3, 'use', 'Usé avec charme');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `slug`, `label`) VALUES
(1, 'Noir', 'Noir'),
(2, 'Blanc', 'Blanc'),
(3, 'Rose', 'Rose'),
(4, 'Bleu', 'Bleu'),
(6, 'orange', 'orange'),
(7, 'coton', 'coton'),
(8, 'laine', 'laine'),
(9, 'sport', 'sport'),
(10, 'enfant', 'enfant'),
(11, 'drole', 'drôle'),
(12, 'trouvée', 'trouvée'),
(13, 'polyester', 'polyester'),
(14, 'célibataire', 'célibataire'),
(19, 'Mélange doux', 'Mélange doux'),
(20, 'Inconnue', 'Inconnue');

-- --------------------------------------------------------

--
-- Table structure for table `taguer`
--

CREATE TABLE `taguer` (
  `item_id` int UNSIGNED NOT NULL,
  `tag_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taguer`
--

INSERT INTO `taguer` (`item_id`, `tag_id`) VALUES
(1, 1),
(2, 3),
(1, 9),
(3, 10),
(2, 11),
(3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `slug`, `label`) VALUES
(2, 'noel-fete', 'Noël & fêtes '),
(3, 'fete-celebration', ' Fête & célébration'),
(4, 'printemps-jardinage', 'Printemps & jardinage'),
(5, 'sport-passion', 'sport & passion'),
(6, 'automne-cocooning', 'Automne cocooning'),
(7, 'univers-enfantin', 'Univers enfantin'),
(8, 'ete-vacances', 'Été & vacances'),
(10, 'amour-tendresse', 'Amour & tendresse'),
(11, 'classique', 'Classique'),
(12, 'hiver-grand-froid', 'Hiver & grand froid'),
(13, 'fantaisie-humour', 'Fantaisie & humour'),
(14, 'maison-quotidien', 'Maison & quotidien'),
(15, 'voyage-aventure', ' Voyage & aventure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator_id` (`creator_id`);

--
-- Indexes for table `collection_item`
--
ALTER TABLE `collection_item`
  ADD PRIMARY KEY (`collection_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `conversation_message`
--
ALTER TABLE `conversation_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `theme_id` (`theme_id`),
  ADD KEY `item_as_one_category` (`material_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigned_to FK` (`assigned_to`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `taguer`
--
ALTER TABLE `taguer`
  ADD PRIMARY KEY (`item_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `conversation_message`
--
ALTER TABLE `conversation_message`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `operator` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `collection_item`
--
ALTER TABLE `collection_item`
  ADD CONSTRAINT `collection_item_ibfk_1` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `collection_item_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_as_one_category` FOREIGN KEY (`material_id`) REFERENCES `material` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`theme_id`) REFERENCES `theme` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`assigned_to`) REFERENCES `operator` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `taguer`
--
ALTER TABLE `taguer`
  ADD CONSTRAINT `taguer_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `taguer_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
