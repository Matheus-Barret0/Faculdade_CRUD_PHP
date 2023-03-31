CREATE DATABASE escola;

USE escola;

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCompleto` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `alunos` (`id`, `nomeCompleto`, `email`, `cpf`, `endereco`) VALUES
(3, 'Gabriel', 'gabriel@gmail.com', 123, 'fortaleza');