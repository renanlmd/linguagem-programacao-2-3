<?php
#
# O laço FOR em PHP é muito usado quando você sabe de onde até onde quer ir. A sintaxe # do FOR pode ser vista abaixo:
#
# No for, iniciamos setando nossa variável pelo valor inicial, seguido de um 
# ponto-e-vírgula, depois definimos a nossa condição de parada, seguido de outro 
# ponto-e-vírgula, e a 
# terceira parte é onde incrementamos o valor do contador do laço. Para só então 
# começarmos a entrar nos códigos que devem ser executados repetidamente.
# 


for($i = 1; $i <= 10; $i++) {
	echo "Estamos indo de $i até 10\n";
}