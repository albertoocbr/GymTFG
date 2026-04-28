<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrición - DM TRAINERS</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="nutricion.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <header class="navegacion">
        <div class="contenedor-nav">
            <a href="home.html" class="flex items-center gap-3 animar-subida">
                <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center shadow-lg">
                    <svg width="20" height="20" viewBox="0 0 36 36" fill="white"><path d="M6 16.5h24v3H6z"/><rect x="1" y="15.5" width="6" height="5" rx="2" opacity="0.6"/><rect x="30" y="15.5" width="6" height="5" rx="2" opacity="0.6"/></svg>
                </div>
                <span class="text-xl font-extrabold tracking-tight">DM TRAINERS</span>
            </a>
            <nav class="animar-subida retraso-1">
                <a href="home.php" class="text-sm font-semibold text-gray-400 hover:text-white">VOLVER</a>
            </nav>
        </div>
    </header>

    <main class="seccion-nutricion">
        
        <div class="flex-1 space-y-6">
            <div class="animar-subida retraso-1 inline-flex items-center py-1.5 px-4 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-500 text-xs font-bold uppercase tracking-wider">
                Nutrición Inteligente
            </div>
            <h1 class="animar-subida retraso-2 text-5xl md:text-6xl font-black leading-tight tracking-tight">
                El combustible de tu <span class="text-blue-500">vida.</span>
            </h1>
            <p class="animar-subida retraso-3 text-gray-500 text-lg leading-relaxed max-w-lg">
                No se trata de comer menos, sino de comer mejor. Cuéntanos tus metas y nos pondremos en contacto contigo lo antes posible.
            </p>
        </div>

        <div class="flex-1 w-full max-w-xl animar-subida retraso-3">
            <div class="tarjeta-formulario">
                <form id="formulario-nutricion" class="space-y-5">
                    <div>
                        <label class="etiqueta-pequeña">Nombre completo</label>
                        <input type="text" placeholder="Ej. Juan Pérez" required class="campo-entrada">
                    </div>

                    <div>
                        <label class="etiqueta-pequeña">Email de contacto</label>
                        <input type="email" placeholder="tu@email.com" required class="campo-entrada">
                    </div>

                    <div>
                        <label class="etiqueta-pequeña">Tu objetivo principal</label>
                        <select class="campo-entrada">
                            <option value="perder_peso">Perder peso / Definición</option>
                            <option value="ganar_musculo">Ganar masa muscular</option>
                            <option value="rendimiento">Mejorar rendimiento</option>
                            <option value="salud">Salud general / Bienestar</option>
                        </select>
                    </div>

                    <div>
                        <label class="etiqueta-pequeña">¿Alguna duda o detalle?</label>
                        <textarea rows="3" placeholder="Cuéntanos brevemente..." class="campo-entrada resize-none"></textarea>
                    </div>

                    <button type="submit" class="boton-enviar">
                        Enviar solicitud de contacto
                    </button>
                </form>
            </div>
        </div>

    </main>

    <script src="script_nutricion.js"></script>
</body>
</html>