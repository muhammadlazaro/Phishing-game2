<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Post</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h1>Daftar Post</h1>
    <a href="<?= base_url('posts/create') ?>">Buat Post Baru</a>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= $post['id'] ?></td>
                        <!-- Menampilkan title tanpa escaping → XSS -->
                        <td><?= $post['title'] ?></td>
                        <td>
                            <a href="<?= base_url('posts/view/'.$post['id']) ?>">Lihat</a> |
                            <a href="<?= base_url('posts/edit/'.$post['id']) ?>">Edit</a> |
                            <a href="<?= base_url('posts/delete/'.$post['id']) ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Belum ada post</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
