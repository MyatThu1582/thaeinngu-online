<?php
require '../config/config.php';
$stmt = $pdo->prepare("DELETE FROM comments WHERE id=".$_GET['id']);
$stmt->execute();
header('Location: forums_details.php');
 ?>
