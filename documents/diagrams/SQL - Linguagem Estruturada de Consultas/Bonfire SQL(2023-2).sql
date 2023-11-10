CREATE TABLE Origem (
    sigla varchar(2),
    pais varchar(50),
    gentilico varchar(50),
	CONSTRAINT PK_Origem PRIMARY KEY(sigla)
);

CREATE TABLE Campeonato (
    idConta varchar(10),
    nome varchar(50),
    presencial boolean,
    modalidade varchar(30),
    dtInicio date,
    dtEncerramento date,
    recado varchar(50),
    verificado boolean,
    privado boolean,
    origem varchar(2),
    CONSTRAINT PK_Campeonato PRIMARY KEY(idConta),
    CONSTRAINT FK_Campeonato_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla)
);

CREATE TABLE Usuario (
    idConta varchar(10),
    nome varchar(50),
    nick varchar(30),     
    email varchar(100),
    senha varchar(50),
    genero varchar(50),
    recado varchar(50),
    verificado boolean,
    privado boolean,
    origem varchar(2),
	CONSTRAINT PK_Usuario PRIMARY KEY(idConta),
	CONSTRAINT FK_Usuario_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla)
);

CREATE TABLE Grupo (
    idConta varchar(10),
    nome varchar(50),
    recado varchar(50),
    verificado boolean,
    privado boolean,
    origem varchar(2),
	CONSTRAINT PK_Grupo PRIMARY KEY(idConta),
	CONSTRAINT FK_Grupo_Origem FOREIGN KEY(origem) REFERENCES Origem(sigla)
);

CREATE TABLE Equipe (
    idEquipe varchar(10),
    nome varchar(50),
    idGrupo varchar(10),
	CONSTRAINT PK_Equipe PRIMARY KEY(idEquipe),    
	CONSTRAINT FK_Equipe_Grupo FOREIGN KEY(idGrupo) REFERENCES Grupo(idConta)
);

CREATE TABLE Divisoes (
    idGrupo varchar(10),
    idSubgrupo varchar(10),
	CONSTRAINT FK_Divisoes_Grupo FOREIGN KEY(idGrupo) REFERENCES Grupo(idConta),    
	CONSTRAINT FK_Divisoes_Subgrupo FOREIGN KEY(idSubgrupo) REFERENCES Grupo(idConta)
);

CREATE TABLE equipeCampeonato (
    idEquipe varchar(10),
    idCampeonato varchar(10),    
	CONSTRAINT FK_EquipeCampeonato_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe),    
	CONSTRAINT FK_EquipeCampeonato_Campeonato FOREIGN KEY(idCampeonato) REFERENCES Campeonato(idConta)
);

CREATE TABLE usuarioEquipe (
    idUsuario varchar(10),
    idEquipe varchar(10),    
	CONSTRAINT FK_UsuarioEquipe_Equipe FOREIGN KEY(idEquipe) REFERENCES Equipe(idEquipe),    
	CONSTRAINT FK_UsuarioEquipe_Usuario FOREIGN KEY(idUsuario) REFERENCES Usuario(idConta)
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
('00000001', 'Matias Delipetro', 'Saadhak', 'saadhakloud@gmail.com', 'g@merP@ssw0rd', 'Masculino', null, true, false, 'BR'),
('00000002', 'Bruno Goes', 'Nobru', 'nobrustreamer@gmail.com', 'stre@m3rL1f3!', 'Masculino', null, true, false, 'BR'),
('00000003', 'Rodrigo Fernandes', 'El Gato', 'elgatorodrigo@live.com', 'whisk3rs&Me0ws', 'Masculino', null, true, false, 'BR'),
('00000004', 'Gustavo Gomes', 'BaianoLOL', 'baianolol@gmail.com', 'L0LP@ssw0rd', 'Masculino', null, true, false, 'BR'),
('00000005', 'Bryan Luna', 'pANcada', 'pancadabryan@hotmail.com', 'Sm@shTh3K3yb0@rd', 'Masculino', null, true, false, 'BR'),
('00000006', 'Alexandre Borba', 'Gaules', 'gaulesstreamer@hotmail.com', 'P@rtner4W1n!', 'Masculino', null, true, false, 'BR'),
('00000007', 'Bruno Bittencourt', 'PlayHard', 'playhardbr@hotmail.com', 'H@rdC0r3G@ming', 'Masculino', null, true, false, 'BR'),
('00000008', 'Felix Arvid', 'PewDiePie', 'pewds@gmail.com', 'Br0Fist!', 'Masculino', null, true, false, 'SE'),
('00000009', 'Richard Tyler', 'Ninja', 'ninja@gmail.com', 'N1nj@Str34m!', 'Masculino', null, true, false, 'US'),
('00000010', 'Michael Grzesiek', 'Shroud', 'shroud@gmail.com', 'Shr0udow3n3d', 'Masculino', null, true, false, 'CA'),
('00000011', 'Imane Anys', 'Pokimane', 'pokimane@live.com', 'P0k1L0v3r', 'Feminino', null, true, false, 'MA'),
('00000012', 'Bárbara Passos', 'Babi', 'babigamer@gmail.com', 'G@merG1rl!23', 'Feminino', null, true, false, 'BR'),
('00000013', 'Kaitlyn Siragusa', 'Amouranth', 'amouranth@live.com', 'H3@rtStr34m3r', 'Feminino', null, true, false, 'US'),
('00000014', 'Sara Bjean', 'Biyin', 'biyin@gmail.com', 'Biy1n4Ever!', 'Feminino', null, true, false, 'ES'),
('00000015', 'Anissa Baddour', 'AnniTheDuck', 'annitheduck@gmail.com', 'Qu@ckQu@ck123', 'Feminino', null, true, false, 'DE'),
('00000016', 'Felipe Basso', 'Less', 'felipe.basso@gmail.com', 'L3ssP@ssw0rd', 'Masculino', null, true, false, 'BR'),
('00000017', 'Gabriel Lima', 'Qck', 'gabriel.lima@gmail.com', 'Qck&Cr3@t1v3', 'Masculino', null, true, false, 'BR'),
('00000018', 'Arthur Vieira', 'Tuyz', 'arthur.vieira@gmail.com', 'V13w3r4Ll1f3!', 'Masculino', null, true, false, 'BR'),
('00000019', 'Cauan Pereira', 'cauanzin', 'cauan.p@gmail.com', 'C@u@n1!234', 'Masculino', null, true, false, 'BR'),
('00000020', 'Tyson Ngo', 'TenZ', 'tyson.ngo@gmail.com', 'T3nZ4R3@l', 'Masculino', null, true, false, 'CA'),
('00000021', 'Zachary Jude', 'Zekken', 'zachary.j@gmail.com', 'Z3kk3nP@ss!', 'Masculino', null, true, false, 'US'),
('00000022', 'Gustavo Rossi', 'Sacy', 'gustavo.rossi@gmail.com', 'R0ss!G@m3r', 'Masculino', null, true, false, 'BR'),
('00000023', 'Jimmy Nguyen', 'Marved', 'jimmy.nguyen@gmail.com', 'M@rv3dG0', 'Masculino', null, true, false, 'CA'),
('00000024', 'Leonardo Souza', 'Robo', 'leonardosouza@example.com', 'R0boP@ss', 'Masculino', null, true, false, 'BR'),
('00000025', 'Thiago Sartori', 'Tinonws', 'thiagosartori@example.com', 'T1n0nws!@#', 'Masculino', null, true, false, 'BR'),
('00000026', 'Park Jong-hoon', 'Croc', 'parkjonghoon@example.com', 'CrocR0cks!', 'Masculino', null, true, false, 'KR'),
('00000027', 'Denilson Oliveira', 'Ceos', 'denilsonoliveira@example.com', 'C30sG@m3r', 'Masculino', null, true, false, 'BR'),
('00000028', 'Moon Geom-su', 'Route', 'moongeomsu@example.com', 'R0ute66#', 'Masculino', null, true, false, 'KR');

INSERT INTO Campeonato VALUES 
('010101', 'CBLOL', true, 'Masculino', '2023/01/01', '2023/02/28', null, true, false, 'BR'),
('020202', 'LBFF', true, 'Misto', '2023/05/18', '2023/07/28', null, true, false, 'BR'),
('030303', 'Major CS', true, 'Masculino', '2023/07/01', '2023/07/27', null, true, false, null),
('040404', 'VCT Américas', true, 'Misto', '2023/02/25', '2023/04/30', null, true, false, null),
('050505', 'VCT Pacific', true, 'Misto', '2023/02/25', '2023/04/30', null, true, false, null),
('060606', 'VCT EMEA', true, 'Misto', '2023/02/25', '2023/04/30', null, true, false, null),
('070707', 'VCT Masters', true, 'Misto', '2023/05/10', '2023/06/05', null, true, false, null);

INSERT INTO Grupo VALUES
('0101', 'LOUD GG', 'Faz o L', true, false, 'BR'),
('0202', 'paiN Gaming', 'TRA DI ÇÃO', true, false, 'BR'),
('0303', 'Red Canids', null, true, false, 'BR'),
('0404', 'T1', null, true, false, 'KR'),
('0505', 'Sentinels', null, true, false, 'US'),
('0606', 'Leviatán', null, true, false, 'AR'),
('0707', 'NRG', null, true, false, 'US'),
('0808', 'DRX', null, true, false, 'KR'),
('0909', 'Fnatic', null, true, false, 'UK'),
('1010', 'Evil Geniuses', null, true, false, 'US');

INSERT INTO Equipe VALUES
('1011', 'LOUD Valorant', '0101'),
('2022', 'LOUD League of Legends', '0101'),
('3033', 'Sentinels Valorant', '0505');

INSERT INTO usuarioEquipe VALUES
('00000001', '1011'),
('00000017', '1011'),
('00000018', '1011'),
('00000019', '1011'),
('00000016', '1011'),
('00000024', '2022'),
('00000025', '2022'),
('00000026', '2022'),
('00000027', '2022'),
('00000028', '2022'),
('00000005', '3033'),
('00000020', '3033'),
('00000021', '3033'),
('00000022', '3033'),
('00000023', '3033');

INSERT INTO equipeCampeonato VALUES
('1011', '040404'),
('2022', '010101'),
('3033', '040404');

