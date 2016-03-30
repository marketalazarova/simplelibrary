-- SQL CHANGELOG

CREATE TABLE `ageranges` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL DEFAULT '',
  `years_from` tinyint(4) NOT NULL DEFAULT '0',
  `years_to` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

CREATE TABLE `authors` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_czech_ci NOT NULL DEFAULT '',
  `lastname` varchar(255) COLLATE utf8_czech_ci NOT NULL DEFAULT '',
  `born` date DEFAULT NULL,
  `deceased` date DEFAULT NULL,
  `nationality` varchar(15) COLLATE utf8_czech_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

CREATE TABLE `genres` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

CREATE TABLE `publications` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `title` text COLLATE utf8_czech_ci NOT NULL,
  `numpages` int(11) DEFAULT NULL,
  `edition` tinyint(4) NOT NULL,
  `published` date NOT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

CREATE TABLE `publishers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL DEFAULT '',
  `address` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;