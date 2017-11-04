# HTTP/ Composer / Laravel

## Material de estudo 

**Referência para o Av2**

- Sim, estudar para o AV2
- Sim, vai cair no AV2

<img src="https://cloud.githubusercontent.com/assets/288977/8779228/a3cf700e-2f02-11e5-869a-300312fb7a00.gif"/>

## HTTP
### Verbos HTTP (leia sobre os verbos nas referências abaixo)
  GET
  POST
    PUT
    PACTH
    DELETE
### Headers (leia sobre os headers nas referências abaixo)
  Accept
    Content-Type
    Accept-Language
    User-Agent
  Host
  Referer
    (...)
    
- https://developer.mozilla.org/pt-BR/docs/Web/HTTP
- https://woliveiras.com.br/posts/protocolo-http/ (Resumo simplificado sobre verbos e status )
- http://jplindgren.blogspot.com.br/2014/02/http-para-desenvolvedores.html
- http://blog.alura.com.br/desmistificando-o-protocolo-http-parte-1/
- https://nandovieira.com.br/entendendo-um-pouco-mais-sobre-o-protocolo-http
- https://tools.ietf.org/html/rfc2616 ( Documentação - RFC, principal fonte! )

Todos os artigos acabam falando a mesma coisa. Porém, ter a perspectiva de várias fontes sempre é interessantes.

**Leia, são curtos! ( Com exceção da documentação. )**

## Composer

Composer é uma ferramenta para gerenciamento de dependências para o PHP que vem ganhando espaço e se tornando cada vez mais indispensável. Com algumas poucas linhas de configurações você define todas as bibliotecas de terceiros ou mesmo suas que deseja/precisa utilizar em seu projeto, o composer encarrega-se de baixá-las e criar um autoloader deixando-as prontas para uso. Para muitos o composer ainda é um mistério então o intuito deste post é mostrar ao usuário que ainda não conhece como baixar, configurar e utilizar o composer de forma básica.

- https://tableless.com.br/composer-para-iniciantes/
- http://desenvolvimentoparaweb.com/php/composer-a-evolucao-php/
- https://www.webdevbr.com.br/utilizando-como-usar-o-composer-parte-1
- http://blog.thiagobelem.net/gerenciando-dependencias-com-o-composer
- https://github.com/composer/composer

Leitura bem simples também, curtas e com conteúdo interessante.

##  Laravel
### Instalação simples:

```shell
git clone https://github.com/laravel/laravel
cd laravel
rm -rf .git
cp .env.example .env
composer update
php artisan key:generate
php artisan serv
```

### Artisan
O Artisan é a ferramenta de linha de comando do Laravel e é instalada automaticamente quando se cria um novo projeto. Com ela, podemos gerar a maioria das classes que são as ferramentas disponibilizadas pelo framework. Pense em qualquer coisa. Precisa de um novo Model? 
```php
php artisan make:model Usuario
```
Precisa de um FormRequest?
```php
php artisan make:request UsuarioRequest
```

E assim para tudo o que se pode fazer com o framework.

Mas não se trata apenas de gerar classes. Fazendo uso do Artisan, suas classes já são criadas estendendo a classe correta, o arquivo é salvo na localização apropriada e o autoload.php, arquivo responsável por linkar todos os includes do projeto é automaticamente gerado, a cada vez que nova classe é incluída, tornando-a imediatamente disponível no Service Container do Laravel.

Indo um pouco além, é possível executar classes para – por exemplo – migrar estruturas de banco de dados. Migrations é um recurso (não exclusivo do Laravel) que permite criar a estrutura do banco de dados a partir de código PHP. É muito útil ao se trabalhar em equipe e para automatizar o deploy da aplicação nos servidores remotos. Adivinhe? Existe um comando artisan para rodar as migrations e criar as tabelas no seu banco de dados. As próprias classes de migration são geradas com um comando Artisan. O mesmo pode ser dito para DB Seeds, classes que geram dados fictícios, provendo uma massa inicial de dados muito importante para testar sua interface.

Outros recursos disponíveis são: colocar sua app em modo de manutenção, rodar um server local para servir a aplicação, visualizar a tabela de rotas da sua aplicação e – a cereja do bolo – rodar o comando Tinker que permite interagir com suas classes como se fosse pelo numa situação real. Pode-se criar um objeto do model, abastece-lo com dados e salvar estes dados no banco, tudo via linha de comando.[ http://www.vedovelli.com.br/web-development/o-que-e-o-artisan/ ]

### Rotas

O diagrama abaixo apresenta o fluxo e detalhes que são implementados durante o processamento de uma requisição/resposta HTTP. Além das rotas e views, o diagrama apresenta os controllers - Funções que separam o código das rotas e fazem o processamento da requisição.
- Rotas encaminham a requisição para o controller
- Controllers recebem a requisição e qualquer informação relacionada, e acessam a base de dados através do model, o controller cria um HTML ( ou qualquer outro formato ), e retorna a informação processada para o usuário. No retorno, normalmente é utilizado uma view como resposta.
<img src="https://mdn.mozillademos.org/files/14456/MVC%20Express.png"/>

Rotas no laravel devem ser criadas no arquivo ```web.php```, para criar uma, usamos:
```php
Route::get('bem-vindo', function () {
  echo "Bem vindo!";
});
```
Rotas com parâmetro:
```php
Route::get('usuarios/{id}/editar', function ($id) {
  echo "Você está editando o usuário com ID: {$id}";
});
```

```php
Route::get('usuarios/{n1}/{n2}/{n3}/editar', function ($numero1, $n2, $valor) {
  echo "Valor Total: " . $numero1 + $n2 + $valor;
});
```
Veja na documentação do laravel as opções para construção das rotas, além dos recursos extremamente úteis!

<a href="https://laravel.com/docs/5.5/routing">https://laravel.com/docs/5.5/routing</a>

Recursos interessantes descritos detalhadamente na documentação:
- Agrupamento de rotas
- Validação de parâmetros
- Parâmetros Opcionais
- Validação com Regex ( Expressões Regulares )
- Apelido de rota
- Sub domínio para rotas
- Namespace para rotas
- Prefixo para rotas

### Blade

Blade é uma simples, mas poderosa ferramenta de template para o laravel. Diferente das outras ferramentas de template do PHP, blade não restringe você no uso de PHP Puro, na verdade, as views no blade são compiladas para php e feito o cache até serem modificadas. Isso significa que o blade não adiciona sobrecarga no processamento da aplicação. Arquivos blade devem seguir a regra da extensão ```.blade.php``` e normalmente ficam armazenadas em ```resources/views```

Recursos do blade:
- @section (Reserva uma área no template, pode definir um conteúdo padrão)
- @yield (Reserva uma área no template, **não** pode definir um conteúdo padrão)
- @extends (Herda o conteúdo de outro arquivo blade, ou seja, usa como template)
- @include ( Apenas importa outro arquivo blade para o atual )
- Diretivas (@if, @while, @foreach, @switch). Utilitários para simplificar a escrita de código php na view.

Arquivo: **meu-template.blade.php**
```html
<html>
    <head>
        <title>LPIII - @yield('titulo')</title>
    </head>
    <body>
        @section('menu')
        <ul>
          <li>Esse é o menu padrão</li>
        </ul>
        @show

        <div class="container">
            @yield('conteudo')
        </div>
    </body>
</html>
```
Uso do @extends
Arquivo: **view-1.blade.php**
```html
@extends('meu-template')

@section('titulo', 'Aula - Blade')

@section('menu')
    <ul>
      <li>Esse é o NOVO MENU!</li>
    </ul>
@endsection

@section('conteudo')
    <p>Esse é o conteúdo.</p>
@endsection
```
Veja na documentação exemplos e uso das diretivas:

<a href="https://laravel.com/docs/5.5/blade#control-structures">https://laravel.com/docs/5.5/blade#control-structures</a>

<hr/>
E exemplos do @include:

<a href="https://laravel.com/docs/5.5/blade#including-sub-views">https://laravel.com/docs/5.5/blade#including-sub-views</a>
<hr/>

Leia a documentação completa do blade, existem outros recursos úteis:
- Componentes e Slots
- Stacks
- Injeção de Serviços ( Avançado ) 

Documentação completa: <a href="https://laravel.com/docs/5.5/blade">https://laravel.com/docs/5.5/blade</a>

### Controllers

Ao invés de definir toda a lógica de processamento nos arquivos de rotas, podemos organizar o comportamento da aplicação em classes apropriadas, também chamadas de Controllers. Controllers são armazenados em ``` app/Http/Controllers```
Veja este exemplo básico de um controller. Observe que o controller extende outra classe, que é padrão do laravel. Essa classe pai fornece alguns métodos convenientes para trabalhar.
<code>
```php
<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    /**
     * Exibe o perfil de um usuário
     *
     */
    public function exibir($id)
    {
      $usuario = User::findOrFail($id);
        return view('usuario.perfil', ['usuario' => $usuario]);
    }
}
```

**Não esqueça que definir a rota!**
```php
Route::get('usuario/{id}/perfil', 'UsuariosController@exibir');
```

Para criar um controller, use:

```shell
php artisan make:controller UsuariosController
```

### Migrações
```Antes de testar as migrações, configure seu banco de dados no arquivo .env```


Migrações são como sistemas de versionamento para o banco, permitindo que você e a sua equipe modifique e compartilhe a estrutura do banco de dados. Migrações são normalmente usadas com um construtor de banco de dados, também conhecido como Schema Builder. Todas as alterações no banco serão versionadas com as migrações. Esse recurso de versionamento, no laravel, está disponível para a maioria dos principais fabricantes( MySQL, PostgreSQL, SQLSRV, Sqlite), e existem plugins que suportam outros.

Para criar uma migração, use:

```php artisan make:migration create_usuarios_table```

A nova migração vai ser gerada em ```database/migrations```. Cada migração possui um timestamp que permite o laravel determinar a ordem de migração.

Este é o modelo de criação da migração:

```php
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('senha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}

```

Após criar a migração, basta executar:

```php artisan migrate```

Para atualizar a base de dados com a nova tabela.

```php php artisan reset```

Para destruir as tabelas!

```php php artisan migrate:refresh```

Para destruir as tabelas, e em seguida criar. ( Apenas um atalho que executa o reset e o migrate em apenas um comando )


**Evite alterar o nome da migração!**

**Toda  alteração na estrutura, deve ser feita em uma nova migração!**