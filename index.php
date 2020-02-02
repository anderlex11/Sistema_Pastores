<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Listado de Pastores</h1>
    <br><br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar">
    Nuevo Pastor
    </button>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Carnet</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">DPI</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Clasificación</th>
      <th scope="col">Estudios Bíblicos</th>
      <th scope="col">Estudios Seculares</th>
      <th scope="col">Inicio Servicio</th>
      <th scope="col">Estado</th>
      <th scope="col">Fin de Servicio</th>
    </tr>
  </thead>
  <tbody>
   <?php include_once("listar_pastor.php");?>
   <?php foreach($pastores as $pastor) { ?>

    <tr>
        <td> <?php echo $pastor->ID_PASTOR?> </td>
        <td> <?php echo $pastor->CARNET?> </td>
        <td> <?php echo $pastor->PRIMER_NOMBRE?> <?php echo $pastor->SEGUNDO_NOMBRE?><?php echo $pastor->TERCER_NOMBRE?></td>
        <td> <?php echo $pastor->PRIMER_APELLIDO?> <?php echo $pastor->SEGUNDO_APELLIDO?> </td>
        <td> <?php echo $pastor->DPI?> </td>
        <td> <?php echo $pastor->FECHA_NACIMIENTO?> </td>
        <td> <?php echo $pastor->TELEFONO?> </td>
        <td> <?php echo $pastor->CLASIFICACION?> </td>
        <td> <?php echo $pastor->ESTUDIOS_BIBLICOS?> </td>
        <td> <?php echo $pastor->ESTUDIOS_SECULARES?> </td>
        <td> <?php echo $pastor->INICIO_SERVICIO?> </td>
        <td> <?php echo $pastor->ESTADO?> </td>
        <td> <?php echo $pastor->FIN_SERVICIO?> </td>

    </tr>

   <?php }?>
  </tbody>
</table>

    </div>
    <!-- Modal, INSERTAR -->
<div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Registrar Nuevo Pastor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- FORMULARIO -->
        <form action="registrar_pastor.php" method="POST">
        
        <div class="form-group">
        <label for="">Carnet</label>
        <input type="number" name="carnet" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Primer Nombre</label>
        <input type="text" name="primernombre" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Segundo Nombre</label>
        <input type="text" name="segundonombre" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Tercer Nombre</label>
        <input type="text" name="tercernombre" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Primer Apellido</label>
        <input type="text" name="primerapellido" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Segundo Apellido</label>
        <input type="text" name="segundoapellido" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">D P I</label>
        <input type="text" name="dpi" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Fecha de Naciemiento</label>
        <input type="date" name="fechanacimiento" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Telefono</label>
        <input type="number" name="telefono" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Clasificacion</label>
        <select name="clasificacion" id="" class="form-control">
        <option value="Pastor">Pastor</option>
        <option value="Obrero">Obrero</option>
        <option value="Misionero">Misionero</option>
        </select>
        </div>
        <div class="form-group">
        <label for="">Estudios biblicos</label>
        <input type="text" name="estudiosbiblicos" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Estudios Seculares</label>
        <input type="text" name="estudiosseculares" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Fecha de Inicio de Servicio</label>
        <input type="date" name="fechainicio" class="form-control"> 
        </div>
        <div class="form-group">
        <label for="">Estado</label>
        <select name="estado" id="" class="form-control">
        <option value="Activo">Activo</option>
        <option value="Retirado">Retirado</option>
        </select>
        </div>
        <div class="form-group">
        <label for="">Fecha de Retiro (Opcional)</label>
        <input type="date" name="fecharetiro" class="form-control"> 
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar Pastor</button>
      </div>
        </form>

      </div>
      
    </div>
  </div>
</div>
 <!--alex-->
</body>
</html>