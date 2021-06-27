<?php

$destino=$_POST['email'];
$asunto="Recomendacion!";
$desde="Juanignacioelias@hotmail.com";
$comentario= "
\n
Tu amigo $_POST[nombre] te ha recomendado que visites nuestro sitio web!\n
\n
";
mail($destino,$asunto,$comentario,$desde);
echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";

?>
