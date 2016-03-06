# NewGame-.dev2018-my_blog
Florian Desjouis, Gaël Marguiller, Alexis Afonso

Projet de blog en groupe, 1ère année sup'internet


Identifiants de bdd dans config/dbconf.php :

"user" => "",

"password" => "",

Vhost document root :
../NewGamePlus.dev2018-my_blog/php/mvc/public

DirectoryIndex index.php

Shéma bdd:

CREATE TABLE IF NOT EXISTS `articles` (
  `titre` text NOT NULL,
  `article` text NOT NULL,
  `date` date NOT NULL,
  `id` int(13) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;


CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `conmmentaire` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;


CREATE TABLE IF NOT EXISTS `images` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `article_id` varchar(11) NOT NULL,
  `url` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `login` varchar(48) NOT NULL,
  `password` varchar(256) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;
