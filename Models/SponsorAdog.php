<?php
	include_once 'database.php';
	
	function doglist(){
		$pdo = initDB();
		
		$sql = "SELECT DISTINCT Name, Age, Picture, Gender, Description
				FROM sponsordog sd, dog d
				WHERE sd.DogId = d.DogId
				AND d.Adopted = 0
				ORDER BY Name";
		$stmt = $pdo->prepare($sql);
		
		if ($stmt->execute() === false)
			$return = "ERROR IN YOUR SQL EXECUTION";
		else 
			$return = $stmt->fetchAll();
		return $return;
	}