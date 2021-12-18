<?php


class Database{

	public function execute($sql)
	{
		echo $sql;
	}
}


class BuildQuery{

	public function Create()
	{
		
		$db = new Database;
		$sql = "insert into table...";
		$db->execute($sql);
	}

	public function Update()
	{
		
		$db = new Database;
		$sql = "Update table set values...";
		$db->execute($sql);
	}
}

$q = new BuildQuery;

$q->Create();

