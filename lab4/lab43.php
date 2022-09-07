<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <?php
    //se crea el arreglo
       $numero= array();
       
        //se genera el primer número
        $pr_valor=mt_rand(1,20);
        array_push($numero, $pr_valor);

        $i=1;
        while($i<=20)
        {
          $valor=mt_rand(1,30);
          //if de in_array es para ver si un valor de repite en una matriz y si existe solo continua.
          if(in_array($valor, $numero))
          {
              continue;
          }
          else
          {
              //array_push es para meter los datos en la matriz 
              array_push($numero, $valor);
              $i++;



          }
           //print("valor: ".$numero);


          }

        
          for($t=1; $t<=20; $t++)
          {
              
       print("Array [".$t."] =".$numero[$t]."<br/>" );
            


             $max= max($numero);

          }

           echo("<br/>valor máximo es :  ".$max);
 

   ?>
</body>
</html>