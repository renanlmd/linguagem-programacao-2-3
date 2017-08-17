# Legenda da situação dos trabalhos

Status | Descrição
------- | --------
:-1: | Não fez até agora
:hankey: | Fez com ``` <br/> ```
:confounded: | Fez com ``` ?> ```
:neutral_face: | Pode melhorar...
:frowning: | Gambiarra detected
:tada: | Muito bom
:sunglasses: | Top

# :one: Grupo 1 - [Renan, Milton, Pablo]

Situação
--------|
:-1:

Considere um programa para um banco, é bem fácil perceber que uma entidade extremamente importante para o sistema é a conta. Implemente a ```ContaCorrente``` e ```ContaPoupanca``` lembre-se de generalizar **atributos** e **métodos** que são comum à ambas.
O que toda conta tem e é importante para nós?

1. número da conta
2. nome do dono da conta
3. saldo
4. limite

## O que toda conta faz e é importante para nós? Isto é, o que gostaríamos de "pedir à conta"?

1. saca uma quantidade x
2. deposita uma quantidade x
3. imprime o nome do dono da conta
4. devolve o saldo atual
5. transfere uma quantidade x para uma outra conta y
6. devolve o tipo de conta

Crie um arquivo index.php que faça:
1. Setar o dono da conta através do construtor
2. Setar o limite de transferência para 600
3. Depositar 1300 na conta
4. Exibir o saldo atual
5. Sacar 300
6. Exibir o saldo atual
7. Sacar 400, deve gerar um erro e não autorizar o saque
8. Alterar o nome do dono
9. Criar a segunda conta e transferir 300

# :two: Grupo 2 - [Anderson, Alex, Weslley]

Situação
--------|
:tada:

Implemente uma classe Lampada com atributo:

1. ligada (tipo boolean) 

Com métodos:

1. liga()
2. desliga()
3. observa()

Os __métodos liga() e desliga() não devem retornar nada__, O método ```liga torna o atributo ligada true``` e o método ```desliga torna o atributo ligada false```.
Crie também o método observa() que retorna a String “ligada” se a lâmpada estiver ligada e “desligada” se a lâmpada estiver desligada. Acrescente um arquivo index.php.

O arquivo index.php deve:
1. Instanciar 2 objetos do tipo Lampada ($lamp1 e $lamp2)
2. Ligar o objeto $lamp1 e desligar o objeto $lamp2.
3. Usar o método observa() para mostrar se os objetos lamp1 e lamp2 estão “ligados” ou “desligados”.

# :three: Grupo 3 - [Rodrigo, Maurício, Everton]

Situação
--------|
:-1:

Crie uma classe chamada ```Fatura``` que possa ser utilizado por uma loja de suprimentos de informática para representar uma fatura de um item vendido na loja.
Uma fatura deve incluir as seguintes informações como atributos:
1. o número do item faturado,
2. a descrição do item,
3. a quantidade comprada do item e
4. o preço unitário do item.

**Sua classe deve ter um construtor** que inicialize os quatro atributos. Se a **quantidade não for positiva, ela deve ser configurada como 0**.
Forneça um método set e um método get para cada variável de instância ( atributos ). Além disso, forneça um método chamado getTotalFatura() que calcula o valor da fatura (isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor como um float. **Escreva um arquivo index.php** de teste que demonstra as capacidades da classe Fatura.
# :four: Grupo 4 - [nomes]

Situação
--------|
:-1:

A fim de representar empregados em uma firma, crie uma classe chamada ```Empregado``` que
inclui as três informações a seguir como atributos:

1. um primeiro nome;
2. um sobrenome;
3. um salário mensal;

Crie um método
1. calculaAumento($porcentagem)

**Sua classe deve ter um construtor que inicializa os três atributos**. Forneça um método set e get para cada atributo. Se o salário mensal não for positivo, configure-o como 0. **Escreva um arquivo index.php de teste** que cria 3 empregados, e fornece um aumento de **5%**, **10%** e **15%** respectivamente e exiba o salário de cada empregado.

# :five: Grupo 5 - [nomes]

Situação
--------|
:-1:

Crie uma classe Data para representar datas.

Represente uma data usando três atributos:
1. dia
2. mês
3. ano

Sua classe deve ter um construtor que inicializa os três atributos e verifica a validade dos valores fornecidos. Forneça um método set um get para cada atributo.
Forneça o método toString para retornar uma representação da data como string.
Considere que a data deve ser formatada mostrando o dia, o mês e o ano separados por barra (/).
**Escreva um arquivo index.php** para teste. Crie 3 objetos Data com datas diferentes, e exiba a data através do método ```__toString()```

# :six: Grupo 6 - [nomes]

Situação
--------|
:sunglasses:

Crie uma classe calculadora. Esta classe deve implementar as
operações básicas:
1. soma
2. subtracao
3. divisao
4. multiplicacao

Utilizando o conceito de herança crie uma classe chamada **CalculadoraCientifica** que implementa o seguinte cálculo: 

1. raizQuadrada

**Crie um arquivo index.php** para testar a execução. Crie um objeto ```Calculadora```, e execute as operações:
1. 10 + 35
2. 40 - 10
3. 20 * 10
4. 10 / 2

Crie um objeto **CalculadoraCientifica** e teste os métodos:
1. raizQuadrada(9)

# :seven: Grupo 7 - [Matheus, Carlos Eduardo, Leandro]

Situação
--------|
:-1:

Implemente uma classe abstrata de nome ```Forma``` onde são declarados dois
métodos abstratos:
1. calcularArea();

Crie, como subclasse de Forma, uma classe de nome Rectangulo com os atributos:
1. lado
2. altura

Implemente na classe Rectangulo os métodos herdados de Forma.
Observação: Para o calculo da área, use a formula: ```lado x altura```

Crie, como subclasse de Forma, uma classe de nome Circulo com o atributo:
1. raio

Implemente na classe Circulo os métodos herdados de Forma.
Observação: Para o calculo da área, use a formula: ```3,14 x raio²```, onde 3,14 corresponde ao valor de PI.

Crie, como subclasse de Retangulo, uma classe de nome Quadrado cujas instâncias são caracterizadas por terem os atributos lado e altura com o mesmo valor.
Observação: Para o calculo da área, use a formula: ```lado x altura```, onde lado e altura são iguais.

Crie um arquivo index.php; calcule e exiba as áreas do Quadrado, Círculo e Retângulo

# :eight: Grupo 8 [Joás, joão vitor, Erison]


Situação
--------|
:confounded: :neutral_face:

Crie uma classe ```Contato``` que possui dois atributos:
1. nome
2. email

Crie os ```getters``` e ```setters``` para os atributos

Crie outra classe chamada ```Agenda```, que possui um atributo

1. contatos

A classe ```Agenda``` deve conter um método para adicionar um novo contato em uma posição vazia do array,
outro método para buscar um contato (retorna uma instância de Contato) através do nome e, por fim,
um método para excluir um contato através do nome.
