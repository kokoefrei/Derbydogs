<?php

	include_once 'database.php';
	
	function nameSearch($text)
	{
		$pdo = initDB();
		$sql = "SELECT Name, Age, Picture, Gender, Description 
				FROM dog
				WHERE Name like '%$text%' 
				AND Adopted = 0
				ORDER BY Name";
		$stmt = $pdo->prepare($sql);
		
		if ($stmt->execute() === false)
			$return = "ERROR IN YOUR SQL EXECUTION";
		else 
			$return = $stmt->fetchAll();
		
			return $return;
	}
	
	function breedOption()
	{
		$pdo = initDB();
		$sql = "SELECT BreedName
				FROM breed";
		$stmt = $pdo->prepare($sql);
		
		if ($stmt->execute() === false)
			$return = "ERROR IN YOUR SQL EXECUTION";
			else
				$return = $stmt->fetchAll();
				
				return $return;
	}
	
	function breedSearch($breed)
	{
		$pdo = initDB();
		$sql = "SELECT Name, Age, Picture, Gender, d.Description
		FROM dog d, breed b
		WHERE d.Breed = b.BreedId
		AND BreedName = :breed
		AND d.Adopted = 0
		ORDER BY Name";
		
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':breed', $breed);
		
		if ($stmt->execute() === false)
			$return = "ERROR IN YOUR SQL EXECUTION";
			else
				$return = $stmt->fetchAll();
				
				return $return;
	}