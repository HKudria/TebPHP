<?php

	function dbInstance() : PDO{
		static $db;
		if($db === null){
			//$db = new PDO('mysql:dbname=lesson;host=localhost;port=3306;charset=utf8','root','');
            //connect for MacBook
			$db = new PDO('mysql:dbname=dl5;host=localhost;port=3306;charset=utf8','root','root');
		}
		return $db;
	}

	function dbQuery(string $sql, array $params = []) : PDOStatement{
		$db = dbInstance();
		$query = $db->prepare($sql);
		$query->execute($params);
		dbCheckError($query);
		return $query;
	}

	function dbCheckError(PDOStatement $query) : bool{
		$errInfo = $query->errorInfo();

		if($errInfo[0] !== PDO::ERR_NONE){
			echo $errInfo[2];
			exit();
		}

		return true;
	}

	function dbLastId() : string{
		$db = dbInstance();
		return $db->lastInsertId();
	}

    function checkID($id){
        $id = (int) $id;
        if(!preg_match('/^[1-9]+/',$id)){
          $id = 0;
        }
        return $id;
    }