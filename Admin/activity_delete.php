<?php
    require 'config/config.php';
    $stmt = $pdo->prepare("DELETE FROM activity WHERE id=".$_GET['id']);
    $stmt->execute();
    header('Location: activity_page.php');
    // echo "<script>alert('Are you sure you want to delete this item')</script>";
 ?>
