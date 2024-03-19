CREATE DATABASE agenda;

CREATE TABLE contacts(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150),
    phone VARCHAR(20),
    observations TEXT
);

INSERT INTO contacts (name, phone, observations) VALUES
('', '(13)995671223', 'Conhecido por ser um cliente regular.'),
('', '(13)9923451245', 'Costuma fazer pedidos grandes.'),
('', '(13)9918235678', 'Amiga próxima do dono.'),
('', '(13)12345678', 'Novo cliente.'),
('', '(13)98765432', 'Fornecedor confiável.'),
('', '(13)98765432', 'cliente antigo'),
('', '(13)98765432', 'Antigo cliente, às vezes pede grandes quantidades.');

