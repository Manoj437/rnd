<?php

use BuildQuery as GlobalBuildQuery;
use Database as GlobalDatabase;

class Database{

    public function execute($sql)
    {
        echo $sql;
    }
}

class BuildQuery{

    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function create()
    {
        $sql = "insert data into table...";
        $this->db->execute($sql);
    }

    public function update()
    {
        $sql = "Update table set value.... ";
        $this->db->execute($sql);
    }

}

$q = new BuildQuery;

$q->create();