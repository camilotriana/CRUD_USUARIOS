<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/class/System.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/class/Usuario.php';

class ServiceUser extends System
{
    public static function newUser($nombres, $apellidos, $telefono, $correo)
    {
        try {

            $validate = Usuario::validateUser($correo);

            if (!$validate) {
                $result = Usuario::newUser($nombres, $apellidos, $telefono, $correo, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 'activo');
                if ($result) {
                    return Elements::crearMensaje(Constants::$USER_NEW, "success");
                }
            } else {
                return Elements::crearMensaje(Constants::$USER_REPEATED, "error");
            }
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function setUser($id, $nombres, $apellidos, $telefono, $correo)
    {
        try {

            $validate = Usuario::validateUpdateUser($id, $correo);

            if (!$validate) {
                $result = Usuario::setUser($id, $nombres, $apellidos, $telefono, $correo, date('Y-m-d H:i:s'));

                if ($result) {
                    return Elements::crearMensaje(Constants::$USER_UPDATE, "success");
                }
            } else {
                return Elements::crearMensaje(Constants::$USER_REPEATED, "error");
            }
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function getUser($id_usuario)
    {
        try {
            $result = Usuario::getUser($id_usuario);

            if($result->getEstado() == "activo"){
                return $result;
            }else{
                header('location:index');
            }
            
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function deleteUser($id_usuario)
    {
        try {
            $result = Usuario::deleteUser($id_usuario, "inactivo");

            if ($result) {
                return Elements::crearMensaje(Constants::$USER_DELETE, "success");
            }
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function getTableUsers()
    {
        try {
            $html = "";
            $listUser = Usuario::listUser();

            if (!empty($listUser)) {
                foreach ($listUser as $value) {
                    $html .= Elements::createTable(
                        $value->getId(),
                        $value->getNombres(),
                        $value->getApellidos(),
                        $value->getTelefono(),
                        $value->getCorreo(),
                        $value->getFecha_registro(),
                        $value->getFecha_modificacion()
                    );
                }
            } else {
                $html = '<tr><td colspan="8" class="text-secondary">No existen usuarios registrados</td></tr>';
            }
            return $html;
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
