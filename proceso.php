<?php 
  
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $cedula = $_POST['cedula'];
  $empresa = $_POST['empresa'];
  $departamento = $_POST['departamento'];
  $sueldo = $_POST['sueldo'];
 
   $empleado   = array(
    'Nombre'       => $nombre, 
    'Apellido'     => $apellido, 
    'Cedula'       => $cedula, 
    'Empresa'      => $empresa,
    'Departamento' => $departamento,
    'Sueldo'       => $sueldo
    );

  echo "<h4><center>Datos Ingresados:</center></h4>";

    echo "
      <div align='center'>
      <table>
      ";

          foreach ($empleado as $datos => $valor) {
          echo "
            <tr>
              <td>$datos: </td>
              <td>$valor</td>
            </tr>
          ";
          }
  
    echo "
    </table>
    </div>";
  

 ?>