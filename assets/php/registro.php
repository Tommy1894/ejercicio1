<?php
    session_start();
    $mensaje="";
    if(isset($_POST['btn']) && $_POST['btn']=="Enviar"){
        if(isset($_POST['txtNombre']) && isset($_POST['txtApellido']) && isset($_POST['txtEdad']) && isset($_POST['txtCivil']) && isset($_POST['txtSexo']) && isset($_POST['txtSueldo'])){
            if(is_numeric($_POST['txtEdad']) && $_POST['txtEdad']>=18 && $_POST['txtEdad']<130){
                    if(!empty($_POST['txtNombre']) && !empty($_POST['txtApellido']) && !empty($_POST['txtEdad']) && !empty($_POST['txtCivil']) && !empty($_POST['txtSexo']) && !empty($_POST['txtSueldo'])){
                    if(!isset($_SESSION['empleados'])){
                        $_SESSION['empleados']=[];
                    }
                
                    $nombre=$_POST['txtNombre'];
                    $apellido=$_POST['txtApellido'];
                    $edad=$_POST['txtEdad'];
                    $civil=$_POST['txtCivil'];
                    $sexo=$_POST['txtSexo'];
                    $sueldo=$_POST['txtSueldo'];
                
                    $empleado=[$nombre, $apellido,$edad,$civil,$sexo,$sueldo];
                    $_SESSION['empleados'][]=$empleado;
                    $mensaje= "Registro exitoso";
                    if(isset($_SESSION['empleados'][4])){
                        header("Location: assets/php/estadistica.php");
                    }   
                }else{
                    $mensaje="No puede enviar datos vacios";
                }
            }else{
                $mensaje="La edad debe ser un número mayor o igual a 18 y menor a 130";
            }
        }else{
            $mensaje="Debe llenar todos los campos";
        }
    }
    
?>