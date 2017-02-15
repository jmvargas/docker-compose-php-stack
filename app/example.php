<?php

$dsn = "pgsql:host=db;port=5432;dbname=database;user=user;password=password";

 try {
 	$conn = new PDO($dsn);
} catch(PDOException $e) {
 	echo  $e->getMessage(); 
}

$sql = 'SELECT datname FROM pg_database';
foreach ($conn->query($sql) as $row) {
    print($row['datname'] . " ");
}