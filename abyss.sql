-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 05 jan. 2021 à 13:12
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abyss`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `synopsis` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `année` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `Titre`, `Genre`, `synopsis`, `année`) VALUES
(1, '20 000 lieues sous les mers', 'Aventure', '1868. Depuis quelque temps, sur tous les océans du globe, les navires sombrent dans d\'étranges circonstances. Les rescapés de ces naufrages en attribuent la cause à un mystérieux monstre qui éperonne les vaisseaux. À San Francisco, le professeur Pierre Aronnax, accompagné de son domestique Conseil, de même que le harponneur Ned Land, embarquent à bord d\'une frégate affrétée par la marine américaine dans le but de traquer le monstre...', 1954),
(2, '47 Meters Down', 'Thriller', 'Deux sœurs en vacances au Mexique sont prises au piège dans une cage d’observation de requins, au fond de l’océan. Elles n’ont que quelques heures pour remonter à la surface.', 2017),
(3, 'Abyss', 'Science-fiction', 'Quand un sous-marin américain coule dans l\'Atlantique, une équipe de recherche et de récupération des États-Unis (les SEAL) travaille avec l\'équipage d\'une plate-forme pétrolière, faisant la course contre les navires soviétiques, pour retrouver le navire. Au fond de l\'océan, ils rencontrent une nouvelle et mystérieuse espèce.', 1989),
(4, 'Aquaman', 'Super-héros', 'Arthur Curry, alias Aquaman, est un super-héros dont l\'univers de prédilection est le monde aquatique. Préférant vivre dans le monde des humains à la surface, les velléités bellicistes des Atlantes partisans de la guerre avec la Surface vont l\'amener à devenir le roi des océans', 2018),
(5, 'En Eaux troubles', 'Science-fiction', 'Jonas Taylor est un ancien capitaine de la Marine et un plongeur spécialisé dans les eaux profondes. Il est recruté pour plonger dans l\'océan Pacifique, pour sauver une équipe de scientifiques coincée dans l\'épave d\'un submersible attaqué et endommagé par un requin préhistorique de vingt mètres de long, connu sous le nom de Mégalodon. Engagé par un océanographe chinois, Taylor devra surmonter ses peurs et affronter une deuxième fois le prédateur qu\'il a auparavant rencontré lors d\'une expédition pour sauver des hommes et des femmes piégés dans les profondeurs de l\'océan.', 2018),
(6, 'Gang de Requins', 'Film-animation', 'Oscar, modeste employé au LavO\'Baleine, rêve de gloire. Pour frayer avec le gratin, il profite d\'un malentendu : étant témoin de la mort d\'un requin blessé mortellement par une ancre, il se fait passer pour un valeureux tueur de squales grâce à l\'amitié d\'un requin végétarien : Lenny.\r\n\r\nMalheureusement, les autres requins, dévastés, vont vouloir se venger du tueur de squales, ce qui va mettre Oscar en danger…', 2004),
(7, 'L’odyssée de Pi', 'Aventure-drame', 'Au Canada, l\'écrivain Yann Martel écoute les confessions d\'un Indien qui lui raconte l\'histoire extraordinaire qu\'il a vécue lorsqu\'il était adolescent. Cet homme se nomme Piscine Molitor Patel (d\'après la piscine Molitor) et est le fils du directeur d\'un parc zoologique à Pondichéry. Durant son enfance, Piscine, qui était le souffre-douleur de son école à cause de son prénom, a décidé de se présenter comme étant « Pi ». Sa famille, ne pouvant plus tenir le zoo, décide de déménager au Canada et de vendre leurs animaux. Pour ce faire, ils embarquent à bord d\'un cargo pour traverser l\'océan Pacifique, mais celui-ci fait naufrage. Pi se retrouve à la dérive dans l\'océan à bord d\'un canot de sauvetage accompagné de divers animaux dont un tigre du Bengale appelé Richard Parker. La hyène, agressive, tue le zèbre, puis l\'orang-outan. À son réveil, le tigre tue la hyène. Seul à bord avec Richard Parker, Pi va tout faire pour essayer de survivre et maintenir une bonne entente avec l\'animal.', 2012),
(8, 'La forme de l’eau', 'Fantastique', 'Modeste employée d’un laboratoire gouvernemental ultrasecret, Elisa mène une existence solitaire, d’autant plus isolée qu’elle est muette. Sa vie bascule à jamais lorsqu’elle et sa collègue Zelda découvrent une expérience encore plus secrète que les autres…', 2017),
(9, 'la petite sirène', 'Film-animation', 'Ariel, une jeune et belle sirène de seize ans, princesse du royaume d\'Atlantica, ne se satisfait pas de sa vie sous-marine et est fascinée par le monde des humains. Avec son meilleur ami Polochon, un poisson, elle collectionne des artéfacts venant de ce monde et va souvent à la surface rendre visite à Eurêka, un goéland qui, malgré ce qu\'il pense, connaît bien peu de choses sur la culture des humains. Elle ignore les avertissements de son père, le roi Triton, dirigeant d\'Atlantica, et de Sébastien, un crabe également conseiller du roi et chef d\'orchestre, qui lui disent que le contact entre les humains et le peuple de la mer est interdit...', 1989),
(10, 'Le grand Bleu', 'Drame, romantique', 'Jacques Mayol et Enzo MolinariNote 1 se connaissent depuis l\'enfance, dans les années 1960. Ils ont grandi ensemble en Grèce et partagent depuis toujours leur passion pour la mer. Mais à la suite de l\'accident au cours d\'une plongée et du décès de son père, Jacques revient en France. Vingt ans ont passé, mais la rivalité entre les deux hommes existe toujours. Le championnat du monde d\'apnée No Limit à Taormina en Sicile à la fin des années 1980 est l\'occasion pour les deux hommes de se retrouver et d\'explorer un monde que personne ne connaît mieux qu\'eux...', 1988),
(11, 'Le monde du silence', 'Documentaire', 'Le film commence avec une voix off récitant le texte suivant : « À cinquante mètres de la surface, des hommes tournent un film. Munis de scaphandres autonomes à air comprimé, ils sont délivrés de la pesanteur. Ils évoluent librement. »\r\n\r\nSe déplaçant à bord de la Calypso, l\'équipe de plongeurs tourna pendant des centaines d\'heures dans la Mer Méditerranée, le Golfe Persique, la Mer Rouge et l\'Océan Indien. Ils visitent notamment l\'épave du SS Thistlegorm1.', 1956),
(12, 'Les dents de la mer', 'Horreur', 'Pendant l\'été du 1er juillet 1974, sur l\'île d\'Amity, un groupe d\'étudiants fait la fête sur la plage. Une jeune femme s\'éloigne du groupe pour un bain de minuit alors que son flirt s\'endort sur la plage, ivre. Après quelques brasses, la jeune femme est attaquée par une force mystérieuse, elle tente de résister mais est happée et disparaît dans l\'eau en poussant des cris de terreur. Quelques secondes après, la mer retrouve son calme nocturne. Personne ne sait ce qui vient de se dérouler...', 1975),
(13, '2010: Moby Dick ', 'Science-fiction', 'Dans les années soixante, le sous-marinier Ahab et son équipage se font attaquer par une baleine préhistorique. Quarante ans plus tard, Ahab n\'a pas oublié. Aveuglé par la vengeance, il vole un sous-marin nucléaire et oblige une biologiste à l’aider dans sa périlleuse mission: tuer Moby Dick.', 2010),
(14, 'Le monde de Némo', 'Film-animation', 'Après la mort de sa compagne Corail et du reste de la couvée à la suite de l\'attaque d\'un barracuda, le poisson-clown Marin doit prendre soin de son fils unique, Nemo, handicapé par une nageoire atrophiée. Lors de son premier jour d\'école, Marin, inquiet, décide de le suivre à l\'occasion d\'une sortie scolaire. Afin de prouver sa valeur à ses copains, Nemo décide de nager jusqu\'à la surface pour toucher un mystérieux bateau. C\'est alors qu\'il se fait enlever par un plongeur...', 2003),
(15, 'Océans', 'Documentaire', 'Ce documentaire filme l\'océan et les créatures marines. Il s\'interroge également sur l\'empreinte que l\'homme impose à la vie sauvage et invite à la protection des océans, face à la pêche abusive, à la pollution et au réchauffement climatique.', 2009),
(16, 'Pirates des Caraïbes : Le Secret du coffre maudit', 'Fantastique', 'William Turner et Elizabeth Swann sont sur le point de se marier, lorsqu\'ils se font arrêter par Cutler Beckett, qui travaille pour la Compagnie britannique des Indes orientales. Ils ont en effet précédemment aidé le capitaine Jack Sparrow, un pirate, à échapper à la peine de mort. En échange de leur libération, William Turner accepte de partir comme émissaire à la recherche de Jack pour proposer un marché : l\'amnistie et une lettre de marque pour devenir corsaire en échange de sa boussole...', 2006),
(17, 'Titanic', 'Catastrophe, romance', 'En septembre 1996, Brock Lovett est le coordinateur d\'une équipe qui fouille méticuleusement l\'épave du célèbre Titanic, paquebot géant réputé insubmersible qui connut pourtant un destin tragique. Lovett espère mettre la main sur le Cœur de l\'Océan, un collier de diamants unique à la valeur inestimable, porté par Louis XVI, dont la découverte lui apporterait la gloire (ce bijou, en réalité fictif, est inspiré du diamant bleu de la Couronne). Lors de sa sixième plongée en sous-marin, il remonte des profondeurs un coffre-fort dont il espère qu\'il contient le précieux objet. Mais il n\'y trouve que quelques vieux billets de banque et un dessin représentant une jeune fille nue portant le fameux bijou en pendentif...', 1997),
(18, 'Underwater', 'Catastrophe horifique', 'Dans la fosse des Mariannes, endroit le plus profond de la croûte terrestre, la société Tian Industries emploie de nombreuses personnes dans des stations sous-marines. Après ce qui semble être un séisme, la station Kepler 822 est quasiment désintégrée. Norah Price, qui a donné l\'alerte, est parvenue à se réfugier dans une zone protégée. Seules quelques personnes ont survécu : l\'expérimenté capitaine W. Lucien, le déjanté Paul Abel, l\'étudiante en biologie marine Emily Haversham, son petit-ami ingénieur forage Liam Smith ainsi que le responsable système Rodrigo Nagenda. Piégés à plus de 10 000 mètres de profondeur, ils vont devoir survivre et tout tenter pour remonter à la surface. En plus de l\'eau, ils vont affronter de mystérieuses créatures.', 2020),
(19, 'Vaiana : La légende du bout du monde', 'film-animation', 'Les habitants de l\'île polynésienne de Motunui vénérent la déesse Te Fiti, qui aurait donné vie à l\'océan grâce à une pierre de jade, cœur de Te Fiti et source de son pouvoir. Maui, demi-dieu métamorphe du vent et de la mer, vole le cœur afin de donner aux humains le pouvoir de la création. Te Fiti se désintègre, et Maui est attaqué par une autre divinité en quête du cœur tant convoité : Te Kā, un démon volcanique. Dans la bataille, Maui est propulsé dans les airs, perdant son hameçon magique et le cœur, qui disparaissent au fond de l\'océan...', 2016),
(20, 'Waterworld', 'acyion post-apocalyptique', 'Dans un avenir lointain, la Terre est totalement recouverte d\'eau à la suite du réchauffement climatique ayant causé la fonte des glaces. L\'humanité vit désormais sur des atolls artificiels. Cependant, une légende circule : celle de Dryland, qui serait l\'unique terre encore émergée. Un mutant mi humain et mi poisson, accompagné par une jeune femme et une petite fille, vont partir retrouver Dryland. Ils affrontent et se confrontent à des pirates sanguinaires, nommés les Smokers et dirigés par le Diacre.', 1995);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
