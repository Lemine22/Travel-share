-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mar 28 Juin 2016 à 12:25
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `travel_share`
--
CREATE DATABASE IF NOT EXISTS `travel_share` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `travel_share`;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `src` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `post_id`, `src`, `date`) VALUES
(1, 1, 'mr-arnoldo-runte.jpg', '0000-00-00 00:00:00'),
(2, 2, 'dr-leilani-kunde-phd.jpg', '0000-00-00 00:00:00'),
(3, 3, 'ardella-gorczany.jpg', '0000-00-00 00:00:00'),
(4, 4, 'milan-considine.jpg', '0000-00-00 00:00:00'),
(5, 5, 'dr-jacey-weissnat.jpg', '0000-00-00 00:00:00'),
(6, 6, 'wilhelmine-smitham.jpg', '0000-00-00 00:00:00'),
(7, 7, 'aurore-feil.jpg', '0000-00-00 00:00:00'),
(8, 8, 'jeramie-armstrong.jpg', '0000-00-00 00:00:00'),
(9, 9, 'merritt-kozey.jpg', '0000-00-00 00:00:00'),
(10, 10, 'judge-rempel-dds.jpg', '0000-00-00 00:00:00'),
(11, 11, 'dr-camron-klein-phd.jpg', '0000-00-00 00:00:00'),
(12, 12, 'florencio-pollich.jpg', '0000-00-00 00:00:00'),
(13, 13, 'dr-jaclyn-beahan-ii.jpg', '0000-00-00 00:00:00'),
(14, 14, 'paris-steuber.jpg', '0000-00-00 00:00:00'),
(15, 15, 'monserrat-kirlin.jpg', '0000-00-00 00:00:00'),
(16, 16, 'vickie-hegmann.jpg', '0000-00-00 00:00:00'),
(17, 17, 'prof-humberto-stroman-sr.jpg', '0000-00-00 00:00:00'),
(18, 18, 'macie-block-sr.jpg', '0000-00-00 00:00:00'),
(19, 19, 'ms-erica-adams-jr.jpg', '0000-00-00 00:00:00'),
(20, 20, 'arno-williamson.jpg', '0000-00-00 00:00:00'),
(21, 21, 'mafalda-nicolas.jpg', '0000-00-00 00:00:00'),
(22, 22, 'miss-jany-wisoky-md.jpg', '0000-00-00 00:00:00'),
(23, 23, 'austyn-altenwerth.jpg', '0000-00-00 00:00:00'),
(24, 24, 'prof-lonzo-huels.jpg', '0000-00-00 00:00:00'),
(25, 25, 'gust-walker-iii.jpg', '0000-00-00 00:00:00'),
(26, 26, 'alfred-wiegand.jpg', '0000-00-00 00:00:00'),
(27, 27, 'adaline-turner.jpg', '0000-00-00 00:00:00'),
(28, 28, 'mrs-dorris-keeling-md.jpg', '0000-00-00 00:00:00'),
(29, 29, 'kenneth-harvey.jpg', '0000-00-00 00:00:00'),
(30, 30, 'jacey-strosin-dvm.jpg', '0000-00-00 00:00:00'),
(31, 31, 'izabella-bashirian-jr.jpg', '0000-00-00 00:00:00'),
(32, 32, 'ari-leffler.jpg', '0000-00-00 00:00:00'),
(33, 33, 'dr-grayson-walker.jpg', '0000-00-00 00:00:00'),
(34, 34, 'mina-blanda.jpg', '0000-00-00 00:00:00'),
(35, 35, 'prof-verna-hayes.jpg', '0000-00-00 00:00:00'),
(36, 36, 'lenora-grady-md.jpg', '0000-00-00 00:00:00'),
(37, 37, 'terrill-swift.jpg', '0000-00-00 00:00:00'),
(38, 38, 'miss-madge-hoeger.jpg', '0000-00-00 00:00:00'),
(39, 39, 'josianne-nolan.jpg', '0000-00-00 00:00:00'),
(40, 40, 'prof-delia-reichel.jpg', '0000-00-00 00:00:00'),
(41, 41, 'pierce-harris.jpg', '0000-00-00 00:00:00'),
(42, 42, 'mr-oliver-stehr-sr.jpg', '0000-00-00 00:00:00'),
(43, 43, 'prof-lincoln-daugherty-i.jpg', '0000-00-00 00:00:00'),
(44, 44, 'reyna-russel.jpg', '0000-00-00 00:00:00'),
(45, 45, 'dr-hazel-crooks-md.jpg', '0000-00-00 00:00:00'),
(46, 46, 'prof-giovani-runolfsson-md.jpg', '0000-00-00 00:00:00'),
(47, 47, 'missouri-nicolas-v.jpg', '0000-00-00 00:00:00'),
(48, 48, 'claudie-haag.jpg', '0000-00-00 00:00:00'),
(49, 49, 'green-torphy.jpg', '0000-00-00 00:00:00'),
(50, 50, 'noah-wisoky.jpg', '0000-00-00 00:00:00'),
(51, 51, 'veronica-legros.jpg', '0000-00-00 00:00:00'),
(52, 52, 'hope-thompson.jpg', '0000-00-00 00:00:00'),
(53, 1, 'quinn-barton.jpg', '0000-00-00 00:00:00'),
(54, 2, 'dr-domingo-hammes-iv.jpg', '0000-00-00 00:00:00'),
(55, 3, 'jordane-cronin.jpg', '0000-00-00 00:00:00'),
(56, 4, 'caleb-reilly.jpg', '0000-00-00 00:00:00'),
(57, 5, 'dr-alexzander-quigley.jpg', '0000-00-00 00:00:00'),
(58, 6, 'prof-allison-glover-v.jpg', '0000-00-00 00:00:00'),
(59, 7, 'franco-ruecker-sr.jpg', '0000-00-00 00:00:00'),
(60, 8, 'braeden-kuhn.jpg', '0000-00-00 00:00:00'),
(61, 9, 'bridget-miller-ii.jpg', '0000-00-00 00:00:00'),
(62, 10, 'madge-hickle.jpg', '0000-00-00 00:00:00'),
(63, 11, 'larue-fritsch.jpg', '0000-00-00 00:00:00'),
(64, 12, 'louisa-casper.jpg', '0000-00-00 00:00:00'),
(65, 13, 'mrs-martine-cassin-md.jpg', '0000-00-00 00:00:00'),
(66, 14, 'casimir-fahey.jpg', '0000-00-00 00:00:00'),
(67, 15, 'joel-osinski.jpg', '0000-00-00 00:00:00'),
(68, 16, 'samir-tremblay.jpg', '0000-00-00 00:00:00'),
(69, 17, 'vicenta-howe.jpg', '0000-00-00 00:00:00'),
(70, 18, 'darryl-tremblay.jpg', '0000-00-00 00:00:00'),
(71, 19, 'alysson-ritchie.jpg', '0000-00-00 00:00:00'),
(72, 20, 'alessandra-bailey.jpg', '0000-00-00 00:00:00'),
(73, 21, 'tanya-corkery.jpg', '0000-00-00 00:00:00'),
(74, 22, 'bridgette-powlowski-i.jpg', '0000-00-00 00:00:00'),
(75, 23, 'juliet-erdman.jpg', '0000-00-00 00:00:00'),
(76, 24, 'mr-jarrett-lubowitz-jr.jpg', '0000-00-00 00:00:00'),
(77, 25, 'dr-erwin-metz-iv.jpg', '0000-00-00 00:00:00'),
(78, 26, 'nadia-grant.jpg', '0000-00-00 00:00:00'),
(79, 27, 'dr-garry-kulas-phd.jpg', '0000-00-00 00:00:00'),
(80, 28, 'gene-kassulke.jpg', '0000-00-00 00:00:00'),
(81, 29, 'margarita-hane.jpg', '0000-00-00 00:00:00'),
(82, 30, 'otto-kuphal.jpg', '0000-00-00 00:00:00'),
(83, 31, 'pat-dicki.jpg', '0000-00-00 00:00:00'),
(84, 32, 'kayla-renner-dds.jpg', '0000-00-00 00:00:00'),
(85, 33, 'albertha-keeling.jpg', '0000-00-00 00:00:00'),
(86, 34, 'eloisa-olson-ii.jpg', '0000-00-00 00:00:00'),
(87, 35, 'prof-justice-terry.jpg', '0000-00-00 00:00:00'),
(88, 36, 'melody-bartell.jpg', '0000-00-00 00:00:00'),
(89, 37, 'baron-kling-iv.jpg', '0000-00-00 00:00:00'),
(90, 38, 'leif-nitzsche.jpg', '0000-00-00 00:00:00'),
(91, 39, 'lea-rohan-phd.jpg', '0000-00-00 00:00:00'),
(92, 40, 'miss-melyssa-mraz.jpg', '0000-00-00 00:00:00'),
(93, 41, 'miss-dawn-wisoky-sr.jpg', '0000-00-00 00:00:00'),
(94, 42, 'mr-hilario-osinski-md.jpg', '0000-00-00 00:00:00'),
(95, 43, 'savion-stehr.jpg', '0000-00-00 00:00:00'),
(96, 44, 'neal-trantow-v.jpg', '0000-00-00 00:00:00'),
(97, 45, 'mr-furman-beatty.jpg', '0000-00-00 00:00:00'),
(98, 46, 'isabella-watsica-iii.jpg', '0000-00-00 00:00:00'),
(99, 47, 'mr-sigrid-keebler-iii.jpg', '0000-00-00 00:00:00'),
(100, 48, 'prof-haskell-batz-iii.jpg', '0000-00-00 00:00:00'),
(101, 49, 'arthur-green.jpg', '0000-00-00 00:00:00'),
(102, 50, 'dejuan-wyman.jpg', '0000-00-00 00:00:00'),
(103, 1, 'hassan-wilkinson-v.jpg', '0000-00-00 00:00:00'),
(104, 2, 'mckenzie-bogisich.jpg', '0000-00-00 00:00:00'),
(105, 3, 'mr-reilly-kling.jpg', '0000-00-00 00:00:00'),
(106, 4, 'raul-frami-phd.jpg', '0000-00-00 00:00:00'),
(107, 5, 'violette-connelly.jpg', '0000-00-00 00:00:00'),
(108, 6, 'caitlyn-simonis-jr.jpg', '0000-00-00 00:00:00'),
(109, 7, 'zachary-gorczany.jpg', '0000-00-00 00:00:00'),
(110, 8, 'bart-wilkinson.jpg', '0000-00-00 00:00:00'),
(111, 9, 'lesly-hermiston.jpg', '0000-00-00 00:00:00'),
(112, 10, 'jalyn-macejkovic-md.jpg', '0000-00-00 00:00:00'),
(113, 11, 'prof-shaina-botsford-sr.jpg', '0000-00-00 00:00:00'),
(114, 12, 'elroy-runte-i.jpg', '0000-00-00 00:00:00'),
(115, 13, 'jacey-ernser.jpg', '0000-00-00 00:00:00'),
(116, 14, 'idell-gerlach.jpg', '0000-00-00 00:00:00'),
(117, 15, 'loyal-price.jpg', '0000-00-00 00:00:00'),
(118, 16, 'carli-cronin-ii.jpg', '0000-00-00 00:00:00'),
(119, 17, 'aubree-hahn.jpg', '0000-00-00 00:00:00'),
(120, 18, 'rachel-lang.jpg', '0000-00-00 00:00:00'),
(121, 19, 'cale-strosin-jr.jpg', '0000-00-00 00:00:00'),
(122, 20, 'cathryn-spinka.jpg', '0000-00-00 00:00:00'),
(123, 21, 'garret-hoeger.jpg', '0000-00-00 00:00:00'),
(124, 22, 'filiberto-russel.jpg', '0000-00-00 00:00:00'),
(125, 23, 'grover-keeling.jpg', '0000-00-00 00:00:00'),
(126, 24, 'flo-kuhic-v.jpg', '0000-00-00 00:00:00'),
(127, 25, 'giuseppe-senger.jpg', '0000-00-00 00:00:00'),
(128, 26, 'prof-francis-cormier-ii.jpg', '0000-00-00 00:00:00'),
(129, 27, 'fay-lesch.jpg', '0000-00-00 00:00:00'),
(130, 28, 'fidel-dicki.jpg', '0000-00-00 00:00:00'),
(131, 29, 'leora-zboncak.jpg', '0000-00-00 00:00:00'),
(132, 30, 'eudora-veum.jpg', '0000-00-00 00:00:00'),
(133, 31, 'prof-alexander-fisher.jpg', '0000-00-00 00:00:00'),
(134, 32, 'coy-hegmann.jpg', '0000-00-00 00:00:00'),
(135, 33, 'ms-eve-ferry-sr.jpg', '0000-00-00 00:00:00'),
(136, 34, 'carolyn-rohan-md.jpg', '0000-00-00 00:00:00'),
(137, 35, 'jasmin-koss.jpg', '0000-00-00 00:00:00'),
(138, 36, 'dallin-hettinger-ii.jpg', '0000-00-00 00:00:00'),
(139, 37, 'cassandra-schumm-dds.jpg', '0000-00-00 00:00:00'),
(140, 38, 'garrick-ohara.jpg', '0000-00-00 00:00:00'),
(141, 39, 'savannah-cremin.jpg', '0000-00-00 00:00:00'),
(142, 40, 'wyman-lakin.jpg', '0000-00-00 00:00:00'),
(143, 41, 'dr-isidro-zboncak-iii.jpg', '0000-00-00 00:00:00'),
(144, 42, 'ms-freeda-stamm-md.jpg', '0000-00-00 00:00:00'),
(145, 43, 'oliver-steuber.jpg', '0000-00-00 00:00:00'),
(146, 44, 'felicia-veum.jpg', '0000-00-00 00:00:00'),
(147, 45, 'angus-ankunding.jpg', '0000-00-00 00:00:00'),
(148, 46, 'hillard-luettgen.jpg', '0000-00-00 00:00:00'),
(149, 47, 'gabriel-lindgren.jpg', '0000-00-00 00:00:00'),
(150, 48, 'miss-aryanna-morissette-dds.jpg', '0000-00-00 00:00:00'),
(151, 49, 'prof-cary-heller-v.jpg', '0000-00-00 00:00:00'),
(152, 50, 'paul-haag.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `name_bp` varchar(100) NOT NULL,
  `qui` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `description` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `name_bp`, `qui`, `type`, `adresse`, `city`, `country`, `lat`, `lng`, `description`, `status`, `date`) VALUES
(1, 3, 'Quo et voluptatem placeat cumque.', 'Hassan Wilkinson V', 'couple', 'hebergement', '7819 Floyd Extension\nKoeppview, WY 28554', 'Cairo', 'Egypt', 30.04441962, 31.23571161, 'Quo porro eius nesciunt nostrum a. Nobis sit aut rem eos soluta. Consectetur adipisci iure sapiente distinctio quod placeat. Maxime et sed error voluptatum dolore.', NULL, '1976-11-16 00:00:00'),
(2, 4, 'Nihil aperiam illum qui ex occaecati suscipit.', 'Mckenzie Bogisich', 'couple', 'restaurant', '88752 Eunice Passage\nAntonettamouth, WV 76355-2509', 'Santiago', 'Chile', -33.44888973, -70.6692655, 'Non voluptatem fugit exercitationem dolor. Eaque aliquid qui sint. Debitis distinctio voluptas atque repellendus quibusdam sunt. Voluptas iste laboriosam ut nobis quia porro repudiandae. Ipsum totam voluptas vel qui. Ut impedit eveniet minus est mollitia ut iusto. Qui eligendi adipisci totam.', NULL, '1973-11-26 00:00:00'),
(3, 11, 'Ipsum et dolores sequi et cumque.', 'Mr. Reilly Kling', 'amis', 'restaurant', '63083 Smith Street\nNew Charlotte, NC 45732-7003', 'Hanoi', 'Vietnam', 21.02776442, 105.8341598, 'Facere debitis quisquam enim aut. Officia maiores dolore sed excepturi enim earum rerum. Aut quisquam autem optio. Tempora sunt est eos quaerat. Illo quae inventore dolores vel aut. Et veritatis incidunt dolor ipsam. Ratione consequuntur est ut eum dignissimos libero.', NULL, '2013-07-23 00:00:00'),
(4, 4, 'Libero asperiores modi ut molestias ea qui ut.', 'Raul Frami PhD', 'amis', 'loisir', '959 Lea Roads\nDarionland, KY 16962', 'Ankara', 'Turkey', 39.93336352, 32.85974192, 'Laudantium id dolor praesentium. Ad omnis dicta accusantium. Minus quasi at mollitia rerum aut voluptas facere. Ea repudiandae soluta earum quisquam rerum iusto eos. Corporis sint dignissimos illum officiis esse eligendi. Incidunt modi consequatur ullam aut est qui maiores. Quibusdam debitis sit rem aut.', NULL, '1980-07-02 00:00:00'),
(5, 11, 'Voluptate est aperiam voluptate optio.', 'Violette Connelly', 'solo', 'loisir', '368 Hettinger Streets\nLake Ottilie, MN 90097', 'Shanghai', 'China', 31.2304163, 121.473701, 'Consequatur est sit mollitia nulla adipisci voluptatem. Dolor ut sed cum. Et quod maiores sit quos molestiae suscipit. Est sit optio sed dolores et qui mollitia. Repellat quia id quis dolorem cumque inventore magni. Nemo beatae quia quos qui sit suscipit ad. Mollitia commodi dolorum aut possimus.', NULL, '1996-03-07 00:00:00'),
(6, 1, 'Sunt voluptatem velit sapiente dolorem aut a.', 'Caitlyn Simonis Jr.', 'couple', 'bar', '3105 Reese Knoll\nColeborough, MA 33387', 'Ankara', 'Turkey', 39.9489609, 32.7773584, 'Quis officiis earum omnis non occaecati. Autem sequi libero minima qui quia illo. Consequatur est voluptas dignissimos ea et error optio. Odio vitae debitis nulla tempore. Voluptas velit enim animi quas nihil. Culpa consequatur vero neque fugit et.', NULL, '1997-07-11 00:00:00'),
(7, 3, 'Molestiae ullam iste perferendis sunt occaecati.', 'Zachary Gorczany', 'amis', 'patrimoine', '1885 Brielle Trace\nSouth Cordiatown, AR 16981-7631', 'Nairobi', 'Kenya', -1.29206592, 36.82194621, 'Nemo rerum est rerum dicta commodi est et. Similique reprehenderit repellendus sint aliquid et esse. Vero quibusdam eveniet ut fuga quo aliquam iusto incidunt. Hic magnam rerum esse quia. Pariatur ea maiores veritatis repellat architecto voluptatibus qui. Aliquam quia a velit et dolorem.', NULL, '1987-04-23 00:00:00'),
(8, 1, 'Ut quisquam ad aut quo doloribus velit.', 'Bart Wilkinson', 'couple', 'shopping', '29671 Robel Parkway\nWest Mose, MS 17670-7226', 'Ahmedabad', 'India', 23.0225053, 72.57136211, 'Enim repellat consequatur nobis dolores dicta sequi commodi. Adipisci ut ullam incidunt qui deleniti quia similique. Voluptatibus unde dignissimos aliquid dolor commodi. Repellendus est rerum rerum tempora ab. Sapiente excepturi vel vel nam aliquam in aperiam. Et vitae libero neque nihil rerum et est eius. Molestias alias non odit.', NULL, '1984-06-25 00:00:00'),
(9, 3, 'Optio mollitia ea aut est sunt.', 'Lesly Hermiston', 'famille', 'night-club', '6120 Fadel Row Suite 951\nWest Willis, NE 08372', 'Madrid', 'Spain', 40.4167754, -3.70379022, 'Quo rerum repellat numquam consequatur soluta itaque quisquam officia. Reiciendis est et itaque adipisci. A ea reiciendis consequatur nam. Aperiam ex doloremque excepturi debitis nostrum non. Sed nobis consequatur tenetur sunt. Et magni occaecati quasi consequatur vel.', NULL, '1994-09-06 00:00:00'),
(10, 1, 'Dolores sed fuga voluptatum qui minus.', 'Jalyn Macejkovic MD', 'solo', 'restaurant', '517 Ransom Manor Suite 586\nNorth Floridamouth, DC 15207', 'Baghdad', 'Iraq', 33.31280572, 44.36148751, 'Temporibus illum incidunt inventore ut laudantium qui. Cupiditate libero voluptas qui aut reiciendis eveniet. Consectetur voluptatem quis eos et recusandae dolorem. Fugit cumque et sint. In suscipit quidem mollitia quia.', NULL, '2007-04-21 00:00:00'),
(11, 4, 'Similique quisquam ratione earum aperiam.', 'Prof. Shaina Botsford Sr.', 'solo', 'restaurant', '22878 Nitzsche Isle Apt. 870\nO\'Reillytown, WY 72052', 'Hyderabad', 'India', 17.3850442, 78.486671, 'Laborum in illum ut est sit. Excepturi distinctio ipsum ut assumenda ut. Voluptas porro neque quam similique ullam eos. Autem molestiae quaerat ab id. Iusto vero consequatur at ullam aliquid.', NULL, '1983-12-26 00:00:00'),
(12, 3, 'Ut qui quisquam suscipit omnis fugit vel.', 'Elroy Runte I', 'couple', 'bar', '4209 Marjolaine Views\nPort Ottilie, OK 15364-7081', 'Ahmedabad', 'India', 23.0204882, 72.5097025, 'Sunt dolor impedit labore. Molestiae omnis iusto rerum mollitia. Reprehenderit et beatae ipsam perferendis doloremque dolorem sed. Necessitatibus et qui enim amet fugiat ipsam. Praesentium laudantium omnis incidunt et. Alias aspernatur voluptates sint ut incidunt laudantium. Aspernatur ea in est aut.', NULL, '1988-02-05 00:00:00'),
(13, 1, 'Esse tempora est a odit.', 'Jacey Ernser', 'amis', 'hebergement', '30391 Bergstrom Corner Suite 776\nStiedemanntown, WY 84454-4195', 'Alexandria', 'Egypt', 31.1447236, 29.8383964, 'In adipisci aliquam molestiae eaque. Repellendus vitae quasi aut rerum dolorum soluta officiis. Voluptatum quae quia est quibusdam alias. Corrupti qui quia velit et voluptates libero fuga. Quidem labore maxime nihil incidunt laudantium dolores molestiae.', NULL, '2011-06-17 00:00:00'),
(14, 2, 'Optio fuga at delectus error ut voluptas odio.', 'Idell Gerlach', 'famille', 'patrimoine', '11591 Wuckert Union\nWest Geotown, SD 52259', 'Kinshasa', 'Democratic Republic of the Congo', -4.44193112, 15.26629311, 'Quo accusamus sit modi unde. Perspiciatis velit qui numquam est modi. Sequi nisi fugiat eveniet qui asperiores. Doloribus amet ut officia hic sequi nobis exercitationem.', NULL, '1982-12-20 00:00:00'),
(15, 11, 'Et ipsam in et inventore tempora dolor.', 'Loyal Price', 'amis', 'bar', '32274 Price Village\nElliottton, KS 22896', 'Ho Chi Minh City', 'Vietnam', 10.82309893, 106.62966383, 'Modi voluptas debitis omnis dolorem illum. Voluptatum exercitationem aut rerum. Reiciendis quo laudantium soluta deserunt exercitationem qui aut. Minus rem reiciendis saepe molestiae velit. Quidem doloremque natus omnis iure laudantium quidem fuga. Necessitatibus rerum voluptatum nesciunt quia officia qui quisquam quaerat.', NULL, '1985-10-21 00:00:00'),
(16, 11, 'Voluptatem et vel mollitia quidem.', 'Carli Cronin II', 'solo', 'loisir', '60303 Hauck Loop\nBaileytown, NY 23731', 'Singapore', 'Singapore', 1.35537941, 103.8677444, 'Id repellat quam aut ullam. Sed nemo est quia reprehenderit numquam. Pariatur praesentium esse voluptates deserunt eius in atque. Quibusdam quasi non ut sint qui id culpa.', NULL, '1975-05-30 00:00:00'),
(17, 4, 'Eum officia ut ullam.', 'Aubree Hahn', 'solo', 'bar', '229 Summer Alley Suite 281\nGudrunbury, NH 02764', 'Beijing', 'China', 39.9042111, 116.4073953, 'Dolore provident facere sequi sit. Impedit voluptatem et harum accusamus totam. Voluptatem accusamus iste vel nostrum ab. Illum ea quia sed et fugit qui in. Deleniti quo possimus sit quidem sunt commodi veritatis. Consectetur dolor sunt laudantium non dolor accusantium recusandae. Accusamus in maxime aut aut.', NULL, '1994-04-02 00:00:00'),
(18, 1, 'Qui quos dolorum aut est voluptate.', 'Rachel Lang', 'couple', 'loisir', '516 Rath Parkway Suite 319\nLaurynbury, VT 74094', 'Beijing', 'China', 40.0112166, 115.9051013, 'Possimus voluptatum laborum ullam. Repudiandae voluptates soluta sunt sit corporis voluptas. Soluta aut sequi molestiae ut ut. Possimus ratione qui autem omnis. Consequatur amet aut et.', NULL, '1991-10-03 00:00:00'),
(19, 4, 'Ipsam ut et quibusdam nihil.', 'Cale Strosin Jr.', 'couple', 'bar', '500 Flatley Springs Apt. 259\nLake Maymieview, VT 55243', 'Hanoi', 'Vietnam', 21.02776442, 105.83415982, 'Omnis aperiam sunt repellat totam est architecto. Accusantium eligendi ab autem est eveniet consequuntur. Nisi omnis voluptatem dolore rem cumque. Ratione ipsam maxime eum et deserunt fugiat ex. Qui et quia eos.', NULL, '1997-08-17 00:00:00'),
(20, 1, 'Maxime ut sint amet deserunt delectus.', 'Cathryn Spinka', 'famille', 'night-club', '58910 Ramona Ridges\nElmirashire, MA 64108-4990', 'Cape Town', 'South Africa', -33.92486852, 18.42405533, 'Est fugiat et voluptatem ratione cum molestiae est. Omnis voluptatem amet deserunt atque adipisci sequi. Non ea similique sit vitae ea. Maxime soluta consequuntur occaecati. Et enim sit dignissimos quasi aliquid.', NULL, '1972-04-03 00:00:00'),
(21, 4, 'Vero mollitia voluptates laboriosam eaque vel.', 'Garret Hoeger', 'couple', 'loisir', '1675 King Drive Suite 261\nLangoshtown, CA 10769', 'Alexandria', 'Egypt', 31.2120301, 29.9162827, 'Qui eos harum nam qui architecto rerum earum. Eligendi ut ab dicta qui vel veniam aut. Odio repudiandae quia vero quia praesentium voluptatem. Nemo deleniti dolorum deleniti itaque fugit. Perspiciatis atque nemo et et cumque debitis aut. Est perferendis eius voluptatum mollitia. Eius ipsam facere delectus enim eum sit deleniti.', NULL, '2007-11-20 00:00:00'),
(22, 1, 'Dicta voluptatem officia sed error eos.', 'Filiberto Russel', 'solo', 'restaurant', '427 Kennedy Walks Suite 077\nJailynberg, MS 65367', 'Jakarta', 'Indonesia', -6.20876342, 106.845599, 'Voluptas magnam quae rerum ut culpa sapiente autem. Non rerum ut non quis itaque. Ullam aspernatur et corrupti nisi et. Officia officiis nihil debitis a nesciunt hic ut. Ratione omnis odio temporibus velit odit et.', NULL, '1981-03-07 00:00:00'),
(23, 4, 'Non dolorem sapiente natus autem.', 'Grover Keeling', 'amis', 'loisir', '7912 Gino Extensions\nWest Ayla, DC 02027', 'London', 'United Kingdom', 51.50735091, -0.1277583, 'Unde quia eius sequi ratione aliquid laudantium libero. Dolorem deserunt quas in. Nisi perspiciatis atque eaque occaecati. Consequatur reiciendis quis pariatur rerum. Doloremque minima id est distinctio culpa.', NULL, '1985-11-26 00:00:00'),
(24, 3, 'Hic dolor libero iste minus facilis.', 'Flo Kuhic V', 'couple', 'loisir', '206 McCullough Rapids Suite 632\nSouth Furmanfort, ID 11039-5696', 'Cairo', 'Egypt', 31.2290088, 29.9520992, 'Sunt quia consequatur odio facilis. Laborum explicabo nemo tempore aperiam et. Labore eius dolores ipsam in voluptas debitis eos ea. Totam pariatur mollitia eum in quaerat et. Fuga autem eum veniam ipsa voluptate accusamus molestias.', NULL, '1972-11-25 00:00:00'),
(25, 1, 'In rerum dolores labore illum atque quidem nulla.', 'Giuseppe Senger', 'famille', 'shopping', '900 Paucek Lane\nEast Estherstad, MO 33335-5396', 'Tianjin', 'China', 39.0841583, 117.2009832, 'Corrupti mollitia eligendi esse commodi ea dolor. Sed delectus velit pariatur unde. Quis ad facilis sequi quia. Qui quis minima iste quidem harum officia minima.', NULL, '2014-03-27 00:00:00'),
(26, 11, 'Facere ut molestias sit.', 'Prof. Francis Cormier II', 'amis', 'restaurant', '16105 Joan Canyon\nWest Andrebury, LA 49874', 'Hong Kong', 'China', 22.3964282, 114.1094973, 'Laborum et qui aut ad optio quaerat. Rem omnis recusandae similique maxime non ullam nostrum. Dolorem aspernatur ab quas. Tempore voluptates voluptatibus maxime quia id magnam. Doloremque veniam ea placeat. Necessitatibus fuga eveniet odit ut id deleniti quos ipsum. Sed ipsa et repudiandae quidem aliquid sequi distinctio.', NULL, '1995-07-22 00:00:00'),
(27, 1, 'Delectus deserunt quas iure sint.', 'Fay Lesch', 'amis', 'loisir', '4533 Cordia Lodge Apt. 283\nNew Alexzanderville, IN 96570', 'Bogota', 'Colombia', 4.71098861, -74.0720921, 'Sed est at quaerat modi quia qui. Nam saepe nam ab quaerat voluptatum fugiat. Saepe architecto rerum dolor laborum. Suscipit molestias vitae dicta asperiores et.', NULL, '1993-08-30 00:00:00'),
(28, 11, 'Dolorem ea dolorem soluta veritatis enim.', 'Fidel Dicki', 'amis', 'night-club', '41394 Kovacek Meadow\nMcLaughlinport, TX 12482', 'Yangon', 'Myanmar', 16.86606941, 96.1951323, 'Qui fugiat itaque nihil a quis dolorem amet. Veritatis officia nostrum similique qui minus. Possimus dignissimos aut sit sunt maxime dolorem velit. Cupiditate asperiores enim odit harum eveniet temporibus ut deserunt.', NULL, '1994-05-12 00:00:00'),
(29, 11, 'Dicta alias iste explicabo explicabo natus.', 'Leora Zboncak', 'solo', 'patrimoine', '2470 Kim Island Suite 001\nMyrtisberg, AZ 58883-8028', 'Yangon', 'Myanmar', 16.8660694, 96.1951323, 'Debitis ducimus provident occaecati aut ut neque. Assumenda alias quis ea molestiae dolores minima distinctio. Ut accusantium earum quia explicabo rerum saepe. Aspernatur rem ut exercitationem tenetur enim aut labore. Rem officiis et vel sequi quo est. Facere voluptas amet est cumque tempore voluptatem explicabo voluptatum. Sit nihil et voluptatum id totam.', NULL, '1994-04-22 00:00:00'),
(30, 1, 'Consequatur enim et in ea sed id molestiae.', 'Eudora Veum', 'solo', 'shopping', '7200 Tate Springs Apt. 324\nRohanbury, SD 93290-8316', 'Jakarta', 'Indonesia', -6.20876343, 106.8455991, 'Ipsam aut quod magni provident nisi ut ullam. Eveniet quibusdam architecto quia. Consequatur eum nostrum fuga nesciunt. Eos earum voluptas praesentium voluptatibus laboriosam et cum. Delectus laudantium sunt magni. Voluptas ea molestiae optio aut ipsa.', NULL, '1995-01-21 00:00:00'),
(31, 2, 'Corrupti autem ex quasi quis.', 'Prof. Alexander Fisher', 'famille', 'night-club', '70901 Lauryn Unions\nNorth Roelton, FL 57460-5614', 'Nairobi', 'Kenya', -1.29206592, 36.82194622, 'Ab neque non voluptas ut eligendi voluptatem ut. Est distinctio est tempora hic autem a. Sequi maxime vel quae ut ipsam magnam. Assumenda eos ipsam neque dolorem magnam corporis dolorem accusamus.', NULL, '1975-10-27 00:00:00'),
(32, 4, 'Enim et explicabo earum fugiat iusto error.', 'Coy Hegmann', 'amis', 'patrimoine', '773 Dereck Stravenue\nAlvafort, RI 16103-4898', 'Tehran', 'Iran', 35.68919751, 51.38897363, 'Harum ipsum inventore et velit est ut. Eum est sequi voluptas dolorum quis aut. Velit praesentium at voluptatem alias qui. Velit ut aut ipsa necessitatibus. Harum doloremque quod vitae sit eaque incidunt. Dolor placeat dolor odit unde dolore rerum.', NULL, '1981-10-31 00:00:00'),
(33, 2, 'Et blanditiis cupiditate voluptatibus a dolorem.', 'Ms. Eve Ferry Sr.', 'solo', 'restaurant', '65589 Tyrese Island\nAgustinaview, NC 15311', 'Pyongyang', 'North Korea', 39.0392193, 125.76252411, 'Delectus fugit qui autem est aut. Nostrum molestiae animi nihil quas totam maiores est. Nesciunt vitae sit consequatur quam vel maxime et. Distinctio consequatur libero aut tempore explicabo aut nihil. Facilis alias qui atque.', NULL, '2002-01-17 00:00:00'),
(34, 1, 'Possimus id praesentium omnis delectus qui.', 'Carolyn Rohan MD', 'amis', 'bar', '445 Kozey Flat Apt. 873\nTillmanshire, AR 38493', 'Hanoi', 'Vietnam', 21.0277644, 105.8341598, 'Dolores illo in autem omnis voluptatem quaerat dolores. Nostrum numquam dolor non dicta illo nesciunt. Eos amet nobis est neque dolores qui rerum et. Impedit ut aut voluptatem maiores porro ea. Odit ut quasi ea laboriosam ad.', NULL, '2016-05-24 00:00:00'),
(35, 3, 'Ratione eos occaecati sapiente.', 'Jasmin Koss', 'famille', 'hebergement', '1195 Beier Ferry\nLake Rethaberg, TX 26443', 'Shanghai', 'China', 31.2304163, 121.4737013, 'Repellat ipsam accusantium qui recusandae aliquid. Unde sed id commodi quod. Illum explicabo non accusamus voluptate ea est et est. Tempore at ut non excepturi omnis enim sequi. Fugiat sint incidunt eum est at.', NULL, '1983-04-19 00:00:00'),
(36, 1, 'Corporis aliquid dolorem quibusdam.', 'Dallin Hettinger II', 'solo', 'bar', '7248 DuBuque Plaza\nEast Christellebury, WY 93144', 'Karachi', 'Pakistan', 24.86146221, 67.00993883, 'Ut provident sit cumque neque iusto est rerum. Eaque et doloribus veniam earum omnis nihil. Perspiciatis itaque quam in vel neque sint. Libero dolore aspernatur incidunt debitis. Illo cupiditate dolor debitis explicabo. Quod sed doloremque sed est ex.', NULL, '1989-08-27 00:00:00'),
(37, 3, 'Quod sint quam veritatis cupiditate.', 'Cassandra Schumm DDS', 'couple', 'shopping', '428 Jacklyn Place\nLubowitzland, GA 23801', 'Yangon', 'Myanmar', 16.86606943, 96.1951323, 'Dolorem placeat consequatur quisquam unde. Aspernatur est illum voluptate est est. Omnis necessitatibus facere est excepturi quia. Assumenda perspiciatis enim aut ab iure voluptatum. Aliquam delectus recusandae ullam nisi et. Sit debitis velit magnam. Incidunt autem quos labore reprehenderit nesciunt cupiditate suscipit.', NULL, '2013-12-31 00:00:00'),
(38, 2, 'Voluptatem vitae asperiores atque est cum et est.', 'Garrick O\'Hara', 'couple', 'loisir', '9891 Lesly Rapids\nWest Augustine, TN 11428', 'Shenyang', 'China', 41.805699, 123.431472, 'Consectetur sed similique maiores omnis. Maxime ut sed sit qui maiores nisi eum. Odio similique ut vero qui dolor pariatur beatae. Dolore est ut est enim labore repellendus. Porro ad ducimus qui omnis est omnis tempora. Et molestiae earum et quae enim sint aspernatur impedit. Eum quo porro non eveniet sapiente.', NULL, '1996-09-02 00:00:00'),
(39, 3, 'Ad ut in accusantium doloremque.', 'Savannah Cremin', 'amis', 'shopping', '99589 Little Trail Suite 654\nNorth Tesstown, HI 64667', 'Hong Kong', 'China', 22.3964283, 114.1094971, 'Expedita voluptates iure labore animi quibusdam corporis maiores. Cum veniam ullam in modi hic eum. Enim voluptate minima cumque aut necessitatibus voluptatibus enim necessitatibus. Provident doloremque incidunt quaerat vitae nostrum. Et suscipit ea eos eaque.', NULL, '2004-12-01 00:00:00'),
(40, 1, 'Assumenda voluptatem itaque quam enim nulla.', 'Wyman Lakin', 'famille', 'hebergement', '7567 Ewell Views Suite 848\nPort Bernadettefurt, CA 07901-1969', 'Cape Town', 'South Africa', -33.92486853, 18.42405533, 'Accusamus qui magnam saepe consequatur consequuntur labore. Sed molestias quaerat qui voluptas saepe quae. Architecto magnam eos consequatur laboriosam perferendis non amet. Inventore et sed voluptas vitae. Ut non nihil atque voluptates et sapiente rerum ab. Dolores qui consequuntur eligendi sed perspiciatis dolores.', NULL, '1985-02-28 00:00:00'),
(41, 1, 'Corrupti iure cumque cum quasi sed.', 'Dr. Isidro Zboncak III', 'famille', 'loisir', '640 Aubrey Villages Suite 514\nReynoldschester, MS 33089-9626', 'Guangzhou', 'China', 23.129111, 113.2643851, 'Maxime eveniet animi eaque error omnis eos sed. Fugiat aspernatur omnis magni optio. Quos repellendus ipsam dolor sed incidunt incidunt impedit. Libero quas quo cum accusantium autem odio.', NULL, '2006-02-18 00:00:00'),
(42, 1, 'Officiis est officiis quia error.', 'Ms. Freeda Stamm MD', 'couple', 'bar', '462 Tom Junction\nSouth Coty, OK 67135-6974', 'Kolkata', 'India', 22.5726463, 88.363895, 'Beatae enim ratione tempora perspiciatis. Aut ut esse accusantium asperiores. Fugiat accusamus rerum facere excepturi. Ducimus deserunt velit repellat sint fugit sit. Earum eos impedit eos qui.', NULL, '1976-09-14 00:00:00'),
(43, 4, 'Dicta totam atque in odio et sed ipsum.', 'Oliver Steuber', 'amis', 'hebergement', '2778 Upton Rest\nKirlinside, SC 87017', 'Yangon', 'Myanmar', 16.86606941, 96.1951323, 'Molestiae vero sed ratione quisquam totam amet. Enim occaecati ut hic velit. Vero tempora vitae sit et. Et placeat blanditiis ex ipsum. Nobis aut mollitia natus ab soluta ex et. Ut non maiores harum et veniam possimus. Est sit laborum quis eos.', NULL, '2005-12-19 00:00:00'),
(44, 1, 'Sequi ea omnis quibusdam quia itaque est.', 'Felicia Veum', 'famille', 'loisir', '1051 Antwon Trafficway\nChristelleburgh, WY 41096', 'Durban', 'South Africa', -29.8586804, 31.02184041, 'Porro nam a aliquid quos eos velit. Nesciunt et accusantium ut consequatur ducimus earum consectetur. Iure voluptatum voluptate rerum temporibus quam doloremque omnis. Dolore aut dolorem cumque quam. Et incidunt qui natus dolorem.', NULL, '1973-06-26 00:00:00'),
(45, 4, 'Necessitatibus hic nihil placeat eos sunt autem.', 'Angus Ankunding', 'couple', 'night-club', '2031 Magdalena Harbor Suite 602\nNew Justice, TX 78238-5300', 'Suzhou', 'China', 31.298979, 120.585291, 'Non dolores voluptatibus similique. Ea accusantium perferendis voluptas sit quasi natus omnis. Consectetur consequatur sed totam nobis occaecati ratione. Vero ipsum sequi laboriosam sunt ut. Nulla corporis sit atque amet et aspernatur. Aut voluptatem molestias deserunt nihil. Sunt ut nobis molestias nulla sit debitis.', NULL, '1972-04-23 00:00:00'),
(46, 11, 'Facilis voluptas dolorum veritatis qui.', 'Hillard Luettgen', 'amis', 'night-club', '324 Smith Port\nSamantaton, CA 65368-6647', 'Berlin', 'Germany', 52.52000661, 13.4049542, 'Autem facilis rem doloremque dolor eaque. Libero totam sed qui inventore. Veniam dolor temporibus iste placeat voluptatem. Voluptatibus unde deserunt aut quo et. Veritatis repellendus qui voluptatem molestias et. Explicabo aut vero quis sunt alias molestiae deleniti.', NULL, '1984-11-01 00:00:00'),
(47, 1, 'Quo commodi quia nulla molestias.', 'Gabriel Lindgren', 'solo', 'night-club', '968 Gust Burg Apt. 331\nNorth Alena, UT 62975-8063', 'Madrid', 'Spain', 40.41677543, -3.70379022, 'Aspernatur illo impedit nam dolorem ut libero voluptatem. Sequi odio expedita quia voluptatibus officia eum cumque. Ut dolores laudantium eum nobis repellendus sapiente. Vel blanditiis et accusantium quibusdam distinctio dolore ex. Molestias quidem officia quibusdam corporis commodi. Nihil rerum amet maxime id itaque voluptas.', NULL, '1979-05-26 00:00:00'),
(48, 11, 'Laudantium facilis enim eius dolorem molestiae.', 'Miss Aryanna Morissette DDS', 'famille', 'shopping', '3988 Goldner Stream Suite 164\nBoscoburgh, NE 59207-9030', 'Cairo', 'Egypt', 30.0444196, 31.2357116, 'Porro incidunt natus nisi omnis. Itaque est ut temporibus. Quae voluptas incidunt qui eaque eum. In omnis possimus et officia omnis magni quidem libero. Eos veniam et et et.', NULL, '2008-12-10 00:00:00'),
(49, 2, 'Quo aut omnis cum ad repellendus omnis labore et.', 'Prof. Cary Heller V', 'amis', 'shopping', '664 Gerlach Unions Suite 791\nCarissaport, MS 60502', 'Pune', 'India', 18.52043033, 73.85674371, 'Et id enim animi. Similique fuga omnis nihil voluptatem rerum asperiores nobis fugit. Error nihil eveniet ea ipsa facilis praesentium excepturi. Excepturi assumenda ea repudiandae molestias a et harum nisi. Asperiores rerum et aperiam.', NULL, '1979-12-30 00:00:00'),
(50, 3, 'Quis esse at sunt.', 'Paul Haag', 'amis', 'bar', '1587 Orie Isle Apt. 986\nFrederickberg, AK 61275', 'Ho Chi Minh City', 'Vietnam', 10.82309891, 106.62966381, 'Ex voluptatibus mollitia omnis. A rerum libero in fugiat sit voluptatem voluptatem. Eius similique culpa magni repudiandae est. Hic velit eius harum natus. Ut sunt quod assumenda ullam omnis voluptas hic.', NULL, '1975-03-19 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `user_picture` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `date_user` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `user_picture`, `login`, `role`, `password`, `date_user`) VALUES
(1, 'Test', '', 'test@test.com', '', '$2y$10$N9pG8gpAzUQyP/3ryLG3OOsF3EbCRs30W38MImNLSHeaNmmcB/qI2', '2016-06-20 19:22:42'),
(2, 'emeric', '', 'emeric.godin@outlook.fr', '', '$2y$10$F1sM/ymeL7qd5SkpHJJZRuHUz/UQBCaxmF02ga9u5giUmJRIJiop6', '2016-06-21 11:18:10'),
(3, 'bonjour', '', 'bonjour.bonjour@bonjour.com', '', '$2y$10$V2XS8PWZbO3TSyvT4HCMTOZvQi4wATNTO6E/N/MAKJOB3gUFhzHOy', '2016-06-22 10:25:15'),
(4, 'katia', '', 'katia.lamargot@wf3.com', 'user', '$2y$10$BbIB7g2y7E1RDGON.3Pdn.Kup/KGb9NJ87DwOGTxeF.4JhmMFyVJy', '2016-06-22 10:28:58'),
(11, 'titi', 'agent.png', 'titi@hotmail.fr', 'user', '$2y$10$15W8OH2bptO5cueNVOLEK.SA8ZeeGHkxyOZUykVj5zOjmzw4TxjTe', '2016-06-27 16:38:28');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_photo_post1_idx` (`post_id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_user1_idx` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `fk_photo_post1` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;