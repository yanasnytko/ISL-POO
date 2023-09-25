--
-- Base de données: `poo_php`
--
CREATE DATABASE IF NOT EXISTS poo_php;
USE poo_php;

--
-- Structure de la table `vehicules`
--
CREATE TABLE IF NOT EXISTS `vehicules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(30) NOT NULL,
  `modele` varchar(30) NOT NULL,
  `nbPortes` int(11) NOT NULL,
  `vitesse` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

--
-- Contenu de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `marque`, `modele`, `nbPortes`, `vitesse`) VALUES
(1, 'vw', 'golf', 5, 0),
(2, 'opel', 'corsa', 5, 0),
(3, 'peugeot', '308', 5, 0),
(4, 'bmw', '320', 4, 0),
(5, 'audi', 'a4', 4, 0),
(6, 'seat', 'leon', 5, 0);