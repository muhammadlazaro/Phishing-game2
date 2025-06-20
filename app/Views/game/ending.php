<!DOCTYPE html>
<html>
<head>
    <title>Hasil Akhir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 text-center">
    <h2 class="mb-4">🎉 Selamat, Anda telah menyelesaikan Kuis S-SDLC!</h2>
    <div class="alert alert-success">
        <p><strong>Skor Level 1:</strong> <?= $score1 ?>/5</p>
        <p><strong>Skor Level 2:</strong> <?= $score2 ?>/5</p>
        <hr>
        <h4>Total Skor: <?= $total ?>/10</h4>
    </div>
    <a href="<?= site_url('/logout') ?>" class="btn btn-danger mt-3">Logout</a>
</div>
</body>
</html>
