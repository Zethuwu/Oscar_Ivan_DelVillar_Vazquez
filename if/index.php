<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>HOME</title>
</head>
<body>
    
    <form action="calificacion.php" method="post">
        <div class="form-text">
            <h3>Nombre</h3>
        </div>
        <input name="txtnombre" class="form-control" style="width : 500px; heigth : 100px" placeholder="Nombre">

        <div class="form-text">
            <h3>Calificacion</h3>
        </div>
        <input name="txtcalificacion" class="form-control" style="width : 500px; heigth : 100px" placeholder="Calificacion">
        <br>
        <button>Enviar</button>
    </form>



</body>
</html>