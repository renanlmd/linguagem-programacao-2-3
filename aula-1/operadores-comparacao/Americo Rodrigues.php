<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <title>Untitled Document</title>
    </head>
    
    <body>
    <form class="" action="" method="post">
        Digite Primeiro Valor:
        <input type="number" name="valor1" value="" required="Valor Obrigatorio !">
        Digite Segundo Valor:
        <input type="number" name="valor2" value="" required="Valor Obrigatorio !">
        <input type="submit" name="BTN_enviar" value="ENVIAR"> 
        
        </form>
		<?php
			$n1=$_POST['valor1'];
			$n2=$_POST['valor2'];
			if($n1>$n2){
				echo "O maior valor é : $n1";
			}else{
				echo "O maior valor é : $n2";
					}
        ?>
        
    </body>
</html>