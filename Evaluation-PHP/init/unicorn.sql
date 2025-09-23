CREATE DATABASE IF NOT EXISTS `unicorn`;
USE `unicorn`;

-- Table user
CREATE TABLE IF NOT EXISTS user(
                                   id INT AUTO_INCREMENT NOT NULL,
                                   pseudo VARCHAR(150) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    role VARCHAR(20),
    CONSTRAINT user_PK PRIMARY KEY (id)
    ) ENGINE=InnoDB;

INSERT INTO `user` (pseudo, password, email, role)
VALUES
    ('admin', '$2y$10$nOKg1zyCkX3UvJqDMyP6AOXefZydt8D4o/QEt/zaSadGdyWXK6D8q', 'admin@gmail.com', 'admin'),
    ('utilisateur', '$2y$10$nOKg1zyCkX3UvJqDMyP6AOXefZydt8D4o/QEt/zaSadGdyWXK6D8q', 'utilisateur@gmail.com', 'user');

-- Table heros
CREATE TABLE IF NOT EXISTS heros (
     id INT AUTO_INCREMENT NOT NULL,
     name VARCHAR(100) NOT NULL,
    magic_power VARCHAR(255) NOT NULL,
    image VARCHAR(255),
    CONSTRAINT heros_PK PRIMARY KEY (id)
    ) ENGINE=InnoDB;

INSERT INTO `heros` (name, magic_power, image) VALUES
   ('Lunaria', 'Contrôle des rêves', '1.png'),
   ('Astrellia', 'Guérison des blessures', '2.png'),
   ('Sylphira', 'Voyage entre les dimensions', '3.png'),
   ('Néboria', 'Invocation de la lumière pure', '4.png'),
   ('Éthéria', 'Lecture des émotions', '5.png');
