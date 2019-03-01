<?php
include ('conexion.php');

?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<!-- DataTable JS -->
     <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <!-- <script>
	  $(document).ready(function() {
    $('#example').DataTable( {
        "ajax": "funciones.php",
        "columns": [
            { "data": "rut" },
            { "data": "nombre" },
            { "data": "apellidop" },
            { "data": "nombre_esta" },
            { "data": "fecha_entrega" },
            { "data": "marca" },
            { "data": "modelo" },
            { "data": "imei" },
            { "data": "simcard" },
            { "data": "numero_celu" }
        ]
    } );
} );
     </script> -->

    <title>Busqueda!</title>
  </head>
  <body>

  <div class="container-fluid my-3">

  <p class="display-4 text-center">BUSQUEDA</p>
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark" >
            <tr>
                <th>Run</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Delegación</th>
                <th>Fecha de entrega</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Imei</th>
                <th>Simcard</th>
                <th>N° Celular</th>
            </tr>
        </thead>
        <tbody>
					<tr>
						<td>16282431-7</td>
						<td>Christian</td>
						<td>Lizama</td>
						<td>Seremi Central</td>
						<td>Hoy</td>
						<td>Xiaomi</td>
						<td>Mi 9</td>
						<td>123456789</td>
						<td>1234</td>
						<td>78685144</td>
					</tr>
        </tbody>
        <tfoot class="thead-dark" >
            <tr>
            <th>Run</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Delegación</th>
                <th>Fecha de entrega</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Imei</th>
                <th>Simcard</th>
                <th>N° Celular</th>
            </tr>
        </tfoot>
    </table>
    <a href="http://localhost/Formulario/index.php" class="btn btn-primary" >Atras</a>
  </div>
  
    </body>
</html>