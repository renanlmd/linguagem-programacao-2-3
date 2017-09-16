# Resumo PSR's ( PHP Standards Recommendations )

## PSR-0
   - O namespace completo da classe, deve seguir a estrutura: ``` \NomeDoUsuario\NomeDoProjeto\NomeDaClasse ```
    - O namespace deve sempre começar do NomeDoUsuario
    - Cada namespace pode ter vários namespaces

Exemplo:

Usuário: **ptsilva**

Projeto: **Aula7**

Classe ```Conta.php```

```php
<?php
namespace Ptsilva\Aula7;

class Conta {
}
```

Classe ```ContaCorrente.php```

```php
<?php
namespace Ptsilva\Aula7;

class ContaCorrente extends Conta {
}

```
PSR-0: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
## PSR-1

- Arquivos php devem usar apenas tags ```<?php``` ou ```<?=```
- Arquivos php devem ser feitos utilizando charset UTF-8
- Deve-se evitar a exibição de conteúdo(Com ```echo```, por exemplo) dentro de classes, ou alterar configurações do php ( Com ```ini_set()```, por exemplo). Ao invés, você deve retornar valores e adicionar o ```echo``` no index.php
- Nome de classes SEMPRE devem ser o padrão ```StudlyCaps```. Ou seja, primeira letra em maiúscula, por exemplo: ```Conta```, ```Colecao```, ```Aluno```, ```Livro``` em classes com nome composto: ```ContaCorrente```, ```PagamentoDinheiro```, ```PagamentoCartao```
- Constantes SEMPRE devem ser declarados em letras maiúsculas, por exemplo:
```php
<?php
class Conta {
    // Exemplo de constante
    const TAXA_OPERACAO = 0.45
    
    public function sacar($valor)
    {
        // implementação...
    }
    
}
```

- Métodos devem ser declarados usando o padrão ```camelCase```. Por exemplo: ```sacar```, ```depositar```, ```transferir```, e em nomes compostos: ```efetuarPagamento```, ```iniciarTransacao```, ```buscarAlunos```, ```matricularAluno```

PSR-1: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md

## PSR-2

- Sempre usar identação de 4 espaços
- Deve sempre deixar uma linha em branco após a declaração do namespace na classe
- Uma linha de código deve evitar ultrapassar 80 caracteres, tendo como limite máximo 120 caracteres
- Abertura de chaves deve sempre ser feito em uma nova linha, por exemplo:
```php
// errado
if (true) {
    // implementação...
}

// correto
if (true)
{
    // implementação...
}
```
- A visibilidade de métodos e atributos sempre deve ser adicionado.
```php
class Conta {
    // por padrão, o php entende como public.
    $proprietario = '';
    
    // A maneira correta é:
    public $proprietario = '';
    
}
```

PSR-2: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
## PSR-4
 Segue as regras da PSR-0, porém, trata sobre Autoloaders ( Carregamento automático de classes ). Leiam as alterações, com exemplos e detalhes aqui:
 
 PSR-4: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md