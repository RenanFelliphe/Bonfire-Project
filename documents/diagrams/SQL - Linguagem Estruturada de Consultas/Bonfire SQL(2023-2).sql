USE projetos_INF2023_G10;

/*      Criação das tabelas de ENTIDADES        */

CREATE TABLE Origem (
    sigla varchar(2) NOT NULL,
    pais varchar(50) NOT NULL,
    gentilico varchar(50) NOT NULL,
    CONSTRAINT PK_Origem PRIMARY KEY(sigla)
);

CREATE TABLE Campeonato (
    idConta varchar(10) NOT NULL,
    abreviacao varchar (30) NOT NULL,
    nome varchar(100) NOT NULL,
    presencial boolean NOT NULL,
    modalidade varchar(30) NOT NULL,
    dtInicio date NOT NULL,
    dtEncerramento date NOT NULL,
    verificado boolean,
    privado boolean,
    escala varchar(30) NOT NULL,
    jogo varchar(100) NOT NULL,
	origem varchar(4),
    CONSTRAINT PK_Campeonato PRIMARY KEY(idConta),
    CONSTRAINT FK_Campeonato_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Usuario (
    idConta varchar(10) NOT NULL,
    nick varchar(50) NOT NULL,
    nome varchar(50) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(50) NOT NULL,
    genero varchar(50) NOT NULL,
    recado varchar(50),
    verificado boolean,
    privado boolean,
    origem varchar(2) NOT NULL,
    CONSTRAINT PK_Usuario PRIMARY KEY(idConta),
    CONSTRAINT FK_Usuario_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Grupo (
    idConta varchar(10) NOT NULL,
    nome varchar(50) NOT NULL,
    recado varchar(50),
    verificado boolean,
    privado boolean,
    origem varchar(2) NOT NULL,
    CONSTRAINT PK_Grupo PRIMARY KEY(idConta),
    CONSTRAINT FK_Grupo_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Equipe (
    idEquipe varchar(10) NOT NULL,
    nome varchar(50) NOT NULL,
    idGrupo varchar(10) NOT NULL,
    CONSTRAINT PK_Equipe PRIMARY KEY(idEquipe),
    CONSTRAINT FK_Equipe_Grupo FOREIGN KEY(idGrupo) REFERENCES Grupo(idConta) ON UPDATE CASCADE ON DELETE NO ACTION
);

/*      Criação das tabelas de RELACIONAMENTOS      */

CREATE TABLE equipeCampeonato (
    idCampeonato varchar(10) NOT NULL,
	idEquipe varchar(10) NOT NULL,
	CONSTRAINT FK_EquipeCampeonato_Campeonato FOREIGN KEY(idCampeonato) REFERENCES Campeonato(idConta) ON UPDATE CASCADE ON DELETE NO ACTION,
	CONSTRAINT FK_EquipeCampeonato_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE usuarioEquipe (
	idEquipe varchar(10) NOT NULL,
	idUsuario varchar(10) NOT NULL,
    funcao varchar(30) NOT NULL,
    CONSTRAINT FK_UsuarioEquipe_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe) ON UPDATE CASCADE ON DELETE NO ACTION,
    CONSTRAINT FK_UsuarioEquipe_Usuario FOREIGN KEY(idUsuario) REFERENCES Usuario(idConta) ON UPDATE CASCADE ON DELETE NO ACTION
);

/*	  Criação das Views	    */

CREATE VIEW listarEquipesPorCampeonatos AS
	SELECT C.abreviacao AS "Campeonato", G.nome "Equipe" FROM Campeonato C
		INNER JOIN equipeCampeonato EC ON C.idConta = EC.idCampeonato
		INNER JOIN Equipe E ON E.idEquipe = EC.idEquipe
		INNER JOIN Grupo G ON G.idConta = E.idGrupo 
		ORDER BY C.nome ASC;
    
CREATE VIEW listarUsuariosPorPais AS
	SELECT O.pais AS "País", U.nick AS "Usuário", U.nome AS "Nome", U.verificado AS "Verificado", U.privado AS "Perfil Privado" FROM Usuario U
		INNER JOIN Origem O ON U.origem = O.sigla 
		ORDER BY O.gentilico;
        
CREATE VIEW contarUsuariosPorPais AS   
	SELECT O.sigla AS "Sigla", O.pais AS "País", COUNT(idConta) AS "N° de Usuários" FROM Usuario U
		INNER JOIN Origem O ON U.origem = O.sigla 
		GROUP BY O.pais ORDER BY O.pais;
        
CREATE VIEW listarORGSPorPais AS
	SELECT O.pais AS "País", G.nome AS "Nome" FROM Grupo G
		INNER JOIN Origem O ON G.origem = O.sigla 
		ORDER BY O.gentilico;

CREATE VIEW contarORGSPorPais AS   
	SELECT O.sigla AS "Sigla", O.pais AS "País", COUNT(idConta) AS "N° de Organizações" FROM Grupo G
		INNER JOIN Origem O ON G.origem = O.sigla 
		GROUP BY O.pais ORDER BY O.pais;
        
CREATE VIEW listarUsuariosPorEquipe AS
	SELECT E.nome AS "Equipe", U.nick AS "Usuário", U.nome AS "Nome", UE.funcao AS "Função" FROM Usuario U, Equipe E, usuarioEquipe UE, Grupo G
		WHERE UE.idUsuario = U.idConta AND UE.idEquipe = E.idEquipe AND E.idGrupo = G.idConta
        ORDER BY G.nome, E.nome ASC;

CREATE VIEW contarContasVerificadas AS
	SELECT 'Usuarios' AS "Contas", COUNT(idConta) AS "Verificadas" FROM Usuario WHERE verificado IS TRUE
		UNION ALL SELECT 'Grupos' AS "Contas", COUNT(idConta) AS "Verificadas" FROM Grupo WHERE verificado IS TRUE
		UNION ALL SELECT 'Campeonatos' AS "Contas", COUNT(idConta) AS "Verificadas" FROM Campeonato WHERE verificado IS TRUE;
        
CREATE VIEW contarContasNAOVerificadas AS
	SELECT 'Usuarios' AS "Contas", COUNT(idConta) AS "NÃO Verificadas" FROM Usuario WHERE verificado IS FALSE
		UNION ALL SELECT 'Grupos' AS "Contas", COUNT(idConta) AS "NÃO Verificadas" FROM Grupo WHERE verificado IS FALSE
		UNION ALL SELECT 'Campeonatos' AS "Contas", COUNT(idConta) AS "NÃO Verificadas" FROM Campeonato WHERE verificado IS FALSE;

CREATE VIEW listarCampeonatosNAORegionais AS
	SELECT nome AS "Campeonato", jogo AS "Jogo", modalidade AS "Modalidade", escala AS "Escala" FROM Campeonato WHERE escala <> "Regional";
    
CREATE VIEW listarJogosPorOrganização AS
	SELECT G.nome AS "Organização", C.jogo AS "Cenários" FROM Equipe E, Grupo G, Campeonato C, equipeCampeonato EC
		WHERE E.idGrupo = G.idConta AND EC.idEquipe = E.idEquipe AND C.idConta = EC.idCampeonato
        ORDER BY G.nome;

/*	  Inserção nas tabelas de ENTIDADES	    */
INSERT INTO Origem VALUES
('DE', 'Alemanha', 'Alemão'),
('ZA', 'África do Sul', 'Sul-africano'),
('AR', 'Argentina', 'Argentino'),
('DZ', 'Argélia', 'Argelino'),
('AU', 'Austrália', 'Australiano'),
('AT', 'Austria', 'Austríaco'),
('BG', 'Bulgária', 'Búlgaro'),
('BE', 'Bélgica', 'Belga'),
('BR', 'Brasil', 'Brasileiro'),
('CA', 'Canadá', 'Canadense'),
('CL', 'Chile', 'Chileno'),
('CN', 'China', 'Chinês'),
('CO', 'Colômbia', 'Colombiano'),
('KR', 'Coreia do Sul', 'Sul-coreano'),
('CR', 'Costa Rica', 'Costarriquenho'),
('HR', 'Croácia', 'Croata'),
('DK', 'Dinamarca', 'Dinamarquês'),
('SV', 'El Salvador', 'Salvadorenho'),
('EG', 'Egito', 'Egípcio'),
('ES', 'Espanha', 'Espanhol'),
('US', 'Estados Unidos', 'Americano'),
('PH', 'Filipinas', 'Filipino'),
('FI', 'Finlândia', 'Finlandês'),
('FR', 'França', 'Francês'),
('GR', 'Grécia', 'Grego'),
('GT', 'Guatemala', 'Guatemalteco'),
('NL', 'Holanda', 'Holandês'),
('HU', 'Hungria', 'Húngaro'),
('ID', 'Indonésia', 'Indonésio'),
('UK', 'Inglaterra', 'Inglês'),
('IE', 'Irlanda', 'Irlandês'),
('IT', 'Itália', 'Italiano'),
('JM', 'Jamaica', 'Jamaicano'),
('JP', 'Japão', 'Japonês'),
('MY', 'Malásia', 'Malaio'),
('MA', 'Marrocos', 'Marroquino'),
('MX', 'México', 'Mexicano'),
('NG', 'Nigéria', 'Nigeriano'),
('NZ', 'Nova Zelândia', 'Neozelandês'),
('NO', 'Noruega', 'Norueguês'),
('PA', 'Panamá', 'Panamenho'),
('PE', 'Peru', 'Peruano'),
('PL', 'Polônia', 'Polonês'),
('PT', 'Portugal', 'Português'),
('KE', 'Quênia', 'Swahili'),
('CZ', 'República Checa', 'Tcheco'),
('RO', 'Romênia', 'Romeno'),
('RU', 'Rússia', 'Russo'),
('SG', 'Singapura', 'Malaio'),
('SE', 'Suécia', 'Sueco'),
('CH', 'Suíça', 'Alemão'),
('TH', 'Tailândia', 'Tailandês'),
('TR', 'Turquia', 'Turco'),
('UA', 'Ucrânia', 'Ucraniano'),
('UY', 'Uruguai', 'Espanhol'),
('VE', 'Venezuela', 'Espanhol');

INSERT INTO Usuario VALUES

/* -------------------------- Streamers -------------------------- */
('USER101', 'Nobru', 'Bruno Goes', 'nobrustreamer@gmail.com', 'stre@m3rL1f3!', 'Masculino', null, true, false, 'BR'),
('USER102', 'El Gato', 'Rodrigo Fernandes', 'elgatorodrigo@live.com', 'whisk3rs&Me0ws', 'Masculino', null, true, false, 'BR'),
('USER103', 'BaianoLOL', 'Gustavo Gomes', 'baianolol@gmail.com', 'L0LP@ssw0rd', 'Masculino', null, true, false, 'BR'),
('USER104', 'Gaules', 'Alexandre Borba', 'gaulesstreamer@hotmail.com', 'P@rtner4W1n!', 'Masculino', null, true, false, 'BR'),
('USER105', 'PlayHard', 'Bruno Bittencourt', 'playhardbr@hotmail.com', 'H@rdC0r3G@ming', 'Masculino', null, true, false, 'BR'),
('USER106', 'PewDiePie', 'Felix Arvid', 'pewds@gmail.com', 'Br0Fist!', 'Masculino', null, true, false, 'SE'),
('USER107', 'Ninja', 'Richard Tyler', 'ninja@gmail.com', 'N1nj@Str34m!', 'Masculino', null, true, false, 'US'),
('USER108', 'Shroud', 'Michael Grzesiek', 'shroud@gmail.com', 'Shr0udow3n3d', 'Masculino', null, true, false, 'CA'),
('USER109', 'Pokimane', 'Imane Anys', 'pokimane@live.com', 'P0k1L0v3r', 'Feminino', null, true, false, 'MA'),
('USER110', 'Babi', 'Bárbara Passos', 'babigamer@gmail.com', 'G@merG1rl!23', 'Feminino', null, true, false, 'BR'),
('USER111', 'Amouranth', 'Kaitlyn Siragusa', 'amouranth@live.com', 'H3@rtStr34m3r', 'Feminino', null, true, false, 'US'),
('USER112', 'Biyin', 'Sara Bjean', 'biyin@gmail.com', 'Biy1n4Ever!', 'Feminino', null, true, false, 'ES'),
('USER113', 'AnniTheDuck', 'Anissa Baddour', 'annitheduck@gmail.com', 'Qu@ckQu@ck123', 'Feminino', null, true, false, 'DE'),

/* -------------------- Jogadores de Valorant -------------------- */
('USER201', 'Saadhak', 'Matias Delipetro', 'saadhakloud@gmail.com', 'g@merP@ssw0rd', 'Masculino', null, true, false, 'BR'),
('USER202', 'Less', 'Felipe Basso', 'felipe.basso@gmail.com', 'L3ssP@ssw0rd', 'Masculino', null, true, false, 'BR'),
('USER203', 'Qck', 'Gabriel Lima', 'gabriel.lima@gmail.com', 'Qck&Cr3@t1v3', 'Masculino', null, true, false, 'BR'),
('USER204', 'Tuyz', 'Arthur Vieira', 'arthur.vieira@gmail.com', 'V13w3r4Ll1f3!', 'Masculino', null, true, false, 'BR'),
('USER205', 'cauanzin', 'Cauan Pereira', 'cauan.p@gmail.com', 'C@u@n1!234', 'Masculino', null, true, false, 'BR'),
('USER206', 'TenZ', 'Tyson Ngo', 'tyson.ngo@gmail.com', 'T3nZ4R3@l', 'Masculino', null, true, false, 'CA'),
('USER207', 'Zekken', 'Zachary Jude', 'zachary.j@gmail.com', 'Z3kk3nP@ss!', 'Masculino', null, true, false, 'US'),
('USER208', 'Sacy', 'Gustavo Rossi', 'gustavo.rossi@gmail.com', 'R0ss!G@m3r', 'Masculino', null, true, false, 'BR'),
('USER209', 'pANcada', 'Bryan Luna', 'pancadabryan@hotmail.com', 'Sm@shTh3K3yb0@rd', 'Masculino', null, true, false, 'BR'),
('USER210', 'Marved', 'Jimmy Nguyen', 'jimmy.nguyen@gmail.com', 'M@rv3dG0', 'Masculino', null, true, false, 'CA'),

/* --------------- Jogadores de League of Legends ---------------- */
('USER301', 'Robo', 'Leonardo Souza', 'leonardosouza@gmail.com', 'R0boP@ss', 'Masculino', null, true, false, 'BR'),
('USER302', 'Tinonws', 'Thiago Sartori', 'thiagosartori@gmail.com', 'T1n0nws!@#', 'Masculino', null, true, false, 'BR'),
('USER303', 'Croc', 'Park Jong-hoon', 'parkjonghoon@gmail.com', 'CrocR0cks!', 'Masculino', null, true, false, 'KR'),
('USER304', 'Ceos', 'Denilson Oliveira', 'denilsonoliveira@gmail.com', 'C30sG@m3r', 'Masculino', null, true, false, 'BR'),
('USER305', 'Route', 'Moon Geom-su', 'moongeomsu@gmail.com', 'R0ute66#', 'Masculino', null, true, false, 'KR'),
('USER306', 'Wizer', 'Choi Ui-seok', 'wAizerChoi@gmail.com', 'gopaiinwizer', 'Masculino', null, true, false, 'KR'),
('USER307', 'Cariok', 'Marcos de Oliveira', 'marcosoliveira@gmail.com', 'M@rcosPass123', 'Masculino', null, true, false, 'BR'),
('USER308', 'dyNquedo', 'Matheus Rossini', 'matheusrossini@gmail.com', 'R0ssiniDyn', 'Masculino', null, true, false, 'BR'),
('USER309', 'Bvoy', 'Ju Yeong-hoon', 'Yeonghoon@gmail.com', 'BvoyJuhoonJu', 'Masculino', null, true, false, 'KR'),
('USER310', 'Prodelta', 'Fábio Marques', 'fabiomarques@gmail.com', 'Pr0d3ltaF@b', 'Masculino', null, true, false, 'BR'),
('USER311', 'TitaN', 'Alexandre Lima', 'alexlima@gmail.com', 'T1taN@lex', 'Masculino', 'É o titanzada xsqdl', true, false, 'BR'),
('USER312', 'Guigo', 'Guilherme Ruiz', 'guilhermeruiz@example.com', 'Guig0Phuy!', 'Masculino', null, true, false, 'BR'),
('USER313', 'Grell', 'Jesús Loya', 'jesusloya@example.com', 'Gr3llass!', 'Masculino', null, true, false, 'MX'),
('USER314', 'Grevthar', 'Daniel Xavier', 'danielxavier@example.com', 'Gr3vtharss', 'Masculino', null, true, false, 'BR'),
('USER315', 'Trigo', 'Matheus Trigo', 'matheustrigo@example.com', 'Tr0as!', 'Masculino', null, true, false, 'BR'),
('USER316', 'Damage', 'Yan Sales', 'yansales@example.com', 'D@m4gePass', 'Masculino', null, true, false, 'BR'),

/* ------------------- Jogadores de Free Fire -------------------- */
('USER401', 'Draxx', 'Victor Borges', 'DraxxBorges@example.com', 'loudDrax02', 'Masculino', null, true, false, 'BR'),
('USER402', 'México', 'Leonardo Silva', 'MexicoSilva1516@example.com', 'mex4875', 'Masculino', null, true, false, 'MX'),
('USER403', 'Cauan7', 'Cauan Silva', '7SilvaCauan@example.com', 'Cauan2BILBFF', 'Masculino', null, true, false, 'BR'),
('USER404', 'Noda7', 'William Noda', 'williamNoda@example.com', 'NODINHAWill', 'Masculino', null, true, false, 'BR'),
('USER405', 'Lost21', 'Luan Vieira', 'Lost2121@example.com', 'stoL1221', 'Masculino', null, true, false, 'BR'),

('USER406', 'GHOST7', 'Henrique Beck', 'henriquebeck@example.com', 'Gh0st7Pass!', 'Masculino', null, true, false, 'BR'),
('USER407', 'FEDERAL7', 'Felipe Pacífico', 'felipepacifico@example.com', 'F3d3ral7!', 'Masculino', null, true, false, 'BR'),
('USER408', 'Raone7', 'Raone Morais', 'raonemorais@example.com', 'R@onePass', 'Masculino', null, true, false, 'BR'),
('USER409', 'NANDO9', 'Fernando Gomes', 'fernandogomes@example.com', 'Nand09!', 'Masculino', null, true, false, 'BR'),
('USER410', 'General', 'Gerson Martins', 'gersonmartins@example.com', 'G3n3ralPass', 'Masculino', null, true, false, 'BR'),

/* ----------------------- Usuários Comuns ----------------------- */
('USER501', 'SuperSarinha', 'Sarah de Souza Gomes', 'sarahgomes0405@gmail.com', 'fx7530@fx', 'Feminino', null, false, true, 'BR'),
('USER502', 'Carol123Pit', 'Ana Carolina Queiroz de Oliveira', 'carol123bit@example.com', '20092006', 'Feminino', null, false, false, 'BR'),
('USER503', 'ThaynáALeixo', 'Thayná Aleixo Marinho Branquinho', 'thaynaaleixo123@example.com', '27010901TD', 'Feminino', null, false, false, 'BR'),
('USER504', 'nathLess', 'Nathália Campos Lessa', 'nathaliacamposlessa1@gmail.com', '18do8de2005', 'Masculino', null, false, false, 'BR'),
('USER505', 'userLivs', 'Lívia Braga Xavier', 'livsBraga@example.com', 'GabsEuTeAmo', 'Feminino', null, false, false, 'BR');

INSERT INTO Grupo VALUES
('GP001', 'LOUD GG', 'Faz o L', true, false, 'BR'),
('GP002', 'paiN Gaming', 'TRA DI ÇÃAÃO', true, false, 'BR'),
('GP003', 'Vivo Keyd', null, true, false, 'BR'),
('GP004', 'Sentinels', null, true, false, 'US');

INSERT INTO Equipe VALUES
('EQP101', 'LOUD Valorant', 'GP001'),
('EQP102', 'LOUD League of Legends', 'GP001'),
('EQP103', 'LOUD Free Fire', 'GP001'),
('EQP201', 'paiN League of Legends', 'GP002'),
('EQP301', 'Vivo Keyd Free Fire', 'GP003'),
('EQP302', 'Vivo Keyd League of Legends', 'GP003'),
('EQP401', 'Sentinels Valorant', 'GP004');

INSERT INTO Campeonato VALUES 
('CAMP101', 'CBLOL', 'Campeonato Brasileiro de League of Legends', true, 'Masculino', '2023-01-03', '2023-03-28', true, false, 'Regional', 'League of Legends', 'BR'),
('CAMP201', 'LBFF', 'Liga Brasileira de Free Fire', true, 'Misto', '2023-05-18', '2023-07-28', true, false, 'Regional', 'Free Fire', 'BR'),
('CAMP202', 'FFWS', 'Free Fire World Series', true, 'Misto', '2023-08-15', '2023-09-15', true, false, 'Mundial', 'Free Fire', null),
('CAMP301', 'VCT: Américas', 'Valorant Champions Tour: Liga das Américas', true, 'Misto', '2023-08-25', '2023-11-30', true, false, 'Continental', 'Valorant', null);

/*	     Inserção nas tabelas de RELACIONAMENTOS	 	*/

INSERT INTO equipeCampeonato VALUES
('CAMP101', 'EQP102'),
('CAMP101', 'EQP201'),
('CAMP101', 'EQP302'),
('CAMP201', 'EQP103'),
('CAMP201', 'EQP301'),
('CAMP301', 'EQP101'),
('CAMP301', 'EQP401');

INSERT INTO usuarioEquipe (idEquipe, idUsuario, funcao) VALUES 
('EQP101', 'USER201', 'Jogador'),
('EQP101', 'USER202', 'Jogador'),
('EQP101', 'USER203', 'Jogador'),
('EQP101', 'USER204', 'Jogador'),
('EQP101', 'USER205', 'Jogador'),
('EQP102', 'USER301', 'Jogador'),
('EQP102', 'USER302', 'Jogador'),
('EQP102', 'USER303', 'Jogador'),
('EQP102', 'USER304', 'Jogador'),
('EQP102', 'USER305', 'Jogador'),
('EQP103', 'USER401', 'Jogador'),
('EQP103', 'USER402', 'Jogador'),
('EQP103', 'USER403', 'Jogador'),
('EQP103', 'USER404', 'Jogador'),
('EQP103', 'USER405', 'Jogador'),
('EQP401', 'USER206', 'Jogador'),
('EQP401', 'USER207', 'Jogador'),
('EQP401', 'USER208', 'Jogador'),
('EQP401', 'USER209', 'Jogador'),
('EQP401', 'USER210', 'Jogador'),
('EQP201', 'USER306', 'Jogador'),
('EQP201', 'USER307', 'Jogador'),
('EQP201', 'USER308', 'Jogador'),
('EQP201', 'USER309', 'Jogador'),
('EQP201', 'USER310', 'Jogador'),
('EQP301', 'USER406', 'Jogador'),
('EQP301', 'USER407', 'Jogador'),
('EQP301', 'USER408', 'Jogador'),
('EQP301', 'USER409', 'Jogador'),
('EQP301', 'USER410', 'Jogador'),
('EQP302', 'USER312', 'Jogador'),
('EQP302', 'USER313', 'Jogador'),
('EQP302', 'USER314', 'Jogador'),
('EQP302', 'USER315', 'Jogador'),
('EQP302', 'USER316', 'Jogador');

/*	  Criação dos Triggers	    */

DELIMITER $$
	CREATE TRIGGER defineContaVerificadoFalse BEFORE INSERT ON Usuario
	FOR EACH ROW
	BEGIN
		SET NEW.verificado = FALSE;
	END$$
DELIMITER ;

DELIMITER $$
	CREATE TRIGGER defineContaPrivadaFalse BEFORE INSERT ON Usuario
	FOR EACH ROW
	BEGIN
		SET NEW.privado = FALSE;
	END$$
DELIMITER ;

/*
 	ATALHOS (SELECTS E DROPS)
	SELECT * FROM Origem;
	SELECT * FROM Campeonato;
	SELECT * FROM Usuario;
	SELECT * FROM Grupo;
	SELECT * FROM Equipe;
	SELECT * FROM equipeCampeonato;
	SELECT * FROM usuarioEquipe;

	SELECT * FROM listarEquipesPorCampeonatos;
	SELECT * FROM listarUsuariosPorPais;
	SELECT * FROM contarUsuariosPorPais;
	SELECT * FROM listarORGSPorPais;
	SELECT * FROM contarORGSPorPais;
	SELECT * FROM listarUsuariosPorEquipe;
	SELECT * FROM contarContasVerificadas;
	SELECT * FROM contarContasNAOVerificadas;
	SELECT * FROM listarCampeonatosNAORegionais;
	SELECT * FROM listarJogosPorOrganização;

	DROP TABLE IF EXISTS equipeCampeonato;
	DROP TABLE IF EXISTS usuarioEquipe;
	DROP TABLE IF EXISTS Campeonato;
	DROP TABLE IF EXISTS Usuario;
	DROP TABLE IF EXISTS Grupo;
	DROP TABLE IF EXISTS Equipe;
	DROP TABLE IF EXISTS Origem;
        
	DROP VIEW IF EXISTS listarEquipesPorCampeonatos;
	DROP VIEW IF EXISTS listarUsuariosPorPais;
	DROP VIEW IF EXISTS contarUsuariosPorPais;
	DROP VIEW IF EXISTS listarORGSPorPais;
	DROP VIEW IF EXISTS contarORGSPorPais;
	DROP VIEW IF EXISTS listarUsuariosPorEquipe;
	DROP VIEW IF EXISTS contarContasVerificadas;
	DROP VIEW IF EXISTS contarContasNAOVerificadas;
	DROP VIEW IF EXISTS listarCampeonatosNAORegionais;
	DROP VIEW IF EXISTS listarJogosPorOrganização;
*/