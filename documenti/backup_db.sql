-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Mag 18, 2015 alle 13:15
-- Versione del server: 5.5.41-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stage`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aziende`
--

CREATE TABLE IF NOT EXISTS `aziende` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pIva` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CFA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `denominazione` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `associazione` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settore` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sedeLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `citta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `indirizzoSedeTirocinio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capSedeTirocinio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cittaSedeTirocinio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomeRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cognomeRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CFRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comuneNascitaRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataNascitaRappresLegale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomeTutorAziend` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cognomeTutorAziend` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dump dei dati per la tabella `aziende`
--

INSERT INTO `aziende` (`id`, `pIva`, `CFA`, `denominazione`, `associazione`, `settore`, `sedeLegale`, `citta`, `cap`, `telefono`, `email`, `indirizzoSedeTirocinio`, `capSedeTirocinio`, `cittaSedeTirocinio`, `nomeRappresLegale`, `cognomeRappresLegale`, `CFRappresLegale`, `comuneNascitaRappresLegale`, `dataNascitaRappresLegale`, `nomeTutorAziend`, `cognomeTutorAziend`, `note`, `created_at`, `updated_at`) VALUES
(1, '00307430132', NULL, 'ASSOCIAZIONE LA NOSTRA FAMIGLIA', 'ARIS SANITA''', 'SOCIO SANITARIA', 'VIA DON LUIGI MONZA  1', 'PONTE LAMBRO', NULL, '031877111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 08:12:10', '2015-05-18 08:12:10'),
(2, '01342660139', NULL, 'PARROCCHIA SANTA COSMA E DAMIANO', NULL, NULL, 'VIA SAN FRANCESCO 24', 'AIRUNO', NULL, '0399943159', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 08:12:10', '2015-05-18 08:12:10'),
(3, '00121235013', NULL, 'REDAELLI RICAMBI SRL', 'API - LECCO', 'METALMECCANICO', 'VIA PROVINCIALE PER DOLZAGO 59', 'OGGIONO', NULL, '0341266911', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 08:12:10', '2015-05-18 08:12:10'),
(4, '00664380136', NULL, 'ITA SPA', 'API', 'TRAFILATI ACCIAI', 'PIAZZA MAZZINI 13', 'LECCO', NULL, '0341634742', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 08:12:10', '2015-05-18 08:12:10'),
(5, '03131730131', NULL, 'STUDIO LEGALE AVV. GIUSEPPE RUSCONI & PATNERS', NULL, 'TERZIARIO STUDIO LEGALE', 'VIA BALICCO 61', 'LECCO', NULL, '0341284259', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 08:12:10', '2015-05-18 08:12:10'),
(6, '02444660134', NULL, 'DOTT. FILIPPO RADAELLI', NULL, 'STUDI PROFESSIONALI - COMMERCIALISTA', 'VIA KENNEDY 4', 'OGGIONO', NULL, '0341263104', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 08:12:10', '2015-05-18 08:12:10'),
(7, '02933230165', NULL, 'NAV SYSTEM SRL', NULL, 'RIPARAZ MACCHINE PER UFFICIO INFO ', 'VIA COMO 3 ', 'LONGONE AL SEGRINO', NULL, '0313355418', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 08:12:10', '2015-05-18 08:12:10'),
(8, '02220860130', '', 'EASYNET SRL', 'CONFINDUSTRIA', 'INFORMATICA', 'CORSO PROMESSI SPOSI 25D', 'LECCO', '23900', '0341256911', 'giorgio@enet.it', 'CORSO PROMESSI SPOSI 25D', '23900', 'LECCO', 'GIORGIO', 'MISSAGLIA', 'MSSGRG58D10E507C', 'LECCO', '10/04/1958', 'GIORGIO', 'MISSAGLIA', NULL, '2015-05-18 08:12:10', '2015-05-18 08:15:43'),
(9, '00201760139', NULL, 'LIMONTA SPA', NULL, 'TESSILE - CARTOTECNICO - GOMMA', NULL, NULL, NULL, '03185', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 08:12:10', '2015-05-18 08:12:10'),
(10, '02882470137', '', 'MOLLIFICIO FEDE S.R.L.', 'CONFINDUSTRIA', 'INDUSTRIA - MINUTERIE METALLICHE', 'VIA DELL''ARTIGIANATO 6', 'TACENO', '23837', '0341880347', 'michele.benedetti@mollificiofede.it', 'VIA DELL''ARTIGIANATO 6', '23837', 'TACENO', 'PAOLO', 'DELL''ORO', 'DLLPLA61A27B639N', 'CANTU''', '27/01/1961', 'MICHELE', 'BENEDETTI', NULL, '2015-05-18 08:19:18', '2015-05-18 08:21:16'),
(11, '00777900135', '', 'O.M.C.B. - F.LLI COMBI s.n.c.', '', 'METALMECCANICO', 'VIA A. MORO 6', 'BALLABIO', '23811', '0341530551', 'info@omcbcombi.it', 'VIA A. MORO 6', '23811', 'BALLABIO', 'MICHELE', 'COMBI', 'CMBMHL57B28E507C', 'LECCO', '28/02/1957', 'ILARIO', 'BARUFFALDI', NULL, '2015-05-18 08:20:54', '2015-05-18 08:26:58'),
(12, '02540220130', '', 'CAVERIO ANGELO s.n.c.', 'UPAL', 'METALMECCANICO', 'VIA PROVINCIALE 45', 'CORTENOVA', '23813', '0341901091', 'elena@caverio-angelo.it', 'VIA PROVINCIALE 45', '23813', 'CORTENOVA', 'ELENA', 'CAVERIO', 'CVRLNE75R65E507W', 'LECCO', '25/10/75', 'CHRISTIAN', 'CAVERIO', NULL, '2015-05-18 08:30:27', '2015-05-18 08:30:27'),
(13, '02028650139', '', 'RENATO FUMAGALLI X G. s.r.l.', '', 'METALMECCANICO', 'VIA G. DI VITTORIO 4', 'SIRONE', '23844', '0341851408', 'amministrazione@renatofumagalli.it', 'VIA G. DI VITTORIO 2-4-6', '23844', 'SIRONE', 'EVELINA', 'FUMAGALLI', 'FMGVLN77R66G009D', 'OGGIONO', '26/10/1977', 'EVELINA', 'FUMAGALLI', NULL, '2015-05-18 08:35:41', '2015-05-18 08:35:41'),
(14, '02085500136', NULL, 'MDG s.n.c.DI GADDI P. e C.', 'CONFINDUSTRIA', 'METALMECCANICO', 'VIA CISERINO 4/E', 'LIERNA', '23827', '0341710256', 'info@mdgitalia.eu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 09:05:57', '2015-05-18 09:05:57'),
(15, '03461320131', NULL, 'OFFICINA MECCANICA BM DI BARAGETTI MAURIZIO WALTER', NULL, 'METALMECCANICO', 'VIA PRIVATA MAGNI 1', 'OSNAGO', '23875', '03958076', 'gbaragetti@virgilio.it', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 09:05:57', '2015-05-18 09:05:57'),
(16, '00814480133', NULL, 'DEFREMM s.p.a.', 'CONFINDUSTRIA', 'METALMECCANICO', 'VIA BOITO 6', 'LECCO', '23900', '0341251410', 'm.motisi@defremm.it', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-05-18 09:05:57', '2015-05-18 09:05:57');

-- --------------------------------------------------------

--
-- Struttura della tabella `classi`
--

CREATE TABLE IF NOT EXISTS `classi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `articolazione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sezione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chiave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valore` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dump dei dati per la tabella `config`
--

INSERT INTO `config` (`id`, `chiave`, `valore`, `created_at`, `updated_at`) VALUES
(1, 'dataInizio1', '2015-06-15', '2015-05-18 08:12:03', '2015-05-18 08:12:03'),
(2, 'dataFine1', '2015-07-15', '2015-05-18 08:12:03', '2015-05-18 08:12:03'),
(3, 'dataInizio2', '2015-09-15', '2015-05-18 08:12:03', '2015-05-18 08:12:03'),
(4, 'dataFine2', '2015-10-15', '2015-05-18 08:12:03', '2015-05-18 08:12:03'),
(5, 'dataInizio3', '2016-04-15', '2015-05-18 08:12:03', '2015-05-18 08:12:03'),
(6, 'dataFine3', '2016-05-15', '2015-05-18 08:12:03', '2015-05-18 08:12:03');

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_24_133139_create_table_aziende', 1),
('2015_04_24_133150_create_table_studenti', 1),
('2015_04_24_133156_create_table_stage', 1),
('2015_04_24_133202_create_table_partecipazioneStage', 1),
('2015_04_24_133210_create_table_tutorAzienda', 1),
('2015_04_24_133216_create_table_referenti', 1),
('2015_04_24_133222_create_table_rappresentantiLegali', 1),
('2015_04_24_133229_create_table_tutorScuola', 1),
('2015_04_24_133251_aggiunta_colonna_stage', 1),
('2015_04_24_133258_create_table_classi', 1),
('2015_04_24_133313_aggiunta_colonna_studente', 1),
('2015_05_07_062331_create_table_periodi', 1),
('2015_05_07_062830_create_table_config', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `partecipazione_stage`
--

CREATE TABLE IF NOT EXISTS `partecipazione_stage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studente_id` int(10) unsigned NOT NULL,
  `stage_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `partecipazione_stage_studente_id_foreign` (`studente_id`),
  KEY `partecipazione_stage_stage_id_foreign` (`stage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `periodi`
--

CREATE TABLE IF NOT EXISTS `periodi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dataInizio` date NOT NULL,
  `dataFine` date NOT NULL,
  `partecipazione_stage_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `periodi_partecipazione_stage_id_foreign` (`partecipazione_stage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `rappresentantiLegali`
--

CREATE TABLE IF NOT EXISTS `rappresentantiLegali` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dataN` date NOT NULL,
  `luogoN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `cellulare` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `referenti`
--

CREATE TABLE IF NOT EXISTS `referenti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `cellulare` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descrizione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `azienda_id` int(10) unsigned NOT NULL,
  `tutor_scuola_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stage_azienda_id_foreign` (`azienda_id`),
  KEY `stage_tutor_scuola_id_foreign` (`tutor_scuola_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE IF NOT EXISTS `studenti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `matricola` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CF` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dataNascita` date NOT NULL,
  `comuneNascita` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `indirizzo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comuneResidenza` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `articolazione` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `classe_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `studenti_classe_id_foreign` (`classe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tutorAzienda`
--

CREATE TABLE IF NOT EXISTS `tutorAzienda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `cellulare` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tutorScuola`
--

CREATE TABLE IF NOT EXISTS `tutorScuola` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `cellulare` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `tutorScuola`
--

INSERT INTO `tutorScuola` (`id`, `nome`, `cognome`, `telefono`, `cellulare`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Paolo', 'Achler', 533564, 63153155, 'paolo@figini.it', '2015-05-18 08:12:03', '2015-05-18 08:12:03'),
(2, 'Carmelo Antonio', 'Burgio', 35343456, 154235, 'burgio@libero.iuty', '2015-05-18 08:12:03', '2015-05-18 08:12:03');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `partecipazione_stage`
--
ALTER TABLE `partecipazione_stage`
  ADD CONSTRAINT `partecipazione_stage_stage_id_foreign` FOREIGN KEY (`stage_id`) REFERENCES `stage` (`id`),
  ADD CONSTRAINT `partecipazione_stage_studente_id_foreign` FOREIGN KEY (`studente_id`) REFERENCES `studenti` (`id`);

--
-- Limiti per la tabella `periodi`
--
ALTER TABLE `periodi`
  ADD CONSTRAINT `periodi_partecipazione_stage_id_foreign` FOREIGN KEY (`partecipazione_stage_id`) REFERENCES `partecipazione_stage` (`id`);

--
-- Limiti per la tabella `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `stage_tutor_scuola_id_foreign` FOREIGN KEY (`tutor_scuola_id`) REFERENCES `tutorScuola` (`id`),
  ADD CONSTRAINT `stage_azienda_id_foreign` FOREIGN KEY (`azienda_id`) REFERENCES `aziende` (`id`);

--
-- Limiti per la tabella `studenti`
--
ALTER TABLE `studenti`
  ADD CONSTRAINT `studenti_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classi` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
