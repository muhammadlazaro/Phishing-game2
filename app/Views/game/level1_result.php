<!DOCTYPE html>
<html>
<head>
    <title>Hasil Level 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-success">
        <h4>Hasil Level 1:</h4>
        <p>Skor Anda: <?= $score ?>/5</p>
    </div>
    <a href="<?= site_url('game/level2') ?>" class="btn btn-success">Lanjut ke Level 2</a>
</div>
</body>
</html>
