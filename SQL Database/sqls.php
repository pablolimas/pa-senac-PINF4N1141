CREATE SCHEMA 'livraria';

CREATE TABLE `faq`.`perfil`
'idperfil' INT NOT NULL AUTO_INCREMENT,
'nome' VARCHAR(45) NOT NULL,
'escritorio' VARCHAR(45) NOT NULL,
'email' VARCHAR(45) NOT NULL,
'telefone' INT NULL,
PRIMARY KEY ('idperfil', 'nome', 'escritorio', 'email';
