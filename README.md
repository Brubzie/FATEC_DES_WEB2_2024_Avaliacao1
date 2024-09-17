# Fatec Desenvolvimento Web II 2024 Avaliação 1

## Funcionalidades

1. Área de Login/Logout
- **Login e Logout:** O sistema possui uma área de login que utiliza sessões (sessions) para gerenciar o acesso. Existem dois tipos de login:
  - **Coordenação:** Login: coordenacao, Senha: coordenacao
  - **Técnicos:** Login: tecnicos, Senha: tecnicos
- **Encerrar Sessão:** Permite que os usuários encerrem a sessão ativa.

2. Registro de Solicitações
- **Cadastro de Solicitações:** Coordenadores podem registrar solicitações com os seguintes campos:
  - **Registro da Solicitação:** Descrição do que precisa ser feito.
  - **Laboratório:** Laboratório onde a solicitação deve ser realizada.
  - **Prazo:** Data limite para a realização da solicitação.
  - **Curso Atendido:** Curso relacionado à solicitação (DSM ou GE).
- **Validação de Sessão:** O cadastro só pode ser realizado em uma sessão ativa como coordenador. Tentativas de cadastro em sessões desativadas ou como técnico redirecionam para a área de login ou painel, respectivamente.
- **Armazenamento em Arquivo Texto:** As solicitações são salvas em arquivos de texto com o formato:

~~~bash
Laboratório | Data Limite | Descrição da Demanda
~~~

  - Solicitações para GE são salvas em ge.txt.
  - Solicitações para DSM são salvas em dsm.txt.

3. Visualização de Solicitações por Curso
- **Visualizar Solicitações GE:** Botão que carrega uma página PHP para acessar e exibir todas as solicitações do arquivo ge.txt.
- **Visualizar Solicitações DSM:** Botão que carrega uma página PHP para acessar e exibir todas as solicitações do arquivo dsm.txt.
- **Validação de Sessão:** A visualização só é permitida em sessões ativas como coordenador ou técnico. Sessões desativadas redirecionam para a área de login.

4. Visualização de Todas as Solicitações
- **Visualizar Todas as Solicitações:** Botão que carrega uma página PHP para acessar e exibir todas as solicitações dos arquivos ge.txt e dsm.txt.

## Tecnologias Utilizadas

- **PHP Estruturado:** Linguagem de programação utilizada para desenvolver o sistema.
- **Sessions:** Utilizadas para gerenciar o login e logout dos usuários.
- **Arquivos de Texto:** Utilizados para armazenar as solicitações.

## Exemplo de Conteúdo dos Arquivos

dsm.txt

~~~bash
Laboratorio1 | 18/09/2024 | Instalar VS Code
Laboratorio2 | 20/09/2024 | Verificar Office instalado
~~~

ge.txt
~~~bash
Laboratorio1 | 18/09/2024 | Instalar VS Code
Laboratorio2 | 20/09/2024 | Verificar Office instalado
~~~

### Como Executar

1. **Configurar o Servidor:** Certifique-se de que o servidor web (Apache, Nginx, etc.) está configurado para executar arquivos PHP.
2. **Iniciar Sessão:** Acesse a área de login e utilize as credenciais fornecidas para iniciar a sessão.
3. **Cadastrar Solicitações:** Utilize a área de cadastro para registrar novas solicitações.
4. **Visualizar Solicitações:** Utilize os botões de visualização para acessar as solicitações registradas.
