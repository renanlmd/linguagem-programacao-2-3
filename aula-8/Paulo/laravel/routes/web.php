<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
echo "blog";
});

Route::get('/admin', function () {
echo "Pagina Administrativa";
});

Route::get('/usuarios', function () {
echo "<table border='1px'>
  <td>Jose</td>
  <td>maria</td>
  <td>pedro</td>
  <td>joao</td>
</table>";
});

Route::get('/mat', function () {
$a1=4; $a2=5; $a3=6; $a4=7; $a5=8;
$result=($a1+$a2+$a3+$a4+$a5)/5;
echo "$result";
});

Route::get('/nomes', function () {
  $paulo="paulo"; $paul="paulo";
  if ($paulo==$paul) {
    echo "$paulo";
  }
  else {
    echo "nomes diferentes";
  }
});

Route::get('/exibe', function () {
    return view('exibe', ['name' => 'paulo']);
});
