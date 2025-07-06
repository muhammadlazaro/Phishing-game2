<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Level 1 - SSDL Quiz</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    body {
      background: #121212;
      color: #0ff;
      font-family: 'Orbitron', sans-serif;
    }
    .container {
      padding: 30px;
      animation: fadeIn 1s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }
    .question-box {
      background: rgba(0, 0, 0, 0.6);
      border: 1px solid #0ff;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      transition: box-shadow 0.3s ease;
    }
    .question-box:hover {
      box-shadow: 0 0 20px #0ff;
    }
    .form-check-input {
      background: transparent;
      border: 1px solid #0ff;
    }
    .btn-submit {
      background: #0ff;
      color: #000;
      font-weight: bold;
      transition: box-shadow 0.3s ease;
    }
    .btn-submit:hover {
      box-shadow: 0 0 15px #0ff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Level 1: Secure SDLC Basics</h2>

    <form
      method="post"
      action="<?= site_url('game/level1/submit') ?>"
    >
      <?= csrf_field() ?>

      <?php foreach ($questions as $i => $q): ?>
        <div class="question-box">
          <p><strong><?= $i + 1 ?>. <?= esc($q['question']) ?></strong></p>

          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="answers[<?= $q['id'] ?>]"
              value="A"
              required
            />
            <label class="form-check-label">
              A. <?= esc($q['option_a']) ?>
            </label>
          </div>

          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="answers[<?= $q['id'] ?>]"
              value="B"
            />
            <label class="form-check-label">
              B. <?= esc($q['option_b']) ?>
            </label>
          </div>

          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="answers[<?= $q['id'] ?>]"
              value="C"
            />
            <label class="form-check-label">
              C. <?= esc($q['option_c']) ?>
            </label>
          </div>

          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="answers[<?= $q['id'] ?>]"
              value="D"
            />
            <label class="form-check-label">
              D. <?= esc($q['option_d']) ?>
            </label>
          </div>
        </div>
      <?php endforeach; ?>

      <button type="submit" class="btn btn-submit">
        Submit Level 1
      </button>
    </form>
  </div>
</body>
</html>
