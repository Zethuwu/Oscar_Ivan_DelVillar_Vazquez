

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Concatenacion</title>
</head>
<body>
    
<?php
    $nombre = $_POST["txtnombre"];
    $edad = $_POST["txtedad"];
    $password = $_POST["txtpsw"];
    $correo = $_POST["txtcorreo"];
    
    echo "<p class ='text-primary'> Mi nombre es: " .$nombre ."</p>";
    echo "<p class ='text-primary-emphasis'> Mi edad es: " .$edad ."</p>";
    echo "<p class ='text-info'> Mi contraseña es: " .$password ."</p>";
    echo "<p class ='text-success-emphasis'> Mi Correo es: " .$correo ."</p>";
    echo "<a href='index.php'>Al incio</a>";  
?>

</body>
</html>

