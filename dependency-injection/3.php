<?php

class Database{

    public function execute($sql)
    {
        echo $sql;
    }
}

class BuildQuery{

    protected $db;

    public function __construct($db)
    {
        $this->db = $db; // instead of creating hard code database class object passed parameter 
    }

    public function create()
    {
        $sql = "insert data into table...";
        $this->db->execute($sql);
    }

    public function update()
    {
        $sql = "Update table set values...";
        $this->db->execute($sql);
    }
}

$db = new Database;  // To call third party object
$q = new BuildQuery($db);

$q->create();