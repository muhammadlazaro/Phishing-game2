<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SSDL Quiz</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
  <style>
    body { background: #111; color: #0ff; font-family: 'Orbitron', sans-serif; }
    .login-card { max-width: 380px; margin: 80px auto; padding: 30px; background: rgba(0,0,0,0.6); border: 1px solid #0ff; border-radius:12px; animation: glow 2s infinite alternate; }
    @keyframes glow { from { box-shadow: 0 0 10px #0ff; } to { box-shadow: 0 0 30px #0ff; } }
    .form-select, .form-control { background: transparent; border:1px solid #0ff; color:#fff; }
    .btn-neon { background:transparent; border:1px solid #0ff; color:#0ff; transition:0.2s; }
    .btn-neon:hover { background:#0ff; color:#111; box-shadow: 0 0 20px #0ff; }
    .neon-title { text-align:center; margin-bottom:20px; text-shadow:0 0 8px #0ff; }
  </style>
</head>
<body>
  <div class="login-card">
    <h2 class="neon-title">SSDL Quiz Login</h2>
    <form action="<?= site_url('loginPost') ?>" method="post">
      <?= csrf_field() ?>
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="mb-3">
        <select name="role" class="form-select" required>
          <option value="user" selected>Player</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button type="submit" class="btn btn-neon w-100">Login</button>
    </form>
  </div>
</body>
</html>