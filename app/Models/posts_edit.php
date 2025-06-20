<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="<?= base_url('posts/edit/'.$post['id']) ?>" method="post">
        <!-- CSRF off -->
        <div>
            <label for="title">Judul:</label><br>
            <!-- Menampilkan value tanpa escaping → XSS -->
            <input type="text" name="title" id="title" value="<?= $post['title'] ?>" required>
        </div>
        <div>
            <label for="content">Konten:</label><br>
            <!-- Menampilkan tanpa escaping → XSS -->
            <textarea name="content" id="content" rows="5" required><?= $post['content'] ?></textarea>
        </div>
        <button type="submit">Update</button>
        <a href="<?= base_url('posts') ?>">Batal</a>
    </form>
</body>
</html>
