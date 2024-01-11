/*Tarefas
	1- Revisar o estado atual do banco e dos outros 2 modelos
    2- Reorganizar o banco
	3- Criar as Views
	4- Definir os Triggers úteis
	5- Criar a tabela Comunidades (Seções dos Grupos)

    Dúvida -> Todo usuário/grupo/temporada deve possuir uma origem, ON DELETE CASCADE?
    ALTER TABLE Usuario ADD CONSTRAINT FK_Usuario_2
    FOREIGN KEY (origem)
    REFERENCES Origem (sigla)
    ON DELETE CASCADE;
*/

CREATE TABLE Origem(
	sigla varchar(2) NOT NULL,
    pais varchar(50) NOT NULL,
    gentilico varchar(50) NOT NULL,
    CONSTRAINT PK_origem PRIMARY KEY(sigla)
);

CREATE TABLE Usuario(
	nomeDeUsuario varchar(50) NOT NULL,
    nick varchar(50) NOT NULL,
    nome varchar(50) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(50) NOT NULL,
    genero varchar(50) NOT NULL,
    recado varchar(50),
	verificado boolean,
    dataCriacao date NOT NULL,
    origem varchar(2) NOT NULL,
	CONSTRAINT PK_Usuario PRIMARY KEY(nomeDeUsuario),
    CONSTRAINT FK_Usuario_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla) ON DELETE NO ACTION ON UPDATE CASCADE
);

CREATE TABLE Grupo (
	idGrupo varchar(10) NOT NULL,
	nome varchar(50) NOT NULL,
	recado varchar(50),
	verificado boolean,
	dataCriacao date NOT NULL,
    origem varchar(2) NOT NULL,
    CONSTRAINT PK_Grupo PRIMARY KEY(idGrupo),
    CONSTRAINT FK_Grupo_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla) ON DELETE NO ACTION ON UPDATE CASCADE
);

CREATE TABLE Campeonato (
	idCampeonato varchar(10) NOT NULL,
	nome varchar(100) NOT NULL,
	abreviacao varchar(30),
    modalidade varchar(30) NOT NULL,
	jogo varchar(100) NOT NULL,
    escala varchar(30) NOT NULL,
    verificado boolean,
    datacriacao date NOT NULL,
	CONSTRAINT PK_Campeonato PRIMARY KEY(idCampeonato)
);

CREATE TABLE Temporada (
	idTemp varchar(10) NOT NULL,
    idCampeonato varchar(10) NOT NULL,
	nome varchar(100) NOT NULL,
	dtInicio date NOT NULL,
    dtFinal date NOT NULL,
    origem varchar(2) NOT NULL,
    CONSTRAINT PK_Temporada PRIMARY KEY(idTemp),
    CONSTRAINT FK_Temporada_Campeonato FOREIGN KEY(idCampeonato) REFERENCES Campeonato(idCampeonato) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_Temporada_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla) ON DELETE NO ACTION ON UPDATE CASCADE
);

CREATE TABLE Equipe (
	idEquipe varchar(10),
    idGrupo varchar(10),
    nome varchar(50) NOT NULL,
    dataCriacao date NOT NULL,
    CONSTRAINT PK_Equipe PRIMARY KEY(idEquipe),
    CONSTRAINT FK_Equipe_Grupo FOREIGN KEY(idGrupo) REFERENCES Grupo(idGrupo) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE equipeUsuario (
	nomeDeUsuario varchar(50),
    idEquipe varchar(10),
    funcao varchar(30) NOT NULL,
    dtContratacao date NOT NULL,
    CONSTRAINT FK_equipeUsuario_Usuario FOREIGN KEY(nomeDeUsuario) REFERENCES Usuario(nomeDeUsuario) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT FK_equipeUsuario_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE grupoUsuario(
	nomeDeUsuario varchar(50),
	idGrupo varchar(10),
	cargo varchar(50) NOT NULL,
	CONSTRAINT FK_grupoUsuario_Usuario FOREIGN KEY(nomeDeUsuario) REFERENCES Usuario(nomeDeUsuario) ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT FK_grupoUsuario_Grupo FOREIGN KEY(idGrupo) REFERENCES Grupo(idGrupo) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE equipeTemporada(
	idEquipe varchar(10),
    idTemp varchar(10),
    CONSTRAINT FK_equipeTemporada_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT FK_equipeTemporada_Temporada FOREIGN KEY(idTemp) REFERENCES Temporada(idTemp) ON DELETE SET NULL ON UPDATE CASCADE
);
 
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

INSERT INTO Usuario (nomeDeUsuario, nick, nome, email, senha, genero, recado, verificado, dataCriacao, origem) VALUES 
/* -------------------------- Streamers -------------------------- */
('nobru', 'Nobru', 'Bruno Goes', 'nobrustreamer@gmail.com', 'stre@m3rL1f3!', 'Masculino', null, true, '2023-05-15', 'BR'),
('elgato', 'El Gato', 'Rodrigo Fernandes', 'elgatorodrigo@live.com', 'whisk3rs&Me0ws', 'Masculino', null, true, '2023-04-20', 'BR'),
('baianolol', 'BaianoLOL', 'Gustavo Gomes', 'baianolol@gmail.com', 'L0LP@ssw0rd', 'Masculino', null, true, '2024-03-10', 'BR'),
('gaules', 'Gaules', 'Alexandre Borba', 'gaulesstreamer@hotmail.com', 'P@rtner4W1n!', 'Masculino', null, true, '2023-06-28', 'BR'),
('playhard', 'PlayHard', 'Bruno Bittencourt', 'playhardbr@hotmail.com', 'H@rdC0r3G@ming', 'Masculino', null, true, '2023-02-05', 'BR'),
('pewdiepie', 'PewDiePie', 'Felix Arvid', 'pewds@gmail.com', 'Br0Fist!', 'Masculino', null, true, '2024-11-12', 'SE'),
('ninja', 'Ninja', 'Richard Tyler', 'ninja@gmail.com', 'N1nj@Str34m!', 'Masculino', null, true, '2023-01-30', 'US'),
('shroud', 'Shroud', 'Michael Grzesiek', 'shroud@gmail.com', 'Shr0udow3n3d', 'Masculino', null, true, '2022-12-18', 'CA'),
('pokimane', 'Pokimane', 'Imane Anys', 'pokimane@live.com', 'P0k1L0v3r', 'Feminino', null, true, '2023-05-02', 'MA'),
('babi', 'Babi', 'Bárbara Passos', 'babigamer@gmail.com', 'G@merG1rl!23', 'Feminino', null, true, '2024-04-08', 'BR'),
('amouranth', 'Amouranth', 'Kaitlyn Siragusa', 'amouranth@live.com', 'H3@rtStr34m3r', 'Feminino', null, true, '2023-03-17', 'US'),
('biyin', 'Biyin', 'Sara Bjean', 'biyin@gmail.com', 'Biy1n4Ever!', 'Feminino', null, true, '2023-06-05', 'ES'),
('annitheduck', 'AnniTheDuck', 'Anissa Baddour', 'annitheduck@gmail.com', 'Qu@ckQu@ck123', 'Feminino', null, true, '2024-02-22', 'DE'),
/* -------------------- Jogadores de Valorant -------------------- */
('saadhak', 'Saadhak', 'Matias Delipetro', 'saadhakloud@gmail.com', 'g@merP@ssw0rd', 'Masculino', null, true, '2023-01-20', 'BR'),
('less', 'Less', 'Felipe Basso', 'felipe.basso@gmail.com', 'L3ssP@ssw0rd', 'Masculino', null, true, '2022-12-10', 'BR'),
('qck', 'Qck', 'Gabriel Lima', 'gabriel.lima@gmail.com', 'Qck&Cr3@t1v3', 'Masculino', null, true, '2023-03-05', 'BR'),
('tuyz', 'Tuyz', 'Arthur Vieira', 'arthur.vieira@gmail.com', 'V13w3r4Ll1f3!', 'Masculino', null, true, '2023-05-12', 'BR'),
('cauanzin', 'cauanzin', 'Cauan Pereira', 'cauan.p@gmail.com', 'C@u@n1!234', 'Masculino', null, true, '2023-04-01', 'BR'),
('tenz', 'TenZ', 'Tyson Ngo', 'tyson.ngo@gmail.com', 'T3nZ4R3@l', 'Masculino', null, true, '2023-02-18', 'CA'),
('zekken', 'Zekken', 'Zachary Jude', 'zachary.j@gmail.com', 'Z3kk3nP@ss!', 'Masculino', null, true, '2023-06-23', 'US'),
('sacy', 'Sacy', 'Gustavo Rossi', 'gustavo.rossi@gmail.com', 'R0ss!G@m3r', 'Masculino', null, true, '2023-05-30', 'BR'),
('pancada', 'pANcada', 'Bryan Luna', 'pancadabryan@hotmail.com', 'Sm@shTh3K3yb0@rd', 'Masculino', null, true, '2023-04-09', 'BR'),
('marved', 'Marved', 'Jimmy Nguyen', 'jimmy.nguyen@gmail.com', 'M@rv3dG0', 'Masculino', null, true, '2023-03-15', 'CA'),
/* -------------------- Jogadores de League of Legends -------------------- */
('robo', 'Robo', 'Leonardo Souza', 'leonardosouza@gmail.com', 'R0boP@ss', 'Masculino', null, true, '2023-02-25', 'BR'),
('tinonws', 'Tinonws', 'Thiago Sartori', 'thiagosartori@gmail.com', 'T1n0nws!@#', 'Masculino', null, true, '2023-01-10', 'BR'),
('croc', 'Croc', 'Park Jong-hoon', 'parkjonghoon@gmail.com', 'CrocR0cks!', 'Masculino', null, true, '2023-06-05', 'KR'),
('ceos', 'Ceos', 'Denilson Oliveira', 'denilsonoliveira@gmail.com', 'C30sG@m3r', 'Masculino', null, true, '2023-04-20', 'BR'),
('route', 'Route', 'Moon Geom-su', 'moongeomsu@gmail.com', 'R0ute66#', 'Masculino', null, true, '2023-03-18', 'KR'),
('wizer', 'Wizer', 'Choi Ui-seok', 'wAizerChoi@gmail.com', 'gopaiinwizer', 'Masculino', null, true, '2023-05-29', 'KR'),
('cariok', 'Cariok', 'Marcos de Oliveira', 'marcosoliveira@gmail.com', 'M@rcosPass123', 'Masculino', null, true, '2023-06-10', 'BR'),
('dynquedo', 'dyNquedo', 'Matheus Rossini', 'matheusrossini@gmail.com', 'R0ssiniDyn', 'Masculino', null, true, '2023-05-02', 'BR'),
('prodelta', 'Prodelta', 'Fábio Marques', 'fabiomarques@gmail.com', 'Pr0d3ltaF@b', 'Masculino', null, true, '2023-03-20', 'BR'),
('titan', 'TitaN', 'Alexandre Lima', 'alexlima@gmail.com', 'T1taN@lex', 'Masculino', 'É o titanzada xsqdl', true, '2023-02-28', 'BR'),
('guigo', 'Guigo', 'Guilherme Ruiz', 'guilhermeruiz@example.com', 'Guig0Phuy!', 'Masculino', null, true, '2023-01-12', 'BR'),
('grell', 'Grell', 'Jesús Loya', 'jesusloya@example.com', 'Gr3llass!', 'Masculino', null, true, '2023-06-21', 'MX'),
('grevthar', 'Grevthar', 'Daniel Xavier', 'danielxavier@example.com', 'Gr3vtharss', 'Masculino', null, true, '2023-05-14', 'BR'),
('trigo', 'Trigo', 'Matheus Trigo', 'matheustrigo@example.com', 'Tr0as!', 'Masculino', null, true, '2023-04-28', 'BR'),
('damage', 'Damage', 'Yan Sales', 'yansales@example.com', 'D@m4gePass', 'Masculino', null, true, '2023-03-09', 'BR'),
/* ------------------- Jogadores de Free Fire -------------------- */
('draxx', 'Draxx', 'Victor Borges', 'DraxxBorges@example.com', 'loudDrax02', 'Masculino', null, true, '2023-05-08', 'BR'),
('mexico', 'México', 'Leonardo Silva', 'MexicoSilva1516@example.com', 'mex4875', 'Masculino', null, true, '2023-04-12', 'MX'),
('cauan7', 'Cauan7', 'Cauan Silva', '7SilvaCauan@example.com', 'Cauan2BILBFF', 'Masculino', null, true, '2023-03-17', 'BR'),
('noda7', 'Noda7', 'William Noda', 'williamNoda@example.com', 'NODINHAWill', 'Masculino', null, true, '2023-06-25', 'BR'),
('lost21', 'Lost21', 'Luan Vieira', 'Lost2121@example.com', 'stoL1221', 'Masculino', null, true, '2023-02-03', 'BR'),
('ghost7', 'GHOST7', 'Henrique Beck', 'henriquebeck@example.com', 'Gh0st7Pass!', 'Masculino', null, true, '2023-01-20', 'BR'),
('federal7', 'FEDERAL7', 'Felipe Pacífico', 'felipepacifico@example.com', 'F3d3ral7!', 'Masculino', null, true, '2023-06-30', 'BR'),
('raone7', 'Raone7', 'Raone Morais', 'raonemorais@example.com', 'R@onePass', 'Masculino', null, true, '2023-05-15', 'BR'),
('nando9', 'NANDO9', 'Fernando Gomes', 'fernandogomes@example.com', 'Nand09!', 'Masculino', null, true, '2023-04-08', 'BR'),
('general', 'General', 'Gerson Martins', 'gersonmartins@example.com', 'G3n3ralPass', 'Masculino', null, true, '2023-03-22', 'BR'),
/* ----------------------- Usuários Comuns ----------------------- */
('supersarinha', 'SuperSarinha', 'Sarah de Souza Gomes', 'sarahgomes0405@gmail.com', 'fx7530@fx', 'Feminino', null, false, '2023-05-18', 'BR'),
('carol123pit', 'Carol123Pit', 'Ana Carolina Queiroz de Oliveira', 'carol123bit@example.com', '20092006', 'Feminino', null, false, '2023-04-10', 'BR'),
('thaynaaleixo', 'ThaynáALeixo', 'Thayná Aleixo Marinho Branquinho', 'thaynaaleixo123@example.com', '27010901TD', 'Feminino', null, false, '2023-03-05', 'BR'),
('nathless', 'nathLess', 'Nathália Campos Lessa', 'nathaliacamposlessa1@gmail.com', '18do8de2005', 'Masculino', null, false, '2023-06-28', 'BR'),
('userlivs', 'userLivs', 'Lívia Braga Xavier', 'livsBraga@example.com', 'GabsEuTeAmo', 'Feminino', null, false, '2023-02-15', 'BR');

INSERT INTO Grupo (idGrupo, nome, recado, verificado, dataCriacao, origem) VALUES 
('GP001', 'LOUD GG', 'Faz o L', true, '2023-04-02', 'BR'),
('GP002', 'paiN Gaming', 'TRA DI ÇÃAÃO', true, '2024-01-07', 'BR'),
('GP003', 'Vivo Keyd', "#GoVK", true, '2022-12-01', 'BR'),
('GP004', 'Sentinels', "#GoSEN", true, '2023-10-27', 'US'),
('GP005', 'Furia', "É dia de Fúria", true, '2023-08-01', 'BR'),
('GP006', 'Team Liquid', null, true, '2023-01-22', 'NL'),
('GP007', 'DRX', "#Pave the Way", true, '2022-05-12', 'KR'),
('GP008', 'Karmine Korp', "Bienvenue", true, '2022-12-29', 'FR'),
('GP009', 'Leviatán', "#GoLEVs", true, '2023-03-03', 'AR'),
('GP010', 'KRU', "#GoSEN", true, '2024-01-02', 'AR'),
('GP011', 'Fnatic', "We R FnaticSS", true, '2024-01-02', 'UK'),
('GP012', 'Team Vitality', null, true, '2024-01-02', 'FR'),
('GP013', 'Team Evos E-sports', null, true, '2024-01-02', 'ID'),
('GP014', 'Natus Vincere', null, true, '2024-01-02', 'UA'),
('GP015', 'T1', null, true, '2024-01-02', 'KR');

INSERT INTO Equipe (idEquipe, idGrupo, nome, dataCriacao) VALUES 
('EQP101', 'GP001', 'LOUD Valorant', '2023-12-26'),
('EQP102', 'GP001', 'LOUD League of Legends', '2022-07-03'),
('EQP103', 'GP001', 'LOUD Free Fire', '2024-03-17'),
('EQP201', 'GP002', 'paiN League of Legends', '2022-12-23'),
('EQP202', 'GP002', 'paiN Free Fire', '2022-12-23'),
('EQP301', 'GP003', 'Vivo Keyd Free Fire', '2024-09-28'),
('EQP302', 'GP003', 'Vivo Keyd League of Legends', '2023-09-29'),
('EQP401', 'GP004', 'Sentinels Valorant', '2024-09-30'),
('EQP501', 'GP005', 'Furia League of Legends', '2024-09-30'),
('EQP502', 'GP005', 'Furia Valorant', '2024-09-30'),
('EQP503', 'GP005', 'Furia CS:GO', '2024-09-30');

INSERT INTO Campeonato (idCampeonato, nome, abreviacao, modalidade, jogo, escala, verificado, datacriacao) VALUES 
('CAMP101', 'Campeonato Brasileiro de League of Legends', 'CBLOL', 'Masculino', 'League of Legends', 'Regional', true, '2023-02-15'),
('CAMP201', 'Liga Brasileira de Free Fire', 'LBFF', 'Misto', 'Free Fire', 'Regional', true, '2023-02-15'),
('CAMP202', 'Free Fire World Series', 'FFWS', 'Misto', 'Free Fire', 'Mundial', true, '2023-02-15'),
('CAMP203', 'Copa Nobru', 'CPN', 'Misto', 'Free Fire', 'Regional', true, '2022-02-15'),
('CAMP204', 'Liga NFA', 'NFA', 'Misto', 'Free Fire', 'Regional', true, '2023-02-15'),
('CAMP301', 'Valorant Champions Tour: Liga das Americas', 'VCT: Americas', 'Misto', 'Valorant', 'Continental', true, '2023-02-15'),
('CAMP302', 'Valorant Champions Tour: Liga do Pacifico', 'VCT: Pacifico', 'Misto', 'Valorant', 'Continental', true, '2023-02-15'),
('CAMP303', 'Valorant Champions Tour: Liga do EMEA', 'VCT: EMEA', 'Misto', 'Valorant', 'Continental', true, '2023-02-15'),
('CAMP401', 'Campeonato Brasileiro de Counter-Strike', 'CBCS', 'Masculino', 'CS:GO', 'Regional', true, '2023-02-15'),
('CAMP402', 'Campeonato Major de Counter-Strike', 'Majors CS', 'Masculino', 'CS:GO', 'Mundial', true, '2023-02-15');

INSERT INTO Temporada (idTemp, idCampeonato, nome, dtInicio, dtFinal, origem) VALUES 
('CAMP101.1', 'CAMP101', 'CBLOL 2023: 1° Split', '2023-01-03', '2023-03-28', 'BR'),
('CAMP101.2', 'CAMP101', 'CBLOL 2023: 2° Split', '2023-04-01', '2023-06-30', 'BR'),
('CAMP201.1', 'CAMP201', 'LBFF 10', '2023-05-18', '2023-07-28', 'BR'),
('CAMP201.2', 'CAMP201', 'LBFF 11', '2024-02-11', '2024-05-15', 'BR'),
('CAMP202.1', 'CAMP202', 'FF World Series Bangkok', '2023-08-15', '2023-09-15', 'ID'),
('CAMP203.1', 'CAMP203', 'Copa Nobru X', '2023-02-02', '2023-03-04', 'BR'),
('CAMP204.1', 'CAMP204', 'Liga NFA', '2022-12-28', '2023-02-27', 'BR'),
('CAMP301.1', 'CAMP301', 'VCT 2023: Americas', '2023-08-25', '2023-11-30', 'US'),
('CAMP302.1', 'CAMP302', 'VCT 2023: Pacifico', '2023-08-25', '2023-11-30', 'KR'),
('CAMP303.1', 'CAMP303', 'VCT 2023: EMEA', '2023-08-25', '2023-11-30', 'DE'),
('CAMP401.1', 'CAMP401', 'CBCS 2023', '2023-05-15', '2023-06-30', 'BR'),
('CAMP402.1', 'CAMP402', 'Perfect World Shanghai Major 2024', '2023-11-01', '2023-12-14', 'CN');

INSERT INTO equipeTemporada (idEquipe, idTemp) VALUES
('EQP101', 'CAMP301.1'),
('EQP102', 'CAMP101.1'),
('EQP102', 'CAMP101.2'),
('EQP103', 'CAMP201.1'),
('EQP103', 'CAMP201.2'),
('EQP103', 'CAMP202.1'),
('EQP201', 'CAMP101.1'),
('EQP201', 'CAMP101.2'),
('EQP202', 'CAMP201.1'),
('EQP202', 'CAMP201.2'),
('EQP301', 'CAMP201.1'),
('EQP301', 'CAMP201.2'),
('EQP302', 'CAMP101.1'),
('EQP302', 'CAMP101.2'),
('EQP401', 'CAMP301.1'),
('EQP501', 'CAMP101.1'),
('EQP501', 'CAMP101.2'),
('EQP502', 'CAMP301.1'),
('EQP503', 'CAMP401.1'),
('EQP503', 'CAMP402.1'); 

INSERT INTO equipeUsuario (nomeDeUsuario, idEquipe, funcao, dtContratacao)VALUES 
('saadhak', 'EQP101', 'Jogador', '2023-01-20'),
('less', 'EQP101', 'Jogador', '2022-12-10'),
('qck', 'EQP101', 'Jogador', '2023-03-05'),
('tuyz', 'EQP101', 'Jogador', '2023-05-12'),
('cauanzin', 'EQP101', 'Jogador', '2023-04-01'),
('tenz', 'EQP401', 'Jogador', '2023-02-18'),
('zekken', 'EQP401', 'Jogador', '2023-06-23'),
('sacy', 'EQP401', 'Jogador', '2023-05-30'),
('pancada', 'EQP401', 'Jogador', '2023-04-09'),
('marved', 'EQP401', 'Jogador', '2023-03-15'),
('robo', 'EQP102', 'Jogador', '2023-02-25'),
('tinonws', 'EQP102', 'Jogador', '2023-01-10'),
('croc', 'EQP102', 'Jogador', '2023-06-05'),
('ceos', 'EQP102', 'Jogador', '2023-04-20'),
('route', 'EQP102', 'Jogador', '2023-03-18'),
('wizer', 'EQP201', 'Jogador', '2023-05-29'),
('cariok', 'EQP201', 'Jogador', '2023-06-10'),
('dynquedo', 'EQP201', 'Jogador', '2023-05-02'),
('prodelta', 'EQP201', 'Jogador', '2023-03-20'),
('titan', 'EQP201', 'Jogador', '2023-02-28'),
('guigo', 'EQP302', 'Jogador', '2023-01-12'),
('grell', 'EQP302', 'Jogador', '2023-06-21'),
('grevthar', 'EQP302', 'Jogador', '2023-05-14'),
('trigo', 'EQP302', 'Jogador', '2023-04-28'),
('damage', 'EQP302', 'Jogador', '2023-03-09'),
('draxx', 'EQP103', 'Jogador', '2023-05-08'),
('cauan7', 'EQP103', 'Jogador', '2023-03-17'),
('lost21', 'EQP103', 'Jogador', '2023-02-03'),
('ghost7', 'EQP301', 'Jogador', '2023-01-20'),
('federal7', 'EQP301', 'Jogador', '2023-06-30'),
('raone7', 'EQP301', 'Jogador', '2023-05-15'),
('nando9', 'EQP301', 'Jogador', '2023-04-08'),
('general', 'EQP301', 'Jogador', '2023-03-22');

INSERT INTO grupoUsuario (nomeDeUsuario, idGrupo, cargo) VALUES
('playhard', 'GP001', 'CEO'),
('babi', 'GP001', 'Influencer'),
('saadhak', 'GP001', 'Jogador'),
('less', 'GP001', 'Jogador'),
('qck', 'GP001', 'Jogador'),
('tuyz', 'GP001', 'Jogador'),
('cauanzin', 'GP001', 'Jogador'),
('tenz', 'GP004', 'Jogador'),
('zekken', 'GP004', 'Jogador'),
('sacy', 'GP004', 'Jogador'),
('pancada', 'GP004', 'Jogador'),
('marved', 'GP004', 'Jogador'),
('robo', 'GP001', 'Jogador'),
('tinonws', 'GP001', 'Jogador'),
('croc', 'GP001', 'Jogador'),
('ceos', 'GP001', 'Jogador'),
('route', 'GP001', 'Jogador'),
('wizer', 'GP002', 'Jogador'),
('cariok', 'GP002', 'Jogador'),
('dynquedo', 'GP002', 'Jogador'),
('prodelta', 'GP002', 'Jogador'),
('titan', 'GP002', 'Jogador'),
('guigo', 'GP003', 'Jogador'),
('grell', 'GP003', 'Jogador'),
('grevthar', 'GP003', 'Jogador'),
('trigo', 'GP003', 'Jogador'),
('damage', 'GP003', 'Jogador'),
('draxx', 'GP001', 'Jogador'),
('cauan7', 'GP001', 'Jogador'),
('lost21', 'GP001', 'Jogador'),
('ghost7', 'GP003', 'Jogador'),
('federal7', 'GP003', 'Jogador'),
('raone7', 'GP003', 'Jogador'),
('nando9', 'GP003', 'Jogador'),
('general', 'GP003', 'Jogador');

SELECT * FROM Origem;
SELECT * FROM Usuario;
SELECT * FROM Grupo;
SELECT * FROM Campeonato;
SELECT * FROM Temporada;
SELECT * FROM Equipe;
SELECT * FROM equipeUsuario;
SELECT * FROM grupoUsuario;
SELECT * FROM campeonatoUsuario;
SELECT * FROM equipeTemporada;
