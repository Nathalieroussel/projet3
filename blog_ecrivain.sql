-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 01 mars 2018 à 10:00
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog_ecrivain`
--
CREATE DATABASE IF NOT EXISTS `blog_ecrivain` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog_ecrivain`;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `report` int(11) NOT NULL DEFAULT '0',
  `pseudo` varchar(15) NOT NULL,
  `content` text NOT NULL,
  `date_comment` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_post`, `report`, `pseudo`, `content`, `date_comment`) VALUES
(27, 2, 0, 'Louis56', 'C\'est vraiment facile à lire et très bien écrit!', '2018-02-27 09:13:37'),
(25, 1, 1, 'Alicia24', 'Vraiment envie de lire la suite...Je m\'attends comme toujours à des rebondissements à chaque page.', '2018-02-27 21:24:29'),
(26, 1, 0, 'Marco', 'Je découvre le blog et par la même occasion l\'écrivain. Chouette idée!', '2018-02-26 14:47:40'),
(28, 2, 0, 'Marvindu24', 'Je suis fan depuis le premier roman et attend impatiemment de savoir comment va se dérouler la suite pour le héros du livre.', '2018-02-27 09:15:28'),
(29, 3, 0, 'Anthony68', 'Idée originale que je vais suivre au fil des chapitres!!!', '2018-02-27 09:16:26'),
(30, 3, 1, 'Sab0745', 'Bravo! Excellent premier chapitre!', '2018-02-27 09:17:34');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `pseudo`, `password`, `email`) VALUES
(1, 'jeanforteroche', 'poissons24', 'jeanforteroche_book@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `datePost` datetime NOT NULL,
  `image` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `datePost`, `image`) VALUES
(18, 'Chapitre 3', 'Il y a quelque chose en nous de pas très logique en apparence, qui nous porte vers l’autre et qui même nous enchaîne à une personne. Je veux bien qu’on appelle ça l’amour, mais c’est plus grave sans doute. Quand ça nous arrive, on est heureux d’être dépendant, obsédé, et on est même quasiment heureux d’être malheureux quand ça ne marche pas. Oui, l’amour rend con, tu n’as pas besoin de me le dire.\r\n\r\nCe que je dois te dire, c’est que d’ordinaire je suis très prudent devant ce genre de possession, parce que la plupart du temps, ce n’est pas moi qui vais vers l’autre, mais c’est l’autre qui vient vers moi, et je crois faire ce que je veux. Je ne suis pas un dragueur, et je crois n’avoir jamais été amoureux d’une femme sans la connaître déjà bien, ce qui aurait dû me protéger des désastres. Évidemment, j’en ai eu des désastres, et toujours, c’est moi qu’on quittait.\r\n\r\nJe n’ai pas l’amour méchant. Dans ce cas, avec Urszula, quand ça a commencé, j’étais sûr de mon coup, tellement elle était différente, et aujourd’hui je me demande ce qu’elle a réveillé ou touché en moi, qui a fait que je suis allé progressivement là où je ne voulais pas aller, pendant qu’elle faisait apparemment le chemin contraire.\r\n\r\nIl y a des femmes qui passent dans notre vie d’hommes et des hommes dans vos vies de femmes, avec lesquelles tout serait possible et pourtant il n’arrive rien et ils disparaissent comme ils sont venus, parce que la vie nous éloigne autant qu’elle nous rapproche. C’est un tourbillon, comme dit la chanson de Rezvani, que la voix de Jeanne Moreau a mis dans nos oreilles et dans nos têtes. Cette femme-là, Urszula, ne passait pas, elle restait, sept ans après notre première rencontre, et bien qu’il n’y ait eu aucune relation amoureuse déclarée, elle était toujours là, réapparaissait parfois après des mois de silence, jusqu’à ce qu’un jour elle fasse monter la tension en me demandant de venir la voir quasiment en urgence : elle devait me parler.\r\n\r\nJe suis venu. Je l’ai vue dans un bistrot d’un centre commercial près de chez elle. Elle avait un nouveau problème. Après sa thèse, on venait de l’engager à l’essai dans une autre banque que le Crédit Mortel, et là, de nouveau, la personne chargée de juger sa période d’essai avait avec elle un comportement qui la faisait souffrir et elle me demandait conseil. Comme d’habitude, j’écoutais, et je donnais deux ou trois bons conseils inutiles de DRH ou de syndicaliste, et là, tout à coup, je l’entends me dire « je ne pourrais pas vivre sans toi », les yeux baissés, comme malheureuse. Je n’ai rien dit de plus ce jour-là. J’étais plutôt étonné, mais bon, on se connaissait depuis longtemps, c’était peut-être une forme de remerciement et le français n’étant pas sa langue, il y avait peut-être une distance culturelle. On s’est fait la bise comme d’habitude. Elle devait continuer de me tenir au courant.\r\n\r\nEt tu ne lui as pas dit que c’était peut être un peu excessif ?\r\n\r\nPar ailleurs quand tu décris vos rencontres tu ne parles que de son besoin d’aide et toi ton envie d’aider, tu ne parles jamais du langage du corps\r\n\r\nEst ce qu’elle cherchait à te séduire avec tous les messages subliminaux que peut envoyer une femme par sa tenue, un parfum, une façon de sourire, de te regarder, d’orienter la conversation, de laisser entendre que, de se pencher vers toi ? Etiez vous complètement innocents?\r\n\r\nOn était pas complètement complètement « innocents », comme tu dis, parce que de temps en temps, dans des mails, il y avait un mot qui en disait plus que les autres, notamment il y avait eu l’apparition du mot « complice ». Nous étions devenus complices, parce qu’on ne parlait de nos rencontres à personne, et qu’on ne se voyait jamais avec une autre personne. Malgré tout, de mon côté, ce n’est qu’après ce jour-là que j’ai commencé à la regarder avec un début d’envie, et que son regard à elle a aussi changé. Oui, plus que des gestes, il y a eu des regards différents. Bien sûr que je trouvais excessif qu’elle me dise qu’elle ne pourrait pas vivre sans moi, comme j’ai trouvé plus tard totalement gênant qu’elle me dise « je suis toute à toi ». Tout ça n’était pas dans mes conceptions respectueuses et libres de l’amour, mais pour autant, je ne lui ai pas dit qu’elle exagérait ou autre doux reproche, et ça ne me ressemble pas de me taire autant. Je n’étais pas vraiment moi-même devant cette femme, dans le dialogue avec elle, mais je n’avais pas envie d’être autrement, ni de trop réfléchir.', '2018-02-26 04:03:36', 'pic3.jpg'),
(16, 'Chapitre 1', 'J’ai déjà raconté cette histoire tant de fois, mais à toi pas encore. Je l’ai racontée à des femmes, uniquement à des femmes, et il ne me viendrait pas à l’idée de la raconter à mes copains à qui je ne parle jamais de ce genre de choses. Je l’ai racontée, mais c’était il y a des années, et encore pas toute entière, pendant cette période tendue où j’étais encore plongé dedans, immergé jusqu’à y penser tout le temps. Ça se voyait à ma tête. On me disait : Qu’est-ce que tu as ? Tu as changé, tu as maigri. Tu es malade ? ou Tu es amoureux ? Je suis étonné encore aujourd’hui d’avoir émergé de cette pensée visqueuse et pénétrante, et tout content de ne pas être affreusement déçu par ce que je pourrais très bien vivre comme un énorme échec personnel. Je me sens meilleur au contraire, bien meilleur. Je crois que je suis lavé d’un tas de tares, des tares que j’avais même avant qu’elle commence, cette foutue histoire, bien sûr. Je ne l’ai jamais racontée de la même façon à chacune de mes confidentes,  approfondissant sans doute un peu plus à chaque nouvelle tentative, mais aussi omettant pour les unes ce que je développais pour les autres, ajoutant même parfois à ma grande honte des détails bien exagérés, pour ne pas dire faux. Je ne peux bien savoir ce que ça va donner avec toi. Je te fais confiance pour m’écouter de la manière qui me tirera le récit le plus juste.\r\n\r\nCe n’est rien de plus que l’histoire d’un vulgaire chagrin d’amour, si tu veux, mais ça peut être aussi celle d’un type, moi, qui frise la folie, ou aussi celle du parcours d’une femme, celle qui est la cause de tout, qui vit dans un monde qu’elle a inventé, parce qu’elle ne voit qu’une partie du monde où nous, nous vivons. Peut-être qu’en te la racontant, je vais aussi entendre une histoire nouvelle, et je ne veux pas laisser passer la chance que j’ai d’avoir une femme qui m’écoute, et qui est même prête à souffrir pour m’écouter, à me bousculer si j’en dis trop ou si je ne dis pas les choses qu’elle attend. Je ne te connais pas depuis longtemps, mais je sais déjà à quoi je dois m’attendre. C’est à la dernière qu’on en dit le plus, pour peu qu’elle vous écoute, je le sais, pas seulement parce que c’est à elle qu’on en a le plus à dire, logiquement, mais parce qu’on est dans cette volonté de se montrer comme on est, de se mettre à poil aussi bien mentalement qu’on l’a fait avec son corps, de courir ce risque qu’elle ne nous trouve pas beau, dans le but, sûrement, d’apaiser de sottes inquiétudes, de calmer des egos un peu louches.\r\n\r\nL’homme qui te parle était donc prêt à aller en Ukraine, à Sitka, à pied, parce qu’il croyait qu’il pouvait sauver une femme au crâne fêlé, qui avait cessé de l’aimer. Aller en Alaska, c’était remonter le plus loin possible dans sa vie pour la comprendre, et y aller doucement, tout doucement, pour bien avoir le temps que tout se mette en place dans sa tête bouillonnante, jusqu’à ce qu’il y voie clair, et qu’il trouve le mot qu’il faut pour qu’elle soit sauvée. Je n’arrive même pas à me raconter à la première personne…\r\n\r\nQu’est-ce qu’elle avait de si extraordinaire cette femme que je n’ai pas ? Et d’abord c’est quoi ce nom de ville à coucher dehors ?', '2018-02-25 00:50:53', 'pic1.jpg'),
(17, 'Chapitre 2', 'Elle s’appelle Urszula Wisniewski. Elle portait bien sûr le nom de son mari, Davoux, et je n’ai su que plus tard le nom polonais de ses parents. Elle faisait des remplacements à la banque, entrecoupés de longues périodes où je ne la voyais pas. C’est ce qu’elle avait toujours fait, travailler dans des banques, avant de quitter la Pologne, et aussi à Hong Kong où elle avait fait un séjour de plusieurs années pour suivre son mari qui est responsable financier pour une multinationale. Elle avait donc pas mal d’expérience professionnelle, mais malgré ça elle paraissait toujours embarrassée et ne parvenait pas à obtenir un poste permanent. Elle se présentait régulièrement quand la banque faisait une campagne de recrutement, mais elle était toujours recalée. Tout ça a duré des années, pendant lesquelles elle venait me voir de temps en temps, pour une raison ou pour une autre mais toujours liée à sa situation dans la banque. Après la première rencontre du cocktail, elle s’était adressée à moi pour l’aider à sortir d’un conflit avec une collègue, au nom d’une réputation d’ancien syndicaliste que j’avais. Je m’étais contenté de l’écouter. Je ne comprenais pas bien le conflit, mais dans sa manière de présenter les choses, je lui donnais raison, et je me disais que ça pouvait être grave. Après tout, les suicides dont je te parlais avaient ce genre de cause, une souffrance psychologique sur le lieu de travail. Le seul fait de l’écouter semblait la rassurer. De temps en temps, à la manière d’un psy, j’avais une idée et je lui disais par exemple : « Tu es sûre qu’elle ne se comporte comme ça qu’avec toi ? », ou « A mon avis, il ne cherche qu’à prouver son autorité. » Ou, en bon syndicaliste, je donnais mes conseils : « Ne fais surtout pas une démarche individuelle sur un coup de tête », ou « As-tu pensé à te syndiquer ? ».\r\n\r\nElle venait me voir aussi pour son avenir. Que fallait-il qu’elle fasse pour enfin être reconnue par le système et devenir quelqu’un dans la banque, être recrutée à un poste important ? Je trouvais logique cette ambition, vu qu’elle gravitait dans ce système depuis longtemps et que c’est ce que tout le monde voulait un jour ou l’autre à force d’y rester. Ce qui finissait par m’intriguer, c’est qu’elle n’y arrivait pas.\r\n\r\nAu fil de ces rencontres, qui au fil des années finirent par être nombreuses, elle me lâchait toujours quelque élément sur sa vie. Automatiquement, ma mémoire rangeait ainsi des bribes apparemment sans intérêt particulier, mais qui se reliaient entre elles en une sorte de synthèse qui me représentait la vie d’Urszula. Peu à peu, je me sentis aussi motivé pour porter mon attention sur elle en dehors de ce bureau où elle venait me voir. J’étais encore très loin d’être amoureux, et je ne sentais pas s’insinuer en moi cette attirance réciproque, et je prévoyais encore moins le danger vers lequel j’allais progressivement m’exposer. Lorsque j’ai appris qu’elle faisait des études universitaires censées lui permettre d’atteindre son ambition de convaincre une banque de lui offrir une vraie situation professionnelle, j’ai saisi l’occasion de la voir dans cet autre milieu.', '2018-02-25 15:59:51', 'pic2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
