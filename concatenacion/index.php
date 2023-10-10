<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <form action="concatena.php" method="post">
        <div class="form-text">
            <h3>Nombre</h3>
        </div>

        <input  name="txtnombre" class="form-control" style="width : 500px; heigth : 100px" placeholder="Ponga su nombre aqui">
        <div class="form-text"> 
             <h3>Edad</h3>
        </div>
       
        <input name="txtedad" class="form-control" style="width : 500px; heigth : 100px" placeholder="Ponga su edad aqui">

        <div class="form-text"> 
             <h3>Pasword</h3>
        </div>
       
        <input  type = "password"name="txtpsw" class="form-control" style="width : 500px; heigth : 100px" placeholder="Ponga su contraseña aqui">

        <div class="form-text"> 
             <h3>Correo</h3>
        </div>
       
        <input name="txtcorreo" class="form-control" style="width : 500px; heigth : 100px" placeholder="Ponga su correo aqui">
        <br>
        <button>Enviar</button>
    </form>
</body>
</html>

