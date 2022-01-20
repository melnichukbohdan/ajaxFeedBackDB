<?php

require_once "Connection.php";

class Query {

    private $db;

    /*
     * create connection for DB and get all methods PDO
     * @param object PDO
     */
    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    //insert feedback to DB
    public function insert ($data)
    {
        $sql = "INSERT INTO feedback(email, name, phone, message) VALUE (:email, :name, :phone, :message)";

        $statement = $this->db->prepare($sql);
        $result = $statement->execute($data);
        return $result;
    }

    //select feedbacks for DB
   public function select ()
   {
       $sql = "SELECT id,name, message 
               FROM feedback
               ORDER BY id
               DESC ";

       $statement = $this->db->prepare($sql);
       $statement->execute();
       $statement->bindParam(1,$result['id'], PDO::PARAM_INT);
       $statement->bindParam(1,$result['name'], PDO::PARAM_STR);
       $statement->bindParam(2,$result['message'], PDO::PARAM_STR);

       return $this->toArray($statement);
   }

        // conversion data from DB to arrays
   public function toArray ($data)
   {
       $arr = [];
       while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
           $arr[] = $row;
       }
       return $arr;

   }
}
