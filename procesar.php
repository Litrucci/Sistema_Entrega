<?php

include ("conexion.php");

//$imei = $_POST['imei'];
//$modelo = $_POST['modelo'];
//$marca  = $_POST['marca'];
//$numero = $_POST['numero_celu'];
//$simcard = $_POST['simcard'];
//$nombre = $_POST['nombre'];
//$apellido = $_POST['apellido'];
//$rut = $_POST['rut'];
//$fentrega = $_POST['fecha_entrega'];
//$funcionarioid = $_POST['funcionarioid'];
//$lugar = $_POST['lugar'];

if (isset ($_POST['imei'])){
		
	$imei = $_POST['imei'];		
			
		}else{
			
			$imei = "";
        }

if (isset ($_POST['modelo'])){
		
    $modelo = $_POST['modelo'];		
                    
        }else{
                    
            $modelo = "";
        }

if (isset ($_POST['marca'])){
		
	$marca = $_POST['marca'];		
			
		}else{
			
			$marca = "";
        }

if (isset ($_POST['numero_celu'])){
		
    $numero = $_POST['numero_celu'];		
                    
        }else{
                    
            $numero = "";
        }

if (isset ($_POST['simcard'])){
		
    $simcard = $_POST['simcard'];		
                            
        }else{
                            
            $simcard = "";
        }

if (isset ($_POST['nombre'])){
		
    $nombre = $_POST['nombre'];		
                                    
        }else{
                                    
            $nombre = "";
        }

if (isset ($_POST['apellido'])){
		
    $apellido = $_POST['apellido'];		
                                            
        }else{
                                            
            $apellido = "";
        }

if (isset ($_POST['rut'])){
		
    $rut = $_POST['rut'];		
            
        }else{
                                                    
            $rut = "";
        }

if (isset ($_POST['fecha_entrega'])){
		
    $fentrega = $_POST['fecha_entrega'];		
                                                            
        }else{
                                                            
            $fentrega = "";
        }

if (isset ($_POST['funcionarioid'])){
		
    $funcionarioid = $_POST['funcionarioid'];		
                                                                    
        }else{
                                                                    
            $funcionarioid = "";
        }

if (isset ($_POST['lugar'])){
		
    $lugar = $_POST['lugar'];		
                                                                            
        }else{
                                                                            
            $lugar = "";
        }

// Inserta datos en la tabla celular
$sql2="INSERT INTO celulares (modelo,marca,simcard,imei,numero_celu) 
VALUES('$modelo', '$marca', '$simcard', '$imei', '$numero')";
//ejecutar consulta
$resultado2=mysqli_query($conexion,$sql2) or die ('error en el INSERT celulares');
//despues de la ejecucion poner ultimo ID
$ultimoid_cel = mysqli_insert_id($conexion);


// Inserta Datos tabla Acta
if (!empty ($fentrega)&& !empty($funcionarioid)&& !empty($ultimoid_cel)&& !empty($lugar))
{
$insert_acta = "INSERT INTO acta (fecha_entrega, funcionario_id, celular_id, establecimiento_id) VALUES ('$fentrega', '$funcionarioid', '$ultimoid_cel', $lugar)";
print_r($insert_acta); 
$resu_acta=mysqli_query($conexion,$insert_acta) or die ('error en el INSERT acta');

// $insert_funcionario = "INSERT INTO funcionarios (establecimiento_id) VALUES ('$lugar')";
// $resu_funcionario = mysqli_query ($conexion, $insert_funcionario) or die ('error en el INSERT funcionario');
}
mysqli_close($conexion);

?>