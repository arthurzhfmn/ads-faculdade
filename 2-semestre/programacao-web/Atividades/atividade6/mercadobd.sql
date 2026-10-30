CREATE TABLE `mercado`.`categorias` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE = InnoDB;

CREATE TABLE `mercado`.`produtos` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `preco` DECIMAL(10,2) NOT NULL,
  `id_categoria` INT NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id_produto`),
  CONSTRAINT `fk_produtos_categorias`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `mercado`.`categorias` (`id_categoria`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;

CREATE TABLE `mercado`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  `senha` VARCHAR(255) NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE = InnoDB;