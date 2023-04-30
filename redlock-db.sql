CREATE DATABASE redlock;

use redlock;

create table Users(
    ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Name varchar(255) NOT NULL,
    Alamat varchar(255) NOT NULL,
    Jabatan varchar(255) NOT NULL
);

INSERT INTO Users (Name, Alamat, Jabatan) VALUES
    ('Budiman Wijaya', 'Kemanggisan 123', 'SLA'),
    ('Jason', 'Gang Asem', 'Subco'),
    ('Michael Bryan Chandra', 'Tanah Sereal', 'JLA'),
    ('Vito Caris', 'Pejagalan', 'SLA'),
    ('Justine Winata Purwoko', 'Kemenangan 3', 'AstDev');
