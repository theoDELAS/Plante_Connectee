-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 11 Juin 2019 à 14:37
-- Version du serveur :  10.1.38-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_plantes`
--

-- --------------------------------------------------------

--
-- Structure de la table `plante_select`
--

CREATE TABLE `plante_select` (
  `id_slct` int(11) NOT NULL,
  `id_plante` int(11) DEFAULT NULL,
  `id_rlv` int(11) DEFAULT NULL,
  `id_bool` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `releve`
--

CREATE TABLE `releve` (
  `id_rlv` int(11) NOT NULL,
  `rlv_humidite` int(11) NOT NULL,
  `rlv_temperature` int(11) NOT NULL,
  `rlv_luminosite` int(11) NOT NULL,
  `Time` varchar(50) DEFAULT NULL,
  `id_table_releve` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `releve`
--

INSERT INTO `releve` (`id_rlv`, `rlv_humidite`, `rlv_temperature`, `rlv_luminosite`, `Time`, `id_table_releve`) VALUES
(97, 0, 22, 0, '2019-06-11 13:31:17', 7),
(98, 0, 22, 0, '2019-06-11 13:31:22', 7),
(99, 0, 22, 58, '2019-06-11 13:31:27', 7),
(100, 0, 22, 0, '2019-06-11 13:31:32', 7),
(101, 0, 22, 0, '2019-06-11 13:31:37', 7),
(102, 0, 22, 0, '2019-06-11 13:31:42', 7),
(103, 0, 22, 0, '2019-06-11 13:31:47', 8),
(104, 0, 22, 0, '2019-06-11 13:31:52', 8),
(105, 0, 22, 0, '2019-06-11 13:31:57', 8),
(106, 0, 22, 0, '2019-06-11 13:32:03', 8),
(107, 0, 22, 0, '2019-06-11 13:32:08', 8),
(108, 0, 22, 0, '2019-06-11 13:32:13', 8);

-- --------------------------------------------------------

--
-- Structure de la table `tb_plantes`
--

CREATE TABLE `tb_plantes` (
  `id_plante` int(11) NOT NULL,
  `plante_nom` varchar(65) NOT NULL,
  `plante_categorie` varchar(65) NOT NULL,
  `plante_description` text,
  `plante_humidite` int(11) NOT NULL,
  `plante_photo` varchar(150) NOT NULL,
  `plante_luminosite` int(11) NOT NULL,
  `plante_periode` varchar(65) NOT NULL,
  `plante_temperature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `tb_plantes`
--

INSERT INTO `tb_plantes` (`id_plante`, `plante_nom`, `plante_categorie`, `plante_description`, `plante_humidite`, `plante_photo`, `plante_luminosite`, `plante_periode`, `plante_temperature`) VALUES
(1, 'vide', 'vide', 'vide', 0, 'vide', 0, '00-00 ', 0),
(4, 'curcuma', ' Zingibéracées', 'Le curcuma est une belle plante exotique. Ses bractées colorées illuminent massifs et potées durant la belle saison. ', 80, 'https://www.rustica.fr//images/curcuama-bg150829-158-l750-h512.jpg', 50, '01-10', 26),
(5, 'ficus', 'Moraceae', 'Prenez soin de votre Ficus saison après saison, pour une belle plante aux feuilles bien vertes et au port bien droit ! ', 70, 'https://mediasv6.truffaut.com/Articles/jpg/0475000/475398_003_350.jpg', 80, ' 07-09', 26),
(6, 'fraisier', 'Rosaceae', 'Le fraisier est une plante dont les fruits, à la chair tendre et parfumée, évoquent l été, le soleil et la fraîcheur. ', 70, 'https://www.jardindupicvert.com/2751-large_default/fraisier-anais-remontant.jpg', 80, ' 03-06', 26),
(7, 'glycine', 'dicotylédones ', 'La glycine embellit les espaces par sa cascade de fleurs très parfumées de couleur violet, rose ou blanc. ', 70, 'https://www.jardindupicvert.com/3969-large_default/glycine-de-chine-caroline-.jpg', 80, ' 07-09', 26),
(8, 'hibiscus', ' dicotylédones', 'L hibiscus enchante nos jardins avec ses innombrables corolles colorées et nous fait voyager vers les mers de Chine. ', 70, 'https://jardinage.lemonde.fr/images/dossiers/historique/ibiscus-183517.jpg', 80, ' 03-05', 26),
(9, 'hortensia', ' dicotylédones', 'L hortensia est un arbuste facile à vivre, très florifère, souvent utilisé en massif ou en haie. ', 70, 'https://www.jardiner-malin.fr/wp-content/uploads/2019/01/hortensia.jpg', 80, ' 09-12', 26),
(10, 'marguerite', ' dicotylédones', 'La marguerite peut être plantée soit en semis, soit en plantes achetées en godet.', 70, 'https://www.jardindupicvert.com/3992-large_default/marguerite-commune.jpg', 80, ' 04-06', 26),
(11, 'mimosa', 'Mimosaceae', 'Véritables boules d or parfumées, les mimosas en fleurs attirent le regard de très loin. ', 70, 'https://www.detentejardin.com/sites/art-de-vivre/files/dj123_mimosa_fleurisse_0.jpg', 80, ' 03-04', 26),
(12, 'muguet', 'Monocotylédone', 'Le muguet, symbole du 1e mai et chouchou des parfumeurs est aussi la plante du bonheur. ', 70, 'https://www.jardiner-malin.fr/wp-content/uploads/2017/05/muguet.jpg', 80, ' 03-04', 26),
(13, 'romarin', ' dicotylédones', 'Le romarin est une plante très aromatique qui agrémente particulièrement les grillades de viandes et de poissons.', 70, 'https://www.plantearomatique.com/1093-large_default/romarin-barbecue.jpg', 80, ' 03-04', 26),
(14, 'thym', ' dicotylédones', 'Le thym, sous sa forme commune, est une plante importante de la pharmacopée, et particulièrement dans le Sud de la France où elle pousse naturellement.', 70, 'https://www.graines-semences.com/1455/thym-de-provence-350-graines.jpg', 80, '09-10', 26),
(15, 'tomate', ' dicotylédones', 'Cette plante annuelle aux multiples formes s est imposée dans tous les potagers des campagnes comme des villes. ', 70, 'https://media.ooreka.fr/public/image/plant/265/mainImage-full-10006175.jpg', 80, '08-11', 26),
(16, 'Campanule', ' dicotylédones', 'La campanule est une ravissante fleur en forme de cloche ou d etoile.', 70, 'https://media.ooreka.fr/public/image/plant/8/mainImage-full-9131531.jpg', 80, '08-11', 26),
(17, 'poirier', 'Rosacées', 'Les bambous originaires dAsie donnent au jardin, à la terrasse ou au balcon une touche japonaise par leur simple présence.', 70, 'https://www.jardindupicvert.com/19480-large_default/poirier-condo-.jpg', 80, '08-11', 26),
(18, 'abricotier', 'Rosacées', 'Pour s épanouir, l abricotier demande du plein air, une terre bien drainée et la générosité du soleil. ', 70, 'https://jardinage.lemonde.fr/images/dossiers/2017-02/abricotier-164853.jpg', 80, '08-11', 26),
(19, 'pommier', 'Rosacées', 'Le pommier, de la famille des Rosacées, est le fruitier le plus cultivé dans toute l Europe.', 70, 'https://media.ooreka.fr/public/image/plant/1/mainImage-source-9207000.jpg', 80, '08-11', 26),
(20, 'prunier', 'Rosacées', 'Le prunier est un arbre rustique pour tout climat originaire d Europe et d Asie Mineure. ', 70, 'https://media.ooreka.fr/public/image/plant/29/furtherImage/aq0eqm90gtcg88wog8coc4gsg-source-9206335.jpg', 80, '08-11', 26),
(21, 'bananier', 'Rosacées', 'Plante tropicale de la taille d un arbre, le bananier aime la chaleur et l humidité.', 70, 'https://www.promessedefleurs.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/M/u/Musa-basjoo-78039-1.jpg', 80, '08-11', 26),
(22, 'amandier', 'Rosacées', 'L amandier est un fruitier du Midi à cause de sa floraison précoce, qui le fait craindre les gelées printanières.', 70, 'https://www.jardindupicvert.com/6133-medium_default/amandier.jpg', 80, '08-11', 26),
(23, 'cerisier', 'Rosacées', 'Parmi les arbres fruitiers, le cerisier est un de ceux qui demandent le moins de soins et qui produisent le plus facilement.', 70, 'https://www.jardindupicvert.com/349-large_default/cerisier-du-japon-accolade-.jpg', 80, '08-11', 26),
(24, 'figuier', 'Rosacées', 'Le figuier est un arbre fruitier d une grande longévité, peu rustique, ses rameaux ne résistant pas à un froid descendant sous -10°C. ', 70, 'https://www.jardindupicvert.com/19487-large_default/figuier-kadota-.jpg', 80, '08-11', 26),
(25, 'pêcher', 'Rosacées', 'Le pêcher est un arbre fruitier qui exige quelques soins avant la récolte de pêches.', 70, 'https://media.ooreka.fr/public/image/plant/21/mainImage-source-9178857.jpg', 80, '08-11', 26),
(26, 'olivier', 'Rosacées', 'L olivier, symbole de la Provence, est un arbre roi au jardin, sur un balcon ou une terrasse. ', 70, 'https://www.jardiner-malin.fr/wp-content/uploads/2018/10/olivier.jpg', 80, '08-11', 26),
(27, 'merisier', 'Rosacées', 'Le merisier est un très bel arbre sauvage bien connu pour son bois et pour ses fruits. ', 70, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Prunus_avium.jpg/290px-Prunus_avium.jpg', 80, '08-11', 26),
(28, 'noisetier', 'Rosacées', 'Planter un noisetier au jardin présente évidemment l avantage de pouvoir récolter des noisettes.', 70, 'https://www.pepiniere-lcf.fr/boutique/images_produits/corylus-maxima-purpurea2-z.jpg', 80, '08-11', 26),
(29, 'noyer', 'Rosacées', 'Avec son bois très recherché en ébénisterie, ses fruits riches en huile, son brou teintant et ses feuilles aux usages médicinaux, le noyer est un arbre civilisateur.', 70, 'https://www.jardindupicvert.com/12735-large_default/noyer-commun.jpg', 80, '08-11', 26),
(33, 'Jean kevin', 'joueur fortnite', 'possede trotinette électrique', 100, 'https://i.ytimg.com/vi/Oj19hGTp89s/maxresdefault_live.jpg', 90, '01-12', 999),
(36, 'df', 'sdf', 'sdf', 10, 'fgh', 50, '1-3', 40);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `plante_select`
--
ALTER TABLE `plante_select`
  ADD PRIMARY KEY (`id_slct`),
  ADD KEY `id_plante` (`id_plante`),
  ADD KEY `id_rlv` (`id_rlv`);

--
-- Index pour la table `releve`
--
ALTER TABLE `releve`
  ADD PRIMARY KEY (`id_rlv`),
  ADD KEY `id_table_releve` (`id_table_releve`);

--
-- Index pour la table `tb_plantes`
--
ALTER TABLE `tb_plantes`
  ADD PRIMARY KEY (`id_plante`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `plante_select`
--
ALTER TABLE `plante_select`
  MODIFY `id_slct` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `releve`
--
ALTER TABLE `releve`
  MODIFY `id_rlv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT pour la table `tb_plantes`
--
ALTER TABLE `tb_plantes`
  MODIFY `id_plante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
