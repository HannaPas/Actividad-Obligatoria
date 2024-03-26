<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
    <section class="turno_contenido">

        <center>
            <h2>Turnos</h2>
        </center>

        <form action="enviar_turno.php" method="post">
            <label for="nombre"> Nombre </label>
            <input type="text" name="nombre" class="turno_imput">

            <label for="apellido"> Apellido </label>
            <input type="text" name="apellido" class="turno_imput">

            <label for="email"> Email </label>
            <input type="email" name="email" class="turno_imput">

            <label for="fecha"> Fecha </label>
            <input type="date" name="fecha" class="turno_imput">

            <input type="submit" value="Enviar Turno" class="turno_btn">
        </form>

    </section>
</body>

</html>
<br>
<?php include("footer.php") ?>