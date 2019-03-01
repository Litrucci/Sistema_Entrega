<?php  
include ("procesar.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acta Devolución</title> 
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
            <body>
            <br>
           <br>
        <div class="col-md-12 ">  
                    <br>
                <center>
                <div class="row">
                    <div class="col-md-2">
                        <img src="logo2.jpg"  class="img-responsive"  alt="" id="logo">
                    </div>
                </div>
                        
                        <h1>Acta de Devolución</h1>
                </center>
                         <div class="container">
                                <div class="main row">
                                      <article class="col-md-12">
                                          <p class="lead">Con Fecha <?php echo $fentrega; ?>, <?php echo $nombre . " " . $apellido ?>, Hace entrega al Dpto. TIC. El siguiente equipo(s).</p>
                                      </article>
                                 </div>
                         </div>
                                         
                                             <center>
                                                 <table>
                                                          <tr>
                                                                  <td>EQUIPO</td>
                                                                  <td>MODELO</td>
                                                                  <td>Nº IMEI</td>
                                                                  <td>Nº SIMCARD</td>
                                                                  <td>Nº TELEFONO</td>
                                                          </tr>
                                                          <tr>
                                                                  <td>Celular</td>
                                                                  <td><?php echo $marca." ".$modelo; ?></td>
                                                                  <td><?php echo $imei; ?></td>
                                                                  <td><?php echo $simcard; ?></td>
                                                                  <td><?php echo $numero; ?></td>
                                                          </tr>
                                                 </table>
                                             </center>
                                         
                          
                                 <br>     
                                <div class="main row">
                                    <article class="col-md-12">
                                        <p class="lead">De acuerdo a lo establecido en el Reglamento sobre bienes fiscales, Decreto N° 577, de 16 de agosto de 1978 del Ministerio de Bienes Nacionales, “Art. 33: Los funcionarios que tengan a su cargo bienes fiscales serán responsables de su uso, abuso, empleo ilegal y de toda pérdida o deterioro de los mismos que les sean imputables, sin perjuicio de la responsabilidad del Jefe de la Unidad operativa cuando se compruebe negligencia en su función fiscalizadora”.</p>
                                    </article>
                                </div>
                                        <p><b>Entrega Conforme:</b></p>
                                        <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <table>
                                            <tr>Nombre: <?php echo $nombre . " " . $apellido ?></tr>
                                        </table>    
                                    </div>
                                
                                       
                                    <div class="col-md-3">
                                        <table>
                                            <tr>R.U.N.: <?php echo $rut; ?></tr>
                                        </table>    
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <table>
                                            <tr>Firma: </tr>
                                        </table>    
                                    </div>
                                </div>                     
                                        
                               
                                    
                                <br>
                                
                                        <p><b>Recibe Conforme:</b></p>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <table>
                                            <tr>Nombre: Christian Lizama</tr>
                                        </table>    
                                    </div>
                                
                                       
                                    <div class="col-md-3 ">
                                        <table>
                                            <tr>R.U.N.: 16.282.431-7</tr>
                                        </table>    
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <table>
                                            <tr>Firma: </tr>
                                        </table>    
                                    </div>
                                </div>    
                            
             </div>
                    
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
            </body>
</html>