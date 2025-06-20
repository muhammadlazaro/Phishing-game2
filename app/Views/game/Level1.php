<!DOCTYPE html>
<html>
<head>
    <title>Level 1 - S-SDLC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Level 1: Secure Software Development Lifecycle (S-SDLC)</h2>
    <form method="post" action="<?= site_url('game/level1/submit') ?>">
        <?= csrf_field() ?>
        <?php foreach ($questions as $index => $q): ?>
            <div class="mb-4 p-3 border rounded">
                <p><strong><?= $index + 1 ?>. <?= $q['question'] ?></strong></p>
                <div>
                    <input type="radio" name="answers[<?= $q['id'] ?>]" value="A" required> A. <?= $q['option_a'] ?><br>
                    <input type="radio" name="answers[<?= $q['id'] ?>]" value="B"> B. <?= $q['option_b'] ?><br>
                    <input type="radio" name="answers[<?= $q['id'] ?>]" value="C"> C. <?= $q['option_c'] ?><br>
                    <input type="radio" name="answers[<?= $q['id'] ?>]" value="D"> D. <?= $q['option_d'] ?><br>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Submit Jawaban</button>
    </form>
</div>
</body>
</html>
