<?php 

$destino = "juanignacioelias@hotmail.com";
$asunto = "Ejercicio 1";
$cuerpo = '
    <html> 
        <head> 
            <title>Envio el mail</title> 
        </head> 
        <body> 
            <h1>¡Hola Juanillo!</h1> 
                <p> 
                    <b>Este es el mail del ejercicio 1</b>.                    
                </p> 
        </body> 
    </html>
';$headers = '';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: Juan Elias <juanignacioelias1@gmail.com>\r\n";
mail($destino,$asunto,$cuerpo,$headers) 

?>