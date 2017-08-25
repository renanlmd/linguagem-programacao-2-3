 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 <meta charset="utf-8">
   <title> QUESTAO 1 </title>
 </head>
 <body>

 
            <form action="" method="post">
    primeiro valor:  <input type="number" name="primeiro" /><br />
    segundo valor: <input type="number" name="segundo" /><br />
    <input type="submit" name="enviar" value="ENVIAR" />
    
</form>

<?php
           if ($_POST) {
             $a=$_POST['primeiro'];
             $b=$_POST['segundo'];


            $a=5;
            $b=7;
            if($a>$b){
            echo "o maior valor é a: $a";
            }else{
            echo "o maior valor é b: $b";
                        



  
   ?>
 </body>
</html> 