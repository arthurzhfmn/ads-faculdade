CREATE TABLE `sistema_produtos`.`categorias` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE = InnoDB;

CREATE TABLE `sistema_produtos`.`produtos` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `id_categoria` INT NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id_produto`),
  CONSTRAINT `fk_produtos_categorias`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `sistema_produtos`.`categorias` (`id_categoria`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;

CREATE TABLE `sistema_produtos`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  `senha` VARCHAR(255) NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE = InnoDB;

-- INSERINDO ELEMENTOS
INSERT INTO `sistema_produtos`.`categorias` (`nome`, `data`) 
VALUES 
  ('Eletrônicos', CURDATE()),
  ('Informática', CURDATE()),
  ('Acessórios', CURDATE());

INSERT INTO `sistema_produtos`.`produtos` (`nome`, `descricao`, `preco`, `id_categoria`, `data`) 
VALUES 
  ('Teclado Mecânico', 'switch azul', 250.00, 2, CURDATE()),
  ('Mouse Gamer', 'Mouse 10000 DPI', 120.50, 2, CURDATE()),
  ('Fone Bluetooth', 'Fone sem fio', 199.90, 1, CURDATE());

INSERT INTO `sistema_produtos`.`usuarios` (`nome`, `email`, `senha`, `data`) 
VALUES 
  ('Administrador', 'admin@email.com', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHe1mN7y75gN1pC9g6H2E8xH5X9R5W6M9S', CURDATE()); --senha admin123


