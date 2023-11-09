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