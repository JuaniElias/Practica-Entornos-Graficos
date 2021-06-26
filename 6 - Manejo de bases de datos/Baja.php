<html>

<head>
    <title>Baja</title>
</head>

<body>
    <?php
    include("conexion.inc");
    $vID = $_POST['id'];
    $vSql = "SELECT * FROM ciudades WHERE id='$vID' ";
    $vResultado = mysqli_query($link, $vSql);
    if (mysqli_num_rows($vResultado) == 0) {
        echo ("Ciudad Inexistente... <br>");
        echo ("<A href='Baja.html'>Continuar</A>");
    } else {
        //Arma la instrucción SQL y luego la ejecuta
        $vSql = "DELETE FROM ciudades WHERE id = '$vID' ";
        mysqli_query($link, $vSql);
        echo ("La ciudad fue Borrada correctamente<br>");
        echo ("<A href='Menu.html'>Volver al Menu del ABM</A>");
    }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>

</html>