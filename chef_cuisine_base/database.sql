CREATE database restaurant;

USE restaurant;
CREATE TABLE USERS (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) NOT NULL,
    email varchar(100) UNIQUE NOT NULL,
    phone int(15) UNIQUE NOT NULL,
    password varchar(200) NOT NULL,
    id_role int  NOT NULL
);

CREATE TABLE ROLES (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) NOT NULL
);

CREATE TABLE MENUS (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nom_menu varchar(100) NOT NULL,
    description TEXT
);
CREATE TABLE PLATS (
    id_plat INT AUTO_INCREMENT PRIMARY KEY,
    nom_plat varchar(100) NOT NULL,
    pic MEDIUMBLOB NOT NULL,
    ingredients TEXT,
    id_menu int,
    FOREIGN KEY (id_menu) REFERENCES MENUS(id_menu) ON DELETE CASCADE
);

CREATE TABLE RESERVATION (
    id_reservation int AUTO_INCREMENT PRIMARY KEY,
    id_user int NOT NULL,
    id_menu int  NOT NULL,
    date_reservation date NOT NULL,
    heure_reservation time NOT NULL,
    nombre_personnes int NOT NULL,
    statut ENUM('En attente', 'Valider', 'Refuse') DEFAULT 'En attente',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES USERS(id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_menu) REFERENCES MENUS(id_menu) ON DELETE CASCADE
);