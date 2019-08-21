CREATE database pharus DEFAULT CHARACTER SET utf8mb4 ;
USE `pharus` ;

-- -----------------------------------------------------
-- Table usuario--
-- -----------------------------------------------------
CREATE TABLE `pharus`.`usuario` (
  `usuario` VARCHAR(30) NOT NULL,
  `conta_contrato` INT(10) UNSIGNED NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(25) NOT NULL,
  `cep` INT(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`conta_contrato`, `usuario`)
  )
ENGINE = InnoDB;

ALTER TABLE usuario
ADD CONSTRAINT ck_senha
CHECK (LENGTH(senha)>=8);
-- Restrição de senha: letras e números
-- -----------------------------------------------------
-- Table consumo --
-- -----------------------------------------------------
CREATE TABLE `pharus`.`consumo` (
  `usuario` INT(10) UNSIGNED NOT NULL,
  `bandeira` INT(1) NOT NULL,
  `kw_h` FLOAT UNSIGNED NOT NULL,
  `tarifa` FLOAT UNSIGNED NOT NULL,
  `intervalo_tempo` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
ENGINE = InnoDB;
ALTER TABLE consumo
ALTER bandeira SET DEFAULT '1';

ALTER TABLE consumo 
ADD CONSTRAINT fk_consumo
FOREIGN KEY (usuario)
REFERENCES usuario (conta_contrato);

-- -----------------------------------------------------
-- Table meta --
-- -----------------------------------------------------
CREATE TABLE `pharus`.`meta` (
  `usuario` INT(10) UNSIGNED NOT NULL,
  `meta` INT(4),
  `kw_h` FLOAT UNSIGNED NOT NULL,
  `tarifa` FLOAT UNSIGNED NOT NULL
)
ENGINE = InnoDB;

ALTER TABLE meta 
ADD CONSTRAINT `fk_meta_usuario`
FOREIGN KEY (`usuario`)
REFERENCES `pharus`.`usuario` (`conta_contrato`);

ALTER TABLE meta
ALTER bandeira SET DEFAULT '1';

-- -----------------------------------------------------
-- Table dicas ---
-- -----------------------------------------------------
CREATE TABLE `pharus`.`dicas` (
  `id_dicas` INT NOT NULL AUTO_INCREMENT,
  `dica_a` VARCHAR(180) NOT NULL,
  `dica_b` VARCHAR(450) NOT NULL,
  `dica_c` VARCHAR(770) NOT NULL,
  PRIMARY KEY (`id_dicas`))
ENGINE = InnoDB;

-- POVOAMENTO DE USUARIO
INSERT INTO usuario (conta_contrato, usuario, nome, email, senha, cep) 
VALUES (1234567891, 'Samuel98', 'Samuel Soares Pereira Costa', 'ssoares981@gmail.com', 'pharus98', '59123610'),
(0009654321, 'Gabriel54', 'Gabriel Felipe Ribeiro dos Santos', 'gabrielfelipe54@gmail.com', '8ty54321', '59123612'),
(0009658141, 'André', 'José André Dono de Menininho', 'andnux0@gmail.com', '565684kj', '59123175'),
(0028458141, 'Pessoa1', 'Pessoa da Silva', 'pepessoal@gmail.com', 's5s5saas', '59152175'),
(0028758141, 'Pessoa2', 'Pessoa da Silva Sauro', 'pessoa2@gmail.com', 'aa55bb22', '59152142'),
(0028458751, 'Robervaldo', 'Robervaldo da Silva', 'Robervaldo.s@gmail.com', 'rober1234', '59152455'),
(0029428141, 'Jean', 'Jean da Silva', 'Jean@gmail.com', 's5s5aaas', '59157825'),
(0033458141, 'Toinha', 'Toinha da Costa', 'ToinhaCos@gmail.com', 'toinha456', '98446158'),
(0029427141, 'Keliane', 'Keliane Martins', 'Kel@gmail.com', '85642a43', '59157825'),
(0033451541, 'Zé', 'Zé da Costa', 'zezinho@gmail.com', 'zezinho132', '59645625');

-- POVOAMENTO DE CONSUMO
INSERT INTO consumo (usuario, kw_h, tarifa) 
VALUES ('1234567891', 12, 5 ),
('0009654321', 63, 20 ),
('0009658141', 70, 50 ),
('0028458141', 32, 21 ),
('0028758141', 31, 20 ),
('0028458751', 264, 52 ),
('0029428141', 634, 240 ),
('0033458141', 750, 520 ),
('0029427141', 322, 211 ),
('0033451541', 231, 240 );

-- POVOAMENTO DE META
INSERT INTO meta (usuario, kw_h, tarifa, intervalo_tempo) 
VALUES ('1234567891', 400, 50), 
('0009654321', 63, 200), 
('0009658141', 70, 300),
('0028458141', 112, 231),
('0028758141', 111, 230),
('0028458751', 214, 532),
('0029428141', 434, 240),
('0033458141', 350, 320),
('0029427141', 302, 111),
('0033451541', 221, 210);

-- POVOAMENTO DE DICAS
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');
INSERT INTO dicas (dica_a, dica_b, dica_c) 
VALUES ('A energia é muito consumida pelo ferro de passar roupa!Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident.', 
'Preste atenção na sua geladeira!
Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
 'Utilize menos a sua máquina de lavar!
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor pariatur.');


CREATE VIEW view_usuario AS  /*View da table usuario*/
SELECT usuario, nome, conta_contrato, email, MD5(senha), cep
FROM usuario;

DELIMITER $ 
	CREATE FUNCTION nome_bandeira (bandeira INT (1))
	RETURNS VARCHAR (10)

	READS SQL DATA
	DETERMINISTIC

	BEGIN
		IF bandeira = '1' THEN
			RETURN "Verde";
		ELSEIF bandeira = '2' THEN
			RETURN "Amarela";
		ELSEIF bandeira = '3' THEN
			RETURN "Vermelha";
		END IF;
	END
$

DELIMITER ;
DELIMITER $
 CREATE PROCEDURE procedimento()
 BEGIN
	CREATE VIEW view_consumo AS  
	SELECT usuario, bandeira, kw_h, tarifa, intervalo_tempo
	FROM consumo;
    
    CREATE VIEW view_meta AS
	SELECT usuario, bandeira, kw_h, tarifa, intervalo_tempo
	FROM meta;
    
    CREATE VIEW view_dicas AS 
    SELECT id_dicas, dica_a, dica_b, dica_c 
	FROM dicas; 
	 
 END
 $
DELIMITER ;
#Chamando o procedimento
CALL procedimento();

SELECT * FROM view_usuario;
SELECT * FROM view_consumo;
SELECT * FROM view_dicas;