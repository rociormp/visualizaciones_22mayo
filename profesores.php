<?php include('cabeza.php');?>
<section>
<h2>Profesores</h2>
<?php
$profesores = array_map('str_getcsv', file('Data/profesores.csv'));
array_walk($profesores, function(&$a) use ($profesores) {$a = array_combine($profesores[0], $a);});
array_shift($profesores);
?>
<h4>1. Total de profesores que aportan a la carrera de diseño, y sus categorías académicas</h4>

<?php
echo "<html><body><table>\n\n";
$f = fopen("Data/profesores.csv", "r");
$cell = (['Nombres'],['Apellidos'],['Categoría']);
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>
<p>Reemplace este párrafo con un gráfico que mejor represente los datos de la tabla, y permita una comprensión inmediata de las cantidades de docentes invitados (sin categoría académica), <a href="http://www.uchile.cl/portal/presentacion/normativa-y-reglamentos/4860/titulo-ii-de-la-categoria-y-carrera-academica-ordinaria">académicos en carrera ordinaria</a>, <a href="http://www.uchile.cl/portal/presentacion/normativa-y-reglamentos/4861/titulo-iii-de-la-categoria-y-carrera-academica-docente">académicos en carrera docente</a> y <a href="http://www.uchile.cl/portal/presentacion/normativa-y-reglamentos/4863/titulo-iv-de-la-categoria-academica-adjunta">académicos adjuntos</a> (1 pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>
<h4>2. Académicos en carrera ordinaria, rangos y horas de trabajo</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que mejor represente los datos de la tabla, y permita una comprensión inmediata de la cantidad de académicos en categoría ordinaria, sus rangos y horas contratadas (1 pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>
<h4>3. Académicos en carrera docente, rangos y horas de trabajo</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que mejor represente los datos de la tabla, y permita una comprensión inmediata de la cantidad de académicos en categoría docente, sus rangos y horas contratadas (1 pto.)</p>
<p>Debe usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a> (1pto.)</p>
<h4>4. Grados académicos</h4>
<p>Reemplace este párrafo con una tabla que presente a todos los académicos con rango de profesor (carrera ordinaria, docente o adjunta). La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>
<p>Reemplace este párrafo con un gráfico que presente a los profesores (excluya intructores, ayudantes y docentes invitados). Conecte a los profesores con sus grados académicos (licenciado, magíster, doctor, post-doctorado), y luego conecte el grado con su rango (1 pto.)</p>
<p>Puede usar un gráfico generado con <a href="http://app.rawgraphs.io/">http://app.rawgraphs.io/</a>, p5.js u otra herramientas digital (1pto.)</p>
</section>
<?php include('pie.php');?>
