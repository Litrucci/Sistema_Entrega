<?php
include ('conexion.php');

// $consulta= "SELECT * FROM funcionarios ";
// $registro = mysqli_query($conexion, $consulta);

$busqueda ="SELECT rut, nombre, apellidop, nombre_esta, fecha_entrega, marca, modelo, imei, simcard, numero_celu
FROM funcionarios 
INNER JOIN acta ON funcionarios.id = acta.funcionario_id 
JOIN celulares ON acta.celular_id = celulares.id
JOIN establecimiento ON acta.establecimiento_id = establecimiento.id";

$resu_busqueda = mysqli_query ($conexion, $busqueda);

$i=0;
$tabla = "";

while($row = mysqli_fetch_array($resu_busqueda))
{

    $tabla.='{"rut":"'.$row['rut'].'", "nombre":"'.$row['nombre'].'" , "apellidop":"'.$row['apellidop'].'" , "nombre_esta":"'.$row['nombre_esta'].'" , "fecha_entrega":"'.$row['fecha_entrega'].'" , "marca":"'.$row['marca'].'" , "modelo":"'.$row['modelo'].'" , "imei":"'.$row['imei'].'" , "simcard":"'.$row['simcard'].'" , "numero_celu":"'.$row['numero_celu'].'"},';

    $i++;
}
    $tabla= substr ($tabla,0, strlen($tabla)-1);

    echo '{"data":['.$tabla.']}';

    ?>