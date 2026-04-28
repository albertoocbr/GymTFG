<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario - DM TRAINERS</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/calendario.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <header class="navegacion">
        <div class="contenedor-nav">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center">
                    <svg width="20" height="20" viewBox="0 0 36 36" fill="white"><path d="M6 16.5h24v3H6z"/><rect x="1" y="15.5" width="6" height="5" rx="2" opacity="0.6"/><rect x="30" y="15.5" width="6" height="5" rx="2" opacity="0.6"/></svg>
                </div>
                <span class="text-xl font-extrabold tracking-tight">DM TRAINERS</span>
            </div>
            <nav>
                <a href="#" class="text-sm font-semibold text-gray-400 hover:text-white">DASHBOARD</a>
            </nav>
        </div>
    </header>

    <main class="contenido">
        
        <div class="text-center mb-10 animar">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-500 text-xs font-bold uppercase mb-4">
                Registro de Actividad
            </span>
            <h1 class="text-4xl font-black mb-2">Tu Consistencia</h1>
            <p class="text-gray-500">Visualiza tus días de entrenamiento y mantén la racha.</p>
        </div>

        <section class="tarjeta-calendario animar">
            <div class="cabecera-calendario">
                <h2 class="text-xl font-bold">Mayo 2026</h2>
                <div class="flex gap-2">
                    <button class="p-2 rounded-lg bg-white/5 hover:bg-white/10"> < </button>
                    <button class="p-2 rounded-lg bg-white/5 hover:bg-white/10"> > </button>
                </div>
            </div>

            <div class="cuadricula-dias">
                <div class="nombre-dia">Lun</div>
                <div class="nombre-dia">Mar</div>
                <div class="nombre-dia">Mié</div>
                <div class="nombre-dia">Jue</div>
                <div class="nombre-dia">Vie</div>
                <div class="nombre-dia">Sáb</div>
                <div class="nombre-dia">Dom</div>
            </div>

            <div class="cuadricula-dias">
                <div class="dia dia-vacio">27</div>
                <div class="dia dia-vacio">28</div>
                <div class="dia dia-vacio">29</div>
                <div class="dia dia-vacio">30</div>
                
                <div class="dia dia-entrenado">1</div>
                <div class="dia">2</div>
                <div class="dia">3</div>
                <div class="dia dia-entrenado">4</div>
                <div class="dia">5</div>
                <div class="dia dia-entrenado">6</div>
                <div class="dia">7</div>
                <div class="dia">8</div>
                <div class="dia">9</div>
                <div class="dia">10</div>
                <div class="dia dia-entrenado">11</div>
                <div class="dia">12</div>
                <div class="dia">13</div>
                <div class="dia dia-entrenado">14</div>
                <div class="dia dia-hoy">15</div>
                <div class="dia">16</div>
                <div class="dia">17</div>
                <div class="dia">31</div>
            </div>
        </section>

        <div class="mt-8 flex justify-center gap-8 animar">
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full bg-blue-500/20 border border-blue-500/40"></div>
                <span class="text-[10px] font-bold text-gray-500 uppercase">Entrenado</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full border border-blue-500"></div>
                <span class="text-[10px] font-bold text-gray-500 uppercase">Hoy</span>
            </div>
        </div>

    </main>

</body>
</html>