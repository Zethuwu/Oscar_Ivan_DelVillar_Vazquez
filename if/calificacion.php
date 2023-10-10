<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
   

    <?php
        
        $nombre = $_POST["txtnombre"];
        $calificacion = $_POST["txtcalificacion"];

        echo "<h2>Hola ".$nombre."</h2>";
        if($calificacion == 10 || $calificacion == 9){
            echo "<div class='alert alert-success' role='alert'> 
            Eres de los mejores, Felicidades 
            </div>";
        }else if ($calificacion == 8 || $calificacion == 7){
            echo "<div class='alert alert-primary' role='alert'>
                No estuvo tan mal, hay que esforzarse mas!
          
            </div>";
        }else if($calificacion == 6){
            echo "<div class='alert alert-warning' role='alert'> Casi y no pasas!! </div>";
        }else if($calificacion < 6){
            echo "<div class='alert alert-danger' role='alert'>
                No aprobaste, final o extra
          
            </div>";
        }else{
            echo " <br>";
            echo "<h3> Calificacion Invalida </h3>";
            echo " <br>";
        }
        
        echo "<a href='index.php'>Al incio</a>";  
    ?>

   
</body>
</html>