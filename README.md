# instagram-view-feed-in-html
Exibição básica do Instagram - Incorporando Posts do Feed do Instagram no site


***************************************************************************************
**************************************  TUTORIAL **************************************
***************************************************************************************
1 - Gerar access token do Instagram
2 - Colocar access token no arquivo "instagram-api-token.txt"
3 - No arquivo "index.php" já tem um preview do uso da API do Instagram, validada pelo access token.
4 - Para atualizar o token, basta criar uma cron conforme o script no arquivo "instagram-api-update-token-cron.txt"

***************************************************************************************
************************************  GERANDO TOKEN ***********************************
***************************************************************************************

Configuração Inicial no Facebook
1 - Acessar link: https://developers.facebook.com/apps/?show_reminder=true
2 - Clicar em: Criar Aplicativos;
3 - Selecione um tipo de aplicativo: Consumidor e clicar em "Avançar";
4 - Adicione um nome para o app e Email de contato do aplicativo, após clicar em "Criar Aplicativo";
5 - Colocar senha da conta do facebook;
6 - Na tela "Adicionar produtos ao seu aplicativo", escolher a opção: "Exibição básica do Instagram", clicando em configurar.
7 - Clicar no botão "Create New App";
8 - Na tela "Create a New Instagram App ID", escolher o nome de exibição e clicar em "Criar Aplicativo";
9 - Ir até a sessão: "User Token Generator" e clicar em "Add or Remove Instagram Testers";
10 - Ir até a sessão: "Testadores do Instagram" e clicar em "Adicionar Testadores";
11 - Na janela que abrir colocar a conta do Instagram desejada, para visualização dos posts.

Configuração no Instagram
1 - Acessar o Instagram da conta adicionada no passo 11;
2 - No menu, ir na opção Configurações e selecionar "Apps e Sites";
3 - Ir na guia: "Convite de Testador" e clicar no botão "Aceitar";

Configuração Final no Facebook
1 - Voltar na plataforma Facebook Developers;
2 - Acessar Menu "Exibição Básica do Instagram" e clicar em "Exibição Básica"
3 - Ir até a guia "User Token Generator" e clicar no botão "Generate Token";
4 - Na janela que abrir selecionar a conta do Instagram escolhida no passo 11, e clicar no botão "Entrar";
5 - Na próxima janela clicar no botão "Permitir"
6 - Token gerado é só copiar e colocar na aplicação desejada.
