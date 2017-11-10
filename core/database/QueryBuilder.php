<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo) //type hinted variable - pass in PDO object
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $fields)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',

            // Get fields array from controller - strip down to just keys and add commas and colon for param binding
            // Also prepend colon at start to capture first field as it's adding commas afterwards.
            // Get Fields array from controller - strip down to just keys and add commas
            $table, 
            implode(', ', array_keys($fields)), 
            ':' .implode(', :', array_keys($fields)) 
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($fields);

        } catch (Exception $e) {

            echo $e->getMessage();
        }

    }
}