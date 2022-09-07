<?php
$porcentaje=$_POST['porcentaje'];

if($porcentaje>=80)
{
    //se usa para ingresar la imagen
    echo "<img src=\"semaforoVerde.jpg\">";
}
elseif($porcentaje>=50 && $porcentaje<=79)
{
   echo "<img src=\"semaforoAmarillo.jpg\">";
  

}
else 
{
 echo "<img src=\"semaforoRojo.jpg\">";

}


?>