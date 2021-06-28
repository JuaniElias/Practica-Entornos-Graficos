<?php
if (!isset($_COOKIE['visitas'])) {
    $visitas = 1;
    setcookie("visitas", $visitas, time() + 360024365);
} else {
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie("visitas", $visitas, time() + 360024365);
}
?>

<html>
<head>
	<link rel="STYLESHEET" type="text/css" href="verde.css">
</head>

<body>
    <?php
    if ($visitas > 1) {
        echo "Esta es tu visita número " . $_COOKIE['visitas'];
    } else {
        echo "Bienvenido, esta es la primera vez que visitás esta página";
    }
    ?>
</body>

</html>