<?php 
require_once 'database/pdo.php';

$stmt = $pdo->prepare('SELECT * FROM comments ORDER BY `created_at` ASC');
$stmt->execute();
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);