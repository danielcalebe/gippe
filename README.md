# GIPPE — Gestão Integrada para Pequenas Empresas

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Node.js](https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=node.js&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

## Descrição
O **GIPPE** é um sistema de gestão informatizado para pequenas empresas do setor de festas e eventos, desenvolvido como projeto de TCC no SENAI — CTTI.  
Permite controle de estoque, cadastro de clientes, gestão financeira e registro de pedidos e eventos de forma prática e eficiente.

## Objetivos
- Otimizar processos internos e reduzir tempo gasto com tarefas manuais.  
- Garantir precisão no controle de estoque e dados financeiros.  
- Melhorar o relacionamento com clientes e fornecedores.  
- Prover relatórios detalhados e controle completo de pedidos e eventos.  
- Criar uma solução escalável e acessível para pequenas e médias empresas.

## Funcionalidades

### Painel do Administrador
- Controle de Estoque  
- Cadastro de Clientes  
- Gestão Financeira  
- Registro de Pedidos e Eventos  
- Relatórios e Dashboard

### Painel do Cliente
- Cadastro e Login  
- Personalização de Pedidos  
- Agendamento de Eventos  
- Acompanhamento de Pedidos  
- Avaliações

## Requisitos do Sistema
- PHP >= 8.1  
- Composer  
- Node.js >= 16  
- NPM ou Yarn  
- MySQL >= 8.0  
- Servidor local (XAMPP, Laragon ou similar)

## Instalação
```bash
git clone https://github.com/usuario/gippe.git
cd gippe
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run dev
php artisan serve

## Vídeo de Demonstração

[![Assista ao vídeo no YouTube](https://img.youtube.com/vi/MuVJ9ZOaQkg/0.jpg)](https://www.youtube.com/watch?v=MuVJ9ZOaQkg)


## Tecnologias Utilizadas
- **Frontend:** HTML5, CSS3, Bootstrap, JavaScript  
- **Backend:** PHP (Laravel), Node.js, Express  
- **Banco de Dados:** MySQL  
- **Bibliotecas e Ferramentas:** Chart.js,
- **Controle de Versão:** Git & GitHub  



