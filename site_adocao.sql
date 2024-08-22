USE site_adocao;

CREATE TABLE Gatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    idade INT,
    sexo ENUM('Macho', 'Fêmea'),
    raca VARCHAR(100),
    cor VARCHAR(50),
    descricao TEXT,
    foto_url VARCHAR(255)
);
CREATE TABLE AdocaoGatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    idade INT,
    sexo ENUM('Macho', 'Fêmea'),
    cor VARCHAR(50),
    descricao TEXT,
    foto_url VARCHAR(255)
);

CREATE TABLE ADM (
     id INT auto_increment PRIMARY KEY,
     nome VARCHAR (50) NOT NULL,
     email VARCHAR(255) NOT NULL UNIQUE,
     senha_hash VARCHAR (255) NOT NULL,
     ultimologin DATETIME
     );