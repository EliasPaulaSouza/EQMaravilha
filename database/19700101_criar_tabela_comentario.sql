CREATE TABLE `comentarios` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`situacao` INT NOT NULL DEFAULT 0,
	`comentario` TEXT NOT NULL,
	`avaliacao` INT DEFAULT 5,
	`data` datetime DEFAULT NOW(),
	PRIMARY KEY (`id`)
);


INSERT INTO `comentarios`(`nome`, `email`, `comentario`, `avaliacao`) VALUES ('Elias','eliasrobonho@gmail.com','gostei mutio', 5);


