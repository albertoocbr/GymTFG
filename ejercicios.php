<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DM TRAINERS - Ejercicios</title>
    <link rel="stylesheet" href="estilos/ejercicios.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="fondo-oscuro">

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
                <a href="ejercicios.php" class="enlace-nav">ENTRENAMIENTOS</a>
                <a href="index.php" class="enlace-nav activo">INICIAR SESION</a>
                <a href="registro.php" class="boton-registro">REGISTRARSE</a>
            </nav>
        </div>
    </header>

    <main class="contenido-ejercicios">
        <div class="contenedor">
            <h1 class="titulo-pagina">Explora <span class="resaltado">Ejercicios.</span></h1>
            <p class="subtitulo-pagina">Selecciona los movimientos para construir tu rutina personalizada.</p>
            
            <div class="barra-filtros">
                <input type="text" class="entrada-busqueda" placeholder="Buscar ejercicio (ej. Press banca...)">
                <select class="selector-categoria">
                    <option>Todo el cuerpo</option>
                    <option>Pecho</option>
                    <option>Piernas</option>
                </select>
            </div>

            <div class="cuadricula-ejercicios">
                <div class="tarjeta-ejercicio">
                    <div class="imagen-tarjeta">
                        <img src="imagenes/pressbanca.webp" alt="Press">
                        <span class="etiqueta-dificultad intermedio">INTERMEDIO</span>
                    </div>
                    <div class="detalles-tarjeta">
                        <h3>Press de Banca</h3>
                        <p>Pecho • Fuerza • Barra</p>
                        <button class="boton-añadir">+ AÑADIR A MI LISTA</button>
                    </div>
                </div>

                <div class="tarjeta-ejercicio">
                    <div class="imagen-tarjeta">
                        <img src="imagenes/sentadillabarra.webp" alt="Sentadilla">
                        <span class="etiqueta-dificultad avanzado">AVANZADO</span>
                    </div>
                    <div class="detalles-tarjeta">
                        <h3>Sentadilla con Barra</h3>
                        <p>Piernas • Hipertrofia • Barra</p>
                        <button class="boton-añadir">+ AÑADIR A MI LISTA</button>
                    </div>
                </div>

                <div class="tarjeta-ejercicio">
    <div class="imagen-tarjeta">
        <img src="imagenes/pesomuerto.webp" alt="Peso Muerto">
        <span class="etiqueta-dificultad avanzado">AVANZADO</span>
    </div>
    <div class="detalles-tarjeta">
        <h3>Peso Muerto</h3>
        <p>Espalda • Fuerza • Barra</p>
        <button class="boton-añadir">+ AÑADIR A MI LISTA</button>
    </div>
</div>

<div class="tarjeta-ejercicio">
    <div class="imagen-tarjeta">
        <img src="imagenes/remobarra.webp" alt="Remo con Barra">
        <span class="etiqueta-dificultad intermedio">INTERMEDIO</span>
    </div>
    <div class="detalles-tarjeta">
        <h3>Remo con Barra</h3>
        <p>Espalda • Hipertrofia • Barra</p>
        <button class="boton-añadir">+ AÑADIR A MI LISTA</button>
    </div>
</div>

<div class="tarjeta-ejercicio">
    <div class="imagen-tarjeta">
        <img src="imagenes/pressmilitar.webp" alt="Press Militar">
        <span class="etiqueta-dificultad intermedio">INTERMEDIO</span>
    </div>
    <div class="detalles-tarjeta">
        <h3>Press Militar</h3>
        <p>Hombros • Fuerza • Mancuernas</p>
        <button class="boton-añadir">+ AÑADIR A MI LISTA</button>
    </div>
</div>

<div class="tarjeta-ejercicio">
    <div class="imagen-tarjeta">
        <img src="imagenes/zancadas.webp" alt="Zancadas">
        <span class="etiqueta-dificultad principiante">PRINCIPIANTE</span>
    </div>
    <div class="detalles-tarjeta">
        <h3>Zancadas</h3>
        <p>Piernas • Tonificación • Mancuernas</p>
        <button class="boton-añadir">+ AÑADIR A MI LISTA</button>
    </div>
</div>
            </div>
        </div>
    </main>

</body>
</html>