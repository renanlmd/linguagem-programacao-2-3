Retirado de: https://www.ibm.com/developerworks/br/library/os-php-5.3namespaces/index.html 

**Autor:** Don Denoncourt

**Adaptado por:** Paulo Silva (ptsilva) 


# Aproveitando Namespaces do PHP V5.3 para um Código Legível Passível de Manutenção

"O Conan é a minha inspiração". Se eu falar isso à mesa meu filho pensará imediatamente que eu me inspiro em Conan, o Bárbaro, e a minha esposa pensará que eu quero ser como o apresentador de um programa de entrevistas, Conan O'Brien. Na TI, essa confusão de contextos é conhecida como colisão de nomes Muitas linguagens têm uma estratégia para lidar com a colisão de nomes e, na V5.3, o PHP também tem. O PHP resolve o problema da colisão de nomes com o seu novo recurso de namespaces. Obviamente, os nomes cuja colisão o PHP resolve não são nomes de pessoas — são nomes de classes, funções e constantes.

Este artigo explica por que você deve pensar em usar namespaces no seu próximo projeto. Fornece uma visão geral da semântica dos namespaces, apresenta boas práticas e oferece um aplicativo de amostra do tipo model view controller (MVC) que usa namespaces. Em seguida, o artigo trata do suporte para namespace no Eclipse, NetBeans e Zend Studio, com instruções específicas sobre o uso de namespaces com o Eclipse.

## Eu preciso de namespaces?

A simplicidade é um dos pontos fortes da linguagem PHP. Se você é iniciante em PHP, os namespaces são mais um conceito que você precisa entender. No entanto, se qualquer uma das alternativas a seguir for verdadeira, você deve pensar em usar namespaces:

- Você está desenvolvendo um arquivo grande, com centenas de arquivos PHP.
- Seu aplicativo está sendo desenvolvido por uma equipe de codificadores.
- Você pretende usar frameworks.
- Você usou namespaces (ou uma funcionalidade semelhante, como pacotes) em outras linguagens, como Java™, Ruby ou Python.

Se você é o único desenvolvedor de aplicativos relativamente pequenos, os namespaces podem não ser adequados para você. Entretanto, para o restante (inclusive eu), os namespaces fornecem uma forma limpa de organizar estruturas de classe e, obviamente, impedir a colisão de nomes. Essas são as duas razões pelas quais muitos desenvolvedores de framework estão adotando o uso de namespaces. O Zend Framework (o maior dos frameworks de PHP), por exemplo, está usando namespaces no Zend Framework V2.0.

## Uma visão geral rápida

O namespace fornece um contexto para o nome. Por exemplo: as duas classes mostradas na Listagem 1 têm colisão de nomes.

Listagem 1. Duas classes com o mesmo nome causam colisão sem namespaces

```php
<?php

class Conan {
    public $corpo = "forte";
    public $aniversario = 'muito tempo atrás';
    public $habilidade = 'lutador';
}
```
e

```php

<?php

class Conan {
    public $corpo = "fino";
    public $aniversario = '1963';
    public $habilidade = 'comédia';
}
```

Para especificar um namespace, você simplesmente inclui uma declaração de namespace como a primeira instrução da origem, como mostra a Listagem 2.

Listagem 2. Duas classes com o mesmo nome, mas com namespaces, resolve a colisão

```php

<?php
namespace Barbaro;

class Conan {
    public $corpo = "forte";
    public $aniversario = 'muito tempo atrás';
    public $habilidade = 'lutador';
}
```
e

```php
<?php

namespace Comediante;

class Conan {
    public $corpo = "fino";
    public $aniversario = '1963';
    public $habilidade = 'comédia';
}
```

Em um index.php

```php
<?php
$conan = new \Barbaro\Conan();
 
$conan = new \Comediante\Conan();
```

O código acima funciona bem, mas, antes que eu explique por que os dois Conans funcionam bem juntos, permita-me ressaltar duas coisas. Primeiro, estou usando asserções para provar que o código funciona conforme o esperado. Em segundo lugar, estou fazendo algo que você nunca deve fazer: declarando diversos namespaces em um arquivo de origem.

O namespace fornece um qualificador exclusivo para os dois Conans. O código estabelece claramente quando estou me referindo ao destruidor musculoso e quando se trata do apresentador do programa de entrevistas. Observe que a instanciação usa uma barra invertida (\) seguida pelo nome do namespace

```php
$conan = new \Barbaro\Conan();
```

e:

```php
$conan = new \Comediante\Conan();
```

Esses qualificadores se parecem com os qualificadores de diretório no estilo Windows® — e isso não está errado porque os namespaces suportam referências relativas e absolutas (da mesma forma que os diretórios) e porque é uma boa prática colocar a origem dos seus arquivos de classe em diretórios que correspondem aos namespaces.


## Usando namespaces

Talvez seja mais realista separar as duas classes Conan em diretórios chamados barbaro e comediante e, em seguida, fazer referência a essas classes a partir de outros arquivos PHP. Há duas formas de fazer referência a um namespace de PHP:
- Prefixar o nome de classe com o namespace
- Importar o namespace
- Usar um alias do namespace

Para usar a primeira opção, você simplesmente prefixa o nome de classe com o namespace (depois de incluir o arquivo de origem, obviamente):

```php
<?php

include "Barbaro/Conan.php";
$conan = new \Barbaro\Conan();

```

Isso é muito objetivo, mas o problema da estratégia da primeira opção é que, em um aplicativo grande, você teria que redigitar o namespace constantemente. Além da digitação, a base de código fica "bagunçada" desnecessariamente. Na opção dois, você importa o namespace com o uso de palavras reservadas do PHP:

```php
<?php

include "Barbaro/Conan.php";
use Barbaro\Conan;  
$conan = new Conan();
```

A opção três permite especificar um alias para o namespace:

```php
<?php

include "Barbaro/Conan.php";

use \barbaro\Conan as Cimmerian;

$conan = new Cimmerian();

```
(A propósito, Cimmerian (cimério), é um dos apelidos de Conan, o Bárbaro.)

Por enquanto, é só.

Se possível, leiam o texto na íntegra.

https://www.ibm.com/developerworks/br/library/os-php-5.3namespaces/index.html