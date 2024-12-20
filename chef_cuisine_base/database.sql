CREATE database restaurant;

USE restaurant;
CREATE TABLE USERS (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) NOT NULL,
    email varchar(100) UNIQUE NOT NULL,
    phone varchar(15) UNIQUE NOT NULL,
    password varchar(200) NOT NULL,
    id_role int  NOT NULL
);

CREATE TABLE ROLES (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) NOT NULL
);

CREATE TABLE MENUS (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) NOT NULL,
    description TEXT,
    image varchar(100) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL
);

CREATE TABLE RESERVATION (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    id_menu INT NOT NULL,
    nom varchar(100) NOT NULL,
    date_reservation DATE NOT NULL,
    heure_reservation TIME NOT NULL,
    nombre_personnes INT NOT NULL,
    statut ENUM('En attente', 'Valider', 'Refuse') DEFAULT 'En attente',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_menu) REFERENCES MENUS(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_user) REFERENCES USERS(id) 
);

INSERT INTO `roles` (`id`, `nom`) VALUES (NULL, 'admin'), (NULL, 'user');

