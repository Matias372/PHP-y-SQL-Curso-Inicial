<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="css/estilos_generales.css">
    <link rel="stylesheet" href="css/estilo_tienda.css">
</head>
<body>
    
    <?php include('header.php'); ?>

    <section class = "productos">
        <h2>Productos</h2>
        <h3>Lista</h3>
        <ul>
            <li><a href="tienda.php?producto=mz">MS-06S Zaku II</a></li>
            <li><a href="tienda.php?producto=rx">RX-78-2 Gundam</a></li>
            <li><a href="tienda.php?producto=sz">Gundam Sky Zero</a></li>
            <li><a href="tienda.php?producto=bb">Breaker Battlogue</a></li>
            <li><a href="tienda.php?producto=gb">Gundam Barbatos</a></li>
            <li><a href="tienda.php?producto=mr">MAILeS Reiki</a></li>
        </ul>
    </section>

    <?php   /*--despues debo probar a parte si puede ser guardado en la base de datos y llamarlo a la pagina--*/

        $nombre = " ";
        $img = " ";
        $marca = " ";
        $tipo_figura = " ";
        $escala = " ";
        $descripcion = " ";


        if(isset($_GET['producto'])){

                switch($_GET['producto']){
                    case 'mz':
                        $nombre = "MS-06S Zaku II";
                        $img = './img/MS-06S Zaku II.jpg';
                        $marca = "Marca: Bandai Hobby";
                        $tipo_figura = "Tipo de figura: figura de accion";
                        $escala = "Escala: 1/144";
                        $descripcion = "Sobre este producto: Las características especiales incluyen elementos de diseño que permiten una articulación expresiva a través del uso estructural y de las partes del material.";
                        $Stock = "NO HAY STOCK";
                        break;

                    case 'rx':
                        $nombre = "RX-78-2 Gundam Revive";
                        $img = './img/RX-78-2 Gundam.jpg';
                        $marca = "Marca: Bandai Hobby";
                        $tipo_figura = "Tipo de figura: figura de accion";
                        $escala = "Escala: 1/144";
                        $descripcion = "Sobre este producto: Utilizando el kusabi (cuña) sistema de puerta, permite la eliminación de la alfombra sin una notable fondo Mark. Incluye haz rifle, Shield, espadas láser de haz, bazooka.";
                        $Stock = "NO HAY STOCK";
                        break;

                    case 'sz':
                        $nombre = "Wing Gundam Sky Zero";
                        $img = './img/Gundam Sky Zero.jpg';
                        $marca = "Marca: Bandai Hobby";
                        $tipo_figura = "Tipo de figura: figura de accion";
                        $escala = "Escala: 1/144";
                        $descripcion = "Sobre este producto: ¡Un Wing Gundam en un esquema de color único de Gundam Breaker Battlogue está aquí! Contenido: 1 juego de rifle Twin Buster, 2 sables de haz, 1 escudo, 1 piezas de junta.";
                        $Stock = "NO HAY STOCK";
                        break;
                    
                    case 'bb':
                        $nombre = "Gundam Breaker Battlogue";
                        $img = './img/Gundam Breaker Battlogue.jpg';
                        $marca = "Marca: Bandai Hobby";
                        $tipo_figura = "Tipo de figura: figura de accion";
                        $escala = "Escala: 1/144";
                        $descripcion = "Sobre este producto: Contenido: Command Sword X1, armas escudo X1, 2 cuchillo de combate, 1 ametralladora pesada, 1 lanzador de misiles, 1 pegatinas de aluminio, 1 juego de piezas de mano.";
                        $Stock = "NO HAY STOCK";
                        break;
                    
                    case 'gb':
                        $nombre = "Gundam Barbatos";
                        $img = './img/Gundam Barbatos.jpg';
                        $marca = "Marca: Bandai Hobby";
                        $tipo_figura = "Tipo de figura: figura de accion";
                        $escala = "Escala: 1/144";
                        $descripcion = "Sobre este producto: Las armas y algunas armaduras se pueden intercambiar con otros kits para personalizar aún más tus Barbatos";
                        $Stock = "NO HAY STOCK";
                        break;

                    case 'mr':
                        $nombre = "MAILeS Reiki";
                        $img = './img/MAILeS Reiki.jpg';
                        $marca = "Marca: Bandai Hobby";
                        $tipo_figura = "Tipo de figura: figura de accion";
                        $escala = "Escala: 1/72";
                        $descripcion = "Sobre este producto: Esta unidad viene con un lanzador Taser (tentativo) y un Naginata vibratorio supercalentado. las unidades de empuje equipadas a lo largo del cuerpo se pueden girar. ";
                        $Stock = "NO HAY STOCK";
                        break;
                }

        }
    ?>

    <section>
        <div class = "producto_descripcion">
                <h2><?php echo $nombre;?></h2>
                <div class = "contenedor_imagen"><img src="<?php echo $img?>" alt="<?php echo $nombre?>"></div>
                <p> <?php echo $marca;?></p>
                <p> <?php echo $tipo_figura;?></p>
                <p> <?php echo $escala;?></p>
                <p> <?php echo $descripcion;?></p>
                <h4><?php echo $Stock;?></h4>
        </div>
    </section>

</body>
</html>