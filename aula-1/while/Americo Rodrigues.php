<?php

$local = 'Faculdade';

$i = 0;

while($local == 'Faculdade') {
	$i = $i +1;

	echo "$i - Estamos na faculdade\n";

	if($i == 3) {
		echo "Saímos da faculdade\n";
		break;
	}
}