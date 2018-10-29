<?php
    session_start();
    session_unset();
    session_destroy();

    require_once("Model/conexion.php");

    $usuario = filter_input(INPUT_POST,'username');
    $contrasena = filter_input(INPUT_POST, 'contrasena');

    if($usuario === false || $usuario === NULL || $usuario === '' || 
        $contrasena === false || $contrasena === NULL || $contrasena === ''){

        header('Location: login.php');
        exit();
    }

    //Validacion del usuario
    
	$stmt = Conexion::conectar()->prepare('SELECT * FROM usuarios where username = :username');
    $stmt ->bindParam(':username',$usuario);
    $stmt ->execute();
    $r = $stmt->fetch(PDO::FETCH_ASSOC);

    if($r){
        if($r['contrasena'] === $contrasena){
            session_start();
			$_SESSION['validar'] = true;
            $_SESSION['usuario_id'] = (int)$r['id'];
            $_SESSION['username'] = $r['username'];
            $_SESSION['correo'] = $r['correo'];
            header('Location: index.php');
            exit();
        }
    }
    header('Location: index.php');
?>