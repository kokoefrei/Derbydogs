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
	
	function colorOption()
	{
		$pdo = initDB();
		$sql = "SELECT ColorName
				FROM color";
		$stmt = $pdo->prepare($sql);
		
		if ($stmt->execute() === false)
			$return = "ERROR IN YOUR SQL EXECUTION";
			else
				$return = $stmt->fetchAll();
				
				return $return;
	}
	
// 	function agesearch($bdate){
// 		$pdo = initDB();
// 		$sql = "SELECT Name, Age, Picture, Gender, Description
// 				FROM dog
// 				Where Age = :age
// 				ORDER BY Name";
// 		$stmt = $pdo->prepare($sql);
// 		$stmt->bindParam(':age', $age);
		
// 		if ($stmt->execute() === false)
// 			$return = "ERROR IN YOUR SQL EXECUTION";
// 		else 
// 			$return = $stmt->fetchAll();
		
// 		return $return;
// 	}
	
// 	function colorSearch($color){
// 		$pdo = initDB();
// 		$sql = "SELECT Name, Age, Picture, Gender, d.Description
// 				FROM dog d, color c
// 				WHERE d.Color = c.ColorId
// 				AND ColorName = :color
// 				AND d.Adopted = 0
// 				ORDER BY Name";
		
// 		$stmt = $pdo->prepare($sql);
// 		$stmt->bindParam(':color', $color);
		
// 		if ($stmt->execute() === false)
// 			$return = "ERROR IN YOUR SQL EXECUTION";
// 			else
// 				$return = $stmt->fetchAll();
				
// 				return $return;
// 	}
	
	function complexSearch($bdate, $color){
		$pdo = initDB();
		$sql = "SELECT Name, Age, Picture, Gender, d.Description
				FROM dog d, color c
				Where d.Age = :age
				AND Adopted = 0
				AND d.Color = c.ColorId
				AND ColorName = :color ";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':age', $bdate);
		$stmt->bindParam(':color', $color);
		
		if ($stmt->execute() === false)
			$return = "ERROR IN YOUR SQL EXECUTION";
		else
			$return = $stmt->fetchAll();
				
		return $return;
	}
	
	
	function breedSearch($breed){
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
	
// 	if ((ageSearch()!= false) && (colorSearch() != false)){
		
// 	}
// 	elseif (ageSearch() === false)
// 	$return = "ERROR ON SEARCH AGE";
// 	elseif (colorSearch() === false)
// 	$return = "ERROR ON COLOR SEARCH";
// 	else
// 		$return = "ERROR ON COMPLEX SEARCH";
		
// 		return $return;