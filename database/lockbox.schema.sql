-- ==========================================================
-- 🚀 LockBox - Estrutura e dados iniciais do banco de dados
-- ==========================================================

-- Criação do banco LockBox (se ainda não existir)
CREATE DATABASE IF NOT EXISTS `lockbox`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

-- Seleciona o banco para uso
USE `lockbox`;

-- ========================
-- 🧍‍♂️ Tabela: usuarios
-- ========================
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `senha` VARCHAR(255) NOT NULL,
  `data_criacao` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

-- ========================
-- 📝 Tabela: notas
-- ========================
CREATE TABLE IF NOT EXISTS `notas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario_id` INT NOT NULL,
  `titulo` VARCHAR(255) NOT NULL,
  `nota` TEXT NOT NULL,
  `data_criacao` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usuario_id`) REFERENCES `usuarios`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;

  -- ==========================================================
-- 🌱 Dados de exemplo (usuário + nota demo)
-- ==========================================================

-- Usuário de teste (senha: 123456)
INSERT INTO `usuarios` (`nome`, `email`, `senha`)
VALUES (
  'Usuário Demo',
  'demo@lockbox.local',
  '$2y$10$KIXBn0T4R45SgGwFHQzp1ezqf5CZsyGc9wzH6y06WxvMijK7hQq1C'
);

-- Nota de demonstração
INSERT INTO `notas` (`usuario_id`, `titulo`, `nota`)
VALUES (
  1,
  'Bem-vindo ao LockBox',
  'Esta é uma nota de demonstração criada automaticamente.'
);