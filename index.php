<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <title>DM TRAINERS</title>
 
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
 
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
          keyframes: {
            fadeUp: {
              '0%':   { opacity: '0', transform: 'translateY(20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' }
            },
            shake: {
              '0%,100%': { transform: 'translateX(0)' },
              '20%':     { transform: 'translateX(-7px)' },
              '40%':     { transform: 'translateX(7px)' },
              '60%':     { transform: 'translateX(-4px)' },
              '80%':     { transform: 'translateX(4px)' },
            },
          },
          animation: {
            fadeUp: 'fadeUp 0.45s cubic-bezier(.22,.68,0,1.2) both',
            shake:  'shake 0.38s ease-in-out',
          }
        }
      }
    }
  </script>
 
  <style>
    *, *::before, *::after { box-sizing: border-box; -webkit-tap-highlight-color: transparent; }
    html, body { height: 100%; margin: 0; }
 
    /* ── Variables de color ──────────────────────────────────── */
    :root {
      --blue:        #007AFF;
      --blue-dim:    rgba(0, 122, 255, 0.18);
      --blue-mid:    rgba(0, 122, 255, 0.55);
      --blue-bright: rgba(0, 122, 255, 0.90);
      --bg:          #0C0F1A;
      --surface:     #111827;   /* card base */
      --input-bg:    #1A2035;
      --input-focus: #1E2A45;
      --text:        #F0F4FF;
      --text-sub:    #6B7A99;
      --text-hint:   #374166;
      --border-idle: rgba(255,255,255,0.06);
    }
 
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: var(--bg);
      /* Gradiente radial sutil — 1 sola capa, sin coste */
      background-image: radial-gradient(
        ellipse 70% 55% at 50% -5%,
        rgba(0, 100, 255, 0.09) 0%,
        transparent 70%
      );
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
    }
 
    /* ── Borde animado: pure CSS, sin canvas, sin JS ─────────── */
    /*
       Técnica ligera: un único @keyframes que cicla
       border-color + box-shadow.
       Sin pseudo-elementos, sin SVG, sin gradiente cónico.
       Solo 2 propiedades animadas → mínimo GPU.
    */
    @keyframes borderGlow {
      0%   { border-color: rgba(0,122,255,0.12);
             box-shadow: 0 0 0   0   rgba(0,122,255,0),
                         0 24px 48px rgba(0,0,0,0.45); }
      40%  { border-color: rgba(0,122,255,0.70);
             box-shadow: 0 0 18px 3px rgba(0,122,255,0.30),
                         0 24px 48px rgba(0,0,0,0.45); }
      60%  { border-color: rgba(0,160,255,0.85);
             box-shadow: 0 0 28px 6px rgba(0,140,255,0.22),
                         0 24px 48px rgba(0,0,0,0.45); }
      100% { border-color: rgba(0,122,255,0.12);
             box-shadow: 0 0 0   0   rgba(0,122,255,0),
                         0 24px 48px rgba(0,0,0,0.45); }
    }
 
    .login-card {
      background: var(--surface);
      border: 1px solid rgba(0,122,255,0.12);
      border-radius: 26px;
      padding: 32px 28px 28px;
      width: 100%;
      max-width: 390px;
      /* Animación: 4s, suave, infinita, will-change solo lo necesario */
      animation: borderGlow 4s ease-in-out infinite;
      will-change: border-color, box-shadow;
    }
 
    /* ── Inputs estilo iOS dark ──────────────────────────────── */
    .ios-input {
      width: 100%;
      background: var(--input-bg);
      border: 1px solid var(--border-idle);
      border-radius: 14px;
      padding: 14px 14px 14px 44px;
      font-size: 16px;
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--text);
      transition: background 0.18s, border-color 0.18s, box-shadow 0.18s;
      -webkit-appearance: none;
    }
    .ios-input::placeholder { color: var(--text-hint); }
    .ios-input:focus {
      outline: none;
      background: var(--input-focus);
      border-color: rgba(0,122,255,0.55);
      box-shadow: 0 0 0 3px rgba(0,122,255,0.15);
    }
    .ios-input.error {
      border-color: rgba(255,59,48,0.60);
      box-shadow: 0 0 0 3px rgba(255,59,48,0.12);
    }
 
    /* ── Botón principal ─────────────────────────────────────── */
    .ios-btn {
      width: 100%;
      background: var(--blue);
      color: #fff;
      border: none;
      border-radius: 14px;
      padding: 16px 24px;
      font-size: 16px;
      font-weight: 700;
      font-family: 'Plus Jakarta Sans', sans-serif;
      cursor: pointer;
      min-height: 52px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 9px;
      transition: transform 0.12s, box-shadow 0.12s, background 0.15s, opacity 0.15s;
    }
    .ios-btn:hover:not(:disabled) {
      background: #0066D6;
      box-shadow: 0 6px 22px rgba(0,122,255,0.40);
      transform: translateY(-1px);
    }
    .ios-btn:active:not(:disabled) { transform: scale(0.98); }
    .ios-btn:disabled { opacity: 0.6; cursor: not-allowed; }
    .ios-btn.success-state { background: #34C759 !important; box-shadow: 0 6px 20px rgba(52,199,89,0.35) !important; }
 
    /* ── Botones sociales ────────────────────────────────────── */
    .social-btn {
      flex: 1;
      display: flex; align-items: center; justify-content: center; gap: 8px;
      background: var(--input-bg);
      border: 1px solid var(--border-idle);
      border-radius: 13px;
      padding: 13px 8px;
      font-size: 13.5px;
      font-weight: 600;
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--text);
      cursor: pointer;
      min-height: 48px;
      transition: background 0.15s, border-color 0.15s;
    }
    .social-btn:hover { background: var(--input-focus); border-color: rgba(255,255,255,0.12); }
 
    /* ── Separador ───────────────────────────────────────────── */
    .sep { flex: 1; height: 1px; background: rgba(255,255,255,0.07); }
 
    /* ── Spinner (CSS puro) ──────────────────────────────────── */
    .spinner {
      width: 18px; height: 18px;
      border: 2.5px solid rgba(255,255,255,0.3);
      border-top-color: #fff;
      border-radius: 50%;
      animation: spin 0.65s linear infinite;
    }
    @keyframes spin { to { transform: rotate(360deg); } }
 
    /* ── Toast ───────────────────────────────────────────────── */
    #toast {
      position: fixed;
      top: 48px; left: 50%;
      transform: translateX(-50%);
      z-index: 100;
      padding: 12px 18px;
      border-radius: 14px;
      font-size: 14px; font-weight: 600;
      display: flex; align-items: center; gap: 9px;
      white-space: nowrap;
      box-shadow: 0 8px 28px rgba(0,0,0,0.4);
    }
    #toast.hidden { display: none; }
    #toast.toast-error   { background: rgba(255,59,48,0.95);  color: #fff; }
    #toast.toast-success { background: rgba(52,199,89,0.95);  color: #fff; }
    @keyframes slideDown {
      from { opacity: 0; transform: translateX(-50%) translateY(-10px); }
      to   { opacity: 1; transform: translateX(-50%) translateY(0); }
    }
    #toast.show { animation: slideDown 0.25s ease both; }
 
    /* ── Animaciones de entrada ──────────────────────────────── */
    .a1 { animation: fadeUp .45s .04s cubic-bezier(.22,.68,0,1.2) both; }
    .a2 { animation: fadeUp .45s .10s cubic-bezier(.22,.68,0,1.2) both; }
    .a3 { animation: fadeUp .45s .16s cubic-bezier(.22,.68,0,1.2) both; }
    .a4 { animation: fadeUp .45s .22s cubic-bezier(.22,.68,0,1.2) both; }
    .a5 { animation: fadeUp .45s .28s cubic-bezier(.22,.68,0,1.2) both; }
    .a6 { animation: fadeUp .45s .34s cubic-bezier(.22,.68,0,1.2) both; }
    .a7 { animation: fadeUp .45s .40s cubic-bezier(.22,.68,0,1.2) both; }
    .a8 { animation: fadeUp .45s .46s cubic-bezier(.22,.68,0,1.2) both; }
 
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
 
<body>
 
  <main style="width:100%;max-width:390px;position:relative;z-index:1;">
 
    <!-- ── Logo ──────────────────────────────────────────────── -->
    <header style="text-align:center;margin-bottom:28px;">
      <div class="a1" style="display:inline-flex;align-items:center;justify-content:center;
           width:68px;height:68px;border-radius:20px;margin-bottom:14px;
           background:linear-gradient(145deg,#1A8FFF,#0055CC);
           box-shadow:0 6px 24px rgba(0,122,255,0.40);"
           role="img" aria-label="Logo DM TRAINERS">
        <svg width="34" height="34" viewBox="0 0 36 36" fill="none" aria-hidden="true">
          <rect x="1"   y="15.5" width="6"  height="5"  rx="2"    fill="rgba(255,255,255,.55)"/>
          <rect x="2.5" y="12"   width="3.5" height="12" rx="1.75" fill="white"/>
          <rect x="29"  y="15.5" width="6"  height="5"  rx="2"    fill="rgba(255,255,255,.55)"/>
          <rect x="30"  y="12"   width="3.5" height="12" rx="1.75" fill="white"/>
          <rect x="6"   y="16.5" width="24" height="3"  rx="1.5"  fill="rgba(255,255,255,.80)"/>
        </svg>
      </div>
      <div class="a2" style="font-size:28px;font-weight:800;color:#F0F4FF;letter-spacing:-.4px;line-height:1;">
        DM TRAINERS
      </div>
      <div class="a3" style="font-size:14px;color:#6B7A99;font-weight:500;margin-top:5px;">
        Tu entrenamiento, tu progreso
      </div>
    </header>
 
    <!-- ── Card con borde animado ────────────────────────────── -->
    <div class="login-card a4">
 
      <div style="margin-bottom:22px;">
        <h1 style="font-size:20px;font-weight:700;color:#F0F4FF;margin:0 0 4px;">Iniciar sesión</h1>
        <p  style="font-size:13.5px;color:#6B7A99;margin:0;">Entra para ver tu progreso</p>
      </div>
 
      <form id="login-form" novalidate aria-label="Formulario de inicio de sesión">
 
        <!-- Email -->
        <div style="margin-bottom:10px;" class="a5">
          <div style="position:relative;">
            <span style="position:absolute;left:13px;top:50%;transform:translateY(-50%);pointer-events:none;" aria-hidden="true">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#374166" stroke-width="2" stroke-linecap="round">
                <rect x="2" y="4" width="20" height="16" rx="2.5"/>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
              </svg>
            </span>
            <input type="email" id="email" name="email"
                   autocomplete="email" placeholder="Correo electrónico"
                   required aria-required="true" aria-describedby="email-error"
                   class="ios-input" />
          </div>
          <p id="email-error" role="alert" aria-live="polite"
             style="display:none;color:#FF3B30;font-size:12px;margin:5px 0 0 4px;font-weight:500;"></p>
        </div>
 
        <!-- Contraseña -->
        <div style="margin-bottom:6px;" class="a6">
          <div style="position:relative;">
            <span style="position:absolute;left:13px;top:50%;transform:translateY(-50%);pointer-events:none;" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#374166" stroke-width="2" stroke-linecap="round">
                <rect x="3" y="11" width="18" height="11" rx="2.5"/>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
              </svg>
            </span>
            <input type="password" id="password" name="password"
                   autocomplete="current-password" placeholder="Contraseña"
                   required aria-required="true" aria-describedby="password-error"
                   class="ios-input" style="padding-right:44px;" />
            <button type="button" id="toggle-pass"
                    aria-label="Mostrar u ocultar contraseña"
                    style="position:absolute;right:12px;top:50%;transform:translateY(-50%);
                           background:none;border:none;cursor:pointer;padding:4px;border-radius:8px;
                           transition:opacity .15s;">
              <svg id="eye-open"   width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#374166" stroke-width="2" stroke-linecap="round">
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>
              </svg>
              <svg id="eye-closed" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#374166" stroke-width="2" stroke-linecap="round" style="display:none;">
                <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/>
                <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/>
                <line x1="1" y1="1" x2="23" y2="23"/>
              </svg>
            </button>
          </div>
          <p id="password-error" role="alert" aria-live="polite"
             style="display:none;color:#FF3B30;font-size:12px;margin:5px 0 0 4px;font-weight:500;"></p>
 
          <!-- ¿Olvidaste? -->
          <div style="text-align:right;margin-top:8px;">
            <a href="recover.php"
               style="color:#007AFF;font-size:13px;font-weight:600;text-decoration:none;">
              ¿Olvidaste la contraseña?
            </a>
          </div>
        </div>
 
        <!-- Botón submit -->
        <div style="margin-top:20px;" class="a7">
          <button type="submit" id="submit-btn" class="ios-btn">
            <span id="btn-spinner" class="spinner" style="display:none;" aria-hidden="true"></span>
            <span id="btn-text">Continuar</span>
          </button>
        </div>
      </form>
 
      <!-- Separador -->
      <div style="display:flex;align-items:center;gap:12px;margin:20px 0;" class="a7">
        <div class="sep"></div>
        <span style="color:#374166;font-size:12px;font-weight:600;letter-spacing:.04em;">O</span>
        <div class="sep"></div>
      </div>
 
      <!-- Sociales -->
      <div style="display:flex;gap:10px;" class="a8">
        <button type="button" aria-label="Continuar con Google" class="social-btn">
          <svg width="17" height="17" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
          </svg>
          Google
        </button>
        <button type="button" aria-label="Continuar con Apple" class="social-btn">
          <svg width="13" height="16" viewBox="0 0 814 1000" fill="#F0F4FF" aria-hidden="true">
            <path d="M788.1 340.9c-5.8 4.5-108.2 62.2-108.2 190.5 0 148.4 130.3 200.9 134.2 202.2-.6 3.2-20.7 71.9-68.7 141.9-42.8 61.6-87.5 123.1-155.5 123.1s-85.5-39.5-164-39.5c-76 0-103.7 40.8-165.9 40.8s-105-37.5-155.5-127.4C46.7 790.7 0 663 0 541.8c0-207.5 135.4-317.3 269-317.3 70.1 0 128.4 46.4 172.5 46.4 42.1 0 108.6-49 192.2-49 31 0 133.3 2.6 198.3 99zm-234-181.5c31.1-36.9 53.1-88.1 53.1-139.3 0-7.1-.6-14.3-1.9-20.1-50.6 1.9-110.8 33.7-147.1 75.8-28.5 32.4-55.1 83.6-55.1 135.5 0 7.8 1.3 15.6 1.9 18.1 3.2.6 8.4 1.3 13.6 1.3 45.4 0 102.5-30.4 135.5-71.3z"/>
          </svg>
          Apple
        </button>
      </div>
    </div>
 
    <!-- Registro -->
    <p style="text-align:center;color:#6B7A99;font-size:14px;margin-top:20px;" class="a8">
      ¿No tienes cuenta?
      <a href="registro.php"
         style="color:#007AFF;font-weight:600;text-decoration:none;margin-left:3px;">
        Regístrate gratis
      </a>
    </p>
 
  </main>
 
  <!-- Toast -->
  <div id="toast" class="hidden" role="status" aria-live="polite" aria-atomic="true">
    <span id="toast-icon" aria-hidden="true"></span>
    <span id="toast-msg"></span>
  </div>
 
  <script src="script.js"></script>
</body>
</html>