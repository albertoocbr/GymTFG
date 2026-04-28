<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM Trainers - Entrenamientos</title>
    <link href="estilos/entrenamiento.css" rel="stylesheet">
</head>
<body>

    <header class="cabecera-principal">
        <div class="contenedor-cabecera">
            <div class="seccion-logo">
                <div class="icono-logo">
                    <svg width="24" height="24" viewBox="0 0 36 36" fill="none">
                        <rect x="1" y="15.5" width="6" height="5" rx="2" fill="rgba(255,255,255,.55)"/>
                        <rect x="2.5" y="12" width="3.5" height="12" rx="1.75" fill="white"/>
                        <rect x="29" y="15.5" width="6" height="5" rx="2" fill="rgba(255,255,255,.55)"/>
                        <rect x="30" y="12" width="3.5" height="12" rx="1.75" fill="white"/>
                        <rect x="6" y="16.5" width="24" height="3" rx="1.5" fill="rgba(255,255,255,.80)"/>
                    </svg>
                </div>
                <span class="texto-logo">DM TRAINERS</span>
            </div>

            <nav class="menu-navegacion">
                <a href="home.php" class="enlace-nav">INICIO</a>
                <a href="entrenamiento.php" class="enlace-nav">ENTRENAMIENTOS</a>
                <a href="index.php" class="enlace-nav activo">INICIAR SESION</a>
                <a href="registro.php" class="boton-registro">REGISTRARSE</a>
            </nav>
        </div>
    </header>

    <h1 style="text-align: center; margin-bottom: 40px;">Explora <span style="color: var(--accent-blue);">Entrenamientos</span></h1>

    <div class="cuadricula-entrenamientos">
        
        <div class="tarjeta-entrenamiento">
            <div class="contenedor-imagen">
                <span class="etiqueta-nivel">Avanzado</span>
                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=500" alt="Full Body">
            </div>
            <div class="contenido-tarjeta">
                <h3 class="titulo-entrenamiento">Rutina Push/Pull/Legs</h3>
                <p class="datos-entrenamiento">Fuerza • Hipertrofia • 60 min</p>
                
                <div class="contador-ejercicios">
                8 Ejercicios incluidos
                </div>

                <button class="boton-ver">+ VER ENTRENAMIENTO</button>
            </div>
        </div>

        <div class="tarjeta-entrenamiento">
            <div class="contenedor-imagen">
                <span class="etiqueta-nivel" style="background-color: #ffc107; color: black;">Intermedio</span>
                <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=500" alt="Torso">
            </div>
            <div class="contenido-tarjeta">
                <h3 class="titulo-entrenamiento">Torso Explosivo</h3>
                <p class="datos-entrenamiento">Potencia • Barra • 45 min</p>
                
                <div class="contador-ejercicios">
                6 Ejercicios incluidos
                </div>

                <button class="boton-ver">+ VER ENTRENAMIENTO</button>
            </div>
        </div>

    </div>

</body>
</html>