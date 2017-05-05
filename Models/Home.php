<?php
 include_once 'database.php';
 
 function news (){
 	$pdo = initDB();
 	$sql = "SELECT DateOfPub, Headline, Picture, BriefText
			FROM news
			ORDER BY DateOfPub DESC";
 	$stmt = $pdo->prepare ($sql);
 	
 	if ($stmt->execute() === false)
 		$return = "ERROR IN YOUR SQL EXECUTION";
 	else 
 		$return = $stmt->fetchAll();
 	
 	return $return;
 }