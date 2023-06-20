<?php

    include 'db/Conexion.php';

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['usuario']) && isset($_POST['contraseña']) && isset($_POST['Rcontraseña'])) {
        function validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return($data);
        }
    
        $nombre = validar($_POST['nombre']);
        $apellido = validar($_POST['apellido']);
        $usuario = validar($_POST['usuario']);
        $contraseña = validar($_POST['contraseña']);
        $Rcontraseña = validar($_POST['Rcontraseña']);
    
        $usuario_datos = 'usuario='. $usuario . '&nombre=' . $nombre . '&apellido=' . $apellido;
    
        if (empty($nombre)) {
            header("location: registrarse.php?error=Por favor Introduzca el Nombre.&$usuario_datos");
        } elseif (empty($apellido)) {
            header("location: registrarse.php?error=Por favor Introduzca el Apellido.&$usuario_datos");
            exit();
        } elseif (empty($usuario)) {
            header("location: registrarse.php?error=Por favor Introduzca el Correo Electronico.&$usuario_datos");
            exit();
        } elseif (empty($contraseña)) {
            header("location: registrarse.php?error=Por favor Introduzca la contraseña.&$usuario_datos");
            exit();
        } elseif (empty($Rcontraseña)) {
            header("location: registrarse.php?error=Por favor Introduzca Nuevamente la Contraseña.&$usuario_datos");
            exit();
        } elseif ($contraseña !== $Rcontraseña) {
            header("location: registrarse.php?error=Las contraseñas no coinciden.&$usuario_datos");
            exit();
        } else {
            $contraseña = md5($contraseña);
    
            $sql = "SELECT * FROM usuarios WHERE Usuario = '$usuario'";
            $query = $conexion->query($sql);
    
            if (mysqli_num_rows($query) > 0) {
                header("location: registrarse.php?error=El Usuario Ya Existe.&$usuario_datos");
                exit();
            } else {
                $sql2 = "INSERT INTO usuarios(Usuario, Contraseña, Nombre, Apellido) VALUES ('$usuario', '$contraseña', '$nombre', '$apellido')";
                $query2 = $conexion->query($sql2);
    
                if ($query2) {
                    header("location: registrarse.php?success=Cuenta Creada con Exito!.&$usuario_datos");
                    exit();
                } else {
                    header("location: registrarse.php?error=Error Desconocido.&$usuario_datos");
                    exit();
                }
            }
        }
    } else {
        header("location: registrarse.php");
        exit();
    }
    
