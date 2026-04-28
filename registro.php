<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <title>Registro - DM TRAINERS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
 
  <style>
    /* Estilos heredados del index.php para coherencia total */
    :root {
      --blue: #007AFF; --bg: #0C0F1A; --surface: #111827;
      --input-bg: #1A2035; --text: #F0F4FF; --text-sub: #6B7A99;
    }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: var(--bg);
      background-image: radial-gradient(ellipse 70% 55% at 50% -5%, rgba(0, 100, 255, 0.09) 0%, transparent 70%);
      min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 40px 20px;
    }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes borderGlow {
      0%, 100% { border-color: rgba(0,122,255,0.12); box-shadow: 0 24px 48px rgba(0,0,0,0.45); }
      50% { border-color: rgba(0,122,255,0.70); box-shadow: 0 0 20px rgba(0,122,255,0.25); }
    }
    .login-card {
      background: var(--surface); border: 1px solid rgba(0,122,255,0.12);
      border-radius: 26px; padding: 32px 28px; width: 100%; max-width: 390px;
      animation: borderGlow 4s ease-in-out infinite, fadeUp 0.45s 0.22s cubic-bezier(.22,.68,0,1.2) both;
    }
    .ios-input {
      width: 100%; background: var(--input-bg); border: 1px solid rgba(255,255,255,0.06);
      border-radius: 14px; padding: 14px 14px 14px 44px; color: var(--text); font-size: 16px;
      transition: all 0.18s;
    }
    .ios-input:focus { outline: none; border-color: var(--blue); background: #1E2A45; }
    .ios-btn {
      width: 100%; background: var(--blue); color: #fff; border-radius: 14px;
      padding: 16px; font-weight: 700; transition: all 0.15s;
    }
    .ios-btn:hover { background: #0066D6; transform: translateY(-1px); }
    .a1 { animation: fadeUp .45s .04s cubic-bezier(.22,.68,0,1.2) both; }
    .a2 { animation: fadeUp .45s .10s cubic-bezier(.22,.68,0,1.2) both; }
    .a3 { animation: fadeUp .45s .16s cubic-bezier(.22,.68,0,1.2) both; }
    .a4 { animation: fadeUp .45s .22s cubic-bezier(.22,.68,0,1.2) both; }
    .a5 { animation: fadeUp .45s .28s cubic-bezier(.22,.68,0,1.2) both; }
    .a6 { animation: fadeUp .45s .34s cubic-bezier(.22,.68,0,1.2) both; }
    .a7 { animation: fadeUp .45s .40s cubic-bezier(.22,.68,0,1.2) both; }
  </style>
</head>
<body>
  <main style="width:100%; max-width:390px;">
    <header style="text-align:center; margin-bottom:28px;">
      <div class="a1" style="display:inline-flex; align-items:center; justify-content:center; width:64px; height:64px; border-radius:18px; background:linear-gradient(145deg,#1A8FFF,#0055CC); margin-bottom:12px;">
        <svg width="30" height="30" viewBox="0 0 36 36" fill="none"><rect x="1" y="15.5" width="6" height="5" rx="2" fill="white" fill-opacity="0.6"/><rect x="2.5" y="12" width="3.5" height="12" rx="1.75" fill="white"/><rect x="29" y="15.5" width="6" height="5" rx="2" fill="white" fill-opacity="0.6"/><rect x="30" y="12" width="3.5" height="12" rx="1.75" fill="white"/><rect x="6" y="16.5" width="24" height="3" rx="1.5" fill="white"/></svg>
      </div>
      <h2 class="a2" style="font-size:24px; font-weight:800; color:var(--text);">Crea tu cuenta</h2>
      <p class="a3" style="color:var(--text-sub); font-size:14px;">Únete a la comunidad de atletas</p>
    </header>

    <div class="login-card">
      <form id="register-form" novalidate>
        <div class="a4" style="margin-bottom:12px; position:relative;">
          <span style="position:absolute; left:14px; top:16px;"><svg width="18" height="18" fill="none" stroke="#374166" stroke-width="2" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></span>
          <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required class="ios-input" />
        </div>

        <div class="a5" style="margin-bottom:12px; position:relative;">
          <span style="position:absolute; left:14px; top:16px;"><svg width="18" height="18" fill="none" stroke="#374166" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg></span>
          <input type="email" id="email" name="email" placeholder="Correo electrónico" required class="ios-input" />
        </div>

        <div class="a6" style="margin-bottom:20px; position:relative;">
          <span style="position:absolute; left:14px; top:16px;"><svg width="18" height="18" fill="none" stroke="#374166" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
          <input type="password" id="password" name="password" placeholder="Contraseña (mín. 6 caracteres)" required class="ios-input" />
        </div>

        <button type="submit" id="submit-btn" class="ios-btn a7">Crear cuenta gratuita</button>
      </form>
    </div>

    <p class="a7" style="text-align:center; color:var(--text-sub); font-size:14px; margin-top:24px;">
      ¿Ya tienes cuenta? <a href="index.php" style="color:var(--blue); font-weight:700;">Inicia sesión</a>
    </p>
  </main>

  <script src="script_register.js"></script>
</body>
</html>