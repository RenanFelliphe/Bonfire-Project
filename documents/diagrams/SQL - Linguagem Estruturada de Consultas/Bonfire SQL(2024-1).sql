/*Tarefas
	1- Definir os atributos NOT NULL
	2- Definir as condições ON DELETE E ON UPDATE para as chaves estrangeiras
	3- Povoar corretamente as tabelas
	4- Criar as Views
	5- Definir os Triggers úteis
	6- Criar a tabela Filiais
*/

CREATE TABLE Origem(
	sigla varchar(2),
    pais varchar(50),
    gentilico varchar(50),
    CONSTRAINT PK_origem PRIMARY KEY(sigla)
);

CREATE TABLE Usuario(
	nomeDeUsuario varchar(50),
    nick varchar(50),
    nome varchar(50),
    email varchar(100),
    senha varchar(50),
    genero varchar(50),
    recado varchar(50),
	verificado boolean,
    dataCriacao date,
    origem varchar(2),
	CONSTRAINT PK_Usuario PRIMARY KEY(nomeDeUsuario),
    CONSTRAINT FK_Usuario_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla)
);

CREATE TABLE Grupo (
	idGrupo varchar(10),
	nome varchar(50),
	recado varchar(50),
	verificado boolean,
	dataCriacao date,
    origem varchar(2),
    CONSTRAINT PK_Grupo PRIMARY KEY(idGrupo),
    CONSTRAINT FK_Grupo_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla)
);

CREATE TABLE Campeonato (
	idCampeonato varchar(10),
	nome varchar(100),
	abreviacao varchar(30),
    modalidade varchar(30),
	jogo varchar(100),
    escala varchar(30),
    verificado boolean,
    datacriacao date,
	CONSTRAINT PK_Campeonato PRIMARY KEY(idCampeonato)
);

CREATE TABLE Temporada (
	idTemp integer,
    idCampeonato varchar(10),
    dtInicio date,
    dtFinal date,
    origem varchar(2),
    CONSTRAINT PK_Temporada PRIMARY KEY(idTemp),
    CONSTRAINT FK_Temporada_Campeonato FOREIGN KEY(idCampeonato) REFERENCES Campeonato(idCampeonato),
    CONSTRAINT FK_Temporada_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla)
);

CREATE TABLE Equipe (
	idEquipe varchar(10),
    idGrupo varchar(10),
    nome varchar(50),
    dataCriacao date,
    CONSTRAINT PK_Equipe PRIMARY KEY(idEquipe),
    CONSTRAINT FK_Equipe_Grupo FOREIGN KEY(idGrupo) REFERENCES Grupo(idGrupo)
);

CREATE TABLE equipeUsuario (
	nomeDeUsuario varchar(50),
    idEquipe varchar(10),
    funcao varchar(30),
    dtContratacao date,
    CONSTRAINT FK_equipeUsuario_Usuario FOREIGN KEY(nomeDeUsuario) REFERENCES Usuario(nomeDeUsuario),
    CONSTRAINT FK_equipeUsuario_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe)
);

CREATE TABLE grupoUsuario(
	nomeDeUsuario varchar(50),
	idGrupo varchar(10),
	cargo varchar(50),
	CONSTRAINT FK_grupoUsuario_Usuario FOREIGN KEY(nomeDeUsuario) REFERENCES Usuario(nomeDeUsuario),
    CONSTRAINT FK_grupoUsuario_Grupo FOREIGN KEY(idGrupo) REFERENCES Grupo(idGrupo)
);

CREATE TABLE campeonatoUsuario(
	nomeDeUsuario varchar(50),
	idCampeonato varchar(10),
	cargo varchar(50),
	CONSTRAINT FK_campeonatoUsuario_Usuario FOREIGN KEY(nomeDeUsuario) REFERENCES Usuario(nomeDeUsuario),
    CONSTRAINT FK_campeonatoUsuario_Campeonato FOREIGN KEY(idCampeonato) REFERENCES Campeonato(idCampeonato)
);

CREATE TABLE equipeTemporada(
	idEquipe varchar(10),
    idTemp integer,
    CONSTRAINT FK_equipeTemporada_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe),
    CONSTRAINT FK_equipeTemporada_Temporada FOREIGN KEY(idTemp) REFERENCES Temporada(idTemp)
);

-- Inserções na tabela Origem
INSERT INTO Origem (sigla, pais, gentilico) VALUES 
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

-- Inserções na tabela Usuario
INSERT INTO Usuario (nomeDeUsuario, nick, nome, email, senha, genero, recado, verificado, dataCriacao, origem) VALUES 
('user1', 'nick1', 'Nome Sobrenome1', 'user1@example.com', 'senha123', 'Masculino', 'Bem-vindo!', true, '2023-01-01', 'BR'),
('user2', 'nick2', 'Nome Sobrenome2', 'user2@example.com', 'senha456', 'Feminino', 'Olá!', true, '2023-02-01', 'US'),
('user3', 'nick3', 'Nome Sobrenome3', 'user3@example.com', 'senha789', 'Não binário', 'Oi!', false, '2023-03-01', 'CA'),
('user4', 'nick4', 'Nome Sobrenome4', 'user4@example.com', 'senhaabc', 'Masculino', 'Welcome!', true, '2023-04-01', 'JP'),
('user5', 'nick5', 'Nome Sobrenome5', 'user5@example.com', 'senhadef', 'Feminino', 'Hello!', false, '2023-05-01', 'UK');

-- Inserções na tabela Grupo
INSERT INTO Grupo (idGrupo, nome, recado, verificado, dataCriacao, origem) VALUES 
('grupo1', 'Grupo Teste 1', 'Grupo de teste 1', true, '2023-01-01', 'BR'),
('grupo2', 'Grupo Teste 2', 'Grupo de teste 2', true, '2023-02-01', 'US'),
('grupo3', 'Grupo Teste 3', 'Grupo de teste 3', false, '2023-03-01', 'CA'),
('grupo4', 'Grupo Teste 4', 'Grupo de teste 4', true, '2023-04-01', 'JP'),
('grupo5', 'Grupo Teste 5', 'Grupo de teste 5', false, '2023-05-01', 'UK');

-- Inserções na tabela Campeonato
INSERT INTO Campeonato (idCampeonato, nome, abreviacao, modalidade, jogo, escala, verificado, datacriacao) VALUES 
('camp1', 'Campeonato Teste 1', 'CT1', 'Esporte', 'Jogo1', 'Escala1', true, '2023-01-01'),
('camp2', 'Campeonato Teste 2', 'CT2', 'Competição', 'Jogo2', 'Escala2', true, '2023-02-01'),
('camp3', 'Campeonato Teste 3', 'CT3', 'Torneio', 'Jogo3', 'Escala3', false, '2023-03-01'),
('camp4', 'Campeonato Teste 4', 'CT4', 'Liga', 'Jogo4', 'Escala4', true, '2023-04-01'),
('camp5', 'Campeonato Teste 5', 'CT5', 'Desafio', 'Jogo5', 'Escala5', false, '2023-05-01');

-- Inserções na tabela Temporada
INSERT INTO Temporada (idTemp, idCampeonato, dtInicio, dtFinal, origem) VALUES 
(1, 'camp1', '2023-01-01', '2023-02-01', 'BR'),
(2, 'camp2', '2023-02-01', '2023-03-01', 'US'),
(3, 'camp3', '2023-03-01', '2023-04-01', 'CA'),
(4, 'camp4', '2023-04-01', '2023-05-01', 'JP'),
(5, 'camp5', '2023-05-01', '2023-06-01', 'UK');

-- Inserções na tabela Equipe
INSERT INTO Equipe (idEquipe, idGrupo, nome, dataCriacao) VALUES 
('equipe1', 'grupo1', 'Equipe Teste 1', '2023-01-01'),
('equipe2', 'grupo2', 'Equipe Teste 2', '2023-02-01'),
('equipe3', 'grupo3', 'Equipe Teste 3', '2023-03-01'),
('equipe4', 'grupo4', 'Equipe Teste 4', '2023-04-01'),
('equipe5', 'grupo5', 'Equipe Teste 5', '2023-05-01');

-- Inserções na tabela equipeUsuario
INSERT INTO equipeUsuario (nomeDeUsuario, idEquipe, funcao, dtContratacao) VALUES 
('user1', 'equipe1', 'Jogador', '2023-01-01'),
('user2', 'equipe2', 'Treinador', '2023-02-01'),
('user3', 'equipe3', 'Analista', '2023-03-01'),
('user4', 'equipe4', 'Fisioterapeuta', '2023-04-01'),
('user5', 'equipe5', 'Gerente', '2023-05-01');

-- Inserções na tabela grupoUsuario
INSERT INTO grupoUsuario (nomeDeUsuario, idGrupo, cargo) VALUES 
('user1', 'grupo1', 'Administrador'),
('user2', 'grupo2', 'Moderador'),
('user3', 'grupo3', 'Membro'),
('user4', 'grupo4', 'Membro'),
('user5', 'grupo5', 'Membro');

-- Inserções na tabela campeonatoUsuario
INSERT INTO campeonatoUsuario (nomeDeUsuario, idCampeonato, cargo) VALUES 
('user1', 'camp1', 'Organizador'),
('user2', 'camp2', 'Árbitro'),
('user3', 'camp3', 'Participante'),
('user4', 'camp4', 'Comentarista'),
('user5', 'camp5', 'Espectador');

-- Inserções na tabela equipeTemporada
INSERT INTO equipeTemporada (idEquipe, idTemp) VALUES 
('equipe1', 1),
('equipe2', 2),
('equipe3', 3),
('equipe4', 4),
('equipe5', 5);

-- Select na tabela Origem
SELECT * FROM Origem;

-- Select na tabela Usuario
SELECT * FROM Usuario;

-- Select na tabela Grupo
SELECT * FROM Grupo;

-- Select na tabela Campeonato
SELECT * FROM Campeonato;

-- Select na tabela Temporada
SELECT * FROM Temporada;

-- Select na tabela Equipe
SELECT * FROM Equipe;

-- Select na tabela equipeUsuario
SELECT * FROM equipeUsuario;

-- Select na tabela grupoUsuario
SELECT * FROM grupoUsuario;

-- Select na tabela campeonatoUsuario
SELECT * FROM campeonatoUsuario;

-- Select na tabela equipeTemporada
SELECT * FROM equipeTemporada;
