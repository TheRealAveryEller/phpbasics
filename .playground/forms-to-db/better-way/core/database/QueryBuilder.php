<?php

class QueryBuilder {
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class) {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function insert($table, $parameters) {
        // INSERT INTO %t ($c) VALUES (%p)
        // INSERT INTO users (first_name) values (:name)
        // sprintf - declare a string with placeholders that you assign variables to
        // array_keys(<array>) - returns only the array keys
        // implode(<array>) - turns array into a string. must be formatted with first argument
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table, 
            implode(', ', array_keys($parameters)), 
            ':' . implode(', :', array_keys($parameters))          
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch(Exception $e) {
            die('Something Went Wrong!');
        }
        
    }
}