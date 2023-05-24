create database sistema;

use sistema;

CREATE TABLE `login` (
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `login` (`usuario`, `pass`, `rol`) VALUES
('Miguel', '1234', 'Admin'),
('Yahir', 'asdf', 'Usuario');