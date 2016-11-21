CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `dni` varchar(200) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `edad` varchar(150) NOT NULL,
  `celular` varchar(150) NOT NULL,
  `institucion` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `ingreso` varchar(150) NOT NULL,
  `motivo` varchar(150) NOT NULL
)