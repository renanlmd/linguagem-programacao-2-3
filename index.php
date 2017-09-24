<?php
require __DIR__ . '/vendor/autoload.php';



use Coduo\PHPHumanizer\NumberHumanizer;

echo NumberHumanizer::binarySuffix(1536); // "1.5 kB"
NumberHumanizer::binarySuffix(1048576 * 5); // "5 MB"




 ?>
