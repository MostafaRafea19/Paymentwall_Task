<?php

class DB
{
    public static function connect()
    {
        $connection = new PDO("mysql:host=localhost;dbname=scandiweb", "root", "");
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    }

    public static function query($query, $params = [])
    {
        $statement = self::connect()->prepare($query);
        $check = $statement->execute($params);

        if (explode(' ', $query)[0] == "SELECT") {
            $data = $statement->fetchAll();
            return $data;
        } else {
            return $check;
        }
    }
}
