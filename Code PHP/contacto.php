<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilos_generales.css">
    <link rel="stylesheet" href="css/estilo_contacto.css">

</head>
<body>

    <?php include('header.php'); ?>

    <section class = "contacto_contenido">

        <form action="enviar_consulta.php" method = "POST">

            <label for="nombre"> Nombre</label>
            <input id = "nombre"type="text" name = "nombre" class = "contacto_input">
            <label for="apellido"> Apellido</label>
            <input id = "apellido" type="text" name = "apellido" class = "contacto_input">
            <label for="mail"> Mail</label>
            <input id= "mail" type="text" name = "mail" class = "contacto_input">
            <label for="mensaje"> Mensaje</label>
            <textarea id= "mensaje" name="mensaje" cols="30" rows="10"  class = "contacto_input"></textarea>
                <input type="submit" value = "Enviar Formulario">
                

        </form>


        <?php

            if(isset($_GET['ok'])){
                echo "<h3><br>tu mensaje a sido enviado con exito </h3>";
            }


        ?>

    </section>
</body>
</html>