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
}