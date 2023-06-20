<?php 


header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


session_start();
include 'db/Conexion.php';



if (isset($_POST['Usuario']) && isset($_POST['Contraseña'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$Usuario = validate($_POST['Usuario']);
$Contraseña = validate($_POST['Contraseña']);

if (empty($Usuario)) {
    header("Location: InicioSesion.php?error=Por favor, ingresa tu correo electrónico o nombre de usuario.");
    exit();
}elseif (empty($Contraseña)) {
    header("Location: InicioSesion.php?error=Por favor, ingresa tu contraseña.");
    exit();
}else {

    // $Contraseña = md5($Contraseña);
    
    $sql = "SELECT * FROM usuarios WHERE Usuario = ? AND Contraseña = ?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $Usuario, $Contraseña);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['Usuario'] === $Usuario && $row['Contraseña'] === $Contraseña) {
            $_SESSION['Usuario'] = $row['Usuario'];
            $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
            $_SESSION['Id'] = $row['Id'];
            header("Location: cuentadeUsuario.php");
            exit();
        } else {
            header("Location: InicioSesion.php?error=El Usuario o la Contraseña son Incorrectos.");
            exit();
        }
    } else {
        header("Location: InicioSesion.php?error=El Usuario o la Contraseña son Incorrectos.");
        exit();
    }
    header("Location: index.php");
            exit();
}



