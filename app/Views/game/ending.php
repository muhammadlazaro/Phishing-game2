<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Final Results</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    body {
      background: #040405;
      color: #0ff;
      font-family: 'Orbitron', sans-serif;
    }
    .final-box {
      max-width: 500px;
      margin: 100px auto;
      padding: 30px;
      background: rgba(0, 0, 0, 0.7);
      border: 2px solid #0ff;
      border-radius: 12px;
      text-align: center;
      animation: glow 1.5s infinite alternate;
    }
    @keyframes glow {
      from { box-shadow: 0 0 15px #0ff; }
      to   { box-shadow: 0 0 35px #0ff; }
    }
    .btn-end {
      background: #0ff;
      color: #000;
      font-weight: bold;
      transition: 0.3s;
      margin-top: 20px;
    }
    .btn-end:hover {
      box-shadow: 0 0 20px #0ff;
    }
  </style>
</head>
<body>
  <div class="final-box">
    <h2>🎉 Quiz Completed!</h2>

    <p>
      Level 1 Score:
      <strong><?= esc($score1) ?>/5</strong>
    </p>
    <p>
      Level 2 Score:
      <strong><?= esc($score2) ?>/5</strong>
    </p>
    <hr />
    <p>
      Total Score:
      <strong><?= esc($total) ?>/10</strong>
    </p>

    <a href="<?= site_url('logout') ?>" class="btn btn-end">
      Logout
    </a>
  </div>
</body>
</html>
