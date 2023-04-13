# Aplicação CRUD com PHP e MySQL

### Desenvolvimento de uma aplicação onde se é possível adicionar, listar, atualizar e deletar clientes de um banco de dados MySQL.

Na [Página inicial](index.php) temos um formulário para a inserção de uma nova entrada no banco de dados, com uma `action` para o arquivo [`post_clientes`](post_cliente.php) utilizando o método `POST`. A função de inserção por sua vez utiliza de uma outra, [connDb](connDb.php) para se conectar ao banco de dados. Após a conexão é utilizada a função `mysqli_query()` para executar um codigo SQL com os dados recebidos do POST. Além disso também há um botão para retornar à página inicial.

Abaixo do formulário, ainda na página inicial, há um outro form com apenas um botão para a listagem de todas as entradas do banco de dados, que redireciona para o arquivo [listar_clientes.php](listar_clientes.php), que por sua vez também realiza um query e utiliza da função `mysqli_fetch_assoc()` que salva os resultados em objetos, e utiliza de um loop `while` para retorná-los ao usuário. Ademais das informações recebidas, também são retornados dois botões, que chamam repectivamente outras duas funções, [update_clientes](update_clientes.php) e [delete_clientes](delete_clientes.php), e nelas são passados como atributos, os respectivos `IDs` de cada inserção.

Agora no arquivo update_clientes, é redirecionado uma página com um formulário pré preenchido com as informações obtidas de uma query utilizando o id passado como parâmetro. O submit do form utiliza de um postback, utilizando a função do mesmo arquivo para fazer a atualização no banco de dados.

Por fim no arquivo delete_clientes, é utilizado do mesmo id, só que agora para executar um DELETE no banco de dados, e que após o mesmo, é redirecionado através da função `header('Location: listar_clientes.php')`, para a página de listagem, atualizada.


*Para configurar o banco de dados, criei um banco de dados chamado crud_app, criei um usuário chamado admin com todos os privilégios e para criar a tabela executei a seguinte query: `CREATE TABLE clientes(id SERIAL PRIMARY KEY NOT NULL, nome VARCHAR(30), sobrenome VARCHAR(30), email VARCHAR(30), idade INT);`*
*Utilizei o xampp para servir os arquivos e rodar o MySQL*



*Código Desenvolvido por Lucas Vieira Ribeiro*
