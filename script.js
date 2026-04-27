// ============================================================
//  script.js — Lógica del formulario de login (iOS design)
// ============================================================

(() => {
  'use strict';

  const form       = document.getElementById('login-form');
  const emailInput = document.getElementById('email');
  const passInput  = document.getElementById('password');
  const submitBtn  = document.getElementById('submit-btn');
  const btnText    = document.getElementById('btn-text');
  const btnSpinner = document.getElementById('btn-spinner');
  const toast      = document.getElementById('toast');
  const toastMsg   = document.getElementById('toast-msg');
  const toastIcon  = document.getElementById('toast-icon');
  const togglePass = document.getElementById('toggle-pass');
  const eyeOpen    = document.getElementById('eye-open');
  const eyeClosed  = document.getElementById('eye-closed');

  // --- Toggle visibilidad contraseña -----------------------
  togglePass.addEventListener('click', () => {
    const show = passInput.type === 'password';
    passInput.type = show ? 'text' : 'password';
    eyeOpen.classList.toggle('hidden', show);
    eyeClosed.classList.toggle('hidden', !show);
    passInput.focus();
  });

  // --- Limpiar errores al escribir -------------------------
  emailInput.addEventListener('input', () => clearError(emailInput));
  passInput.addEventListener('input',  () => clearError(passInput));

  // --- Submit ----------------------------------------------
  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const email    = emailInput.value.trim();
    const password = passInput.value;

    // Validación ligera antes de ir al servidor
    if (!isValidEmail(email)) {
      showFieldError(emailInput, 'Introduce un email válido.');
      return;
    }
    if (password.length < 6) {
      showFieldError(passInput, 'Mínimo 6 caracteres.');
      return;
    }

    setLoading(true);
    hideToast();

    try {
      const res  = await fetch('login.php', {
        method:  'POST',
        headers: { 'Content-Type': 'application/json' },
        body:    JSON.stringify({ email, password }),
      });
      const data = await res.json();

      if (data.ok) {
        // Estado éxito visual
        submitBtn.classList.add('success-state');
        btnText.textContent  = '¡Listo!';
        btnSpinner.classList.add('hidden');
        showToast(data.msg, 'success');

        setTimeout(() => {
          window.location.href = data.redirect ?? 'dashboard.php';
        }, 1100);
      } else {
        showToast(data.msg, 'error');
        if (res.status === 401) {
          shakeEl(form);
          passInput.value = '';
          passInput.classList.add('error');
          passInput.focus();
        }
        setLoading(false);
      }

    } catch {
      showToast('Sin conexión. Revisa tu red.', 'error');
      setLoading(false);
    }
  });

  // ── Helpers ─────────────────────────────────────────────

  function setLoading(on) {
    submitBtn.disabled = on;
    btnText.textContent = on ? 'Entrando...' : 'Continuar';
    btnSpinner.classList.toggle('hidden', !on);
    submitBtn.style.opacity = on ? '0.75' : '1';
  }

  let toastTimer = null;

  function showToast(msg, type) {
    clearTimeout(toastTimer);
    toast.className = `show ${type === 'success' ? 'toast-success' : 'toast-error'}`;

    // Icono SVG inline según tipo
    toastIcon.innerHTML = type === 'success'
      ? `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"><polyline points="20 6 9 17 4 12"/></svg>`
      : `<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>`;

    toastMsg.textContent = msg;
    toastTimer = setTimeout(hideToast, type === 'success' ? 3500 : 4500);
  }

  function hideToast() {
    toast.className = 'hidden';
  }

  function showFieldError(input, msg) {
    const err = document.getElementById(input.id + '-error');
    if (err) { err.textContent = msg; err.classList.remove('hidden'); }
    input.classList.add('error');
    input.focus();
  }

  function clearError(input) {
    const err = document.getElementById(input.id + '-error');
    if (err) err.classList.add('hidden');
    input.classList.remove('error');
  }

  function shakeEl(el) {
    el.style.animation = 'none';
    el.offsetHeight; // reflow
    el.style.animation = 'shake 0.38s ease-in-out';
    el.addEventListener('animationend', () => { el.style.animation = ''; }, { once: true });
  }

  function isValidEmail(v) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
  }

})();