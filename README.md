\# 🚀 CRUD PHP — Sistema de Cadastro



Sistema \*\*CRUD (Create, Read, Update, Delete)\*\* desenvolvido em \*\*PHP\*\*, permitindo cadastrar, consultar, editar e excluir registros de forma simples e organizada.



\---



\## 📌 Sobre o Projeto



Este projeto foi desenvolvido com o objetivo de praticar e demonstrar o funcionamento de um sistema CRUD utilizando PHP e banco de dados.



O sistema permite realizar as principais operações de gerenciamento de dados:



\* ➕ \*\*Cadastrar\*\* novos registros

\* 🔎 \*\*Consultar\*\* registros

\* ✏️ \*\*Editar\*\* informações

\* 🗑️ \*\*Excluir\*\* registros



\---



\## 🛠️ Tecnologias Utilizadas



\* 🐘 \*\*PHP\*\*

\* 🗄️ \*\*MySQL\*\*

\* 🌐 \*\*HTML5\*\*

\* 🎨 \*\*CSS3\*\*

\* ⚡ \*\*JavaScript\*\*

\* 🔗 \*\*PDO\*\* para conexão com o banco de dados

\* 💻 \*\*XAMPP\*\* para ambiente de desenvolvimento



\---



\## ⚙️ Funcionalidades



\### ➕ Cadastro



Permite inserir novos registros no banco de dados através de um formulário.



\### 🔎 Consulta



Exibe os registros cadastrados em uma tabela, facilitando a visualização das informações.



\### ✏️ Edição



Permite alterar os dados de um registro já existente.



\### 🗑️ Exclusão



Possibilita remover registros do banco de dados.



\---



\## 📂 Estrutura do Projeto



```text

crud-php/

│

├── 📁 css/

│   └── estilo.css

│

├── 📁 js/

│   └── script.js

│

├── 📁 config/

│   └── conexao.php

│

├── 📄 index.php

├── 📄 cadastrar.php

├── 📄 editar.php

├── 📄 excluir.php

├── 📄 salvar.php

└── 📄 README.md

```



\---



\## 🗄️ Banco de Dados



O projeto utiliza \*\*MySQL\*\* para armazenar os dados.



Exemplo de criação do banco:



```sql

CREATE DATABASE crud\_php;



USE crud\_php;



CREATE TABLE usuarios (

&#x20;   id INT AUTO\_INCREMENT PRIMARY KEY,

&#x20;   nome VARCHAR(100) NOT NULL,

&#x20;   email VARCHAR(100) NOT NULL,

&#x20;   telefone VARCHAR(20)

);

```



\---



\## 🔧 Como Executar o Projeto



\### 1. Instale o XAMPP



Instale o \*\*XAMPP\*\* e inicie os serviços:



\* Apache

\* MySQL



\### 2. Coloque o projeto no XAMPP



Copie a pasta do projeto para:



```text

C:\\xampp\\htdocs\\

```



Exemplo:



```text

C:\\xampp\\htdocs\\crud-php

```



\### 3. Crie o banco de dados



Abra o \*\*phpMyAdmin\*\* e execute o script SQL disponível neste README.



\### 4. Configure a conexão



Edite o arquivo:



```text

config/conexao.php

```



Configure os dados do seu banco:



```php

<?php



$host = "localhost";

$banco = "crud\_php";

$usuario = "root";

$senha = "";



try {

&#x20;   $pdo = new PDO(

&#x20;       "mysql:host=$host;dbname=$banco;charset=utf8",

&#x20;       $usuario,

&#x20;       $senha

&#x20;   );



&#x20;   $pdo->setAttribute(

&#x20;       PDO::ATTR\_ERRMODE,

&#x20;       PDO::ERRMODE\_EXCEPTION

&#x20;   );



} catch (PDOException $e) {

&#x20;   die("Erro na conexão: " . $e->getMessage());

}

```



\### 5. Acesse o sistema



No navegador, acesse:



```text

http://localhost/crud-php

```



\---



\## 🔄 Funcionamento do CRUD



```text

&#x20;             ┌──────────────┐

&#x20;             │    SISTEMA   │

&#x20;             └──────┬───────┘

&#x20;                    │

&#x20;       ┌────────────┼────────────┐

&#x20;       ▼            ▼            ▼

&#x20;  ➕ CREATE     🔎 READ       ✏️ UPDATE

&#x20;       │            │            │

&#x20;       └────────────┼────────────┘

&#x20;                    ▼

&#x20;                🗑️ DELETE

```



\---



\## 🔐 Boas Práticas



O projeto utiliza algumas práticas importantes:



\* Uso de \*\*PDO\*\* para conexão com o banco

\* Separação da conexão em arquivo próprio

\* Validação dos dados recebidos

\* Uso de `prepared statements`

\* Organização dos arquivos por responsabilidade

\* Proteção contra SQL Injection



\---



\## 📚 Objetivo Educacional



Este projeto pode ser utilizado para estudar:



\* PHP

\* Banco de dados

\* SQL

\* CRUD

\* Conexão PHP + MySQL

\* Desenvolvimento Web

\* Organização de projetos

\* Programação Back-End



\---



\## 🚧 Melhorias Futuras



Algumas funcionalidades que podem ser adicionadas futuramente:



\* 🔐 Sistema de login

\* 👤 Controle de usuários

\* 🔍 Pesquisa de registros

\* 📄 Paginação

\* 📊 Dashboard

\* 📱 Responsividade

\* 🔒 Criptografia de senhas

\* ✅ Validação avançada de formulários

\* 🌙 Modo escuro



\---



\## 👨‍💻 Autor



Desenvolvido por \*\*\[Seu Nome]\*\*.



\---



\## ⭐ Contribuição



Se quiser contribuir com o projeto:



```bash

git clone https://github.com/seu-usuario/crud-php.git

```



Depois faça suas alterações, crie um commit e envie um Pull Request.



\---



\## 📄 Licença



Este projeto foi desenvolvido para fins \*\*educacionais\*\*.

