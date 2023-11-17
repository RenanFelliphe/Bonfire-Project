CREATE TABLE Origem (
    sigla varchar(2) NOT NULL,
    pais varchar(50) NOT NULL,
    gentilico varchar(50) NOT NULL,
    CONSTRAINT PK_Origem PRIMARY KEY(sigla)
);

CREATE TABLE Campeonato (
    idConta varchar(10) NOT NULL,
    nome varchar(50) NOT NULL,
    presencial boolean NOT NULL,
    modalidade varchar(30) NOT NULL,
    dtInicio date NOT NULL,
    dtEncerramento date NOT NULL,
    recado varchar(50),
    verificado boolean NOT NULL,
    privado boolean NOT NULL,
    origem varchar(2),
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
    verificado boolean NOT NULL,
    privado boolean NOT NULL,
    origem varchar(2) NOT NULL,
    CONSTRAINT PK_Usuario PRIMARY KEY(idConta),
    CONSTRAINT FK_Usuario_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Grupo (
    idConta varchar(10) NOT NULL,
    nome varchar(50) NOT NULL,
    recado varchar(50),
    verificado boolean NOT NULL,
    privado boolean NOT NULL,
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

CREATE TABLE equipeCampeonato (
    idCampeonato varchar(10) NOT NULL,
	idEquipe varchar(10) NOT NULL,
	CONSTRAINT FK_EquipeCampeonato_Campeonato FOREIGN KEY(idCampeonato) REFERENCES Campeonato(idConta) ON UPDATE CASCADE ON DELETE NO ACTION,
	CONSTRAINT FK_EquipeCampeonato_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE usuarioEquipe (
	idEquipe varchar(10) NOT NULL,
	idUsuario varchar(10) NOT NULL,
    CONSTRAINT FK_UsuarioEquipe_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe) ON UPDATE CASCADE ON DELETE NO ACTION,
    CONSTRAINT FK_UsuarioEquipe_Usuario FOREIGN KEY(idUsuario) REFERENCES Usuario(idConta) ON UPDATE CASCADE ON DELETE NO ACTION
);

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

/* ------------------- Jogadores de Free Fire -------------------- */
('USER401', 'Draxx', 'Victor Borges', 'DraxxBorges@example.com', 'loudDrax02', 'Masculino', null, true, false, 'BR'),
('USER402', 'México', 'Leonardo Silva', 'MexicoSilva1516@example.com', 'mex4875', 'Masculino', null, true, false, 'BR'),
('USER403', 'Cauan7', 'Cauan Silva', '7SilvaCauan@example.com', 'Cauan2BILBFF', 'Masculino', null, true, false, 'BR'),
('USER404', 'Noda7', 'William Noda', 'williamNoda@example.com', 'NODINHAWill', 'Masculino', null, true, false, 'BR'),
('USER405', 'Lost21', 'Luan Vieira', 'Lost2121@example.com', 'stoL1221', 'Masculino', null, true, false, 'BR'),

/* ----------------------- Usuários Comuns ----------------------- */
('USER501', 'SuperSarinha', 'Sarah de Souza Gomes', 'sarahgomes0405@gmail.com', 'fx7530@fx', 'Feminino', null, false, true, 'BR'),
('USER502', 'Carol123Pit', 'Ana Carolina Queiroz de Oliveira', 'carol123bit@example.com', '20092006', 'Feminino', null, false, false, 'BR'),
('USER503', 'ThaynáALeixo', 'Thayná Aleixo Marinho Branquinho', 'thaynaaleixo123@example.com', '27010901TD', 'Feminino', null, false, false, 'BR'),
('USER504', 'nathLess', 'Nathália Campos Lessa', 'nathaliacamposlessa1@gmail.com', '18do8de2005', 'Masculino', null, false, false, 'BR'),
('USER505', 'userLivs', 'Lívia Braga Xavier', 'livsBraga@example.com', 'GabsEuTeAmo', 'Feminino', null, false, false, 'BR');

INSERT INTO Grupo VALUES
('GP001', 'LOUD GG', 'Faz o L', true, false, 'BR'),
('GP002', 'paiN Gaming', 'TRA DI ÇÃAÃO', true, false, 'BR'),
('GP003', 'LOS', null, true, false, 'BR'),
('GP004', 'Fluxo GG', 'Segue o Fluxo!', true, false, 'BR'),
('GP005', 'Sentinels', null, true, false, 'US'),
('GP006', 'Fnatic', null, true, false, 'UK');

INSERT INTO Equipe VALUES
('EQP001', 'LOUD Valorant', 'GP001'),
('EQP002', 'LOUD League of Legends', 'GP001'),
('EQP003', 'LOUD Free Fire', 'GP001'),
('EQP004', 'Sentinels Valorant', 'GP008');

INSERT INTO Campeonato VALUES 
('CAMP001', 'CBLOL', true, 'Masculino', '2023-01-03', '2023-03-28', null, true, false, 'BR'),
('CAMP002', 'LBFF', true, 'Misto', '2023-05-18', '2023-07-28', null, true, false, 'BR'),
('CAMP003', 'VCT Américas', true, 'Misto', '2023-08-25', '2023-11-30', null, true, false, null),
('CAMP004', 'VCT EMEA', true, 'Misto', '2023-02-25', '2023-05-29', null, true, false, null);

INSERT INTO equipeCampeonato VALUES
('CAMP003', 'EQP001'),
('CAMP001', 'EQP002'),
('CAMP002', 'EQP003'),
('CAMP003', 'EQP004');

INSERT INTO usuarioEquipe VALUES 
('EQP001', 'USER201'),
('EQP001', 'USER202'),
('EQP001', 'USER203'),
('EQP001', 'USER204'),
('EQP001', 'USER205'),
('EQP002', 'USER301'),
('EQP002', 'USER302'),
('EQP002', 'USER303'),
('EQP002', 'USER304'),
('EQP002', 'USER305'),
('EQP003', 'USER401'),
('EQP003', 'USER402'),
('EQP003', 'USER403'),
('EQP003', 'USER405'),
('EQP003', 'USER405'),
('EQP003', 'USER206'),
('EQP003', 'USER207'),
('EQP003', 'USER208'),
('EQP003', 'USER209'),
('EQP003', 'USER210');