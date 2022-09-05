<?php
     ini_set('display_errors', '1');
     ini_set('display_startup_errors', '1');
     error_reporting(E_ALL);
     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, FETCH, OPTIONS");
     header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    // Recogemos todos los datos enviado por el usuario desde l formulario de cliente
     $data = json_decode(file_get_contents('php://input'), true); //metemos en data los datos del formulario decodificados del JSON
     // El nombre de usuARIO QUE DEBE SER
    $userguardado="ablaracurcix";
    // El passwoprd que debe ser
    $passwordguardado="pinpanpum";
    //Extraemos de lo0sdatos el dato de nombre de usuario enviado por el client
    $user = $data["user"];
    // Extraemos el password enviado por el cliente
    $password = $data["password"];
    // Comprobamos que coinciden
    // Si lo hacen 
    if ($user == $userguardado && $password==$passwordguardado){
        echo "enhorabuena";
        exit;
        // Si no lo hacen
    }else{
        http_response_code(401); //si no coinciden devolvemos un codigo de not authorized para no dar mas datos.
    }
    exit;