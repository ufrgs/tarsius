--
-- File generated with SQLiteStudio v3.1.0 on qui ago 18 14:10:14 2016
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: distribuido
CREATE TABLE distribuido (
    id               INTEGER PRIMARY KEY AUTOINCREMENT,
    nome             VARCHAR,
    status           INTEGER DEFAULT (0),
    trabalho_id      INTEGER REFERENCES trabalho (id),
    tempDir          VARCHAR,
    dataDistribuicao INT,
    dataFechamento   INT,
    output           TEXT,
    exportado        BOOLEAN DEFAULT (0) 
);


-- Table: processo
CREATE TABLE processo (
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    pid         INT,
    status      INT,
    trabalho_id INTEGER REFERENCES trabalho (id) ON DELETE CASCADE
                                                 ON UPDATE CASCADE,
    workDir     VARCHAR,
    qtd         INTEGER,
    dataInicio  INTEGER,
    dataFim     INTEGER
);


-- Table: trabalho
CREATE TABLE trabalho (
    id                INTEGER PRIMARY KEY AUTOINCREMENT,
    nome              VARCHAR,
    sourceDir         VARCHAR,
    status            INTEGER DEFAULT (0),
    pid               INTEGER,
    tempoDistribuicao INTEGER DEFAULT (10),
    template          TEXT,
    taxaPreenchimento REAL    DEFAULT (0.3) 
);


COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
