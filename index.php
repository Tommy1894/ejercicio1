<?php
    include_once('assets/php/registro.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            background-color: #ffffff;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 16pt;
        }
        .input-field label {
            color:darkgrey;
            font-size: 14pt;
        }
    </style>
</head>
<body>
    <div class="container">

        <h2 class="center-align">Registro de Empleados</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="idNombre" name="txtNombre" required><br>
                    <label for="idNombre">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="idApellido" name="txtApellido" required><br>
                    <label for="idApellido">Apellido</label>
                </div>
            </div>
            <div class= "row">
                <div class="input-field col s6">    
                    <input type="text" id="idEdad" name="txtEdad" required><br>
                    <label for="idEdad">Edad</label>
                </div>
                <div class="input-field col s6">
                    <select name="txtSexo" required>
                        <option value=" " disabled selected>Escoge una opcion</option>   
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                    <label>Sexo</label><br>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <select name="txtCivil" required>
                        <option value=" " disabled selected>Escoge una opcion</option>
                        <option value="soltero">Soltero(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="viudo">Viudo(a)</option>
                    </select>
                    <label>Estado civil</label>
                    
                </div>
                <div class="input-field col s6">
                    <select name="txtSueldo" required>
                        <option value=" " disabled selected>Escoge una opcion</option>
                        <option value="menos">Menos de 1000 Bs.</option>
                        <option value="entre">Entre 1000 y 2500 Bs.</option>
                        <option value="mas">Mas de 2500 Bs.</option>
                    </select>
                    <label>Sueldo</label>
                </div>
            </div>
            <div class="row center-align">
                <button type="submit" name="btn" Value="Enviar" class="btn waves-effect waves-light ">
                        Enviar<i class="material-icons right">send</i>     
                </button>
            </div>
         </form>
    <?php
       echo '<br><br><h5 class="center-align">'.$mensaje.'</h5>';
    ?>
    <script>
         document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
    </script>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>