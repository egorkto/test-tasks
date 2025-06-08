<?php
require_once '../database/pdo.php';

//defend from script tags from input
$author_name = htmlspecialchars($_POST['author_name']);
$comment = htmlspecialchars($_POST['comment']); 

$stmt = $pdo->prepare('INSERT INTO comments (author_name, comment) VALUES (:author_name, :comment)');
$stmt->execute([
    ':author_name' => $author_name,
    ':comment' => $comment
]);
header("Location: /");
?>