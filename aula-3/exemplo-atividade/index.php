<?php

require __DIR__ . '/Eletronico.php';
require __DIR__ . '/ComputadorDeMesa.php';
require __DIR__ . '/Notebook.php';
require __DIR__ . '/Celular.php';
require __DIR__ . '/Tablet.php';

$computador = new ComputadorDeMesa('Desktop DELL', 'Com alta capacidade de armazenamento e expansão', 1500);

$notebook = new Notebook('Notebook HP', 'Tenha os seus principais arquivos sempre à mão. Com o HD de 500GB você guarda suas fotos, músicas e filmes.', 2500);

$celular = new Celular('Desktop DELL', 'Design totalmente metálico. Câmera traseira de 13 MP com lente F1.7', 750.50);

$tablet = new Tablet('Galaxy Tab S2 8.0 4G', 'Com alta capacidade de armazenamento e expansão, o design do desktop é perfeito para espaços compactos e atividades do cotidiano.', 1750);


echo "{$computador->getNome()} - {$computador->getDescricao()} \nPREÇO: {$computador->calculaPreco()}\n";
echo "{$notebook->getNome()} - {$notebook->getDescricao()} \nPREÇO: {$notebook->calculaPreco()}\n";
echo "{$celular->getNome()} - {$celular->getDescricao()} \nPREÇO: {$celular->calculaPreco()}\n";
echo "{$tablet->getNome()} - {$tablet->getDescricao()} \nPREÇO: {$tablet->calculaPreco()}\n";