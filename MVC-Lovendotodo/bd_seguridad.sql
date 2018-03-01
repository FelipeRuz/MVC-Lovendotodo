SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `db_lovendotodo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_lovendotodo`;


CREATE TABLE `anuncio` (
  `cod_usuario` varchar(9) NOT NULL,
  `cod_anuncio` varchar(9) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `prec_prod` decimal(10,2) NOT NULL,
  `prec_venta` decimal(10,2) NOT NULL,
  `porcentaje` decimal(3,2) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `info` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `fech_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `usuario` (
  `dni` varchar(9) NOT NULL,
  `tip_user` varchar(9) NOT NULL,  
  `nom` varchar(30) NOT NULL,
  `ape` varchar(30) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `tlf` int(9) NOT NULL,
  `cp` int(5) NOT NULL,
  `direccion` int(30) NOT NULL,
  `poblacion` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `twitter` varchar(15) NOT NULL,
  `blog` varchar(50) NOT NULL,
  `fecha_reg` date NOT NULL,
  `email` varchar(50) NOT NULL,
   `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `logs` (
  `cod_log` varchar(9) NOT NULL,
  `cod_usuario` varchar(9) NOT NULL,
  `cod_anuncio` varchar(9) NOT NULL,
  `tipo_cambio` varchar(20) NOT NULL,
  `fech_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`cod_anuncio`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`dni`);

ALTER TABLE `logs`
  ADD PRIMARY KEY (`cod_log`);


INSERT INTO `usuario` (`dni`,`tip_user`, `nom`, `ape`, `user`, `pass`, `tlf`, `cp`, `direccion`, `poblacion`, `provincia`, `twitter`, `blog`, `fecha_reg`, `email`, `img`) VALUES ('48948743m','admin', 'Felipe', 'Ruz', 'Zan', 'pass', '111111111', '21000', 'C/Falsa', 'Huelva', 'Huelva', '@Felipe', '', '2017-12-03', 'felipe@gmail.com','');
INSERT INTO `usuario` (`dni`,`tip_user`, `nom`, `ape`, `user`, `pass`, `tlf`, `cp`, `direccion`, `poblacion`, `provincia`, `twitter`, `blog`, `fecha_reg`, `email`, `img`) VALUES ('48948744y','admin', 'Antonio', 'Ruz', 'Skar', 'pass', '222222222', '21001', 'C/Falsa', 'Huelva', 'Huelva', '@Antonio', '', '2017-12-03', 'antonio@gmail.com','');
INSERT INTO `usuario` (`dni`,`tip_user`, `nom`, `ape`, `user`, `pass`, `tlf`, `cp`, `direccion`, `poblacion`, `provincia`, `twitter`, `blog`, `fecha_reg`, `email`, `img`) VALUES ('47930475L','user', 'Manuel', 'García', 'rowr', 'pass', '333333333', '21002', 'C/Falsa', 'Huelva', 'Huelva', '@Manuel', '', '2017-12-03', 'manuel@gmail.com','');
INSERT INTO `usuario` (`dni`,`tip_user`, `nom`, `ape`, `user`, `pass`, `tlf`, `cp`, `direccion`, `poblacion`, `provincia`, `twitter`, `blog`, `fecha_reg`, `email`, `img`) VALUES ('93047583z','user', 'Marta', 'Quijano', 'love777', 'pass', '444444444', '21003', 'C/Falsa', 'Huelva', 'Huelva', '@Martuqui', '', '2017-12-03', 'martuqui@gmail.com','');
INSERT INTO `usuario` (`dni`,`tip_user`, `nom`, `ape`, `user`, `pass`, `tlf`, `cp`, `direccion`, `poblacion`, `provincia`, `twitter`, `blog`, `fecha_reg`, `email`, `img`) VALUES ('36475869t','user', 'Teresa', 'Romero', 'teru_93', 'pass', '555555555', '21004', 'C/Falsa', 'Huelva', 'Huelva', '@teru93', '', '2017-12-03', 'teresita@gmail.com','');



INSERT INTO `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) VALUES ('48948743m', '1', 'Coca Cola', '1', '1.2', '0.2', 'ALIMENTACION', 'Bebida', '', '2017-12-03');
INSERT INTO `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) VALUES ('48948743m', '2', 'Fanta Naranja', '1', '1.2', '0.2', 'ALIMENTACION', 'Bebida', '', '2017-12-03');
INSERT INTO `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) VALUES ('48948744y', '3', 'Lays', '1', '1.2', '0.2', 'ALIMENTACION', 'Comida', '', '2017-12-03');
INSERT INTO `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) VALUES ('48948744y', '4', 'Rufles', '1', '1.2', '0.2', 'ALIMENTACION', 'Comida', '', '2017-12-03');
INSERT INTO `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) VALUES ('47930475L', '5', 'Portatil', '1000', '1500', '0.5', 'TECNOLOGÍA', 'Intel core I7', '', '2017-12-03');
INSERT INTO `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) VALUES ('47930475L', '6', 'Play 4', '100', '120', '.2', 'ENTRETENIMIENTO', 'Sin usar', '', '2017-12-03');
INSERT INTO `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) VALUES ('93047583z', '7', 'Game Boy', '50', '100', '1', 'ENTRETENIMIENTO', 'Para jugar', '', '2017-12-03');
INSERT INTO `anuncio` (`cod_usuario`, `cod_anuncio`, `titulo`, `prec_prod`, `prec_venta`, `porcentaje`, `categoria`, `info`, `img`, `fech_reg`) VALUES ('36475869t', '8', 'Café', '1', '1.2', '0.2', 'ALIMENTACION', 'Patatas', '', '2017-12-03');


COMMIT;

