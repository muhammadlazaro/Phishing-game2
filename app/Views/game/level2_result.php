<!DOCTYPE html>
<html>
<head>
    <title>Hasil Level 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-info">
        <h4>Hasil Level 2:</h4>
        <p>Skor Anda: <?= $score ?>/5</p>
    </div>
    <a href="<?= site_url('game/ending') ?>" class="btn btn-success">Lihat Hasil Akhir</a>
</div>
</body>
</html>
