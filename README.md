# Projeto EQMaravilha
### Projeto de tcc do curso tecnico em informatica IFMS campus Jardim
<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#-funcionalidades">Funcionalidades</a> • 
 <a href="#-como-executar-o-projeto">Como executar</a> • 
 <a href="#-tecnologias">Tecnologias</a> • 
 <a href="#user-content--licença">Licença</a>
</p>

## 💻 Sobre o projeto
Repositorio do site do projeto de TCC dos alunos Aghata Pereira Pigari e Elias De Paula Souza
com o objetivo de criar uma história em quadrinhos digital (HQ) para promover maior contextualização e familiarização dos estudantes ingressantes com o Instituto Federal campus Jardim.


---

## ⚙️ Funcionalidades

- [X] Painel administrativo
  - [X] publicar comentarios cadastrados
  - [X] remover pubicação de comentarios
  

- [X] Area publica
  - [X] adicionar comentario

---
## 🚀 Como executar o projeto

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas: [Git](https://git-scm.com), [PHP](https://www.php.net/downloads) e [MySQL](https://www.mysql.com).

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)
### 🎲 Rodando o Projeto 

#### Criando o banco de dados
1. Faça a instalação do banco de dados `MySQL` ou  `MariaDB` (você pode utilizar tambem o XAMPP):
2. Crie um banco de dados com o nome `db_eqmaravilha`
> Sugestão MariaDB ou MySQL: definição de collation: **utf8mb4_general_ci**

3. Configure a conexão com os dados do banco de dados no arquivo `configuracoes.php`:
```php  
    const DB_HOST = 'DSN do banco';
    const DB_USUARIO = 'usuário do banco';
    const DB_SENHA = 'senha do banco';

```
4.rode o script de criação da tabela comentarios no arquivo `database\19700101_criar_tabela_comentario.sql`

# Clone este repositório
$ git clone https://github.com/EliasPaulaSouza/EQMaravilha.git

# Acesse a pasta do projeto no terminal/cmd
$ cd EQMaravilha

#### Rodando o servidor
```bash    
# Execute a aplicação em modo de desenvolvimento
php -S localhost:8000

# O servidor iniciará na porta:8000 - acesse <http://localhost:8000>
```
---
## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP](https://www.php.net/downloads)
- [MySQL](https://www.mysql.com)
- [Bootstrap](https://getbootstrap.com/)
- [JQuery](https://jquery.com/)

O seguinte template foi usado no projeto:
- [Nocobot Free Website Template](https://www.os-templates.com/free-website-templates/nocobot)
---


## 💪 Como contribuir para o projeto

1. Faça um **fork** do projeto.
2. Crie uma nova branch com as suas alterações: `git checkout -b my-feature`
3. Salve as alterações e crie uma mensagem de commit contando o que você fez: `git commit -m "feature: My new feature"`
4. Envie as suas alterações: `git push origin my-feature`

## 📝 Licença

Este projeto é um software de código aberto licenciado sob a licença [gnu general public license version 3.0 (gplv3)](./LICENSE).