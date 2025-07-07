<?php
require '../config/config.php';
$stmt = $pdo->prepare("DELETE FROM forums WHERE id=".$_GET['id']);
$stmt->execute();
header('Location: forums.php');
 ?>
