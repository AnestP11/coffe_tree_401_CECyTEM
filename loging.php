<?php
ini_set('display_errors','Off');
ini_set('display_startup_errors','Off');
error_reporting(0);

$usuario = $_POST['usuario'];
$cont = $_POST['cont'];
if ($usuario == "coffeetree.cecy@gmail.com" AND $cont == "cafe1234"){
    echo '<html>
    <head>
        <title>Menú</title>
        <link rel="stylesheet" href="./css/Forma_loging.css">
    </head>
    <body>
        <center>
           <div class="login__container">
       <div class="login__top">
          <h2 class="login__title">Bienvenido a <span>Coffe Tree</span></h2>
       </div>
            <form action="home.html" method="get">
                <input type="submit" name="boton" value="Ingresar" class="btn__submit">
            </form>
            </div>
        </center>
    </body>
</html>';
}else{
    echo "<html><center><h1>Error</h1>
    <a href='loging.html'>volver</a></center></html>";
}
?>