# Manual Básico
Seguem as intruções básicas para envio dos trabalhos, 
 Disciplinas:
  - LP II
  - LP III

### Como enviar o trabalho ?
  1. Instalar o GIT em sua plataforma (Win, MAC, Linux, etc)

      1. [Procedimento de instalação do GIT](https://git-scm.com/book/pt-br/v1/Primeiros-passos-Instalando-Git)

  1. Criar a pasta ```C:\teste-git``` no windows ou ```/var/teste-git``` no linux. Abrir o Git Bash, e executar no windows ```cd /c/teste-git``` ou ```cd /var/teste-git``` no linux. Seguem alguns tutoriais em caso de dúvida no uso do ```cd``` e outros comandos básicos.
      1. Windows: http://pt.wikihow.com/Alterar-Diret%C3%B3rios-no-Prompt-de-Comandos
      1. Linux: http://www.tiexpert.net/sistema-operacional/comandos-de-dos/cd.php
      1. Linux: https://www.tecmundo.com.br/atalho/1982-comandos-basicos-do-linux.htm
      1. Ambos: https://tutorial.djangogirls.org/pt/intro_to_command_line/
  1. Configurar o git. Na primeira utilização, é necessário fazer esta configuração.
      1. Executar no Git Bash ```git config --global user.name "$seuNome"``` Ex: ```git config --global user.name "Paulo Silva"```
      1. Executar também no Git Bash ```git config --global user.email $seuEmail``` Ex: ```git config --global user.email 05.paulotarso@gmail.com```
  1. Clonar o repositório da disciplina
      1. Executar o comando ```git clone https://github.com/meta-sistemas-2017/linguagem-programacao-2-3.git```.
      1. O git vai pedir usuário e senha, o mesmo criado no github
      1. O comando vai criar uma pasta com o nome ```linguagem-programacao-2```.
      1. Explore a pasta, veja o conteúdo.
  1. Instalar o PHP ( Se já instalado, então pular esta etapa )
      1. Windows: https://blog.schoolofnet.com/2015/04/como-instalar-o-php-no-windows-do-jeito-certo-e-usar-o-servidor-embutido/
      1. Linux: ```sudo apt-get install php7.0```
  1. Procedimentos após a implementação do trabalho
      1. ```git pull origin master```
      1. ```git add .```
      1. ```git commit -m "Atividade do dia x"```
      1. ```git push origin master```
      1. O git vai pedir usuário e senha, o mesmo criado no github
  1. Verificar se foi enviado
      1. Entrar no endereço do repositório ( https://github.com/meta-sistemas-2017/linguagem-programacao-2-3/commits/master ), e visualizar o seu commit
  1. Como Executar os exemplos
      1. ```php aula-1/foreach/professor-paulo.php```
## Acesso ao repositório
### É necessário aceitar o convite no email (o github te envia 2 emails, um pra você confirmar sua conta e outro pra aceitar o acesso no repositório).
Quem não estiver na listagem abaixo, favor entrar em contato, ou deixar algum comentário aqui no repositório.
O convite já foi enviado para:

Usuário | Situação
------- | --------
https://github.com/RRodrigoRamos | confirmação pendente no email
https://github.com/renanlmd | confirmação pendente no email
https://github.com/alexclei | OK :+1:
https://github.com/erikagato | confirmação pendente no email
https://github.com/MatheusSerra | confirmação pendente no email
https://github.com/dutraweslley | confirmaço pendente no email
https://github.com/CodEw47 | OK :+1:
https://github.com/joasribeiro | OK :+1:
https://github.com/VitorHugoSilva | confirmação pendente no email
https://github.com/gehnobre18 | OK :+1:
## Material de Apoio
  - https://www.dropbox.com/s/pd880jagfw982j7/Controle%20de%20Vers%C3%A3o%20de%20Software%20com%20Git.pdf?dl=0
## FAQ ( Dúvidas )
  - Whatsapp: 96991424429 ( Professor Paulo )
  - Email: 05.paulotarso@gmail.com
