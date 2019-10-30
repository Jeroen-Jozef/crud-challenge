<?php


class Connection
{

  public function openConnection()
    {
        // Try to figure out what these should be for you
        $dbhost = "localhost";
        $dbuser = "alaa2";
        $dbpass = "1234560"; // Password
        $db = "curd"; // DataBase name
        // Try to understand what happens here
        $pdo = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // Why we do this here
        return $pdo;
    }

}
