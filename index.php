<?php
include ("conexion.php");
$resultados = mysqli_query($conexion,"SELECT * FROM establecimiento");
$resultados2 = mysqli_query($conexion,"SELECT * FROM funcionarios ");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
     <title>Formulario</title>

     <script>
	 $(function() {  
 $( "#rut" ).autocomplete({
      source: "conexion.php",
      minLength: 1,
      
select: function( event, ui ) {
	 $( "#nombre" ).val( ui.item.nombre_persona );
	 $( "#apellido" ).val( ui.item.apellido_persona );
	 $( "#funcionarioid" ).val( ui.item.id );
	        
      }
 	 })
	 });

  </script>
         </head>
           
            <body>
                   <br>
                    <center>
                    <h1>Entrega de equipos</h1>
                    </center>
        <div class="container">
                      <form action="Acta.php" class="form-horizontal offset-sm-3 " method="post">
                          
                                                                     
                                      <div class="form-group input-group-sm col-sm-12 ">
                                                                          
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">IMEI:</span>
                                                    <input class="form-control col-sm-5" name="imei" type="text" >
                                            </div>
                                      </div>
                                      
                                <div class="form-group input-group-sm col-sm-12">
                                                                           
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">MARCA:</span>
                                                    <input class="form-control col-sm-5" name="marca" type="text" >
                                            </div>
                                 </div>   
                          
                                <div class="form-group input-group-sm col-sm-12">
                                                                           
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">MODELO:</span>
                                                    <input class="form-control col-sm-5" name="modelo" type="text"  >
                                            </div>
                                 </div>   
                        
                                <div class="form-group input-group-sm col-sm-12">
                                                                           
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">NUMERO:</span>
                                                    <input class="form-control col-sm-5" name="numero_celu" id="numero_celu" type="text"  >
                                            </div>
                                 </div>
                          
                                 <div class="form-group input-group-sm col-sm-12">
                                                                    
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">SIMCARD:</span>
                                                    <input class="form-control col-sm-5" name="simcard" type="text"  >
                                            </div>
                                  </div>   
                          
                                                        
                                <div class="form-group input-group-sm col-sm-12">
                                                                           
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">FECHA DE ENTREGA:</span>
                                                    <input class="form-control col-sm-5" name="fecha_entrega" type="date"  >
                                            </div>
                                </div>
                                 
                                <div class="form-group input-group-sm col-sm-12">
                                                                           
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">RUT:</span>
                                                    <input class="form-control col-sm-5" name="rut" id="rut" type="text" >
                                            </div>
                                 </div>

                                 <div class="form-group input-group-sm col-sm-12">

                                 <input type="hidden" name="funcionarioid" id="funcionarioid">
                                                                           
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">NOMBRE:</span>
                                                    <input class="form-control col-sm-5" name="nombre" id="nombre" type="text" >
                                            </div>
                                 </div>    
                          
                                <div class="form-group input-group-sm col-sm-12">
                                                                           
                                            <div class=" input-group-prepend ">
                                                    <span class="input-group-text col-sm-2">APELLIDOP:</span>
                                                    <input class="form-control col-sm-5" name="apellido" id="apellido" type="text" >
                                            </div>
                                 </div>   
                          
                                                          
                                        
                            <div class="form-group">
                                <select class="form-control" name="lugar" id="lugar">
                                    <?php
                                
                                            while($consulta = mysqli_fetch_assoc($resultados))
                                            { 
                                    ?>

                                            <option value='<?php echo $consulta['id']  ?>' ><?php echo $consulta['nombre_esta']?></option>
                                    <?php 
                                            } 
                                    ?>             
                                </select> 
                               
                          </div>
                          
                          
                                                
                        <div class="form-group input-group-sm col-sm-12">        
                                <button class="btn btn-success">Enviar</button> 
                                <a class="btn btn-primary" href="http://localhost/Formulario/busqueda.php">Buscar</a>  
                                 <a class="btn btn-warning" href="http://localhost/Formulario/devolucion.php">Devolucion</a>        
                        </div>       
		  </form>
           </div>
       
                    <script src="js/bootstrap.min.js"></script>
    </body>
                               <center>
                                    <footer>Soporte TIC 2018</footer>
                               </center>
</html>