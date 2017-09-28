<?php
		require __DIR__ . '/fatura.php';

		$fatura = new fatura;

		$fatura->getTotal(0);

		var_dump($fatura->getTotal());
