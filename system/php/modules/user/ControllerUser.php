<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/modules/user/ServiceUser.php';

//Se reciben los datos que vienen del formulario para crear un usuario.
if(isset($_POST['newUser'])){
    $response = ServiceUser::newUser($_POST['name'], $_POST['last_name'], $_POST['phone'], $_POST['email']);
}

//Se reciben los datos que vienen del formulario para modificar un usuario.
if(isset($_POST['setUser'])){
    $response = ServiceUser::setUser($_GET['user'], $_POST['name'], $_POST['last_name'], $_POST['phone'], $_POST['email']);
}

//Se recibe el id del usuario para obtener la informacion.
if(isset($_GET['user'])){
    $user = ServiceUser::getUser($_GET['user']);
}

//Se recibe el id del usuario para eliminar el registro.
if(isset($_POST['deleteUser'])){
    $response = ServiceUser::deleteUser($_POST['idUser']);
}

//Se listan todos los usuarios.
if(basename($_SERVER['PHP_SELF']) == 'index.php'){
    $tableUsers = ServiceUser::getTableUsers();
}
?>