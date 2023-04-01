<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="css/estilos_generales.css">
    <link rel="stylesheet" href="/css/estilo_nosotros.css">
    
    
</head>
<body>

    <?php include('header.php'); ?>

    <section class = "contenido"> <!--SE GENERO LA FUNCION DE MENSAJE-->
        
        <?php

            mensaje();

            function mensaje(){
                echo "<H1>Nosotros...en realidad yo.</H1>";
            }
        ?>

        <p>Este trabajo fue realizado por Matias Ruibal durante la cursada de PHP y MySQL inicial, curso de la UTN.ba como Trabajo practico final. 
            En la parte del index se coloco in slider para llenar el espacio y unas paginas relacionadas con el tema del trabajo pero no con el trabajo en si, no tengo relacion con dichas paginas.
            En la tienda se genero una lista de productos y al hacer clic sobre uno de ellos aparece la informacion de tal producto.
            En la parte de Nosotros estaran leyendo este mensaje...como relleno para que tenga mas cosas el trabajo. y arriba estara una funcion simple, quise colocar una mas complicada pero no se me ocurrio una interesante..excepto colocar un gif pero tenia problemas de sintaxis.
            En contacto se podra generar un mensaje que se guardara en la base de datos para que ninguno de nuestros empleados lo lea ya que no tenemos empleados...es un trabajo practico.
            se espera solucionar los errores antes de la entrega y agregar detalles en la parte de contacto, como mensajes de error si te falto completar algun dato.
        </p>
    </section>

    <!-- SE GENERO POR SEPARADO PARA VER SI SE PODIA LLAMAR---
    <article class = "cont">

        <p>Este trabajo fue realizado por Matias Ruibal durante la cursada de PHP y MySQL inicial, curso de la UTN.ba como Trabajo practico final. 
            En la parte del index se coloco in slider para llenar el espacio y unas paginas relacionadas con el tema del trabajo pero no con el trabajo en si, no tengo relacion con dichas paginas.
            En la tienda se genero una lista de productos y al hacer clic sobre uno de ellos aparece la informacion de tal producto.
            En la parte de Nosotros estaran leyendo este mensaje...como relleno para que tenga mas cosas el trabajo. y arriba estara una funcion simple, quise colocar una mas complicada pero no se me ocurrio una interesante..excepto colocar un gif pero tenia problemas de sintaxis.
            En contacto se podra generar un mensaje que se guardara en la base de datos para que ninguno de nuestros empleados lo lea ya que no tenemos empleados...es un trabajo practico.
            se espera solucionar los errores antes de la entrega y agregar detalles en la parte de contacto, como mensajes de error si te falto completar algun dato.
        </p>

    </article>
        -->
</body>
</html>