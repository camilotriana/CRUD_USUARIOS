<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/app.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/system/php/class/Elements.php';

abstract class System
{

    public static function Conexion()
    {
        try {
            $dsn    = "mysql:host=".Constants::$IP_BD.";dbname=".Constants::$NOMBRE_BD;
            $dbh    = new PDO($dsn, Constants::$USUARIO_BD, Constants::$PASS_BD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
