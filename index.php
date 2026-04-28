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
  <link href="estilos/index.css" rel="stylesheet" />
</head>

<body>
  <main class="contenedor-principal">
    <header class="cabecera">
      <div class="logo-contenedor">
        <svg width="34" height="34" viewBox="0 0 36 36" fill="none">
          <rect x="1" y="15.5" width="6" height="5" rx="2" fill="rgba(255,255,255,.55)"/>
          <rect x="2.5" y="12" width="3.5" height="12" rx="1.75" fill="white"/>
          <rect x="29" y="15.5" width="6" height="5" rx="2" fill="rgba(255,255,255,.55)"/>
          <rect x="30" y="12" width="3.5" height="12" rx="1.75" fill="white"/>
          <rect x="6" y="16.5" width="24" height="3" rx="1.5" fill="rgba(255,255,255,.80)"/>
        </svg>
      </div>
      <div class="nombre-marca">DM TRAINERS</div>
      <div class="eslogan-marca">Tu entrenamiento, tu progreso</div>
    </header>

    <div class="tarjeta-login">
      <div class="tarjeta-encabezado">
        <h1 class="tarjeta-titulo">Iniciar sesión</h1>
        <p class="tarjeta-subtitulo">Entra para ver tu progreso</p>
      </div>

      <form id="formulario-login" novalidate>
        <div class="grupo-entrada">
          <div class="campo-contenedor">
            <span class="icono-entrada">
              <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="2" y="4" width="20" height="16" rx="2.5"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </span>
            <input type="email" id="email" name="email" placeholder="Correo electrónico" required class="entrada-ios" />
          </div>
          <p id="error-email" class="texto-error"></p>
        </div>

        <div class="grupo-entrada">
          <div class="campo-contenedor">
            <span class="icono-entrada">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="11" width="18" height="11" rx="2.5"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            </span>
            <input type="password" id="password" name="password" placeholder="Contraseña" required class="entrada-ios entrada-password" />
            <button type="button" id="alternar-pass" class="boton-ver">
              <svg id="ojo-abierto" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
              <svg id="ojo-cerrado" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="icono-oculto"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
            </button>
          </div>
          <p id="error-password" class="texto-error"></p>
        </div>

        <div class="contenedor-envio">
          <button type="submit" id="boton-enviar" class="boton-ios">
            <span id="cargador-btn" class="cargador oculto"></span>
            <span id="texto-btn">Continuar</span>
          </button>
        </div>
      </form>

      <div class="divisor">
        <div class="linea-separadora"></div>
        <span class="texto-separador">O</span>
        <div class="linea-separadora"></div>
      </div>

      <div class="redes-sociales">
        <button type="button" class="boton-social">
          <img src="https://www.gstatic.com/images/branding/product/1x/googleg_48dp.png" alt="Google"> Google
        </button>
        <button type="button" class="boton-social">
          <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple" class="icono-apple"> Apple
        </button>
      </div>
    </div>
  </main>

  <div id="notificacion" class="notificacion-oculta">
    <span id="icono-notificacion"></span><span id="mensaje-notificacion"></span>
  </div>

  <script src="script.js"></script>
</body>
</html>