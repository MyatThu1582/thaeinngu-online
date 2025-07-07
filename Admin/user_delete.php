<?php
    require 'config/config.php';
    $stmt = $pdo->prepare("DELETE FROM users WHERE id=".$_GET['id']);
    $stmt->execute();
    header('Location: user_page.php');
    // echo "<script>alert('Are you sure you want to delete this item')</script>";
 ?>
