<?php include("cabecalho.php")?>
                <!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title> Exemplo</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <form action=calculadora.php" method="get" >
            Primeiro Numero: <input name="num1" type="text" />
            Segundo numero: <input name="num2" type="text" /> 
            Operacao (quatro operações):  <input name="operacao" type="text" /> 
            <input type="submit" value="Calcular" />     
    </form> 
    <?php
        $a = $_GET "num1";
        $b = $_GET "num2";
        $op =$_GET "operacao";
        $c = []
        if($op == "soma")
            $c = $a + $b;
            //echo $c = "resultado";
        else if($op == "subtracao")
            $c = $a - $b;
            //echo $c = "resultado";
        else if($op == "multiplicacao")
            $c = $a*$b;
            //echo $c = "resultado";
        else
            $c = $a/$b;
         echo "O resultado da operação é: $c";
    ?>      
    </body>
</html>

php
compartilharmelhorar esta pergunta
	
editada 4/04/14 às 18:11
bfavaretto♦
43,3mil778155
	
perguntada 4/04/14 às 18:07
Nathane
413
	
comentar
3 Respostas
ativas
mais antigas
votos
votar a favor
6
votar contra
	

Segue o código ajustado conforme sugestão do @perdeu, mas usando método POST e botões. Procurei manter a simplicidade do original, acrescentando alguns pequenos detalhes para ilustrar o uso do value do submit, e mais alguma sutilezas.

<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
      else if($op == '-')
         $c = $a - $b;
      else if($op == '*')
         $c = $a*$b;
      else
         $c = $a/$b;

      echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
   }

?>       
</body>
</html>


<?php include("rodape.php")?>
