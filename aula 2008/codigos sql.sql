CREATE DATABASE IF NOT EXISTS loja
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE loja;

CREATE TABLE produtos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT UNSIGNED NOT NULL DEFAULT 0,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE usuarios (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL UNIQUE,
    senha_hash VARCHAR(255) NOT NULL,
    perfil VARCHAR(20) NOT NULL
);

INSERT INTO usuarios (login, senha_hash, perfil) VALUES
('ana',   '$2y$10$hash_ficticio_ana',   'usuario'),
('admin', '$2y$10$hash_ficticio_admin', 'admin');

select * from produtos;