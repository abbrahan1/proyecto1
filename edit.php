<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

<div>
               

<h3>actualizar usuario</h3>


    <?php
include("./conex.php");
$id = $_GET["q"];

$sql = "SELECT * FROM `registro` WHERE autor_id = $id";

$res = mysqli_query($conexion,$sql);
while ($a =mysqli_fetch_array($res)) {  
    echo ' 
    <form action="editar.php" method="post">
    
    
    <div class="col-md-12">
    <input type="hidden" name="id" value="'.$a['autor_id'].'">
    <input type="text" name="nombre" value="'.$a['nom'].'">
    <input type="text" name="email" value="'.$a['email'].'">
    <input type="text" name="contra" value="'.$a['contrasena'].'"><br><br>
    </div> <br>
    
    <div class="form-button mt-3">
    <button type="submit" id="cargar">actualizar</button>
    </div>
    
    </form>';
}

?>

</div>
</body>
</html>