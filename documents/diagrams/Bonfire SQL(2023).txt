CREATE SCHEMA bonfire2023;
USE bonfire2023;

/*      Criação das tabelas de ENTIDADES        */

CREATE TABLE Origem (
    pais varchar(30) NOT NULL,
    sigla varchar(2) NOT NULL,
    idioma varchar(30) NOT NULL,
    gentilico varchar(30) NOT NULL,
    CONSTRAINT PK_origem PRIMARY KEY (pais)
);

CREATE TABLE Usuario (
    nome varchar(30) NOT NULL,
    apelido varchar(30) NOT NULL,
    email varchar(256) NOT NULL,
    senha varchar(30) NOT NULL,
    biografia varchar(200),
    genero varchar(30) NOT NULL,
    recado varchar(50),
    verificado boolean NOT NULL,
    nacionalidade varchar(30) NOT NULL,
    CONSTRAINT PK_usuario PRIMARY KEY (nome, apelido),
    CONSTRAINT FK_pais_usuario FOREIGN KEY (nacionalidade) REFERENCES Origem(pais) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Profissao (
    idProfissao varchar(10) NOT NULL,
    nome varchar(100) NOT NULL,
    CONSTRAINT PK_profissao PRIMARY KEY (idProfissao)
);

CREATE TABLE Comunidade (
    idComunidade varchar(10) NOT NULL,
    nome varchar(30) NOT NULL,
    biografia varchar(200),
    verificado boolean NOT NULL,
    privada boolean NOT NULL,
    sede varchar(30) NOT NULL,
    CONSTRAINT PK_comunidade PRIMARY KEY (idComunidade),
    CONSTRAINT FK_pais_comunidade FOREIGN KEY (sede) REFERENCES Origem(pais) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Campeonato (
    idCamp varchar(10) NOT NULL,
    nome varchar(100) NOT NULL,
    biografia varchar(200),
    modalidade varchar(30) NOT NULL,
    presencial boolean NOT NULL,
    premiacao numeric NOT NULL,
    localizacao varchar(30) NOT NULL,
    CONSTRAINT PK_campeonato PRIMARY KEY (idCamp),
    CONSTRAINT FK_pais_campeonato FOREIGN KEY (localizacao) REFERENCES Origem(pais) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Jogo (
    idJogo varchar(10) NOT NULL,
    nome varchar(100) NOT NULL,
    genero varchar(30) NOT NULL,
    desenvolvedora varchar(100) NOT NULL,
    multiplayer boolean NOT NULL,
    CONSTRAINT PK_jogo PRIMARY KEY (idJogo)
);
        

        
CREATE TABLE Publicacao (
    idPublicacao varchar(10) NOT NULL,
    dtPublicacao date NOT NULL,
    conteudoTexto varchar(300) NOT NULL,
    usuarioNome varchar(30) NOT NULL,
    usuarioApelido varchar(30) NOT NULL,
    CONSTRAINT PK_publicacao PRIMARY KEY (idPublicacao),
    CONSTRAINT FK_usuario_publicacao FOREIGN KEY (usuarioNome, usuarioApelido) REFERENCES Usuario(nome, apelido) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Comentario (
    idComentario varchar(10) NOT NULL,
    dtComentario date NOT NULL,
    conteudoTexto varchar(300) NOT NULL,
    usuarioNome varchar(30) NOT NULL,
    usuarioApelido varchar(30) NOT NULL,
    idPublicacao varchar(10) NOT NULL,
    CONSTRAINT PK_comentario PRIMARY KEY (idComentario),
    CONSTRAINT FK_usuario_comentario FOREIGN KEY (usuarioNome, usuarioApelido) REFERENCES Usuario(nome, apelido) ON UPDATE CASCADE ON DELETE NO ACTION,
    CONSTRAINT FK_publicacao_comentario FOREIGN KEY (idPublicacao) REFERENCES Publicacao(idPublicacao) ON UPDATE CASCADE ON DELETE NO ACTION
);

/*      Criação das tabelas de RELACIONAMENTOS      */

CREATE TABLE ComunidadeCampeonato (
    idComunidade varchar(10) NOT NULL,
    idCamp varchar(10) NOT NULL,
    CONSTRAINT PK_comunidadecampeonato PRIMARY KEY (idComunidade, idCamp),
    FOREIGN KEY (idComunidade) REFERENCES Comunidade(idComunidade) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (idCamp) REFERENCES Campeonato(idCamp) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE ComunidadeJogo (
    idComunidade varchar(10) NOT NULL,
    idJogo varchar(10) NOT NULL,
    CONSTRAINT PK_comunidadejogo PRIMARY KEY (idComunidade, idJogo),
    FOREIGN KEY (idComunidade) REFERENCES Comunidade(idComunidade) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (idJogo) REFERENCES Jogo(idJogo) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE UsuarioJogo (
    usuarioNome varchar(30) NOT NULL,
    usuarioApelido varchar(30) NOT NULL,
    idJogo varchar(10) NOT NULL,
    CONSTRAINT PK_usuariojogo PRIMARY KEY (usuarioNome, usuarioApelido, idJogo),
    FOREIGN KEY (usuarioNome, usuarioApelido) REFERENCES Usuario(nome, apelido) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (idJogo) REFERENCES Jogo(idJogo) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE UsuarioComunidade (
    usuarioNome varchar(30) NOT NULL,
    usuarioApelido varchar(30) NOT NULL,
    idComunidade varchar(10) NOT NULL,
    CONSTRAINT PK_uuariocomunidade PRIMARY KEY (usuarioNome, usuarioApelido, idComunidade),
    FOREIGN KEY (usuarioNome, usuarioApelido) REFERENCES Usuario(nome, apelido) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (idComunidade) REFERENCES Comunidade(idComunidade) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE UsuarioCampeonato (
    usuarioNome varchar(30) NOT NULL,
    usuarioApelido varchar(30) NOT NULL,
    idCamp varchar(10) NOT NULL,
    CONSTRAINT PK_usuariocampeonato PRIMARY KEY (usuarioNome, usuarioApelido, idCamp),
    FOREIGN KEY (usuarioNome, usuarioApelido) REFERENCES Usuario(nome, apelido) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (idCamp) REFERENCES Campeonato(idCamp) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE CampeonatoJogo (
    idJogo varchar(10) NOT NULL,
    idCamp varchar(10) NOT NULL,
    CONSTRAINT PK_campeonatojogo PRIMARY KEY (idJogo, idCamp),
    FOREIGN KEY (idJogo) REFERENCES Jogo(idJogo) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (idCamp) REFERENCES Campeonato(idCamp) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE UsuarioProfissao (
    usuarioNome varchar(30) NOT NULL,
    usuarioApelido varchar(30) NOT NULL,
    idProfissao varchar(10) NOT NULL,
    CONSTRAINT PK_usuarioprofissao PRIMARY KEY (usuarioNome, usuarioApelido, idProfissao),
    FOREIGN KEY (usuarioNome, usuarioApelido) REFERENCES Usuario(nome, apelido) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (idProfissao) REFERENCES Profissao(idProfissao) ON UPDATE CASCADE ON DELETE NO ACTION
);

/*	  Criação das Views	    */

CREATE VIEW listarComentarios AS
	SELECT P.usuarioapelido AS "Publicação de:", P.conteudoTexto AS "Conteudo da Publicação:", U.apelido AS "Comentário de:", C.conteudoTexto AS "Conteudo do Comentário:" from Comentario C INNER JOIN Usuario U, Publicacao P
		WHERE U.nome = C.usuarioNome AND U.apelido = C.usuarioApelido
		AND P.idPublicacao = C.idPublicacao;
    
CREATE VIEW contarUsuariosPorPais AS
		SELECT O.pais AS "País", count(U.nome) AS "Quantidade de Usuários" FROM Usuario U INNER JOIN Origem O
        ON O.pais = U.nacionalidade GROUP BY O.pais;

CREATE VIEW listarUsuariosPorPais AS
		SELECT O.pais AS "País", U.apelido AS "Nick", U.nome AS "Nome" FROM Usuario U INNER JOIN Origem O
        ON O.pais = U.nacionalidade ORDER BY O.pais;
		
CREATE VIEW contarUsuariosPorProfissao AS
    	SELECT P.nome AS "Profissão", count(U.nome) AS "Quantidade de Usuários" FROM Usuario U, Profissao P, UsuarioProfissao UP
        WHERE P.idProfissao = UP.idProfissao AND U.nome = UP.usuarioNome AND U.apelido = UP.usuarioApelido GROUP BY P.nome;    
        
CREATE VIEW listarUsuariosPorProfissao AS
    	SELECT P.nome AS "Profissão", U.apelido AS "Nick", U.nome AS "Nome" FROM Usuario U, Profissao P, UsuarioProfissao UP
        WHERE P.idProfissao = UP.idProfissao AND U.nome = UP.usuarioNome AND U.apelido = UP.usuarioApelido ORDER BY P.nome ASC;    
        
CREATE VIEW contarUsuariosPorJogo AS
    	SELECT J.nome AS "Jogo", count(U.nome) AS "Quantidade de Usuários" FROM Usuario U, Jogo J, UsuarioJogo UJ
        WHERE j.idJogo = Uj.idJogo AND U.nome = UJ.usuarioNome AND U.apelido = UJ.usuarioApelido GROUP BY J.nome; 
           
CREATE VIEW listarUsuariosPorJogo AS
		SELECT J.nome AS "Jogo", U.apelido AS "Nick", U.nome AS "Nome" FROM Usuario U, Jogo J, UsuarioJogo UJ
        WHERE j.idJogo = Uj.idJogo AND U.nome = UJ.usuarioNome AND U.apelido = UJ.usuarioApelido ORDER BY J.nome ASC; 
        
/*	  Inserção nas tabelas de ENTIDADES	    */
INSERT INTO Origem VALUES
('África do Sul', 'ZA', 'Inglês', 'Sul-africano'),
('Alemanha', 'DE', 'Alemão', 'Alemão'),
('Argentina', 'AR', 'Espanhol', 'Argentino'),
('Argélia', 'DZ', 'Árabe', 'Argelino'),
('Austrália', 'AU', 'Inglês', 'Australiano'),
('Austria', 'AT', 'Alemão', 'Austríaco'),
('Bulgária', 'BG', 'Búlgaro', 'Búlgaro'),
('Bélgica', 'BE', 'Francês', 'Belga'),
('Brasil', 'BR', 'Português', 'Brasileiro'),
('Canadá', 'CA', 'Inglês', 'Canadense'),
('Chile', 'CL', 'Espanhol', 'Chileno'),
('China', 'CN', 'Chinês', 'Chinês'),
('Colômbia', 'CO', 'Espanhol', 'Colombiano'),
('Coreia do Sul', 'KR', 'Coreano', 'Sul-coreano'),
('Costa Rica', 'CR', 'Espanhol', 'Costarriquenho'),
('Croácia', 'HR', 'Croata', 'Croata'),
('Dinamarca', 'DK', 'Dinamarquês', 'Dinamarquês'),
('El Salvador', 'SV', 'Espanhol', 'Salvadorenho'),
('Egito', 'EG', 'Árabe', 'Egípcio'),
('Espanha', 'ES', 'Espanhol', 'Espanhol'),
('Estados Unidos', 'US', 'Inglês', 'Americano'),
('Filipinas', 'PH', 'Filipino', 'Filipino'),
('Finlândia', 'FI', 'Finlandês', 'Finlandês'),
('França', 'FR', 'Francês', 'Francês'),
('Grécia', 'GR', 'Grego', 'Grego'),
('Guatemala', 'GT', 'Espanhol', 'Guatemalteco'),
('Holanda', 'NL', 'Holandês', 'Holandês'),
('Hungria', 'HU', 'Húngaro', 'Húngaro'),
('Indonésia', 'ID', 'Indonésio', 'Indonésio'),
('Inglaterra', 'UK', 'Inglês', 'Inglês'),
('Irlanda', 'IE', 'Inglês', 'Irlandês'),
('Itália', 'IT', 'Italiano', 'Italiano'),
('Jamaica', 'JM', 'Inglês', 'Jamaicano'),
('Japão', 'JP', 'Japonês', 'Japonês'),
('Malásia', 'MY', 'Malaio', 'Malaio'),
('Marrocos', 'MA', 'Árabe', 'Marroquino'),
('México', 'MX', 'Espanhol', 'Mexicano'),
('Nigéria', 'NG', 'Inglês', 'Nigeriano'),
('Nova Zelândia', 'NZ', 'Inglês', 'Neozelandês'),
('Noruega', 'NO', 'Norueguês', 'Norueguês'),
('Panamá', 'PA', 'Espanhol', 'Panamenho'),
('Peru', 'PE', 'Espanhol', 'Peruano'),
('Polônia', 'PL', 'Polonês', 'Polonês'),
('Portugal', 'PT', 'Português', 'Português'),
('Quênia', 'KE', 'Swahili', 'Queniano'),
('República Checa', 'CZ', 'Tcheco', 'Tcheco'),
('Romênia', 'RO', 'Romeno', 'Romeno'),
('Rússia', 'RU', 'Russo', 'Russo'),
('Singapura', 'SG', 'Malaio', 'Singapuriano'),
('Suécia', 'SE', 'Sueco', 'Sueco'),
('Suíça', 'CH', 'Alemão', 'Suíço'),
('Tailândia', 'TH', 'Tailandês', 'Tailandês'),
('Turquia', 'TR', 'Turco', 'Turco'),
('Ucrânia', 'UA', 'Ucraniano', 'Ucraniano'),
('Uruguai', 'UY', 'Espanhol', 'Uruguaio'),
('Venezuela', 'VE', 'Espanhol', 'Venezuelano');


INSERT INTO Profissao VALUES
('PRO0000', 'Nenhuma'),
('PRO0001', 'Jogador Profissional'),
('PRO0002', 'Streamer'),
('PRO0003', 'Caster'),
('PRO0004', 'Coach'),
('PRO0005', 'Analista'),
('PRO0006', 'Manager'),
('PRO0007', 'Desenvolvedor de Jogos'),
('PRO0008', 'Designer'),
('PRO0009', 'Jornalista'),
('PRO0010', 'Editor de Vídeo'),
('PRO0011', 'Publicitário'),
('PRO0012', 'Narrador'),
('PRO0013', 'Entrevistador'),
('PRO0014', 'CEO'),
('PRO0015', 'Psicologo'),
('PRO0016', 'Tradutor'),
('PRO0017', 'Fotógrafo'),
('PRO0018', 'Comentarista'),
('PRO0019', 'Gerente de Patrocínios'),
('PRO0020', 'Segurança Pessoal');

INSERT INTO Jogo VALUES
('JOG0001', 'League of Legends', 'Moba', 'Riot Games', true),
('JOG0002', 'Counter-Strike: Global Offensive', 'Tiro', 'Valve Corporation', true),
('JOG0003', 'Fortnite', 'Battle Royale', 'Epic Games', true),
('JOG0004', 'The Legend of Zelda: Breath of the Wild', 'Aventura', 'Nintendo', false),
('JOG0005', 'Minecraft', 'Sobrevivência', 'Mojang Studios', true),
('JOG0006', 'Overwatch', 'Tiro', 'Blizzard Entertainment', true),
('JOG0007', 'Grand Theft Auto V', 'Ação', 'Rockstar Games', true),
('JOG0008', 'Among Us', 'Multijogador Online', 'InnerSloth', true),
('JOG0009', 'Super Mario Odyssey', 'Aventura', 'Nintendo', false),
('JOG0010', 'Hearthstone', 'Estratégia', 'Blizzard Entertainment', true),
('JOG0011', 'Free Fire', 'Battle Royale', 'Garena', true),
('JOG0012', 'Valorant', 'Tiro', 'Riot Games', true),
('JOG0013', 'Rainbow Six Siege', 'Tiro', 'Ubisoft', true),
('JOG0014', 'Clash Royale', 'Estratégia', 'Supercell', true),
('JOG0015', 'League of Legends: Wild Rift', 'Moba', 'Riot Games', true),
('JOG0016', 'Dota 2', 'Moba', 'Valve Corporation', true),
('JOG0017', 'The Last of Us', 'Ação', 'Naughty Dog', true),
('JOG0018', 'Call of Duty: Warzone', 'Battle Royale', 'Activision', true),
('JOG0019', 'FIFA 22', 'Esporte', 'EA Sports', true),
('JOG0020', 'Apex Legends', 'Battle Royale', 'Respawn Entertainment', true),
('JOG0021', 'Rocket League 2', 'Esporte', 'Psyonix', true),
('JOG0022', 'God of War: Ragnarok', 'Ação', 'Santa Monica Studio', false),
('JOG0023', 'Red Dead Redemption 2', 'Ação', 'Rockstar Games', true),
('JOG0024', 'Tekken 8', 'Luta', 'Bandai Namco', true),
('JOG0025', 'Street Fighter 6', 'Luta', 'Capcom', true),
('JOG0026', 'Mortal Kombat 1 (2023)', 'Luta', 'NetherRealm Studios', true),
('JOG0027', 'Mortal Kombat 11', 'Luta', 'NetherRealm Studios', true),
('JOG0028', 'Resident Evil 4 Remake', 'Ação', 'Capcom', false),
('JOG0029', 'Shadow of The Colossus Remake', 'Ação', 'Bluepoint Games', false),
('JOG0030', 'Standoff 2', 'Tiro', 'Axlebolt', true),
('JOG0031', 'Clash of Clans', 'Estratégia', 'Supercell', true),
('JOG0032', 'The Sims 4', 'Simulação', 'Maxis', false),
('JOG0033', 'Devil May Cry 5', 'Ação', 'Capcom', false),
('JOG0034', 'Dead by Daylight', 'Survival Horror', 'Behaviour Interactive', true),
('JOG0035', 'Genshin Impact', 'Ação e Aventura', 'miHoYo', true),
('JOG0036', "Assassin's Creed Valhalla", 'Ação e Aventura', 'Ubisoft', false),
('JOG0037', 'Ghost of Tsushima', 'Ação e Aventura', 'Sucker Punch Productions', false),
('JOG0038', 'The Witcher 3: Wild Hunt', 'RPG de Ação', 'CD Projekt', false),
('JOG0039', 'Dark Souls III', 'RPG de Ação', 'FromSoftware', false),
('JOG0040', 'Cyberpunk 2077', 'RPG de Ação', 'CD Projekt', false);

INSERT INTO Comunidade VALUES
('COM0001', 'LOUD GG', 'Follow The Noise ⊳', true, false, 'Brasil'),
('COM0002', 'PAIN GAMING', 'Biggest Esports Organization in Latin America', true, false,'Brasil'),
('COM0003', 'TSM', 'Global gaming and entertainment. 108-Time Champions.', true, false, 'Estados Unidos'),
('COM0004', 'FLUXO GG', 'Segue o Fluxo.', true, false, 'Brasil'),
('COM0005', 'TEAM LIQUID', 'Home of top athletes across seventeen premier esports titles', true, false, 'Holanda'),
('COM0006', 'FAZE CLAN', 'EST 2010. 45-Time Esports Champions', true, false, 'Estados Unidos'),
('COM0007', 'CLOU9', 'Esports Organization for 10 Whole Years', true, false, 'Estados Unidos'),
('COM0008', 'LEVIATAN', 'Representándote desde 2021.', true, false, 'Argentina'),
('COM0009', 'T1', 'Official profile of T1 Entertainment & Sports.', true, false, 'Coreia do Sul'),
('COM0010', 'DRX', 'Passionately playing games to inspire all the challengers', true, false, 'Coreia do Sul'),
('COM0011', 'Ninjas in Pyjamas', 'Legendary in name, legendary in-game', true, true, 'Suécia'),
('COM0012', 'Evil Geniuses', '2023 VALORANT World Champions. Live Evil, Be Genius. ', true, true, 'Estados Unidos');

INSERT INTO Usuario VALUES
('Bruno Goes', 'Nobru', 'fx.brunogoes@gmail.com', 'fx9855412', 'Segue o Fluxo', 'masculino', 'Segue o Fluxo', true, 'Brasil'),
('Matias Delipetro', 'Saadhak', 'loudmatiassaadhak@gmail.com', '135486541', 'Matias Delipetro, 26, São Paulo, SP | VALORANT Player', 'masculino', null, true, 'Argentina'),
('Rodrigo Fernandes', 'El Gato', 'rodrigofernandes213@gmail.com', 'ff561230', 'Nova era da Los', 'masculino', 'PLATIIIINA', true, 'Brasil'),
('Tyson Ngo', 'TenZ', 'ngoTenz@gmail.com', 'ngotytenz', 'VALORANT Player for @Sentinels', 'masculino', null, true, 'Canadá'),
('Bryan Luna', 'pANcada', 'pANcada04@email.com', 'whyPancasdontMiss', 'Player for @Sentinels', 'masculino', null, true, 'Brasil'),
('Bruno Bittencourt', 'Playhard', 'PHbittencourt@gmail.com', '123456', 'CEO for @LOUDGG', 'masculino', 'A LOUD é o Brasil e o Brasil é a LOUD', true, 'Brasil'),
('Richard Tyler', 'NinjaGamer', 'ninja@email.com', 'ninjapassword', 'Professional Fortnite streamer', 'masculino', 'Time to conquer Fortnite!', true, 'Estados Unidos'),
('Felix Arvid', 'PewDiePie', 'pewdie@email.com', 'brofist', 'YouTube gaming sensation', 'masculino', 'Bro Army, unite!', true, 'Suécia'),
('Imane Anys', 'Pokimane', 'poki@email.com', 'pokipass', 'Twitch streamer and content creator', 'feminino', 'Welcome to the Poki Squad!', true, 'Marrocos'),
('Michael Grzesiek', 'Shroud', 'shroud@email.com', 'shroudpass', 'Former professional CS:GO player and streamer', 'masculino', 'Headshots incoming!', true, 'Canadá'),
('Victor Augusto', 'Coringa', 'loudcoringa@gmail.com', '4615618', null, 'masculino', "Live as 19h todos os dias", true, 'Brasil'),
('Gustavo Queiroz', 'Minerva', 'gustavominerva@gmail.com', 'gustavominerva', null, 'masculino', null, true, 'Brasil'),
('Alexandre Borba', 'Gaules', 'gau@gmail.com', 'gaules487', null, 'masculino', null, true, 'Brasil'),
('Kim Hyuk-kyu', 'Deft', 'kimhyuk@gmail.com', 'kimhyukkyio', null, 'masculino', null, true, 'Coreia Do Sul'),
('Lee Sang-hyeok', 'Faker', 'fakerLeeSang@gmail.com', 'fakerloldes', null, 'masculino', null, true, 'Coreia Do Sul'),
('Vicente Compagnon', 'Tacolilla', 'Tacolla@gmail.com', 'VicTacolente', null, 'masculino', null, true, 'Chile'),
('Gustavo Gomes', 'BaianoLOL', 'baianoLOL@gmail.com', 'ilhadaslendaslol', "CEO for Ilha das Lendas", 'masculino', null, true, 'Brasil'),
('Jaccob Whiteaker', 'Yay', 'JaccobYayJaccob@gmail.com', 'YaWhiteakery', null, 'masculino', null, true, 'Estados Unidos');

INSERT INTO Campeonato VALUES
('CAMP0001', 'CBLOL 2023', 'Campeonato Brasileiro de League of Legends 2023', 'Esports', true, 1000000, 'Brasil'),
('CAMP0002', 'LBFF 2023', 'Liga Brasileira de Free Fire 2023', 'Esports', true, 500000, 'Brasil'),
('CAMP0003', 'Major CS:GO 2023', 'CS:GO Major Championship 2023', 'Esports', false, 1500000, 'Estados Unidos'),
('CAMP0004', 'Overwatch League 2023', 'Overwatch League Season 5', 'Esports', true, 2000000, 'Estados Unidos'),
('CAMP0005', 'The International 2023', 'Dota 2 World Championship 2023', 'Esports', false, 3000000, 'Itália'),
('CAMP0006', 'League of Legends Championship Series 2023', 'North American League of Legends Championship', 'Esports', true, 2500000, 'Estados Unidos'),
('CAMP0007', 'LEC 2023', 'League of Legends European Championship 2023', 'Esports', true, 2000000, 'França'),
('CAMP0008', 'ESL Pro League Season 15', 'Counter-Strike: Global Offensive Pro League', 'Esports', true, 1000000, 'China'),
('CAMP0009', 'Rocket League Championship Series 2023', 'Rocket League Championship', 'Esports', true, 500000, 'Irlanda'),
('CAMP0010', 'FIFA eWorld Cup 2023', 'FIFA Esports World Championship', 'Esports', true, 300000, 'Japão');

INSERT INTO Publicacao VALUES
('PUB0001', '2023-09-27', 'Vitória incrível contra a Los Grandes no CBLOL!', 'Bruno Goes', 'Nobru'),
('PUB0002', '2023-09-27', 'Excelente jogo de CS:GO!', 'Matias Delipetro', 'Saadhak'),
('PUB0003', '2023-09-27', "OMG, why pANcada don't miss a shot?", 'Tyson Ngo', 'TenZ'),
('PUB0004', '2023-09-27', 'Ansioso para o próximo torneio!', 'Bryan Luna', 'pANcada'),
('PUB0005', '2023-09-27', 'Nós somos campeões mundiais" Faz o L!!!!!!!', 'Bruno Bittencourt', 'PlayHard'),
('PUB0006', '2023-09-27', 'Nice 24h Stream guys, but I\'ll never do it again!', 'Felix Arvid', 'PewDiePie'),
('PUB0007', '2023-09-27', 'Thank you for the stream guys and girls, see you tomorrow!', 'Imane Anys', 'Pokimane'),
('PUB0008', '2023-09-27', 'New CS video on the Channel, WHAT ARE YOU WAITING FOR?', 'Michael Grzesiek', 'Shroud'),
('PUB0009', '2023-09-27', "I'm officially passing the crown to Bugha, SHINE MY BOI!", 'Richard Tyler', 'NinjaGamer'),
('PUB0010', '2023-09-27', "I'm finnaly got it, 111M of subscribers", 'Felix Arvid', 'PewDiePie');

INSERT INTO Comentario VALUES
('COM001', '2023-09-27', 'GGWP Fluxo!!', 'Rodrigo Fernandes', 'El Gato', 'PUB0001'),
('COM002', '2023-09-27', 'Parabains manito!', 'Matias Delipetro', 'Saadhak', 'PUB0001'),
('COM003', '2023-09-27', 'Es el mejor del mundo!', 'Matias Delipetro', 'Saadhak', 'PUB0003'),
('COM004', '2023-09-27', 'Fala dele!', 'Bryan Luna', 'pANcada', 'PUB0003'),
('COM005', '2023-09-27', 'Meu Deus, porque o Pancada não erra um tiro?', 'Bruno Bittencourt', 'Playhard', 'PUB0004'),
('COM006', '2023-09-27', 'Now, go see my last video on Youtube', 'Felix Arvid', 'PewDiePie', 'PUB0006'),
('COM007', '2023-09-27', 'You\'re trash!! jk LY!', 'Richard Tyler', 'NinjaGamer', 'PUB0007'),
('COM008', '2023-09-27', 'See you!', 'Michael Grzesiek', 'Shroud', 'PUB0007'),
('COM009', '2023-09-27', '😏!!', 'Richard Tyler', 'NinjaGamer', 'PUB0008'),
('COM010', '2023-09-27', 'You still celebrate that? LMAO', 'Richard Tyler', 'NinjaGamer', 'PUB0010');

/*	     Inserção nas tabelas de RELACIONAMENTOS	 	*/

INSERT INTO UsuarioCampeonato VALUES
('Bruno Goes', 'Nobru', 'CAMP0001'),
('Matias Delipetro', 'Saadhak', 'CAMP0002'),
('Rodrigo Fernandes', 'El Gato', 'CAMP0002'),
('Tyson Ngo', 'TenZ', 'CAMP0003'),
('Bruno Bittencourt', 'Playhard', 'CAMP0003'),
('Bryan Luna', 'pANcada', 'CAMP0004'),
('Richard Tyler', 'NinjaGamer', 'CAMP0004'),
('Felix Arvid', 'PewDiePie', 'CAMP0005'),
('Imane Anys', 'Pokimane', 'CAMP0005'),
('Michael Grzesiek', 'Shroud', 'CAMP0005');

INSERT INTO UsuarioComunidade VALUES
('Bruno Goes', 'Nobru', 'COM0001'),
('Matias Delipetro', 'Saadhak', 'COM0001'),
('Tyson Ngo', 'TenZ', 'COM0001'),
('Bruno Bittencourt', 'Playhard', 'COM0002'),
('Bryan Luna', 'pANcada', 'COM0002'),
('Richard Tyler', 'NinjaGamer', 'COM0003'),
('Felix Arvid', 'PewDiePie', 'COM0003'),
('Imane Anys', 'Pokimane', 'COM0004'),
('Michael Grzesiek', 'Shroud', 'COM0005'),
('Rodrigo Fernandes', 'El Gato', 'COM0005');

INSERT INTO UsuarioJogo VALUES
('Bruno Goes', 'Nobru', 'JOG0011'),
('Matias Delipetro', 'Saadhak', 'JOG0012'),
('Rodrigo Fernandes', 'El Gato', 'JOG0011'),
('Tyson Ngo', 'TenZ', 'JOG0012'),
('Bryan Luna', 'pANcada', 'JOG0012'),
('Bruno Bittencourt', 'Playhard', 'JOG0011');

INSERT INTO UsuarioProfissao VALUES
('Bruno Goes', 'Nobru', 'PRO0001'),
('Matias Delipetro', 'Saadhak', 'PRO0002'),
('Tyson Ngo', 'TenZ', 'PRO0001'),
('Rodrigo Fernandes', 'El Gato', 'PRO0014'),
('Bryan Luna', 'pANcada', 'PRO0001'),
('Bruno Bittencourt', 'Playhard', 'PRO0014'),
('Richard Tyler', 'NinjaGamer', 'PRO0002'),
('Felix Arvid', 'PewDiePie', 'PRO0002'),
('Imane Anys', 'Pokimane', 'PRO0002'),
('Michael Grzesiek', 'Shroud', 'PRO0001'),
('Victor Augusto', 'Coringa', 'PRO0002'),
('Gustavo Queiroz', 'Minerva', 'PRO0002'),
('Alexandre Borba', 'Gaules', 'PRO0002'),
('Kim Hyuk-kyu', 'Deft', 'PRO0001'),
('Lee Sang-hyeok', 'Faker', 'PRO0001'),
('Vicente Compagnon', 'Tacolilla', 'PRO0001'),
('Gustavo Gomes', 'BaianoLOL', 'PRO0002'),
('Jaccob Whiteaker', 'Yay', 'PRO0001');

INSERT INTO ComunidadeJogo VALUES
('COM0001', 'JOG0001'),
('COM0001', 'JOG0002'),
('COM0002', 'JOG0001'),
('COM0002', 'JOG0003'),
('COM0003', 'JOG0004'),
('COM0003', 'JOG0005'),
('COM0004', 'JOG0006'),
('COM0004', 'JOG0007'),
('COM0005', 'JOG0008'),
('COM0005', 'JOG0009');

INSERT INTO ComunidadeCampeonato VALUES
('COM0001', 'CAMP0001'),
('COM0002', 'CAMP0001'),
('COM0003', 'CAMP0002'),
('COM0004', 'CAMP0002'),
('COM0005', 'CAMP0003'),
('COM0006', 'CAMP0003'),
('COM0007', 'CAMP0004'),
('COM0008', 'CAMP0004'),
('COM0009', 'CAMP0005'),
('COM0010', 'CAMP0005');

INSERT INTO CampeonatoJogo VALUES
('JOG0001', 'CAMP0001'),
('JOG0002', 'CAMP0001'),
('JOG0003', 'CAMP0001'),
('JOG0004', 'CAMP0002'),
('JOG0005', 'CAMP0002'),
('JOG0006', 'CAMP0002'),
('JOG0007', 'CAMP0003'),
('JOG0008', 'CAMP0003'),
('JOG0009', 'CAMP0003'),
('JOG0010', 'CAMP0003');

/*  ------------------------------------------------ DUVIDAS ------------------------------------------------
2- Devo manter as tabelas de relacionamento com chaves primárias?
3- Como abrir o mesmo Banco em outros computadores?
5- Não é melhor usar ON DELETE CASCADE ao invés de ON DELETE NO ACTION?
	---------------------------------------------------------------------------------------------------------*/