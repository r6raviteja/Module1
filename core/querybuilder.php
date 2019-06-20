<?php
class querybuilder{
	protected $pdo;
	public function __construct($pdo){
		$this->pdo=$pdo;
	}
	public function selectall($table){
		$statements=$this->pdo->prepare("select * from {$table}");
		$statements->execute();
		return $statements->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $parameters)
	{
		$sql=sprintf(
			"insert into %s (%s) values (%s)",
			$table,
			implode(",",array_keys($parameters)),
			":".implode(". :", array_keys($parameters))
		);
		try{
			$statement=$this->pdo->prepare($sql);
			$statement->execute($parameters);
		}catch(Exception $e){
			die("something wrong");
		}
		# code...
	}
}
?>