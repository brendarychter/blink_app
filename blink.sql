-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-08-2017 a las 14:15:59
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blink`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 NOT NULL,
  `password` varchar(11) CHARACTER SET latin1 NOT NULL,
  `mail` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `mail`, `name`) VALUES
(1, 'brenrychter', 'beta', 'brendarychter@gmail.com', 'Brendu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `message` varchar(50) NOT NULL,
  `id_contact` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `date_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`message`, `id_contact`, `name`, `phone`, `mail`, `active`, `date_time`) VALUES
('asd', 4, 'asdasdda', 'asd', 'asdasdada@g', 0, '9/8/2017. 16:47'),
('asdasd', 5, 'asd', 'dasd', 'asdasdaa@g', 0, '9/8/2017. 17:10'),
('asd', 6, 'asd', 'ads', 'brendarychter@gmail.com', 0, '9/8/2017. 17:11'),
('sdf', 7, 'adsdsa', 'dsf', 'brendarychter@gmail.com', 0, '9/8/2017. 17:13'),
('asdasd', 9, 'brenda', 'asd', 'brendarychter@gmail.com', 0, '9/8/2017. 17:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demo`
--

CREATE TABLE `demo` (
  `value` varchar(30) NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `demo`
--

INSERT INTO `demo` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('demo_subtitle_header', 'Y%20un%20nuevo%20concepto%20de%20interacci%F3n', 'And a new concept in interaction', 1, 1),
('demo_tab_title', 'Demo - Blink App', 'Demo - Blink App', 1, 1),
('demo_text_header', 'Te mostramos las opiniones de los usuarios que la eligen', 'We show you the opinions of the users who choose it', 1, 1),
('demo_title_header', 'Blink%20App%3A%20tu%20nueva%20red%20social', 'Blink App: your new social network', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `error`
--

CREATE TABLE `error` (
  `value` text NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `error`
--

INSERT INTO `error` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('error_button', 'Volver al inicio', 'Return to homepage', 1, 1),
('error_subtitle', 'No podemos localizar la página a la que intentas acceder', 'We can not locate the page you are trying to access', 1, 1),
('error_title', '¡Error!', 'Error!', 1, 1),
('newsletter_tab_title', 'Página no encontrada - Blink App', 'Page not found - Blink App', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faq`
--

CREATE TABLE `faq` (
  `value` varchar(50) NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `faq`
--

INSERT INTO `faq` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('faq_question_1', '%BFPara%20qu%E9%20sirve%20blink%20app%3F', 'What%20is%20blink%20app%20for%3F', 1, 1),
('faq_question_2', '%BFC%F3mo%20interact%FAo%20con%20los%20grupos%3F', 'How%20do%20I%20interact%20with%20groups%3F', 1, 1),
('faq_question_3', '%BFC%F3mo%20me%20conecto%20con%20mis%20amigos%3F', 'How%20do%20I%20connect%20with%20my%20friends%3F', 1, 1),
('faq_subquestion_1', 'Por%20qu%E9%20elegirla', 'Why choose it', 1, 1),
('faq_subquestion_2', 'En%20qu%E9%20se%20diferencia%20de%20las%20demas%20aplicaciones', 'How it differs from other applications', 1, 1),
('faq_subquestion_3', '%BFQu%E9%20funcionalidades%20ofrece%3F', 'What functionalities does it offer?', 1, 1),
('faq_subquestion_4', 'Podes crear la cantidad de grupos que quieras', 'You can create the amount of groups you want', 1, 1),
('faq_subquestion_5', 'Cómo crear un grupo', 'How to create a group', 1, 1),
('faq_subquestion_6', '%BFC%F3mo%20me%20uno%20a%20un%20grupo%3F', 'How do I join to a group?', 1, 1),
('faq_subquestion_7', 'Buscar amigos', 'Search friends', 1, 1),
('faq_subtitle_header', '%BFTen%E9s%20preguntas%20sobre%20c%F3mo%20usar%20la%20aplicaci%F3n%3F%20%A1Te%20las%20respondemos%21', 'Do you have any questions about how to use the application? We answer you', 1, 1),
('faq_tab_title', 'FAQ - Blink App', 'FAQ - Blink App', 0, 1),
('faq_text_1', 'Blink es una aplicación distinta. Te permite estar conectado todo el tiempo con tus contactos, pudiendo segmentar por distintos temas y tipos. Podrás crear la cantidad de grupos que necesites, y agregar a las personas que quieras.', 'Blink is a different application. It allows you to be connected all the time with your contacts, being able to segment by different subjects and types. You can create as many groups as you need, and add to the people you want.', 1, 1),
('faq_text_2', 'La particularidad de esta aplicacion es que no requiere de funcionalidades ni aplicaciones externas que cumplan funciones necesarias. Ya tiene incorporadas las funciones que te sirven dia a dia para mantenerte actualizado con las nuevas notificaciones.\n', 'The particularity of this application is that it does not require external functionalities or applications that fulfill necessary functions. You already have built-in features that serve you day by day to keep you updated with the new notifications.', 1, 1),
('faq_text_3', 'Permite%20generar%2C%20dentro%20de%20los%20grupos%2C%20calendarios%20de%20eventos%2C%20para%20registrar%20reuniones%20y%20cumplea%F1os%2C%20registros%20economicos%2C%20en%20caso%20de%20tener%20gastos%20grupales%20y%20un%20muro%20para%20compartir%20publicaciones%20e%20informacion%0A', 'It allows to generate, within the groups, calendars of events, to register meetings and birthdays, economic records, in case of having group expenses and a wall to share publications and information.', 1, 1),
('faq_text_4', 'No hay un límite de grupos. Podés tener grupos del trabajo, la facultad, danza, futbol, etc. Además, podrás compartir usuarios entre grupos.', 'There is no group limit. They can have work groups, faculty, dance, soccer, etc. In addition, you can share users between groups.', 1, 1),
('faq_text_5', 'Es muy sencillo. Simplemente debes encontrar la sección de crear grupo y seguir los pasos. Tendrás que seleccionar qué funcionalidades tendrá la aplicación, pudiendo luego agregar nuevas o borrar las existentes. Luego podrás seleccionar los usuarios para agregar. Al crear un grupo, te convertirás en el administrador del mismo; luego podrás delegar o compartir este rol.\n', 'It''s very simple. You just have to find the section to create group and follow the steps. You will have to select which functionalities the application will have, and then you can add new ones or delete existing ones. Then you can select the users to add. When you create a group, you become the administrator of the group; Then you can delegate or share this role.', 1, 1),
('faq_text_6', 'Para poder unirte a los grupos, tendrás que pedirle acceso al administrador del mismo, ya que es el quien puede incorporar los nuevos contactos. Sin embargo, al loggearte, podrás solicitarle permisos de administrador para agregar y borrar nuevos contactos.', 'In order to join the groups, you will have to ask the administrator for access, since it is he who can incorporate the new contacts. However, when you log in, you can request administrator permissions to add and delete new contacts.', 1, 1),
('faq_text_7', 'Luego%20de%20crear%20un%20grupo%2C%20podes%20conectarte%20con%20cualquier%20contacto%20que%20este%20registrado%20en%20la%20aplicación.%20Para%20buscarlos%2C%20deberás%20ingresar%20su%20número%20de%20telefono%2C%20correo%20electrónico%20o%20nombre%20de%20usuario%20y%20luego%20invitarlo%20al%20grupo.%20Deberá%20aceptar%20una%20solicitud%20de%20incorporación%20al%20grupo.', 'After creating a group, you can connect with any contact that is registered in the application. To find them, you must enter your phone number, email or username and then invite them to the group. You must accept a request to join the group.', 1, 1),
('faq_title_header', 'Preguntas%20frecuentes', 'Frequently asked questions', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE `footer` (
  `english` text NOT NULL,
  `value` varchar(50) NOT NULL,
  `spanish` text NOT NULL,
  `section` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `footer`
--

INSERT INTO `footer` (`english`, `value`, `spanish`, `section`, `visible`) VALUES
('Developed by', 'footer_developer', 'Desarrollado por', 1, 1),
('English', 'footer_english', 'Inglés', 1, 1),
('Follow us', 'footer_follow', 'Seguinos en las redes', 1, 1),
('Map', 'footer_map', 'Mapa', 1, 1),
('Privacy Policies', 'footer_policies', 'Políticas de Privacidad', 1, 1),
('Spanish', 'footer_spanish', 'Español', 1, 1),
('Terms of use', 'footer_terms', 'Términos de uso', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `img` varchar(100) NOT NULL,
  `nombre_es` mediumtext NOT NULL,
  `id_image` int(11) NOT NULL,
  `table_name` text NOT NULL,
  `section` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `id_name` text NOT NULL,
  `nombre_en` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`img`, `nombre_es`, `id_image`, `table_name`, `section`, `num`, `id_name`, `nombre_en`) VALUES
('http://localhost/uploads/logo.png', 'Blink App', 29, 'menu', 1, 0, 'img_menu', 'Blink App'),
('http://localhost/uploads/qr-code-reader-scanner.png', 'Scanner', 30, 'works', 1, 0, 'img_works', 'Scanner'),
('http://localhost/uploads/bckgrnd_home.png', 'home', 31, 'home', 1, 0, 'img_home', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `idGroup` int(11) NOT NULL,
  `groupName` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`idGroup`, `groupName`, `picture`, `datetime`) VALUES
(1, 'Nefetz', '', '2016-08-22 01:16:51'),
(2, 'P13N', '', '2016-08-22 15:20:06'),
(3, 'brenda2', '', '2016-11-15 05:32:04'),
(4, 'aaa', '', '2016-11-15 05:36:33'),
(5, '111', '', '2016-11-15 05:37:20'),
(6, '', '', '2016-11-15 05:38:30'),
(7, '123123', '', '2016-11-15 05:38:33'),
(8, 'v', '', '2016-11-15 05:42:15'),
(9, 'svvvd', '', '2016-11-15 05:42:51'),
(10, 'lala', '', '2016-11-15 05:43:25'),
(11, 'lala', '', '2016-11-15 05:44:51'),
(12, 'lala', '', '2016-11-15 05:45:01'),
(13, 'lala', '', '2016-11-15 05:45:36'),
(14, 'lala', '', '2016-11-15 05:45:37'),
(15, 'lala', '', '2016-11-15 05:45:51'),
(16, 'lala', '', '2016-11-15 05:45:54'),
(17, 'lala', '', '2016-11-15 05:45:56'),
(18, 'lala', '', '2016-11-15 05:45:59'),
(19, 'lala2', '', '2016-11-15 05:47:43'),
(20, '', '', '2016-11-15 05:50:28'),
(21, 'mejor', '', '2016-11-15 05:50:49'),
(22, 'asdsad', '', '2016-11-15 05:51:06'),
(23, 'lala', '', '2016-11-15 21:29:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE `home` (
  `value` varchar(30) NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Landing page en español';

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('home_button_section_1', 'Descarg%E1%20la%20app%21', 'Download%20the%20app%21', 1, 1),
('home_button_section_2', 'Todav%EDa%20quiero%20saber%20m%E1s', 'I%20still%20want%20to%20know%20more', 2, 1),
('home_button_section_4', '%BFTen%E9s%20dudas%3F', 'Do%20you%20have%20questions%3F', 4, 1),
('home_button_section_5', 'Enviar%20mensaje', 'Send message', 5, 1),
('home_image_section_4', '', '', 4, 1),
('home_section_section_1', 'Blink', 'Blink%21', 1, 1),
('home_subtitle_section_1', 'Una%20%FAnica%20aplicaci%F3n.%20Todo%20lo%20que%20necesit%E1s.', 'A%20single%20application.%20Everything%20you%20need.', 1, 1),
('home_subtitle_section_2', '%BFTen%E9s%20un%20grupo%20de%20amigos%20de%20la%20facultad%3F%20%BFOtro%20de%20la%20oficina%3F%20%BFDe%20f%FAtbol%20o%20baile%3F%20Blink%20App%20es%20para%20vos', 'Do%20you%20have%20a%20group%20of%20friends%20from%20the%20university%3F%20Another%20from%20the%20office%3F%20Football%20or%20dance%3F%20Blink%20App%20is%20for%20you', 2, 1),
('home_subtitle_section_5', '¡Queremos%20saber%20tu%20opini%F3n!', 'We want to know your opinion', 5, 1),
('home_tab_title', 'Blink App - Home', 'Blink App - Home', 0, 1),
('home_text_1_section_2', 'Crea%20todos%20los%20grupos%20que%20necesites', 'Create%20all%20the%20groups%20you%20needa', 2, 1),
('home_text_1_section_5', 'Nombre*', 'Name*', 5, 1),
('home_text_2_section_2', 'Lleva un registro de los gastos grupales', 'Keep%20track%20of%20group%20expenses', 2, 1),
('home_text_2_section_5', 'Mail*', 'E-mail*', 5, 1),
('home_text_3_section_2', 'No te olvides de ningun evento', 'Do%20not%20forget%20any%20event', 2, 1),
('home_text_3_section_5', 'N%FAmero%20de%20tel%E9fono', 'Phone%20number', 5, 1),
('home_text_4_section_2', 'Enterate de las ultimas novedades', 'Find out the latest news', 2, 1),
('home_text_4_section_5', 'Tu%20mensaje*', 'Your%20message*', 5, 1),
('home_text_section_2', 'Es%20una%20herramienta%2C%20un%20aliado%20en%20tu%20d%EDa%20a%20d%EDa.%20Es%20la%20mejor%20manera%20de%20mantenerte%20informado%20todo%20el%20tiempo%20de%20todo%20lo%20que%20pasa%20en%20tus%20grupos%20al%20recibir%20notificaciones%20en%20el%20momento%20en%20que%20tus%20amigos%20publican%20contenidos.', 'It%27s%20a%20tool%2C%20an%20ally%20in%20your%20daily%20life.%20It%27s%20the%20best%20way%20to%20stay%20informed%20of%20all%20that%27s%20going%20on%20in%20your%20groups%20when%20you%20receive%20notifications%20when%20your%20friends%20post%20content.', 2, 1),
('home_text_section_4', 'Vas a poder acceder a las novedades mas rapidamente y usar la aplicacion de forma mas comoda y eficiente', 'You will be able to access the latest news faster and use the application in a more comfortable and efficient way', 4, 1),
('home_title_section_1', 'Tus%20grupos%20en%20un%20mismo%20lugar', 'All%20your%20groups%20in%20the%20same%20place', 1, 1),
('home_title_section_2', '%BFQu%E9%20es%20blink%3F', 'What%20is%20blink?', 2, 1),
('home_title_section_4', 'Descargate%20la%20aplicaci%F3n%20para%20el%20celular', 'Download the app mobile', 4, 1),
('home_title_section_5', 'Contactate', 'Contact us', 5, 1),
('home_video_section_3', '', '', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `map`
--

CREATE TABLE `map` (
  `value` text NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `map`
--

INSERT INTO `map` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('map_subtitle', 'Web Blink App', 'Blink App Website', 1, 1),
('map_tab_title', 'Mapa de navegación - Blink App', 'Navigation map - Blink App', 1, 1),
('map_title', 'Mapa de navegación', 'Navigation map', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `value` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_menu`, `spanish`, `english`, `value`, `visible`, `section`) VALUES
(1, 'Blink', 'Blink', 'blink_menu', 1, 0),
(2, 'Conoc%E9%20m%E1s', 'Know more', 'works_menu', 1, 0),
(3, 'Demo', 'Demo', 'demo_menu', 1, 0),
(4, 'FAQ', 'FAQ', 'faq_menu', 1, 0),
(5, 'Qui%E9nes%20somos', 'Team', 'team_menu', 1, 0),
(6, 'Contactate', 'Contact', 'contact_menu', 1, 0),
(7, 'Iniciá sesión', 'Log in', 'log_in_menu', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE `modules` (
  `idModule` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idGroup` int(11) NOT NULL,
  `idType` int(11) NOT NULL,
  `text` varchar(100) CHARACTER SET latin1 NOT NULL,
  `datetime` datetime NOT NULL,
  `isEnabled` tinyint(1) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `idNotification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modules`
--

INSERT INTO `modules` (`idModule`, `idUser`, `idGroup`, `idType`, `text`, `datetime`, `isEnabled`, `isAdmin`, `idNotification`) VALUES
(3, 1, 1, 1, 'Primera publicacion', '0000-00-00 00:00:00', 0, 0, 0),
(5, 1, 2, 1, '', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `value` text NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('newsletter_button', 'Volver a la página de inicio', 'Return to homepage', 1, 1),
('newsletter_subtitle', 'Revisa tu correo electrónico para recibir las novedades', 'Check your email to receive the news', 1, 1),
('newsletter_tab_title', 'Newsletter - Blink App', 'Newsletter - Blink App', 1, 1),
('newsletter_title', '¡Gracias por suscribirte al newsletter!', 'Thank you for subscribing to the newsletter!', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `idNotification` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `text` varchar(100) CHARACTER SET latin1 NOT NULL,
  `userID` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `value` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `spanish` text COLLATE utf8_spanish2_ci NOT NULL,
  `english` text COLLATE utf8_spanish2_ci NOT NULL,
  `section` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('team_member_1_description', 'Me esfuerzo plenamente por llevar adelante este gran equipo, comprometido a satisfacer las necesidades de los clientes.', 'I strive to carry forward this great team, committed to meeting the needs of customers.', 1, 1),
('team_member_1_job', 'Project Manager', 'Project Manager', 1, 1),
('team_member_1_linkedin', 'https://www.behance.net/DamianCukierman', 'https://www.behance.net/DamianCukierman', 1, 1),
('team_member_1_name', 'Dami%E1n%20Cukierman', 'Damián Cukierman', 1, 1),
('team_member_2_description', 'Desarrollar es mi pasión. Día a día me dedico a explorar las nuevas tecnologías para estar a la vanguardia en nuestros proyectos.', 'Developing is my passion. Day by day I dedicate myself to explore the new technologies to be at the forefront of our projects.', 1, 1),
('team_member_2_job', 'Front and Back End Developer', 'Front and Back End Developer', 1, 1),
('team_member_2_linkedin', 'https://ar.linkedin.com/in/juanmamig', 'https://ar.linkedin.com/in/juanmamig', 1, 1),
('team_member_2_name', 'Juan María Migliore', 'Juan María Migliore', 1, 1),
('team_member_3_description', 'Me gusta comprender cómo los usuarios se conectan con la tecnología, para brindarles la mejor navegación en las aplicaciones que desarrollamos.', 'I like to understand how the users connect with the technology, to give them the best navigation in the applications that we develop.', 1, 1),
('team_member_3_job', 'UI & UX Designer', 'UI & UX Designer', 1, 1),
('team_member_3_linkedin', 'https://ar.linkedin.com/in/german-figueroa-27254490', 'https://ar.linkedin.com/in/german-figueroa-27254490', 1, 1),
('team_member_3_name', 'Germán Figueroa', 'Germán Figueroa', 1, 1),
('team_subtitle_header', 'Desde hace cuatro años que desarrollamos aplicaciones y sitios web a medida', 'For the last four years, we have developed custom applications and websites', 1, 1),
('team_tab_title', 'Equipo - Blink App', 'Team - Blink App', 1, 1),
('team_text_header', 'Satisfacemos las necesidades de los clientes cumpliendo con un correcto desarrollo orientado a una excelente experiencia de usuario\n\n', 'We satisfy the needs of the clients, fulfilling a correct development oriented to an excellent user experience', 1, 1),
('team_title_header', 'Conocé al equipo creador de Blink App', 'Know the creator team of Blink App', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

CREATE TABLE `types` (
  `idType` int(11) NOT NULL,
  `typeName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`idType`, `typeName`) VALUES
(1, 'muro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET latin1 NOT NULL,
  `password` varchar(15) CHARACTER SET latin1 NOT NULL,
  `phoneNumber` int(8) NOT NULL,
  `mail` varchar(25) CHARACTER SET latin1 NOT NULL,
  `picture` varchar(50) CHARACTER SET latin1 NOT NULL,
  `timezone` datetime NOT NULL,
  `photo` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `phoneNumber`, `mail`, `picture`, `timezone`, `photo`, `name`, `active`, `datetime`) VALUES
(1, 'brenda', '1234', 65220951, 'brenda@gmail.com', 'brenda.jpg', '0000-00-00 00:00:00', '', 'aaa', 1, '12/8/2017. 12:11'),
(118, 'bren', '1234', 1, 'brendarychter@gmail.com', '', '0000-00-00 00:00:00', '', 'brenda', 1, '12/8/2017. 12:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_log_in`
--

CREATE TABLE `users_log_in` (
  `value` varchar(50) NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_log_in`
--

INSERT INTO `users_log_in` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('log_in_button', 'Iniciar sesión', 'Log in', 1, 1),
('log_in_message', '¿Todavía no tenés cuenta?', 'Do not have an account yet?', 1, 1),
('log_in_password', 'Contraseña', 'Password', 1, 1),
('log_in_sign_in', 'Registrate', 'Sign up', 1, 1),
('log_in_tab_title', 'Iniciar sesión - Blink App', 'Log in - Blink App', 1, 1),
('log_in_username', 'Usuario', 'Username', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_sign_in`
--

CREATE TABLE `users_sign_in` (
  `value` varchar(50) NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_sign_in`
--

INSERT INTO `users_sign_in` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('sign_in_button', 'Registrarme', 'Sign up', 1, 1),
('sign_in_mail', 'Ingrese su email', 'Enter your e-mail', 1, 1),
('sign_in_name', 'Ingrese su nombre', 'Enter your name', 1, 1),
('sign_in_password', 'Ingrese una contraseña', 'Enter your password', 1, 1),
('sign_in_phone', 'Ingrese su número de teléfono', 'Enter your phone number', 1, 1),
('sign_in_tab_title', 'Registrarme - Blink App', 'Sign up - Blink App', 1, 1),
('sign_in_username', 'Ingrese su nombre de usuario', 'Enter your username', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works`
--

CREATE TABLE `works` (
  `value` varchar(30) NOT NULL,
  `spanish` text NOT NULL,
  `english` text NOT NULL,
  `section` int(11) DEFAULT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`value`, `spanish`, `english`, `section`, `visible`) VALUES
('works_button_1_section_1', 'App%20store', 'App store', 1, 1),
('works_button_2_section_1', 'Play store', 'Play store', 1, 1),
('works_button_section_2', 'Home', 'Home', 2, 1),
('works_button_section_4', 'Ver preguntas frecuentes', 'See Frequently Asked Questions', 4, 1),
('works_menu_spanish', 'Cómo funciona', 'How it works?', 1, 1),
('works_subtitle_header', 'Te%20presentamos%20una%20guía%20práctica%20de%20pasos%20a%20seguir%20para%20descargarla%20y%20utilizarla', 'We introduce a practical step guide to download it and use it', 1, 1),
('works_subtitle_section_1', 'Primero necesitas descargarte una aplicacion para leer el codigo de descarga', 'First you need to download an application to read the download code', 1, 1),
('works_subtitle_section_2', 'En la pagina de la home del sitio, en la seccion de descargas, vas a encontrar la imagen para escanear\r\n\r\n', 'In the home page of the site, in the section of downloads, you will find the image to scan', 2, 1),
('works_subtitle_section_3', 'Necesitas%20acceder%20con%20un%20nombre%20de%20usuario%20y%20una%20contrase%F1a.%20Agreg%E1%20tambien%20una%20imagen%20para%20que%20tus%20contactos%20puedan%20encontrarte%20rapidamente.', 'You need to sign in with a username and password. Also add an image so that your contacts can find you quickly.', 3, 1),
('works_subtitle_section_4', 'Crea un grupo e invita a contactos para que participen y puedan cargar contenido. Podran manejar calendarios, eventos, registros y mucho mas', 'Create a group and invite contacts to participate and upload content. They can handle calendars, events, logs and much more.', 4, 1),
('works_subtitle_section_5', 'Configura las opciones para recibir notificaciones en tiempo real cuando tus amigos interactuan con la aplicacion', 'Set options to receive notifications in real time when your friends interact with the application.', 5, 1),
('works_tab_title', 'Cómo funciona - Blink App', 'How it works', 0, 1),
('works_title_header', '%BFC%F3mo%20empezar%20a%20usar%20la%20aplicaci%F3n%3F', 'How%20to%20start%20using%20the%20application%3F', 1, 1),
('works_title_section_1', 'Lector%20QR', 'QR%20reader', 1, 1),
('works_title_section_2', 'Acced%E9%20al%20sitio', 'Access%20to%20the%20site', 2, 1),
('works_title_section_3', 'Create una cuenta', 'Create an account', 3, 1),
('works_title_section_4', 'Empeza a crear', 'Start to create', 4, 1),
('works_title_section_5', 'Aprovecha%20al%20m%E1ximo%20las%20notificaciones', 'Take the most of advantages of notifications', 5, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indices de la tabla `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`value`);

--
-- Indices de la tabla `error`
--
ALTER TABLE `error`
  ADD PRIMARY KEY (`value`(50));

--
-- Indices de la tabla `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`value`);

--
-- Indices de la tabla `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`value`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_image`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`idGroup`);

--
-- Indices de la tabla `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`value`);

--
-- Indices de la tabla `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`value`(50));

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`idModule`),
  ADD KEY `idGroup` (`idGroup`),
  ADD KEY `idNotification` (`idNotification`),
  ADD KEY `idType` (`idType`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`value`(50));

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`idNotification`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`value`);

--
-- Indices de la tabla `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`idType`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indices de la tabla `users_log_in`
--
ALTER TABLE `users_log_in`
  ADD PRIMARY KEY (`value`);

--
-- Indices de la tabla `users_sign_in`
--
ALTER TABLE `users_sign_in`
  ADD PRIMARY KEY (`value`);

--
-- Indices de la tabla `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`value`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contact` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `modules`
--
ALTER TABLE `modules`
  MODIFY `idModule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `idNotification` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `types`
--
ALTER TABLE `types`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`idGroup`) REFERENCES `groups` (`idGroup`),
  ADD CONSTRAINT `modules_ibfk_3` FOREIGN KEY (`idType`) REFERENCES `types` (`idType`),
  ADD CONSTRAINT `modules_ibfk_4` FOREIGN KEY (`idUser`) REFERENCES `users` (`userID`);

--
-- Filtros para la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`idNotification`) REFERENCES `modules` (`idNotification`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
