<?php
    require 'config/config.php';
    $stmt = $pdo->prepare("DELETE FROM forums WHERE id=".$_GET['id']);
    $stmt->execute();
    header('Location: forums_page.php');
    // echo "<script>alert('Are you sure you want to delete this item')</script>";
 ?>
