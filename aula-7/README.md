# Atividade com duas questões! - VALE PONTO! MESMOS GRUPOS!


# Questão 1:

Cada grupo deve refatorar ( aplicar melhorias ) na atividade da pasta ```aula-3``` com base nos conceitos visto em sala sobre Classes Abstratas, Encapsulamento ( public, protected, private ) e Interface. E conforme o manual de boas práticas adicionado na pasta ```psr```.

Basta alterar os arquivos com as alterações e commitar. Não é necessário criar novos arquivos, vamos aproveitar o git.


# Questão 2


Utilizando o material de exemplo da pasta ```aula-7/exemplos``` e das aulas anteriores, crie uma interface que especifique uma interface ```FiguraGeometrica```, Uma classe ```Quadrado``` e Uma classe ```Triangulo```

**OBS: DEVE SER SEGUIDA AS ESPECIFICAÇÕES DAS PSR'S**

```FiguraGeometrica```, contendo 3 métodos:
- ```getNomeFigura()```
- ```getArea()```
- ```getPerimetro()```

Crie duas classes que implementam a interface:
Classes:
- ```Quadrado```
  - Atributos:
    - ```$lado```
  - Métodos
    - ```getLado()```
    - ```setLado($lado)```
    - ```getPerimetro()```
    - ```getNomeFigura()```
  - Observações:
    - A formula para calcular a área no método getArea() é: ```$lado * $lado```
    - O perímetro do quadrado no método getPerimetro() é: ``` $lado * 4 ```
    - O método getNomeFigura() deve retornar a string 'Quadrado'

- ```Triangulo```
  - Atributos:
    - ```$base```
    - ```$altura```
    - ```$ladoA```
    - ```$ladoB```
    - ```$ladoC```

  - Métodos:
    - ```getBase()```
    - ```setBase($base)```
    - ```getAltura()```
    - ```setAltura($altura)```
    - ```getLadoA()```
    - ```setLadoA($ladoA)```
    - ```getLadoB()```
    - ```setLadoB($ladoB)```
    - ```getLadoC()```
    - ```setLadoC($ladoC)```
    - ```getArea()```
    - ```getNomeFigura()```
  - Observações:
    - A formula para calcular a área no método getArea() é: ```( $base * $altura ) / 2```
    - O perímetro do triangulo no método getPerimetro() é: ``` $ladoA + $ladoB + $ladoC ```
    - O método getNomeFigura() deve retornar a string 'Triangulo'
