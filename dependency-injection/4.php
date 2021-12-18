<?php

interface Database{

    public function execute($sql);
}

class User implements Database{

    public function execute($sql)
    {
        echo $sql;
    }
}


class BuildQuery{

    protected $db;

    public function __construct($db)
    {
        $this->db= $db;
    }

    public function create()
    {
        $sql ="Insert data into table...";
        $this->db->execute($sql);
    }


    public function update()
    {
        $sql = "Update table set values...";
        $this->db->execute($sql);
    }
}

$db = new User;

$q= new BuildQuery($db);

$q->update();