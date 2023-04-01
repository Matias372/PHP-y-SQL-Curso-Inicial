<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/estilos_generales.css">
    <link rel="stylesheet" href="css/estilo_index.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/slider.js" ></script>
</head>
<body>

    <?php include('header.php'); ?>


    <!--slider....utilizado en otro trabajo, se me ocurrio colocarlo para rellenar el index-->
    
    <section class="slider">
        <section class="contenedor">
            <ul class="bxslider">
                <li><img src="img/MS-06S Zaku II.jpg" /></li>
                <li><img src="img/RX-78-2 Gundam.jpg" /></li>
                <li><img src="img/Gundam Sky Zero.jpg" /></li>
                <li><img src="img/Gundam Breaker Battlogue.jpg" /></li>               
                <li><img src="img/Gundam Barbatos.jpg" /></li>
                <li><img src="img/MAILeS Reiki.jpg" /></li>
            </ul>
        </section>
    </section>


    <!--Paginas web del tema-->
    <section class="columnas">
        <article class="Titulo">
            <h1>Sitios web de interes</h1>
        </article>        
        <article class="ART" id="mercado">
            <a href="https://listado.mercadolibre.com.ar/gundam-model-kits#D[A:gundam%20model%20kits,L:undefined]"><img src="img/mercado-icon.png" alt="img-de-mercado" id="mercado-img"></a>
            <h2>Mercado Libre</h2>
        </article>
        <article class="ART" id="facebook">
            <a href="https://www.facebook.com/Hobbynetok/"><img src="img/Facebook-icon.png" alt="img-de-facebook" id="Facebook-img"></a>
            <h2>HOBBY NET</h2>
        </article>
        <article class="ART" id="amazon">
            <a href="https://www.amazon.com/s?k=gunpla+model+kits&adgrpid=136463231188&hvadid=585412405897&hvdev=c&hvlocphy=9128460&hvnetw=g&hvqmt=b&hvrand=8702346239072325279&hvtargid=kwd-299829791266&hydadcr=22339_13333066&tag=hydglogoo-20&ref=pd_sl_7oh7ma4tpi_b"><img src="img/Amazon-icon.png" alt="img-de-amazon" id="amazon-img"></a>
            <h2>Amazon</h2>
        </article>
    </section>

   



    
</body>
</html>