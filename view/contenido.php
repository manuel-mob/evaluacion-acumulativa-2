<?php
// Conectando, seleccionando la base de datos
$link = mysqli_connect('localhost', 'username', 'password','grupo4')
    or die('No se pudo conectar: ' . mysql_error());
//echo 'Connected successfully';

// Realizar una consulta MySQL
$query = 'SELECT * FROM contenido';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<table >\n";
while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar resultados
mysqli_free_result($result);

// Cerrar la conexión
mysqli_close($link);
?>
