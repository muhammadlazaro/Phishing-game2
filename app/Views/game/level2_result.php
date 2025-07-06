<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Result Level 2</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    .result-box {
      /* reuse styles */
    }
  </style>
</head>
<body>
  <div class="result-box">
    <h3>Level 2 Completed</h3>
    <p>
      Your Score:
      <strong><?= esc($score) ?>/5</strong>
    </p>
    <a
      href="<?= site_url('game/ending') ?>"
      class="btn btn-next"
    >
      View Final Results
    </a>
  </div>
</body>
</html>
