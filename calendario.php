<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Calendario - DM TRAINERS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <style>
        :root {
            --blue: #007AFF; --bg: #0C0F1A; --surface: #111827;
            --text: #F0F4FF; --text-sub: #6B7A99;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            background-image: radial-gradient(ellipse 70% 55% at 50% -5%, rgba(0, 100, 255, 0.09) 0%, transparent 70%);
            color: var(--text); min-height: 100vh;
        }

        /* Animaciones consistentes */
        @keyframes fadeUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .a1 { animation: fadeUp .45s .04s cubic-bezier(.22,.68,0,1.2) both; }
        .a2 { animation: fadeUp .45s .10s cubic-bezier(.22,.68,0,1.2) both; }
        .a3 { animation: fadeUp .45s .16s cubic-bezier(.22,.68,0,1.2) both; }
        .a4 { animation: fadeUp .45s .22s cubic-bezier(.22,.68,0,1.2) both; }
        .a5 { animation: fadeUp .45s .28s cubic-bezier(.22,.68,0,1.2) both; }
        .a6 { animation: fadeUp .45s .34s cubic-bezier(.22,.68,0,1.2) both; }
        .a7 { animation: fadeUp .45s .40s cubic-bezier(.22,.68,0,1.2) both; }

        .glass-nav { background: rgba(17, 24, 39, 0.7); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255, 255, 255, 0.06); }
        
        .calendar-card {
            background: var(--surface);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 30px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }

        /* Estilo de los días */
        .day-node {
            aspect-ratio: 1 / 1;
            display: flex; align-items: center; justify-content: center;
            border-radius: 12px; font-weight: 600; font-size: 14px;
            transition: all 0.2s; cursor: pointer;
            border: 1px solid transparent;
        }
        .day-node:hover { background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1); }
        
        /* Día entrenado (Estilo Hevy) */
        .day-trained {
            background: rgba(0, 122, 255, 0.15);
            color: var(--blue);
            border-color: rgba(0, 122, 255, 0.3);
            position: relative;
        }
        .day-trained::after {
            content: ''; position: absolute; bottom: 6px; width: 4px; height: 4px;
            background: var(--blue); border-radius: 50%;
        }

        .day-today { border-color: var(--blue); color: var(--text); }
    </style>
</head>
<body class="antialiased">

    <header class="glass-nav fixed top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="home.php" class="flex items-center gap-3 a1">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#1A8FFF] to-[#0055CC] flex items-center justify-center">
                    <svg width="20" height="20" viewBox="0 0 36 36" fill="none"><rect x="1" y="15.5" width="6" height="5" rx="2" fill="white" fill-opacity="0.6"/><rect x="2.5" y="12" width="3.5" height="12" rx="1.75" fill="white"/><rect x="29" y="15.5" width="6" height="5" rx="2" fill="white" fill-opacity="0.6"/><rect x="30" y="12" width="3.5" height="12" rx="1.75" fill="white"/><rect x="6" y="16.5" width="24" height="3" rx="1.5" fill="white"/></svg>
                </div>
                <span class="text-xl font-extrabold tracking-tight">DM TRAINERS</span>
            </a>
            <nav class="a2">
                <a href="home.php" class="text-sm font-semibold text-[#6B7A99] hover:text-white transition-colors">DASHBOARD</a>
            </nav>
        </div>
    </header>

    <main class="pt-32 pb-20 px-6 max-w-4xl mx-auto">
        
        <div class="text-center mb-12">
            <div class="a2 inline-flex items-center py-1.5 px-4 rounded-full bg-blue-500/10 border border-blue-500/20 text-[#007AFF] text-xs font-bold uppercase tracking-wider mb-4">
                 Registro de Actividad
            </div>
            <h1 class="a3 text-4xl font-black tracking-tight mb-2">Tu Consistencia</h1>
            <p class="a4 text-[#6B7A99]">Visualiza tus días de entrenamiento y mantén la racha.</p>
        </div>

        <div class="calendar-card p-6 md:p-10 a5">
            
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-xl font-bold">Mayo 2026</h2>
                <div class="flex gap-2">
                    <button class="p-2 rounded-lg bg-white/5 hover:bg-white/10 transition-colors text-[#6B7A99]">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button class="p-2 rounded-lg bg-white/5 hover:bg-white/10 transition-colors text-[#6B7A99]">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-7 gap-2 mb-4 text-center a6">
                <div class="text-[10px] font-bold text-[#6B7A99] uppercase tracking-widest">Lun</div>
                <div class="text-[10px] font-bold text-[#6B7A99] uppercase tracking-widest">Mar</div>
                <div class="text-[10px] font-bold text-[#6B7A99] uppercase tracking-widest">Mié</div>
                <div class="text-[10px] font-bold text-[#6B7A99] uppercase tracking-widest">Jue</div>
                <div class="text-[10px] font-bold text-[#6B7A99] uppercase tracking-widest">Vie</div>
                <div class="text-[10px] font-bold text-[#6B7A99] uppercase tracking-widest">Sáb</div>
                <div class="text-[10px] font-bold text-[#6B7A99] uppercase tracking-widest">Dom</div>
            </div>

            <div class="grid grid-cols-7 gap-2 a7">
                <div class="day-node text-white/10">27</div>
                <div class="day-node text-white/10">28</div>
                <div class="day-node text-white/10">29</div>
                <div class="day-node text-white/10">30</div>
                
                <div class="day-node day-trained">1</div>
                <div class="day-node">2</div>
                <div class="day-node">3</div>
                <div class="day-node day-trained">4</div>
                <div class="day-node">5</div>
                <div class="day-node day-trained">6</div>
                <div class="day-node">7</div>
                <div class="day-node">8</div>
                <div class="day-node">9</div>
                <div class="day-node">10</div>
                <div class="day-node day-trained">11</div>
                <div class="day-node">12</div>
                <div class="day-node">13</div>
                <div class="day-node day-trained">14</div>
                <div class="day-node day-today">15</div> <div class="day-node">16</div>
                <div class="day-node">17</div>
                <div class="day-node">18</div>
                <div class="day-node">19</div>
                <div class="day-node">20</div>
                <div class="day-node">21</div>
                <div class="day-node">22</div>
                <div class="day-node">23</div>
                <div class="day-node">24</div>
                <div class="day-node">25</div>
                <div class="day-node text-white/10">1</div>
                <div class="day-node text-white/10">2</div>
                <div class="day-node text-white/10">3</div>
            </div>
        </div>

        <div class="mt-8 flex justify-center gap-8 a7">
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full bg-blue-500/20 border border-blue-500/40"></div>
                <span class="text-xs font-bold text-[#6B7A99] uppercase tracking-wide">Día Entrenado</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full border border-blue-500"></div>
                <span class="text-xs font-bold text-[#6B7A99] uppercase tracking-wide">Hoy</span>
            </div>
        </div>

    </main>

</body>
</html>