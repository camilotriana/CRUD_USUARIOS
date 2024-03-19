<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/class/System.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/class/Usuario.php';

class ServiceUser extends System
{
    public static function newUser($nombres, $apellidos, $telefono, $correo)
    {
        try {
            $result = Usuario::newUser($nombres, $apellidos, $telefono, $correo, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), 'activo');
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function setUser($id, $nombres, $apellidos, $telefono, $correo)
    {
        try {
            $result = Usuario::setUser($id, $nombres, $apellidos, $telefono, $correo, date('Y-m-d H:i:s'));

            if($result){
                return Elements::crearMensaje(Constants::$USER_UPDATE, "success");
            }
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function getUser($id_usuario)
    {
        try {
            $result = Usuario::getUser($id_usuario);
            return $result;
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
                    $html .= '<tr>';
                    $html .= '<td>' . $value->getId() . '</td>';
                    $html .= '<td>' . $value->getNombres() . '</td>';
                    $html .= '<td>' . $value->getApellidos() . '</td>';
                    $html .= '<td>' . $value->getTelefono() . '</td>';
                    $html .= '<td>' . $value->getCorreo() . '</td>';
                    $html .= '<td>' . $value->getFecha_registro() . '</td>';
                    $html .= '<td>' . $value->getFecha_modificacion() . '</td>';
                    $html .= '<td class="text-center"><a href="editUser?user='.$value->getId().'" class="m-1"><i class="bi bi-pencil-square"></i></a> <a class="m-1" role="button"><i class="bi bi-trash"></i></a></td>';
                    $html .= '</tr>';
                }
            }else{
                $html = '<tr><td colspan="8" class="text-secondary">No existen usuarios registrados</td></tr>';
            }
            return $html;
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
