<head>
    <title>Modificacion</title>
</head>

<body>
    <?php
    include("conexion.inc");
    //Captura datos desde el Form anterior
    $vID = $_POST['id'];
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHab = $_POST['habitantes'];
    $vSup = $_POST['sup'];
    if ($_POST['tm'] != 1){$vTieneMetro =  0;}
    else{$vTieneMetro = $_POST['tm'];}
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "UPDATE ciudades set ciudad='$vCiudad', pais='$vPais', habitantes='$$vHab', superficie='$vSup', tieneMetro='$vTieneMetro' where id='$vID'";
    mysqli_query($link, $vSql) or die(mysqli_error($link));
    echo ("La ciudad fue Modificada<br>");
    echo ("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>

</html>