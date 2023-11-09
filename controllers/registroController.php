<?php
require_once(__DIR__ . '/../models/registroModel.php');

$alert = " ";

if (!empty($_POST['btnComenzar'])) {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    $passwordConfirm = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : false;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;



    if ($nombre && $email && $password && $telefono) {
        $registro = new registroModel();
        $registro->setNombre($nombre);
        $registro->setEmail($email);
        $registro->setPassword($password);
        $registro->setTelefono($telefono);

        $guardar = $registro->guardarRegistro();
        if ($guardar) {
            $alert = "success";
        } else {
            $alert = "danger";
        }
    } else {
        $alert = "warning";
    }
}
?>