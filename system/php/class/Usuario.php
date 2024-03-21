<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/model/UsuarioDTO.php';

//Esta clase es la encargada de realizar todas las respectivas consultas a la base de datos.
class Usuario extends System
{
    public static function newUser($nombres, $apellidos, $telefono, $correo, $fecha_registro, $fecha_modificacion, $estado)
    {
        $dbh  = parent::Conexion();
        $stmt = $dbh->prepare("INSERT INTO usuarios (nombres, apellidos, telefono, correo, fecha_registro, fecha_modificacion, estado) 
                                VALUES (:nombres, :apellidos, :telefono, :correo, :fecha_registro, :fecha_modificacion, :estado)");
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':fecha_registro', $fecha_registro);
        $stmt->bindParam(':fecha_modificacion', $fecha_modificacion);
        $stmt->bindParam(':estado', $estado);

        return  $stmt->execute();
    }

    public static function setUser($id, $nombres, $apellidos, $telefono, $correo, $fecha_modificacion)
    {
        $dbh  = parent::Conexion();
        $stmt = $dbh->prepare("UPDATE usuarios SET nombres = :nombres, apellidos = :apellidos, telefono = :telefono, correo = :correo, fecha_modificacion = :fecha_modificacion WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':fecha_modificacion', $fecha_modificacion);
        return  $stmt->execute();
    }

    public static function getUser($id){
        $dbh  = parent::Conexion();
        $stmt = $dbh->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'UsuarioDTO');
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function deleteUser($id, $estado)
    {
        $dbh  = parent::Conexion();
        $stmt = $dbh->prepare("UPDATE usuarios SET estado = :estado WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':estado', $estado);
        return  $stmt->execute();
    }

    public static function listUser()
    {
        $dbh  = parent::Conexion();
        $stmt = $dbh->prepare("SELECT * FROM usuarios WHERE estado = 'activo' ORDER BY nombres ASC, apellidos ASC");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'UsuarioDTO');
        $stmt->execute();
        return  $stmt->fetchAll();
    }

    public static function validateUser($correo){
        $dbh  = parent::Conexion();
        $stmt = $dbh->prepare("SELECT * FROM usuarios WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'UsuarioDTO');
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function validateUpdateUser($id, $correo){
        $dbh  = parent::Conexion();
        $stmt = $dbh->prepare("SELECT * FROM usuarios WHERE correo = :correo AND id != :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':correo', $correo);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'UsuarioDTO');
        $stmt->execute();
        return $stmt->fetch();
    }
}
