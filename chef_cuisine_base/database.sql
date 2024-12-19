CREATE database restaurant;

USE restaurant;
CREATE TABLE USERS (
    id INT AUTO_INCREMENT PRIMARY KEY,
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
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) NOT NULL,
    description TEXT,
    image varchar(100) NOT NULL,
    ingredients TEXT,
    
);

CREATE TABLE RESERVATION (
    id int AUTO_INCREMENT PRIMARY KEY,
    id_user int AUTO_INCREMENT PRIMARY KEY,
    id_menu int  NOT NULL,
    date_reservation date NOT NULL,
    heure_reservation time NOT NULL,
    nombre_personnes int NOT NULL,
    statut ENUM('En attente', 'Valider', 'Refuse') DEFAULT 'En attente',
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_menu) REFERENCES MENUS(id) ON DELETE CASCADE
);

INSERT INTO `roles` (`id`, `nom`) VALUES (NULL, 'admin'), (NULL, 'user');
