# Projeto EQMaravilha
### Repositório de códigos do projeto de TCC
<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#-funcionalidades">Funcionalidades</a> • 
 <a href="#-como-executar-o-projeto">Como executar</a> • 
 <a href="#-tecnologias">Tecnologias</a> • 
 <a href="#user-content--licença">Licença</a>
</p>

## 💻 Sobre o projeto
Repositório de códigos do site desenvolvido para o Trabalho de Conclusão de Curso (TCC) entitulado "EQMaravilha" dos alunos Aghata Pereira Pigari e Elias De Paula Souza do curso Técnico integrado em informática do Instituto Federal de Mato Grosso do Sul (IFMS) campus Jardim, 
<br>nosso **objetivo** é criar uma história em quadrinhos digital para promover maior contextualização e familiarização dos estudantes ingressantes com o Instituto Federal.
---

## ⚙️ Funcionalidades

- [X] Painel administrativo
  - [X] Publicar comentários cadastrados
  - [X] Remover publicação de um comentário
  - [ ] Gerenciar capítulos das HQ
  

- [X] Área pública
  - [X] Adicionar comentário

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

3. Configure a conexão com os dados do banco de dados no arquivo [configuracoes.php](./configuracoes.php):
```php  
    const DB_HOST = 'DSN do banco';
    const DB_USUARIO = 'usuário do banco';
    const DB_SENHA = 'senha do banco';
		const ADMINISTRADOR_LOGIN = 'login do usuario administrador';
		const ADMINISTRADOR_SENHA = 'senha do usuario administrador';
```
4. Execute o script de criação de tabelas na pasta
[database](./database). 

#### Clonando o repositório
$ git clone https://github.com/EliasPaulaSouza/EQMaravilha.git

#### Acessando a pasta do projeto no terminal/cmd
```bash   
$ cd EQMaravilha
```

#### Rodando o servidor em ambiente de desenvolvimento

1. Na pasta raiz do projeto execute a aplicação em modo de desenvolvimento com o comando:
```bash    
php -S localhost:8000
```
2. O servidor iniciará e poderá ser acessado pelo navegador na url: [http://localhost:8000](http://localhost:8000)

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