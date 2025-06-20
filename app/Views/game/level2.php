<h2>Level 2: Advanced Secure Software Development Lifecycle</h2>
<form method="post" action="<?= site_url('game/level2/submit') ?>">
    <?= csrf_field() ?>
    <?php foreach ($questions as $index => $q): ?>
        <div class="mb-4 p-3 border rounded">
            <p><strong><?= $index + 1 ?>. <?= $q['question'] ?></strong></p>
            <input type="radio" name="answers[<?= $q['id'] ?>]" value="A" required> A. <?= $q['option_a'] ?><br>
            <input type="radio" name="answers[<?= $q['id'] ?>]" value="B"> B. <?= $q['option_b'] ?><br>
            <input type="radio" name="answers[<?= $q['id'] ?>]" value="C"> C. <?= $q['option_c'] ?><br>
            <input type="radio" name="answers[<?= $q['id'] ?>]" value="D"> D. <?= $q['option_d'] ?><br>
        </div>
    <?php endforeach; ?>
    <button type="submit" class="btn btn-primary">Submit Jawaban</button>
</form>
