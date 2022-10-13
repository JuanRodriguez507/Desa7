<?PHP
if (array_key_exists('enviar', $_POST)){
	$expire=time()+60*5;
	setcookie("user", $_REQUEST['visitame'] , $expire);
	header("Refresh:0");
}
?>
<HTML LANG="es">
<HEAD>
  <TITLE>Laboratorio 13 </TITLE>
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
  </HEAD>
<BODY>
  <H1>Creacion de Cookies</H1>
  <H2>La cookie "User" tendra solo 5 minutos de duracion</H2>
  <?PHP

  if(isset($_COOKIE["user"])){
  	print ("<BR>Hola <B>".$_COOKIE["user"]."</B> gracias por visitar nuestro sitio web<BR/>");
    }else{
    	?>
    	<FORM NAME="formcookie" METHOD="post" ACTION="lab132.php">
    		<BR/>Hola, primera vez que te vemos por nuestro sitio web.Como te llamas?
    		<INPUT TYPE="text" NAME="visitante">
    		<INPUT NAME ="enviar" VALUE="Gracias por indentificarte" TYPE="submit" /><BR/>
    		<?PHP 
    }
    ?>
<BR/><A HREF="lab133.php">Continuar....</A>
</BODY>
</HTML>





  }
