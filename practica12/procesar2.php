<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Practicac12pte2</title>
    <body background="https://www.1zoom.me/big2/633/296036-alexfas01.jpg"style=background-size: cover;>
</head>
<body>



 
    <div>

    <p>BRUCE CALCULATOR</p>

   <?php

    $nombreAlumno = $_POST['nombre'];
    $apellidosAlumno = $_POST['apellidos'];
    echo 'Tu te llamas: '.$nombreAlumno.' '.$apellidosAlumno;
    Echo "<br></br>";

?>



    <?php

    $pi = 3.1416;
    $radio = $_POST['radio'];
    echo 'He obtenido el Area y es: '.$pi*($radio*$radio).' Centimetros2';
    

?>

    </div>
    
   


</body>

</html>