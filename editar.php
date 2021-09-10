<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Document</title>
 <style>
body{
    background: linear-gradient(70deg, black, white);}
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
<?php
include'header.php';
?>

<?php
include'conexion.php';

$id=$_GET['id'];
$sql="SELECT * FROM `persona` WHERE id='$id'";

$resultado=mysqli_query($con,$sql);
while ($fila = mysqli_fetch_assoc($resultado)) {
    
?>
<div id="container" class="form-group col-md-4">

<form>
<label for=""><i class="fa fa-id-card"></i>ID</label>
<input class="form-control"type="text" name="txtid" value="<?php echo $fila['id']?>" readonly="readonly"><br>
<label for=""><i class="fa fa-user"></i>NOMBRES</label>
<input class="form-control"type="text" name="txtuser"  value="<?php echo $fila['nombre']?>" ><br>
<label for=""><i class="fa fa-envelope"></i>CORREO</label>
<input class="form-control" type="text" name="txtcorreo" value="<?php echo $fila['correo']?>" required  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"><br>
<label for=""><i class="fa fa-phone"></i>TELEFONO</label>
<input  class="form-control" type="text" name="txttel" value="<?php echo $fila['telefono']?>"><br>
<input class="btn btn-primary" type="submit" name="" value="Actualizar">
<a class="btn btn-outline-warning" href="index.php">regresar</a>

</form>

</div>
<?php
}
?>


<?php

include'conexion.php';
$idp=$_GET['txtid'];
$user=$_GET['txtuser'];
$correo=$_GET['txtcorreo'];
$tel=$_GET['txttel'];
if ($user!=null||$correo!=null||$tel=null) {

    $sql2="update persona set nombre ='".$user."',correo='".$correo."',telefono='".$tel."' WHERE id='".$idp."'";
    mysqli_query($con,$sql2);

    echo'
    
    <script>
    
    alert("usuario almacenado exitosamente")

    window.location="index.php";
    </script>
    ';

    if ($user=1) {

        
        echo'
        <script>
        
        alert("usuario no fue almacenado exitosamente")
    
       
        </script>
        ';
    
    }

}





?>







<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include'footer.php';
?>
    
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>

