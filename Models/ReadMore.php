<?php

include_once 'database.php';

function information($id){
	$pdo = initDB();
	$sql = "SELECT Name, Age, Color, Breed, Picture, Gender, LikesOD, LikesTP, Description
			FROM dog
			WHERE DogId = :lidentifiant ";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':lidentifiant', $id);
	
	if ($stmt->execute() === false)
		$return = "SQL ERROR";
	else 
		$return = $stmt->fetch();
	
	return $return;
}

function findColor($id){
	$pdo = initDB();
	$sql = "SELECT ColorName
			FROM color
			WHERE ColorId = :lidentifiant ";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':lidentifiant', $id);
	
	if ($stmt->execute() === false)
		$return = "SQL ERROR";
		else
			$return = $stmt->fetch();
			
			return $return;
}

function findBreed($id){
	$pdo = initDB();
	$sql = "SELECT BreedName
			FROM breed
			WHERE BreedId = :lidentifiant ";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':lidentifiant', $id);
	
	if ($stmt->execute() === false)
		$return = "SQL ERROR";
		else
			$return = $stmt->fetch();
			
			return $return;
}