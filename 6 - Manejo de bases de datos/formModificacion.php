<title>Modificacion</title>
</head>
<boby>
    <?php
    include("conexion.inc");
    //Captura datos desde el Form anterior
    $vID = $_POST['id'];
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "SELECT * FROM ciudades WHERE id ='$vID' ";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));;
    $fila = mysqli_fetch_array($vResultado);
    if (mysqli_num_rows($vResultado) == 0) {
        echo ("Ciudad Inexistente... <br>");
        echo ("<A href='modificacion.html'>Continuar</A>");
    } else {
    ?>
        <FORM action="modificacion.php" method="POST" name="FormModificacion">
            <table width="356">
		<tr>
                    <td width="103"> ID: </td>
                    <td width="243"> <input type="text" name="id" value="<?php echo ($fila['id']); ?>">
                    </td>
                </tr>
                <tr>
                    <td width="103"> Ciudad: </td>
                    <td width="243"> <input type="text" name="ciudad" value="<?php echo ($fila['ciudad']); ?>">
                    </td>
                </tr>
                <tr>
                    <td width="103"> Ingrese a qué Pais pertenece la ciudad: </td>
                    <td width="243"> <input type="TEXT" name="pais" size="20" maxlength="20" value="<?php echo ($fila['pais']); ?>">
                    </td>
                </tr>
                <tr>
                    <td width="103"> Habitantes: </td>
                    <td width="243"> <input type="number" name="hab" size="20" maxlength="20" value="<?php echo ($fila['habitantes']); ?>">
                    </td>
                </tr>
                <tr>
                    <td width="103"> Superficie: </td>
                    <td width="243"> <input type="number" name="sup" size="20" maxlength="40" value="<?php echo ($fila['superficie']); ?>">
                    </td>
                </tr>
                <td colspan="5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="tm" id="tm">
                        <label class="form-check-label" for="flexCheckDefault"> Tiene metro.</label>
                      </div>
                </td>
                <tr>
                    <td colspan="2" align="center"> <input type="SUBMIT" name="Submit" value="Modificar">
                    </td>
                </tr>
            </table>
        </FORM>
    <?php
    }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
    ?>