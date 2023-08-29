<?php
$dsn = "mysql:host=localhost;port=3306;dbname=db2;charset=utf8";

$options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      
    ];

$pdo = new PDO($dsn, 'root', 'root', $options);
?>