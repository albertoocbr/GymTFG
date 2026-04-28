<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <title>Registro - DM TRAINERS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="estilos/registro.css">
</head>
<body>

  <main class="contenedor-principal">
    <header class="cabecera">
      <div class="logo a1">
        <svg width="30" height="30" viewBox="0 0 36 36" fill="none">
          <rect x="1" y="15.5" width="6" height="5" rx="2" fill="white" fill-opacity="0.6"/>
          <rect x="2.5" y="12" width="3.5" height="12" rx="1.75" fill="white"/>
          <rect x="29" y="15.5" width="6" height="5" rx="2" fill="white" fill-opacity="0.6"/>
          <rect x="30" y="12" width="3.5" height="12" rx="1.75" fill="white"/>
          <rect x="6" y="16.5" width="24" height="3" rx="1.5" fill="white"/>
        </svg>
      </div>
      <h2 class="titulo a2">Crea tu cuenta</h2>
      <p class="subtitulo a3">Únete a la comunidad de atletas</p>
    </header>

    <div class="tarjeta-login">
      <form id="formulario-registro">
        
        <div class="grupo-entrada a4">
          <span class="icono">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </span>
          <input type="text" name="nombre" placeholder="Nombre completo" class="entrada-ios" required>
        </div>

        <div class="grupo-entrada a5">
          <span class="icono">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          </span>
          <input type="email" name="email" placeholder="Correo electrónico" class="entrada-ios" required>
        </div>

        <div class="grupo-entrada a6">
          <span class="icono">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </span>
          <input type="password" name="password" placeholder="Contraseña (mín. 6)" class="entrada-ios" required>
        </div>

        <button type="submit" class="boton-ios a7">Crear cuenta gratuita</button>
      </form>
    </div>

    <p class="texto-pie a7">
      ¿Ya tienes cuenta? <a href="index.php" class="enlace-azul">Inicia sesión</a>
    </p>
  </main>

</body>
</html>