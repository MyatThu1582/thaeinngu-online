<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $content = $_POST["content"];
        $author_id = $_POST["author_id"];
        $forums_id = $_POST["forums_id"];
        $parent_id = $_POST["parent_id"] ?: null;

        $stmt = $pdo->prepare("INSERT INTO comments (content, author_id, forums_id, parent_id) VALUES (:content,:author_id,:forums_id,:parent_id)");
        $stmt->execute([$content, $author_id, $forums_id, $parent_id]);
        header("Location: test.php"); // prevent form resubmit
        exit;
    }

    function getReplies($pdo, $parent_id, $margin = 20) {
          $stmt = $pdo->prepare("SELECT * FROM comments WHERE parent_id = ?");
        $stmt->execute([$parent_id]);
        $replies = $stmt->fetchAll();

        foreach ($replies as $reply) {
            echo "<div style='margin-left: {$margin}px; border-left: 1px solid #ccc; padding-left: 10px; margin-top: 5px'>";
            echo "<strong>User {$reply['author_id']}:</strong> {$reply['content']} <small>({$reply['created_at']})</small>";
            echo " <a href='?reply_to={$reply['id']}'>Reply</a>";
            echo "</div>";

            // Recursively show sub-replies
            getReplies($pdo, $reply['id'], $margin + 20);
        }
    }

    $comments = $pdo->query("SELECT * FROM comments WHERE parent_id IS NULL ORDER BY created_at DESC")->fetchAll();
    $reply_to = $_GET['reply_to'] ?? null;
    ?>

    <h2>Comment Section</h2>

    <form method="post">
        <textarea name="content" required placeholder="Write a comment..."></textarea><br>
        <input type="hidden" name="author_id" value="1">
        <input type="hidden" name="forums_id" value="5">
        <input type="hidden" name="parent_id" value="<?= htmlspecialchars($reply_to) ?>">
        <button type="submit"><?= $reply_to ? 'Reply' : 'Post Comment' ?></button>
    </form>

    <hr>

    <?php foreach ($comments as $comment): ?>
        <div style="margin-bottom: 10px;">
            <strong>User <?= $comment['author_id'] ?>:</strong> <?= $comment['content'] ?>
            <small>(<?= $comment['created_at'] ?>)</small>
            <a href="?reply_to=<?= $comment['id'] ?>">Reply</a>
        </div>

        <?php getReplies($pdo, $comment['id']); ?>
    <?php endforeach; ?>


  </body>
</html>
