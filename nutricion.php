<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Nutrición - DM TRAINERS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <style>
        :root {
            --blue: #007AFF; --bg: #0C0F1A; --surface: #111827;
            --input-bg: #1A2035; --text: #F0F4FF; --text-sub: #6B7A99;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            background-image: radial-gradient(ellipse 70% 55% at 50% -5%, rgba(0, 100, 255, 0.09) 0%, transparent 70%);
            color: var(--text); min-height: 100vh;
        }

        /* Reutilizamos tus animaciones exactas */
        @keyframes fadeUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .a1 { animation: fadeUp .45s .04s cubic-bezier(.22,.68,0,1.2) both; }
        .a2 { animation: fadeUp .45s .10s cubic-bezier(.22,.68,0,1.2) both; }
        .a3 { animation: fadeUp .45s .16s cubic-bezier(.22,.68,0,1.2) both; }
        .a4 { animation: fadeUp .45s .22s cubic-bezier(.22,.68,0,1.2) both; }
        .a5 { animation: fadeUp .45s .28s cubic-bezier(.22,.68,0,1.2) both; }
        .a6 { animation: fadeUp .45s .34s cubic-bezier(.22,.68,0,1.2) both; }

        .glass-nav { background: rgba(17, 24, 39, 0.7); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255, 255, 255, 0.06); }
        
        .form-card {
            background: var(--surface);
            border: 1px solid rgba(0, 122, 255, 0.12);
            border-radius: 26px;
            box-shadow: 0 24px 48px rgba(0,0,0,0.4);
        }

        .ios-input {
            width: 100%; background: var(--input-bg); border: 1px solid rgba(255,255,255,0.06);
            border-radius: 14px; padding: 14px 16px; color: var(--text); transition: all 0.2s;
        }
        .ios-input:focus { outline: none; border-color: var(--blue); background: #1E2A45; }
        
        .btn-primary {
            background: var(--blue); color: #fff; border-radius: 14px;
            padding: 16px; font-weight: 700; transition: all 0.15s;
        }
        .btn-primary:hover { background: #0066D6; transform: translateY(-1px); box-shadow: 0 8px 20px rgba(0,122,255,0.3); }
    </style>
</head>
<body>

    <header class="glass-nav fixed top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="home.html" class="flex items-center gap-3 a1">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#1A8FFF] to-[#0055CC] flex items-center justify-center shadow-lg">
                    <svg width="20" height="20" viewBox="0 0 36 36" fill="none"><rect x="1" y="15.5" width="6" height="5" rx="2" fill="white" fill-opacity="0.6"/><rect x="2.5" y="12" width="3.5" height="12" rx="1.75" fill="white"/><rect x="29" y="15.5" width="6" height="5" rx="2" fill="white" fill-opacity="0.6"/><rect x="30" y="12" width="3.5" height="12" rx="1.75" fill="white"/><rect x="6" y="16.5" width="24" height="3" rx="1.5" fill="white"/></svg>
                </div>
                <span class="text-xl font-extrabold tracking-tight">DM TRAINERS</span>
            </a>
            <nav class="a2">
                <a href="home.php" class="text-sm font-semibold text-[#6B7A99] hover:text-white transition-colors">VOLVER</a>
            </nav>
        </div>
    </header>

    <main class="pt-32 pb-20 px-6 max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12">
        
        <div class="flex-1 space-y-6">
            <div class="a2 inline-flex items-center py-1.5 px-4 rounded-full bg-blue-500/10 border border-blue-500/20 text-[#007AFF] text-xs font-bold uppercase tracking-wider">
                Nutrición Inteligente
            </div>
            <h1 class="a3 text-5xl md:text-6xl font-black leading-tight tracking-tight">
                El combustible de tu <span class="text-[#007AFF]">vida.</span>
            </h1>
            <p class="a4 text-[#6B7A99] text-lg leading-relaxed max-w-lg">
                No se trata de comer menos, sino de comer mejor. Cuéntanos tus metas y nos pondremos en contacto contigo en la mayor brevedad posible.
            </p>
        </div>

        <div class="flex-1 w-full max-w-xl a5">
            <div class="form-card p-8 md:p-10">
                <form id="nutricion-form" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-[#6B7A99] uppercase mb-2 ml-1">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required class="ios-input">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#6B7A99] uppercase mb-2 ml-1">Email</label>
                        <input type="email" id="email" name="email" placeholder="tu@email.com" required class="ios-input">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#6B7A99] uppercase mb-2 ml-1">Tu objetivo principal</label>
                        <select id="objetivo" name="objetivo" class="ios-input">
                            <option value="perder_peso">Perder peso / Definición</option>
                            <option value="ganar_musculo">Ganar masa muscular</option>
                            <option value="rendimiento">Mejorar rendimiento</option>
                            <option value="salud">Salud general / Bienestar</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#6B7A99] uppercase mb-2 ml-1">¿Alguna duda o detalle?</label>
                        <textarea id="mensaje" name="mensaje" rows="3" placeholder="Cuéntanos brevemente..." class="ios-input resize-none"></textarea>
                    </div>
                    <button type="submit" id="submit-btn" class="w-full btn-primary a6 mt-4">
                        Enviar solicitud de contacto
                    </button>
                </form>
            </div>
        </div>
    </main>

    <script src="script_nutricion.js"></script>
</body>
</html>