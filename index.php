<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
body{
    background: linear-gradient(70deg, black, white);
}

#tabla{
    margin: 100px;
    position: relative; 
    width:55%

}
#agregar{

  width: 200px;
  margin: 50px;
}




</style>
<body>
<?php
include'header.php';
?>
    


<?php


include'conexion.php';

$query = "SELECT * FROM persona";
$result = mysqli_query($con, $query);
?>



<div>

<a   id="agregar"   href="agregar.php"  class="btn btn-primary btn-block"><i class="fa fa-plus-square"></i>Nuevo</a>
 <table id="tabla" class="table table-striped table-bordered table-hover table-dark" >

<thead>

<tr>
    <th>ID</th>
    <th>NOMBRES</th>
    <th>CORREO</th>
    <th>TELEFONO</th>
    <th>ACCIONES</th>
    
</tr>

</thead>
<tbody>
<?php

while($fila = mysqli_fetch_assoc($result)) { 
   


?>
<tr>
    <th><?php echo $fila['id']?></th>
    <th><?php echo $fila['nombre']?></th>
    <th><?php echo $fila['correo']?></th>
    <th><?php echo $fila['telefono']?></th>
    <th><a href="editar.php?id=<?php echo $fila['id'] ?>" class="btn btn-success"><i class="fa fa-edit"></i>Editar</a> <a  href="eliminar.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</a></th>
    
</tr>

<?php
}
?>




</tbody>


 </table>
 
 





</div>
<?php
include'footer.php';
?>
    
</body>
</html>