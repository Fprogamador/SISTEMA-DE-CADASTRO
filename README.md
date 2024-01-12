Este projeto é um sistema web que oferece funcionalidades básicas de cadastro, login e gestão de usuários. Os usuários podem se cadastrar, acessar o sistema após o login e visualizar uma lista de usuários registrados. Além disso, há a opção de pesquisar e editar os dados dos usuários existentes, assim como excluir registros. O sistema utiliza tecnologias web padrão, como HTML para estrutura, CSS para estilo, PHP para lógica de servidor e interação com o banco de dados MySQL, e Bootstrap para alguns estilos adicionais.
USANDO PHP, E DESENVOLVIMENTO WEB.

O projeto apresentado consiste em um sistema web com as seguintes funcionalidades:

1. **Página de Login (login.php):**
   - Exibe links para "Entrar" e "Criar nova conta."
   - Ao clicar em "Entrar" ou "Criar nova conta," o usuário é redirecionado para as respectivas páginas.

2. **Página de Registro (formulario.php):**
   - Formulário para cadastro de usuários, incluindo campos como nome, e-mail, senha, telefone, gênero, data de nascimento, cidade, estado e endereço.
   - Utiliza o método POST para enviar os dados ao servidor.
   - As informações são processadas no arquivo PHP (formulario.php) e inseridas no banco de dados MySQL após a validação.

3. **Página Principal (home.php):**
   - Exibe um link para voltar à página anterior.

4. **Página do Sistema (sistema.php):**
   - Requer autenticação; redireciona para a página de login se o usuário não estiver autenticado.
   - Lista usuários armazenados no banco de dados.
   - Permite pesquisar usuários com base em ID, nome ou e-mail.
   - Cada usuário listado tem opções para editar ou excluir.

5. **Página de Edição (edit.php):**
   - Permite editar as informações de um usuário específico.
   - Após as alterações, os dados são atualizados no banco de dados.

6. **Página de Saída (sair.php):**
   - Encerra a sessão do usuário e redireciona para a página de login.

O projeto usa HTML para estruturação das páginas, CSS para estilização e PHP para a lógica do servidor, manipulação de dados e interação com o banco de dados MySQL. O Bootstrap é utilizado para alguns estilos adicionais e funcionalidades na página do sistema.

