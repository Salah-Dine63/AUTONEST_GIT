USE AUTONEST ;

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marque VARCHAR(100) NOT NULL,
    modele VARCHAR(100) NOT NULL,
    annee INT NOT NULL,
    couleur_car varchar(50) not null ,
     carburant varchar(50) not null,
    prix DECIMAL(10, 2) NOT NULL,

    description TEXT,
    image_url VARCHAR(255)
);
select *from cars ;