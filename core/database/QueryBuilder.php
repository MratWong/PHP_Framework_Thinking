<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo){
         $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement =$this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function insert($dataArr,$table){
        $getDataKey = array_keys($dataArr);
        // dd($getDataKey);
        $cols = implode(',',$getDataKey);
        // dd($cols);
        $questionMark = "";
        foreach($getDataKey as $key){
            $questionMark .="?,";
        }
        $questionMark = rtrim(($questionMark),',');
        $sql = "insert into $table($cols) values ($questionMark)";
        $getDataValue = array_values($dataArr);
        $statement = $this->pdo->prepare($sql);
        $statement->execute($getDataValue);
    }
}