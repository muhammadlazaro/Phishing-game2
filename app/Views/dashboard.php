<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - SSDL Quiz</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #0a0a0a; color: #0ff; font-family: 'Orbitron', sans-serif; }
    .dash-container { padding: 40px; animation: fadein 1s ease; }
    @keyframes fadein { from { opacity: 0; } to { opacity: 1; } }
    .card { background: rgba(0,0,0,0.5); border:1px solid #0ff; border-radius:8px; }
    .btn-dash { background: #0ff; color:#000; font-weight:bold; transition:0.3s; }
    .btn-dash:hover { box-shadow:0 0 15px #0ff; }
  </style>
</head>
<body>
  <div class="container dash-container">
    <h1>Welcome, <?= esc(session('username')) ?>!</h1>
    <p>Select your action below:</p>
    <div class="row g-4 mt-3">
      <div class="col-md-4">
        <div class="card p-3 text-center">
          <h3>Start Level 1</h3>
          <p>Basics of Secure SDLC.</p>
          <a href="<?= site_url('game/level1') ?>" class="btn btn-dash">Begin</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-center">
          <h3>Start Level 2</h3>
          <p>Advanced techniques.</p>
          <a href="<?= site_url('game/level2') ?>" class="btn btn-dash">Begin</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 text-center">
          <h3>Logout</h3>
          <p>Exit the quiz.</p>
          <a href="<?= site_url('logout') ?>" class="btn btn-dash">Logout</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>