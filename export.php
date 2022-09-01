<?php
require('database.php');
$sql="select * from user";
$res=mysqli_query($con,$sql);
$html='<table><tr><td>Colmena</td><td>Cuadros</td><td>Reina</td><td>Huevos</td>
<td>Larvas</td><td>Pupas</td><td>Machos</td><td>Celdas_de_Reina</td><td>Celdas_de_Zangano</td><td>Miel</td>
<td>Polen</td><td>Comentarios</td><td>Fecha</td><td>Hora</td><td>Tiempo</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['Colmena'].'</td><td>'.$row['Cuadros'].'</td><td>'.$row['Reina'].'</td><td>'.$row['Huevos'].'</td><td>'.$row['Larvas'].'</td>
	<td>'.$row['Pupas'].'</td><td>'.$row['Machos'].'</td><td>'.$row['Celdas_de_Reina'].'</td><td>'.$row['Celdas_de_Zangano'].'</td><td>'.$row['Polen'].'</td><td>'.$row['Miel'].'</td>
	<td>'.$row['Comentarios'].'</td><td>'.$row['Fecha'].'</td><td>'.$row['Hora'].'</td><td>'.$row['Tiempo'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>