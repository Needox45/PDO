-- PostgreSQL SQL Dump
-- Adaptation du fichier MySQL
-- Généré le : mer. 11 déc. 2024 à 16:20

BEGIN;

-- Suppression de la table si elle existe déjà
DROP TABLE IF EXISTS mp_users;

-- Création de la table `mp_users`
CREATE TABLE mp_users (
    rowid SERIAL PRIMARY KEY,
    username VARCHAR(64) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    firstname VARCHAR(64) NOT NULL,
    lastname VARCHAR(64) NOT NULL,
    date_created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    date_updated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    admin BOOLEAN NOT NULL
);

-- Insertion des données dans la table `mp_users`
INSERT INTO mp_users (rowid, username, password, firstname, lastname, date_created, date_updated, admin) VALUES
(1, 'roman', '81dc9bdb52d04dc20036dbd8313ed055', 'roman', 'fortier', '2024-11-20 17:01:29', '2024-11-20 17:01:49', FALSE);

COMMIT;
