<?php
    session_start();
    if(isset($_SESSION['empleados'][4])){
        $femenino=0;
        $casado=0;
        $viudas=0;
        $edad=0;
        $hombres=0;
        foreach($_SESSION['empleados'] as $empleado){
            if($empleado[4]=="femenino"){
                $femenino++;
            }
            if($empleado[4]=="masculino" && $empleado[3]=="casado" && $empleado[5]=="mas"){
                $casado++;
            }
            if($empleado[4]=="femenino" && $empleado[3]="viudo"){
                if($empleado[5]=="entre" || $empleado[5]=="mas"){
                    $viudas++;
                }
            }
            if($empleado[4]=="masculino"){
                $edad+=(int)$empleado[2];
                $hombres++;
            }
        }
        if($hombres!=0){
            $promedio=$edad/$hombres;
        }
        else{
            $promedio=0;
        }
        
        
    
        // foreach($_SESSION['empleados'] as $empleado){
        //     echo $empleado[0]."<br>";
        //     echo $empleado[1]."<br>";
        //     echo $empleado[2]."<br>";
        //     echo $empleado[3]."<br>";
        //     echo $empleado[4]."<br>";
        //     echo $empleado[5]."<br>";
        // }

        
    } 
    else{
        echo "Debe tener 5 empleados para acceder a esta funcion<br>";
        echo "<button type='button' name='regresar'><a href='../../index.php'>Regresar</a></button>";
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadistica</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            background-color: #ffffff;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 15pt;
        }
        button{
            margin-bottom: 5%;
            margin-top: 2%;
        }

    </style>
</head>
<body>
    <div class="container">
        <?php
            if(isset($_SESSION['empleados'][4])){
                echo '<ul class="collection with-header">';
                echo '<li class="collection-header"><h2 class="center-align">Estadística</h2></li>';
                echo '<li class="collection-item">Total de empleados del sexo femenino: '.$femenino.'</li>';
                echo '<li class="collection-item">Total de hombres casados que ganan mas de 2500 Bs.: '.$casado.'</li>';
                echo '<li class="collection-item">Total de mujeres viudas que ganan mas de 1000 Bs.: '.$viudas.'</li>';
                echo '<li class="collection-item">Edad promedio de los hombres: '.$promedio.'</li>';
                echo '</ul>';
                session_destroy();
            }
            else{
                echo "<h4 class='center-align'>Debe tener 5 empleados para acceder a esta funcion.</h4><br>";
            }
        ?>
        <div class="center-align">
            <a href='../../index.php'>
                <button type='button' class="btn waves-effect waves-light">Regresar</button>
            </a>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>