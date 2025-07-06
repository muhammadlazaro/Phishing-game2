<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Result Level 1</title>
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
    .result-box {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background: rgba(0, 0, 0, 0.6);
      border: 1px solid #0ff;
      border-radius: 8px;
      text-align: center;
      animation: zoomIn 0.5s ease-out;
    }
    @keyframes zoomIn {
      from {
        transform: scale(0.8);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }
    .btn-next {
      background: #0ff;
      color: #000;
      font-weight: bold;
      transition: box-shadow 0.3s;
      margin-top: 20px;
    }
    .btn-next:hover {
      box-shadow: 0 0 15px #0ff;
    }
  </style>
</head>
<body>
  <div class="result-box">
    <h3>Level 1 Completed</h3>
    <p>
      Your Score:
      <strong><?= esc($score) ?>/5</strong>
    </p>
    <a
      href="<?= site_url('game/level2') ?>"
      class="btn btn-next"
    >
      Proceed to Level 2
    </a>
  </div>
</body>
</html>
