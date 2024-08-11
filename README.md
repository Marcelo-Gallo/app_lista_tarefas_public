# Lista de Tarefas

Este repositório contém uma aplicação simples de "Lista de Tarefas" desenvolvida em PHP. A aplicação permite que os usuários adicionem, visualizem e removam tarefas de uma lista.

## Funcionalidades

- Adicionar uma nova tarefa
- Exibir a lista de tarefas
- Marcar tarefas como concluídas
- Remover tarefas da lista

## Estrutura do Projeto

A estrutura básica do projeto é a seguinte:

    ----Diretório publico htdocs do Xampp
    ├── index.php            
    ├── nova_tarefa.php        
    ├── todas_tarefas.php      
    ├── complete_task.php
    ├── css/
    │   └── estilo.css       
    ├── img
    │   └── logo.png

    ----Diretório privado
    ├── conexao.php           ->ignorada pelo .gitignore
    ├── tarefa.model.php        
    ├── tarefa.service.php
    ├── banco_de_dados.sql     ->script de criação do banco de dados
    ├── .gitignore

## Requisitos

- PHP 7.4 ou superior
- Servidor Web (Apache, Nginx, etc.)
- Banco de dados MySQL

## Instalação

1. Clone este repositório:

    ```bash
    git clone https://github.com/Marcelo-Gallo/lista-de-tarefas.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd lista-de-tarefas
    ```

3. Retire do diretório público o diretório nomeado "Lista_Tarefas_Private":

    ```bash
    mv /caminho/para/diretorio-publico/Lista_Tarefas_Private /caminho/para/diretorio-destino/
    ```

4. Configure o banco de dados MySQL:

    - Crie um banco de dados chamado `lista_de_tarefas`.
    - Importe o arquivo `banco_de_dados.sql` localizado na raiz do projeto.

5. Configure o arquivo de conexão com o banco de dados (`conexao.php`):

    ```php
    <?php
    class Conexao {

        private $host = 'localhost';
        private $dbname = 'lista_tarefas';
        private $user = 'seu-usuario';
        private $pass = 'sua-senha';

        public function conectar(){
            try {

                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                return $conexao;

            } catch (PDOException $e){
                echo '<p>' . $e->getMessage() . '</p>';
            }
        }

    }
    ?>
    ```

6. Inicie o servidor web e acesse a aplicação através do navegador:

    ```
    http://localhost/app_lista_tarefas_public
    ```

## Uso

- **Adicionar Tarefa:** Insira o nome da tarefa no campo de texto e clique em "Adicionar".
- **Marcar como Concluída:** Clique na caixa de seleção ao lado da tarefa.
- **Remover Tarefa:** Clique no botão "Excluir" ao lado da tarefa que deseja remover.
