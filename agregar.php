<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
 <style>

body{
    background: linear-gradient(70deg, black, white);
 
}


     #container{
  
  margin: 1rem;
  padding: 1rem;
  border: 2px solid #ccc;
  align-items: center;
  text-align: center;

     }
     
     
     </style>

</head>
<body>
<div id="container" class="form-group col-md-4">

<form>
<label for=""><i class="fa fa-user"></i>NOMBRES</label>
<input class="form-control"type="text" name="txtuser" placeholder="Nombres"><br>
<label for=""><i class="fa fa-envelope"></i>CORREO</label>
<input class="form-control" type="text" name="txtcorreo" required  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Email"><br>
<label for=""><i class="fa fa-phone"></i>TELEFONO</label>
<input  class="form-control" type="text" name="txttel" placeholder="Telefono"><br>
<input class="btn btn-primary" type="submit" name="" value="Agregar">
<a class="btn btn-outline-warning" href="index.php">regresar</a>

</form>

</div>

<?php
include'conexion.php';

$user=$_GET['txtuser'];
$correo=$_GET['txtcorreo'];
$tel=$_GET['txttel'];
if ($user!=null||$correo!=null) {

    $sql="INSERT INTO `persona`(`nombre`, `correo`, `telefono`) VALUES ('$user','$correo','$tel')";
    mysqli_query($con,$sql);

    echo'
    <script>
    
    alert("usuario almacenado exitosamente")

    window.location="../index.php";
    </script>
    ';

    if ($user=1) {
        header("location:index.php");
    }

}else{
   
}



?>



</body>
</html>

