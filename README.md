<h1>Curso PHP - Alura</h1>

## Configuração

- Link de instalação: https://www.php.net/manual/pt_BR/install.php
- Arquivos importantes:
* php.ini-development -> arquivo de configuração do PHP para versão local (para projetos simples, pode remover o "development" do nome para ser lido)
* php.ini-production -> arquivo de configuração do PHP para versão de produção

## PHP na CLI

- Abra seu propent e digite -> echo "Olá mundo!"
- Terminal interativo (Interactive Shell), para utilizar esse modo digite -> php -a (nesse modo é necessário utilizar os padrões do PHP, como o caso de ; no final das instruções e linhas)
- Sair do moto interativo do PHP no propet digite -> quit
- Executar um arquivo php faça o seguinte -> navegue até o diretório onde o arquivo está e digite o comando php (nomedoarquivo.php) e dê enter!

## Conceitos

- Variáveis
- Tipos de dados
- Verificações: '||' e 'or' significam 'ou' / '&&' 'and' significa 'e'
- Loop
- Array => arrays numérios são os arrays padrão, onde o php atribui um valor numério iniciando no 0 ao índica do array, arrays associativos é quando utilizamos uma referência específica para o valor dessa chave, como por exempo nome, idade.
- Funções
- Include => Gera warning, é utilizado pra quando o arquivo não é essêncial para o funcionamento
- Require => é utilizado quando o arquivo é essencial, caso não encontre ele vai gerar um erro na linha onde chama ele "require_once" inclui e verifica se já não foi incruído.
- Passagem por referência & antes da variável do parâmetro, indica que irá usar a variável verdadeira como referencia