<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 9/4/2019
 * Time: 17:02
 */
namespace Clases;
class DB
{
    private static $db;

    private function __construct()
    {
    }

    private static function connect()
    {
        $ini = parse_ini_file('config.ini', true);

        try {
            $host = $ini["DATABASE"]["host"];
            $dbName = $ini["DATABASE"]["db"];
            $charset = $ini["DATABASE"]["charset"];
            $user = $ini["DATABASE"]["user"];
            $password = $ini["DATABASE"]["password"];

            self::$db = new \PDO("mysql:host=$host;dbname=$dbName;charset=$charset", $user, $password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            echo $e->getFile();

            die();
        }
    }


    public static function getConnection()
    {
        if (empty(self::$db))
            self::connect();

        return self::$db;
    }
}