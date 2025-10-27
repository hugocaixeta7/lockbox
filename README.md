# 🔒 LockBox — Gerenciador de Notas Criptografadas

Aplicação web para criar e gerenciar **notas privadas** com **login/registro**, **busca**, **tema dark** e **criptografia no servidor**.  
Stack: **HTML**, **CSS + DaisyUI (Tailwind)**, **PHP**, **Composer**, **MySQL** e **JavaScript**.

---

## ✨ Funcionalidades

- 👤 Autenticação: registrar, login e logout.  
- 📝 CRUD de notas: criar, listar, buscar, atualizar e deletar.  
- 🔐 Criptografia **AES-256** (lado do servidor) para o conteúdo das notas.  
- 🌙 Interface com **DaisyUI** (tema escuro responsivo).  
- 🔎 Busca por título ou conteúdo.  
- 🗑️ Confirmação antes de excluir (soft delete opcional).  
- ⏱️ Metadados: data de criação e atualização.  
- 📱 Layout totalmente responsivo.

---

## 📦 Tecnologias

- **PHP 8+** (servidor)  
- **Composer** (autoloader e dependências)  
- **MySQL 8+**  
- **HTML5 / CSS3 + DaisyUI (Tailwind)**  
- **JavaScript (vanilla)**

---

## 🗄️ Banco de Dados

O projeto inclui o arquivo [`database/lockbox.schema.sql`](database/lockbox.schema.sql),  
que cria automaticamente o banco **lockbox**, as tabelas e um **usuário de demonstração**.

**Usuário de Teste:**

Email: demo@lockbox.local

Senha: 123456

---

## 🖼️ Demonstração

> Algumas telas do sistema — login, registro e dashboard de notas.

<p align="center">
  <img src="docs/screenshots/login.png" alt="Tela de Login" width="400">
  <img src="docs/screenshots/dashboard.png" alt="Dashboard" width="400">
  <img src="docs/screenshots/unlock.png" alt="Tela Unlock" width="400">
</p>

---
