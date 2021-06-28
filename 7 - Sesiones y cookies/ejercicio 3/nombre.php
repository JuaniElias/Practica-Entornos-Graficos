<?php
if (isset($_POST["nom"])) {
    $nombre = $_POST["nom"];
    setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 90));
} else {
    if (isset($_COOKIE["nombre"])) {
        $nombre = $_COOKIE["nombre"];
    }
}
?>
<html>

<head>
    <title>Cookies en PHP</title>
    <?php
    if (!isset($nombre)) {
        $nombre = " ";
    }?>
</head>

<body>
    <form action="nombre.php" method="post">
        Nombre de usuario
        <br>
        <input type="TEXT" name="nom" size="20" placeholder="<?php echo ($nombre);?>">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>


