<?php

require_once "Connection.php";

class Query {

    private $db;

    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function insert ($data)
    {
     //   $connection = new PDO("mysql:host=localhost;dbname=ajaxphp", 'root', '');
        $sql = "INSERT INTO feedback(email, name, phone, message) VALUE (:email, :name, :phone, :message)";

        $statement = $this->db->prepare($sql);
        $result = $statement->execute($data);
        return $result;
    }

}