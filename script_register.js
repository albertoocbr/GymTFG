document.getElementById('register-form').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const btn = document.getElementById('submit-btn');
    const formData = {
        nombre: document.getElementById('nombre').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value
    };

    btn.disabled = true;
    btn.innerText = 'Creando cuenta...';

    try {
        const response = await fetch('register_action.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formData)
        });

        const result = await response.json();

        if (result.ok) {
            alert(result.msg);
            window.location.href = 'index.php'; // Redirigir al login
        } else {
            alert(result.msg);
            btn.disabled = false;
            btn.innerText = 'Crear cuenta gratuita';
        }
    } catch (error) {
        alert('Error de conexión.');
        btn.disabled = false;
        btn.innerText = 'Crear cuenta gratuita';
    }
});