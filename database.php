<?php
try{
$database = new PDO("mysql:host=localhost;dbname=PHP project", "root", "root");
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}