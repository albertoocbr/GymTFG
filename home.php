<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM TRAINERS - Forja tu mejor versión</title>
    <link rel="stylesheet" href="estilos/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<header class="barra-navegacion">
    <div class="seccionHeader">
        <div class="logo">
            <div class="icono">
                <svg width="24" height="24" viewBox="0 0 36 36" fill="none">
                    <rect x="1" y="15.5" width="6" height="5" rx="2" fill="rgba(255,255,255,.55)"/>
                    <rect x="2.5" y="12" width="3.5" height="12" rx="1.75" fill="white"/>
                    <rect x="29" y="15.5" width="6" height="5" rx="2" fill="rgba(255,255,255,.55)"/>
                    <rect x="30" y="12" width="3.5" height="12" rx="1.75" fill="white"/>
                    <rect x="6" y="16.5" width="24" height="3" rx="1.5" fill="rgba(255,255,255,.80)"/>
                </svg>
            </div>
            <span class="textologo">DM TRAINERS</span>
        </div>

        <nav class="enlaces">
            <div class="dropdown-contenedor">
                <button class="enlacelogin btn-dropdown">
                    SERVICIOS <span class="flecha">▼</span>
                </button>
                <div class="contenido-desplegable">
                    <a href="entrenamiento.php">Entrenamiento</a>
                    <a href="nutricion.php">Nutrición</a>
                    <a href="planes.php">Planes</a>
                </div>
            </div>
            
            <a href="index.php" class="enlacelogin">INICIAR SESIÓN</a>
            <a href="registro.php" class="btn-nav">REGISTRARSE</a>
        </nav>
    </div>
</header>

<main class="seccionbody">
    <div class="contenidobody">
        <div class="boton1 a3">Entrenamiento disponible</div>

        <h1 class="titulo1 a4">
            Forja tu mejor <span class="textocolor">versión.</span>
        </h1>

        <p class="descripciontexto a5">
            Déjate de excusas y ven a entrenar. Estamos aquí mismo, en La Villa de Don Fadrique, con todo lo que necesitas para ponerte en forma sin tener que irte más lejos. Pásate un día, conoce el sitio y tú decides.
        </p>

        <div class="acciones a6">
            <a href="registro.php" class="botones1">
                ÚNETE AHORA
                <svg class="iconoflecha" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M5 12h14m-7-7 7 7-7 7"/>
                </svg>
            </a>
            <a href="ejercicios.php" class="botones2">Explorar ejercicios</a>
        </div>

        <div class="estadisticasCont a7">
            <div class="estadisticasCard">
                <div class="estadisticasValue">2.4k+</div>
                <div class="estadisticaslabel">Atletas</div>
            </div>
            <div class="estadisticasCard">
                <div class="estadisticasValue">50+</div>
                <div class="estadisticaslabel">Clases</div>
            </div>
            <div class="estadisticasCard">
                <div class="estadisticasValue">4.9</div>
                <div class="estadisticaslabel">Valoración</div>
            </div>
        </div>
    </div>

    <div class="imagenwrapper a8">
        <div class="imagenglow"></div>
        <div class="contenedorImagen">
            <img src="imagenes/personaEntrenandoo.webp" alt="Atleta" class="main-image">
        </div>
    </div>
</main>

</body>
</html>