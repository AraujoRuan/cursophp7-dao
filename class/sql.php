<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    }

    private function setParams($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($statement, $key, $value);

        }

    }

    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    }

    public function run($rawRun, $params = array()) {

        $stmt = $this->conn->prepare($rawRun);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawRun, $params = array()):array
    {

        $stmt = $this->run($rawRun, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>