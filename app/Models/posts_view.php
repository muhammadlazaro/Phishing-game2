<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Post</title>
</head>
<body>
    <h1>Detail Post</h1>
<?php if (isset($post) && $post): ?>
    <p><strong>ID:</strong> <?= esc($post['id']) ?></p>
    <p><strong>Judul:</strong> <?= esc($post['title']) ?></p>
    <p><strong>Konten:</strong><br><?= nl2br(esc($post['content'])) ?></p>
<?php else: ?>
    <p>Post tidak ditemukan.</p>
<?php endif; ?>
</body>
</html>
