<?PHP
  session_start();
?>

<HEAD>
  <TITLE>Laboratorio 12 </TITLE>
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
  </HEAD>
<BODY>
  <H1>Manejo de sesiones</H1>
  <H2>Paso 3: la variable ya se ha sido destruida y su valor se ha perdido</H2>
  <?PHP

     if(isset($_SESSION['var'])){
      $var = $_SESSION['var'];
     }else{
      $_var = "";
     }

print ("<P>Valor de la variable de sesion: $_var</P>\n");
session_destroy();

?>
<A HREF='lab121.php'>Volver al paso 1</A>
</BODY>
</HTML>