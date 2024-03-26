<?php include("header.php") ?>

<section class="tratamientos">
    <center>
        <h1> Tratamientos </h1>
    </center>

    <div class="tratamientos_menu">
        <ul>
            <li><a href="tratamientos.php?tratamientos=AcidoHialuronico">Acido Hialurónico</a></li>
            <li><a href="tratamientos.php?tratamientos=Dermapen">Dermapen</a></li>
            <li><a href="tratamientos.php?tratamientos=MesoterapiaFacial">Mesoterapia Facial</a></li>
        </ul>
    </div>
</section>

<?php
$tratamiento = '';
$descripcion = '';
$precio = 0;
$img = '';

//isset = verificar que la variable no sea vacia

if (isset($_GET['tratamientos'])) {
    switch ($_GET['tratamientos']) {
        case 'AcidoHialuronico':
            $tramiento = 'Acido Hialuronico';
            $descripcion = "En medicina estética, el ácido hialurónico se utiliza como sustancia de relleno 
            para las arrugas de la cara y también para aumentar el volúmen de ciertas zonas de la cara o del cuerpo.
            Con el paso del tiempo y la edad, la producción de ácido hialurónico disminuye en el organismo y, 
            en consecuencia, su deficiencia es uno de los factores de debilitamiento progresivo de la piel 
            y la aparición de arrugas.";
            $precio = '$20.000';
            $img = "./imagenes/AcidoHialuronico.jpg";
            break;
        case 'Dermapen':
            $tramiento = 'Dermapen';
            $descripcion = "Dermapen es una de las últimas tendencias dentro de la estética facial 
            y es que se trata de un tipo de lápiz que borra imperfecciones y que nos ayuda a lucir un rostro mucho más homogéneo 
            y terso. 
            La forma de este aparato se asemeja a un lápiz y, por eso, se conoce como «Dermapen» (pen es lápiz en inglés).";
            $precio = '$30.000';
            $img = './imagenes/Dermapen.jpg';
            break;
        case 'MesoterapiaFacial':
            $tramiento = 'Mesoterapia Facial';
            $descripcion = "La mesoterapia facial es un tratamiento preventivo. 
            Popularmente conocida como tratamiento con vitaminas, aporta a la piel un aspecto más terso 
            y luminoso mediante microinfiltraciones de sustancias revitalizantes y nutritivas 
            (ácido hialurónico, oligoelementos, péptidos, aminoácidos, minerales, ácido retinoico, etc.).";
            $precio = '$15.000';
            $img = './imagenes/MesoterapiaFacial.png';
            break;
    }

?>
    <div class="tratamientos_descripcion">
        <h2> <?php echo $tratamiento; ?></h2>
        <h2> <?php echo $descripcion; ?></h2>
        <h2> <?php echo $precio; ?></h2>

        <div class="contenedor_img">
            <img src='<?php echo $img ?>' alt='<?php echo $tratamiento ?>'>
        </div>

    </div>
<?php } ?>

<?php include("footer.php") ?>