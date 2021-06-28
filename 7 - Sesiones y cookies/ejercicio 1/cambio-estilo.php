<?php
if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
} else {
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    }
}
?>

<html>

<head>
    <title>Cookies en PHP</title>
    <?php
    if (isset($estilo)) {
        echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
    }?>
</head>

<body>
    <form action="cambio-estilo.php" method="post"> Aquí
        puedes seleccionar el estilo que prefieres en la página:
        <br>
        <select name="estilo">
            <option value="verde">Verde
            <option value="rosa">Rosa
            <option value="negro">Negro
        </select>
        <input type="submit" value="Actualizar el estilo">
    </form>
</body>

</html>