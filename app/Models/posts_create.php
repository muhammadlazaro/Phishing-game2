<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buat Post Baru</title>
</head>
<body>
    <h1>Buat Post Baru</h1>
    <form action="<?= base_url('posts/create') ?>" method="post">
        <!-- CSRF protection sudah dimatikan di Filters.php, jadi tidak ada hidden field token -->
        <div>
            <label for="title">Judul:</label><br>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Konten:</label><br>
            <textarea name="content" id="content" rows="5" required></textarea>
        </div>
        <button type="submit">Simpan</button>
        <a href="<?= base_url('posts') ?>">Batal</a>
    </form>
</body>
</html>
