<html>

<head>
    <title>Alta Ciudades</title>
</head>

<body>
    <?php
    include("conexion.inc");
    //Captura datos desde el Form anterior
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHab = $_POST['habitantes'];
    $vSup = $_POST['sup'];
    if ($_POST['tm'] != 1){$vTieneMetro =  0;}
    else{$vTieneMetro = $_POST['tm'];}
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "   SELECT Count(id) as canti
                from ciudades 
                where ciudad = '$vCiudad' and pais = '$vPais'";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));;
    $vCantPaises = mysqli_fetch_assoc($vResultado);
    //$vCantUsuarios = mysqli_result($vResultado, 0);
    if ($vCantPaises['canti'] != 0) {
        echo ("El País ya Existe<br>");
        echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
    } else {
        $vSql = "   INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
                    values ('$vCiudad','$vPais', '$vHab', '$vSup', '$vTieneMetro')";
        mysqli_query($link, $vSql) or die(mysqli_error($link));
        echo ("La ciudad fue Registrada<br>");
        echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
        // Liberar conjunto de resultados
        mysqli_free_result($vResultado);
    }
    // Cerrar la conexion
    mysqli_close($link);
    ?></body>

</html>